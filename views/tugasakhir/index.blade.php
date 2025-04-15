@extends('layouts.app')

@section('content')
        <style>
            .featured-thesis {
                background-color: white;
                border-radius: 8px;
                margin-bottom: 30px;
                overflow: hidden;
            }
            
            .featured-image {
                width: 100%;
                height: 500px;
                object-fit: cover;
                object-position: top;
                background-color: #f0f0f0;
                display: flex;
                align-items: center;
                justify-content: center;
                color: #666;
            }
            
            .featured-content {
                padding-top:350px;
                padding-left:100px;
                position: absolute;
                background-image:linear-gradient(to right, rgba(3,57,25),rgba(3,57,25,0));
                top:0px;
                left:0px;
                width: 100%;
                height: 100%;
                pointer-events: none;
            }
            
            .thesis-title {
                font-size: 3rem;
                margin-bottom: 10px;
                color: rgb(180, 137, 27);
                text-shadow: 10px 10px 10px black;
                font-weight:bold;
            }
            
            .thesis-meta {
                color: #fff;
                margin-bottom: 15px;
                font-size: 1.2rem;
                font-weight:bold;
            }
            
            .thesis-meta span {
                margin-right: 15px;
            }
            
            .thesis-description {
                font-size: 1rem;
                margin-bottom: 20px;
                line-height: 1.7;
                color:#fff;
                overflow-y: auto;
            }
            
            .thesis-list {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
                gap: 20px;
                margin-top: 40px;
            }
            
            .thesis-item {
                background-color: white;
                border-radius: 8px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                overflow: hidden;
                transition: transform 0.3s;
                width: 30%;
            }
            
            .thesis-item:hover {
                transform: translateY(-10px);
            }
            
            .thesis-item-image {
                width: 100%;
                height: 150px;
                object-fit: cover;
                background-color: #f0f0f0;
                display: flex;
                align-items: center;
                justify-content: center;
                color: #666;
            }
            
            .thesis-item-content {
                padding: 15px;
            }
            
            .thesis-item-title {
                font-size: 1.1rem;
                margin-bottom: 8px;
                color: #2c3e50;
            }
            
            .thesis-item-meta {
                color: #7f8c8d;
                font-size: 0.8rem;
                margin-bottom: 10px;
            }
            
            .view-details {
                display: inline-block;
                color: #3498db;
                text-decoration: none;
                font-weight: bold;
                font-size: 0.9rem;
            }
            
            .back-button {
                display: inline-block;
                background-color: #3498db;
                color: white;
                padding: 8px 16px;
                border-radius: 4px;
                text-decoration: none;
                margin-bottom: 20px;
            }
            
            @media only screen and (max-width: 767px) {
                .thesis-list {
                    grid-template-columns: 1fr;
                }
                .search{
                    width:100%
                }
            }
            @media only screen and (min-width:768px){
                .search{
                    width:25%;
                    }
                .index {
                    width:75%;
                }
            }
        </style>

        @if($featuredTugasAkhir)
            <!-- Featured Thesis Section -->
            @if(request()->has('id'))
                <a href="{{ route('tugasakhir.index') }}" class="back-button">
                    &larr; Kembali ke Semua Tugas Akhir
                </a>
            @endif
            
            <div class="featured-thesis">
                <div class="featured-image">
                    @if($featuredTugasAkhir->file)
                        @if($featuredTugasAkhir->jurusan=='Multimedia')
                        <iframe style="height:80vh;width:100%;" src="https://www.youtube.com/embed/{{$featuredTugasAkhir->link}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        @else
                            <img src="/img/prodistik/ta/{{$featuredTugasAkhir->file}}" 
                                alt="{{ $featuredTugasAkhir->file }}" 
                                class="featured-image">
                        @endif
                    @else
                        <div class="featured-image">
                            <span>No Image Available</span>
                        </div>
                    @endif
                </div>
                <div class="featured-content">
                    <h1 class="thesis-title" style="font-size:4vw"><span class="fw-bold px-3 rounded-3" style="">{{ $featuredTugasAkhir->title }}</span></h1>
                    <div class="thesis-meta" style="font-size:2vw">
                        <span class="fw-bold px-3 rounded-3" style="">{{ $featuredTugasAkhir->name }}  -  {{ $featuredTugasAkhir->jurusan }}  -  {{ $featuredTugasAkhir->tahun }}</span>
                    </div>
                    <p style="font-size:1vw" class="thesis-description w-50"><span class="fw-bold px-3 rounded-3" style="">{{ $featuredTugasAkhir->deskripsi }}</span></p>
                </div>
            </div>
        @endif

        <!-- Thesis List Section -->
    <div class="d-flex flex-wrap">
        <div class="search p-3">
            <form method="GET" action="" class="mb-3">
                <div class="input-group">
                    <input type="text" name="title" class="form-control" placeholder="Cari Judul TA...">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-success"><img style="max-height:2vw" src="/img/search.png" alt=""></button>
                    </div>
                    <a class="btn btn-success" href="{{route('tugasakhir.create')}}">+</a>
                </div>
            </form>
            <h6 class="fw-bold">Jurusan Prodistik</h6>
            @foreach($jurusan as $jurus)
            @php
                $count=\App\Models\TugasAkhir::where('jurusan',$jurus)->count();
            @endphp
            <div class="d-flex justify-content-between mb-1 ekstra-container bg-secondary-subtle p-2 rounded-2">
                    <span>{{$jurus}}</span>
                    <span>{{$count}}</span>
            </div>
            @endforeach
        </div>
        <div class="index">
            <div class="thesis-list m-5 d-flex flex-wrap">
                @foreach($allTugasAkhir as $tugas)
                        <div class="thesis-item">
                            <div class="thesis-item-image">
                                <div class="thesis-item-image">
                                    @if($tugas->file)
                                        <img src="/img/prodistik/ta/{{$tugas->file}}" 
                                             alt="{{ $tugas->file }}"
                                             style="width:100%;height:100%;object-fit:cover;">
                                    @else
                                        <span>No Image</span>
                                    @endif
                                
                                </div> 

                            </div>
                        
                            <div class="thesis-item-content">
                                <h4 class="thesis-item-title">{{ $tugas->title }}</h4>
                                <div class="thesis-item-meta">
                                    <div>{{ $tugas->name }}</div>
                                    <div>{{ $tugas->jurusan }} - {{ $tugas->tahun }}</div>
                                </div>
                                <a href="{{ route('tugasakhir.index', $tugas->id) }}" class="view-details">
                                    Lihat Detail &rarr;
                                </a>
                            </div>
                        </div>
                @endforeach
            </div>
            <div class="mt-5 d-flex justify-content-center">
                {{$allTugasAkhir->links()}}
              </div>
        </div>
    </div>
@endsection
