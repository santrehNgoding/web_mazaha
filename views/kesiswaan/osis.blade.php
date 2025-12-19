@extends('layouts.app')
@section('content')
<style>
    #title{
        background-color: #046c3c;
    }
    #fotoKetos{
        width: 200px;
        height: 200px;
        display: block;
        margin: auto;
        object-fit: cover;
        object-position: top;
    }
    @media only screen and (max-width:767px){
        embed {
            width: 100% !important;
        }
        #tupoksi > div{
            width:80% !important;
            margin:auto;
            margin-bottom:20px
        }
        #kotakHijau{
            width: 95% !important;
        }
        #tupoksi{
            padding: 10px !important;
        }
        #pembina{
            grid-template-columns: 1fr 1fr;
            justify-items: center;
            gap:15px;
        }
        #item-purpose{
            width: 90% !important;
        }
        #buletin{
            min-width:100%;
            max-width:100%;
        }
    }
    @media only screen and (min-width:768px){
        #pembina{
            grid-template-columns: 1fr 1fr 1fr;
            justify-items: center;
            gap:15px;
        }
        #buletin{
            min-width:30%;
            max-width: 30%;
        }
    }

#subnav h3:hover{
    color: goldenrod !important;
}
.gallery {
            height: auto;
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: auto;
            gap: 40px;
            width: 100%;
            grid-template-areas: 
                "img1 img3 img7 "
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
        .img7 { grid-area: img7; }
        #container h2{
        margin-bottom:50px;
    }
        .all {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: auto;
        }
  .clickable-img {
            cursor: pointer;
            max-width: 300px;
            transition: transform 0.3s;
        }
        
        .clickable-img:hover {
            transform: scale(1.05);
        }
        
        /* Style overlay fullscreen */
        .fullscreen-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.9);
            z-index: 1000;
            justify-content: center;
            align-items: center;
        }
        
        .fullscreen-img {
            max-width: 90%;
            max-height: 90%;
        }
        
        .close-btn {
            position: absolute;
            top: 100px;
            right: 30px;
            color: white;
            font-size: 30px;
            cursor: pointer;
        }
.gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            width: 80%;
            max-width: 900px;
        }
        
        .caption {
            position: absolute;
            padding:10px;
            bottom: -100%;
            height: auto;
            left: 0;
            width: 80%;
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
            transform: scale(1.2);
            transition: transform 0.3s ease,transform 0.5s ease;
            filter:blur(2px);
        }
    .card {
            /* position: relative; */
            width: 50%;
            height: auto;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .background-image {
            width: 100%;
            height: 100%;
            background-image: url('/img/osis/menebas aral.jpg'); 
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
        /* From Uiverse.io by Navarog21 */ 
.filter {
    width: 10em;
    position: relative;
    height: 3.5em;
    border: 3px ridge #033919;
    outline: none;
    background-color: transparent;
    color: #033919;
    transition: 1s;
    border-radius: 0.3em;
    font-size: 16px;
    font-weight: bold;
    cursor: pointer;
  }
  
  .filter::after {
    content: "";
    position: absolute;
    top: -10px;
    left: 3%;
    width: 95%;
    height: 40%;
    background-color: #fff;
    transition: 0.5s;
    transform-origin: center;
  }
  
  .filter::before {
    content: "";
    transform-origin: center;
    position: absolute;
    top: 80%;
    left: 3%;
    width: 95%;
    height: 40%;
    background-color: #fff;
    transition: 0.5s;
  }
  
  .filter:hover::before, .filter:hover::after {
    transform: scale(0)
  }
  
  .filter:hover {
    box-shadow: inset 0px 0px 25px #046c3c;
  }

  /* fitur beli online */
  #dokumentasi {
  /* position: relative !important;  */
  overflow: hidden !important; 
}

#dokumentasi .caption {
  color: white;;
  background: rgba(0,0,0,0.7); 
  text-align: center;
  transition: bottom 0.4s ease;
  
}

#dokumentasi:hover .caption {
  bottom: 0;
}
@media only screen and (min-width:768px){
    #dokumentasi .caption{
        padding: 50px 10px;
        bottom: -100%;
        left: 10px;
        width: 94%;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
        flex-wrap:nowrap;
    }
}
@media only screen and (max-width:767px){
    #separuh{
        width:100% !important;
    }
    #dokumentasi{
            flex-direction: column !important;

        /* flex-wrap: wrap; */
        width:90% !important;
    }
    .clickable-img{
        margin: auto;
    }
    #dokumentasi .caption{
        display: none;
    }
    .cardInfo{
        width:100% !important;
    }
}
.swal-modal {
  width: 1000px !important;
  max-width: 90%;
}
.suggestion-item:hover {
    background-color: #f8f9fa;
}

#map-preview {
    border-radius: 8px;
}

.swal2-popup {
    max-height: 90vh;
    overflow-y: auto;
}
.province-select, .city-select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('js/sweetalert.min.js')}}"></script>

<header class="p-5 d-flex justify-content-center gap-2" id="title">
    <img style="width: 100px;height:100px" class="my-3" src="/img/osis/logo.png" alt="">
    <h1 class="my-5 text-center text-light fw-bold">Organisasi Siswa Intra Madrasah</h1>
</header>
<div id="subnav" class="bg-secondary-subtle p-3 d-flex flex-wrap justify-content-evenly">
    <div>
        <a href="#struktur" class="text-decoration-none text-success-emphasis">
            <h3 class="text-center fw-bold">Struktur</h3>
        </a>
    </div>
    <div>
        <a href="#tugas" class="text-decoration-none text-success-emphasis">
            <h3 class="text-center fw-bold">Tugas</h3>
        </a>
    </div>
    <div>
        <a href="#kegiatan" class="text-decoration-none text-success-emphasis">
            <h3 class="text-center fw-bold">Kegiatan</h3>
        </a>
    </div>
    <div>
        <a href="#karya" class="text-decoration-none text-success-emphasis">
            <h3 class="text-center fw-bold">Karya</h3>
        </a>
    </div>
    
</div>
<audio autoplay loop id="murottal">
    <source src="/img/osis/lagu.mp3" type="audio/mpeg">
  </audio>
