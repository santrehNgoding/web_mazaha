@extends('layouts.app')
@section('content')
<head>
    <style>
      *{
        font-size:1em;
      }
      @media only screen and (max-width:767px){
        q,button, a, span{
          font-size:0.7em;
        }
        .wrapper{
          margin-top:0px !important;
          margin-bottom:0px !important;
          padding:0px !important
        }
      }
    .title{
    background-color: rgba(17, 140, 207, 0.4);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    padding: 15vh;
    height:60vh;
    z-index: 2; 
}
h1{
    font-size: 7vw;
}

.headerasatidz {
    position: relative;
    width: 100%;
    height: 45vh;
    overflow: hidden;
}

video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover; 
    z-index: 1;
}
        #div:hover{
    box-shadow:none;
    border:3px #d5d6d7 solid;
}
@media (min-width: 768px) {
#respon {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        width: 80%;
        height:auto;
        gap:2em;
        margin: auto
   
    }
    #km {
        width:25%;
    }
}
    @media (max-width: 767px) {
    #respon {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap:1em;
        width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    }
}
        .gallery {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            width: 80%;
            max-width: 900px;
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
            left: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.6);
            color: white;
            text-align: center;
            padding-top: 10px;
            transition: bottom 0.4s ease, background 0.4s ease;
        }
        .photo:hover .caption {
            bottom: 0;
            background: rgb(3, 57, 25);
    transition: bottom 0.5s ease-in-out, background 1s ease-in-out, opacity 0.5s ease-in-out;

        }
        .photo:hover img {
            transform: scale(1.3);
            transition: transform 0.3s ease,transform 0.5s ease;
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
  background: #fff;
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
  background: #fff;
  bottom: -3px;
  left: 50%;
  transform: translate(-50%) rotate(45deg);
  transition: all 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55);
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
  background: #0088cc;
  color: #fff;
}

.wrapper .twitter:hover,
.wrapper .twitter:hover .tooltip,
.wrapper .twitter:hover .tooltip::before {
  background: #D14836;
  color: #fff;
}

