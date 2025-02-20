@extends('layouts.app')
@section('content')
<head>
    <style>
    @media only screen and (max-width:767px){
        #title {
    font-size:6vw;
    margin-top: -30%
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

    </style>
</head>
<header>
    <video autoplay loop muted plays-inline style="width:100%;margin-top:0px;padding:0px">
        <source src="/img/Beranda/VIDIO 1.mp4">
        </video>
        <div id="myCarousel" class="carousel slide mb-6" data-bs-ride="carousel" data-bs-interval="3000">
            <div id="title" class="carousel-inner">
                <h3 data-aos="fade-up" data-aos-duration="1000" class="text-center text-light fw-bold">Selamat Datang di Madrasah Aliyah Zainul Hasan 1 Genggong </h3>
                <h3 data-aos="fade-up" data-aos-duration="1000" class="text-center text-light fw-bold">Madrasah Berbasis Pesantren dan Teknologi</h3>
                <form action="">
                <button id="basel" class="px-5 py-2 mt-3" style="color:white;border:2px white solid">Baca Selengkapnya</button>
            </form>
            <div id="unggul" class="container mt-5 d-flex justify-content-around gap-2">
                <a style="text-decoration:none" href=""><div class="card bg-secondary bg-opacity-50"><img class="m-3 mt-3 w-50 mx-auto" src="http://localhost:8000/img/Beranda/icon_tahfiz.png" alt=""><h6 class="fw-bold w-75 text-light mx-auto text-center mt-3 mb-3">Program Unggulan Tahfizul Quran</h6></div></a>
                <a style="text-decoration:none" href=""><div class="card bg-secondary bg-opacity-50"><img class="m-3 mt-3 w-50 mx-auto" src="http://localhost:8000/img/Beranda/icon_tahqiq.png" alt=""><h6 class="fw-bold w-75 text-light mx-auto text-center mt-3 mb-3">Program Unggulan Tahqiqu Qiroatil Kutub</h6></div></a>
                <a style="text-decoration:none" href=""><div class="card bg-secondary bg-opacity-50"><img class="m-3 mt-3 w-50 mx-auto" src="http://localhost:8000/img/Beranda/icon_pro.png" alt=""><h6 class="fw-bold w-75 text-light mx-auto text-center mt-3 mb-3">Program Unggulan Program Intensifikasi TIK</h6></div></a>
                <a style="text-decoration:none" href=""><div class="card bg-secondary bg-opacity-50"><img class="m-3 mt-3 w-50 mx-auto" src="http://localhost:8000/img/Beranda/icon_olim.png" alt=""><h6 class="fw-bold w-75 text-light mx-auto text-center mt-3 mb-3">Program Unggulan Bimbingan Olimpiade</h6></div></a>
            </div>
    </div>
        </div>
</header>
@include('layouts.test')
@endsection