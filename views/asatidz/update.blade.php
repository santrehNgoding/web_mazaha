@extends('layouts.app')
@section('content')
<style>
    @media only screen and (min-width: 768px){
        #grid{

            grid-template-columns: repeat(2,1fr)
        }
    }
    @media only screen and (max-width: 767px){
        #grid{

            grid-template-columns: repeat(1,1fr)
        }
    }
    .custom-btn {
        width: 20%;
        height: 40px;
        color: #fff;
        border-radius: 5px;
        padding: 10px 25px;
        background: transparent;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        display: inline-block;
        box-shadow: inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
  outline: none;
}

.btn-4 {
    background: #033919;
    border: none;
}

.btn-4:before {
    height: 0%;
    width: 2px;
}

.btn-4:hover {
  box-shadow: 4px 4px 6px 0 rgba(255,255,255,.5),
  -4px -4px 6px 0 rgba(116, 125, 136, .5), 
  inset -4px -4px 6px 0 rgba(255,255,255,.2),
  inset 4px 4px 6px 0 rgba(0, 0, 0, .4);
}
label {
    font-family: "Poppins", sans-serif;
  font-weight: 600;
  font-style: normal;
}
</style>
    <div id="grid" style="height:100%;display:grid;">
        <div>
            <img src="{{asset('img/gambar create.jpg')}}" style="width:100%;margin-top:10%" alt="">
        </div>
        <div>
            <div style="height:auto;background-color:rgba(20, 131, 20,0.3);margin:10%;padding:5%;border-radius:10px">
                <form method="POST" action="{{route('asatidz.update', $row->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')                
                <div class="form-group mb-3">
                    <label for="NamaGuru">Nama Lengkap beserta gelar</label>
                    <input type="text" class="form-control" name="NamaGuru"
                    value="{!!$row->NamaGuru!!}" >
                </div>
                <div class="form-group mb-3">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat"
                    value="{!!$row->alamat!!}" >
                </div>
                <div class="form-group mb-3">
                    <label for="files">Foto Profil</label>
                    <input type="file" class="form-control" name="files"
                    value="{!!$row->Profil!!}" >
                </div>
                <div class="form-group mb-3">
                    <label for="Bidang">Mata Pelajaran</label>
                    <input type="text" class="form-control" name="Bidang"
                    value="{!!$row->Bidang!!}" >
                </div>
                <div class="form-group mb-3">
                    <label for="tahun">Tahun Mulai Mengabdi</label>
                    <input type="text" class="form-control" name="tahun"
                    value="{!!$row->tahun!!}" >
                </div>
                <div class="form-group mb-3">
                    <label for="Motto">Motto</label>
                    <input type="text" class="form-control" name="Motto"
                    value="{!!$row->Motto!!}" >
                </div>
                <div class="form-group mb-3">
                    <label for="Telegram">Username Telegram</label>
                    <input type="text" class="form-control" name="Telegram"
                    value="{!!$row->Telegram!!}" >
                </div>
                <div class="form-group mb-3">
                    <label for="Email">Email</label>
                    <input type="email" class="form-control" name="Email"
                    value="{!!$row->Email!!}" >
                </div>
                <div class="form-group mb-3">
                    <label for="noHp">Nomor HP / WA</label>
                    <input type="number" class="form-control" name="noHp"
                    value="{!!$row->noHp!!}" >
                </div>
                <div class="form-group mb-3">
                    <label for="kepala">Kepala Madrasah</label>
                    <input type="radio" name="kepala" value="Ya">Ya
                    <input type="radio" name="kepala" value="Tidak">Tidak
                </div>
                <div class="form-group mb-3">
                    <label for="pimpinan">Pimpinan Madrasah : </label>
                    <input type="radio" name="pimpinan" value="Ya">Ya
                    <input type="radio" name="pimpinan" value="Tidak">Tidak
                </div>
                <div class="form-group mb-3">
                    <label for="staf">Karyawan Staf : </label>
                    <input type="radio" name="staf" value="Ya">Ya
                    <input type="radio" name="staf" value="Tidak">Tidak
                </div>
                <div class="form-group mb-3">
                    <label for="pengajar">Tenaga Pendidik : </label>
                    <input type="radio" name="pengajar" value="Ya">Ya
                    <input type="radio" name="pengajar" value="Tidak">Tidak
                </div>
                    <button type="submit" class="custom-btn btn-4 mt-4 w-100">Update</button>
            </form>
            </div>
        </div>
    </div>
@endsection
