<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function home(){
        return "SELAMAT DATANG DI HALAMAN HOME!";
    }

    public function about(){
        return "INI ADALAH HALAMAN ABOUT";
    }
}
