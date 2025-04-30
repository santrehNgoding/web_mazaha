@extends('layouts.app')
@section('content')
<head>
<style>
    #headerOlim{
        background-image: url(/img/tahfiz/header.jpg);
        background-attachment: fixed;
        object-fit: cover;
        object-position: bottom;
    }
    .center{
        width:100%;
        text-shadow: 10px 10px 10px #000;
    }
    @media only screen and (max-width:767px){
        .left{
            display:none;
        }
        .auto-type{
            font-size:10vw !important;
            text-align: center;
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
        .ket,.img{
            width:100%;
        }
        .ket{
            order:2;
        }
        .img{
            order:1;
            margin-bottom: 10px;
        }
        .card{
            min-width:100%;
        }
        #galeri{
            overflow-x: auto;
        }
    }
    @media only screen and (min-width:768px){
        #headerOlim{
            height:80vh;
        }
        .ket,.img{
            width:50%;
        }
        .card{
            min-width: 33%;
        }
    }
    .center{
        text-align: center;
    }
    /* From Uiverse.io by MuhammadHasann */ 
.button {
  --black-700: hsla(0 0% 12% / 1);
  --border_radius: 9999px;
  --transtion: 0.3s ease-in-out;
  --offset: 2px;

  cursor: pointer;
  position: relative;

  display: flex;
  align-items: center;
  gap: 0.5rem;

  transform-origin: center;

  padding: 1rem 2rem;
  background-color: transparent;

  border: none;
  border-radius: var(--border_radius);
  transform: scale(calc(1 + (var(--active, 0) * 0.1)));

  transition: transform var(--transtion);
}

.button::before {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);

  width: 100%;
  height: 100%;
  background-color: #046c3c; /* Warna hijau tua */

  border-radius: var(--border_radius);
  box-shadow: inset 0 0.5px hsl(0, 0%, 100%), inset 0 -1px 2px 0 hsl(54, 93%, 47%),
    0px 4px 10px -4px hsla(0 0% 0% / calc(1 - var(--active, 0))),
    0 0 0 calc(var(--active, 0) * 0.375rem) hsla(44, 100%, 50%, 0.75);

  transition: all var(--transtion);
  z-index: 0;
}

.button::after {
  content: "";
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);

  width: 100%;
  height: 100%;
  background-color: hsla(44, 86%, 25%, 0.75); /* Warna gold dasar */
  background-image: radial-gradient(
      at 51% 89%,
      rgb(248, 199, 64) 0px, /* Gold lebih terang */
      transparent 50%
    ),
    radial-gradient(at 100% 100%, rgb(131, 98, 9) 0px, /* Gold medium */
    transparent 50%),
    radial-gradient(at 22% 91%, rgb(207, 158, 22) 0px, /* Gold medium */
    transparent 50%);
  background-position: top;

  opacity: var(--active, 0);
  border-radius: var(--border_radius);
  transition: opacity var(--transtion);
  z-index: 2;
}

.button:is(:hover, :focus-visible) {
  --active: 1;
}
.button:active {
  transform: scale(1);
}

.button .dots_border {
  --size_border: calc(100% + 2px);

  overflow: hidden;

  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);

  width: var(--size_border);
  height: var(--size_border);
  background-color: transparent;

  border-radius: var(--border_radius);
  z-index: -10;
}

.button .dots_border::before {
  content: "";
  position: absolute;
  top: 30%;
  left: 50%;
  transform: translate(-50%, -50%);
  transform-origin: left;
  transform: rotate(0deg);

  width: 100%;
  height: 2rem;
  background-color: white;

  mask: linear-gradient(transparent 0%, white 120%);
  animation: rotate 2s linear infinite;
}

@keyframes rotate {
  to {
    transform: rotate(360deg);
  }
}

.button .sparkle {
  position: relative;
  z-index: 10;

  width: 1.75rem;
}

