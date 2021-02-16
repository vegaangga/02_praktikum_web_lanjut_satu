<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
        return "Selamat Datang";
    }

    public function about(){
        echo "Nim: 2041723013";
        echo "<br>";
        echo "Nama: Vega Anggaresta";
    }
    public function articles($id){
        return "Halaman Artikel dengan ID->$id";
    }
}
