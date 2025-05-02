@extends('layouts.app')
@section('content')
<style>
        .news-ticker {
        width: 100%;
        height: 50px;
        overflow: hidden;
        position: relative;
        background-color:#046c3c;
        border-top: 1px solid #ddd;
        border-bottom: 1px solid #ddd;

    }
    
    .news-content {
        position: absolute;
        white-space: nowrap;
        font-size: 18px;
        font-weight: 500;
        color: #fff;
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
    @media only screen and (max-width:767px){
        #leftGanjil,#leftGenap,#rightGenap, #rightGanjil, #semua{
            width:100%;
        }
    }
    @media only screen and (min-width:768px){
        #leftGanjil,#leftGenap,#rightGenap, #rightGanjil, #semua{
            width:50%;
        }
        #rightGenap{
            order:1;
        }
        #leftGenap{
            order:2;
        }
    }
    p{
        text-align: justify;
    }
    .slide {
    display: none;
}
.slide.active {
    display: block;
}
</style>
<link rel="stylesheet" href="{{asset('css/aos.css')}}">
<script src="{{asset('js/sweetalert.min.js')}}"></script> 
<header>
    <video class="w-100 h-auto" loop controls autoplay plays-inline style="height:auto;margin-top:0px;padding:0px">
        <source class="m-0 p-0" src="/img/sambutan.mp4">
    </video>
    <div class="news-ticker" id="newsTickerContainer">
        <div class="news-content" id="newsTicker">
            Sambutan Kepala Madrasah Aliyah Zainul Hasan 1 Genggong : Nun Ahsan Maliki, S.Sy, M.Pd
        </div>
    </div>
</header>
<div>

    <h1 data-aos="flip-left" data-aos-duration="1000" class="mt-5 text-center fw-bold text-success-emphasis">Sambutan Kepala Madrasah</h1>
    <img data-aos="flip-left" data-aos-duration="1000" style="max-width: 75%" class="mx-auto d-block mb-4"  src="/img/hr.png" alt="">
    <h3 class="text-center">Assalamualaikum Warahmatullahi Wabarokatuh</h3>
    <p style="text-align:justify;" class="px-5">
        Hamdan lillah, tabaaroka wata’ala Wa Musholliyan ala Rosulillah.
        Atas nama pribadi mewakili segenap Pimpinan Madrasah Aliyah serta Dewan Asatid mengucapkan selamat atas hadirnya Website Madrasah Aliyah Zainul Hasan 1 Genggong yang launchingnya pada hari kamis tanggal 22 Mei 2014, bertepatan dengan acara Pisah kenang untuk kelas XII Putri.
        Semoga, dengan hadirnya Website MA. ZAHA 1 Genggong, kita bisa ikut berpartisipasi dalam pengembangan informasi melalui media IT yang sudah berkembang pesat di era ini. Harapan kami, tim website yang sudah terbentuk dapat memberikan warna baru bagi kemaslahatan Madrasah serta mengupdate informasi terbaru bagi pembaca terutama dalam cakupan dunia maya. Website MA. Zainul Hasan 1 Genggong hadir untuk menunjukkan existensi kreatifitas lembaga dalam menunjang kemampuan ber-IT untuk menampilkan berbagai kegiatan yang ada di Madrasah, intra maupun extra, terutama kegiatan-kegiatan unggulan kami agar bisa diterima dengan cepat di masyarakat. Website ini pula, kami niatkan sebagai media dakwah bil qolam yang contentnya akan kami muat dari hasil pemikiran dan ide para santri-santri yang berada di bawah naungan lembaga aliyah. Sekali lagi, kami mengucapkan selamat atas hadirnya Website MA. Zainul Hasan 1 Genggong. Semoga bermanfaat.
    </p>
    <h3 class="text-center">Wassalamualaikum Warahmatullahi Wabarokatuh</h3>
