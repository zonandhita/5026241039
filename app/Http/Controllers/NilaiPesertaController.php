<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiPesertaController extends Controller
{
    // Halaman Index - menampilkan semua data nilai_peserta
    public function index()
    {
        $nilaiPeserta = DB::table('nilai_peserta')->get();
        return view('siswa.eas_index', ['nilaiPeserta' => $nilaiPeserta]);
    }

    // Halaman Form Tambah Data
    public function tambah()
    {
        return view('siswa.eas_tambah');
    }

    // Proses simpan data baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'nopeserta'    => 'required|string|max:5',
            'nilaiteori'   => 'required|integer|min:0|max:100',
            'nilaipraktek' => 'required|integer|min:0|max:100',
        ]);

        DB::table('nilai_peserta')->insert([
            'nopeserta'    => $request->nopeserta,
            'nilaiteori'   => $request->nilaiteori,
            'nilaipraktek' => $request->nilaipraktek,
        ]);

        return redirect('/eas');
    }
}
