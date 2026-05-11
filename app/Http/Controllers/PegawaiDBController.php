<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PegawaiDBController extends Controller
{
	public function index1()
	{
    		// mengambil data dari table pegawai
		$pegawai = DB::table('pegawai')->paginate(10);

    		// mengirim data pegawai ke view index1
		return view('index1',['pegawai' => $pegawai]);

	}

	public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('pegawai')
		->where('pegawai_nama','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index1
		return view('index1',['pegawai' => $pegawai]);

	}

}
