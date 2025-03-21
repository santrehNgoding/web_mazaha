<?php
namespace App\Http\Controllers;
use illuminate\Http\Request;
class FasilitasController extends Controller{
    public function index(request $request)
    {
        return view('fasilitas');
    }
}