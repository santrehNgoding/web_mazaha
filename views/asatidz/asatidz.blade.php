@extends('layouts.app')
@section('content')
<style>
        .news-ticker {
        width: 100%;
        height: 50px;
        overflow: hidden;
        position: relative;
        background-color:#046c3c;
        border-top: 1px solid #ddd;
        border-bottom: 1px solid #ddd;

    }
    
    .news-content {
        position: absolute;
        white-space: nowrap;
        font-size: 18px;
        font-weight: 500;
        color: #fff;
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
    @media only screen and (max-width:767px){
        #leftGanjil,#leftGenap,#rightGenap, #rightGanjil{
            width:100%;
        }
    }
    @media only screen and (min-width:768px){
        #leftGanjil,#leftGenap,#rightGenap, #rightGanjil{
            width:50%;
        }
        #rightGenap{
            order:1;
        }
        #leftGenap{
            order:2;
        }
    }
    p{
        text-align: justify;
    }
</style>
<link rel="stylesheet" href="{{asset('css/aos.css')}}">
<header>
    <video class="w-100 h-auto" loop controls autoplay plays-inline style="height:auto;margin-top:0px;padding:0px">
        <source class="m-0 p-0" src="/img/sambutan.mp4">
    </video>
    <div class="news-ticker" id="newsTickerContainer">
        <div class="news-content" id="newsTicker">
            Sambutan Kepala Madrasah Aliyah Zainul Hasan 1 Genggong : Nun Ahsan Maliki, S.Sy, M.Pd
        </div>
    </div>
</header>
<h1 data-aos="flip-left" data-aos-duration="1000" class="mt-5 text-center fw-bold text-success-emphasis">Kepala Madrasah dari Masa ke Masa</h1>
<img data-aos="flip-left" data-aos-duration="1000" style="max-width: 75%" class="mx-auto d-block mb-4"  src="/img/hr.png" alt="">
<p class="mx-5" style="text-align: justify">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint cumque atque minima nisi odio voluptas totam, velit quis, alias autem consequatur assumenda eos, esse itaque labore vero laborum? Repellat sit aperiam delectus, dolores magni voluptas dolor nesciunt alias dolore. Minus placeat, eos, sequi vero aliquid explicabo et vel amet adipisci eligendi exercitationem beatae quo accusamus magnam repellat voluptates error facere quia velit in reprehenderit porro nulla? Maxime quos nulla deleniti beatae mollitia aperiam laborum, debitis possimus necessitatibus, magnam nesciunt impedit repellat temporibus doloremque rem iure omnis qui voluptas ipsa! Atque iste, animi provident similique voluptatibus illum tempora cum architecto quaerat.
</p>
<section style="height: 800px;overflow-y:auto">
<div class="d-flex flex-wrap mx-5 mb-5">
    <div id="leftGanjil">
        <img class="w-75 mx-auto d-block" src="/img/Kepala Madrasah_circle.png" alt="">
        <h4 class="text-center fw-bold mt-3">Nun Ahsan Maliki, S.Sy,M.Pd</h4>
        <h6 class="text-center fw-bold ">Periode 2012 - Sekarang</h6>
    </div>
    <div id="rightGanjil">
        <button class="btn btn-success my-3">Profil Singkat</button>
        <p class="w-100">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, laborum! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt corporis eaque, eveniet illum odit necessitatibus delectus nisi. A, ad autem!
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, laborum!
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, laborum!
        </p>
        <button class="btn btn-success my-3">Gagasan</button>
        <p class="w-100">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, laborum! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt corporis eaque, eveniet illum odit necessitatibus delectus nisi. A, ad autem!
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, laborum!
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, laborum!
        </p>
    </div>
</div>
<div class="d-flex flex-wrap mx-5 mb-5">
    <div id="leftGenap">
        <img class="w-75 mx-auto d-block" src="/img/Kepala Madrasah_circle.png" alt="">
        <h4 class="text-center fw-bold mt-3">Nun Ahsan Maliki, S.Sy,M.Pd</h4>
        <h6 class="text-center fw-bold ">Periode 2012 - Sekarang</h6>
    </div>
    <div id="rightGenap">
        <button class="btn btn-success my-3">Profil Singkat</button>
        <p class="w-100">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, laborum! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt corporis eaque, eveniet illum odit necessitatibus delectus nisi. A, ad autem!
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, laborum!
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, laborum!
        </p>
        <button class="btn btn-success my-3">Gagasan</button>
        <p class="w-100">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, laborum! Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt corporis eaque, eveniet illum odit necessitatibus delectus nisi. A, ad autem!
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, laborum!
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore, laborum!
        </p>
    </div>
</div>
</section>
<script src="{{asset('js/aos.js')}}"></script>
<script>
    AOS.init();
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
