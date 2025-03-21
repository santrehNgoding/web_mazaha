<?php
namespace App\Http\Controllers;
use illuminate\Http\Request;
class ProdistikController extends Controller{
    public function index(){
        return view('prodistik.index');
    }
    public function struktur(){
        return view('prodistik.struktur');
    }
}