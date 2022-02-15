<?php

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/gallery', function () {
    return view('gallery', [
        "title" => "Gallery"
    ]);
});

Route::get('/about', function() {
    return view('about', [
        "title" => "About",
        "nama" => "Daffa Adi Laksono",
        "email" => "viewless088@gmail.com",
        "gambar" => "뭘 보ㅏㅏ__ 까불디마라_나 짱쎄(image0).jpg"
    ]);
});

Route::resource('/contacts', ContactController::class);

use App\Http\Controller\ContactController;