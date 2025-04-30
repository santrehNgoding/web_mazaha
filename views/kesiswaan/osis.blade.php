@extends('layouts.app')
@section('content')
<style>
    #title{
        background-color: #046c3c;
    }
</style>
<header class="p-5" id="title">
    <h1 class="my-5 text-center text-light fw-bold">Organisasi Siswa Intra Sekolah</h1>
</header>
<div class="mt-5 d-flex flex-wrap justify-content-evenly">
    <div>
        <a href="#struktur" class="text-decoration-none text-success-emphasis">
            <div style="width:150px;height:150px" class="bg-success rounded-circle p-auto p-3">
                <img class="w-100" src="/img/courses.png" alt="">
            </div>
            <h3 class="text-center fw-bold">Struktur</h3>
        </a>
    </div>
    <div>
        <a href="#struktur" class="text-decoration-none text-success-emphasis">
            <div style="width:150px;height:150px" class="bg-success rounded-circle p-auto p-3">
                <img class="w-100" src="/img/courses.png" alt="">
            </div>
            <h3 class="text-center fw-bold">Divisi</h3>
        </a>
    </div>
    <div>
        <a href="#struktur" class="text-decoration-none text-success-emphasis">
            <div style="width:150px;height:150px" class="bg-success rounded-circle p-auto p-3">
                <img class="w-100" src="/img/courses.png" alt="">
            </div>
            <h3 class="text-center fw-bold">Kegiatan</h3>
        </a>
    </div>
    <div>
        <a href="#struktur" class="text-decoration-none text-success-emphasis">
            <div style="width:150px;height:150px" class="bg-success rounded-circle p-auto p-3">
                <img class="w-100" src="/img/courses.png" alt="">
            </div>
            <h3 class="text-center fw-bold">Karya</h3>
        </a>
    </div>
    
</div>
<div class="mt-5">
    <h1 data-aos="flip-left" data-aos-duration="1000" class="text-center fw-bold text-success-emphasis">Struktur OSIS</h1>
    <img data-aos="flip-left" data-aos-duration="1000" style="max-width: 75%" class="mx-auto d-block mb-4"  src="/img/hr.png" alt="">
    <img class="mx-auto d-block" src="/img/ss.jpg" alt="">
</div>
<div class="mt-5">
    <h1 data-aos="flip-left" data-aos-duration="1000" class="text-center fw-bold text-success-emphasis">Pembina OSIS</h1>
    <img data-aos="flip-left" data-aos-duration="1000" style="max-width: 75%" class="mx-auto d-block mb-4"  src="/img/hr.png" alt="">
    <img class="mx-auto d-block" src="/img/ss.jpg" alt="">
</div>
<div class="mt-5">
    <h1 data-aos="flip-left" data-aos-duration="1000" class="text-center fw-bold text-success-emphasis">Pengurus OSIS</h1>
    <img data-aos="flip-left" data-aos-duration="1000" style="max-width: 75%" class="mx-auto d-block mb-4"  src="/img/hr.png" alt="">
    <img class="mx-auto d-block" src="/img/ss.jpg" alt="">
</div>
<div class="mt-5">
    <h1 data-aos="flip-left" data-aos-duration="1000" class="text-center fw-bold text-success-emphasis">Kegiatan OSIS</h1>
    <img data-aos="flip-left" data-aos-duration="1000" style="max-width: 75%" class="mx-auto d-block mb-4"  src="/img/hr.png" alt="">
    <img class="mx-auto d-block" src="/img/ss.jpg" alt="">
</div>
@endsection
