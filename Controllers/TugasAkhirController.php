<?php

namespace App\Http\Controllers;

use App\Models\TugasAkhir;
use Illuminate\Http\Request;

class TugasAkhirController extends Controller
{
    public function index(request $request, $id=null)
    {
        $query = \App\Models\TugasAkhir::query();
    if ($request->filled('title')) {
        $query->where('title', 'like', '%'.$request->title.'%');
    }
    $allTugasAkhir = $query->orderBy('tahun', 'desc')->orderBy('jurusan')
    ->orderBy('name')->paginate(18);
        $featuredTugasAkhir = $id ? 
            TugasAkhir::findOrFail($id) : 
            $allTugasAkhir->first();
    $jurusan=\App\Models\TugasAkhir::distinct()->pluck('jurusan')->toArray();

        return view('tugasakhir.index', [
            'featuredTugasAkhir' => $featuredTugasAkhir,
            'allTugasAkhir' => $allTugasAkhir,
            'jurusan'=>$jurusan
        ]);
    }
    public function create(){
        return view('tugasakhir.create');
    }
    public function store(Request $request){
        $file = $request->file('files');
        $ekstensi = $file->getClientOriginalExtension();
        $tanggal = str_replace(['-',':',''],'',\Carbon\Carbon::now());
        $namaFile = 'ta-'.$tanggal.'.'.$ekstensi;
        $file->move(public_path('img/prodistik/ta'), $namaFile);
        \App\Models\TugasAkhir::create([
            'title'=>$request['title'],
            'file'=>$namaFile,
            'link'=>$request['link'] ?? null,
            'name'=>$request['name'],
            'jurusan'=>$request['jurusan'],
            'tahun'=>$request['tahun'],
            'deskripsi'=>$request['deskripsi'] ?? "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, molestias!",
        ]);
        return redirect()->to('/tugas-akhir')->with('success','berhasil');
    }
}