<?php
// app/Http/Controllers/OrderController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class OrderController extends Controller
{
    public function saveOrder(Request $request)
    {
        $request->validate([
            'order_id' => 'required',
            'judul_buku' => 'required',
            'jumlah' => 'required|integer',
            'nama_penerima' => 'required',
            'whatsapp' => 'required',
            'total_harga' => 'required|numeric'
        ]);

        // Simpan ke database (model Order)
        $order = new \App\Models\Order();
        $order->order_id = $request->order_id;
        $order->judul_buku = $request->judul_buku;
        $order->jumlah = $request->jumlah;
        $order->nama_penerima = $request->nama_penerima;
        $order->whatsapp = $request->whatsapp;
        $order->provinsi = $request->provinsi;
        $order->kota = $request->kota;
        $order->alamat_lengkap = $request->alamat_lengkap;
        $order->kode_pos = $request->kode_pos;
        $order->jarak_km = $request->jarak_km;
        $order->subtotal_buku = $request->subtotal_buku;
        $order->ongkir = $request->ongkir;
        $order->total_harga = $request->total_harga;
        $order->status = 'pending';
        $order->save();

        return response()->json(['success' => true, 'order_id' => $order->order_id]);
    }

    public function sendTelegramOrder(Request $request)
    {
        $text = $request->message;

        try {
            $response = Http::post("https://api.telegram.org/bot".env('TELEGRAM_BOT_TOKEN')."/sendMessage", [
                'chat_id' => env('TELEGRAM_OSIM_ID'),
                'text' => $text,
                'parse_mode' => 'Markdown'
            ]);

            if ($response->successful()) {
                // Update status order
                \App\Models\Order::where('order_id', $request->order_id)
                    ->update(['telegram_notified' => true]);
                    
                return response()->json(['success' => true]);
            }
            
        } catch (\Exception $e) {
            \Log::error('Telegram error: '.$e->getMessage());
        }

        return response()->json(['success' => false]);
    }
    public function sendTelegramToAdmin(Request $request)
    {
        $botToken = env('TELEGRAM_BOT_TOKEN');
        $chatId = env('TELEGRAM_OSIM_ID'); 
        
        $text = $request->message;
        
        // Tambahkan inline keyboard untuk admin
        $keyboard = [
            'inline_keyboard' => [
                [
                    [
                        'text' => '✅ Konfirmasi Pembayaran',
                        'callback_data' => 'confirm_' . $request->order_id
                    ],
                    [
                        'text' => '📞 Hubungi Pembeli',
                        'url' => $this->generateWhatsAppUrl($request->customer_data, $request->order_id)
                    ]
                ],
                [
                    [
                        'text' => '📦 Update Pengiriman',
                        'callback_data' => 'ship_' . $request->order_id
                    ],
                    [
                        'text' => '❌ Batalkan Pesanan',
                        'callback_data' => 'cancel_' . $request->order_id
                    ]
                ]
            ]
        ];
        
        try {
            $response = Http::post("https://api.telegram.org/bot{$botToken}/sendMessage", [
                'chat_id' => $chatId,
                'text' => $text,
                'parse_mode' => 'Markdown',
                'reply_markup' => json_encode($keyboard)
            ]);
            
            // Simpan message_id untuk update nanti
            if ($response->successful()) {
                $messageData = $response->json();
                
                // Simpan ke database
                \App\Models\Order::where('order_id', $request->order_id)
                    ->update([
                        'telegram_message_id' => $messageData['result']['message_id'],
                        'telegram_notified' => true
                    ]);
                    
                return response()->json(['success' => true]);
            }
            
        } catch (\Exception $e) {
            \Log::error('Telegram admin error: ' . $e->getMessage());
        }
        
        return response()->json(['success' => false]);
    }
    private function generateWhatsAppUrl($customerData, $orderId)
{
    $message = "Assalamu'alaikum " . $customerData['nama_penerima'] . ",\n\n" .
              "Terima kasih telah memesan buku *" . $customerData['judul_buku'] . "* dari OSIM MA ZAHA 1.\n\n" .
              "📋 *Detail Pesanan:*\n" .
              "• Kode: " . $orderId . "\n" .
              "• Buku: " . $customerData['judul_buku'] . "\n" .
              "• Jumlah: " . $customerData['jumlah'] . " eksemplar\n" .
              "• Total : Rp " . number_format($customerData['subtotal_buku'], 0, ',', '.') . "\n\n" .
              "‼️ *Pembayaran ongkir hanya bisa melalui COD langsung ke kurir* ‼️\n\n" .
              "💰 *Untuk melanjutkan proses, mohon kirimkan:*\n" .
              "1. Bukti transfer (screenshot/photo)\n" .
              "2. Ke WhatsApp ini atau Telegram @najwannada\n\n" .
              "✅ Setelah bukti dikirim, pesanan akan segera diproses.\n\n" .
              "Terima kasih,\n" .
              "Admin OSIM MA ZAHA 1";
    
    return 'https://wa.me/' . $customerData['whatsapp'] . '?text=' . urlencode($message);
}
    // Webhook untuk menerima konfirmasi dari pembeli
    public function handleTelegramWebhook(Request $request)
    {
        $update = $request->all();
        
        // Cek jika ada message
        if (isset($update['message'])) {
            $message = $update['message'];
            $chatId = $message['chat']['id'];
            $text = $message['text'] ?? '';
            
            // Handle command /start
            if (strpos($text, '/start') === 0) {
                $parts = explode(' ', $text);
                $orderId = $parts[1] ?? null;
                
                if ($orderId) {
                    $this->handleCustomerConfirmation($chatId, $orderId);
                } else {
                    $this->sendTelegramMessage($chatId, "Halo! Silakan gunakan perintah: /start KODE_PESANAN");
                }
            }
            
            // Handle command /konfirmasi
            elseif (strpos($text, '/konfirmasi') === 0) {
                $parts = explode(' ', $text);
                $orderId = $parts[1] ?? null;
                
                if ($orderId) {
                    $this->handlePaymentConfirmation($chatId, $orderId);
                }
            }
            
            // Handle foto (bukti transfer)
            elseif (isset($message['photo'])) {
                $this->handlePhotoUpload($chatId, $message['photo']);
            }
        }
        
        // Handle callback query (tombol inline)
        elseif (isset($update['callback_query'])) {
            $this->handleCallbackQuery($update['callback_query']);
        }
        
        return response()->json(['ok' => true]);
    }
    
    private function handleCustomerConfirmation($chatId, $orderId)
    {
        $order = \App\Models\Order::where('order_id', $orderId)->first();
        
        if (!$order) {
            $message = "❌ Pesanan dengan kode *{$orderId}* tidak ditemukan.";
            $this->sendTelegramMessage($chatId, $message);
            return;
        }
        
        $message = "✅ *PESANAN DITEMUKAN!*
        
📋 *Detail Pesanan:*
Kode: `{$order->order_id}`
Nama: {$order->nama_penerima}
Buku: {$order->judul_buku}
Jumlah: {$order->jumlah} eksemplar
Total: Rp " . number_format($order->total_harga, 0, ',', '.') . "

📝 *Untuk konfirmasi pembayaran:*
1. Kirim perintah: `/konfirmasi {$orderId}`
2. Upload bukti transfer (foto/screenshot)
3. Tunggu verifikasi dari admin

⏰ *Status saat ini:* " . strtoupper($order->status);
        
        $keyboard = [
            'inline_keyboard' => [
                [
                    [
                        'text' => '📤 Konfirmasi Pembayaran',
                        'callback_data' => 'customer_confirm_' . $orderId
                    ]
                ]
            ]
        ];
        
        $this->sendTelegramMessage($chatId, $message, $keyboard);
    }
    
    private function handlePaymentConfirmation($chatId, $orderId)
    {
        $order = \App\Models\Order::where('order_id', $orderId)->first();
        
        $message = "💳 *KONFIRMASI PEMBAYARAN*
        
Silakan upload bukti transfer untuk pesanan:
`{$orderId}`

📤 *Cara upload:*
1. Klik icon 📎 (attachment)
2. Pilih Photo
3. Pilih gambar bukti transfer
4. Kirim

⚠️ *Pastikan bukti transfer menunjukkan:*
✓ Nama penerima: MA ZAINUL HASAN 1 OSIM
✓ Jumlah: Rp " . number_format($order->total_harga, 0, ',', '.') . "
✓ Tanggal transfer hari ini";
        
        $this->sendTelegramMessage($chatId, $message);
        
        // Update status
        $order->update([
            'telegram_chat_id' => $chatId,
            'status' => 'waiting_payment_proof'
        ]);
    }
    
    private function handlePhotoUpload($chatId, $photos)
    {
        $order = \App\Models\Order::where('telegram_chat_id', $chatId)
                    ->where('status', 'waiting_payment_proof')
                    ->first();
        
        if ($order) {
            // Dapatkan file_id foto terbesar
            $photo = end($photos);
            $fileId = $photo['file_id'];
            
            // Simpan file_id ke database
            $order->update([
                'bukti_transfer' => $fileId,
                'status' => 'payment_proof_received'
            ]);
            
            // Konfirmasi ke pembeli
            $message = "✅ *BUKTI TRANSFER DITERIMA!*
            
Terima kasih telah mengirim bukti transfer untuk pesanan:
`{$order->order_id}`

📋 *Pesanan Anda sedang diverifikasi oleh admin.*
⏰ Estimasi waktu verifikasi: 1-2 jam kerja.

Anda akan mendapat notifikasi ketika:
✓ Pembayaran dikonfirmasi
✓ Pesanan dikirim
✓ Resi pengiriman tersedia

Terima kasih atas kesabaran Anda! 🙏";
            
            $this->sendTelegramMessage($chatId, $message);
            
            // Notifikasi ke admin
            $this->notifyAdminAboutPaymentProof($order, $fileId);
        }
    }
    
    private function notifyAdminAboutPaymentProof($order, $fileId)
    {
        $botToken = env('TELEGRAM_BOT_TOKEN');
        $adminChatId = env('TELEGRAM_OSIM_ID');
        
        $message = "📸 *BUKTI TRANSFER BARU!*
        
📦 Pesanan: `{$order->order_id}`
👤 Pembeli: {$order->nama_penerima}
💰 Jumlah: Rp " . number_format($order->total_harga, 0, ',', '.') . "

📋 *TINDAKAN:*
1. Cek bukti transfer di bawah
2. Verifikasi ke bank
3. Konfirmasi jika valid";
        
        // Kirim pesan dulu
        $response = Http::post("https://api.telegram.org/bot{$botToken}/sendMessage", [
            'chat_id' => $adminChatId,
            'text' => $message,
            'parse_mode' => 'Markdown'
        ]);
        
        // Kirim foto bukti transfer
        Http::post("https://api.telegram.org/bot{$botToken}/sendPhoto", [
            'chat_id' => $adminChatId,
            'photo' => $fileId,
            'caption' => "Bukti transfer untuk pesanan {$order->order_id}"
        ]);
    }
    
    private function sendTelegramMessage($chatId, $text, $keyboard = null)
    {
        $botToken = env('TELEGRAM_BOT_TOKEN');
        
        $data = [
            'chat_id' => $chatId,
            'text' => $text,
            'parse_mode' => 'Markdown'
        ];
        
        if ($keyboard) {
            $data['reply_markup'] = json_encode($keyboard);
        }
        
        try {
            Http::post("https://api.telegram.org/bot{$botToken}/sendMessage", $data);
        } catch (\Exception $e) {
            \Log::error('Telegram send error: ' . $e->getMessage());
        }
    }

}