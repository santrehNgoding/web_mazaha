@extends('layouts.app')
@section('content')
<head>
    <style>
        @media only screen and (min-width:768px){

            body{
                background-image: url(/img/Beranda/paralaxDekstop.jpg);
                background-attachment: fixed;
                background-repeat: no-repeat;
                /* background-size: contain; */
                background-size:cover;
            }
        }
    @media only screen and (max-width:767px){
        #title {
    font-size:6vw;
    margin-top: -30%
    }
    body{
                background-image: url(/img/elang.jpg);
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-size:100%;
            }
        
    } 
        #title {
    position: absolute;
    top: -50%;
    left: 5%;
    transform: translate(-5%,-160%);
    text-align: center;
    }
    #basel:hover{
        background-color: #046c3c;
    }
    #basel{
        background-color: #033919;
    }
    #unggul > a >div{
        border: 1px white solid;
    }
    #unggul > a >div:hover{
        border: none;
    }
    .paralax {
        height:500px;
    }
    td{
        padding: 5%;
    }
    header h3, header div {
    margin-bottom: 0;
}
#myCarousel, .carousel-inner {
    margin-bottom: 0 !important;
    padding-bottom: 0 !important;
}
header{
    position: relative;
    overflow: hidden;
}
header h3, header div, header form, #unggul {
    margin-bottom: 0 !important;
}
header video {
    width: 100%;
    height: 100vh;
    object-fit: cover;
    display: block;
}
.image-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .image-column {
            display: flex;
            flex-direction: column;
            width: 48%;
        }
        .image-column img {
            width: 100%;
            height: auto;
        }
        .image-row {
            width: 48%;
        }
        .image-row img {
            width: 100%;
            height: auto;
        }
        .alasan{
            border: white;
            background-color: #033919;
            color:#fff;
            height:auto;
            width:100%;
            margin-bottom:10px;
        }
        .alasan:hover{
            background-color: #046c3c;
        }
        h3{
            text-shadow: 10px 0px 10px #000;
        }
    </style>
    <link rel="stylesheet" href="{{asset('css/alumni.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
</head>
<header>
    <video autoplay loop muted plays-inline style="height:auto;margin-top:0px;padding:0px">
        <source class="m-0 p-0" src="/img/asatidz/vidio 3.mp4">
        </video>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div id="title" class="carousel-inner">
                <h3 class="text-center text-light fw-bold">Selamat Datang di Madrasah Aliyah Zainul Hasan 1 Genggong </h3>
                <h3 class="text-center text-light fw-bold">Madrasah Berbasis Pesantren dan Teknologi</h3>
                <form action="">
                <button id="basel" class="fw-bold px-5 py-2 mt-3" style="color:white;border:2px white solid;text-decoration:none">Baca Selengkapnya</button>
            </form>
                <div id="unggul" class="container mt-5 d-flex justify-content-around gap-2">
                <a style="text-decoration:none" href=""><div class="card bg-secondary bg-opacity-50"><img class="m-3 mt-3 w-50 mx-auto" src="/img/Beranda/icon_tahfiz.png" alt=""><h6 class="fw-bold w-75 text-light mx-auto text-center mt-3 mb-3">Program Unggulan Tahfizul Quran</h6></div></a>
                <a style="text-decoration:none" href="{{route('tugasakhir.index')}}"><div class="card bg-secondary bg-opacity-50"><img class="m-3 mt-3 w-50 mx-auto" src="/img/Beranda/icon_tahqiq.png" alt=""><h6 class="fw-bold w-75 text-light mx-auto text-center mt-3 mb-3">Program Unggulan Tahqiqu Qiroatil Kutub</h6></div></a>
                <a style="text-decoration:none" href="/prodistik"><div class="card bg-secondary bg-opacity-50"><img class="m-3 mt-3 w-50 mx-auto" src="/img/Beranda/icon_pro.png" alt=""><h6 class="fw-bold w-75 text-light mx-auto text-center mt-3 mb-3">Program Unggulan Intensifikasi TIK</h6></div></a>
                <a style="text-decoration:none" href="{{route('olimpiade.index')}}"><div class="card bg-secondary bg-opacity-50"><img class="m-3 mt-3 w-50 mx-auto" src="/img/Beranda/icon_olim.png" alt=""><h6 class="fw-bold w-75 text-light mx-auto text-center mt-3 mb-3">Program Unggulan Bimbingan Olimpiade</h6></div></a>
            </div>
    </div>
        </div>