.wrapper .instagram:hover,
.wrapper .instagram:hover .tooltip,
.wrapper .instagram:hover .tooltip::before {
  background: #25D366;
  color: #fff;
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

    </style>
<link rel="stylesheet" href="{{asset('css/aos.css')}}" />
</head>
<header class="headerasatidz">
    <div class="title">
        <h1 data-aos="fade-up" data-aos-duration="1000" class="text-center text-light fw-bold">Profil Asatidz</h1>
    </div>
    <video autoplay loop muted plays-inline style="width:100%;border:none">
        <source src="/img/Beranda/VIDIO 1.mp4">
    </video>
</header>

{{-- <div class="w-100 d-flex flex-wrap justify-content-center mb-5" style="background-image: linear-gradient(to right,#033919, #046c3c);height:auto;padding:10vw;">
    <h1 data-aos="fade-up" data-aos-duration="1000" class="fw-bolder text-light text-center" style="font-size:5vw">Profil Asatidz</h1>
</div> --}}
<h2 data-aos="flip-right" data-aos-duration="1000" data-aos-anchor-placement="top-center" style="color:#033919;" class="mx-5 mt-5 fw-bold text-center">Kepala Madrasah</h2>

<div class="d-flex justify-content-center position-relative mb-5 mt-3">
    <div data-aos="zoom-in" data-aos-duration="1000" data-aos-anchor-placement="top-center" class="photo" id="km">
        <img src="/img/asatidz/{!!$km->Profil!!}" alt="Foto 1">
        <div class="caption">
            <h4 class="fw-bold">{!!$km->NamaGuru!!}</h4>
        <h5>Mapel   : {!!$km->Bidang!!}</h5>
           <q>{!!$km->Motto!!}</q>
           {{-- <div class="d-flex justify-content-center gap-3 py-3">
          <a class="ml-auto" href="https://t.me/{!!$km->Telegram!!}"><img style="width:30px" src="/img/telegram.png" alt=""></a>
          <a class="ml-auto" href="mailto:{!!$km->Email!!}"><img style="width:30px" src="/img/Letter.png" alt=""></a>
          <a class="ml-auto" href="https://wa.me/{!!$km->noHp!!}"><img style="width:30px" src="/img/Phone.png" alt=""></a>
           </div> --}}
               <!-- From Uiverse.io by david-mohseni --> 
<ul class="wrapper" style="padding: 0px;">
    <li class="icon facebook">
      <span class="tooltip">Telegram</span>
      <a href="https://t.me/{!!$km->Telegram!!}"><img style="height:20px;width:auto" src="/img/telegram.png" alt=""></a>
        <path
          d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
        ></path>
      </svg>
    </li>
    <li class="icon twitter">
      <span class="tooltip">Email</span>
      <a href="mailto:{!!$km->Email!!}"><img style="height:20px;width:auto" src="/img/Letter.png" alt=""></a>

        <path
          d="M42,12.429c-1.323,0.586-2.746,0.977-4.247,1.162c1.526-0.906,2.7-2.351,3.251-4.058c-1.428,0.837-3.01,1.452-4.693,1.776C34.967,9.884,33.05,9,30.926,9c-4.08,0-7.387,3.278-7.387,7.32c0,0.572,0.067,1.129,0.193,1.67c-6.138-0.308-11.582-3.226-15.224-7.654c-0.64,1.082-1,2.349-1,3.686c0,2.541,1.301,4.778,3.285,6.096c-1.211-0.037-2.351-0.374-3.349-0.914c0,0.022,0,0.055,0,0.086c0,3.551,2.547,6.508,5.923,7.181c-0.617,0.169-1.269,0.263-1.941,0.263c-0.477,0-0.942-0.054-1.392-0.135c0.94,2.902,3.667,5.023,6.898,5.086c-2.528,1.96-5.712,3.134-9.174,3.134c-0.598,0-1.183-0.034-1.761-0.104C9.268,36.786,13.152,38,17.321,38c13.585,0,21.017-11.156,21.017-20.834c0-0.317-0.01-0.633-0.025-0.945C39.763,15.197,41.013,13.905,42,12.429"
        ></path>
      </svg>
    </li>
    <li class="icon instagram">
      <span class="tooltip">Whatsapp</span>
      <a href="https://wa.me/{!!$km->noHp!!}"><img style="height:20px;width:auto" src="/img/Phone.png" alt=""></a>
        <path
          d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
        ></path>
      </svg>
    </li>
  </ul>
  <form method="post" action="{{route('asatidz.destroy', $km->id)}}" id="hapusForm">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger mt-1 w-25" style="border-radius:0px">Hapus</button>
    <a class="btn btn-primary mt-1 w-50" style="border-radius:0px" href="{{route('asatidz.edit',$km->id)}}">Ubah</a>
  </form>

</div>
</div>
</div>
<div class="card-header bg-transparent my-5">
  <div class="d-flex justify-content-between">
      <div class="m-auto">
          <form method="GET" action="">
              <div class="input-group">
                  <input type="text" name="NamaGuru" class="form-control" placeholder="Search for names..." >
                  <div class="input-group-append">
                      <button type="submit" class="btn btn-success" ><img style="max-height:2vw" src="http://localhost:8000/img/search.png" alt=""></button>
                      {{-- @if (auth()->check())
                      @if(auth()->user()->status=='Admin') --}}
                      <a href="/asatidz/create" class="btn btn-success" >Add</a>
                      {{-- @endif
                      @endif --}}
                  </div>
              </div>
          </form>
      </div>
  </div>
</div>
<h2 data-aos="flip-right" data-aos-duration="1000" style="color:#033919" class="mx-5 mb-3 fw-bold text-center">Tenaga Madrasah</h2>

<div id="respon" class="d-grid position-relative my-5">
@foreach ($rows as $row)
@if($row->id>1)
<div data-aos="zoom-in" data-aos-duration="1000" class="photo">
    <img src="/img/asatidz/{!! $row->Profil!!}" alt="Foto 1">
    <div class="caption">
        <h4 class="fw-bold">{!!$row->NamaGuru!!}</h4>
    <h5>Mapel   : {!!$row->Bidang!!}</h5>
       <q>{!!$row->Motto!!}</q>
       {{-- <div class="d-flex justify-content-center gap-3 py-3">
      <a href="https://t.me/{!!$row->Telegram!!}"><img style="height:20px;width:auto" src="/img/telegram.png" alt=""></a>
      <a href="mailto:{!!$row->Email!!}"><img style="height:20px;width:auto" src="/img/Letter.png" alt=""></a>
      <a href="https://wa.me/{!!$row->noHp!!}"><img style="height:20px;width:auto" src="/img/Phone.png" alt=""></a>
       </div> --}}


    <!-- From Uiverse.io by david-mohseni --> 
<ul class="wrapper" style="padding: 0px;">
    <li class="icon facebook">
      <span class="tooltip">Telegram</span>
      <a href="https://t.me/{!!$row->Telegram!!}"><img style="height:20px;width:auto" src="/img/telegram.png" alt=""></a>
        <path
          d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"
        ></path>
      </svg>
    </li>
    <li class="icon twitter">
      <span class="tooltip">Email</span>
      <a href="mailto:{!!$row->Email!!}"><img style="height:20px;width:auto" src="/img/Letter.png" alt=""></a>

        <path
          d="M42,12.429c-1.323,0.586-2.746,0.977-4.247,1.162c1.526-0.906,2.7-2.351,3.251-4.058c-1.428,0.837-3.01,1.452-4.693,1.776C34.967,9.884,33.05,9,30.926,9c-4.08,0-7.387,3.278-7.387,7.32c0,0.572,0.067,1.129,0.193,1.67c-6.138-0.308-11.582-3.226-15.224-7.654c-0.64,1.082-1,2.349-1,3.686c0,2.541,1.301,4.778,3.285,6.096c-1.211-0.037-2.351-0.374-3.349-0.914c0,0.022,0,0.055,0,0.086c0,3.551,2.547,6.508,5.923,7.181c-0.617,0.169-1.269,0.263-1.941,0.263c-0.477,0-0.942-0.054-1.392-0.135c0.94,2.902,3.667,5.023,6.898,5.086c-2.528,1.96-5.712,3.134-9.174,3.134c-0.598,0-1.183-0.034-1.761-0.104C9.268,36.786,13.152,38,17.321,38c13.585,0,21.017-11.156,21.017-20.834c0-0.317-0.01-0.633-0.025-0.945C39.763,15.197,41.013,13.905,42,12.429"
        ></path>
      </svg>
    </li>
    <li class="icon instagram">
      <span class="tooltip">Whatsapp</span>
      <a href="https://wa.me/{!!$row->noHp!!}"><img style="height:20px;width:auto" src="/img/Phone.png" alt=""></a>
        <path
          d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
        ></path>
      </svg>
    </li>
  </ul>
  <form method="post" action="{{route('asatidz.destroy', $row->id)}}" id="hapusForm">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger mt-1 w-25" style="border-radius:0px"><span>Hapus</span></button>
    <a class="btn btn-primary mt-1 w-50" style="border-radius:0px" href="{{route('asatidz.edit',$row->id)}}"><span>Ubah</span></a>
  </form>

</div>
</div>

@endif
@endforeach
</div>
<div class="mt-5 d-flex justify-content-center">
  {{$rows->links()}}
</div>
<script src="{{asset('js/aos.js')}}"></script>
<script>
    AOS.init();
</script>
@endsection
