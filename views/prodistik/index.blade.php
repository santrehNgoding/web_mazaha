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
</style>
<header class="mb-5">
    <img class="w-100" src="/img/prodistik/header.png" alt="">
    <div id="container" class="container rounded-3 p-3 position-absolute d-flex justify-content-around w-75 flew-wrap">
        <a href="#sejarah">Sejarah Prodistik</a>
        <a href="{{route('strukturProdistik')}}">Struktur Pengelola</a>
        <a href="#kurikulum">Kurikulum</a>
        <a href="#karya">Karya Santri</a>
    </div>
</header>
<h2 id="sejarah" class="fw-bold mx-5">Sejarah PRODISTIK</h2>
<div class="d-flex mx-3 mb-5">
    <div id="left" class="mx-3 clearfix" style="text-align:justify">
        <article>
            <img class="w-25" src="/img/prodistik/its.png" alt="">
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
    </div>
    <div class="my-5">
        <h2 class="text-center fw-bold">Komentar Mereka tentang Prodistik</h2>
        <div class="d-flex overflow-x-auto gap-3 mt-5 mx-3">
           
            <div class="testimonial-card">
                <img src="/img/prodistik/person.png" alt="Foto Alumni" class="testimonial-img">
                <div class="testimonial-text">
                    <p class="quote overflow-y-auto">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas porttitor congue massa. 
                        Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, 
                        sit amet commodo magna eros quis urna."
                    </p>
                    <p class="name"><strong>Yuliatin Ningsih</strong></p>
                    <p class="info">Alumni Prodistik Angkatan 2022 Jurusan Administrasi Perkantoran</p>
                </div>
            </div>
            <div class="testimonial-card">
                <img src="/img/prodistik/person.png" alt="Foto Alumni" class="testimonial-img">
                <div class="testimonial-text">
                    <p class="quote">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas porttitor congue massa. 
                        Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, 
                        sit amet commodo magna eros quis urna."
                    </p>
                    <p class="name"><strong>Yuliatin Ningsih</strong></p>
                    <p class="info">Alumni Prodistik Angkatan 2022 Jurusan Administrasi Perkantoran</p>
                </div>
            </div>
            <div class="testimonial-card">
                <img src="/img/prodistik/person.png" alt="Foto Alumni" class="testimonial-img">
                <div class="testimonial-text">
                    <p class="quote">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas porttitor congue massa. 
                        Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, 
                        sit amet commodo magna eros quis urna."
                    </p>
                    <p class="name"><strong>Yuliatin Ningsih</strong></p>
                    <p class="info">Alumni Prodistik Angkatan 2022 Jurusan Administrasi Perkantoran</p>
                </div>
            </div>
            <div class="testimonial-card">
                <img src="/img/prodistik/person.png" alt="Foto Alumni" class="testimonial-img">
                <div class="testimonial-text">
                    <p class="quote">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas porttitor congue massa. 
                        Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, 
                        sit amet commodo magna eros quis urna."
                    </p>
                    <p class="name"><strong>Yuliatin Ningsih</strong></p>
                    <p class="info">Alumni Prodistik Angkatan 2022 Jurusan Administrasi Perkantoran</p>
                </div>
            </div>
            <div class="testimonial-card">
                <img src="/img/prodistik/person.png" alt="Foto Alumni" class="testimonial-img">
                <div class="testimonial-text">
                    <p class="quote">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas porttitor congue massa. 
                        Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, 
                        sit amet commodo magna eros quis urna."
                    </p>
                    <p class="name"><strong>Yuliatin Ningsih</strong></p>
                    <p class="info">Alumni Prodistik Angkatan 2022 Jurusan Administrasi Perkantoran</p>
                </div>
            </div>
            <div class="testimonial-card">
                <img src="/img/prodistik/person.png" alt="Foto Alumni" class="testimonial-img">
                <div class="testimonial-text">
                    <p class="quote">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas porttitor congue massa. 
                        Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, 
                        sit amet commodo magna eros quis urna."
                    </p>
                    <p class="name"><strong>Yuliatin Ningsih</strong></p>
                    <p class="info">Alumni Prodistik Angkatan 2022 Jurusan Administrasi Perkantoran</p>
                </div>
            </div>
            
        </div>
    </div>
@endsection
