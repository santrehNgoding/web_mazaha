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
        return view('ekstra.create');
    }
    public function store(request $request){
        $file = $request->file('files');
        $ekstensi = $file->getClientOriginalExtension();
        $tanggal = str_replace(['-',':',''],'',\Carbon\Carbon::now());
        $namaFile = 'ekstra-'.$tanggal.'.'.$ekstensi;
        $file->move(public_path('img/ekstra'), $namaFile);
        \App\Models\Ekstra::create([
            'title'=>$request['title'],
            'guru'=>$request['guru'],
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
               'guru'=>$request['guru'],
               'deskripsi'=>$request['deskripsi']
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
}