<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function world(){
        return "Hallo dunia menggunakan controller";
    }
}
