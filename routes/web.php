<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\praktikum2;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/* Coba
Route::get('/hello', function () {
    return 'Hello World';
   });

Route::get('/world', function () {
    return 'World';
   });

Route::get('/world', [WelcomeController::class,'world']);
*/

/*------ Praktikum 1-----
Route::get('/', function () {
    echo "Selamat Datang";
    });

Route::get('/about', function () {
        echo "Nim: 2041723013";
        echo "<br>";
        echo "Nama: Vega Anggaresta";
        });

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID->'.$id;
});
*/
/* ----- Praktikum 2 ----- */
Route::get('/', [PageController::class,'welcome']);
Route::get('/about', [PageController::class,'about']);
Route::get('/articles/{id}', [PageController::class,'articles']);


/* ----- Praktikum 3 ----- */
