<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\prodiModel;

class prodi extends Controller
{
    public function index()
    {
        $data = prodiModel::all();
        return view('prodi/prodi', compact('data'));
    }
    public function tambah()
    {

        return view('prodi/tambahprodi');
    }
    public function prosestambah(Request $request)
    {
        $data['kode'] = $request->kode;
        $data['nama'] = $request->nama;
        $data['deskripsi'] = $request->deskripsi;
        $data['gambar'] = $request->gambar;
        $data['status'] = $request->status;
        $data['user_id'] = $request->user_id;

        prodiModel::Create($data);
        return redirect('/prodi');
    }
}
