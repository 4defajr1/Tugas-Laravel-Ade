<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function home(){
    return "Selamat Datang di Halaman Home";
  }

    public function about(){
    return "Ini adalah halaman About.";
  }

}