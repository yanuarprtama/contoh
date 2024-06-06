<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alatModel;

class alat extends Controller
{
    public function index()
    {
        $data = alatModel::all();
        return view('alat/alat', compact('data'));
    }
    public function tambah()
    {

        return view('alat/tambahalat');
    }
    public function prosestambah(Request $request)
    {

        $data['kode'] = $request->kode;
        $data['nama'] = $request->nama;
        $data['deskripsi'] = $request->deskripsi;
        $data['gambar'] = $request->gambar;
        $data['status'] = 'TERSEDIA';
        $data['stok'] = $request->stok;

        alatModel::Create($data);
        return redirect('/alat');
    }
}
