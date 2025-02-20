<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MA Zainul Hasan 1 Genggong</title>
    <link rel="icon" type="image/png" href="http://localhost:8000/img/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <style>
        @import url('https://fonts.cdnfonts.com/css/instrument-sans');
        * {
            font-family: 'Instrument Sans', sans-serif;
        }

        /* Navbar */
        .navbar-nav .nav-link {
            color: white;
            font-weight: bold;
        }

        .navbar-nav .nav-link:hover {
            border-bottom: 3px solid white;
            font-weight: bold;
        }

        .navbar-nav .dropdown-menu {
            background-color: white;
        }

        .navbar-nav .dropdown-item {
            color: #033919;
        }

        /* Responsive adjustments */
        @media (max-width: 767px) {
            #namaWeb {
                margin: auto;
            }
            .social-icons img {
                width: 30px;
                height: 30px;
            }
            .btn-ppdb {
                padding: 0.3rem 0.8rem;
                font-size: 0.875rem;
            }
        }
        .nav-link.dropdown-toggle::after {
  display: none !important;
}
    </style>
</head>
<body>
    <header class="sticky-top bg-light">
        <div class="container-fluid d-flex justify-content-between align-items-center px-3 py-2">
            <a id="namaWeb" class="navbar-brand" href="{{route('beranda')}}">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
                <img src="http://localhost:8000/img/Logo Selatan.png" alt="Logo" height="40">
                <div class="d-flex align-items-center">
                    <span class="text-dark d-none d-md-block">Telp : 0811-355-455 | Email : ma_zainulhasan@gmail.com</span>
                    {{-- <div class="d-flex social-icons ms-3"> --}}
                        <a style="margin-right:0.5rem" href="https://web.telegram.org/a/#-1001262566536"><img src="http://localhost:8000/img/tele.png" alt="Telegram"></a>
                        <a style="margin-right:0.5rem" href="https://www.instagram.com/ma_zahagenggong"><img src="http://localhost:8000/img/Vector.png" alt="Instagram"></a>
                        <a style="margin-right:0.5rem" href="https://www.youtube.com/@mazaha1genggong879"><img src="http://localhost:8000/img/yt.png" alt="YouTube"></a>
                    {{-- </div> --}}
                </a>
                <a class="btn btn-success btn-ppdb" href="https://ppsb.vercel.app/">PPDB</a>
            </div>
        </div>
    </header>
    
    <nav class="sticky-top navbar navbar-expand-md navbar-dark" style="background-color: #033919;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto gap-5">
                    <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Profil Madrasah</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/courses">Sambutan Kepala Madrasah</a></li>
                            <li><a class="dropdown-item" href="{{route('campus.index')}}">Kepala Madrasah dari Masa ke Masa</a></li>
                            <li><a class="dropdown-item" href="{{route('jurusan.index')}}">Struktur Madrasah</a></li>
                            <li><a class="dropdown-item" href="{{route('jurusan.index')}}">Visi Misi Motto dan Tujuan</a></li>
                            <li><a class="dropdown-item" href="{{route('jurusan.index')}}">Profil Asatidz</a></li>
                            <li><a class="dropdown-item" href="{{route('jurusan.index')}}">Fasilitas Pembelajaran</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Kurikulum</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/courses">Muatan Kurikulum</a></li>
                            <li><a class="dropdown-item" href="{{route('campus.index')}}">Ekstrakulikuler</a></li>
                            <li><a class="dropdown-item" href="{{route('jurusan.index')}}"> Mitra Kerjasama</a></li>
                        </ul>
                    </li>
                        <li class="nav-item dropdown">
                            <a id="menu" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false" >Program Unggulan</a>
                            <ul class="dropdown-menu">
                                <li><a  class="dropdown-item" style="color:#033919;" href="/courses"> Tahfidzul Qur’an</a></li>
                                <li><a  class="dropdown-item" style="color:#033919" href="{{route('campus.index')}}">Tahqiqu Kiroatil Kutub</a></li>
                                <li><a  class="dropdown-item" style="color:#033919;" href="{{route('jurusan.index')}}">Program Intensifikasi TIK</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="menu" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false" >Platform Digital</a>
                            <ul class="dropdown-menu">
                                <li><a  class="dropdown-item" style="color:#033919;" href="/courses">Simumtaz</a></li>
                                <li><a  class="dropdown-item" style="color:#033919" href="{{route('campus.index')}}">Aromaza</a></li>
                                <li><a  class="dropdown-item" style="color:#033919;" href="{{route('jurusan.index')}}"> Tes Psikologi Jurusan</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="menu" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false" >Info Madrasah</a>
                            <ul class="dropdown-menu">
                                <li><a  class="dropdown-item" style="color:#033919;" href="/courses">Berita</a></li>
                                <li><a  class="dropdown-item" style="color:#033919" href="{{route('campus.index')}}">Galeri</a></li>
                                <li><a  class="dropdown-item" style="color:#033919;" href="{{route('jurusan.index')}}">Prestasi</a></li>
                                <li><a  class="dropdown-item" style="color:#033919;" href="{{route('jurusan.index')}}">Agenda Madrasah</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="menu" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false" >Pojok Alumni</a>
                            <ul class="dropdown-menu">
                                <li><a  class="dropdown-item" style="color:#033919;" href="/courses">Sebaran Alumni</a></li>
                                <li><a  class="dropdown-item" style="color:#033919" href="{{route('campus.index')}}">Testimoni Alumni</a></li>
                                <li><a  class="dropdown-item" style="color:#033919;" href="{{route('jurusan.index')}}">IKAMAZA</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="menu" class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false" >Pojok Kajian</a>
                            <ul class="dropdown-menu">
                                <li><a  class="dropdown-item" style="color:#033919;" href="/courses">Keislaman (Tanya Jawab)</a></li>
                                <li><a  class="dropdown-item" style="color:#033919" href="{{route('campus.index')}}">Kajian Umum</a></li>
                            </ul>
                        </li>
                        
                    </ul>
                    <div class="mx-3 form-check form-switch">
                        <input class="form-check-input"  type="checkbox" role="switch" id="themeSwitcher" onchange="updateTheme(this)">
                        <label class="form-check-label text-light" for="themeSwitcher">light</label>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    
        <main class="py-0">
            @yield('content')
        </main>

        @include('layouts.footer')

    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
<script>
    function updateTheme(checkbox) {
        const isChecked = checkbox.checked; 
        const htmlElement = document.documentElement;
        const theme = isChecked ? 'dark' : 'light';
        htmlElement.setAttribute('data-bs-theme', theme);
        const label = document.querySelector('label[for="themeSwitcher"]');
        label.textContent = theme;
        localStorage.setItem('theme', theme);
    }
    document.addEventListener('DOMContentLoaded', () => {
        const savedTheme = localStorage.getItem('theme') || 'light';
        const htmlElement = document.documentElement;
        const checkbox = document.getElementById('themeSwitcher');
        const label = document.querySelector('label[for="themeSwitcher"]');
        htmlElement.setAttribute('data-bs-theme', savedTheme);
        checkbox.checked = savedTheme === 'dark';
        label.textContent = savedTheme;
    });
</script>

