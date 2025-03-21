@extends('layouts.app')
@section('content')
<head>
    <style>
        #folder{
            background-color: #033919;
            box-shadow:20px 20px 50px 0px rgba(0,0,0,0.7);
        }
        #folder:hover{
            background-color:#046c3c;
            box-shadow:0px 0px 30px 0px #046c3c;
        }
    </style>
    <link rel="stylesheet" href="{{asset('css/aos.css')}}" />
</head>
<header>
<img class="w-100" src="{{asset('img/headerGaleri.jpg')}}" alt="">
</header>
<div class="card-header bg-transparent mt-5">
    <div class="d-flex justify-content-between">
        <div class="m-auto">
            <form method="GET" action="">
                <div class="input-group">
                    <input type="text" name="kategori" class="form-control" placeholder="Search for categories..." >
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-success" ><img style="max-height:2vw" src="http://localhost:8000/img/search.png" alt=""></button>
                        {{-- @if (auth()->check())
                        @if(auth()->user()->status=='Admin') --}}
                        <a href="/galeri/create" class="btn btn-success" >Add a file</a>
                        <a href="/galeri/add" class="btn btn-success" >Add files</a>
                        {{-- @endif
                        @endif --}}
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
<div class="d-flex flex-wrap justify-content-evenly mb-5 gap-5">
    @foreach ($rows as $row )
        <div>
            <img src="/img/telegram.png" alt="">
            <form action="{{route('galeri.show',$row)}}">
                <button type="submit" id="folder" class="rounded-circle p-3 border-0"><img src="/img/Folder open.png" alt=""></button>
                <h3 class="text-center fw-bold mt-3">{{$row}}</h3>
            </form>
            {{-- @if(auth()->user()->status=='admin') --}}
            <form action="{{ route('galeri.delete', ['kategori' => $row]) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus semua file di kategori ini?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger w-100 rounded-0">Hapus Kategori</button>
            </form>
            {{-- @endif --}}
            
    </div>

    @endforeach
</div>
<script src="{{asset('js/aos.js')}}"></script>
<script>
    AOS.init();
</script>
@endsection
