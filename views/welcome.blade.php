@extends('layouts.app2')
@section('content')
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        .all { font-family: Arial, sans-serif; display: flex;background: linear-gradient(to right, #ffffff 33.33%, #046C3C 33.33%);height: 100vh; }
       .slider-container { position: relative; max-width: 1270px; margin: auto; overflow: hidden; padding: 20px 0;}
        .slides { display: flex; transition: transform 0.5s ease-in-out;margin-left:30px; }
        .slide { min-width:500px; display: flex; justify-content: center; align-items: center; }
        .testimonial-card { 
            align-items: center; 
            background: white; 
            padding: 20px; 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); 
            width: 450px; 
            max-width: 600px;
            position: relative;
            z-index: 2;
            height:70vh;
        }
        .testimonial-card2 { 
            display: flex; 
            align-items: center; 
            padding: 20px; 
            border-radius: 10px; 
            width: 80%; 
            max-width: 600px;
            position: relative;
            z-index: 2;
        }
        .profile-pic { 
            width: 80px; 
            height: 80px; 
            border-radius: 50%; 
            margin-right: 15px; 
        }
        .text-content { flex: 1; }
        .dots { 
            position: relative;
            bottom: 20px;
            text-align: center; 
            margin:0 auto;
        }
        .slider-controls {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: -50px;
}

.prev, .next {
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    padding: 10px 15px;
    font-size: 18px;
    cursor: pointer;
    border-radius: 5px;
    margin: 0 10px;
}

.prev:hover, .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
}

.dots {
    display: flex;
    text-align: center;
    
}

.dot {
    top:30px;
    height: 10px;
    width: 10px;
    margin: 5px;
    background: #b8afaf;
    border-radius: 50%;
    display: inline-block;
    cursor: pointer;
}

.active {
    background: #333;
}

        @media only screen and (min-width:768px){

            .body{
                background-image: url(http://localhost:8000/img/Beranda/paralaxDekstop.jpg);
                background-attachment: fixed;
                background-repeat: no-repeat;
                /* background-size: contain;
                background-size:cover; */
            }
        }
    @media only screen and (max-width:767px){
        #title {
    font-size:6vw;
    margin-top: -30%
    }
    .body{
                background-image: url(http://localhost:8000/img/elang.jpg);
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-size:100%;
            }
        
    } 
        #title {
    position: absolute;
    top: -50%;
    left: 5%;
    transform: translate(-5%,-160%);
    text-align: center;
    }
    #basel:hover{
        background-color: #046c3c;
    }
    #basel{
        background-color: #033919;
    }
    #unggul > a >div{
        border: 1px white solid;
    }
    #unggul > a >div:hover{
        border: none;
    }
    .paralax {
        height:500px;
    }
    td{
        padding: 5%;
    }

    </style>
</head>
<div class="body">
<video autoplay loop muted plays-inline style="width:100%;margin-top:0px;padding:0px">
  <source src="/img/Beranda/VIDIO 1.mp4">
  </video>
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div id="title" class="carousel-inner">
          <h3 class="text-center text-light fw-bold">Selamat Datang di Madrasah Aliyah Zainul Hasan 1 Genggong </h3>
          <h3 class="text-center text-light fw-bold">Madrasah Berbasis Pesantren dan Teknologi</h3>
          <form action="">
          <button id="basel" class="px-5 py-2 mt-3" style="color:white;border:2px white solid;text-decoration:none">Baca Selengkapnya</button>
      </form>
          <div id="unggul" class="container mt-5 d-flex justify-content-around gap-2">
          <a style="text-decoration:none" href=""><div class="card bg-secondary bg-opacity-50"><img class="m-3 mt-3 w-50 mx-auto" src="http://localhost:8000/img/Beranda/icon_tahfiz.png" alt=""><h6 class="fw-bold w-75 text-light mx-auto text-center mt-3 mb-3">Program Unggulan Tahfizul Quran</h6></div></a>
          <a style="text-decoration:none" href=""><div class="card bg-secondary bg-opacity-50"><img class="m-3 mt-3 w-50 mx-auto" src="http://localhost:8000/img/Beranda/icon_tahqiq.png" alt=""><h6 class="fw-bold w-75 text-light mx-auto text-center mt-3 mb-3">Program Unggulan Tahqiqu Qiroatil Kutub</h6></div></a>
          <a style="text-decoration:none" href=""><div class="card bg-secondary bg-opacity-50"><img class="m-3 mt-3 w-50 mx-auto" src="http://localhost:8000/img/Beranda/icon_pro.png" alt=""><h6 class="fw-bold w-75 text-light mx-auto text-center mt-3 mb-3">Program Unggulan Program Intensifikasi TIK</h6></div></a>
          <a style="text-decoration:none" href=""><div class="card bg-secondary bg-opacity-50"><img class="m-3 mt-3 w-50 mx-auto" src="http://localhost:8000/img/Beranda/icon_olim.png" alt=""><h6 class="fw-bold w-75 text-light mx-auto text-center mt-3 mb-3">Program Unggulan Bimbingan Olimpiade</h6></div></a>
      </div>