<div class="mt-5" id="struktur">
    <h1 data-aos="flip-left" data-aos-duration="1000" class="text-center fw-bold text-success-emphasis">Struktur OSIM</h1>
    <img data-aos="flip-left" data-aos-duration="1000" style="max-width: 75%" class="mx-auto d-block mb-4"  src="/img/hr.png" alt="">
    <img class="w-75 mx-auto d-block" src="/img/osis/Struktur Pengurus OSIS Putra 2024-2025.jpg" alt="">
    <img class="w-75 mx-auto d-block mt-3" src="/img/osis/Struktur Pengurus OSIS Putri 2024-2025.jpg" alt="">
</div>
<div class="mt-5">
    <h1 data-aos="flip-left" data-aos-duration="1000" class="text-center fw-bold text-success-emphasis">Pembina OSIM</h1>
    <img data-aos="flip-left" data-aos-duration="1000" style="max-width: 75%" class="mx-auto d-block mb-4"  src="/img/hr.png" alt="">
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div id="tupoksi" class="d-flex flex-wrap p-5">
        <div class="w-50">
            <img class="w-75 mx-auto d-block" src="/img/osis/pembina.png" alt="">
        </div>
        <div id="kotakHijau" class="card w-50 border-none rounded-5 p-5 text-light" style="background-image: linear-gradient(to right, #033919,#1a9c46)">
            <h2 class="fw-bold">Daftar Pembina OSIM MA ZAHA 1</h2>
            <ul>
                <li>Mohammad Ahsanun Naim, S.Sos</li>
                <li>Moh Fauzi Afnani, S.Pd</li>
                <li>Najwan Nada, S.Sos</li>
                <li>Maziyyatul Qudsiyah</li>
            </ul>
            <h2 class="fw-bold">Tugas, Pokok, dan Fungsi</h2>
            <ul>
                <li>Bertanggung jawab atas seluruh pengelolaan, pembinaan, dan pengembangan OSIM di madrasah</li>
                <li>Memberikan nasihat, saran, dan bimbingan kepada perwakilan kelas dan pengurus OSIM</li>
                <li>Mengesahkan keanggotaan perwakilan kelas dan pengurus OSIM melalui Surat Keputusan Kepala Madrasah</li>
                <li>Memilih dan menyeleksi pengurus OSIM</li>
                <li>Menghadiri rapat-rapat OSIM dan mengawasi jalannya kegiatan OSIM</li>
                <li>Mengevaluasi kinerja OSIM dan pelaksanaan tugas OSIM secara berkala</li>
                <li>Memberikan semangat dan motivasi kepada pengurus OSIM untuk terus belajar dan berprestasi. </li>
                <li>Menangani santri yang bermasalah</li>
                <li>Membina santri dalam berbagai kegiatan, termasuk kegiatan lomba, hari besar keagamaan, dan lain-lain</li>
            </ul>
        </div>
    </div>
    </div>
    <div class="carousel-item">
    <h3 class="fw-bold text-center">PEMBINA OSIM DARI MASA KE MASA</h3>
    <div id="pembina" style="height: 400px" class="overflow-y-auto d-grid justify-content-center px-auto">
        <div style="width:200px">
            <img class="w-100 rounded-3" src="/img/asatidz/IMG_5095.jpg" alt="">
            <h5 class="fw-bold text-center mt-3">Mohammad Hendra, M.Pd.I</h5>
            <p class="text-center">2012-2022</p>
        </div>
        <div style="width:200px">
            <img class="w-100 rounded-3" src="/img/asatidz/IMG_5122.JPG" alt="">
            <h5 class="fw-bold text-center mt-3">Moh Zarkasyi, S.Pd.I</h5>
            <p class="text-center">2012-2015</p>
        </div>
        <div style="width:200px">
            <img class="w-100 rounded-3" src="/img/asatidz/IMG_5113.JPG" alt="">
            <h5 class="fw-bold text-center mt-3">Shohihah, S.Pd.I</h5>
            <p class="text-center">2015-2022</p>
        </div>
        <div style="width:200px">
            <img class="w-100 rounded-3" src="/img/asatidz/IMG-20250318 064632.png" alt="">
            <h5 class="fw-bold text-center mt-3">Abdillah Luthfi, S.Th.I</h5>
            <p class="text-center">2015-2017</p>
        </div>
        <div style="width:200px">
            <img class="w-100 rounded-3" src="/img/asatidz/IMG_5134.jpg" alt="">
            <h5 class="fw-bold text-center mt-3">Agus Surahman, S.Si</h5>
            <p class="text-center">2017-2022</p>
        </div>
        <div style="width:200px">
            <img class="w-100 rounded-3" src="/img/asatidz/IMG_5129.JPG" alt="">
            <h5 class="fw-bold text-center mt-3">Moh Fauzi Afnani, S.Pd</h5>
            <p class="text-center">2022-2025</p>
        </div>
        <div style="width:200px">
            <img class="w-100 rounded-3" src="/img/asatidz/IMG_5141.jpg" alt="">
            <h5 class="fw-bold text-center mt-3">Moh Ahsanun Naim, S.Sos</h5>
            <p class="text-center">2022-2025</p>
        </div>
        <div style="width:200px">
            <img class="w-100 rounded-3" src="/img/asatidz/IMG_5111.JPG" alt="">
            <h5 class="fw-bold text-center mt-3">Najwan Nada</h5>
            <p class="text-center">2020-2025</p>
        </div>
        <div style="width:200px">
            <img class="w-100 rounded-3" src="/img/asatidz/IMG_5100.jpg" alt="">
            <h5 class="fw-bold text-center mt-3">Maziyyatul Qudsiyah</h5>
            <p class="text-center">2022-2025</p>
        </div>
    </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
@if(auth()->check())
@if(auth()->user()->id==1 || auth()->user()->id==3)
<div class="d-flex justify-content-center mb-3">
    <a href="{{route('kesiswaan.create')}}"><button class="filter">+ Ketua OSIM</button></a>
