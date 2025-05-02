<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-bs-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MA Zainul Hasan 1 Genggong</title>
    <link rel="icon" type="image/png" href="{{asset('/img/logo.png')}}">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    
    <style>
        @import url('https://fonts.cdnfonts.com/css/instrument-sans');
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        * {
            font-family: "Poppins", sans-serif;
  font-weight: 300;
  font-style: normal;
        }
        .poppins-thin {
  font-family: "Poppins", sans-serif;
  font-weight: 100;
  font-style: normal;
}

.poppins-extralight {
  font-family: "Poppins", sans-serif;
  font-weight: 200;
  font-style: normal;
}

.poppins-light {
  font-family: "Poppins", sans-serif;
  font-weight: 300;
  font-style: normal;
}

.poppins-regular {
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  font-style: normal;
}

.poppins-medium {
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  font-style: normal;
}

.poppins-semibold {
  font-family: "Poppins", sans-serif;
  font-weight: 600;
  font-style: normal;
}

.poppins-bold {
  font-family: "Poppins", sans-serif;
  font-weight: 700;
  font-style: normal;
}

.poppins-extrabold {
  font-family: "Poppins", sans-serif;
  font-weight: 800;
  font-style: normal;
}

.poppins-black {
  font-family: "Poppins", sans-serif;
  font-weight: 900;
  font-style: normal;
}

.poppins-thin-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 100;
  font-style: italic;
}

.poppins-extralight-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 200;
  font-style: italic;
}

.poppins-light-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 300;
  font-style: italic;
}

.poppins-regular-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 400;
  font-style: italic;
}

.poppins-medium-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 500;
  font-style: italic;
}

.poppins-semibold-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 600;
  font-style: italic;
}

.poppins-bold-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 700;
  font-style: italic;
}

.poppins-extrabold-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 800;
  font-style: italic;
}

.poppins-black-italic {
  font-family: "Poppins", sans-serif;
  font-weight: 900;
  font-style: italic;
}
        /* Navbar */
        .navbar-nav .nav-link {
            color: white;
            font-weight: bold;
        }
        .navbar-nav .nav-link:hover{
            color:#FFD700;
        }

        .navbar-nav .nav-link:hover {
            font-weight: bold;
            border-radius:10px;
        }

        .navbar-nav .dropdown-menu {
            background-color: white;
        }

        /* Dropdown muncul saat hover */
.nav-item.dropdown:hover .dropdown-menu {
    display: block;
}

/* Warna teks dropdown */
.dropdown-menu .dropdown-item {
    color: #033919;
}

/* Hover efek dropdown item */
.dropdown-menu .dropdown-item:hover {
    color: #f1f1f1;
    background-color: #033919;
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
        /* .nav-link.dropdown-toggle::after {
  display: none !important;
} */
    </style>
</head>
<body>
    <header class="sticky-top bg-light">
        <div class="container-fluid d-flex justify-content-between align-items-center px-3 py-2">
            <a id="namaWeb" class="navbar-brand" href="{{route('beranda')}}">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
                <img src="{{asset('/img/Logo Selatan.png')}}" alt="Logo" height="40">
                <div class="d-flex align-items-center">
                    <span style="margin-right:0.5rem" class="text-dark d-none d-md-block">Telp : 082234510002 | Email : ma_zahagenggong@yahoo.com</span>
                    {{-- <div class="d-flex social-icons ms-3"> --}}
                        <a style="margin-right:0.5rem" href="https://web.telegram.org/a/#-1001262566536"><img src="{{asset('/img/tele.png')}}" alt="Telegram"></a>
                        <a style="margin-right:0.5rem" href="https://www.instagram.com/ma_zahagenggong"><img src="{{asset('/img/Vector.png')}}" alt="Instagram"></a>
                        <a style="margin-right:0.5rem" href="https://www.youtube.com/@mazaha1genggong879"><img src="{{asset('/img/yt.png')}}" alt="YouTube"></a>
                    {{-- </div> --}}
                </a>
                <a class="btn btn-success btn-ppdb" href="https://ppsb.vercel.app/">PSB</a>
            </div>
        </div>
    </header>
    
    <nav class="sticky-top navbar navbar-expand-md navbar-dark" style="background-color: #033919;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto mx-5 gap-4">
                    <li class="nav-item"><a class="nav-link" href="{{route('beranda')}}">Beranda</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Berita</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/berita">Warta Madrasah</a></li>
                            <li><a class="dropdown-item" href="/galeri">Galeri</a></li>
                            <li><a class="dropdown-item" href="/prestasi">Prestasi</a></li>
                            <li><a class="dropdown-item" href="#">Agenda Madrasah</a></li>
                        </ul>
                    </li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Profil</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/sambutan">Sambutan Kepala Madrasah</a></li>
                            <li><a class="dropdown-item" href="/struktur">Struktur Madrasah</a></li>
                            <li><a class="dropdown-item" href="#">Visi Misi Motto dan Tujuan</a></li>
                            <li><a class="dropdown-item" href="/asatidz">Profil Asatidz</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Bidang</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('ekstra.index')}}">Kurikulum</a></li>
                            <li><a class="dropdown-item" href="{{route('kesiswaan.index')}}">Kesiswaan</a></li>
                            <li><a class="dropdown-item" href="/fasilitas">Sarana Prasarana</a></li>
                            <li><a class="dropdown-item" href="{{route('humas.index')}}">Hubungan Masyarakat</a></li>
                            <li><a class="dropdown-item" href="{{route('bendahara.index')}}">Keuangan</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Program Unggulan</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('tahfiz.index')}}">Tahfidzul Qur’an</a></li>
                            <li><a class="dropdown-item" href="#">Tahqiqu Qiroatil Kutub</a></li>
                            <li><a class="dropdown-item" href="/prodistik">Program Intensifikasi TIK</a></li>
                            <li><a class="dropdown-item" href="{{route('olimpiade.index')}}">Bimbingan Olimpiade</a></li>
                            <li><a class="dropdown-item" href="{{route('olimpiade.index')}}">LPBA</a></li>
                            <li><a class="dropdown-item" href="{{route('olimpiade.index')}}">LPBI</a></li>
                        </ul>
                    </li>
    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Platform Digital</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://simumtaz.mazainulhasan1.sch.id/login">Simumtaz</a></li>
                            <li><a class="dropdown-item" href="https://t.me/MAzahaBot">Aromaza</a></li>
                            <li><a class="dropdown-item" href="https://play.google.com/store/apps/details?id=id.co.solusinegeri.mumtaz">e-Mumtaz</a></li>
                            <li><a class="dropdown-item" href="https://psychic.mazainulhasan1.sch.id">Psychic</a></li>
                        </ul>
                    </li>
    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Pojok Alumni</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Sebaran Alumni</a></li>
                            <li><a class="dropdown-item" href="#">Testimoni Alumni</a></li>
                            <li><a class="dropdown-item" href="#">IKAMAZA</a></li>
                        </ul>
                    </li>
    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Kajian Santri</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Keislaman</a></li>
                            <li><a class="dropdown-item" href="#">Kajian Umum</a></li>
                        </ul>
                    </li>
    
                </ul>
            </div>
        </div>
    </nav>
    
    
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