.button .sparkle .path {
  fill: currentColor;
  stroke: currentColor;

  transform-origin: center;

  color: hsl(0, 0%, 100%);
}

.button:is(:hover, :focus) .sparkle .path {
  animation: path 1.5s linear 0.5s infinite;
}

.button .sparkle .path:nth-child(1) {
  --scale_path_1: 1.2;
}
.button .sparkle .path:nth-child(2) {
  --scale_path_2: 1.2;
}
.button .sparkle .path:nth-child(3) {
  --scale_path_3: 1.2;
}

@keyframes path {
  0%,
  34%,
  71%,
  100% {
    transform: scale(1);
  }
  17% {
    transform: scale(var(--scale_path_1, 1));
  }
  49% {
    transform: scale(var(--scale_path_2, 1));
  }
  83% {
    transform: scale(var(--scale_path_3, 1));
  }
}

.button .text_button {
  position: relative;
  z-index: 10;

  background-image: linear-gradient(
    90deg,
    hsla(0 0% 100% / 1) 0%,
    hsla(0 0% 100% / var(--active, 0)) 120%
  );
  background-clip: text;

  font-size: 1rem;
  color: transparent;
}
@media only screen and (max-width:767px){
    .button{
        margin:auto !important;
    }
}
.card:hover{
    border-bottom:10px #033919 solid;
    border-radius:20px;
    margin-top: 0px !important;
    transition-duration: 0.3s;
}
.card{
    box-shadow: 0px 5px 5px #046c3c;
    margin-top: 15px !important;
    margin-bottom:20px;
}
</style>
<script src="{{asset('js/sweetalert.min.js')}}"></script> 
<link rel="stylesheet" href="{{asset('css/aos.css')}}">
</head>
<header id="headerOlim" class="d-flex flex-wrap align-items-center p-5" >
    <div data-aos="fade-down" data-aos-duration="1000" class="center">
        <h1 class="text-light ">
            <span class="fs-1 fw-bold">Program Unggulan</span>
             <br> 
             <span style="font-size:6vw;font-weight:bold">Tahfizul Qur'an</span></h1>    
        <p id="auto-type" class="fw-bold"></p>
    </div>
    <div data-aos="fade-down" data-aos-duration="1000" class="mx-auto" id="nav">
        <!-- From Uiverse.io by MuhammadHasann --> 
        <button class="button" id="audioControl">
    <div class="dots_border"></div>
    <svg
      xmlns="http://www.w3.org/2000/svg"
      fill="none"
      viewBox="0 0 24 24"
      class="sparkle"
    >
      <path
        class="path"
        stroke-linejoin="round"
        stroke-linecap="round"
        stroke="black"
        fill="black"
        d="M14.187 8.096L15 5.25L15.813 8.096C16.0231 8.83114 16.4171 9.50062 16.9577 10.0413C17.4984 10.5819 18.1679 10.9759 18.903 11.186L21.75 12L18.904 12.813C18.1689 13.0231 17.4994 13.4171 16.9587 13.9577C16.4181 14.4984 16.0241 15.1679 15.814 15.903L15 18.75L14.187 15.904C13.9769 15.1689 13.5829 14.4994 13.0423 13.9587C12.5016 13.4181 11.8321 13.0241 11.097 12.814L8.25 12L11.096 11.187C11.8311 10.9769 12.5006 10.5829 13.0413 10.0423C13.5819 9.50162 13.9759 8.83214 14.186 8.097L14.187 8.096Z"
      ></path>
      <path
        class="path"
        stroke-linejoin="round"
        stroke-linecap="round"
        stroke="black"
        fill="black"
        d="M6 14.25L5.741 15.285C5.59267 15.8785 5.28579 16.4206 4.85319 16.8532C4.42059 17.2858 3.87853 17.5927 3.285 17.741L2.25 18L3.285 18.259C3.87853 18.4073 4.42059 18.7142 4.85319 19.1468C5.28579 19.5794 5.59267 20.1215 5.741 20.715L6 21.75L6.259 20.715C6.40725 20.1216 6.71398 19.5796 7.14639 19.147C7.5788 18.7144 8.12065 18.4075 8.714 18.259L9.75 18L8.714 17.741C8.12065 17.5925 7.5788 17.2856 7.14639 16.853C6.71398 16.4204 6.40725 15.8784 6.259 15.285L6 14.25Z"
      ></path>
      <path
        class="path"
        stroke-linejoin="round"
        stroke-linecap="round"
        stroke="black"
        fill="black"
        d="M6.5 4L6.303 4.5915C6.24777 4.75718 6.15472 4.90774 6.03123 5.03123C5.90774 5.15472 5.75718 5.24777 5.5915 5.303L5 5.5L5.5915 5.697C5.75718 5.75223 5.90774 5.84528 6.03123 5.96877C6.15472 6.09226 6.24777 6.24282 6.303 6.4085L6.5 7L6.697 6.4085C6.75223 6.24282 6.84528 6.09226 6.96877 5.96877C7.09226 5.84528 7.24282 5.75223 7.4085 5.697L8 5.5L7.4085 5.303C7.24282 5.24777 7.09226 5.15472 6.96877 5.03123C6.84528 4.90774 6.75223 4.75718 6.697 4.5915L6.5 4Z"
      ></path>
    </svg>
    <span class="text_button fw-bold text-light" id="audioText">Putar Murottal</span>
  </button>
  
        {{-- <button onclick="document.getElementById('murottal').play()">Putar Murottal</button> --}}
        <audio id="murottal">
          <source src="/img/tahfiz/murottal.mp3" type="audio/mpeg">
        </audio>
        <script>
                const audioControl = document.getElementById('audioControl');
    const audio = document.getElementById('murottal');
    const audioText = document.getElementById('audioText');

    audioControl.addEventListener('click', function() {
        if (audio.paused) {
            audio.play();
            audioText.textContent = 'Pause Murottal';
        } else {
            audio.pause();
            audioText.textContent = 'Putar Murottal';
        }
    });

    // Optional: Update text when audio ends
    audio.addEventListener('ended', function() {
        audioText.textContent = 'Putar Murottal';
    });
        </script>
    </div>
