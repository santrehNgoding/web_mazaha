@extends('layouts.app')
@section('content')
<style>
    .header{
        background-color: #046C3C;
        display: flex;
        align-items: center;
        text-align: center;
        height:209px;
       
    }
    header h2{
         color: #ffffff;
        margin:0 auto;
        font-weight: 700;
    }
    h2{
        color: #046C3C;
        font-weight: 700;
        margin-top:50px;
    }
    .container img{
        margin-top:20px;
    }
    .all {
            font-family: Arial, sans-serif;
            margin: 20px;
            
        }


        .accordion {
            display: flex;
            justify-content: space-between;
            background: #f1f1f1;
            cursor: pointer;
            padding: 15px;
            width: 100%;
            text-align: left;
            border: none;
            outline: none;
            font-size: 16px;
            transition: 0.4s;
            border-radius: 5px;
            margin-top: 5px;
        }
        .active, .accordion:hover {
            background-color: #ddd;
        }
        .panel {
            padding: 0 15px;
            display: none;
            background-color: white;
            overflow: hidden;
            text-align: justify;
        }
    </style>
</head>


</style>
<header class="header">
    <h2>Struktur Organisasi Pimpinan dan Tata Usaha</h2>
</header>
<div class="container">
    <h2>Struktur Organisasi Madrasah</h2>
