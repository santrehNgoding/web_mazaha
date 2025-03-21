<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita; 
class BeritaController extends Controller
{

    public function index()
    {
        $beritas = Berita::orderBy('created_at', 'desc')->get();
        return view('berita', compact('beritas'));
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