</header>
<div class="p-5 d-flex flex-wrap">
    <div class="ket" data-aos="fade-left" data-aos-duration="1000">
        <p>
        Al-Qur'an merupakan pedoman hidup bagi umat islam.allah swt menjaga ke-aslian Al-qur'an salah satunya dengan banyaknya penghafal al-qur'an.
Pendidikan tahfidz qur'an telah berjalan lama sejak zaman rosulullah saw hingga akhir zaman.kini banyak lembaga pendidikan yang menjalankan program Tahfidz Al-qur'an di indonesia. Tujuan-nya ialah sebagai membimbing penghafalnya untuk hidup berlandaskan al qur an.salah satu lembaga pendidikan yang mengadakan program tahfidz Qur'an ialah madrasah aliyah zainul hasan 1 genggong. Pada saat ini tahfidz qur'an di MA ZAHA 1 GENGGONG sudh berjalan selama 9 tahun. Tentunya tidaklah luput dari peran seorang kepala sekolah NUN HASSAN AHSAN MALIK M.pd yg memperjuangkan & keinginan-nya untuk menjadikan madrasah yg ber akhlak qur'ani.
Dan tidak lupa ucapan terima kasih kepada pembina tahfidz qur an di MA ZAHA 1 GENGGONG yang sudah mengorbankan tenaganya untuk mendidik siswa/i sehingga bisa dikatakan berkembang.
Dengan berkembangnya tahfidz qur'an di MA ZAHA 1 GENGGONG saat ini.
Alhamdulillah 2024 salah satu dari siswa/i MA ZAHA 1 GENGGONG yang sudah tuntas hafalannya sebanyak 30 juz atas nama: M.nuril ma'rifah (bondowoso)
Sebagian dari siswa/i juga sudah mencapai target. Ada yang 15,20,23 juz
Semua ini adalah sebuah prestasi yang sangat luar biasa bagi siswa/i hususnya diprogram unggulan tahfidz qur'an di MA ZAHA 1 GENGGONG.
Sasaran program tahfidz ini kepada seluruh siswa/i-nya  ialah maksimal 5 juz pertahun. Namun, bilamana ad yang lebih dari itu semua. maka, siswa/i tersebut dikatakan mampu (MUMTAZ).
Empat hari Dalam satu minggu siswa/i  wajib setor hafalan & muroja'ah-nya kepada guru masing-masing. 
Terkadang keduanya mempunyai faktor pendukung dan faktor terhampat pelaksaan program tahfidz qur'an ialah dilihat dari faktor guru,siswa dan lingkungan. Guru harus bisa mengatur dan memotivasi siswa/i untuk konsisten dalam menghafalkan qur an.
Siswa memiliki kendala dari dalam dirinya seperti rasa malas,kurang motivasidan dari faktor eksternal seperti kegiatan yang terlalu padat.faktor lingkungan dibutuhkan bagi siswa tahfidz untuk bisa fokus dalam menghafal al qur an.
Para pengelola tahfidz qur'an di MA ZAHA 1 GENGGONG mempunyai keinginan yang sama dengan kepala sekolah untuk menjadikan madrasah yang ber-akhlak qur'ani.
Dari hasil musyawaroh bersama. Program ini mengadakan rutinan harian, mingguan,bulanan dan tahunan.
Harian: siswa/i setor hafalan  & moroja'ah kepada guru masing-masing.
Mingguan: siswa/i diadakan tasyhih oleh guru masing-masing.
Bulanan: siswa/i tahfidz qur'an serentak melaksanakan khotmil qur'an.tujuan mengharap barokah para kyai pp zainul hasan genggong & niat untuk melancarkan hafalan-nya
Tahunan: menjadi 2 bagian
Pertama: study qur'an kepondok yang ber-begron tahfidz.
Yang kedua: wisuda program unggulan yang sudh mengikuti seleksi kelulusan.
Perlu disimpulkan bahwa
Selama 9 tahun ini (2016-2025) perkembangan tahfidz qur'an sangat pesat sekali. Dari siswa/i nya yang semakin bertambah. Dan kegiatannya semakin berkualitas..
MA ZAHA MUMTAZ BERKUALITAS
#cintailah hafalan-mu sehingga ayat-ayat allah selalu menyayangi-mu.
</p>
    </div>
    <div class="img" data-aos="fade-right" data-aos-duration="1000">
        <img class="w-75 mx-auto d-block" src="/img/tahfiz/ketua.png" alt="">
    </div>
