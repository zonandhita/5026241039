<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiDBController;

// Halaman utama (index)
Route::get('/', function () {
    return view('index');
});

// Pertemuan 1
Route::get('/pertemuan1', function () {
    return view('pertemuan1');
});

// Pertemuan 2
Route::get('/pertemuan2', function () {
    return view('pertemuan2');
});

Route::get('/pertemuan2/news', function () {
    return view('news');
});

Route::get('/pertemuan2/news1', function () {
    return view('news1');
});

// Pertemuan 3
Route::get('/pertemuan3', function () {
    return view('pertemuan3');
});

// Tugas Pertemuan 3
Route::get('/tugaspertemuan3', function () {
    return view('tugaspertemuan3');
});

// Pertemuan 4
Route::get('/pertemuan4', function () {
    return view('pertemuan4');
});

// Pertemuan 5
Route::get('/pertemuan5', function () {
    return view('pertemuan5');
});

// Tugas Pertemuan 5
Route::get('/tugaspertemuan5', function () {
    return view('tugaspertemuan5');
});

Route::get('/pegawai/',[PegawaiDBController::class, 'index1']);
