@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
<!-- AOS Animation CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<style>  
body

        .carousel-item {
            text-align: center;
        }
        .card {
            border: none;
        }
        .news-image {
            width: 100%;
            height: 100vh;
            object-fit: cover;
        }
        
        .slide-text {
            width:100%;
            position: absolute;
            top: 50%;
            left: 1%;
            color: #ffffff;
            border-radius: 5px;
        }
        .slide-text h2{
            font-weight:bolder;

        }
        .top{
        background-color: #046C3C;
        display: flex;
        align-items: center;
        text-align: center;
        height:209px;
       
    }
    .top h2{
         color: #ffffff;
        margin:0 auto;
        font-weight: 700;
    }

    </style>
</style>
</head>
<body>

    <header class="top">
        <h2>Prestasi</h2>
    </header>
<div class="d-flex">
<div style="display: flex;flex-wrap:wrap;gap:40px;padding:50px;justify-content:center">
@foreach ($beritas as $index => $item)
<div class="card shadow-sm border-0" style="max-width: 22rem;">
    <div class="position-relative">
        <img src="{{ asset('images/berita/' . $item->gambar) }}" class="card-img-top" alt="News Image">
        <div class="position-absolute bg-success text-white p-2 text-center" style="top:-10px;left:10px;border-radius: 20px 20px 0 0;">
            <span class="tanggal">{{ \Carbon\Carbon::parse($item->date)->translatedFormat('j') }}</span><br>
            <span class="bulan">{{ \Carbon\Carbon::parse($item->date)->translatedFormat('F') }}</span><br>
            <span class="tahun">{{ \Carbon\Carbon::parse($item->date)->translatedFormat('Y') }}</span>
            
        </div>
    </div>
    <div class="card-body">
        <h5 class="card-title fw-bold">{{ $item->judul }}</h5>
        <p class="card-text text-muted small">
            {{ Str::limit($item->isi, 100) }}</p>
        <a href="#" class="btn btn-success">Selengkapnya</a>
    </div>
</div>
<div class="card shadow-sm border-0" style="max-width: 22rem;">
    <div class="position-relative">
        <img src="{{ asset('images/berita/' . $item->gambar) }}" class="card-img-top" alt="News Image">
        <div class="position-absolute bg-success text-white p-2 " style="top:-10px;left:10px;border-radius: 20px 20px 0 0;">
            <span class="tanggal">{{ \Carbon\Carbon::parse($item->date)->translatedFormat('j') }}</span><br>
            <span class="bulan">{{ \Carbon\Carbon::parse($item->date)->translatedFormat('F') }}</span><br>
            <span class="tahun">{{ \Carbon\Carbon::parse($item->date)->translatedFormat('Y') }}</span>
            
        </div>
    </div>
    <div class="card-body">
        <h5 class="card-title fw-bold">{{ $item->judul }}</h5>
        <p class="card-text text-muted small">
            {{ Str::limit($item->isi, 100) }}</p>
        <a href="#" class="btn btn-success">Selengkapnya</a>
    </div>
</div>
<div class="card shadow-sm border-0" style="max-width: 22rem;">
    <div class="position-relative">
        <img src="{{ asset('images/berita/' . $item->gambar) }}" class="card-img-top" alt="News Image">
        <div class="position-absolute bg-success text-white p-2 " style="top:-10px;left:10px;border-radius: 20px 20px 0 0;">
            <span class="tanggal">{{ \Carbon\Carbon::parse($item->date)->translatedFormat('j') }}</span><br>
            <span class="bulan">{{ \Carbon\Carbon::parse($item->date)->translatedFormat('F') }}</span><br>
            <span class="tahun">{{ \Carbon\Carbon::parse($item->date)->translatedFormat('Y') }}</span>
            
        </div>
    </div>
    <div class="card-body">
        <h5 class="card-title fw-bold">{{ $item->judul }}</h5>
        <p class="card-text text-muted small">
            {{ Str::limit($item->isi, 100) }}</p>
        <a href="#" class="btn btn-success">Selengkapnya</a>
    </div>
</div>
<div class="card shadow-sm border-0" style="max-width: 22rem;">
    <div class="position-relative">
        <img src="{{ asset('images/berita/' . $item->gambar) }}" class="card-img-top" alt="News Image">
        <div class="position-absolute bg-success text-white p-2 " style="top:-10px;left:10px;border-radius: 20px 20px 0 0;">
            <span class="tanggal">{{ \Carbon\Carbon::parse($item->date)->translatedFormat('j') }}</span><br>
            <span class="bulan">{{ \Carbon\Carbon::parse($item->date)->translatedFormat('F') }}</span><br>
            <span class="tahun">{{ \Carbon\Carbon::parse($item->date)->translatedFormat('Y') }}</span>
            
        </div>
    </div>
    <div class="card-body">
        <h5 class="card-title fw-bold">{{ $item->judul }}</h5>
        <p class="card-text text-muted small">
            {{ Str::limit($item->isi, 100) }}</p>
        <a href="#" class="btn btn-success">Selengkapnya</a>
    </div>
</div>
<div class="card shadow-sm border-0" style="max-width: 22rem;">
    <div class="position-relative">
        <img src="{{ asset('images/berita/' . $item->gambar) }}" class="card-img-top" alt="News Image">
        <div class="position-absolute bg-success text-white p-2 " style="top:-10px;left:10px;border-radius: 20px 20px 0 0;">
            <span class="tanggal">{{ \Carbon\Carbon::parse($item->date)->translatedFormat('j') }}</span><br>
            <span class="bulan">{{ \Carbon\Carbon::parse($item->date)->translatedFormat('F') }}</span><br>
            <span class="tahun">{{ \Carbon\Carbon::parse($item->date)->translatedFormat('Y') }}</span>
            
        </div>
    </div>
    <div class="card-body">
        <h5 class="card-title fw-bold">{{ $item->judul }}</h5>
        <p class="card-text text-muted small">
            {{ Str::limit($item->isi, 100) }}</p>
        <a href="#" class="btn btn-success">Selengkapnya</a>
    </div>
</div>
@endforeach</div>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init();
</script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


@endsection
