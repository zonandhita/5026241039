<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class maskerController extends Controller
{
    public function indexMasker()
    {
        $masker = DB::table('masker')->paginate(10);
        return view('index_masker', ['masker' => $masker]);
    }

    public function cariMasker(Request $request)
    {
        $cari = $request->cari;
        $masker = DB::table('masker')
            ->where('merkmasker', 'like', "%" . $cari . "%")
            ->paginate();
        return view('index_masker', ['masker' => $masker]);
    }

    public function tambahMasker()
    {
        return view('tambah_masker');
    }

    public function storeMasker(Request $request)
    {
        DB::table('masker')->insert([
            'merkmasker'  => $request->merk,
            'stockmasker' => $request->stock,
            'tersedia'    => $request->tersedia
        ]);
        return redirect('/masker');
    }

    public function editMasker($id)
    {
        $masker = DB::table('masker')->where('kodemasker', $id)->get();
        return view('edit_masker', ['masker' => $masker]);
    }

    public function updateMasker(Request $request)
    {
        DB::table('masker')->where('kodemasker', $request->id)->update([
            'merkmasker'  => $request->merk,
            'stockmasker' => $request->stock,
            'tersedia'    => $request->tersedia
        ]);
        return redirect('/masker');
    }

    public function hapusMasker($id)
    {
        DB::table('masker')->where('kodemasker', $id)->delete();
        return redirect('/masker');
    }
}
