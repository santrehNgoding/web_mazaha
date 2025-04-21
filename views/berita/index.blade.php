@extends('layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
<!-- AOS Animation CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<style>  
        .allcal {
          font-family: sans-serif;
          /* background: #f0f0f0; */
          padding: 20px;
          display: flex;
          justify-content: center;
        }
    
        .calendar {
          width: 300px;
          background: #fdfafa;
          border-radius: 10px;
          overflow: hidden;
          box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }
    
        .calendar-header {
          background: #003d1f;
          color: white;
          text-align: center;
          padding: 10px;
          font-weight: bold;
        }
    
        .calendar-days, .calendar-dates {
          display: grid;
          grid-template-columns: repeat(7, 1fr);
          text-align: center;
          padding: 10px;
        }
    
        .calendar-days {
          background: #f1eded;
          font-weight: bold;
        }
    
        .calendar-dates div {
          padding: 10px 0;
        }
    
        .today {
  background-color: #004d26;
  color: white;
  font-weight: bold;
  border-radius: 50%;
  width: 30px;
  height: 30px;
  font-size: 16px;

  display: flex;
  align-items: center;
  justify-content: center;

  margin: 0 auto;
}

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
                      <img src="{{ asset('images/berita/' . $item->gambar) }}" class="news-image" alt="{{ $item->judul }}">
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
<div class="d-flex"><div class="container mt-5" style="display:flex;width:70%;gap:25px;flex-wrap:wrap;margin-left:20px">
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

<div class="p-3 bg-white rounded w-100 mt-5 mr-5" style="max-width: 400px;margin-right:30px">
    {{-- Pencarian Berita --}}
    <form action="{{ route('berita.cari') }}" method="GET" class="mb-3 position-relative">
        <input type="text" name="query" class="form-control ps-5 pe-4" placeholder="Cari Berita">
        <span class="position-absolute top-50 start-0 translate-middle-y ms-3 text-muted">
            <i class="bi bi-search"></i>
        </span>
        <button type="submit" class="btn position-absolute top-50 end-0 translate-middle-y me-2 p-0 border-0 bg-transparent">
            <i class="bi bi-x"></i>
        </button>
    </form>

{{-- 
    <div class="mb-3">
        <strong>Hasil pencarian untuk:</strong> "{{ request('search') }}"
        <a href="{{ route('alumni.alumni') }}" class="btn btn-sm btn-link">kembali</a>
    </div> --}}

    {{-- Kategori Berita --}}
    <h6 class="fw-bold mb-3">Kategori Berita</h6>
    <div class="list-group">
        {{-- @foreach ($kategoriBerita as $kategori)
            <a href="{{ route('berita.kategori', $kategori->slug) }}" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center">
                {{ $kategori->nama }}
                <span class="badge bg-secondary rounded-pill">{{ $kategori->jumlah }}</span>
            </a>
        @endforeach --}}
            <a href="" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-secondary-subtle mb-2">
                Berita Baru
                <span class="badge bg-secondary rounded-pill">05</span>
            </a>
            <a href="" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-secondary-subtle mb-2">
                Berita lama
                <span class="badge bg-secondary rounded-pill">50</span>
            </a>
            <a href="" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-secondary-subtle mb-2">
                Berita prestasi
                <span class="badge bg-secondary rounded-pill">30</span>
            </a>
            <a href="" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center bg-secondary-subtle mb-2">
                Berita kegiatan
                <span class="badge bg-secondary rounded-pill">10</span>
            </a>
            
        </div>

    <div class="allcal">
    <div class="calendar">
      <div class="calendar-header" id="calendar-header">
        <!-- Bulan dan Tahun -->
      </div>
      <div class="calendar-days">
        <div>Jum</div>
        <div>Sab</div>
        <div>Min</div>
        <div>Sen</div>
        <div>Sel</div>
        <div>Rab</div>
        <div>Kam</div>
      </div>
      <div class="calendar-dates" id="calendar-dates">
        <!-- Tanggal akan di-generate oleh JavaScript -->
      </div>
    </div></div>
</div>    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
    AOS.init();
</script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
  const monthNames = [
    "Januari", "Februari", "Maret", "April", "Mei", "Juni",
    "Juli", "Agustus", "September", "Oktober", "November", "Desember"
  ];

  const now = new Date();
  const currentDay = now.getDate();
  const currentMonth = now.getMonth();
  const currentYear = now.getFullYear();

  // Tampilkan bulan dan tahun
  document.getElementById('calendar-header').innerText = `${monthNames[currentMonth]} ${currentYear}`;

  // Cari hari pertama dalam bulan
  const firstDay = new Date(currentYear, currentMonth, 1);
  // Dapatkan jumlah hari dalam bulan
  const lastDate = new Date(currentYear, currentMonth + 1, 0).getDate();

  // Diubah agar hari pertama (Senin) digeser ke indeks sesuai urutan "Jum, Sab, Min, Sen, Sel, Rab, Kam"
  // JS: 0 (Minggu) - 6 (Sabtu)
  // Target: 0 (Jum) - 6 (Kam)
  const jsToCustomIndex = [2, 3, 4, 5, 6, 0, 1]; // mapping dari JS -> index urutan tampilan
  const startIndex = jsToCustomIndex[firstDay.getDay()];

  let datesHTML = "";
  for (let i = 0; i < startIndex; i++) {
    datesHTML += `<div></div>`; // kosong untuk padding
  }

  for (let d = 1; d <= lastDate; d++) {
    if (d === currentDay) {
      datesHTML += `<div><div class="today">${d}</div></div>`;
    } else {
      datesHTML += `<div>${d}</div>`;
    }
  }

  document.getElementById('calendar-dates').innerHTML = datesHTML;
</script>

</body>
</html>

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
