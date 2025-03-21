<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class GaleriController extends Controller
{
    public function index(request $request){
        $kategori=\App\Models\Galeri::distinct()->pluck('Kategori')->toArray();
        if ($request->filled('kategori')) {
            $kategori = array_filter($kategori, function ($item) use ($request) {
                return stripos($item, $request->kategori) !== false;
            });
        }
        sort($kategori);
        return view('galeri.folder',['rows'=>$kategori]);
    }
    public function show($kategori){
        $rows=\App\Models\Galeri::where('kategori',$kategori)->get();
        
        return view('galeri.show',['rows'=>$rows]);
    }
    public function create(){
        return view('galeri.create');
    }
    public function add(){
        return view('galeri.add');
    }
    public function storeFolder(request $request){
            if ($request->hasFile('files')) {
                foreach ($request->file('files') as $file) {
                    $ekstensi = $file->getClientOriginalExtension();
                    $tanggal = str_replace(['-', ':', ''], '', \Carbon\Carbon::now());
                    $namaFile = 'img-' . $tanggal . '-' . uniqid() . '.' . $ekstensi;
        
                    $file->move(public_path('img/galeri'), $namaFile);
        
                    \App\Models\Galeri::create([
                        'file' => $namaFile,
                        'title' => $request['title'],
                        'kategori' => $request['kategori'],
                        'keterangan'=>$request['keterangan']
                    ]);
                }
            }
        
            return redirect()->route('galeri.index')->with('success', 'File berhasil diupload!');
        }
        
    public function store(request $request){
        $file = $request->file('files');
        $ekstensi = $file->getClientOriginalExtension();
        $tanggal = str_replace(['-',':',''],'',\Carbon\Carbon::now());
        $namaFile = 'img-'.$tanggal.'.'.$ekstensi;
        $file->move(public_path('img/galeri'), $namaFile);
        \App\Models\Galeri::create([
            'file'=>$namaFile,
            'title'=>$request['title'] ?? $request['kategori'],
            'kategori'=>$request['kategori'],
            'keterangan'=>$request['keterangan']
        ]);
        return redirect()->to('/galeri')->with('success','berhasil');
    }
    public function destroy($id)
    {
        $model = \App\Models\Galeri::where('id', $id);
        $row =$model->first();
        $kategori=$row->kategori;
        \Illuminate\Support\Facades\File::delete(public_path('img/galeri/'.$row->files));
        $model->delete();
        return redirect()->route('galeri.show', $kategori)->with('success', 'Data berhasil dihapus');
    }
    public function delete($kategori)
    {
        $models = \App\Models\Galeri::where('kategori', $kategori)->get();
    
        if ($models->isEmpty()) {
            return redirect()->route('galeri.index')->with('error', 'Kategori tidak ditemukan.');
        }
    
        foreach ($models as $model) {
            $filePath = public_path('img/galeri/' . $model->files); // Tambah "/"
            
            if (\Illuminate\Support\Facades\File::exists($filePath)) {
                \Illuminate\Support\Facades\File::delete($filePath);
            }
    
            $model->delete();
        }
    
        return redirect()->route('galeri.index')->with('success', 'Semua data dalam kategori berhasil dihapus');
    }
    

}