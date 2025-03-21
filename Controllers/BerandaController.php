<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    
    public function index(Request $request)
    {
    return view('beranda');
}
    public function test(Request $request)
    {
    return view('webMA');
}
    // public function indexTestimoni(Request $request)
    // {
    // $model = \App\Models\Testimoni::select('*');
    // if (isset($request['nama'])) {
    //     $model->where('title', 'Like', '%'.$request['nama'].'%');
    // }
    // return view('home', [
        
    // ]);}
    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // // public function __construct()
    // // {
    // //     // $this->middleware('auth');
    // // }

    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable
    //  */
    // public function index()
    // {
    //     return view('home');
    // }
}
