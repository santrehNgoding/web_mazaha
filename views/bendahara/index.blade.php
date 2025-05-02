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
</style>
<link rel="stylesheet" href="{{asset('css/aos.css')}}">
<script src="{{asset('js/typed.umd.js')}}"></script>
<header id="headerOlim" class="d-flex flex-wrap align-items-center p-5" >
    <div data-aos="fade-up" data-aos-duration="1000" class="center">
        <h1 class="text-success-emphasis"><span class="fs-1 fw-bold text-warning-emphasis">Bagian</span> <br> <span class="judul" style="font-size:6vw;font-weight:bold">Keuangan</span></h1>    
        <p class="fw-bold text-warning-emphasis">MA <span id="auto-type" class="fw-bold text-warning-emphasis"></span></p>
    </div>
    <div data-aos="fade-right" data-aos-duration="1000" class="right">
        <img style="height:30vw" class="d-block m-auto" src="{{asset('img/keuangan.png')}}" alt="">
    </div>
</header>
<div class="d-flex flex-wrap" id="tupoksi">
    <div id="tugas" class="w-50 p-5">
        <div class="card border-success">
            <div class="card-header bg-success-subtle">
                <h3 class="text-center w-100">Tugas, Pokok, dan Fungsi</h3>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Menerima keuangan dari siswa melalui pembantu bendahara </li>
              <li class="list-group-item">Memasukkan ke rekening Bank yang telah ditentukan </li>
              <li class="list-group-item">Membukukan ke buku Kas ke uangan dibantu pembantu bendahara </li>
              <li class="list-group-item">Mengatur dan menyiapkan bisyaroh, transport Guru dan Karyawan</li>
              <li class="list-group-item">Membayar rekening listrik, wifi, koran dan telepon </li>
              <li class="list-group-item">Menyetorkan keuangan pesantren /  Yayasan </li>
              <li class="list-group-item">Mengeluarkan keuangan untuk keperluan MADRASAH di luar rutin setelah diketahui kepala MADRASAH </li>
              <li class="list-group-item">laporan bulanan  </li>
            </ul>
        </div>
    </div>
    <div id="staf" class="d-flex flex-wrap w-50 p-5">
        <h3 class="text-center w-100">Struktur Keuangan</h3>
        <div id="struktur" class="card w-100 p-3" style="max-height: 90px">
            <div class="d-flex">
                <div style="width:10%;">
                    <img src="/img/asatidz/IMG_5120.jpg" style="object-fit:cover;width:50px;height:50px;object-position:top" class="rounded-circle d-block" alt="">
                </div>
                <div class="w-75 px-3">
                    <h5>Ahmad Juwaini, M., S.Ag, M.Pd</h5>
                    <p>Bendahara</p>
                </div>
            </div>
        </div>
        <div id="struktur" class="card w-100 p-3" style="max-height: 90px">
            <div class="d-flex">
                <div style="width:10%;">
                    <img src="/img/asatidz/IMG-20250312 095345.jpg" style="object-fit:cover;width:50px;height:50px;object-position:top" class="rounded-circle d-block" alt="">
                </div>
                <div class="w-75 px-3">
                    <h5>Nur Fitriyah, S.Pd.I</h5>
                    <p>Staf Keuangan</p>
                </div>
            </div>
        </div>
        <div id="struktur" class="card w-100 p-3" style="max-height: 90px">
            <div class="d-flex">
                <div style="width:10%;">
                    <img src="/img/asatidz/IMG-20250312 131602.jpg" style="object-fit:cover;width:50px;height:50px;object-position:top" class="rounded-circle d-block" alt="">
                </div>
                <div class="w-75 px-3">
                    <h5>Siti Walida, S.Pd</h5>
                    <p>Staf Keuangan</p>
                </div>
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
