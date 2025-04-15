@extends('layouts.app')
@section('content')
<style>
.header{
    background-color: #046c3c;
}
.right img{
    width:25vw;
    height: 25vw;
    object-fit: cover;
    object-position:top;
}
@media only screen and (max-width:767px){
    .right img{
        width:80vw;
        height:80vw;
    }
    .left {
        order:2;
    }
    .right{
        order:1;
    }
    #div{
        flex-wrap: wrap;
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
  background:#033919;
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
a{
    text-decoration:none;
}


h3 {
  margin: 10px 0;
}

h6 {
  margin: 5px 0;
  text-transform: uppercase;
}

p {
  font-size: 14px;
  line-height: 21px;
}

.card-container {
  background-color: #231E39;
  border-radius: 5px;
  box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.75);
  color: #B3B8CD;
  padding-top: 30px;
  position: relative;
  min-width: 400px;
  text-align: center;
}
.card-container .round {
  border: 1px solid #03BFCB;
  border-radius: 50%;
  padding: 7px;
  height: 100px;
  object-fit: cover;
}

button.primary {
  background-color: #03BFCB;
  border: 1px solid #03BFCB;
  border-radius: 3px;
  color: #231E39;
  font-family: Montserrat, sans-serif;
  font-weight: 500;
  padding: 10px 25px;
}
.primary:hover{
  color:#03BFCB;
  background-color: #231e39;
  transition-duration: 0.4s;
}
button.primary.ghost:hover{
  background-color:#03BFCB;
  color: #231e39;
  transition-duration: 0.4s;
}

button.primary.ghost {
  background-color: transparent;
  color: #02899C;
}

.skills {
  background-color: #1F1A36;
  text-align: left;
  padding: 15px;
  margin-top: 30px;
}

.skills ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}

.skills ul li {
  border: 1px solid #2D2747;
  border-radius: 2px;
  display: inline-block;
  font-size: 12px;
  margin: 0 7px 7px 0;
  padding: 7px;
  box-sizing:border-box;
}
.skills ul li:hover{
  border: 1px #fff solid;
}
::-webkit-scrollbar{
  display:none;
}
a {
    color: inherit; 
    text-decoration: none;
}

</style>
<div class="header p-5">
   <a href="#struktur"><h1 class="text-light fw-bold mt-5">Struktur Pengelola PRODISTIK</h1></a>
   <a href="#instruktur"><h2 class="text-light fw-bold">Tim Instruktur</h2></a>
   <a href="{{route('prodistik.index')}}"><h2 class="text-light"><--</h2></a>