</div>
  </div>
</header>
<div id="galery" class="bg-light mt-0 py-5">
<h3 class="text-dark fw-bold text-center">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Itaque mollitia corrupti nulla quod vero dignissimos assumenda labore cum distinctio necessitatibus.</h3>                 
<table class="m-auto">
  <tr>
      <td rowspan="2" class="w-50" style="height:200px"><img style="width:100%;" src="/img/profil-20241226 024602.jpg" alt="">
          <form action="">
              <button id="basel" class="px-5 py-3 w-100" style="color:white;border:2px white solid;text-decoration:none">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, dolorem.
              </button>
          </form>
      </td>
      <td><img class="w-100" src="/img/itb.jpg" alt="">
          <form action="">
              <button id="basel" class="px-5 py-1 w-100" style="color:white;border:2px white solid;text-decoration:none">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, dolorem.
              </button>
          </form>
      </td>
  </tr>
  <tr>
      <td><img class="w-100" src="/img/itb.jpg" alt="">
          <form action="">
              <button id="basel" class="px-5 py-1 w-100" style="color:white;border:2px white solid;text-decoration:none">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ducimus, dolorem.
              </button>
          </form>
      </td>
  </tr>
</table>                                                     
</div>
<div class="paralax" id="paralax">  
</div>
<div class="all">
    <h3 style="color:#333;font-weight:400;margin-top:30px;margin-left:10px">Testimoni Alumni</h3>
        <div class="slider-container">
            <div class="slides">
                <div class="slide">
                    <div class="testimonial-card">
                        <div class="testimonial-card2">
                        <img src="{{ asset('anggur.jpg') }} " alt="Foto Alumni" class="profile-pic">
                        <div class="text-content">
                            <h5 style="font-weight: 700">Tiara Andini</h5>
                            <p>Presiden Mahasiswa Umum</p>
                            </div>
                        </div><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum blanditiis illo hic dicta id quisquam consequuntur reiciendis magni itaque labore officiis aspernatur facilis optio dolorum ipsa earum nulla, eaque tempora incidunt, quo veritatis. Repellendus incidunt exercitationem quo inventore corrupti provident pariatur libero cumque, ratione dolor vitae debitis autem eaque at.</p>
                    </div>
                </div>
                <div class="slide">

                        <div class="testimonial-card">
                            <div class="testimonial-card2">
                            <img src="profile1.jpg" alt="Foto Alumni" class="profile-pic">
                            <div class="text-content">
                                <h5  style="font-weight: 700">Tiara Andini</h5>
                                <p>Presiden Mahasiswa Umum</p>
                                </div>
                            </div><p>"Luar biasa! Saya sangat menikmati pengalaman belajar di sini."</p>
                        </div>
                </div>
                <div class="slide">
                    <div class="testimonial-card">
                        <div class="testimonial-card2">
                        <img src="profile1.jpg" alt="Foto Alumni" class="profile-pic">
                        <div class="text-content">
                            <h5  style="font-weight: 700">Tiara Andini</h5>
                            <p>Presiden Mahasiswa Umum</p>
                            </div>
                        </div><p>"Luar biasa! Saya sangat menikmati pengalaman belajar di sini."</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="testimonial-card">
                        <div class="testimonial-card2">
                        <img src="profile1.jpg" alt="Foto Alumni" class="profile-pic">
                        <div class="text-content">
                            <h5  style="font-weight: 700">Tiara Andini</h5>
                            <p>Presiden Mahasiswa Umum</p>
                            </div>
                        </div><p>"Luar biasa! Saya sangat menikmati pengalaman belajar di sini."</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="slider-controls">
            
            <div class="dots">
                <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
                <span class="dot" onclick="moveSlideTo(0)"></span>
                <span class="dot" onclick="moveSlideTo(1)"></span>
                <span class="dot" onclick="moveSlideTo(2)"></span>
                <button class="next" onclick="moveSlide(1)">&#10095;</button>

            </div>
        </div>
    </div>
