<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class praktikum2 extends Controller
{
    public function welcome(){
        return "Selamat Datang";
    }

    public function about(){
        echo "Nim: 2041723013";
        echo "<br>";
        echo "Nama: Vega Anggaresta";
    }
    
}
