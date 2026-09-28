<?php

use Illuminate\Support\Facades\Route;

// 1. Route Utama (/) -> Mengirim array data dinamis
Route::get('/', function () {
    return view('welcome', [
        'name' => 'Umar Hidayat',
        'courses' => ['Pemrograman Web', 'Sistem Operasi', 'Struktur Data', 'Arsitektur Komputer']
    ]);
});

// 2. Route About (/about)
Route::get('/about', function () {
    return view('about');
});

// 3. Route Contact (/contact)
Route::get('/contact', function () {
    return view('contact');
});

// Bonus: Route Parameter /hello/{nama}
Route::get('/hello/{nama}', function ($nama) {
    return "Halo, " . e($nama) . "! Selamat datang di Laravel Setup.";
});