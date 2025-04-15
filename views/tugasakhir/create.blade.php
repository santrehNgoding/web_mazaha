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
label{
    font-weight: 600;
}
</style>
    <div id="grid" style="height:100%;display:grid;">
        <div>
            <img src="../img/gambar create.jpg" style="width:100%;margin-top:10%" alt="">
        </div>
        <div class="my-auto">
            <div style="height:auto;background-color:rgba(20, 131, 20,0.3);margin:10%;padding:5%;border-radius:10px">
            <form method="post" action="{{route('tugasakhir.store')}}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="form-group mb-3">
                    <label for="title">Judul Singkat TA</label>
                    <input type="text" class="form-control" name="title"
                     >
                </div>
                <div class="form-group mb-3">
                    <label for="files">Foto</label>
                    <input type="file" class="form-control" name="files"
                    >
                </div>
                <div class="form-group mb-3">
                    <label for="link">ID Video Youtube</label>
                    <input type="text" class="form-control" name="link"
                     placeholder="Hanya boleh dan wajib diisi oleh jurusan multimedia">
                </div>
                <div class="form-group mb-3">
                    <label for="name">Nama Mahasiswa</label>
                    <input type="text" class="form-control" name="name"
                     >
                </div>
                <div class="form-group mb-3">
                    <label for="tahun">Tahun Lulus</label>
                    <input type="number" class="form-control" name="tahun"
                     >
                </div>
                <div class="form-group mb-3">
                    <label for="jurusan">Jurusan</label>
                    <select name="jurusan" id="" class="border-0 rounded-2 py-1 w-100">
                        <option disabled selected>--Pilih--</option>
                        <option value="Multimedia">Multimedia</option>
                        <option value="Design Graphic">Design Graphic</option>
                        <option value="Programming">Programming</option>
                        <option value="Administrasi Perkantoran">Administrasi Perkantoran</option>
                        <option value="Animasi">Animasi</option>
                    </select>
                </div>
                <div class="form-group mb-3">
                    <label for="deskripsi">Deskripsi</label>
                    <br>
                    <textarea class="w-100 rounded-3" style="border:none;" name="deskripsi" id="" cols="30" rows="10"></textarea>
                </div>
                    <button type="submit" class="custom-btn btn-4 mt-4 w-100">Create</button>
            </form>
            </div>
            </div>
    </div>
@endsection
