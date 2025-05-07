<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita; 
class BeritaController extends Controller
{

    public function index(Request $request)
    {
        $query = Berita::query();
    
        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('judul', 'like', '%' . $request->search . '%')
                  ->orWhere('date', 'like', '%' . $request->search . '%');
            });
            
        }
    
        $beritas = Berita::orderBy('created_at', 'desc')->get();
        return view('berita.index', compact('beritas'));
    }
    public function cari(Request $request)
    {
        $query = $request->input('query');

        // Simulasi hasil pencarian
        // Nanti bisa kamu ganti dengan query dari model Berita
        return view('berita.hasil', compact('query'));
    }
    public function prestasi()
    {
        $beritas = Berita::orderBy('created_at', 'desc')->get();
        return view('prestasi', compact('beritas'));
    }
    public function index2()
    {
        $beritas = berita::latest()->paginate(9);
        return view('berita', compact('beritas'));
    }

    public function show($id)
    {
        $berita = berita::findOrFail($id);
        return view('beritashow', compact('berita'));
    }
    

public function create()
{
    return view('admin.berita.create');
}

public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'judul' => 'required|max:255',
            'isi'   => 'required',
            'gambar'=> 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date'=> 'required',
        ]);

        // Proses upload gambar jika ada
        $gambarName = null;
        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar');
            // Buat nama file yang unik
            $gambarName = time().'_'.$gambar->getClientOriginalName();
            // Simpan file ke folder public/images/berita
            $gambar->move(public_path('images/berita'), $gambarName);
        }

        // Simpan data ke database
        Berita::create([
            'judul' => $request->judul,
            'isi'   => $request->isi,
            'date'   => $request->date,
            'gambar'=> $gambarName,
        ]);

        return redirect()->route('berita.index')->with('success', 'Berita berhasil ditambahkan!');
    }
    public function destroy($id)
{
    $berita = Berita::findOrFail($id);

    // Hapus file gambar jika ada
    if ($berita->gambar && file_exists(public_path('images/berita/'.$berita->gambar))) {
        unlink(public_path('images/berita/'.$berita->gambar));
    }

    $berita->delete();

    return redirect()->route('berita.index')->with('success', 'Berita berhasil dihapus!');
}
public function update(Request $request, $id)
{
    $request->validate([
        'judul' => 'required|max:255',
        'isi'   => 'required',
        'date'   => 'required',
        'gambar'=> 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $berita = Berita::findOrFail($id);

    // Update gambar jika ada
    if ($request->hasFile('gambar')) {
        $gambar = $request->file('gambar');
        $gambarName = time().'_'.$gambar->getClientOriginalName();
        $gambar->move(public_path('images/berita'), $gambarName);

        // Hapus gambar lama jika ada
        if ($berita->gambar && file_exists(public_path('images/berita/'.$berita->gambar))) {
            unlink(public_path('images/berita/'.$berita->gambar));
        }

        $berita->gambar = $gambarName;
    }

    $berita->judul = $request->judul;
    $berita->isi   = $request->isi;
    $berita->date   = $request->date;
    $berita->save();

    return redirect()->route('berita.index')->with('success', 'Berita berhasil diperbarui!');
}
public function edit($id)
{
    $berita = Berita::findOrFail($id);
    return view('admin.berita.edit', compact('berita'));
}

}

// Fungsi edit, update, dan destroy serupa...