</div>
@endif
@endif
<div class="mt-5">
    <h1 data-aos="flip-left" data-aos-duration="1000" class="text-center fw-bold text-success-emphasis">Ketua OSIM Putra</h1>
    <img data-aos="flip-left" data-aos-duration="1000" style="max-width: 75%" class="mx-auto d-block mb-4"  src="/img/hr.png" alt="">
    <div class="d-flex overflow-x-auto gap-5 px-5">
       @foreach ($boys as $boy) 
        <div style="width:300px">
            @if($boy->foto)
            <img id="fotoKetos" class="rounded-circle bg-danger" src="{{asset('img/osis/ketos/'.$boy->foto)}}" alt="">
            @else
            <img id="fotoKetos" class="rounded-circle bg-danger" src="/img/kepala madrasah/images.png" alt="">
            @endif
            <h5 class="fw-bold text-center">{{$boy->nama}}</h5>
            <p class="text-center">{{$boy->masa}}</p>
             @if(auth()->check())
            @if(auth()->user()->id==1 || auth()->user()->id==3)
            <a class="btn btn-success mx-auto d-block" href="{{route('kesiswaan.edit',$boy->id)}}"><img src="/img/edit.png" style="width: 20px" alt="">Edit</a>
            @endif
            @endif
        </div>
        @endforeach
    </div>
</div>
<div class="mt-5">
    <h1 data-aos="flip-left" data-aos-duration="1000" class="text-center fw-bold text-success-emphasis">Ketua OSIM Putri</h1>
    <img data-aos="flip-left" data-aos-duration="1000" style="max-width: 75%" class="mx-auto d-block mb-4"  src="/img/hr.png" alt="">
    <div class="d-flex overflow-x-auto gap-5 px-5">
        @foreach ($girls as $girl) 
        <div style="width:300px">
            @if($girl->foto)
            <img id="fotoKetos" class="rounded-circle bg-danger" src="{{asset('img/osis/ketos/'.$girl->foto)}}" alt="">
            @else
            <img id="fotoKetos" class="rounded-circle bg-danger" src="/img/kepala madrasah/images.png" alt="">
            @endif
            <h5 class="fw-bold text-center">{{$girl->nama}}</h5>
            <p class="text-center">{{$girl->masa}}</p>
            @if(auth()->check())
            @if(auth()->user()->id==1 || auth()->user()->id==3)
            <a class="btn btn-success mx-auto d-block" href="{{route('kesiswaan.edit',$girl->id)}}"><img src="/img/edit.png" style="width: 20px" alt="">Edit</a>
            @endif
            @endif
        </div>
        @endforeach
    </div>
</div>
<div class="mt-5" id="tugas">
    <h1 data-aos="flip-left" data-aos-duration="1000" class="text-center fw-bold text-success-emphasis">Tugas Pengurus OSIM</h1>
    <img data-aos="flip-left" data-aos-duration="1000" style="max-width: 75%" class="mx-auto d-block mb-4"  src="/img/hr.png" alt="">
    <div class="container d-flex flex-wrap w-100">
        <div id="purpose" class="d-flex flex-wrap justify-content-center gap-2 mt-2">
            <div id="item-purpose" data-aos="zoom-in" data-aos-duration="1000" class="card bg-success p-3" style="width:30%;height:auto">
                <img class="w-25" src="/img/osis/icon/ketua.png" alt="">
                <h5 class="fw-bold text-light">Ketua OSIM</h5>
                <p class="text-light">
Bertugas mengatur pelaksanaan program yang telah direncanakan, memverifikasi laporan keuangan, serta mengawasi jalannya kegiatan Divisi Sosial. Selain itu, melakukan evaluasi rutin bersama pengurus harian, mengawasi kinerja Badan Pengurus Harian (BPH), dan menjalin koordinasi dengan Ketua I dan Ketua II dalam menjalankan tugas organisasi.                </p>
            </div>
            <div id="item-purpose" data-aos="zoom-in" data-aos-duration="1000" class="card border-success border-5 p-3" style="width:30%;height:auto">
                <img class="w-25" src="/img/osis/icon/sekretaris.png" alt="">
                <h5 class="fw-bold text-success">Sekretaris OSIM</h5>
                <p class="text-success">
