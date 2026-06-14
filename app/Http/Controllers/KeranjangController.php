<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$keranjangbelanja = DB::table('keranjangbelanja')->get();
        // $pegawai = DB::table('keranjangbelanja')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('indexKeranjang',['keranjangbelanja' => $keranjangbelanja]);
    }

    // method untuk menampilkan view form tambah pegawai
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahKeranjang');
	}

	// method untuk insert data ke table keranjang
	public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('keranjangbelanja')->insert([
			'KodeBarang' => $request->KodeBarang,
			'Jumlah' => $request->Jumlah,
			'Harga' => $request->Harga
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');
	}

	// method untuk hapus data pegawai
	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('keranjangbelanja')->where('ID',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/keranjangbelanja');
	}
}
