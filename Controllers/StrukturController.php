<?php
namespace App\Http\Controllers;
use illuminate\Http\Request;
class StrukturController extends Controller
{
    public function index(request $request){
        return view('struktur');
    }
}