</div>
<article id='struktur'>
    <div class="p-5">
        <h3 class="fw-bold text-success-emphasis mb-3 text-decoration-underline">Penanggung Jawab Program</h3>
        <h4 class="fw-bold text-success-emphasis mb-3">Nun Ahsan Maliki, S.Sy, M.Pd</h4>
        <div id="div" class="d-flex justify-content-evenly gap-5">
            <div class="left">
                <p style="text-align: justify;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis animi modi rem non repellat ad magnam hic quis repellendus atque iste, ipsam distinctio esse quasi nobis laborum voluptate exercitationem incidunt maxime minus ducimus quas. Voluptatem placeat praesentium corrupti reprehenderit ratione nisi quas cum suscipit, unde adipisci ut eos voluptatum maxime. Inventore quibusdam nobis iste. Commodi vitae molestias deserunt, similique laboriosam blanditiis atque, iste vel laborum sint cupiditate laudantium aliquid? Delectus odio adipisci, nulla fugiat laboriosam vel aut, a quaerat, inventore saepe excepturi? Suscipit repellendus totam ratione sit autem accusamus ipsam delectus! Tempore id voluptates non modi optio dolore laborum veniam?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis animi modi rem non repellat ad magnam hic quis repellendus atque iste, ipsam distinctio esse quasi nobis laborum voluptate exercitationem incidunt maxime minus ducimus quas. Voluptatem placeat praesentium corrupti reprehenderit ratione nisi quas cum suscipit, unde adipisci ut eos voluptatum maxime. Inventore quibusdam nobis iste. Commodi vitae molestias deserunt, similique laboriosam blanditiis atque, iste vel laborum sint cupiditate laudantium aliquid? Delectus odio adipisci, nulla fugiat laboriosam vel aut, a quaerat, inventore saepe excepturi? Suscipit repellendus totam ratione sit autem accusamus ipsam delectus! Tempore id voluptates non modi optio dolore laborum veniam?
                </p>
            </div>
            <div class="right">
                <img class="rounded-circle bg-secondary" src="/img/prodistik/Pengelola/pj.png" alt="">
            </div>
        </div>
        <h3 class="fw-bold text-success-emphasis mb-3 text-decoration-underline">Ketua Program</h3>
        <h4 class="fw-bold text-success-emphasis mb-3">Ahmad Muhibul Firdaus, M.Pd.I</h4>
        <div id="div" class="d-flex justify-content-evenly gap-5">
            <div class="right">
                <img class="rounded-circle bg-secondary" src="/img/prodistik/Pengelola/muhib.png" alt="">
            </div>
            <div class="left">
                <p style="text-align: justify;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis animi modi rem non repellat ad magnam hic quis repellendus atque iste, ipsam distinctio esse quasi nobis laborum voluptate exercitationem incidunt maxime minus ducimus quas. Voluptatem placeat praesentium corrupti reprehenderit ratione nisi quas cum suscipit, unde adipisci ut eos voluptatum maxime. Inventore quibusdam nobis iste. Commodi vitae molestias deserunt, similique laboriosam blanditiis atque, iste vel laborum sint cupiditate laudantium aliquid? Delectus odio adipisci, nulla fugiat laboriosam vel aut, a quaerat, inventore saepe excepturi? Suscipit repellendus totam ratione sit autem accusamus ipsam delectus! Tempore id voluptates non modi optio dolore laborum veniam?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis animi modi rem non repellat ad magnam hic quis repellendus atque iste, ipsam distinctio esse quasi nobis laborum voluptate exercitationem incidunt maxime minus ducimus quas. Voluptatem placeat praesentium corrupti reprehenderit ratione nisi quas cum suscipit, unde adipisci ut eos voluptatum maxime. Inventore quibusdam nobis iste. Commodi vitae molestias deserunt, similique laboriosam blanditiis atque, iste vel laborum sint cupiditate laudantium aliquid? Delectus odio adipisci, nulla fugiat laboriosam vel aut, a quaerat, inventore saepe excepturi? Suscipit repellendus totam ratione sit autem accusamus ipsam delectus! Tempore id voluptates non modi optio dolore laborum veniam?
                </p>
            </div>
            
        </div>
        <h3 class="fw-bold text-success-emphasis mb-3 text-decoration-underline">Sekretaris Program</h3>

        <h4 class="fw-bold text-success-emphasis mb-3">Sumaryono, M.Pd.I</h4>
        <div id="div" class="d-flex justify-content-evenly gap-5">
            <div class="left">
                <p style="text-align: justify;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis animi modi rem non repellat ad magnam hic quis repellendus atque iste, ipsam distinctio esse quasi nobis laborum voluptate exercitationem incidunt maxime minus ducimus quas. Voluptatem placeat praesentium corrupti reprehenderit ratione nisi quas cum suscipit, unde adipisci ut eos voluptatum maxime. Inventore quibusdam nobis iste. Commodi vitae molestias deserunt, similique laboriosam blanditiis atque, iste vel laborum sint cupiditate laudantium aliquid? Delectus odio adipisci, nulla fugiat laboriosam vel aut, a quaerat, inventore saepe excepturi? Suscipit repellendus totam ratione sit autem accusamus ipsam delectus! Tempore id voluptates non modi optio dolore laborum veniam?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis animi modi rem non repellat ad magnam hic quis repellendus atque iste, ipsam distinctio esse quasi nobis laborum voluptate exercitationem incidunt maxime minus ducimus quas. Voluptatem placeat praesentium corrupti reprehenderit ratione nisi quas cum suscipit, unde adipisci ut eos voluptatum maxime. Inventore quibusdam nobis iste. Commodi vitae molestias deserunt, similique laboriosam blanditiis atque, iste vel laborum sint cupiditate laudantium aliquid? Delectus odio adipisci, nulla fugiat laboriosam vel aut, a quaerat, inventore saepe excepturi? Suscipit repellendus totam ratione sit autem accusamus ipsam delectus! Tempore id voluptates non modi optio dolore laborum veniam?
                </p>
            </div>
            <div class="right">
                <img class="rounded-circle bg-secondary" src="/img/prodistik/Pengelola/yono.png" alt="">
            </div>
        </div>
        <h3 class="fw-bold text-success-emphasis mb-3 text-decoration-underline">Bendahara Program</h3>

        <h4 class="fw-bold text-success-emphasis mb-3">Yanto, S.Pd.I, M.Si</h4>
        <div id="div" class="d-flex justify-content-evenly gap-5">
            <div class="right">
                <img class="rounded-circle bg-secondary" src="/img/prodistik/Pengelola/yanto.png" alt="">
            </div>
            <div class="left">
                <p style="text-align: justify;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis animi modi rem non repellat ad magnam hic quis repellendus atque iste, ipsam distinctio esse quasi nobis laborum voluptate exercitationem incidunt maxime minus ducimus quas. Voluptatem placeat praesentium corrupti reprehenderit ratione nisi quas cum suscipit, unde adipisci ut eos voluptatum maxime. Inventore quibusdam nobis iste. Commodi vitae molestias deserunt, similique laboriosam blanditiis atque, iste vel laborum sint cupiditate laudantium aliquid? Delectus odio adipisci, nulla fugiat laboriosam vel aut, a quaerat, inventore saepe excepturi? Suscipit repellendus totam ratione sit autem accusamus ipsam delectus! Tempore id voluptates non modi optio dolore laborum veniam?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis animi modi rem non repellat ad magnam hic quis repellendus atque iste, ipsam distinctio esse quasi nobis laborum voluptate exercitationem incidunt maxime minus ducimus quas. Voluptatem placeat praesentium corrupti reprehenderit ratione nisi quas cum suscipit, unde adipisci ut eos voluptatum maxime. Inventore quibusdam nobis iste. Commodi vitae molestias deserunt, similique laboriosam blanditiis atque, iste vel laborum sint cupiditate laudantium aliquid? Delectus odio adipisci, nulla fugiat laboriosam vel aut, a quaerat, inventore saepe excepturi? Suscipit repellendus totam ratione sit autem accusamus ipsam delectus! Tempore id voluptates non modi optio dolore laborum veniam?
                </p>
            </div>
            
        </div>
        <h3 class="fw-bold text-success-emphasis mb-3 text-decoration-underline">Staf Program</h3>

        <h4 class="fw-bold text-success-emphasis mb-3">Shautul Azkiyak, S.Pd</h4>
        <div id="div" class="d-flex justify-content-evenly gap-5">
            <div class="left">
                <p style="text-align: justify;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis animi modi rem non repellat ad magnam hic quis repellendus atque iste, ipsam distinctio esse quasi nobis laborum voluptate exercitationem incidunt maxime minus ducimus quas. Voluptatem placeat praesentium corrupti reprehenderit ratione nisi quas cum suscipit, unde adipisci ut eos voluptatum maxime. Inventore quibusdam nobis iste. Commodi vitae molestias deserunt, similique laboriosam blanditiis atque, iste vel laborum sint cupiditate laudantium aliquid? Delectus odio adipisci, nulla fugiat laboriosam vel aut, a quaerat, inventore saepe excepturi? Suscipit repellendus totam ratione sit autem accusamus ipsam delectus! Tempore id voluptates non modi optio dolore laborum veniam?
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis animi modi rem non repellat ad magnam hic quis repellendus atque iste, ipsam distinctio esse quasi nobis laborum voluptate exercitationem incidunt maxime minus ducimus quas. Voluptatem placeat praesentium corrupti reprehenderit ratione nisi quas cum suscipit, unde adipisci ut eos voluptatum maxime. Inventore quibusdam nobis iste. Commodi vitae molestias deserunt, similique laboriosam blanditiis atque, iste vel laborum sint cupiditate laudantium aliquid? Delectus odio adipisci, nulla fugiat laboriosam vel aut, a quaerat, inventore saepe excepturi? Suscipit repellendus totam ratione sit autem accusamus ipsam delectus! Tempore id voluptates non modi optio dolore laborum veniam?
                  </p>
            </div>
            <div class="right">
                <img class="rounded-circle bg-secondary" src="/img/prodistik/Pengelola/staf.png" alt="">
            </div>
        </div>
    </div>
