@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="bg-white p-4 rounded shadow-sm">
        <h5>Hasil Pencarian: <em>{{ $query }}</em></h5>
        <hr>
        {{-- Data berita hasil pencarian ditampilkan di sini --}}
        <p class="text-muted">Belum ada hasil (placeholder). <a href="{{route('berita.index')}}">Kembali</a></p>
    </div>
</div>
@endsection