</div>
<div>
    <h1 data-aos="flip-left" data-aos-duration="1000" class="text-center fw-bold text-success-emphasis">Struktur Pengelola</h1>
    <img data-aos="flip-left" data-aos-duration="1000" style="max-width: 75%" class="mx-auto d-block mb-4"  src="/img/hr.png" alt="">
    <img data-aos="zoom-in" data-aos-duration="1000" class="w-75 d-block mx-auto mb-5"  src="/img/ss.jpg" alt="">

</div>
<div>
    <h1 data-aos="flip-left" data-aos-duration="1000" class="text-center fw-bold text-success-emphasis">Ketentuan Program</h1>
    <img data-aos="flip-left" data-aos-duration="1000" style="max-width: 75%" class="mx-auto d-block mb-4"  src="/img/hr.png" alt="">
    <div class="d-flex flex-wrap justify-content-evenly my-5">
        <button onclick="kelas10()" data-aos="fade-down" data-aos-duration="1000"  class="btn btn-light">
            <div id="fitur" class="rounded-circle d-flex align-items-center justify-content-center mb-3 shadow-lg" style="width:200px;height:200px;background-color:#046c3c">
                <img style="width:80%" src="/img/tahfiz/kuning.png" alt="">
            </div>
            <p class="text-center fw-bold text-success-emphasis">Kelas X</p>
        </button>
        <button onclick="kelas11()" data-aos="fade-down" data-aos-duration="1000" class="btn btn-light">
            <div id="fitur"  class="rounded-circle d-flex align-items-center justify-content-center mb-3 shadow-lg" style="width:200px;height:200px;background-color:#046c3c">
                <img style="width:80%" src="/img/tahfiz/kuning.png" alt="">
            </div>
            <p class="text-center fw-bold text-success-emphasis">Kelas 11</p>
        </button>
        <button onclick="kelas12()" data-aos="fade-down" data-aos-duration="1000" class="btn btn-light">
            <div id="fitur" class="rounded-circle d-flex align-items-center justify-content-center mb-3 shadow-lg" style="width:200px;height:200px;background-color:#046c3c">
                <img style="width:80%" src="/img/tahfiz/kuning.png" alt="">
            </div>
            <p class="text-center fw-bold text-success-emphasis">Kelas 12</p>
        </button>
        
    </div>
