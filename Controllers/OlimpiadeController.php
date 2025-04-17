<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
class OlimpiadeController extends Controller
{
public function index()
{
    $rows=\App\Models\PrestasiOlimpiade::orderBy('created_at','desc')->get();
    $teachers=\App\Models\GuruOlimpiade::all();
    return view('olimpiade.index',['rows'=>$rows,'teachers'=>$teachers]);
}
public function create()
{
    return view('olimpiade.create');
}
public function store(request $request)
{
    $file = $request->file('files');
        $ekstensi = $file->getClientOriginalExtension();
        $tanggal = str_replace(['-',':',''],'',\Carbon\Carbon::now());
        $namaFile = 'winner-'.$tanggal.'.'.$ekstensi;
        $file->move(public_path('img/olimpiade'), $namaFile);
        \App\Models\PrestasiOlimpiade::create([
            'title'=>$request['title'],
            'tingkat'=>$request['tingkat'],
            'jumlah'=>$request['jumlah'] ?? 1,
            'file'=>$namaFile,
            'tahun'=>$request['tahun'],
            'berita'=>$request['berita'],
            'created_at'=>$request['created_at'],
        ]);
        return redirect()->to('/olimpiade')->with('success','berhasil');
}   
public function edit($id){
    $row = \App\Models\PrestasiOlimpiade::find($id);

    if (!$row) {
        return redirect()->route('olimpiade.index')->with('error', 'Data tidak ditemukan.');
    }

    return view('olimpiade.update', compact('row'));
}

    public function update(request $request, $id)
    {  
             if($request->hasFile('files')) {
            $file = $request->file('files');
            $ekstensi = $file->getClientOriginalExtension();
            $tanggal = str_replace(['-',':',''],'',\Carbon\Carbon::now());
            $namaFile = 'winner-'.$tanggal.'.'.$ekstensi;
            $file->move(public_path('img/olimpiade'), $namaFile);
            $data['files'] = $namaFile;
           } else{
            $foto=\App\Models\PrestasiOlimpiade::where('id',$id)->first();
            $namaFile=$foto['file'];
           }
           $data=[

               'title'=>$request['title'],
               'tingkat'=>$request['tingkat'],
               'jumlah'=>$request['jumlah'],
               'file'=>$namaFile,
               'tahun'=>$request['tahun'],
               'berita'=>$request['berita'],
               'created_at'=>$request['created_at'],
           ];
           \App\Models\PrestasiOlimpiade::where('id', $id)->update($data);
           
           return redirect()->to('/olimpiade')->with('success','berhasil');

    }
    public function prestasi(){
        $rows=\App\Models\PrestasiOlimpiade::orderBy('created_at','desc')->get();
        $tahun=Carbon::now()->year;
        $regional=\App\Models\PrestasiOlimpiade::where('tingkat','Daerah')->get();
        $count_regional=0;
        foreach($regional as $row){
            $count_regional+=$row->jumlah;
        }
        $nasional=\App\Models\PrestasiOlimpiade::where('tingkat','Nasional')->get();
        $count_nasional=0;
        foreach($nasional as $row){
            $count_nasional+=$row->jumlah;
        }
        $internasional=\App\Models\PrestasiOlimpiade::where('tingkat','Internasional')->get();
        $count_internasional=0;
        foreach($internasional as $row){
            $count_internasional+=$row->jumlah;
        }
        return view('olimpiade.prestasi', [
            'rows'=>$rows,
            'tahun'=>$tahun,
            'regional'=>$count_regional,
            'nasional'=>$count_nasional,
            'internasional'=>$count_internasional,
        ]);
    }
    
}