</div>

<script>
let currentIndex = 0;
const slides = document.querySelector('.slides');
const dots = document.querySelectorAll('.dot');
const totalCards = document.querySelectorAll('.slide').length;
const slideWidth = document.querySelector('.testimonial-card').offsetWidth;

// Clone slide pertama dan terakhir untuk looping infinite
const firstClone = document.querySelector('.slide').cloneNode(true);
const lastClone = document.querySelector('.slide:last-child').cloneNode(true);

// Tambahkan clone di awal & akhir
slides.appendChild(firstClone);
slides.insertBefore(lastClone, slides.firstChild);

// Update jumlah slides setelah cloning
const updatedSlides = document.querySelectorAll('.slide');
slides.style.transform = `translateX(-${currentIndex * slideWidth}px)`;

// Fungsi untuk berpindah slide
function moveSlide(direction) {
  currentIndex += direction;
    
    // Pastikan indeks tetap dalam batas
    if (currentIndex >= totalCards) {
        currentIndex = 0;
    } else if (currentIndex < 0) {
        currentIndex = totalCards - 1;
    }
    
    slides.style.transition = "transform 0.5s ease-in-out";
    slides.style.transform = `translateX(-${currentIndex * slideWidth}px)`;

    setTimeout(() => {
        if (currentIndex === totalCards) { // Jika di akhir, kembali ke awal tanpa animasi
            slides.style.transition = "none";
            currentIndex = 0;
            slides.style.transform = `translateX(-${slideWidth}px)`;
        } else if (currentIndex === -1) { // Jika di awal, kembali ke akhir tanpa animasi
            slides.style.transition = "none";
            currentIndex = totalCards - 1;
            slides.style.transform = `translateX(-${totalCards * slideWidth}px)`;
        }
    }, 500);

    updateDots();
}

// Fungsi untuk pindah ke slide tertentu (dengan dot)
function moveSlideTo(index) {
    currentIndex = index;
    slides.style.transition = "transform 0.5s ease-in-out";
    slides.style.transform = `translateX(-${(currentIndex + 1) * slideWidth}px)`;
    updateDots();
}

// Fungsi update dot aktif
function updateDots() {
    dots.forEach(dot => dot.classList.remove('active'));
    dots[currentIndex % totalCards].classList.add('active');
}

// Fungsi auto-slide
function autoSlide() {
    moveSlide(1);
}

// Jalankan auto-slide setiap 3 detik
let slideInterval = setInterval(autoSlide, 3000);

// Reset interval jika user mengklik tombol prev, next, atau dot
function resetAutoSlide() {
    clearInterval(slideInterval);
    slideInterval = setInterval(autoSlide, 3000);
}

// Event listener tombol prev & next
document.querySelector('.prev').addEventListener('click', () => {
    moveSlide(-1);
    resetAutoSlide();
});

document.querySelector('.next').addEventListener('click', () => {
    moveSlide(1);
    resetAutoSlide();
});

// Event listener dots
dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
        moveSlideTo(index);
        resetAutoSlide();
    });
});

</script>
@endsection
