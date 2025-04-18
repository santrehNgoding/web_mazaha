@extends('layouts.app')
@section('content')
<style>
     .title{
    /* background-color: rgba(17, 207, 74, 0.4); */
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    padding: 15vh;
    height:60vh;
    z-index: 2; 
    text-shadow: 10px 10px 10px #000;
}
#h1{
    font-size: 6vw;
}

.headerasatidz {
    position: relative;
    width: 100%;
    height: 60vh;
    overflow: hidden;
    margin-bottom: 15vw;
}
@media only screen and (max-width:767px){
    .headerasatidz {
        margin-bottom: 35vw;

        }
    #daftar {
        width:90% !important;
        height:80vw
    }
    #detail img{
        width:80%;
        margin-bottom:10px;
    }
    .foto{
        width:90%;
        margin-bottom:10px;
    }
}
@media only screen and (min-width:768px){
    h5 {
        font-size:10vw !important;
        margin-top: -100px !important;
    }
    #detail img, #detail div{
        width:45%;
        height: 45%;
        margin-right:20px
    }
    #daftar {
        height:35vw;
    }
    .foto{
        width:40%;
    }
}
video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; 
    /* z-index: 1; */
}
#card{
    background-image:linear-gradient(to top right,#ffd401, #da7421);
    color:#033919
}
#cardr{
    color: #ffd401;
    background-image:linear-gradient(to top right,#046c3c, #033919)
}
::-webkit-scrollbar{
    display:none
}

</style>
<link rel="stylesheet" href="{{asset('css/aos.css')}}">
<header class="headerasatidz">
    <div data-aos="fade-down" data-aos-duration="1000" class="title">
        <h1 id="h1"  class="text-center text-light fw-bold">🏅Prestasi Olimpiade🏅</h1>
        <q class="text-light text-center mx-auto d-block">Perjalanan meraih mimpi dan membanggakan almamater melalui kompetisi akademik tingkat lokal hingga internasional</q>
    </div>
    <video autoplay muted loop plays-inline style="width:100%;border:none">
        <source src="/img/olimpiade/prestasi.mp4">
    </video>
</header>
<div  class="d-flex justify-content-around position-absolute gap-3" 
     style="width:100%; left:0; top:65vh; z-index:3">
    <div data-aos="fade-up" data-aos-duration="1000" id="card" class="card p-3" style="width:45%;height:auto">
        <img class="w-25" src="/img/olimpiade/hijau.png" alt="">
        <h5 class="number fw-bold text-center" id="number1">0</h5>
        <p class="text-center">
        Total Kejuaraan Tingkat Regional
        </p>
    </div>
    <div data-aos="fade-up" data-aos-duration="1000" id="cardr" class="card p-3" style="width:45%;height:auto">
        <img class="w-25" src="/img/olimpiade/kuning.png" alt="">
        <h5 class="number fw-bold text-center" id="number2">0</h5>
        <p class="text-center">
        Total Kejuaraan Tingkat Nasional
        </p>
    </div>
    <div data-aos="fade-up" data-aos-duration="1000" id="card" class="card p-3" style="width:45%;height:auto">
        <img class="w-25" src="/img/olimpiade/hijau.png" alt="">
        <h5 class="number fw-bold text-center" id="number3">0</h5>
        <p class="text-center">
        Total Kejuaraan Tingkat Internasional
        </p>
    </div>
</div>
<h1 data-aos="flip-left" data-aos-duration="1000" class="text-center fw-bold text-success-emphasis">Daftar Prestasi Olimpiade</h1>
    <img data-aos="flip-left" data-aos-duration="1000" style="max-width: 75%" class="mx-auto d-block mb-4"  src="/img/hr.png" alt="">
<div class="d-flex flex-wrap justify-content-evenly" id="bungkus">
    <div class="foto">
        <img data-aos="fade-down-left" data-aos-duration="1000" class="w-100 my-auto" src="/img/olimpiade/desain.png" alt="">
    </div>
    <div data-aos="fade-down-right" data-aos-duration="1000" id="daftar" class="overflow-y-auto mx-3 w-50 mb-5 " >
        @foreach ($rows as $row)
            <details class="mb-1">
                <summary class="bg-success-subtle p-3 px-5 rounded-top-3 fw-bold"> 
                    {{$row->title}}
                </summary>
                <div id="detail" class="d-flex flex-wrap justify-content-around border border-success-subtle  px-5 py-3">
                    <img src="/img/prestasi/{{$row->file}}" alt="">
                    <div>
                        <button class="btn btn-success mb-3">{{$row->created_at}}</button>
                        <p>{{$row->berita}}</p>
                    </div>
                </div>
            </details>
        @endforeach
        <br>
    </div>
</div>
<script src="{{asset('js/aos.js')}}"></script>
<script>
    AOS.init();
    function animateNumber(elementId, target, duration) {
            const element = document.getElementById(elementId);
            const start = 0;
            const increment = target / (duration / 16);
            let current = start;
            
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    clearInterval(timer);
                    current = target;
                }
                element.textContent = Math.floor(current);
            }, 16);
        }

        window.onload = function() {
            // Animasi untuk 3 angka berbeda
            animateNumber('number1', {{$regional}}, 1500);  // Angka pertama ke 10 dalam 1 detik
            animateNumber('number2', {{$nasional}}, 1500); // Angka kedua ke 15 dalam 1.5 detik
            animateNumber('number3', {{$internasional}}, 1500); // Angka ketiga ke 20 dalam 2 detik
        };

</script>
@endsection
