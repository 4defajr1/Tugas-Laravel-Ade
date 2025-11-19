<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return "SELAMAT DATANG DI HALAMAN HOME!";
    }

    public function about(){
        return "INI ADALAH HALAMAN ABOUT";
    }
}
