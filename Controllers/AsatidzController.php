<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
class AsatidzController extends Controller
{
    
    public function index(Request $request)
{
    $km = \App\Models\Guru::where('kepala', 'Ya')->first();
    $allpimpinan = \App\Models\Guru::query()->where('pimpinan', 'Ya')->get();
    $staff = \App\Models\Guru::where('staf','Ya')->get();
    $query = \App\Models\Guru::query()->where('pengajar','Ya');
    if ($request->filled('NamaGuru')) {
        $query->where('NamaGuru', 'like', '%'.$request->NamaGuru.'%');
    }
    if ($request->filled('pimpinan')) {
        $allpimpinan->where('NamaGuru', 'like', '%'.$request->NamaGuru.'%');
    }
    // if ($request->filled('staf')) {
    //     $staff->where('NamaGuru', 'like', '%'.$request->staf.'%')->get();
    // }
    $rows = $query->paginate(16);

    return view('asatidz.asatidz', [
    'rows' => $rows, 
    'km' => $km,
    'allpimpinan' => $allpimpinan,
    'staf'=>$staff
]);
}

    public function create() {
        return view('asatidz.create');
    }
    public function edit($id)
    {
        return view('asatidz.update', [
            'row' =>\App\Models\Guru::where('id', $id)->first()
        ]);  
    }
    public function store(request $request) {
        $file = $request->file('files');
        $ekstensi = $file->getClientOriginalExtension();
        $tanggal = str_replace(['-',':',''],'',\Carbon\Carbon::now());
        $namaFile = 'IMG-'.$tanggal.'.'.$ekstensi;
        $file->move(public_path('img/asatidz'), $namaFile);
        \App\Models\Guru::create([
            'NamaGuru'=>$request['NamaGuru'],
            'alamat'=>$request['alamat'],
            'Profil'=>$namaFile,
            'Bidang'=>$request['Bidang'],
            'tahun'=>$request['tahun'],
            'Motto'=>$request['Motto'],
            'Telegram'=>$request['Telegram'],
            'Email'=>$request['Email'],
            'noHp'=>$request['noHp'],
            'kepala'=>$request['kepala'],
            'pimpinan'=>$request['pimpinan'],
            'staf'=>$request['staf'],
            'pengajar'=>$request['pengajar'],
        ]);
        return redirect()->to('/asatidz')->with('success','berhasil');

    }
    public function update(request $request,$id){
        if($request->hasFile('files')) {
            $file = $request->file('files');
            $ekstensi = $file->getClientOriginalExtension();
            $tanggal = str_replace(['-',':',''],'',\Carbon\Carbon::now());
            $namaFile = 'IMG-'.$tanggal.'.'.$ekstensi;
            $file->move(public_path('img/asatidz'), $namaFile);
            $data['files'] = $namaFile;
           } else{
            $foto=\App\Models\Guru::where('id',$id)->first();
            $namaFile=$foto['Profil'];
           }
           $data=[

               'NamaGuru'=>$request['NamaGuru'],
               'alamat'=>$request['alamat'],
               'Profil'=>$namaFile,
               'Bidang'=>$request['Bidang'],
               'tahun'=>$request['tahun'],
               'Motto'=>$request['Motto'],
               'Telegram'=>$request['Telegram'],
               'Email'=>$request['Email'],
               'noHp'=>$request['noHp'],
                'kepala'=>$request['kepala'],
                'pimpinan'=>$request['pimpinan'],
                'staf'=>$request['staf'],
                'pengajar'=>$request['pengajar'],           ];
           \App\Models\Guru::where('id', $id)->update($data);

           
           return redirect()->to('/asatidz')->with('success','berhasil');

    }
    public function destroy($id)
    {
        $model = \App\Models\Guru::where('id', $id);
        $row =$model->first();
        \Illuminate\Support\Facades\File::delete(public_path('img/asatidz'.$row->files));
        $model->delete();
        return redirect()->to('asatidz');
    }
}
