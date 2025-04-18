<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Carbon\Carbon;
class TahfizController extends Controller
{
    public function index(){
        return view('tahfiz.index');
    }
}