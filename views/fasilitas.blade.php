@extends('layouts.app')
@section('content')
<style>
        .header{
        background-color: #046C3C;
        display: flex;
        align-items: center;
        text-align: center;
        height:209px;
       
    }
    header h2{
         color: #ffffff;
        margin:0 auto;
        font-weight: 700;
    }
    h2{
        color: #046C3C;
        font-weight: 700;
        margin-top:50px;
    }
    .container h2{
        margin-bottom:50px;
    }
        .all {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin-bottom:5em;
        }
        .gallery {
            height: 100vh;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: auto;
            gap: 40px;
            width: 100%;
            grid-template-areas: 
                "img1 img3 img3 "
                "img1 img4 img5 "
                "img2 img4 img6 ";
        }
        .gallery img {
            width: 100%;
            height: 100%;
            object-fit: cover;

            transition: transform 0.3s ease-in-out;
        }
        .gallery img:hover {
            transform: scale(1.1);
        }

        /* Atur posisi masing-masing gambar dalam grid */
        .img1 { grid-area: img1; }
        .img2 { grid-area: img2; }
        .img3 { grid-area: img3; }
        .img4 { grid-area: img4; }
        .img5 { grid-area: img5; }
        .img6 { grid-area: img6; }
</style>
</head>
<header class="header">
    <h2>Fasilitas Pembelajaran</h2>
</header>
<div class="container">
<h2>Fasilitas Pembelajaran</h2>
<div class="all">
    
<div class="gallery">
    <img src="{{asset('Screenshot 2025-03-06 112455.png')}}" alt="Aula" class="img4">
<img src="{{asset('Screenshot 2025-03-06 112412.png')}}" alt="Perpustakaan" class="img1">
<img src="{{asset('Screenshot 2025-03-06 112444.png')}}" alt="Kelas" class="img3">
<img src="{{asset('Screenshot 2025-03-06 112430.png')}}" alt="Laboratorium Komputer" class="img2">
<img src="{{asset('Screenshot 2025-03-06 112517.png')}}" alt="Proses Belajar" class="img5">
<img src="{{asset('Screenshot 2025-03-06 112543.png')}}" alt="CCTV Keamanan" class="img6">
</div>

@endsection