</div>
<h1 data-aos="flip-left" data-aos-duration="1000" class="text-center fw-bold text-success-emphasis">Galeri Kegiatan</h1>
<img data-aos="flip-left" data-aos-duration="1000" style="max-width: 75%" class="mx-auto d-block mb-4"  src="/img/hr.png" alt="">
<div id="galeri" class="d-flex gap-4 px-5">
    <div class="card">
        <div id="myCarousel" class="carousel slide mb-6 position-relative" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-label="Geser 1" aria-current="true"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Geser 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Geser 3"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="3" aria-label="Geser 4"></button>
            </div>
            <div class="carousel-inner mt-3">
                <div id="kartu" class="carousel-item active bg-light bg-opacity-50 shadow-lg rounded-3 border-secondary">
                    <div class="container d-flex flex-wrap">
                        <div class="item">
                            <img class="w-100 d-block shadow-lg rounded-3" src="/img/tahfiz/hari1.jpg" alt="">
                        </div>
                    </div>  
                </div>  
                <div id="kartu" class="carousel-item bg-light bg-opacity-50 shadow-lg rounded-3 border-secondary">
                    <div class="container d-flex flex-wrap">
                        <div class="item">
                            <img class="w-100 d-block shadow-lg rounded-3" src="/img/tahfiz/hari2.jpg" alt="">
                        </div>
                    </div>  
                </div>  
                <div id="kartu" class="carousel-item bg-light bg-opacity-50 shadow-lg rounded-3 border-secondary">
                    <div class="container d-flex flex-wrap">
                        <div class="item">
                            <img class="w-100 d-block shadow-lg rounded-3" src="/img/tahfiz/hari3.jpg" alt="">
                        </div>
                    </div>  
                </div>  
                <div id="kartu" class="carousel-item bg-light bg-opacity-50 shadow-lg rounded-3 border-secondary">
                    <div class="container d-flex flex-wrap">
                        <div class="item">
                            <img class="w-100 d-block shadow-lg rounded-3" src="/img/tahfiz/hari4.jpg" alt="">
                        </div>
                    </div>  
                </div>  
            
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Sebelumnya</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Berikutnya</span>
                </button>
            </div>
            <div class="p-3">
                <h3 class="fw-bold">Setor Hafalan</h3>
                <p>Program Harian</p>
            </div>
        </div>
    </div>
    <div class="card">
        <div id="bulan" class="carousel slide mb-6 position-relative" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#bulan" data-bs-slide-to="0" class="active" aria-label="Geser 1" aria-current="true"></button>
                <button type="button" data-bs-target="#bulan" data-bs-slide-to="1" aria-label="Geser 2"></button>
            </div>
            <div class="carousel-inner mt-3">
                <div id="kartu" class="carousel-item active bg-light bg-opacity-50 shadow-lg rounded-3 border-secondary">
                    <div class="container d-flex flex-wrap">
                        <div class="item">
                            <img class="w-100 d-block shadow-lg rounded-3" src="/img/tahfiz/bulan1.jpg" alt="">
                        </div>
                    </div>  
                </div>  
                <div id="kartu" class="carousel-item bg-light bg-opacity-50 shadow-lg rounded-3 border-secondary">
                    <div class="container d-flex flex-wrap">
                        <div class="item">
                            <img class="w-100 d-block shadow-lg rounded-3" src="/img/tahfiz/bulan2.jpg" alt="">
                        </div>
                    </div>  
                </div>  
            
                <button class="carousel-control-prev" type="button" data-bs-target="#bulan" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Sebelumnya</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#bulan" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Berikutnya</span>
                </button>
            </div>
            <div class="p-3">
                <h3 class="fw-bold">Khatmil Quran</h3>
                <p>Program Bulanan</p>
            </div>
        </div>
    </div>
    <div class="card">
        <div id="sidang" class="carousel slide mb-6 position-relative" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#sidang" data-bs-slide-to="0" class="active" aria-label="Geser 1" aria-current="true"></button>
                <button type="button" data-bs-target="#sidang" data-bs-slide-to="1" aria-label="Geser 2"></button>
                <button type="button" data-bs-target="#sidang" data-bs-slide-to="2" aria-label="Geser 3"></button>
            </div>
            <div class="carousel-inner mt-3">
                <div id="kartu" class="carousel-item active bg-light bg-opacity-50 shadow-lg rounded-3 border-secondary">
                    <div class="container d-flex flex-wrap">
                        <div class="item">
                            <img class="w-100 d-block shadow-lg rounded-3" src="/img/tahfiz/sidang1.jpg" alt="">
                        </div>
                    </div>  
                </div>  
                <div id="kartu" class="carousel-item bg-light bg-opacity-50 shadow-lg rounded-3 border-secondary">
                    <div class="container d-flex flex-wrap">
                        <div class="item">
                            <img class="w-100 d-block shadow-lg rounded-3" src="/img/tahfiz/sidang2.jpg" alt="">
                        </div>
                    </div>  
                </div>  
                <div id="kartu" class="carousel-item bg-light bg-opacity-50 shadow-lg rounded-3 border-secondary">
                    <div class="container d-flex flex-wrap">
                        <div class="item">
                            <img class="w-100 d-block shadow-lg rounded-3" src="/img/tahfiz/sidang3.jpg" alt="">
                        </div>
                    </div>  
                </div>  
            
                <button class="carousel-control-prev" type="button" data-bs-target="#sidang" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Sebelumnya</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#sidang" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Berikutnya</span>
                </button>
            </div>
            <div class="p-3">
                <h3 class="fw-bold">Sidang Munaqosah</h3>
                <p>Program Tahunan</p>
            </div>
        </div>
    </div>
