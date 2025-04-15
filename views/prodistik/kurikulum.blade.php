@extends('layouts.app')
@section('content')
<style>
    video{
        width:100%;
    }
    @media only screen and (min-width:768px){
        .icon{
        width:30%;
    }
    }
    @media only screen and (max-width:767px){
        .icon {
            width:100%;
        }
    }
    a{
        text-decoration: none;
    }
    #description-container{
        padding: 20px;
        text-align: justify;
    }
</style>
<div style="background-image: url('/img/prodistik/Mask group.png');height:273px;">
    <div class="w-100 h-100 bg-success" style="--bs-bg-opacity: .6;">
        <h1 style="padding-top:180px;padding-left:15px;color:#fff">Kurikulum Prodistik</h1>
        <a href="{{route('prodistik.index')}}"><h2 class="text-light"><--</h2></a>
    </div>
</div>
<main class="p-3">
<div class="d-flex justify-content-around flex-wrap w-50 mx-auto">
    <div class="icon" data-type="prog">
        <video autoplay muted loop>
            <source src="/img/prodistik/Coding.mp4" type="video/mp4">
          </video>
          <h3 class="text-success-emphasis text-center fw-bold">Programming</h3>
        </div>
        <div class="icon" data-type="design">
            <video autoplay muted loop>
                <source src="/img/prodistik/design.mp4" type="video/mp4">
            </video>
            <h3 class="text-success-emphasis text-center fw-bold">Desain Grafis</h3>
    </div>
    <div class="icon" data-type="mm">
        <video style="height:80%"autoplay muted loop>
            <source src="/img/prodistik/mm.mp4" type="video/mp4">
          </video>
          <h3 class="text-success-emphasis text-center fw-bold">Multimedia</h3>
    </div>
</div>
<hr>
<div id="description-container">
    <h5 class="text-center text-secondary">Klik icon untuk melihat rincian kurikulum.</h5>
    
</div>
<div class="description" data-type="prog" style="display: none;">
    <h3 class="text-success-emphasis fw-bold">Programming</h3>
    <p>
        Jurusan Programming menawarkan pembelajaran mendasar dan mendalam tentang Javascript dan PHP. Anda akan mempelajari dasar-dasar logika, algoritma pemrograman, Figma, HTML, CSS, Javascript, dan PHP yang ditempuh selama dua tahun setengah. Dengan bimbingan dari para instruktur, siswa akan menguasai keterampilan pemrograman dan pemecahan masalah yang kreatif untuk menjadi seorang fullstack developer,  keterampilan ini akan memberikan kemampuan terhadap siswa dalam merancang sebuah aplikasi website, seperti website sekolah, website ecommerce, website portfolio, dan aplikasi website lain. 
Bergabunglah dengan kami dan jadilah bagian dari masa depan teknologi! 
    </p>
    <table class="m-5 w-75 table table-sm table-hover table-bordered table-caption-top table-responsive">
        <thead class="table table-success">
            <tr>
                <td class="fw-bold">No</td>
                <td class="fw-bold text-center">Mata Kuliah</td>
                <td class="fw-bold text-center">SKS</td>
                <td class="fw-bold text-center">Semester</td>
            </tr>
        </thead>
        <tbody class="table table-group-divier table-striped">
            <tr>
                <td>1</td>
                <td>Sistem Operasi</td>
                <td class="text-center">1</td>
                <td class="text-center align-items-center align-middle" rowspan="3">I</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Microsoft Word</td>
                <td class="text-center">2</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Microsoft Excel</td>
                <td class="text-center">3</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Microsoft Power Point</td>
                <td class="text-center">2</td>
                <td class="text-center align-middle" rowspan="2">II</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Basic Desain Grafis</td>
                <td class="text-center">2</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Java Script</td>
                <td class="text-center">2</td>
                <td class="text-center align-middle" rowspan="2">III</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Basis Data</td>
                <td class="text-center">3</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Pemrograman Front End</td>
                <td class="text-center">2</td>
                <td class="text-center align-middle" rowspan="2">IV</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Pemrograman Back End</td>
                <td class="text-center">3</td>
            </tr>
            <tr>
                <td>10</td>
                <td>Dunia Kerja & Personality</td>
                <td class="text-center">1</td>
                <td class="text-center align-middle" rowspan="2">V</td>
            </tr>
            <tr>
                <td>11</td>
                <td>Tugas Akhir</td>
                <td class="text-center">4</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="description" data-type="design" style="display: none;">
    <h3 class="text-success-emphasis fw-bold">Desain Grafis</h3>
    <p>
        Jurusan Desain Grafis menawarkan pembelajaran mendalam tentang prinsip-prinsip desain, tipografi, ilustrasi digital, dan branding. Anda akan mempelajari penggunaan perangkat lunak profesional seperti Adobe Photoshop, Illustrator, dan InDesign. Siswa akan menguasai teknik dasar fotografi, desain logo, poster, dan materi promosi lainnya. Lulusan siap untuk berkarir sebagai desainer grafis, ilustrator, atau art director yang kreatif dan inovatif.
        Bergabunglah dengan kami dan kembangkan kreativitas Anda di dunia desain visual!
            </p>
    <table class="m-5 w-75 table table-sm table-hover table-bordered table-caption-top table-responsive">
        <thead class="table table-success">
            <tr>
                <td class="fw-bold">No</td>
                <td class="fw-bold text-center">Mata Kuliah</td>
                <td class="fw-bold text-center">SKS</td>
                <td class="fw-bold text-center">Semester</td>
            </tr>
        </thead>
        <tbody class="table table-group-divier table-striped">
            <tr>
                <td>1</td>
                <td>Sistem Operasi</td>
                <td class="text-center">1</td>
                <td class="text-center align-middle" rowspan="3">I</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Microsoft Word</td>
                <td class="text-center">2</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Microsoft Excel</td>
                <td class="text-center">3</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Microsoft Power Point</td>
                <td class="text-center">2</td>
                <td class="text-center align-middle" rowspan="2">II</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Basic Desain Grafis</td>
                <td class="text-center">2</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Adobe Photoshop</td>
                <td class="text-center">2</td>
                <td class="text-center align-middle" rowspan="2">III</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Coreldraw</td>
                <td class="text-center">3</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Coreldraw Advance</td>
                <td class="text-center">2</td>
                <td class="text-center align-middle" rowspan="2">IV</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Adobe Illustration</td>
                <td class="text-center">3</td>
            </tr>
            <tr>
                <td>10</td>
                <td>Dunia Kerja & Personality</td>
                <td class="text-center">1</td>
                <td class="text-center align-middle" rowspan="2">V</td>
            </tr>
            <tr>
                <td>11</td>
                <td>Tugas Akhir</td>
                <td class="text-center">4</td>
            </tr>
        </tbody>
    </table>
