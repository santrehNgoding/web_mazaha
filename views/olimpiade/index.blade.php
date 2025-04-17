@extends('layouts.app')
@section('content')
<style>
    #headerOlim{
        background-image: url(/img/bg.jpg);
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
        }
        #headerOlim{
            height:auto;
        }
        #nav{
            order:3;
            width: 100% !important;
        }
        .button span {
            font-size: 2vw;
        }
    }
    @media only screen and (min-width:768px){
        .left,.right{
            width:25%;
        }
        .center{
            width:50%;
        }
        #headerOlim{
            height:80vh;
        }
    }
    .center{
        text-align: center;
    }
    .news-ticker {
        width: 100%;
        height: 50px;
        overflow: hidden;
        position: relative;
        background-color:#033919;
        border-top: 1px solid #ddd;
        border-bottom: 1px solid #ddd;

    }
    
    .news-content {
        position: absolute;
        white-space: nowrap;
        font-size: 18px;
        font-weight: 500;
        color: gold;
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
  background: #033919;
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
  color: #fff;
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
@media only screen and (min-width:768px){
    #purpose{
    width:55%;
}
#holland{
    width:40%;
    height:60%;
    margin-left: 5%;
}
#myCarousel{
    top: -700px;
}
}
@media only screen and (max-width:767px){
    #purpose{
        width:100%;
        order: 2;
    }
    #holland{
    width:100%;
    height:auto;
    order: 1;
}
#item-purpose{
    width:90% !important;
}
#myCarousel{
    top: -320px;
}
#kartu {
    height:50vw !important;
}
#logo img{
    width: 20% !important;
}
#logo {
padding: 5px !important;
}
.kur{
    font-size:0.5rem !important;
}
}
::-webkit-scrollbar{
    display: none;
}
#kurikulum, #struktur, #sejarah{
    margin-top:100px !important;
}
</style>
<link rel="stylesheet" href="{{asset('css/aos.css')}}">
<script src="{{asset('js/typed.umd.js')}}"></script>
<header id="headerOlim" class="d-flex flex-wrap align-items-center p-5" >
    <div data-aos="fade-right" data-aos-duration="1000" class="left">
        <img class="d-block m-auto w-100" src="{{asset('img/olimpiade/coce.png')}}" alt="">
    </div>
    <div data-aos="fade-left" data-aos-duration="1000" class="center">
        <h1 class="text-success-emphasis"><span class="fs-1 fw-bold text-warning-emphasis">Bimbingan</span> <br> <span style="font-size:6vw;font-weight:bold">Olimpiade</span></h1>    
        <p id="auto-type" class="fw-bold"></p>
    </div>
    <div data-aos="fade-right" data-aos-duration="1000" class="right">
        <img class="d-block m-auto w-100" src="{{asset('img/olimpiade/coco.png')}}" alt="">
    </div>
    <div data-aos="fade-up" data-aos-duration="1000" class="w-50 d-flex flex-wrap gap-2" id="nav">
        <a href="#sejarah" class="button"><span>Sejarah</span></a>
        <a href="#struktur" class="button"><span>Struktur</span></a>
        <a href="#kurikulum" class="button" style="width: 25%"><span>Kurikulum</span></a>
        <a href="{{route('olimpiade.prestasi')}}" class="button"><span>Prestasi</span></a>
    </div>
</header>
<div class="news-ticker" id="newsTickerContainer">
    <div class="news-content" id="newsTicker">
        @foreach($rows as $row)
           🏆 {{ $row->berita }}
        @endforeach
    </div>
