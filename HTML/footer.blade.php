<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        footer{
    background-image: url(http://localhost:8000/img/footer.jpg);
    background-size:cover;
    background-attachment: fixed;
}
#foot {
    color:white;
}
#line{
    width:5px;
    height:380px;
    background-color: white;
}
@media only screen and (max-width: 767px){
    #foot {
        width:100%; 
        margin-top:30px;
        margin-left:50px;
    }
    img{
        height:auto;
    }
    iframe{
        width:100%;
    }
    #line{
        display: none;
    }
}
@media only screen and (min-width:768px){
    #foot {
        width:25%;
    }
    iframe{
        width:350px;
    }
}
    </style>
</head>
<body>
    <footer class="mt-5">
        <div class="pt-5" style="height:auto;background-color:#033919">
        <div  class="d-flex justify-content-around flex-wrap">
            <div class="py-1">
                <h3 class="fw-bolder text-center mb-3 text-light">Google Map</h3>
                <iframe style="display:block;margin:auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3258.144925048347!2d113.37290047404966!3d-7.788768177291967!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7aaaf24fac047%3A0x55656b10eb95ef72!2sMA%20Zainul%20Hasan%201%20Genggong!5e1!3m2!1sid!2sid!4v1739949556465!5m2!1sid!2sid" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>          </div>
               <div class="ml-auto" id="line">
            </div>
            <div class="ml-auto" id="foot">
                <h3 class="fw-bold"><a class="text-decoration-none fw-bold text-light" href="#myCarousel">Program Unggulan</a></h3>
                <ol>
                    <li>Tahfidzul Quran</li>
                    <li>Tahqiqu Qiro'atil Kutub</li>
                    <li>Program Intensifikasi TIK</li>
                    <li>Bimbingan Olimpiade</li>
                </ol>
                <br>
                <h3 class="fw-bold"><a class="text-decoration-none fw-bold text-light" href="#myCarousel">Mitra Kerjasama</a></h3>
                <ol>
                    <li>Universitas Maulana Malik Ibrahim Malang</li>
                    <li>Universitas Negeri Malang</li>
                    <li>LPTQ Kraksaan</li>
                    <li>PPLH Mojokerto</li>
                    <li>Bank Syariah Indonesia</li>
                </ol>
            </div>
            <div class="ml-auto" id="line">
            </div>
            <div class="ml-auto p-1" id="foot">
                <h3 class="fw-bold"><a class="text-decoration-none fw-bold text-light" href="{{route('courses.index')}}">Kritik dan Saran</a></h3>
                <form action="">
                    <label class="my-2" for="">Nama Lengkap</label>
                    <br>
                    <input style="border: 1px white solid;background-color:#033919;color:white;width:18.5rem" class="mb-3" type="text">
                    <br>
                    <label class="mb-2" for="">Email</label>
                    <br>
                    <input class="mb-3" style="border: 1px white solid;background-color:#033919;color:white;width:18.5rem" type="email">
                    <br>
                    <label class="mb-2" for="">Kritik dan Saran</label>
                    <br>
                    <textarea name="" id="" cols="30" rows="5" style="border: 1px white solid;background-color:#033919;color:white;"></textarea>
                </form>
            </div>
        </div>
            <div style="background-color:#046C3C" class="d-flex mt-5 p-3 justify-content-between">
                <span class="text-light">2025 &copy;Created By: Team Prodistik </span>
                <span class="text-light">Supported By : MA Zainul Hasan 1 Genggong</span>
                <form action="">
                    <input type="email" class="p-1 text-center" style="box-sizing:border-box;color:white;background-color:#046c3c;border:1px white solid;" placeholder="yourname@gmailcom">
                    <button style="background-color: white;color:#033919;border:none" class="px-5 py-1" type="submit">Subscribe</button>
                </form>
                </div>
        </div>
    </footer> 

</body>
</html>