<?php

namespace App\Http\Controllers;

use App\Models\KepalaMadrasah;
use Illuminate\Http\Request;

class KepalaMadrasahController extends Controller
{
    public function index(Request $request, $id = null)
{
    $allKepalaMadrasah = KepalaMadrasah::all();
    $featuredKepalaMadrasah = $id 
        ? KepalaMadrasah::findOrFail($id)
        : $allKepalaMadrasah->first();

    return view('sambutan', [
        'featured' => $featuredKepalaMadrasah,
        'all' => $allKepalaMadrasah,
    ]);
}
}