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
    background-color: #046c3c; /* Warna latar belakang */
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
</style>
<link rel="stylesheet" href="{{asset('css/aos.css')}}">
<script src="{{asset('js/typed.umd.js')}}"></script>
<body>

    <div class="background">
        <div class="teks fw-bold">KURIKULUM</br><span id="auto-type" style="font-weight:bold;color:goldenrod"></span>
        </div>
        <div class="circle"></div>
        <div class="circle small"></div>
        <div class="circle smally"></div>
        <div class="circle big"></div>
        <div class="circle med"></div>
    </div>
    <h2 class="fw-bold mb-3 mt-5 m-5" style="color:#033919">Muatan Kurikulum</h2>
    <div id="container" class="d-flex mx-3">
        <div id="left" class="mx-3 clearfix" style="text-align:justify">
            <article>
                <img class="w-25" src="/img/gp.jpg" alt="">
                <div class="description">
                    <p>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim maiores veritatis blanditiis libero eum non ea ipsam sunt praesentium asperiores!
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim maiores veritatis blanditiis libero eum non ea ipsam sunt praesentium asperiores!
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim maiores veritatis blanditiis libero eum non ea ipsam sunt praesentium asperiores!
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim maiores veritatis blanditiis libero eum non ea ipsam sunt praesentium asperiores!
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim maiores veritatis blanditiis libero eum non ea ipsam sunt praesentium asperiores!
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim maiores veritatis blanditiis libero eum non ea ipsam sunt praesentium asperiores!
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim maiores veritatis blanditiis libero eum non ea ipsam sunt praesentium asperiores!
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim maiores veritatis blanditiis libero eum non ea ipsam sunt praesentium asperiores!
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim maiores veritatis blanditiis libero eum non ea ipsam sunt praesentium asperiores!
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim maiores veritatis blanditiis libero eum non ea ipsam sunt praesentium asperiores!
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim maiores veritatis blanditiis libero eum non ea ipsam sunt praesentium asperiores!
                    </p>
                </div>
            </article>
        </div>
        <div id="right" class="clearfix" style="text-align:justify">
            <form method="GET" action="" class="mb-3">
                <div class="input-group">
                    <input type="text" name="ekstra" class="form-control" placeholder="Cari Jenis Ekstrakulikuler..." >
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-success" ><img style="max-height:2vw" src="http://localhost:8000/img/search.png" alt=""></button>
                        {{-- @if (auth()->check())
                        @if(auth()->user()->status=='Admin') --}}
                        <a href="/ekstra/create" class="btn btn-success" >Add</a>
                        {{-- @endif
                        @endif --}}
                    </div>
                </div>
            </form>
           <h4 class="fw-bold">Jenis Ekstrakulikuler</h4>
           @foreach($rows as $row)
           <div class="bg-secondary-subtle p-2">
            <details class="px-3">
                <summary>
                    <span class="icon">+</span>{{$row->title}}</summary>
                <img class="my-3" style="display:block;margin:auto;width:80%;height:auto" src="/img/ekstra/{{$row->foto}}" alt="">
                <p>Guru : {{$row->guru}}</p>
                <p>{{$row->deskripsi}}</p>
                <form method="post" action="{{route('ekstra.destroy', $row->id)}}" id="hapusForm">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger mt-1 w-25" style="border-radius:0px"><span>Hapus</span></button>
                    <a class="btn btn-primary mt-1 w-50" style="border-radius:0px" href="{{route('ekstra.edit',$row->id)}}"><span>Ubah</span></a>
                </form>
            </details>
        </div>
           
           @endforeach
        </div>
    </div>
    <a class="mt-5" style="text-decoration:none;color:white" href="{{route('prestasi.create')}}">
        <div class="text-center w-25 mx-auto p-auto mb-3 text-center fw-bold" id="tambah" style="background-color:rgba(0,0,0,0.4)">Tambah Prestasi</div>
    </a>
    <div class="d-flex flex-wrap">
   
<div id="div" class="w-75 gap-3 py-5 overflow-x-auto d-flex p-3" style="background-color: #046c3c;" >
        @foreach ($models as $model)
        <div class="rounded mt-5" id="feed" style="background-color:#fff">
            {{-- <img style="position:relative;margin-top:-15%;object-fit:cover;object-position:center" src="http://localhost:8000/img/quotes.png" alt="Gambar"> --}}
            <img class="w-100 rounded-3" src="/img/prestasi/{{$model->file}}" alt="">
            <canvas id="canvas" style="display:none;"></canvas>
            <div class="person">
            <h6 class="fw-bold text-center mt-3 px-3">{{$model->title}}</h6>
            <a class="btn btn-primary mt-1 w-100" style="border-radius:0px" href="{{route('prestasi.edit',$model->id)}}"><span>Ubah</span></a>
        </div>
        </div>
    @endforeach
</div>
<div class="w-25 d-flex align-items-center">                                                                                                                                                                            ">
    <div class="position-absolute w-75 p-3 my-auto text-center rounded-3 text-light" style="font-size:1em;background-color: #033919;margin-left:-12%;">MA ZAHA menjadi pilihan tepat untuk menjadi pribadi yang hebat...!</div>
</div>
</div>
</body>
<script src="{{asset('js/aos.js')}}"></script>
<script>
    var typed = new Typed("#auto-type", {
            strings: ["MA ZAHA 1","MA MUMTAZ","MA BERKUALITAS"],
            typeSpeed: 100,
            backSpeed: 100,
            loop: true,
        });
    document.querySelectorAll("details").forEach((detail) => {
        let icon = detail.querySelector(".icon");

        detail.addEventListener("toggle", function () {
            icon.textContent = this.open ? "−" : "+";
        });
    });

     // Menghilangkan notifikasi setelah beberapa detik (misalnya 3 detik)
     setTimeout(function() {
        var alertElement = document.getElementById('alert');
        if (alertElement) {
            alertElement.style.transition = "opacity 0.5s ease";
            alertElement.style.opacity = '0';
            setTimeout(function() {
                alertElement.remove();
            }, 500); // Menghapus elemen setelah efek transition selesai
        }
    }, 3000);
</script>
@endsection
