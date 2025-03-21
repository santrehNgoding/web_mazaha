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
                <form method="POST" action="{{route('ekstra.update', $row->id)}}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')                
                    <div class="form-group mb-3">
                        <label for="title">Nama Ekstrakulikuler</label>
                        <input type="text" class="form-control" name="title"
                         value="{{$row->title}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="files">Foto</label>
                        <input type="file" class="form-control" name="files"
                         value="{{$row->foto}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="guru">Nama Pengajar</label>
                        <input type="text" class="form-control" name="guru"
                         value="{{$row->guru}}">
                    </div>
                    <div class="form-group mb-3">
                        <label for="deskripsi">Deskripsi</label>
                        <br>
                        <textarea class="w-100 rounded-3" style="border:none;" name="deskripsi" id="" cols="30" rows="10">{{$row->deskripsi}}</textarea>
                    </div>
                    <button type="submit" class="custom-btn btn-4 mt-4 w-100">Update</button>
            </form>
            </div>
        </div>
    </div>
@endsection