Bertugas membuat proposal dan laporan hasil kegiatan, mengarsipkan seluruh surat masuk dan keluar, serta menyiapkan dan memimpin rapat. Selain itu, bertindak sebagai notulis dalam setiap pertemuan, memastikan dokumentasi berjalan rapi, dan mendukung kelancaran komunikasi internal organisasi.                </p>
            </div>
            <div id="item-purpose" data-aos="zoom-in" data-aos-duration="1000" class="card bg-success p-3" style="width:30%;height:auto">
                <img class="w-25" src="/img/osis/icon/bendahara.png" alt="">
                <h5 class="fw-bold text-light">Bendahara OSIM</h5>
                <p class="text-light">
                    Bendahara Umum bertugas membuat anggaran dana serta menyusun laporan pemakaian dana untuk setiap kegiatan. Bendahara I bertanggung jawab membuat tanda bukti atas setiap pemasukan dan pengeluaran dana OSIS. Sementara itu, Bendahara II melaporkan secara berkala seluruh transaksi keuangan yang terjadi dalam organisasi.
                </p>
            </div>
            <div id="item-purpose" data-aos="zoom-in" data-aos-duration="1000" class="card border-success border-5 p-3" style="width:30%;height:auto">
                <img class="w-25" src="/img/osis/icon/keagamaan.png" alt="">
                <h5 class="fw-bold text-success">Divisi Keagamaan</h5>
                <p class="text-success">
                    Bertugas mengatur dan mengontrol jalannya setiap program, memastikan kelengkapan barang yang akan digunakan, serta mengecek kebutuhan pelaksanaan program termasuk perlengkapan dan konsumsi. Selain itu, juga mengoordinir kepanitiaan untuk memastikan program berjalan lancar dan sesuai rencana.
                </p>
            </div>
            <div id="item-purpose" data-aos="zoom-in" data-aos-duration="1000" class="card bg-success p-3" style="width:30%;height:auto">
                <img class="w-25" src="/img/osis/icon/sosial.png" alt="">
                <h5 class="fw-bold text-light">Divisi Sosial</h5>
                <p class="text-light">
                    Bertugas menstabilkan hubungan sosial antar siswa, meningkatkan rasa peduli dan partisipasi santri terhadap sesama, serta membantu santri dalam membentuk kedisiplinan dan tanggung jawab dalam bersosialisasi. Selain itu, juga mengoordinir kepanitiaan untuk menunjang kelancaran setiap program sosial yang dijalankan.
                </p>
            </div>
            <div id="item-purpose" data-aos="zoom-in" data-aos-duration="1000" class="card border-success border-5 p-3" style="width:30%;height:auto">
                <img class="w-25" src="/img/osis/icon/pendidikan.png" alt="">
                <h5 class="fw-bold text-success">Divisi Pendidikan</h5>
                <p class="text-success">
                    Bertugas mengontrol jalannya kegiatan agar sesuai dengan rencana, mencatat kehadiran santri saat kegiatan seperti diskusi, serta memberikan sanksi kepada santri yang tidak mengikuti tanpa keterangan. Selain itu, mengkoordinir kepanitiaan pada setiap program agar terlaksana secara tertib dan mendukung pencapaian tujuan pendidikan di MA ZAHA.            </div>
            <div id="item-purpose" data-aos="zoom-in" data-aos-duration="1000" class="card bg-success p-3" style="width:30%;height:auto">
                <img class="w-25" src="/img/osis/icon/jurnalistik.png" alt="">
                <h5 class="fw-bold text-light">Divisi Jurnalistik</h5>
                <p class="text-light">
                    Bertugas mengontrol dan mengawasi jalannya program mading sekolah, memberikan fasilitas kepada santri dalam bidang tulis-menulis, serta mengatur dan mengawasi penerbitan buletin sekolah. Selain itu, membuat berita terkait event-event sekolah, menyebarkan buletin ke lembaga ZAHA Genggong, dan mengoordinir kepanitiaan dalam setiap program yang dijalankan.
                </p>
            </div>
            <div id="item-purpose" data-aos="zoom-in" data-aos-duration="1000" class="card border-success border-5 p-3" style="width:30%;height:auto">
                <img class="w-25" src="/img/osis/icon/minat_bakat.png" alt="">
                <h5 class="fw-bold text-success">Divisi Minat Bakat</h5>
                <p class="text-success">
                    Bertugas membantu menyalurkan kreativitas, keahlian, dan keunggulan santri, melatih santri untuk lebih percaya diri, serta mendukung mereka dalam mengembangkan potensi diri. Selain itu, memberikan wawasan tentang praktik berniaga yang baik dan benar kepada santri MA ZAHA, serta mengoordinir kepanitiaan dalam setiap program yang dilaksanakan.
                </p>
            </div>
            <div id="item-purpose" data-aos="zoom-in" data-aos-duration="1000" class="card bg-success p-3" style="width:30%;height:auto">
                <img class="w-25" src="/img/osis/icon/kedisiplinan.png" alt="">
                <h5 class="fw-bold text-light">Divisi Kedisiplinan</h5>
                <p class="text-light">Bertugas menjaga ketertiban dan kedisiplinan santri, menegakkan tata tertib yang berlaku di lingkungan MA ZAHA, serta memberikan contoh sikap disiplin dalam kehidupan sehari-hari. Selain itu, melakukan pengawasan terhadap pelanggaran aturan, memberikan laporan evaluasi, dan bekerja sama dengan pihak terkait dalam menindaklanjuti pelanggaran secara bijaksana dan mendidik.</p>
            </div>
        </div>
    </div>    
</div>
<div class="mt-5" id="kegiatan">
    <h1 data-aos="flip-left" data-aos-duration="1000" class="text-center fw-bold text-success-emphasis">Galeri Kegiatan OSIM</h1>
    <img data-aos="flip-left" data-aos-duration="1000" style="max-width: 75%" class="mx-auto d-block mb-4"  src="/img/hr.png" alt="">
<div class="bg-success py-4" style="margin-bottom: 100px;width:100%">
    <div class="all mx-auto justify-content-center" style="overflow-x: hidden; overflow-y:hidden;max-width:90%">
    <div class="gallery">
    <img onclick="openFullscreen(this)" src="{{asset('img/osis/day 3.png')}}"  class="img4 clickable-img">
    <img onclick="openFullscreen(this)" src="{{asset('img/osis/4.png')}}"  class="img1 clickable-img">
    <img onclick="openFullscreen(this)" src="{{asset('img/osis/TEMPLATE.png')}}"  class="img3 clickable-img">
    <img onclick="openFullscreen(this)" src="{{asset('img/osis/day 3 (3).png')}}"  class="img2 clickable-img">
    <img onclick="openFullscreen(this)" src="{{asset('img/osis/5.png')}}"  class="img5 clickable-img">
    <img onclick="openFullscreen(this)" src="{{asset('img/osis/day 2.png')}}"  class="img6 clickable-img">
    <img onclick="openFullscreen(this)" src="{{asset('img/osis/1.png')}}"  class="img7 clickable-img">
    </div>
</div>
</div>
</div>
<div class="fullscreen-overlay" onclick="closeFullscreen()">
        <span class="close-btn">&times;</span>
        <img src="" class="fullscreen-img">
    </div>
<div class="mt-5" id="karya">
    <h1 data-aos="flip-left" data-aos-duration="1000" class="text-center fw-bold text-success-emphasis">Hasil Karya OSIM</h1>
    <img data-aos="flip-left" data-aos-duration="1000" style="max-width: 75%" class="mx-auto d-block mb-4"  src="/img/hr.png" alt="">
@if(auth()->check())
@if(auth()->user()->id==1 || auth()->user()->id==3 || auth()->user()->id==10)
<div class="d-flex justify-content-center mb-3">
    <a href="{{route('kesiswaan.add')}}"><button class="filter">+ Buletin OSIM</button></a>
