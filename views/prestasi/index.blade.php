@extends('layouts.app')
@section('content')
<h1>Hello world</h1>
<div class="d-flex overflow-x-auto">
@foreach ($rows as $row )
<div class="w-50 p-5">
    <h1>{{$row->title}}</h1>
    <img class="h-25" src="/img/prestasi/{{$row->file}}" alt="">
    <p>{{$row->created_at}}</p>
    <p>{{$row->berita}}</p>
</div>
@endforeach
</div>
@endsection
