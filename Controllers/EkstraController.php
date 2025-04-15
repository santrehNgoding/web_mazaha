<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class EkstraController extends Controller{
    public function index(){
        $rows=\App\Models\Ekstra::all();
        $models=\App\Models\Prestasi::orderBy('created_at','desc')->get();
        return view('ekstra.index',['rows'=>$rows,'models'=>$models]);
    }
    public function create(){
        $teachers=\App\Models\GuruEkstra::all();
        return view('ekstra.create',['teachers'=>$teachers]);
    }
    public function store(request $request){
        $file = $request->file('files');
        $ekstensi = $file->getClientOriginalExtension();
        $tanggal = str_replace(['-',':',''],'',\Carbon\Carbon::now());
        $namaFile = 'ekstra-'.$tanggal.'.'.$ekstensi;
        $file->move(public_path('img/ekstra'), $namaFile);
        \App\Models\Ekstra::create([
            'title'=>$request['title'],
            'id_guru1'=>$request['id_guru1'],
            'id_guru2'=>$request['id_guru2'],
            'foto'=>$namaFile,
            'deskripsi'=>$request['deskripsi']
        ]);
        return redirect()->to('/ekstra')->with('success','Berhasil');
    }
    public function edit($id){
        return view('ekstra.update',['row'=>\App\Models\Ekstra::where('id',$id)->first()]);
    }
    public function update(request $request, $id){
        if($request->hasFile('files')) {
            $file = $request->file('files');
            $ekstensi = $file->getClientOriginalExtension();
            $tanggal = str_replace(['-',':',''],'',\Carbon\Carbon::now());
            $namaFile = 'ekstra-'.$tanggal.'.'.$ekstensi;
            $file->move(public_path('img/ekstra'), $namaFile);
            $data['files'] = $namaFile;
           } else{
            $foto=\App\Models\Ekstra::where('id',$id)->first();
            $namaFile=$foto['foto'];
           }
           $data=[

               'title'=>$request['title'],
               'foto'=>$namaFile,
                'id_guru1'=>$request['id_guru1'],
            'id_guru2'=>$request['id_guru2'] ?? '',               
            'deskripsi'=>$request['deskripsi'] ?? '' 
           ];
           \App\Models\Ekstra::where('id', $id)->update($data);

           
           return redirect()->to('/ekstra')->with('success','berhasil');

    }
    public function destroy($id)
    {
        $model = \App\Models\Ekstra::where('id', $id);
        $row =$model->first();
        \Illuminate\Support\Facades\File::delete(public_path('img/ekstra'.$row->files));
        $model->delete();
        return redirect()->to('ekstra');
    }
    public function buat(){
        return view('ekstra.buat');
    }
    public function tambah(request $request){
        $file = $request->file('files');
        $ekstensi = $file->getClientOriginalExtension();
        $tanggal = str_replace(['-',':',''],'',\Carbon\Carbon::now());
        $namaFile = 'guru-'.$tanggal.'.'.$ekstensi;
        $file->move(public_path('img/ekstra'), $namaFile);
        \App\Models\GuruEkstra::create([
            'nama'=>$request['nama'],
            'foto'=>$namaFile ?? null,
            'bidang'=>$request['bidang'],
            'tahun'=>$request['tahun'] ?? null,
            'alamat'=>$request['alamat'] ?? '',
            'tele'=>$request['tele'],
            'email'=>$request['email'],
            'wa'=>$request['wa']
        ]);
        return redirect()->to('/ekstra')->with('success','Berhasil');
    }
    public function ubah($id){
        return view('ekstra.ganti',['row'=>\App\Models\GuruEkstra::where('id',$id)->first()]);
    }
    public function ganti(request $request, $id){
        if($request->hasFile('files')) {
            $file = $request->file('files');
            $ekstensi = $file->getClientOriginalExtension();
            $tanggal = str_replace(['-',':',''],'',\Carbon\Carbon::now());
            $namaFile = 'guru-'.$tanggal.'.'.$ekstensi;
            $file->move(public_path('img/ekstra'), $namaFile);
            $data['files'] = $namaFile;
           } else{
            $foto=\App\Models\GuruEkstra::where('id',$id)->first();
            $namaFile=$foto['foto'];
           }
           $data=[

               'nama'=>$request['nama'],
            'foto'=>$namaFile,
            'bidang'=>$request['bidang'],
            'tahun'=>$request['tahun'],
            'alamat'=>$request['alamat'],
            'tele'=>$request['tele'],
            'email'=>$request['email'],
            'wa'=>$request['wa']
           ];
           \App\Models\GuruEkstra::where('id', $id)->update($data);

           
           return redirect()->to('/ekstra')->with('success','berhasil');

    }
    public function hapus($id)
    {
        $model = \App\Models\GuruEkstra::where('id', $id);
        $row =$model->first();
        \Illuminate\Support\Facades\File::delete(public_path('img/ekstra'.$row->files));
        $model->delete();
        return redirect()->to('ekstra');
    }
}