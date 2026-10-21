<?php

use App\Http\Controllers\BeritaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        "title" => "Profile",
        "name" => "Adelia eka rahmawati",
        "nim" => "13242520036",
        "prodi" => "Teknologi Informasi",
        "gambar" => "adel.jpeg",
    ]);
});

Route::get('/berita', [BeritaController::class, 'tampilberita']);
Route::get('/berita/{slug}', [BeritaController::class, 'tampilberitatunggal']);

Route::get('/contact', function () {
    return view('contact', [
        "title" => "Contact",
    ]);
});