</article>
<h3 id="instruktur" class="fw-bold text-success-emphasis mb-3 px-5 text-decoration-underline">Tim Instruktur</h3>
<div class="px-5 mb-5 d-flex overflow-x-auto gap-3">
  @foreach ($dosens as $dosen)
  <div class="card-container p-3">
    <span class="pro"></span>
    <img class="round" src="/img/prodistik/Pengelola/{{$dosen->file}}" alt="user" width="100px" />
    <h3>{{$dosen->NamaGuru}}</h3>
    <h6>{{$dosen->alamat}}</h6>
    <p>{{$dosen->jabatan}}</p>

    <div class="buttons">
      <button class="primary">
        <a href="https://t.me/{{$dosen->telegram}}">Message</a>
      </button>
      <button class="primary ghost">
        <a href="#">Following</a>
      </button>
    </div>

    <div class="skills">
      <h6>Pengampu Mata Kuliah</h6>
      <ul>
        @if (!empty($dosen->mapel))
          @foreach(json_decode($dosen->mapel, true) as $mapel)
            <li>{{ $mapel }}</li>
          @endforeach
        @else
          <li>Belum ada mata kuliah</li>
        @endif
        {{-- @if(auth()->user()->id=='admin') --}}
        <li>
          <a class="btn btn-primary w-100" style="border-radius:0px" href="{{route('prodistik.edit',$dosen->id)}}"><span>Ubah</span></a>
        </li>
        {{-- @endif --}}
      </ul>
    </div>
  </div>
@endforeach

<script>
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