</div>
<h1 data-aos="flip-left" data-aos-duration="1000" class="mt-5 text-center fw-bold text-success-emphasis">Kepala Madrasah dari Masa ke Masa</h1>
<img data-aos="flip-left" data-aos-duration="1000" style="max-width: 75%" class="mx-auto d-block mb-4"  src="/img/hr.png" alt="">
<p class="mx-5" style="text-align: justify">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint cumque atque minima nisi odio voluptas totam, velit quis, alias autem consequatur assumenda eos, esse itaque labore vero laborum? Repellat sit aperiam delectus, dolores magni voluptas dolor nesciunt alias dolore. Minus placeat, eos, sequi vero aliquid explicabo et vel amet adipisci eligendi exercitationem beatae quo accusamus magnam repellat voluptates error facere quia velit in reprehenderit porro nulla? Maxime quos nulla deleniti beatae mollitia aperiam laborum, debitis possimus necessitatibus, magnam nesciunt impedit repellat temporibus doloremque rem iure omnis qui voluptas ipsa! Atque iste, animi provident similique voluptatibus illum tempora cum architecto quaerat.
</p>
<div id="featur" class="d-flex flex-wrap justify-content-center px-5 mx-auto mb-5">
    <div id="semua" class="card p-3 justify-content-center">
        @if($featured)
        <img class="rounded-circle shadow-lg w-50 d-block mx-auto" src="/img/kepala madrasah/{{$featured->foto}}" alt="">
        <h3 class="text-center fw-bold">{{$featured->nama}}</h3>
        <button onclick="alert()" class="btn btn-success w-75 mx-auto">Selengkapnya</button>
        @endif
    </div>
    <div id="semua" class="overflow-y-auto"  style="height: 35vw">
        @foreach ($all as $one)
        <div id="struktur" class="card w-100 p-3">
            <div class="d-flex">
                <div style="width:10%;">
                    <img src="/img/kepala madrasah/{{$one->foto}}" style="object-fit:cover;width:50px;height:50px;object-position:top" class="rounded-circle d-block" alt="">
                </div>
                <div class="w-75 px-3">
                    <h5>{{$one->nama}}</h5>
                    <p>{{$one->tahun_mulai}} - {{$one->tahun_selesai}}</p>
                    <a href="{{ route('sambutan.index', ['id' => $one->id]) }}" class="view-details text-decoration-none text-success">
                        Lihat Detail
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div>

</div>
<script src="{{asset('js/aos.js')}}"></script>
<script>
    AOS.init();
     document.addEventListener('DOMContentLoaded', function() {
        const container = document.getElementById('newsTickerContainer');
        const ticker = document.getElementById('newsTicker');
        
        // Tampilkan teks secara paksa untuk menghitung width
        ticker.style.visibility = 'visible';
        ticker.style.left = '100%';
        
        const textWidth = ticker.scrollWidth;
        const viewportWidth = window.innerWidth;
        const scrollSpeed = 150; // px per detik
        
        // Hitung durasi
        const duration = (textWidth + viewportWidth) / scrollSpeed;
        // Buat keyframes dinamis
        const style = document.createElement('style');
        style.innerHTML = `
            @keyframes scroll-news {
                0% { transform: translateX(0); }
                100% { transform: translateX(-${textWidth + viewportWidth}px); }
            }
        `;
        document.head.appendChild(style);
        
        // Terapkan animasi
        ticker.style.animationDuration = `${duration}s`;
        
        // Tandai container sudah ready
        container.classList.add('ready');
    });
    function alert() {
        swal({
        content: {
            element: "div",
            attributes: {
                innerHTML: `
                <img class="w-100" src="/img/kepala madrasah/{{$featured->profil}}">
                @if($featured->profil2)
                <img class="w-100" src="/img/kepala madrasah/{{$featured->profil2}}">
                @endif
                     `,
            }
        },
        width: "900px", 
        button: "Tutup"
    });

}
</script>
@endsection
