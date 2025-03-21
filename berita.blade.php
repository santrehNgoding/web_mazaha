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
            width:50%;
            position: absolute;
            top: 50%;
            left: 25%;
            color: #ffffff;
            border-radius: 5px;
            background-color: rgba(0,0,0,0.7);
            padding:20px;
        }
        .slide-text h2{
            font-weight:bolder;

        }
    </style>
</style>
</head>
<body>

<div class="">
  {{-- <h2 class="text-center">Berita <span> Terbaru</span></h2> --}}
  <div id="beritaCarousel" class="carousel slide " data-bs-ride="carousel">
      <div class="carousel-inner">
          @foreach ($beritas as $index => $item)
              <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                  <div class="card" style="height: 100vh;">
                      <div class="slide-text">
                          <h2 class="card-title">{{ $item->judul }}</h2>
                          {{-- <p class="card-text">{{ Str::limit($item->isi, 100) }}</p> --}}
                          <a href="" class="btn btn-success ">Baca Selengkapnya</a>
                      </div>
                      <img src="{{ asset('img/berita/' . $item->gambar) }}" class="news-image" alt="{{ $item->judul }}">
                  </div>
              </div>
          @endforeach
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#beritaCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true" style="font-weight: 900"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#beritaCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </button>
  </div>
  {{-- <a href="/berita/show" style="display:flex;justify-content:flex-end;margin-top:30px;margin-bottom:30px">Lihat lebih banyak berita -></a> --}}
</div>
<div style="display: flex;flex-wrap:wrap;gap:20px;width:70vw;padding:50px">
@foreach ($beritas as $index => $item)
<div class="card shadow-sm border-0" style="max-width: 22rem;">
    <div class="position-relative">
        <img src="{{ asset('img/berita/' . $item->gambar) }}" class="card-img-top" alt="News Image">
        <div class="position-absolute bg-success text-white p-2 rounded-end" style="top:-10px;left:10px">
            <p class="mb-0 fw-bold">03</p>
            <p class="mb-0 small">Maret</p>
            <p class="mb-0 small">2025</p>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init();
</script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
    let index = 0;
    const slides = document.querySelector('.slides');
    const totalSlides = document.querySelectorAll('.slide').length-1;

    function moveSlide(step) {
        index += step;
        if (index >= totalSlides) index = 0;
        if (index < 0) index = totalSlides - 1;
        slides.style.transform = `translateX(-${index * 100}%)`;
    }

    function autoSlide() {
        moveSlide(1);
    }
    let slideInterval = setInterval(autoSlide, 5000);

    document.querySelector('.slider-container').addEventListener('mouseenter', () => clearInterval(slideInterval));
    document.querySelector('.slider-container').addEventListener('mouseleave', () => slideInterval = setInterval(autoSlide, 3000));
</script>
@endsection