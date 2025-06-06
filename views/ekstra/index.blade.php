@extends('layouts.app')
@section('content')
<style>   
    .background {
        width: 100%;
        height: 100vh;
        background: linear-gradient(to bottom left, #033919 30%, #08f142);
        background-size: 700%;
        background-position: left;
        animation: bg-animasi 3s infinite alternate-reverse;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    @keyframes bg-animasi {
        0% {
            background-position: left;
        }
        100% {
            background-position: right;
        }
    }
    
    .teks {
        font-size: 10vw;
        font-weight: bolder;
        color: white;
        text-align: center;
        line-height: 0.8em;
        z-index: 2;
    }
    
    .teks span {
        font-size: 0.7em;
    }
    
    .circle {
        width: 300px;
        height: 300px;
        position: absolute;
        right: 0px;
        bottom: -10px;
        border-radius: 50%;
        background: linear-gradient(to top left, #FFFFFF4D, #B1B2B54D);
        box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.3);
        filter: blur(0.2px);
        animation: shadow 10s infinite alternate-reverse;
    }
    
    .small {
        width: 50px;
        height: 50px;
        left: 27em;
        top: 5em;
        z-index: 3;
        filter: blur(1.2px);
        animation: shadow 3s infinite alternate-reverse;
    }
    
    .smally {
        width: 90px;
        height: 90px;
        right: 6em;
        top: 2em;
        filter: blur(0.8px);
        animation: shadow 5s infinite alternate-reverse;
    }
    
    .big {
        width: 500px;
        height: 500px;
        left: -100px;
        top: -200px;
        z-index: 1;
        animation: shadow 15s infinite alternate-reverse;
    }
    
    .med {
        width: 150px;
        height: 150px;
        left: 20px;
        bottom: 10px;
        filter: blur(0.5px);
        animation: shadow 7s infinite alternate-reverse;
    }
    
    @keyframes shadow {
        0% {
            box-shadow: 5px 10px 15px rgba(0, 0, 0, 0.5);
        }
        100% {
            box-shadow: -10px -8px 15px rgba(0, 0, 0, 0.7);
        }
    }

    @media only screen and (min-width:768px){
        #left{
            width:70%;
        }
        #right{
            width:30%;
        }
    }
    @media only screen and (max-width:767px){
        #right{
            width:100%;
        }
        #left{
            width:100%;
        }
        #container{
            display: inline !important;
        }
        #poster{
            width:95% !important;
        }
    }

    summary {
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 10px;
    font-weight: bold;
}

.icon {
    font-size: 18px;
    transition: transform 0.3s ease;
}
summary{
    font-weight:500;
}
*{
    margin:0;
    box-sizing:border-box;
}


article {
    position: relative;
    display: flow-root;
    text-align: justify;
    padding: 20px;
}

article img {
    float: left;
    shape-outside: url(/img/gp.jpg);
    margin-right: 20px;
    shape-margin: 20px; 

}

.description {
    padding: 0;
}