<script src="{{asset('js/aos.js')}}"></script>
<script>
    AOS.init();

    function kelas10() {
        swal({
            content: {
                element: "div",
                attributes: {
                    innerHTML: `
                    <h1 style="color:black;">Ketentuan Program</h1>
                        <ul style="color:black;">
                            <li style="text-align:left">Mendaftarkan diri kepad pihak pengelola program tahfidz qur'an. Dengan membawa kk disertai no hp</li>
                            <li style="text-align:left">Penanggung jawab program tahfidz qur'an akan mendata nama2 siswa/i yang akan ikut seleksi kelulusan</li>
                            <li style="text-align:left">Siswa/i diwajibkan hafal juz 30 dan lancar baca al qur'an sesuai makhroj dan sifatul huruf. Jika tidak mampu akan diadakan keringanan bagi siswa/i yang ingin betul-betul menghafal al qur'an dg mengikuti program setoran kepada pihak yg bertanggung jawab selama 2 bulan</li>
                            <li style="text-align:left">Jika tidak mampu akan dikembalikan kepada madrasah dengan mengikuti program yg lain</li>
                            <li style="text-align:left">Setelah dikatakan lulus siswa/i wajib mengikuti program tahfidz qur'an sesuai hari yang ditentukan.</li>
                            <li style="text-align:left">Siswa/i wajib mengikuti peraturan program tahfidz qur'an.</li>
                            <li style="text-align:left">Jika tidak masuk ber urut-urut (A) Tanpa keterangan selama 10 kali maka pihak program tahfidz qur an akan mengembalikan siswa/i kpd pihak madrasah.
                            </li>
                            <li style="text-align:left">Siswa/i KLZ X minimal harus menyelesaikan hafalan 3 juz selama 1 tahun</li>
                            <li style="text-align:left">siswa/i wajib membayar SPP program tahfidz qur'an</li>
                            </ul>
                         `
                }
            },
            
        button: "Tutup"
        })

    }
    function kelas12() {
        swal({
            content: {
                element: "div",
                attributes: {
                    innerHTML: `
                    <h1 style="color:black;">Ketentuan Program</h1>
                        <ul style="color:black;">
                            <li style="text-align:left">siswa/i baru/ pindahan program lain wajib mendaftarkan diri kpd pihak pengelola program tahfidz qur'an. Dg membawa KK disertai no hp</li>
                            <li style="text-align:left">Siswa/i dikatakan lulus jika mempunyai hafalan minimal 5 juz dan akan diseleksi oleh pihak program.</li>
                            <li style="text-align:left">Jika sudah dikatakan lulus Siswa/i wajib mengikuti peraturan program tahfidz qur'an</li>
                            <li style="text-align:left">Jika siswa/i tidak masuk ber urut-urut (A) tampa keterangan 10 kali. Maka pihak program tahfidz qur'an akan mengembalikan siswa/i kpd pihak madrasah.</li>
                            <li style="text-align:left">Siswa/i klz Xii minimal harus menyelesaikan hafalan 10 juz selama 3 tahun</li>
                            <li style="text-align:left">Siswa/i akan ikut tes (munaqosah) sebagai bentuk tanggung jawab hafalannya selama 3 tahun</li>
                            <li style="text-align:left">siswa/i wajib membayar SPP program tahfidz qur'an</li>
                            </ul>
                         `
                }
            },
            
        button: "Tutup"
        })

    }
    function kelas11() {
        swal({
            content: {
                element: "div",
                attributes: {
                    innerHTML: `
                    <h1 style="color:black;">Ketentuan Program</h1>
                        <ul style="color:black;">
                            <li style="text-align:left">Siswa/i baru/pindahan program lain. wajib mendaftarkan diri kepada pengelola program tahfidz qur'an. Dengan membawa kk disertai no hp</li>
                            <li style="text-align:left">Siswa/i dikatakan lulus jika faseh dalam melafalkan qur'an. Dan mempunyai bekal hafalan minimal juz 30 & juz 1 (diadakan bimbingan selama 2 bulan jika tidak mampu)</li>
                            <li style="text-align:left">Jika sudah dikatakan lulus Siswa/i wajib mengikuti peraturan program tahfidz qur'an</li>
                            <li style="text-align:left">Jika siswa/i tidak masuk ber urut-urut (A) tampa keterangan 10 kali. Maka pihak program tahfidz qur'an akan mengembalikan siswa/i kpd pihak madrasah.</li>
                            <li style="text-align:left">Siswa/i klz Xi minimal harus menyelesaikan hafalan 5 juz selama 2 tahun. </li>
                            <li style="text-align:left">siswa/i wajib membayar SPP program tahfidz qur'an</li>
                            </ul>
                         `
                }
            },
            
        button: "Tutup"
        })

    }
</script>
@endsection
