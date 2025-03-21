<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PrestasiController extends Controller
{
public function index()
{
    $rows=\App\Models\Prestasi::orderBy('created_at','desc')->get();
    return view('prestasi.index',['rows'=>$rows]);
}
public function create()
{
    return view('prestasi.create');
}
public function store(request $request)
{
    $file = $request->file('files');
        $ekstensi = $file->getClientOriginalExtension();
        $tanggal = str_replace(['-',':',''],'',\Carbon\Carbon::now());
        $namaFile = 'winner-'.$tanggal.'.'.$ekstensi;
        $file->move(public_path('img/prestasi'), $namaFile);
        \App\Models\Prestasi::create([
            'title'=>$request['title'],
            'file'=>$namaFile,
            'tahun'=>$request['tahun'],
            'berita'=>$request['berita'],
            'created_at'=>$request['created_at'],
        ]);
        return redirect()->to('/ekstra')->with('success','berhasil');
}   
public function edit($id){
    $row = \App\Models\Prestasi::find($id);

    if (!$row) {
        return redirect()->route('ekstra.index')->with('error', 'Data tidak ditemukan.');
    }

    return view('prestasi.update', compact('row'));
}

    public function update(request $request, $id)
    {  
             if($request->hasFile('files')) {
            $file = $request->file('files');
            $ekstensi = $file->getClientOriginalExtension();
            $tanggal = str_replace(['-',':',''],'',\Carbon\Carbon::now());
            $namaFile = 'winner-'.$tanggal.'.'.$ekstensi;
            $file->move(public_path('img/prestasi'), $namaFile);
            $data['files'] = $namaFile;
           } else{
            $foto=\App\Models\Prestasi::where('id',$id)->first();
            $namaFile=$foto['file'];
           }
           $data=[

               'title'=>$request['title'],
               'file'=>$namaFile,
               'tahun'=>$request['tahun'],
               'berita'=>$request['berita'],
               'created_at'=>$request['created_at'],
           ];
           \App\Models\Prestasi::where('id', $id)->update($data);
           
           return redirect()->to('/ekstra')->with('success','berhasil');

    }
    
}