</div>
@endif
@endif
    <div class="d-flex flex-wrap justify-content-center gap-5">
    {{-- <embed src="/img/osis/Menebas Aral.pdf" type="application/pdf" height="600px" width="50%"> --}}
        <div id="dokumentasi" 
             class="card rounded-3 p-3 d-flex flex-row justify-content-center align-items-center gap-3"
             data-aos="zoom-out"
             data-aos-duration="1000">
            
            <div class="col-6 position-relative d-flex flex-wrap justify-content-center id="separuh">
                <img src="/img/osis/menebas aral.jpg" onclick="openFullscreen(this)" alt="gallery" class="clickable-img img-fluid rounded-3 w-100" style="cursor: pointer; object-fit: cover;">
            
                <div class="caption text-center mt-2">
                    <p class="text-sm mb-1">Click this image to full screen</p>
                    <img src="/img/search.png" alt="" width="20">
                </div>
            </div>
        
            <div class="cardInfo col-6">
                <div class="p-3">
                    <h2 class="mb-0 fw-bold text-center">Menebas Aral</h2>
                    <hr>
                    <li>Jenis   : Antologi Cerpen</li>
                    <li>Penulis : Santri MA ZAHA 1</li>
                    <li>Penerbit: RnA Publishing</li>
                    <li>Tahun   : 2024</li>
                    <li>Tebal   : 128 halaman</li>
                    <li class="fw-bold">harga   : <span class="text-success-emphasis fs-3 fw-bold">Rp. 35.000</span></li>
                </div>
                <br>
                <a onclick="sinopsis1()" class="btn btn-primary rounded-0" style="widows: 40%"><img src="/img/osis/icon/zoom.png" style="width:20px" alt=""> Sinopsis</a>
                <a onclick="beli1()" class="btn btn-success rounded-0" style="widows: 40%"><img src="/img/osis/icon/buy.png"  style="width:20px"alt=""> Beli Sekarang</a>
            </div>
        </div>
        <div id="dokumentasi" 
             class="card rounded-3 p-3 d-flex flex-row justify-content-center align-items-center gap-3"
             data-aos="zoom-out"
             data-aos-duration="1000">

            <div class="col-6 position-relative d-flex flex-wrap justify-content-center id="separuh">
                <img src="/img/osis/icon/Cover Sorai Liku Jalanan 1.jpg" onclick="openFullscreen(this)" alt="gallery" class="clickable-img img-fluid rounded-3 w-100" style="cursor: pointer; object-fit: cover;">
            
                <div class="caption text-center mt-2">
                    <p class="text-sm mb-1">Click this image to full screen</p>
                    <img src="/img/search.png" alt="" width="20">
                </div>
            </div>
        
            <div class="cardInfo col-6">
                <div class="p-3">
                    <h2 class="mb-0 fw-bold text-center">Sorai Liku Jalanan</h2>
                    <hr>
                    <li>Jenis   : Antologi Cerpen</li>
                    <li>Penulis : Santri MA ZAHA 1</li>
                    <li>Penerbit: RnA Publishing</li>
                    <li>Tahun   : 2025</li>
                    <li>Tebal   : 128 halaman</li>
                    <li class="fw-bold">harga   : <span class="text-success-emphasis fs-3 fw-bold">Rp. 35.000</span></li>
                </div>
                <br>
                <a onclick="sinopsis2()" class="btn btn-primary rounded-0" style="widows: 40%"><img src="/img/osis/icon/zoom.png" style="width:20px" alt=""> Sinopsis</a>
                <a onclick="beli2()" class="btn btn-success rounded-0" style="widows: 40%"><img src="/img/osis/icon/buy.png"  style="width:20px"alt=""> Beli Sekarang</a>
            </div>
        </div>


        

    </div>
<div class="my-5 d-flex flex-wrap justify-content-evenly">
    @foreach($buletins as $buletin)
    <div id="buletin" class="card mt-3">
        <div id="myCarousel{{$buletin->id}}" class="carousel slide mb-6 position-relative" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel{{$buletin->id}}" data-bs-slide-to="0" class="active" aria-label="Geser 1" aria-current="true"></button>
                <button type="button" data-bs-target="#myCarousel{{$buletin->id}}" data-bs-slide-to="1" aria-label="Geser 2"></button>
            </div>
            <div class="carousel-inner mt-3">
                <div id="kartu" class="carousel-item active bg-light bg-opacity-50 shadow-lg rounded-3 border-secondary">
                    <div class="container d-flex flex-wrap">
                        <div class="item">
                            <img onclick="openFullscreen(this)" class="w-100 d-block shadow-lg rounded-3" src="{{asset('img/osis/'.$buletin->page1)}}" alt="">
                        </div>
                    </div>  
                </div>  
                <div id="kartu" class="carousel-item bg-light bg-opacity-50 shadow-lg rounded-3 border-secondary">
                    <div class="container d-flex flex-wrap">
                        <div class="item">
                            <img onclick="openFullscreen(this)" class="w-100 d-block shadow-lg rounded-3" src="{{asset('img/osis/'.$buletin->page2)}}" alt="">
                        </div>
                    </div>  
                </div>  
                
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel{{$buletin->id}}" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Sebelumnya</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel{{$buletin->id}}" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Berikutnya</span>
                </button>
            </div>
            <div class="p-3">
                <h3 class="fw-bold">{{$buletin->title}}</h3>
                <p>Edisi {{$buletin->edisi}}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
