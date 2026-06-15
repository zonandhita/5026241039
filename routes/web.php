<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\maskerController;
use App\Http\Controllers\NilaiPesertaController;

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

// blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// crud pegawai
Route::get('/pegawai/', [PegawaiDBController::class, 'index1']);
Route::get('/pegawaitambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawaistore', [PegawaiDBController::class, 'store']);
Route::get('/pegawaiedit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawaiupdate', [PegawaiDBController::class, 'update']);
Route::get('/pegawaihapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawaicari', [PegawaiDBController::class, 'cari']);

// crud masker
Route::get('/masker', [maskerController::class, 'indexMasker']);
Route::get('/masker_cari', [maskerController::class, 'cariMasker']);
Route::get('/masker_tambah', [maskerController::class, 'tambahMasker']);
Route::post('/masker_store', [maskerController::class, 'storeMasker']);
Route::get('/masker_edit/{id}', [maskerController::class, 'editMasker']);
Route::post('/masker_update', [maskerController::class, 'updateMasker']);
Route::get('/masker_hapus/{id}', [maskerController::class, 'hapusMasker']);

// EAS - nilai_peserta
Route::get('/eas', [NilaiPesertaController::class, 'index']);
Route::get('/eas_tambah', [NilaiPesertaController::class, 'tambah']);
Route::post('/eas_store', [NilaiPesertaController::class, 'store']);
