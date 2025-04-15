<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class ProdistikController extends Controller{
    public function index(){
        $tests=\App\Models\TesPro::orderBy('created_at','desc');
        return view('prodistik.index',[
            'tests'=>$tests->get()
        ]);
    }
    public function create(){
        return view('prodistik.create');
    }
    public function store(Request $request)
{
    $file = $request->file('files');
        $ekstensi = $file->getClientOriginalExtension();
        $tanggal = str_replace(['-',':',''],'',\Carbon\Carbon::now());
        $namaFile = 'tes-'.$tanggal.'.'.$ekstensi;
        $file->move(public_path('img/prodistik'), $namaFile);
        \App\Models\TesPro::create([
            'nama'=>$request['nama'] ?? 'Salah',
            'foto'=>'person.png',
            'foto'=>$namaFile,
            'tahun_lulus'=>$request['tahun_lulus'],
            'jurusan'=>$request['jurusan'],
            'testimoni'=>$request['testimoni'] ?? "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro, molestias!",
        ]);
        return redirect()->to('/prodistik')->with('success','berhasil');
}  
    public function struktur(){
        $dosen=\App\Models\Instruktur::all();
        return view('prodistik.struktur',[
            'dosens'=>$dosen
        ]);
    }
    public function kurikulum(){
        return view('prodistik.kurikulum');
    }
    public function edit($id){
        return view('prodistik.update',['row'=>\App\Models\Instruktur::where('id',$id)->first()]);
    }
    public function update(Request $request,$id){
        if($request->hasFile('files')) {
            $file = $request->file('files');
            $ekstensi = $file->getClientOriginalExtension();
            $tanggal = str_replace(['-',':',''],'',\Carbon\Carbon::now());
            $namaFile = 'pro-'.$tanggal.'.'.$ekstensi;
            $file->move(public_path('img/prodistik/Pengelola/'), $namaFile);
            $data['files'] = $namaFile;
           } else{
            $foto=\App\Models\Instruktur::where('id',$id)->first();
            $namaFile=$foto['file'];
           }
           $data=[

               'NamaGuru'=>$request['NamaGuru'],
               'file'=>$namaFile,
               'alamat'=>$request['alamat'],
               'jabatan'=>$request['jabatan'],
               'mapel'=>$request['mapel']
           ];
           \App\Models\Instruktur::where('id', $id)->update($data);

           
           return redirect()->to('/prodistik/struktur')->with('success','berhasil');

    }
}
