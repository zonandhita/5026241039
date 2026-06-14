<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiDBController;

// Halaman utama (index1)
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

Route::get('dosen', [DosenController::class, 'index1']);
Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('/pegawainama/{nama}', [PegawaiController::class, 'index1']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

//crud
Route::get('/pegawai/', [PegawaiDBController::class, 'index1']);
Route::get('/pegawaitambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawaistore', [PegawaiDBController::class, 'store']);
Route::get('/pegawaiedit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawaiupdate', [PegawaiDBController::class, 'update']);
Route::get('/pegawaihapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawaicari', [PegawaiDBController::class, 'cari']);

//crud sepatu
Route::get('/sepatu/', [SepatuController::class, 'index1']);
Route::get('/sepatutambah', [SepatuController::class, 'tambah']);
Route::post('/sepatustore', [SepatuController::class, 'store']);
Route::get('/sepatuedit/{id}', [SepatuController::class, 'edit']);
Route::post('/sepatuupdate', [SepatuController::class, 'update']);
Route::get('/sepatuhapus/{id}', [SepatuController::class, 'hapus']);
Route::get('/sepatucari', [SepatuController::class, 'cari']);