<script>
    let autocomplete;
    let map;
    let marker;
    let geocoder;

    function initAutocomplete() {
        console.log('Google Maps API loaded');
        // Fungsi ini akan dipanggil oleh callback Google Maps
    }

    function openFullscreen(img) {
        const overlay = document.querySelector('.fullscreen-overlay');
        const fullscreenImg = overlay.querySelector('.fullscreen-img');
        
        fullscreenImg.src = img.src;
        overlay.style.display = 'flex';
    }

    function closeFullscreen() {
        document.querySelector('.fullscreen-overlay').style.display = 'none';
    }

    function sinopsis1() {
        Swal.fire({
            title: 'Sinopsis "Menebas Aral"',
            html: `
            <div style="text-align:justify; padding:20px; max-height:60vh; overflow-y:auto">
                <p>Siapakah di dunia ini yang tidak ingin hidupnya Bahagia? Siapakah di dunia ini yang tidak ingin mencapai kesuksesan? Ribuan kali pun pertanyaan ini dilontarkan, taka da seorang pun yang mengiyakan. Bahagia dan sukses telah menjadi Impian dasar setiap insan. Entah besar atau kecilnya harapan, semua orang pasti lebih memilih untuk hidup Bahagia tanpa adanya ujian. Namun, hakikatnya kebahagiaan muncul sebab adanya kesedihan. Begitu pula kesuksesan yang muncul sebab adanya kegagalan. Kita bertempat tinggal di bumi yang berotasi juga berevolusi tanpa henti.Perubahan posisi silih berganti searah jalannya waktu yang mengikuti. Benar kata langit, dia tak pernah menjanjikan bahwa dirinya selalu biru. Dengan hadirnya awan dan matahari yang dapat mengubah warnanya sewaktu-waktu. Begitupun manusia. Tuhan tak pernah memjanjikan kepada makhluknya bahwa ia akan hidup Bahagia selamanya. Namun, Tuhan menjanjikan kebahagiaan yang kelak diberikan kepada hamba yang menerima ujian dengan lapang dada. Mungkin, kesuksesan di mat akita tidaklah sama dengan kesuksesan di sisi-Nya. Sukses yang sebenarnya ialah ia yang mampu bertahan di tengah dahsyatnya ujian yang menerpa. Bahkan, Tuhan mengartikan sebuah kata 'Aral' atau 'ujian' sebagai bentuk kasih sayang terhadap hamba-Nya.</p>
            </div>`,
            width: '800px',
            confirmButtonText: 'Tutup'
        });
    }

    function sinopsis2() {
        Swal.fire({
            title: 'Sinopsis "Sorai Liku Jalanan"',
            html: `
            <div style="text-align:justify; padding:20px; max-height:60vh; overflow-y:auto">
                <p>Anda, salah satu orang beruntung yang menggenggam pustaka ini. Beragam kisah menuai sejuta makna, mengekspresikan banyak rasa di setiap masa. Ada rasa senang yang mengakar dari sebuah pencapaian, bangga terhadap perjuangan, serta kebersamaan yang lama dinantikan. Ada pula rasa sedih yang mengakar dari penyesalan, kehilangan, bahkan kerinduan yang tak kunjung usai. Semua itu dituangkan oleh tinta emas di ukiran benak yang menjelma menjadi sebuah karya berjudul "Sorai Liku Jalanan".</p>
                <p>Lika-liku perjalanan pada masing-masing tokoh meninggalkan jejak emosional di akhir cerita. Buku ini mengantarkan Anda menyelami luasnya samudra kehidupan. Menyadari banyaknya kisah seseorang yang mungkin tak pernah dipikirkan oleh angan–angan. Ekspresi batin para penulis hebat dari MA Zainul Hasan 1 Genggong dirangkum dalam lembaran kertas dengan ragam inspirasi di dalamnya. Menjadikan kata demi kata sebagai cerminan langkah semangat menebar manfaat bagi para pembaca.</p>
                <p style="text-align:center; font-style:italic">"Judulnya sangat dalam makna: <strong>"Sorai Liku Jalanan"</strong>. Setiap liku, setiap belokan, dan setiap jalanan dalam cerita ini adalah metafora dari petualangan batin, pergulatan ide, dan pencarian jati diri. Di setiap sorak—atau <em>sorai</em>—terselip suara hati, keberanian, dan harapan yang dikumandangkan oleh para penulis muda kita. Mereka tidak hanya mengarungi jalanan cerita, tetapi juga membuka jalan baru untuk menunjukkan bahwa tradisi pesantren yang kaya dengan ilmu agama dapat beriringan harmonis dengan kreativitas sastra yang mendunia".</p>
                <p style="text-align:center;"><strong>-- Nun Hassan Ahsan Malik --</strong></p>
            </div>`,
            width: '800px',
            confirmButtonText: 'Tutup'
        });
    }

   function beli1() {
        bukuPembelian('Menebas Aral');
    }

    function beli2() {
        bukuPembelian('Sorai Liku Jalanan');
    }

    function bukuPembelian(judulBuku) {
        // Data kota di Jawa Timur dengan jarak dari Probolinggo
        const kotaJatim = [
            { nama: "Kota Probolinggo", jarak: 5 },
            { nama: "Kabupaten Probolinggo", jarak: 10 },
            { nama: "Surabaya", jarak: 100 },
            { nama: "Malang", jarak: 120 },
            { nama: "Pasuruan", jarak: 40 },
            { nama: "Lumajang", jarak: 80 },
            { nama: "Jember", jarak: 150 },
            { nama: "Banyuwangi", jarak: 250 },
            { nama: "Situbondo", jarak: 90 },
            { nama: "Bondowoso", jarak: 70 },
            { nama: "Kediri", jarak: 130 },
            { nama: "Blitar", jarak: 140 },
            { nama: "Madiun", jarak: 180 },
            { nama: "Jakarta", jarak: 800 },
            { nama: "Bandung", jarak: 700 },
            { nama: "Yogyakarta", jarak: 400 },
            { nama: "Semarang", jarak: 350 },
            { nama: "Solo", jarak: 300 },
            { nama: "Bali", jarak: 300 },
            { nama: "Luar Jawa", jarak: 1000 },
            { nama: "Lainnya", jarak: 0 } // ini soalnya gak pake ongkir
        ];

        const formHTML = `
        <div class="container-fluid">
            <input type="hidden" id="judul_buku" value="${judulBuku}">
            
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Jumlah Eksemplar</label>
                    <input type="number" id="jumlah_buku" class="form-control" min="1" value="1" onchange="hitungTotalManual()">
                </div>
                
                <div class="col-md-6 mb-3">
                    <label class="form-label fw-bold">Harga per eksemplar</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp</span>
                        <input type="text" class="form-control" value="35.000" readonly>
                    </div>
                </div>
            </div>
            
            <hr>
            
            <h5 class="fw-bold mb-3">Data Pengiriman</h5>
            
            <div class="mb-3">
                <label class="form-label fw-bold">Nama Lengkap Penerima</label>
                <input type="text" id="nama_penerima" class="form-control" placeholder="Nama lengkap">
            </div>
            
            <div class="mb-3">
                <label class="form-label fw-bold">No. telegram / whatsapp</label>
                <div class="input-group">
                    <span class="input-group-text">+62</span>
                    <input type="text" id="whatsapp" class="form-control"
                           pattern="[0-9]{9,12}">
                </div>
                <small class="text-muted">Contoh: 81234567890</small>
            </div>
            
            <div class="mb-3">
                <label class="form-label fw-bold">Provinsi</label>
                <select id="provinsi" class="form-select province-select" onchange="hitungTotalManual()">
                    <option value="">Pilih Provinsi</option>
                    <option value="jatim">Jawa Timur</option>
                    <option value="jabar">Jawa Barat</option>
                    <option value="jateng">Jawa Tengah</option>
                    <option value="jogja">DI Yogyakarta</option>
                    <option value="bali">Bali</option>
                    <option value="luar_jawa">Luar Jawa</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label class="form-label fw-bold">Kota/Kabupaten</label>
                <select id="kota" class="form-select city-select" onchange="hitungTotalManual()">
                    <option value="">Pilih Kota</option>
                    ${kotaJatim.map(kota => 
                        `<option value="${kota.jarak}" data-nama="${kota.nama}">${kota.nama}</option>`
                    ).join('')}
                </select>
            </div>
            
            <div class="mb-3">
                <label class="form-label fw-bold">Alamat Lengkap</label>
                <textarea id="alamat_lengkap" class="form-control" rows="3" 
                          placeholder="RT/RW, Nama Jalan, Desa/Kelurahan, Kecamatan"></textarea>
            </div>
            
            <div class="mb-3">
                <label class="form-label fw-bold">Kode Pos</label>
                <input type="text" id="kode_pos" class="form-control" placeholder="67219">
            </div>
            
            <hr>
            
            <div class="alert alert-success">
                <h6>Rincian Biaya:</h6>
                <div class="row">
                    <div class="col-6">
                        <small>Harga Buku (1×):</small>
                    </div>
                    <div class="col-6 text-end">
                        <small>Rp <span id="harga_satuan">35.000</span></small>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-6">
                        <small>Jumlah:</small>
                    </div>
                    <div class="col-6 text-end">
                        <small><span id="display_jumlah">1</span> eksemplar</small>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-6">
                        <small>Subtotal Buku:</small>
                    </div>
                    <div class="col-6 text-end">
                        <small>Rp <span id="subtotal_buku">35.000</span></small>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-6">
                        <small>Ongkos Kirim :</small>
                    </div>
                    <div class="col-6 text-end">
                        <small>COD ke kurir saat pesanan tiba</small>
                    </div>
                </div>
                
                <hr class="my-2">
                
                <div class="row fw-bold">
                    <div class="col-6">
                        <h6>TOTAL(Tidak termasuk ongkir):</h6>
                    </div>
                    <div class="col-6 text-end">
                        <h5 class="text-success">Rp <span id="total_harga">35.000</span></h5>
                    </div>
                </div>
                
                <div class="small text-muted mt-2">
                    <i class="fas fa-info-circle"></i>
                    Pengiriman dari: <strong>MA Zainul Hasan 1 Genggong, Probolinggo, Jawa Timur</strong>
                </div>
            </div>
            
            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" id="konfirmasi_data">
                <label class="form-check-label small" for="konfirmasi_data">
                    Saya telah memeriksa dan menyetujui bahwa data yang diisi sudah benar
                </label>
            </div>
        </div>`;
        
        Swal.fire({
            title: `Beli ${judulBuku}`,
            html: formHTML,
            showCancelButton: true,
            confirmButtonText: 'Lanjutkan Pembayaran',
            cancelButtonText: 'Batal',
            width: '700px',
            didOpen: () => {
                hitungTotalManual();
            },
            preConfirm: () => {
                // Validasi form
                const nama = document.getElementById('nama_penerima').value;
                const whatsapp = document.getElementById('whatsapp').value;
                const provinsi = document.getElementById('provinsi').value;
                const kota = document.getElementById('kota').value;
                const alamat = document.getElementById('alamat_lengkap').value;
                const konfirmasi = document.getElementById('konfirmasi_data').checked;
                
                const errors = [];
                
                if (!nama) errors.push('Nama penerima harus diisi');
                if (!whatsapp || !/^[0-9]{9,12}$/.test(whatsapp)) 
                    errors.push('Nomor WhatsApp tidak valid (contoh: 81234567890)');
                if (!provinsi) errors.push('Pilih provinsi');
                if (!kota) errors.push('Pilih kota/kabupaten');
                if (!alamat || alamat.length < 10) 
                    errors.push('Alamat lengkap minimal 10 karakter');
                if (!konfirmasi) errors.push('Centang konfirmasi data');
                
                if (errors.length > 0) {
                    Swal.showValidationMessage(errors.join('<br>'));
                    return false;
                }
                
                return true;
            }
        }).then((result) => {
            if (result.isConfirmed) {
                prosesCheckoutManual();
            }
        });
    }

    function hitungTotalManual() {
        const jumlah = parseInt(document.getElementById('jumlah_buku')?.value) || 1;
        const hargaSatuan = 35000;
        const subtotalBuku = jumlah * hargaSatuan;
        
        // Hitung ongkir berdasarkan pilihan kota
        // const selectKota = document.getElementById('kota');
        // const jarak = parseInt(selectKota?.value) || 0;
        // const ongkirPerKm = 1000;
        // const ongkir = jarak * ongkirPerKm;
        
        // const total = subtotalBuku + ongkir;
        const total = subtotalBuku;
        
        // Update display
        const elements = {
            'display_jumlah': jumlah,
            'subtotal_buku': subtotalBuku.toLocaleString('id-ID'),
            // 'jarak_km': jarak,
            // 'ongkir': ongkir.toLocaleString('id-ID'),
            'total_harga': total.toLocaleString('id-ID')
            // 'total_harga': subtotalBuku.toLocaleString('id-ID')
        };
        
        Object.keys(elements).forEach(id => {
            const el = document.getElementById(id);
            if (el) el.textContent = elements[id];
        });
    }

    function prosesCheckoutManual() {
        const data = {
            judul_buku: document.getElementById('judul_buku').value,
            jumlah: document.getElementById('jumlah_buku').value,
            nama_penerima: document.getElementById('nama_penerima').value,
            whatsapp: '62' + document.getElementById('whatsapp').value, // Format internasional
            provinsi: document.getElementById('provinsi').options[document.getElementById('provinsi').selectedIndex].text,
            kota: document.getElementById('kota').options[document.getElementById('kota').selectedIndex].text,
            alamat_lengkap: document.getElementById('alamat_lengkap').value,
            kode_pos: document.getElementById('kode_pos').value,
            // jarak_km: document.getElementById('jarak_km').textContent,
            subtotal_buku: document.getElementById('subtotal_buku').textContent.replace(/\./g, ''),
            // ongkir: document.getElementById('ongkir').textContent.replace(/\./g, ''),
            total_harga: document.getElementById('total_harga').textContent.replace(/\./g, '')
        };
        
        // Tampilkan QRIS tetap
        tampilkanQRISManual(data);
        
        // Simpan ke localStorage untuk backup
        localStorage.setItem('order_data', JSON.stringify(data));
    }

  function tampilkanQRISManual(data) {
    const orderId = 'OSIM' + Date.now().toString().slice(-8);
    
    // Simpan orderId ke data konfirmasi
    data.order_id = orderId;
    localStorage.setItem('order_data', JSON.stringify(data));
    
    Swal.fire({
        title: 'Pembayaran via QRIS',
        html: `
        <div class="text-center">
            <div class="alert alert-info text-start">
                <h6><i class="fas fa-info-circle"></i> Instruksi Pembayaran:</h6>
                <ol class="small">
                    <li>Scan QRIS di bawah dengan aplikasi bank/e-wallet Anda</li>
                    <li>Transfer tepat sebesar: <strong>Rp ${parseInt(data.total_harga).toLocaleString('id-ID')}</strong></li>
                    <li><strong>Screenshoot/simpan bukti transfer</strong></li>
                    <li>Tunggu admin meminta bukti transfer</li>
                    <li>Kirim bukti transfer ke Admin kami</li>
                    <li>Pesanan akan diproses..</li>
                </ol>
            </div>
            
            <div class="qris-container my-4 p-3 border rounded bg-light">
                <h5 class="text-success">QRIS MA ZAHA 1 OSIM</h5>
                <img src="/img/qris-default.png" alt="QRIS" class="img-fluid mb-2" style="max-width: 250px;">
                <p class="small text-muted">Scan dengan bank/e-wallet</p>
                
                <div class="mt-2">
                    <small>Atau transfer manual ke:</small><br>
                    <div class="alert alert-secondary py-2 my-2">
                        <strong>Bank Mandiri</strong><br>
                        <code>1400025303703</code><br>
                        <small>REKENING OSIM MA ZAHA 1</small>
                    </div>
                </div>
            </div>
            
            <div class="payment-details mt-3">
                <table class="table table-sm table-bordered">
                    <tr>
                        <td><strong>Kode Pesanan</strong></td>
                        <td><code>${orderId}</code></td>
                    </tr>
                    <tr>
                        <td><strong>Nama Penerima</strong></td>
                        <td>${data.nama_penerima}</td>
                    </tr>
                    <tr>
                        <td><strong>No. WhatsApp</strong></td>
                        <td>${data.whatsapp}</td>
                    </tr>
                    <tr>
                        <td><strong>Alamat</strong></td>
                        <td class="small">${data.alamat_lengkap}, ${data.kota}</td>
                    </tr>
                    <tr class="table-success">
                        <td><strong>TOTAL BAYAR (belum termasuk ongkir)</strong></td>
                        <td class="fw-bold">Rp ${parseInt(data.subtotal_buku).toLocaleString('id-ID')}</td>
                    </tr>
                </table>
            </div>
            
            <div class="alert alert-warning small mt-3">
                <i class="fas fa-exclamation-triangle"></i>
                <strong>KONTAK TELEGRAM:</strong><br>
                Admin: <strong>@najwannada</strong><br>
                <small>Klik tombol di atas untuk langsung chat dengan Admin</small>
            </div>
            
            
        </div>`,
        showConfirmButton: false,
        showCloseButton: true,
        width: '750px'
    });
    
    // Kirim notifikasi ke admin Telegram intruction
    kirimNotifikasiTelegramKeAdmin(data, orderId);
}