</header>
<div id="galery" class="bg-light mt-0 py-5">
    <h3 data-aos='fade-up' data-aos-duration="1000" class="text-dark fw-bold text-center">Alasan mengapa Anda harus memilih MA Zainul Hasan 1 Genggong</h3>                 
    <h3 data-aos='fade-up' data-aos-duration="1000" class="text-dark fw-bold text-center mb-5">Simak penjelasan lengkap di bawah ini...!</h3>                 
    <div class="container">
        <div  class="image-container">
            <div data-aos="fade-right" data-aos-duration="1000" data-aos-anchor-placement="top-center" class="image-column">
                <img style="border-top-left-radius: 10px;border-top-right-radius:10px" src="/img/alasan2.jpg" alt="Gambar 2">
                <button class="alasan" onclick="location.href='{{route('asatidz.index')}}'">
                    <p class="mb-0 mt-3">Tenaga Pendidik yang Profesional</p>
                    <p>Baca Selengkapnya...</p>
                </button>
                <img src="/img/alasan3.png" alt="Gambar 3">
                <button class="alasan" onclick="location.href='{{route('fasilitas.index')}}'">
                    <p class="mb-0 mt-3">Fasilitas yang tersedia</p>
                    <p>Baca Selengkapnya...</p>
                </button>
            </div>
            <div data-aos="fade-left" data-aos-duration="1000" data-aos-anchor-placement="top-center" class="image-row">
                <img style="border-top-left-radius: 10px;border-top-right-radius:10px" src="/img/alasan1.jpg" alt="Gambar 1">
                <button class="alasan" onclick="location.href='#basel'">
                    <p class="mb-0 mt-3">Program Unggulan yang ada di MA ZAHA</p>
                    <p>Baca Selengkapnya...</p>
                </button>
            </div>
        </div>
    </div>                                                  
</div>
<div class="paralax" id="paralax">  
</div>
@include('layouts.test')
<script src="{{asset('js/aos.js')}}"></script>
<script>
    AOS.init();
    let currentIndex = 0;
const slides = document.querySelector('.slides');
const dots = document.querySelectorAll('.dot');
const totalCards = document.querySelectorAll('.slide').length;
const slideWidth = document.querySelector('.testimonial-card').offsetWidth;

// Clone slide pertama dan terakhir untuk looping infinite
const firstClone = document.querySelector('.slide').cloneNode(true);
const lastClone = document.querySelector('.slide:last-child').cloneNode(true);

// Tambahkan clone di awal & akhir
slides.appendChild(firstClone);
slides.insertBefore(lastClone, slides.firstChild);

// Update jumlah slides setelah cloning
const updatedSlides = document.querySelectorAll('.slide');
slides.style.transform = `translateX(-${currentIndex * slideWidth}px)`;

// Fungsi untuk berpindah slide
function moveSlide(direction) {
  currentIndex += direction;
    
    // Pastikan indeks tetap dalam batas
    if (currentIndex >= totalCards) {
        currentIndex = 0;
    } else if (currentIndex < 0) {
        currentIndex = totalCards - 1;
    }
    
    slides.style.transition = "transform 0.5s ease-in-out";
    slides.style.transform = `translateX(-${currentIndex * slideWidth}px)`;

    setTimeout(() => {
        if (currentIndex === totalCards) { // Jika di akhir, kembali ke awal tanpa animasi
            slides.style.transition = "none";
            currentIndex = 0;
            slides.style.transform = `translateX(-${slideWidth}px)`;
        } else if (currentIndex === -1) { // Jika di awal, kembali ke akhir tanpa animasi
            slides.style.transition = "none";
            currentIndex = totalCards - 1;
            slides.style.transform = `translateX(-${totalCards * slideWidth}px)`;
        }
    }, 500);

    updateDots();
}

// Fungsi untuk pindah ke slide tertentu (dengan dot)
function moveSlideTo(index) {
    currentIndex = index;
    slides.style.transition = "transform 0.5s ease-in-out";
    slides.style.transform = `translateX(-${(currentIndex + 1) * slideWidth}px)`;
    updateDots();
}

// Fungsi update dot aktif
function updateDots() {
    dots.forEach(dot => dot.classList.remove('active'));
    dots[currentIndex % totalCards].classList.add('active');
}

// Fungsi auto-slide
function autoSlide() {
    moveSlide(1);
}

// Jalankan auto-slide setiap 3 detik
let slideInterval = setInterval(autoSlide, 3000);

// Reset interval jika user mengklik tombol prev, next, atau dot
function resetAutoSlide() {
    clearInterval(slideInterval);
    slideInterval = setInterval(autoSlide, 3000);
}

// Event listener tombol prev & next
document.querySelector('.prev').addEventListener('click', () => {
    moveSlide(-1);
    resetAutoSlide();
});

document.querySelector('.next').addEventListener('click', () => {
    moveSlide(1);
    resetAutoSlide();
});

// Event listener dots
dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
        moveSlideTo(index);
        resetAutoSlide();
    });
});


</script>
@endsection