<img src="{{asset('img/ss.jpg')}}" alt="" width="100%">
</div>
    <div class="all">
    
    <div class="container 1">
        <h2>Deskripsi Tugas Pokok Dan Fungsi</h2>
        
        <button class="accordion">
            <div>Tugas Pokok dan Fungsi Kepala Madrasah </div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></button>
        <div class="panel">
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nostrum voluptas delectus deserunt impedit aliquid, est ad dicta libero cupiditate aperiam accusantium ex quod vitae modi vel mollitia ullam saepe aut eligendi expedita! Excepturi, fugit exercitationem voluptates enim quae voluptate nam quam culpa modi? Error neque excepturi cupiditate incidunt adipisci veniam totam porro a aliquam nesciunt quaerat, dolorem culpa quod esse iusto. Iusto labore totam libero qui ad odit rem consequuntur quo ratione illum. Rerum cum similique accusamus asperiores dolor fugit nostrum cumque voluptatum eaque! Nulla ratione dolorem, inventore quisquam rerum odit dolorum, fugit, in temporibus at suscipit vel aut. Dolores dicta accusantium, cum inventore consequuntur mollitia. Consequatur expedita, incidunt cupiditate voluptatem eos ullam sunt error quo veniam ad aliquam molestiae quasi laboriosam commodi doloribus. Est, asperiores quam eos sequi sit delectus, illum voluptas iusto eius voluptatum dolores nam voluptates enim incidunt non veritatis, quidem neque rem doloremque atque quas! Porro reiciendis, nulla ex corrupti minus maiores ipsum eos repudiandae quaerat numquam nostrum perferendis reprehenderit quisquam consequatur provident tempora iste necessitatibus fugiat fugit repellendus, amet ab ratione! Minima repellat sed atque asperiores culpa iusto dolorem praesentium vitae nostrum repellendus saepe numquam, provident facere autem mollitia quia doloremque odio aperiam? Non, quod.</p>
        </div>
    
        
        <button class="accordion">
            <div>Tugas Pokok dan Fungsi Wakil Kepala Tata Usaha </div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore, tempore blanditiis repudiandae a distinctio adipisci velit quo doloremque, voluptas eos quam? Rerum ducimus, autem consectetur assumenda, totam commodi perspiciatis tenetur optio nemo temporibus quia. Ad iusto porro doloribus excepturi illum ea reprehenderit blanditiis ullam at quas maxime odit, quibusdam voluptas beatae eum earum? Dolore magnam tempore nisi ipsam dolorem sunt molestias dolorum ipsa! Tenetur, nam totam illo hic omnis quasi sit rem quam nisi facilis vel harum tempore inventore. Dolorem, necessitatibus, consequuntur vero sapiente obcaecati placeat recusandae omnis natus dignissimos quas hic architecto. Impedit quis ab earum eligendi dolore vero quae aspernatur molestias sunt eos! Sit magni atque sunt ex quia! Pariatur quibusdam ut aperiam ratione, consequatur optio deleniti modi necessitatibus vitae sed ipsa sit sapiente neque, alias reiciendis accusantium quis aut doloribus saepe, ex beatae! Dolore odit minus ducimus, inventore voluptates, nihil cumque dolores placeat dicta officiis expedita eveniet, nisi dignissimos! Neque doloribus voluptas a dolor, eaque et modi corrupti, deserunt provident blanditiis, non magni voluptatibus. Aliquam, laboriosam minus impedit asperiores ex architecto, placeat cupiditate maiores ratione libero sapiente quos voluptatibus perferendis autem voluptate iure reiciendis reprehenderit ipsa nesciunt fugit officiis qui sequi. Odio quos nam quas nemo libero.</p>
        </div>
    
        
        <button class="accordion">
            <div>Tugas Pokok dan Fungsi Wakil Kepala Madrasah Bagian Kurikulum </div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo a laboriosam velit nisi harum ipsam laborum, voluptatibus enim maxime voluptates, minus repellat voluptate, quos iste? Quia debitis rerum tenetur quam vitae et voluptatum. Deleniti, amet. Nisi quis quod accusamus, saepe aliquam explicabo dolore quaerat suscipit et impedit, commodi at. Distinctio neque nihil quia sapiente recusandae reiciendis odio sed voluptatem, corporis dolore illum ea iure eaque repudiandae quaerat eos necessitatibus beatae vitae ex doloremque laboriosam delectus ab illo odit. Nam quis, quia porro, itaque magnam eum aspernatur doloremque, sint vitae dolorum quas accusamus! Quasi, repellat nisi voluptatibus amet magnam praesentium animi. Rem eius consequuntur nemo velit voluptas at inventore dolorem, consequatur id, voluptates facere ipsum assumenda doloribus est ut. Ab nulla libero incidunt debitis labore officia, aliquid assumenda quod expedita possimus velit quae maiores dignissimos necessitatibus illo. Dolorem delectus a corrupti similique quibusdam autem repellat commodi debitis excepturi reprehenderit repudiandae dolorum aperiam odit ex facilis assumenda, non sequi sunt eligendi architecto quidem eum esse molestiae. Aperiam, voluptatibus exercitationem! At quo officiis harum sed, omnis reprehenderit debitis eum sint earum molestias quod possimus dicta non voluptates quis! Repudiandae sint cupiditate facilis, accusantium praesentium reprehenderit excepturi consequuntur ea sit nisi fuga voluptatibus accusamus!</p>
        </div>
    
        
        <button class="accordion">
            <div>Tugas Pokok dan Fungsi Wakil Kepala Madrasah Bagian Kesiswaan </div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo a laboriosam velit nisi harum ipsam laborum, voluptatibus enim maxime voluptates, minus repellat voluptate, quos iste? Quia debitis rerum tenetur quam vitae et voluptatum. Deleniti, amet. Nisi quis quod accusamus, saepe aliquam explicabo dolore quaerat suscipit et impedit, commodi at. Distinctio neque nihil quia sapiente recusandae reiciendis odio sed voluptatem, corporis dolore illum ea iure eaque repudiandae quaerat eos necessitatibus beatae vitae ex doloremque laboriosam delectus ab illo odit. Nam quis, quia porro, itaque magnam eum aspernatur doloremque, sint vitae dolorum quas accusamus! Quasi, repellat nisi voluptatibus amet magnam praesentium animi. Rem eius consequuntur nemo velit voluptas at inventore dolorem, consequatur id, voluptates facere ipsum assumenda doloribus est ut. Ab nulla libero incidunt debitis labore officia, aliquid assumenda quod expedita possimus velit quae maiores dignissimos necessitatibus illo. Dolorem delectus a corrupti similique quibusdam autem repellat commodi debitis excepturi reprehenderit repudiandae dolorum aperiam odit ex facilis assumenda, non sequi sunt eligendi architecto quidem eum esse molestiae. Aperiam, voluptatibus exercitationem! At quo officiis harum sed, omnis reprehenderit debitis eum sint earum molestias quod possimus dicta non voluptates quis! Repudiandae sint cupiditate facilis, accusantium praesentium reprehenderit excepturi consequuntur ea sit nisi fuga voluptatibus accusamus!</p>
        </div>
        
        <button class="accordion">
            <div>Tugas Pokok dan Fungsi Wakil Kepala Madrasah Bagian Kesiswaan </div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo a laboriosam velit nisi harum ipsam laborum, voluptatibus enim maxime voluptates, minus repellat voluptate, quos iste? Quia debitis rerum tenetur quam vitae et voluptatum. Deleniti, amet. Nisi quis quod accusamus, saepe aliquam explicabo dolore quaerat suscipit et impedit, commodi at. Distinctio neque nihil quia sapiente recusandae reiciendis odio sed voluptatem, corporis dolore illum ea iure eaque repudiandae quaerat eos necessitatibus beatae vitae ex doloremque laboriosam delectus ab illo odit. Nam quis, quia porro, itaque magnam eum aspernatur doloremque, sint vitae dolorum quas accusamus! Quasi, repellat nisi voluptatibus amet magnam praesentium animi. Rem eius consequuntur nemo velit voluptas at inventore dolorem, consequatur id, voluptates facere ipsum assumenda doloribus est ut. Ab nulla libero incidunt debitis labore officia, aliquid assumenda quod expedita possimus velit quae maiores dignissimos necessitatibus illo. Dolorem delectus a corrupti similique quibusdam autem repellat commodi debitis excepturi reprehenderit repudiandae dolorum aperiam odit ex facilis assumenda, non sequi sunt eligendi architecto quidem eum esse molestiae. Aperiam, voluptatibus exercitationem! At quo officiis harum sed, omnis reprehenderit debitis eum sint earum molestias quod possimus dicta non voluptates quis! Repudiandae sint cupiditate facilis, accusantium praesentium reprehenderit excepturi consequuntur ea sit nisi fuga voluptatibus accusamus!</p>
        </div>
        
        <button class="accordion">
            <div>Tugas Pokok dan Fungsi Wakil Kepala Madrasah Bagian Kesiswaan </div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo a laboriosam velit nisi harum ipsam laborum, voluptatibus enim maxime voluptates, minus repellat voluptate, quos iste? Quia debitis rerum tenetur quam vitae et voluptatum. Deleniti, amet. Nisi quis quod accusamus, saepe aliquam explicabo dolore quaerat suscipit et impedit, commodi at. Distinctio neque nihil quia sapiente recusandae reiciendis odio sed voluptatem, corporis dolore illum ea iure eaque repudiandae quaerat eos necessitatibus beatae vitae ex doloremque laboriosam delectus ab illo odit. Nam quis, quia porro, itaque magnam eum aspernatur doloremque, sint vitae dolorum quas accusamus! Quasi, repellat nisi voluptatibus amet magnam praesentium animi. Rem eius consequuntur nemo velit voluptas at inventore dolorem, consequatur id, voluptates facere ipsum assumenda doloribus est ut. Ab nulla libero incidunt debitis labore officia, aliquid assumenda quod expedita possimus velit quae maiores dignissimos necessitatibus illo. Dolorem delectus a corrupti similique quibusdam autem repellat commodi debitis excepturi reprehenderit repudiandae dolorum aperiam odit ex facilis assumenda, non sequi sunt eligendi architecto quidem eum esse molestiae. Aperiam, voluptatibus exercitationem! At quo officiis harum sed, omnis reprehenderit debitis eum sint earum molestias quod possimus dicta non voluptates quis! Repudiandae sint cupiditate facilis, accusantium praesentium reprehenderit excepturi consequuntur ea sit nisi fuga voluptatibus accusamus!</p>
        </div>
        
        <button class="accordion">
            <div>Tugas Pokok dan Fungsi Wakil Kepala Madrasah Bagian Kesiswaan </div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo a laboriosam velit nisi harum ipsam laborum, voluptatibus enim maxime voluptates, minus repellat voluptate, quos iste? Quia debitis rerum tenetur quam vitae et voluptatum. Deleniti, amet. Nisi quis quod accusamus, saepe aliquam explicabo dolore quaerat suscipit et impedit, commodi at. Distinctio neque nihil quia sapiente recusandae reiciendis odio sed voluptatem, corporis dolore illum ea iure eaque repudiandae quaerat eos necessitatibus beatae vitae ex doloremque laboriosam delectus ab illo odit. Nam quis, quia porro, itaque magnam eum aspernatur doloremque, sint vitae dolorum quas accusamus! Quasi, repellat nisi voluptatibus amet magnam praesentium animi. Rem eius consequuntur nemo velit voluptas at inventore dolorem, consequatur id, voluptates facere ipsum assumenda doloribus est ut. Ab nulla libero incidunt debitis labore officia, aliquid assumenda quod expedita possimus velit quae maiores dignissimos necessitatibus illo. Dolorem delectus a corrupti similique quibusdam autem repellat commodi debitis excepturi reprehenderit repudiandae dolorum aperiam odit ex facilis assumenda, non sequi sunt eligendi architecto quidem eum esse molestiae. Aperiam, voluptatibus exercitationem! At quo officiis harum sed, omnis reprehenderit debitis eum sint earum molestias quod possimus dicta non voluptates quis! Repudiandae sint cupiditate facilis, accusantium praesentium reprehenderit excepturi consequuntur ea sit nisi fuga voluptatibus accusamus!</p>
        </div>
        
        <button class="accordion">
            <div>Tugas Pokok dan Fungsi Wakil Kepala Madrasah Bagian Kesiswaan </div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo a laboriosam velit nisi harum ipsam laborum, voluptatibus enim maxime voluptates, minus repellat voluptate, quos iste? Quia debitis rerum tenetur quam vitae et voluptatum. Deleniti, amet. Nisi quis quod accusamus, saepe aliquam explicabo dolore quaerat suscipit et impedit, commodi at. Distinctio neque nihil quia sapiente recusandae reiciendis odio sed voluptatem, corporis dolore illum ea iure eaque repudiandae quaerat eos necessitatibus beatae vitae ex doloremque laboriosam delectus ab illo odit. Nam quis, quia porro, itaque magnam eum aspernatur doloremque, sint vitae dolorum quas accusamus! Quasi, repellat nisi voluptatibus amet magnam praesentium animi. Rem eius consequuntur nemo velit voluptas at inventore dolorem, consequatur id, voluptates facere ipsum assumenda doloribus est ut. Ab nulla libero incidunt debitis labore officia, aliquid assumenda quod expedita possimus velit quae maiores dignissimos necessitatibus illo. Dolorem delectus a corrupti similique quibusdam autem repellat commodi debitis excepturi reprehenderit repudiandae dolorum aperiam odit ex facilis assumenda, non sequi sunt eligendi architecto quidem eum esse molestiae. Aperiam, voluptatibus exercitationem! At quo officiis harum sed, omnis reprehenderit debitis eum sint earum molestias quod possimus dicta non voluptates quis! Repudiandae sint cupiditate facilis, accusantium praesentium reprehenderit excepturi consequuntur ea sit nisi fuga voluptatibus accusamus!</p>
        </div>
        
        <button class="accordion">
            <div>Tugas Pokok dan Fungsi Wakil Kepala Madrasah Bagian Kesiswaan </div><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
  <path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