// function openTelegramConfirmation(orderId) {
//     const telegramBotUsername = 'MAZAHA1_OSIM_Bot'; // Ganti dengan username bot Anda
//     const telegramUrl = `https://t.me/${telegramBotUsername}?start=${orderId}`;
    
//     // Buka Telegram
//     window.open(telegramUrl, '_blank');
    
//     // Tampilkan instruksi
//     Swal.fire({
//         title: 'Buka Telegram',
//         html: `
//         <div class="text-center">
//             <i class="fab fa-telegram fa-3x text-primary mb-3"></i>
//             <p>Aplikasi Telegram akan terbuka. Jika tidak:</p>
//             <div class="alert alert-info text-start">
//                 <strong>Manual Instruction:</strong>
//                 <ol class="small">
//                     <li>Buka aplikasi Telegram</li>
//                     <li>Cari bot: <strong>@${telegramBotUsername}</strong></li>
//                     <li>Kirim pesan: <code>/start ${orderId}</code></li>
//                     <li>Ikuti instruksi dari bot</li>
//                 </ol>
//             </div>
//             <p class="small text-muted">Pastikan Anda sudah install Telegram di device ini.</p>
//         </div>`,
//         confirmButtonText: 'Saya Sudah Buka Telegram',
//         showCancelButton: true,
//         cancelButtonText: 'Batal'
//     });
// }