</div>
<div id="sejarah" class="p-5">
    <h1 data-aos="flip-left" data-aos-duration="1000" class="text-center fw-bold text-success-emphasis">Sejarah Berdirinya Program Olimpiade</h1>
    <img data-aos="flip-left" data-aos-duration="1000" style="max-width: 75%" class="mx-auto d-block mb-4"  src="/img/hr.png" alt="">
    <p data-aos="fade-up" data-aos-duration="1000" style="text-align: justify"><span class="fs-2 fw-bold">B</span>erawal dari beberapa surat undangan kompetisi baik dari pemerintah, yakni : Kemendikbud ataupun Kemenag, beberapa Universitas, ataupun ajang kompetisi swasta yang lain, tetapi Madrasah Aliyah belum bisa sepenuhnya aktif mengikuti ajang kompetisi tersebut. Padahal ajang kompetisi ini bukan cuma sekedar lomba, tapi juga jadi ajang pembuktian bahwa Madrasah Aliyah juga memiliki santri-santri yang kemampuannya luar biasa baik di bidang sains maupun bidang sosial. 
        Sehingga hal tersebut memicu Wakil Kepala Madrasah Bidang Kurikulum tergugah untuk membentuk Program Olimpiade MA Zainul Hasan 1 Genggong dengan mengundang pembina dan beberapa guru pembimbing dari beberapa mapel, yakni : Matematika, Fisika, Kimia, Biologi, Ekonomi, dan Geografi. Dimana selanjutnya, program ini menjadi program yg telah berjalan dari tahun pelajaran 2020 – 2021 hingga saat ini. 
    Tujuan utama dari pembentukan Program Olimpiade ini adalah untuk meningkatkan kualitas pendidikan sains dan sosial di Madrasah Aliyah ZAHA 1 Genggong, serta memberikan wadah bagi santri berbakat untuk berkompetisi dan mengembangkan potensinya. Ada alasan mengapa Program Olimpiade ini dibentuk:
    </p>
    <div class="container d-flex flex-wrap">
        <div id="purpose" class="d-flex flex-wrap gap-2 mt-2">
            <div id="item-purpose" data-aos="zoom-in" data-aos-duration="1000" class="card bg-success p-3" style="width:45%;height:auto">
                <img class="w-25" src="/img/asah.png" alt="">
                <h5 class="fw-bold text-light">Mengasah Kemampuan</h5>
                <p class="text-light">Ajang kompetisi itu seperti tempat latihan untuk mengasah kemampuan berpikir kritis, memecahkan masalah, dan belajar banyak hal baru.</p>
            </div>
            <div id="item-purpose" data-aos="zoom-in" data-aos-duration="1000" class="card border-success border-5 p-3" style="width:45%;height:auto">
                <img class="w-25" src="/img/jabat.png" alt="">
                <h5 class="fw-bold text-success">Membangun Jaringan</h5>
                <p class="text-success">
                    Santri juga bisa bertemu banyak teman baru yang punya minat yang sama saat berkompetisi secara offline.
                </p>
            </div>
            <div id="item-purpose" data-aos="zoom-in" data-aos-duration="1000" class="card border-success border-5 p-3" style="width:45%;height:auto">
                <img class="w-25" src="/img/Medal.png" alt="">
                <h5 class="fw-bold text-success">Membanggakan Keluarga dan Madrasah</h5>
                <p class="text-success">
                    Jika santri berhasil meraih prestasi di beberapa ajang kompetisi, mereka tidak hanya membanggakan diri sendiri, tetapi juga keluarga dan madarasah.
                </p>
            </div>
            <div id="item-purpose" data-aos="zoom-in" data-aos-duration="1000" class="card bg-success p-3" style="width:45%;height:auto">
                <img class="w-25" src="/img/jurusan.png" alt="">
                <h5 class="fw-bold text-light">Membuka Peluang</h5>
                <p class="text-light">Dengan mengikuti beberapa ajang kompetisi, santri punya kesempatan untuk masuk perguruan tinggi favorit dan mendapatkan beasiswa.</p>
            </div>
        </div>
        <img class="my-auto" data-aos="fade-up-left" data-aos-duration="800"  id="holland" src="/img/olimpiade/pembina.png" alt="Kyai Mutawakkil">
    </div>
</div>
<div id="struktur">
    <h1 data-aos="flip-left" data-aos-duration="1000" class="text-center fw-bold text-success-emphasis">Struktur Pengelola Program Olimpiade</h1>
    <img data-aos="flip-left" data-aos-duration="1000" style="max-width: 75%" class="mx-auto d-block mb-4"  src="/img/hr.png" alt="">
    <img data-aos="fade-down" data-aos-duration="1000" class="mx-auto d-block mb-4 w-100" src="/img/ss.jpg" alt="">
    