</svg></button>
        <div class="panel">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo a laboriosam velit nisi harum ipsam laborum, voluptatibus enim maxime voluptates, minus repellat voluptate, quos iste? Quia debitis rerum tenetur quam vitae et voluptatum. Deleniti, amet. Nisi quis quod accusamus, saepe aliquam explicabo dolore quaerat suscipit et impedit, commodi at. Distinctio neque nihil quia sapiente recusandae reiciendis odio sed voluptatem, corporis dolore illum ea iure eaque repudiandae quaerat eos necessitatibus beatae vitae ex doloremque laboriosam delectus ab illo odit. Nam quis, quia porro, itaque magnam eum aspernatur doloremque, sint vitae dolorum quas accusamus! Quasi, repellat nisi voluptatibus amet magnam praesentium animi. Rem eius consequuntur nemo velit voluptas at inventore dolorem, consequatur id, voluptates facere ipsum assumenda doloribus est ut. Ab nulla libero incidunt debitis labore officia, aliquid assumenda quod expedita possimus velit quae maiores dignissimos necessitatibus illo. Dolorem delectus a corrupti similique quibusdam autem repellat commodi debitis excepturi reprehenderit repudiandae dolorum aperiam odit ex facilis assumenda, non sequi sunt eligendi architecto quidem eum esse molestiae. Aperiam, voluptatibus exercitationem! At quo officiis harum sed, omnis reprehenderit debitis eum sint earum molestias quod possimus dicta non voluptates quis! Repudiandae sint cupiditate facilis, accusantium praesentium reprehenderit excepturi consequuntur ea sit nisi fuga voluptatibus accusamus!</p>
        </div>

    
        <!-- Tambahkan tugas lainnya sesuai kebutuhan -->
    </div>
    
    <script>
        var acc = document.getElementsByClassName("accordion");
        for (var i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.display === "block") {
                    panel.style.display = "none";
                } else {
                    panel.style.display = "block";
                }
            });
        }
    </script>
    </div>
@endsection