function kirimNotifikasiTelegramKeAdmin(data, orderId) {
    const telegramMessage = `
🛒 *PESANAN BARU - BUTUH KONFIRMASI*
══════════════════════════════
📦 *KODE PESANAN:* \`${orderId}\`
📚 *BUKU:* ${data.judul_buku}
📊 *JUMLAH:* ${data.jumlah} eksemplar

👤 *DATA PEMBELI:*
├ Nama: ${data.nama_penerima}
├ WhatsApp: ${data.whatsapp}
├ Alamat: ${data.alamat_lengkap}
├ Kota: ${data.kota} (${data.jarak_km} km)
└ Provinsi: ${data.provinsi}

💰 *RINCIAN PEMBAYARAN:*
├ Subtotal: Rp ${parseInt(data.subtotal_buku).toLocaleString('id-ID')}
├ Ongkir: Dibayar COD oleh Pembeli

⏰ *WAKTU:* ${new Date().toLocaleString('id-ID')}
📊 *STATUS:* MENUNGGU PEMBAYARAN

📋 *TINDAKAN ADMIN:*
1. Hubungi pembeli untuk meminta bukti transfer
2. Cek bukti transfer yang dikirim
3. Verifikasi ke bank
4. Update status menjadi "PAID"
5. Konfirmasi ke pembeli
    `;
    
    // Kirim ke channel/group admin
    fetch('/api/send-telegram-admin', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': '{{ csrf_token() }}'
        },
        body: JSON.stringify({
            order_id: orderId,
            message: telegramMessage,
            customer_data: data
        })
    }).then(response => {
        console.log('Notifikasi terkirim ke admin');
    }).catch(error => {
        console.error('Gagal mengirim notifikasi:', error);
    });
}
    function simpanKeDatabase(data, orderId) {
        fetch('/api/save-order', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                order_id: orderId,
                ...data,
                status: 'pending',
                created_at: new Date().toISOString()
            })
        }).then(response => {
            console.log('Order saved to database');
        }).catch(error => {
            console.error('Failed to save order:', error);
        });
    }
</script>

@endsection