</div>
<div class="description" data-type="mm" style="display: none;">
    <h3 class="text-success-emphasis fw-bold">Multimedia</h3>
    <p>
        Jurusan Multimedia menawarkan pembelajaran komprehensif tentang produksi multimedia, termasuk animasi dan video editing. Anda akan mempelajari penggunaan perangkat lunak profesional seperti Teknik dasar fotografi, video grafi dengan aplikasi Adobe After Effects, Premiere Pro, dan Blender. Siswa akan menguasai teknik produksi video, animasi 2D dan 3D. Lulusan siap untuk berkarir sebagai animator, video editor, atau multimedia specialist yang handal.
        Bergabunglah dengan kami dan jadilah ahli dalam dunia multimedia yang dinamis!    </p>
    <table class="m-5 w-75 table table-sm table-hover table-bordered table-caption-top table-responsive">
        <thead class="table table-success">
            <tr>
                <td class="fw-bold">No</td>
                <td class="fw-bold text-center">Mata Kuliah</td>
                <td class="fw-bold text-center">SKS</td>
                <td class="fw-bold text-center">Semester</td>
            </tr>
        </thead>
        <tbody class="table table-group-divier table-striped">
            <tr>
                <td>1</td>
                <td>Sistem Operasi</td>
                <td class="text-center">1</td>
                <td class="text-center align-middle" rowspan="3">I</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Microsoft Word</td>
                <td class="text-center">2</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Microsoft Excel</td>
                <td class="text-center">3</td>
            </tr>
            <tr>
                <td>4</td>
                <td>Microsoft Power Point</td>
                <td class="text-center">2</td>
                <td class="text-center align-middle" rowspan="2">II</td>
            </tr>
            <tr>
                <td>5</td>
                <td>Basic Desain Grafis</td>
                <td class="text-center">2</td>
            </tr>
            <tr>
                <td>6</td>
                <td>Adobe Photoshop</td>
                <td class="text-center">2</td>
                <td class="text-center align-middle" rowspan="2">III</td>
            </tr>
            <tr>
                <td>7</td>
                <td>Adobe Premiere</td>
                <td class="text-center">3</td>
            </tr>
            <tr>
                <td>8</td>
                <td>Adobe Premiere Advance</td>
                <td class="text-center">2</td>
                <td class="text-center align-middle" rowspan="2">IV</td>
            </tr>
            <tr>
                <td>9</td>
                <td>Adobe After Effect</td>
                <td class="text-center">3</td>
            </tr>
            <tr>
                <td>10</td>
                <td>Dunia Kerja & Personality</td>
                <td class="text-center">1</td>
                <td class="text-center align-middle" rowspan="2">V</td>
            </tr>
            <tr>
                <td>11</td>
                <td>Tugas Akhir</td>
                <td class="text-center">4</td>
            </tr>
        </tbody>
    </table>
</div>
</main>
<script>
     document.addEventListener("DOMContentLoaded", function() {
    const cards = document.querySelectorAll(".icon");
    const descriptionContainer = document.getElementById("description-container");

    cards.forEach(card => {
        card.addEventListener("click", function() {
            const type = this.getAttribute("data-type");
            const content = document.querySelector(`.description[data-type='${type}']`);
            
            if (content) {
                descriptionContainer.innerHTML = content.innerHTML;
            }
        });
    });
});
</script>
@endsection