@media only screen and (min-width: 768px){
            #head{
                font-size: 10em
            }
            #bodi{
                font-size: 1em;
            }
            #g_icon{
                position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);width: 100%;height: auto;        
            }
            #icon{
                width:50%;padding-top:50%;position:relative;justify-content:center;align-items:center;margin:auto;
            }
            #icon:hover{
        transform: scale(1.1);
        transition: transform 0.3s ease;
        box-shadow: 0px 0px 5px 2px goldenrod;
    }
        #respon {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            width: 100%;
            height:auto;
            gap:0.3em;
            margin: auto
            
        }
        #feed{
            transition-duration: 0.5s;
            box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.5);
            min-width:25vw;
            width: 25vw;
            max-height:35vw;
            justify-content: center;
            box-sizing: border-box;
        }
        
        #feedb{
            width:8vw;
            height:8vw;
            margin-left:20%;
            object-fit: cover;
            object-position: center;
        }
        
    }
    @media only screen and (max-width: 767px){
        #feed{
    transition-duration: 0.5s;
        box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.5);
        min-width:50vw;
        width: 50vw;
        max-height:50vw;
        justify-content: center;
        box-sizing: border-box;
    }
    .person{
        display: none;
    }
    form{
        font-size: 0.5em;
        text-align: center;
    }
    #feedb{
        width:25vw;
        height:25vw;
        margin-left:20%;
        object-fit: cover;
            object-position: center;
    }
    .person>h4,.person >p{
        font-size:3vw;
    }
    q{
        font-size: 0.7em;
        word-spacing: 0.3 em;
    }
    
    
    #head{
        font-size: 3em;
    }
    #bodi{
        font-size: 0.5em
    }
    #g_icon{
            position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);width: 100%;height: auto;        
        }
        #icon{
            width:50%;padding-top:50%;position:relative;justify-content:center;align-items:center;margin:auto;
        }
        #icon:hover{
            margin-top: -15%;
        }
        #respon {
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap:1em;
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
        }
      
    }
    #bodi{
        max-width: 50%;
        margin-left: 50%;
    }
 
    #create > a{
        width: 100%;   
        color:white;
    }
    .custom-btn {
     width: 20%;
        height: 40px;
        color: #fff;
        border-radius: 5px;
        padding: 10px 25px;
        background: transparent;
        cursor: pointer;
        transition: all 0.3s ease;
        position: relative;
        display: inline-block;
        box-shadow: inset 2px 2px 2px 0px rgba(255,255,255,.5),
   7px 7px 20px 0px rgba(0,0,0,.1),
   4px 4px 5px 0px rgba(0,0,0,.1);
  outline: none;
}

.btn-4 {
    background: goldenrod;
    border: none;
}

.btn-4:before {
    height: 0%;
    width: 2px;
}

.btn-4:hover {
  box-shadow: 4px 4px 6px 0 rgba(255,255,255,.5),
  -4px -4px 6px 0 rgba(116, 125, 136, .5), 
  inset -4px -4px 6px 0 rgba(255,255,255,.2),
  inset 4px 4px 6px 0 rgba(0, 0, 0, .4);
}

#feed:hover, #feedtoo:hover{
    border: 2px white solid;  
    transition-duration: 15ms;
    box-shadow: none;
    
    }
    
    #summary-btn {
        background-color: goldenrod;
        /* color: white; */
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    div::-webkit-scrollbar {
        width: 0px;
    }
    .card-body img:hover{
        transform: scale(1.1);
    transition: transform 0.3s ease;
}
.w-25 {
    position: relative;
    background: #046c3c;
}