</div>
<div id="kurikulum">
    <h1 data-aos="flip-left" data-aos-duration="1000" class="text-center fw-bold text-success-emphasis">Kurikulum Program Olimpiade</h1>
    <img data-aos="flip-left" data-aos-duration="1000" style="max-width: 75%" class="mx-auto d-block mb-4"  src="/img/hr.png" alt="">
    <video autoplay loop muted plays-inline style="height:auto;margin-top:0px;padding:0px;width:100%">
        <source class="m-0 p-0" src="/img/olimpiade/video.mp4">
        </video>    
        <div id="myCarousel" class="carousel slide mb-6 position-relative" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Geser 1" aria-current="true"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Geser 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Geser 3"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Geser 4"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="4" aria-label="Geser 5"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="5" aria-label="Geser 6"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="6" aria-label="Geser 7"></button>
            </div>
        
            <div class="carousel-inner mt-5">
                <div class="carousel-item active bg-light bg-opacity-50  rounded-3 border-secondary" style="margin-left:10vw;width:80vw">
                    <div class="container d-flex flex-wrap p-5 w-100">
                        <div class="item w-50 ">
                            <img class="w-75 d-block shadow-lg rounded-pill rounded-bottom-0" src="/img/olimpiade/Picture1.jpg" alt="">
                        </div>
                        <div class="item w-50 fw-bold">
                            <h1 style="font-size:5vw" class="text-success-emphasis text-end fw-bold">Aninatul Baidiyah,S.TP</h1>
                            <h3 style="font-size:3vw" class="text-dark text-end">Pembina Olimpiade</h3>
                            <div id='logo' class="d-flex flex-wrap px-5 gap-1 justify-content-evenly w-100">
                                <img style="height:auto;width:20%" src="/img/olimpiade/osn.png" alt="">
                                <img style="height:auto;width:20%" src="/img/olimpiade/ksm.png" alt="">
                                <img style="height:auto;width:20%" src="/img/olimpiade/timo.png" alt="">
                                <img style="height:auto;width:20%" src="/img/olimpiade/hkimo.png" alt="">
                                <img style="height:auto;width:20%" src="/img/olimpiade/puspresnas.png" alt="">
                                <img style="height:auto;width:20%" src="/img/olimpiade/kpm.png" alt="">
                                <img style="height:auto;width:20%" src="/img/olimpiade/lsm.png" alt="">
                                <img style="height:auto;width:20%" src="/img/olimpiade/posi.png" alt="">
                            </div>
                        </div>
                    </div>  
                </div>
                @foreach ($teachers as $teacher)
                @if($teacher->id>1)
                <div id="kartu" class="carousel-item bg-light bg-opacity-50 shadow-lg rounded-3 border-secondary" style="margin-left:10vw;width:80vw;height:40vw">
                    <div class="container d-flex flex-wrap p-5 w-100">
                        <div class="item w-50">
                            <img class="w-75 d-block shadow-lg rounded-pill rounded-bottom-0" src="/img/olimpiade/{{$teacher->file}}" alt="">
                        </div>
                        <div class="item w-50 fw-bold">
                            <h1 style="font-size:3vw" class="text-success-emphasis text-end fw-bold">{{$teacher->nama}}</h1>
                            <h3 style="font-size:3vw" class="text-dark text-end">{{$teacher->jabatan}}</h3>
                            <div id='logo' class="d-flex flex-wrap px-5 h-50 w-100 overflow-y-auto">
                                <p class="kur" style="text-align: justify;font-size:1rem">{{$teacher->kurikulum}}</p>
                            </div>
                        </div>
                    </div>  
                </div>  
                @endif  
                @endforeach
        
        
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Sebelumnya</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Berikutnya</span>
            </button>
        </div>
</div>
<script src="{{asset('js/aos.js')}}"></script>
<script>
    AOS.init();
    var typed = new Typed("#auto-type", {
            strings: ["Gerbang awal menuju mimpi besar dan masa depan gemilang!"], 
            typeSpeed: 50,
            backSpeed: 50,
            loop: true,
        });
        document.addEventListener('DOMContentLoaded', function() {
        const container = document.getElementById('newsTickerContainer');
        const ticker = document.getElementById('newsTicker');
        
        // Tampilkan teks secara paksa untuk menghitung width
        ticker.style.visibility = 'visible';
        ticker.style.left = '100%';
        
        const textWidth = ticker.scrollWidth;
        const viewportWidth = window.innerWidth;
        const scrollSpeed = 150; // px per detik
        
        // Hitung durasi
        const duration = (textWidth + viewportWidth) / scrollSpeed;
        // Buat keyframes dinamis
        const style = document.createElement('style');
        style.innerHTML = `
            @keyframes scroll-news {
                0% { transform: translateX(0); }
                100% { transform: translateX(-${textWidth + viewportWidth}px); }
            }
        `;
        document.head.appendChild(style);
        
        // Terapkan animasi
        ticker.style.animationDuration = `${duration}s`;
        
        // Tandai container sudah ready
        container.classList.add('ready');
    });
</script>
@endsection
