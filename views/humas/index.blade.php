@extends('layouts.app')
@section('content')
<style>
    #headerOlim{
        /* background-image: linear-gradient(to top, #046c3c,#033919); */
        /* background-attachment: fixed; */
        background-size:cover;
        object-position: bottom;
    }
    @media only screen and (max-width:767px){

        .right,.center{
            width:100%;
        }
        .left{
            display:none;
        }
        .auto-type, .left h1{
            font-size:10vw !important;
            text-align: center;
        }
        .left p {
            text-align: center;
        }
        .right{
            order: 1;
        }
        .center{
            order: 2;
            text-align: center !important;
            font-size: 1.5rem;
        }
        .judul {
            font-size: 10vw !important;
        }
        #headerOlim{
            height:auto;
        }
        #nav{
            order:3;
            width: 100% !important;
        }
        #mitra_card{
            width:80% !important;
        }
        .button span {
            font-size: 2vw;
        }
        #headerOlim img {
            width:90%;
            height:auto !important;
        }
        .bk, .bk2{
    margin-top: 50px;
}
.bk > div {
    background-image: linear-gradient(to right, #033919,#1a9c46)
}
.bk2 > div {
    background-image: linear-gradient(to left, #033919,#1a9c46)
}
.bk h1, .bk2 h1 {
    font-size: 3vw;
}
.bk h4, .bk2 h4 {
    font-size: 2vw;
}
#BK_putra {
    position: relative;
    margin-top: -15%;
}
#BK_putri {
    position: relative;
    margin-top: -15%;
    margin-left:75%;
}
#tugas, #staf{
    width: 100% !important;
}
.primary{
    height: 35px !important;
    font-size:2vw;
}
    }
    @media only screen and (min-width:768px){
        .container{
            margin-bottom:300px;
        }
        .right{
            width:50%;
        }
        .right img{
            max-width:70%;
        }
        .center{
            width:50%;
        }
        #headerOlim{
            height:80vh;
        }
        .bk, .bk2{
    margin-top: 150px;
}
.bk > div {
    background-image: linear-gradient(to right, #033919,#1a9c46)
}
.bk2 > div {
    background-image: linear-gradient(to left, #033919,#1a9c46)
}
#BK_putra {
    position: relative;
    margin-top: -15%;
}
#BK_putri {
    position: relative;
    margin-top: -15%;
    margin-left:75%;
}
    }
    
    .news-content {
        /* position: absolute; */
        white-space: nowrap;
        font-size: 18px;
        font-weight: 500;
        color: #033919;
        line-height: 50px;
        padding: 0 20px;
        /* Hapus animasi sementara */
        left: 20px; /* Posisi awal sementara */
        visibility: hidden; /* Sembunyikan sementara */
    }
    .news-ticker.ready .news-content {
        visibility: visible;
        left: 100%;
        animation: scroll-news linear infinite;
    }
    /* From Uiverse.io by abrahamcalsin */ 
.button {
    width: 20%; 
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 5px;
  /* background: #033919; */
  border:#eee 2px solid !important;
  font-family: "Montserrat", sans-serif;
  box-shadow: 0px 6px 24px 0px rgba(0, 0, 0, 0.2);
  overflow: hidden;
  cursor: pointer;
  border: none;
}

.button:after {
  content: " ";
  width: 0%;
  height: 100%;
  background: #ffd401;
  position: absolute;
  transition: all 0.4s ease-in-out;
  right: 0;
}

.button:hover::after {
  right: auto;
  left: 0;
  width: 100%;
}
a{
    text-decoration: none;
}
.button span {
  text-align: center;
  text-decoration: none;
  width: 50%;
  padding-top:10px;
  padding-bottom:10px;
  color: #033919;
  /* font-size: 1.125em; */
  font-weight: 700;
  /* letter-spacing: 0.3em; */
  z-index: 20;
  transition: all 0.3s ease-in-out;
}

.button:hover span {
  color: #033919;
  animation: scaleUp 0.3s ease-in-out;
}

@keyframes scaleUp {
  0% {
    transform: scale(1);
  }

  50% {
    transform: scale(0.95);
  }

  100% {
    transform: scale(1);
  }
}

::-webkit-scrollbar{
    display: none;
}
#nav{
    height:10vw;
}
#struktur:hover{
    background-color: rgba(128, 236, 143, 0.3)
}

