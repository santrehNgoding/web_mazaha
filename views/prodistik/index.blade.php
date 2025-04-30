@extends('layouts.app')
@section('content')
<style>
    #container{
        background-color: rgba(3,57,25,1);
        left:12.5%;
        top:50vw;    }
    /* @media only screen and (max-width:767px){
        #container{
            top:10em;
            gap:5%;
        }

    } */
    #container a{
        text-decoration: none;
        font-weight:600;
        font-size:1em;
        color:#fff;
    }
    #container a:hover{
        color:#ffd700;
    }
    h2{
        color:#033919;
        margin-top:100px !important;
    }
    article {
    position: relative;
    display: flow-root;
    text-align: justify;
    padding: 20px;
}

article img {
    float: left;
    shape-outside: url(/img/prodistik/its.png);
    margin-right: 20px;
    shape-margin: 20px; 
}

.description {
    padding: 0;

}
.testimonial-card {
    display: flex;
    align-items: center;
    background-color: #f5f5f5; /* Warna latar belakang */
    padding: 20px;
    border-radius: 10px; /* Sudut melengkung */
    width:100%;
    height:auto;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.testimonial-img {
    width: 150px; /* Ukuran gambar */
    border-radius: 10px; /* Opsional: Membuat gambar sedikit membulat */
    margin-right: 20px;
    flex-shrink: 0;
}

.testimonial-text {
    text-align: justify;
    width: 300px;
}

.quote {
    font-style: italic;
    color: #333;
}

.name {
    font-weight: bold;
    margin-top: 10px;
}

.info {
    color: #666;
    font-size: 14px;
}

::-webkit-scrollbar {
    display: none}
    @media only screen and (min-width:768px){
        article img{
            width:25%;
        }
        #container a{
            font-size:1.2rem;
        }
    }
    @media only screen and (max-width:767px){
        article img{
            width:100%;
        }
        #container a{
            font-size:0.7rem;
        }
}
</style>
<header class="mb-5">
    <img class="w-100" src="/img/prodistik/header.png" alt="">
    <div id="container" class="container rounded-3 p-3 position-absolute d-flex justify-content-around w-75 flew-wrap">
        <a href="#sejarah">Sejarah Prodistik</a>
        <a href="{{route('strukturProdistik')}}">Struktur Pengelola</a>
        <a href="{{route('kurikulumProdistik')}}">Kurikulum</a>
        <a href="{{route('tugasakhir.index')}}">Karya Santri</a>
    </div>
</header>
<h2 id="sejarah" class="fw-bold mx-5">Sejarah PRODISTIK</h2>
<div class="d-flex mx-3 mb-5">
    <div id="left" class="mx-3 clearfix" style="text-align:justify">
        <article>
            <img src="/img/prodistik/its.png" alt="">
            <div class="description">
                <p>
                    Program Pendidikan Terapan Bidang Teknologi Informasi dan Komunikasi (TIK) yang selanjutnya disebut PRODISTIK adalah suatu program pendidikan yang dikembangkan oleh Institut Teknologi Sepuluh Nopember (ITS) sejak tahun 2007. Tujuan dari Prodistik adalah memberikan pengetahuan dan ketrampilan Teknologi Informasi dan Komunikasi sejak dini kepada siswa MA/SMA. PRODISTIK dilaksanakan sekolah/madrasah bekerjasama dengan ITS dan program ini ditempuh selama siswa dalam masa belajar di sekolah/madrasah.
Adapun materi yang disampaikan meliputi bidang Perkantoran, Desain grafis, Multimedia, Animasi dan programming yang terangkum dalam kurikulum Prodistik dengan beban Pendidikan 25 SKS (Sistem Kredit Semester) yang terbagi dalam 5 (lima) semester. Bidang keahlian/bidang minat bisa diambil mulai semester III sesuai minat dari para peserta didik PRODISTIK.
Dengan adanya program ini diharapkan lulusan dari Madrasah/sekolah akan memiliki keterampilan di bidang Teknologi Informasi dan Komunikasi sebagai bekal untuk menghadapi tantangan jaman di era globalisasi
                </p>
            </div>
        </article>
    </div>
    </div>
    <div class="my-5">
        <h2 class="text-center fw-bold">Testimoni Mereka tentang Prodistik</h2>
        <div class="d-flex overflow-x-auto gap-3 mt-5 mx-3">
            @foreach($tests as $tes)
            <div class="testimonial-card">
                <img src="/img/prodistik/{{$tes->foto}}" alt="Foto Alumni" class="testimonial-img h-100" style="object-fit: cover">
                <div class="testimonial-text">
                    <p class="quote">
                        {{$tes->testimoni}}
                    </p>
                    <p class="name"><strong>{{$tes->nama}}</strong></p>
                    <p class="info">Alumni Prodistik Angkatan {{$tes->tahun_lulus}} {{$tes->jurusan}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
