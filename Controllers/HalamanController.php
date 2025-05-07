<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanController extends Controller
{
    public function alumni()
    {
        return view('alumni');
    }
    public function berita()
    {
        return view('berita');
    }
    public function struktur()
    {
        return view('struktur');
    }
    public function fasilitas()
    {
        return view('fasilitas');
    }
}