.w-25::before {
    content: "";
    /* position: absolute; */
    width: 50%; /* Setengah dari w-25 */
    height: 100%;
    background-color:white; /* Warna background tambahan */
    left: 0; /* Bisa diganti right: 0; kalau mau di kanan */
    top: 0;
}
#tambah:hover{
    background-color: rgba(0,0,0,0.2) !important;
    color:black !important;
    transition: 0.5s;
}
#feed img:hover{
    transform: scale(1.07);
            transition: transform 0.3s ease,transform 0.5s ease;
    
}
::-webkit-scrollbar {
    display: none}

    .card {
            /* position: relative; */
            width: 300px;
            height: 500px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .background-image {
            width: 100%;
            height: 100%;
            background-image: url('/img/asatidz/Kepala Madrasah.png'); /* Ganti dengan URL gambar background Anda */
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .background-image::after {
            content: '';
            position: absolute;
            top: 100px;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 50%;
            /* background-color: red; */
        }

        .profile-image {
            position: absolute;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 100px;
            height: 100px;
            border-radius: 50%;
            border: 3px solid white;
            background: #efef;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top;
        }

        .identity {
            left: 0;
            bottom:0;
            width: 100%;
            text-align: center;
            margin-top: 50px;
        }

        .identity h2 {
            margin: 0;
            font-size: 1em;
        }
        .identity p {
            margin: 5px 0 0;
            font-size: 0.7em;
            color: green;
        }
        .identity div{
          height: 250px;
          color:#fff;
        }
        .photo {
            position: relative;
            overflow: hidden;
            box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.5);   
            background-color: rgba(0,0,0,0.1);
                   }
        .photo img {
            width: 100%;
            display: block;
        }
        .caption {
            position: absolute;
            padding:10px;
            bottom: -100%;
            height: auto;
            left: 0;
            width: 100%;
            background: #fff;
            /* background: linear-gradient(to top, rgb(3, 32, 3), transparent); */

            text-align: center;
            padding-top: 10px;
            transition: bottom 0.4s ease, background 0.4s ease;
        }
        .card:hover .caption {
            bottom: 0;
            /* background: linear-gradient(to top, rgb(3, 32, 3), transparent); */
    transition: bottom 0.5s ease-in-out, background 1s ease-in-out, opacity 0.5s ease-in-out;

        }
        .card:hover .background-image{
            transform: scale(1.3);
            transition: transform 0.3s ease,transform 0.5s ease;
            filter:blur(3px);
        }

        /* From Uiverse.io by david-mohseni */ 
    li {
        text-decoration: none;
    }

.wrapper {
  display: inline-flex;
  list-style: none;
  width: 100%;
  padding-top: 40px;
  font-family: "Poppins", sans-serif;
  justify-content: center;
}

.wrapper .icon {
  position: relative;
  background:none;
  border-radius: 50%;
  margin: 10px;
  width: 50px;
  height: 50px;
  font-size: 18px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  transition: all 0.2s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .tooltip {
  position: absolute;
  top: 0;
  font-size: 14px;
  background: #000;
  color: #fff;
  padding: 5px 8px;
  border-radius: 5px;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);
  opacity: 0;
  pointer-events: none;
  transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}

.wrapper .tooltip::before {
  position: absolute;
  content: "";
  height: 8px;
  width: 8px;
  background: #000;
  bottom: -3px;
  left: 50%;
  transform: translate(-50%) rotate(45deg);
  transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
/* .facebook, .instagram,.twitter { */
.icon{
  background: #033919 !important;
}

.wrapper .icon:hover .tooltip {
  top: -45px;
  opacity: 1;
  visibility: visible;
  pointer-events: auto;
}

.wrapper .icon:hover span,
.wrapper .icon:hover .tooltip {
  text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.1);
}

.wrapper .facebook:hover,
.wrapper .facebook:hover .tooltip,
.wrapper .facebook:hover .tooltip::before {
  background: #0088cc !important;
  color: #fff;
}

.wrapper .twitter:hover,
.wrapper .twitter:hover .tooltip,
.wrapper .twitter:hover .tooltip::before {
  background: #D14836 !important;
  color: #fff;
}
.wrapper .instagram:hover,
.wrapper .instagram:hover .tooltip,
.wrapper .instagram:hover .tooltip::before {
  background: #25D366 !important;
  color: #fff;
}
.wrapper li a img{
    width: 50%;
}

.page-item.active .page-link {
    background-color: #033919 !important; /* Ganti dengan warna yang diinginkan */
    border-color: #033919 !important;
    color: #fff !important;
}

.page-link {
    color: #033919 !important; /* Warna teks tombol */
}

.page-link:hover {
    background-color: #25D366 !important; /* Warna saat di-hover */
    border-color: #25D366 !important;
}
#editt:hover{
    background-color: #046c3c !important;
}
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
<body>

    <!-- Background Section -->
    <div class="background">
        <div class="teks fw-bold">KURIKULUM</br><span id="auto-type" style="font-weight:bold;color:goldenrod"></span></div>
        <div class="circle"></div>
        <div class="circle small"></div>
        <div class="circle smally"></div>
        <div class="circle big"></div>
        <div class="circle med"></div>
    </div>
    <div class="d-flex flex-wrap">

    </div>
    <header id="headerOlim" class="d-flex flex-wrap align-items-center p-5" >
        <div data-aos="fade-up" data-aos-duration="1000" class="center">
            <h1 class="text-success-emphasis"><span class="fs-1 fw-bold text-warning-emphasis">Bagian</span> <br> <span class="judul" style="font-size:6vw;font-weight:bold">Kurikulum</span></h1>    
            <p class="fw-bold text-warning-emphasis">MA <span id="autoo" class="fw-bold text-warning-emphasis"></span></p>
        </div>
        <div data-aos="fade-right" data-aos-duration="1000" class="right">
            <img style="height:30vw" class="d-block m-auto" src="{{asset('img/kurikulum/waka.png')}}" alt="">
        </div>
    </header>
    <div class="d-flex flex-wrap" id="tupoksi">
        <div id="tugas" class="w-50 p-5">
            <div class="card border-success w-100 h-auto">
                <div class="card-header bg-success-subtle">
                    <h3 class="text-center w-100">Tugas, Pokok, dan Fungsi</h3>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Menyusun dan menjabarkan kalender pendidikan </li>
                  <li class="list-group-item">Menyusun pembagian tugas guru dan jadwal pelajaran </li>
                  <li class="list-group-item">Mengatur penyusunan program pengajaran (Program Semester, Program Tahunan  penyusunan kurikulum, perangkat mengajar)  </li>
                  <li class="list-group-item">Mengatur pelaksanaan kegiatan Kurikuler dan Ekstra Kurikuler </li>
                  <li class="list-group-item">Mengatur pelaksanaan program penilaian, kriteria kenaikan kelas, kelulusan dan laporan kemajuan belajar siswa serta pembagian Raport dan Ijzah</li>
                  <li class="list-group-item">Mengatur pelaksanaan program perbaikan  </li>
                  <li class="list-group-item">Mengatur pemanfaatan lingkungan sebagai sumber belajar </li>
                  <li class="list-group-item">Melakukan supervisi Administrasi dan Akademis </li>
                </ul>
            </div>
        </div>
        <div id="staf" class="d-flex flex-wrap w-50 p-5">
            <h3 class="text-center w-100">Struktur Kurikulum</h3>
            <div id="struktur" class="card w-100 p-3" style="max-height: 90px">
                <div class="d-flex">
                    <div style="width:10%;">
                        <img src="/img/asatidz/IMG-20250312 093321.jpg" style="object-fit:cover;width:50px;height:50px;object-position:top" class="rounded-circle d-block" alt="">
                    </div>
                    <div class="w-75 px-3">
                        <h5>Solihin, M.Pd</h5>
                        <p>Waka Kurikulum</p>
                    </div>
                </div>
            </div>
            <div id="struktur" class="card w-100 p-3" style="max-height: 90px">
                <div class="d-flex">
                    <div style="width:10%;">
                        <img src="/img/asatidz/IMG-20250312 131025.jpg" style="object-fit:cover;width:50px;height:50px;object-position:top" class="rounded-circle d-block" alt="">
                    </div>
                    <div class="w-75 px-3">
                        <h5>M. Zainul Arifi, S.Pd</h5>
                        <p>Staf Kurikulum</p>
                    </div>
                </div>
            </div>
            <div id="struktur" class="card w-100 p-3" style="max-height: 90px">
                <div class="d-flex">
                    <div style="width:10%;">
                        <img src="/img/asatidz/IMG-20250312 094859.jpg" style="object-fit:cover;width:50px;height:50px;object-position:top" class="rounded-circle d-block" alt="">
                    </div>
                    <div class="w-75 px-3">
                        <h5>Susilawati, S.Pd.I</h5>
                        <p>Staf Kurikulum</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <h2 class="fw-bold mb-3 mt-5 m-5" style="color:#033919">Muatan Kurikulum</h2>
    <div id="container" class="d-flex mx-3">
        <!-- Left Content -->
        <div id="left" class="mx-3 clearfix overflow-x-hidden" style="text-align:justify">
            <article class="w-100">
                <img id="poster" class="w-25" src="/img/gp.jpg" alt="">
                <div class="description">
                    <p style="width:90%">
                        Madrasah Aliyah Zainul Hasan adalah salah satu lembaga pendidikan dalam naungan pondok pesantren yang memiliki prioritas kuat terhadap pengembangan minat, bakat, dan potensi santri. Madrasah Aliyah Zainul Hasan berkomitmen penuh untuk meningkatkan bakat dan minat tersebut melalui kegiatan ekstrakurikuler. Selain untuk sarana minat dan bakat santri, ekstrakurikuler juga bertujuan sebagai kegiatan praktis di luar kurikulum yang dapat meningkatkan keterampilan sosial, pengembangan kreatifitas, pelatihan kepemimpinan, dan kerja sama tim.
                        Ekstrakurikuler yang dikembangkan oleh MA Zainul Hasan diklasifikasikan menjadi beberapa macam. Di antaranya yakni, ekstrakurikuler pengembangan bahasa, seni budaya dan keterampilan, olahraga, kajian ilmiah dan public speaking. 
                        Ekstrakurikuler dibentuk untuk mendukung pendidikan yang holistik. Dengan demikian, secara berkala konsep dan kegiatan ekstrakurikuler di MA Zainul Hasan akan terus diperbaharui seiring perkembangan waktu, yakni dengan pembentukan ekstrakurikuler-ekstrakurikuler baru yang dapat mewadahi seluruh kebutuhan minat dan bakat santri serta pembaharuan sistem konsep dan metode pembelajaran sesuai dengan trend perkembangan peradaban keilmuan. 
                        Ekstrakurikuler di Madrasah Aliyah Zainul Hasan dilakukan setiap pukul 09:00 – 10:30 pada hari Ahad. Sebagaimana pembelajaran normal yang memisahkan lokasi santri putra dan santri putri, maka konsep pembelajaran esktrakurikuler juga memisahkan antara lokasi santri putra dan putri. Santri putra bertempat di Madrasah Aliyah Putra P5 dan santri putri bertempat di gedung At-Tachriliyah pondok pusat. Kegiatan ekstrakurikuler ini dikonsep dengan pembelajaran yang bebas, terbuka dan tidak menjenuhkan yakni dengan sistem indoor dan outdoor. Kemampuan para asatid/asatidzah yang kompeten dan kreatif tidak dapat diragukan kualitasnya dalam mendukung potensi santri yang progresif dan dinamis. 
                        Berikut beberapa klasifikasi ekstrakurikuler yang disediakan Madrasah Aliyah:
                         
                    </div>
            </article>
        </div>

        <!-- Right Content -->
        <div id="right" class="clearfix" style="text-align:justify">
            <form method="GET" action="" class="mb-3">
                <div class="input-group">
                    {{-- <input type="text" name="ekstra" class="form-control" placeholder="Cari Jenis Ekstrakulikuler..."> --}}
                    <div class="input-group-append mx-auto">
                        {{-- <button type="submit" class="btn btn-success">
                            <img style="max-height:2vw" src="/img/search.png" alt=""></button> --}}
                        <a href="{{route('ekstra.create')}}" class="btn btn-success" title="Tambah Ekstrakulikuler">+ Ekstrakulikuler</a>
                        <a href="{{route('ekstra.buat')}}" class="btn btn-success" title="Tambah Pengajar">+ Pengajar</a>
                    </div>
                </div>
            </form>

            <h4 class="fw-bold text-center">Jenis Ekstrakulikuler</h4>
            
            @foreach ($rows as $row)
            <div class="mb-1 ekstra-container mx-3" data-id="{{$row->id}}">
                <details class="border border-success-subtle rounded-3">
                    <summary class="bg-success-subtle p-2 d-flex justify-content-between">
                        <div class="w-75"><span class="icons">+</span>{{$row->title}}</div>
                        <div class="w-25" style="background-color: rgba(0,0,0,0);"><a href="{{route('ekstra.edit',$row->id)}}" id="editt" style="background-color: #033919;" title="Tambah Pengajar"><img style="max-width: 20px;background-color: none;" src="/img/edit.png" alt=""></a>
                        </div>
                        
                    </summary>
                    
                    <!-- Card Buttons -->
                    <div class="d-flex justify-content-around mt-3">
                        <div class="w-25" style="background-color: #fff">
                            <img class="card-btn w-50 mx-auto d-block" data-type="foto" src="/img/ekstra/Picture.png" alt="">
                        </div>
                        <div class="w-25" style="background-color: #fff">
                            <img class="card-btn w-50 mx-auto d-block" data-type="text" src="/img/ekstra/Long Words.png" alt="">
                        </div>
                        <div class="w-25" style="background-color: #fff">
                            <img class="card-btn w-50 mx-auto d-block" data-type="guru" src="/img/ekstra/Classroom.png" alt="">
                        </div>
                    </div>
                    
                    <hr class="w-75 mx-auto">
                    
                    <!-- Description Container -->
                    <div class="description-container">
                        <p class="text-center">Klik kartu untuk melihat deskripsi.</p>
                    </div>
                    
                    <!-- Hidden Content -->
                    <div class="description-content d-none" data-type="foto">
                        <img class="w-75 mx-auto d-block mb-3 rounded-2 shadow" src="/img/ekstra/{{$row->foto}}" alt="">
                    </div>
                    
                    <div class="description-content d-none" data-type="text">
                        <p class="w-75 mx-auto overflow-y-auto" style="max-height:300px;">
                            {{$row->deskripsi}}
                        </p>                
                    </div>
                    
                    <div class="description-content d-none" data-type="guru">
                        <div class="d-flex overflow-x-auto gap-5 p-5">
                            @php
                                $teacher=\App\Models\GuruEkstra::where('id',$row->id_guru1)->first();
                            @endphp
                            @if($teacher)
                            <div class="card teacher-card" style="min-width:100%;">
                                <div class="background-image" style="background-image: url('/img/ekstra/{{$teacher->foto}}');"></div>
                                <div class="caption">
                                    <div class="profile-image">
                                        <img src="/img/ekstra/{{$teacher->foto}}" alt="Profile Photo">
                                    </div>
                                    <div class="identity">
                                        <h2>{{$teacher->nama}}</h2>
                                        <p>Mengabdi sejak Th.{{$teacher->tahun}}</p>
                                        <p>Alamat: {{$teacher->alamat}}</p>
                                        <ul class="wrapper">
                                            <li class="icon facebook">
                                                <a href="https://t.me/{{$teacher->tele}}"><img src="/img/telegram.png" alt="Telegram"></a>
                                            </li>
                                            <li class="icon twitter">
                                               <a href="mailto:{{$teacher->email}}"><img src="/img/Letter.png" alt="Email"></a>
                                            </li>
                                            <li class="icon instagram">
                                               <a href="https://wa.me/{{$teacher->wa}}"><img src="/img/Phone.png" alt="WhatsApp"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endif
                            
                            @if(!empty($row->id_guru2))
                            @php
                                $teacher=\App\Models\GuruEkstra::where('id',$row->id_guru2)->first();
                            @endphp
                            @if($teacher)
                            <div class="card teacher-card" style="min-width: 100%">
                                <div class="background-image" style="background-image: url('/img/ekstra/{{$teacher->foto}}');"></div>
                                <div class="caption">
                                    <div class="profile-image">
                                        <img src="/img/ekstra/{{$teacher->foto}}" alt="Profile Photo">
                                    </div>
                                    <div class="identity">
                                        <h2>{{$teacher->nama}}</h2>
                                        <p>Mengabdi sejak Th.{{$teacher->tahun}}</p>
                                        <p>Alamat: {{$teacher->alamat}}</p>
                                        <ul class="wrapper">
                                            <li class="icon facebook">
                                                <a href="https://t.me/{{$teacher->tele}}"><img src="/img/telegram.png" alt="Telegram"></a>
                                            </li>
                                            <li class="icon twitter">
                                               <a href="mailto:{{$teacher->email}}"><img src="/img/Letter.png" alt="Email"></a>
                                            </li>
                                            <li class="icon instagram">
                                               <a href="https://wa.me/{{$teacher->wa}}"><img src="/img/Phone.png" alt="WhatsApp"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endif
                            @endif
                            
                            @if($row->title=='Keputrian')
                            <div class="card teacher-card" style="min-width: 100%">
                                <div class="background-image" style="background-image: url('/img/ekstra/guru-20250324 152114.jpg');"></div>
                                <div class="caption">
                                    <div class="profile-image">
                                        <img src="/img/ekstra/guru-20250324 152114.jpg" alt="Profile Photo">
                                    </div>
                                    <div class="identity">
                                        <h2>Robiatul Adawiyah</h2>
                                        <p>Mengabdi sejak Th.2024</p>
                                        <p>Alamat: Pajarakan-Probolinggo</p>
                                        <ul class="wrapper">
                                            <li class="icon facebook">
                                                <a href="https://t.me/Robikchoco"><img src="/img/telegram.png" alt="Telegram"></a>
                                            </li>
                                            <li class="icon twitter">
                                               <a href="mailto:robip202434@gmail.com"><img src="/img/Letter.png" alt="Email"></a>
                                            </li>
                                            <li class="icon instagram">
                                               <a href="https://wa.me/082214245512"><img src="/img/Phone.png" alt="WhatsApp"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </details>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Prestasi Section -->
    <a class="mt-5" style="text-decoration:none;color:white" href="{{route('prestasi.create')}}">
        <div class="text-center w-25 mx-auto p-auto mb-3 text-center fw-bold" id="tambah" style="background-color:rgba(0,0,0,0.4)">Tambah Prestasi</div>
    </a>
    
    <div class="d-flex flex-wrap">
        <div id="div" class="w-75 gap-3 py-5 overflow-x-auto d-flex p-3" style="background-color: #046c3c;">
            @foreach ($models as $model)
            <div class="rounded mt-5 prestasi-card" style="background-color:#fff;min-width:300px;">
                <img class="w-100 rounded-3" src="/img/prestasi/{{$model->file}}" alt="">
                <div class="person">
                    <h6 class="fw-bold text-center mt-3 px-3">{{$model->title}}</h6>
                    <a class="btn btn-primary mt-1 w-100" style="border-radius:0px" href="{{route('prestasi.edit',$model->id)}}"><span>Ubah</span></a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="w-25 d-flex align-items-center">
            <div class="position-absolute w-75 p-3 my-auto text-center rounded-3 text-light" style="font-size:1em;background-color: #033919;margin-left:-12%;">
                MA ZAHA menjadi pilihan tepat untuk menjadi pribadi yang hebat...!
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{asset('js/aos.js')}}"></script>
    <script>
        AOS.init();
        var typed = new Typed("#autoo", {
            strings: ["ZAHA 1","MUMTAZ","BERKUALITAS"], 
            typeSpeed: 50,
            backSpeed: 50,
            loop: true,
        });
        // Typed.js Animation
        var typed = new Typed("#auto-type", {
            strings: ["MA ZAHA 1", "MA MUMTAZ", "MA BERKUALITAS"],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true,
        });

        // Details Toggle Animation
        document.querySelectorAll("details").forEach((detail) => {
            let icon = detail.querySelector(".icons");
            detail.addEventListener("toggle", function() {
                icon.textContent = this.open ? "−" : "+";
            });
        });

        // Ekstrakurikuler Card Functionality
        document.addEventListener("DOMContentLoaded", function() {
            // Handle ekstrakurikuler card clicks
            document.querySelectorAll('.ekstra-container').forEach(container => {
                const cards = container.querySelectorAll('.card-btn');
                const descriptionContainer = container.querySelector('.description-container');
                
                cards.forEach(card => {
                    card.addEventListener('click', function() {
                        const type = this.getAttribute('data-type');
                        const content = container.querySelector(`.description-content[data-type="${type}"]`);
                        
                        if (content) {
                            descriptionContainer.innerHTML = '';
                            const clonedContent = content.cloneNode(true);
                            clonedContent.classList.remove('d-none');
                            descriptionContainer.appendChild(clonedContent);
                            
                            // Initialize teacher card effects if type is 'guru'
                            if (type === 'guru') {
                                initTeacherCards(container);
                            }
                        }
                    });
                });
            });

            // Initialize teacher card hover effects
            function initTeacherCards(container) {
                container.querySelectorAll('.teacher-card').forEach(card => {
                    const bgImage = card.querySelector('.background-image');
                    const caption = card.querySelector('.caption');
                    
                    card.addEventListener('mouseenter', function() {
                        bgImage.style.transform = 'scale(1.3)';
                        bgImage.style.filter = 'blur(3px)';
                        caption.style.bottom = '0';
                    });
                    
                    card.addEventListener('mouseleave', function() {
                        bgImage.style.transform = '';
                        bgImage.style.filter = '';
                        caption.style.bottom = '-100%';
                    });
                });
            }

            // Hide notification after 3 seconds
            setTimeout(function() {
                var alertElement = document.getElementById('alert');
                if (alertElement) {
                    alertElement.style.transition = "opacity 0.5s ease";
                    alertElement.style.opacity = '0';
                    setTimeout(function() {
                        alertElement.remove();
                    }, 500);
                }
            }, 3000);
        });
    </script>
</body>
@endsection