button.primary {
  background-color: goldenrod;
  border: 1px solid goldenrod;
  border-radius: 3px;
  font-family: Montserrat, sans-serif;
  font-weight: 500;
  padding: 10px 25px;
}
.primary:hover{
  background-color: gold;
  transition-duration: 0.4s;
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
</style>
<link rel="stylesheet" href="{{asset('css/aos.css')}}">
<script src="{{asset('js/typed.umd.js')}}"></script>
<header id="headerOlim" class="d-flex flex-wrap align-items-center p-5" >
    <div data-aos="fade-up" data-aos-duration="1000" class="center">
        <h1 class="text-success-emphasis"><span class="fs-1 fw-bold text-warning-emphasis">Bagian</span> <br> <span class="judul" style="font-size:6vw;font-weight:bold">HUMAS</span></h1>    
        <p class="fw-bold text-warning-emphasis">MA <span id="auto-type" class="fw-bold text-warning-emphasis"></span></p>
        <div class="d-flex flex-wrap gap-2" id="nav">
            <a href="#tupoksi" class="button" style="width: 25%"><span>TUPOKSI</span></a>
            <a href="#mitra" class="button" ><span>Mitra</span></a>
            <a href="#galeri" class="button"><span>Galeri</span></a>
            <a href="/galeri?kategori=mitra" class="button"><span>Alumni</span></a>
        </div>
    </div>
    <div data-aos="fade-right" data-aos-duration="1000" class="right">
        <img style="height:30vw" class="d-block m-auto" src="{{asset('img/humas.png')}}" alt="">
    </div>
</header>
<div class="d-flex flex-wrap" id="tupoksi">
    <div id="tugas" class="w-50 p-5">
        <div class="card border-success">
            <div class="card-header bg-success-subtle">
                <h3 class="text-center w-100">Tugas, Pokok, dan Fungsi</h3>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Mengatur dan mengembangkan hubungan dengan Komite , Wali Santri, tokoh Masyarakat dan lain sebagainya  </li>
              <li class="list-group-item">Menyelenggarakan kemah bakti santri </li>
              <li class="list-group-item">Menyelenggaarakan milad MADRASAH ( gebyar seni ) </li>
              <li class="list-group-item">Mendata para Alumni </li>
              <li class="list-group-item">Menjalani hubungan kerja sama dengan lembaga-lembaga professional dan instansi terkait </li>
              <li class="list-group-item">Menangani karnaval, upacara hari besar Nasional / hari besar Islam dan lain sebagainya  </li>
              <li class="list-group-item">Mengawasi dan melaporkan keaktifan guru kepada kepala madrasah yang rekapanya di kirim oleh petugas Piket</li>
            </ul>
        </div>
    </div>
    <div id="staf" class="d-flex flex-wrap w-50 p-5">
        <h3 class="text-center w-100">Struktur HUMAS</h3>
        <div id="struktur" class="card w-100 p-3" style="max-height: 90px">
            <div class="d-flex">
                <div style="width:10%;">
                    <img src="/img/asatidz/IMG-20250319 074215.png" style="object-fit:cover;width:50px;height:50px;object-position:top" class="rounded-circle d-block" alt="">
                </div>
                <div class="w-75 px-3">
                    <h5>Ahmad Taufiq, S.Pd</h5>
                    <p>Waka HUMAS</p>
                </div>
            </div>
        </div>
        <div id="struktur" class="card w-100 p-3" style="max-height: 90px">
            <div class="d-flex">
                <div style="width:10%;">
                    <img src="/img/asatidz/IMG-20250312 095540.jpg" style="object-fit:cover;width:50px;height:50px;object-position:top" class="rounded-circle d-block" alt="">
                </div>
                <div class="w-75 px-3">
                    <h5>Muhammad Daniel Ainul Islam</h5>
                    <p>Staf HUMAS</p>
                </div>
            </div>
        </div>
        <div id="struktur" class="card w-100 p-3" style="max-height: 90px">
            <div class="d-flex">
                <div style="width:10%;">
                    <img src="/img/asatidz/IMG-20250312 095217.jpg" style="object-fit:cover;width:50px;height:50px;object-position:top" class="rounded-circle d-block" alt="">
                </div>
                <div class="w-75 px-3">
                    <h5>Muhammad Fakhrur Rizky, SE.</h5>
                    <p>Staf HUMAS</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="mitra" class="p-3">
    <h1 data-aos="flip-left" data-aos-duration="1000" class="text-center fw-bold text-success-emphasis">Mitra Madrasah</h1>
    <img data-aos="flip-left" data-aos-duration="1000" style="max-width: 75%" class="mx-auto d-block mb-4"  src="/img/hr.png" alt="">
    <p class="text-center">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, dolor veniam saepe eos illo nisi ratione? Ex officia eum vel dolorum labore aperiam odio! Unde harum asperiores aut at ducimus, non ipsa veritatis porro, quaerat doloremque consequuntur beatae voluptate alias, officia fugiat animi natus. Ea doloribus recusandae provident iste quos.
    </p>
    <div class="d-flex flex-wrap justify-content-center gap-3">
        <div id="mitra_card" class="card w-25 p-3">
            <img src="/img/uin.png" alt="">
            <h3 class="mt-4 text-center fw-bold">UIN Malik Ibrahim Malang</h3>
            <hr class="w-50 mx-auto rounded-pill border border-success border-3 opacity-100">
            <p class="text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, corporis?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, corporis?
            </p>
        </div>
        <div id="mitra_card" class="card w-25 p-3">
            <img src="/img/um.jpg" alt="">
            <h3 class="mt-4 text-center fw-bold">Universitas Negeri Malang</h3>
            <hr class="w-50 mx-auto rounded-pill border border-success border-3 opacity-100">
            <p class="text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, corporis?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, corporis?
            </p>
        </div>
        <div id="mitra_card" class="card w-25 p-3">
            <img src="/img/jami.jpg" alt="">
            <h3 class="mt-4 text-center fw-bold">Jam'iyyatul Qurra Wal Huffazh</h3>
            <hr class="w-50 mx-auto rounded-pill border border-success border-3 opacity-100">
            <p class="text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, corporis?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, corporis?
            </p>
        </div>
        <div id="mitra_card" class="card w-25 p-3">
            <img src="/img/pplh.png" alt="">
            <h3 class="mt-4 text-center fw-bold">PPLH Seloliman, Mojokerto</h3>
            <hr class="w-50 mx-auto rounded-pill border border-success border-3 opacity-100">
            <p class="text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, corporis?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, corporis?
            </p>
        </div>
        <div id="mitra_card" class="card w-25 p-3">
            <img src="/img/quipper.png" alt="">
            <h3 class="mt-4 text-center fw-bold">Quipper School Premium</h3>
            <hr class="w-50 mx-auto rounded-pill border border-success border-3 opacity-100">
            <p class="text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, corporis?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, corporis?
            </p>
        </div>
        <div id="mitra_card" class="card w-25 p-3">
            <img src="/img/bsi.jpg" alt="">
            <h3 class="mt-4 text-center fw-bold">Bank Syariah Indonesia</h3>
            <hr class="w-50 mx-auto rounded-pill border border-success border-3 opacity-100">
            <p class="text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, corporis?
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, corporis?
            </p>
        </div>
    </div>
</div>
<h1 data-aos="flip-left" data-aos-duration="1000" class="mt-5 text-center fw-bold text-success-emphasis">Galeri Kegiatan</h1>
<img data-aos="flip-left" data-aos-duration="1000" style="max-width: 75%" class="mx-auto d-block mb-4"  src="/img/hr.png" alt="">
<div class="container">
    <div class="all">
<div id="galeri">
    <div class="gallery">
    <img src="{{asset('img/slide4.png')}}" alt="Aula" class="img4">
    <img src="{{asset('img/slide4.png')}}" alt="Perpustakaan" class="img1">
    <img src="{{asset('img/slide4.png')}}" alt="Kelas" class="img3">
    <img src="{{asset('img/slide4.png')}}" alt="Laboratorium Komputer" class="img2">
    <img src="{{asset('img/slide4.png')}}" alt="Proses Belajar" class="img5">
    <img src="{{asset('img/slide4.png')}}" alt="CCTV Keamanan" class="img6">
    </div>
</div>
</div>
</div>


<script src="{{asset('js/aos.js')}}"></script>
<script>
    AOS.init();
    var typed = new Typed("#auto-type", {
            strings: ["ZAHA 1","MUMTAZ","BERKUALITAS"], 
            typeSpeed: 50,
            backSpeed: 50,
            loop: true,
        });
</script>
@endsection
