<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HumasController extends Controller
{
    public function index(){
        return view('humas.index');
    }
}