<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lab;

class labController extends Controller
{
    public function index()
    {
        $data = Lab::all();
        return view('lab/lab', compact('data'));
    }
    public function tambah()
    {
        return view('lab/tambah');
    }
    public function prosestambahlab(Request $request)
    {
        // $request->validate(
        //     [
        //         'kode'  => 'required',
        //         'nama'    => 'required',
        //         'lokasi'  => 'required',
        //         'deskripsi'  => 'required',
        //         'gambar'  => 'required',
        //         'prodi_id'  => 'required',
        //         'status_ketersediaan'  => 'required',
        //         'kategori'    => 'required',
        //         'status'    => 'required',
        //         'user_id'  => 'required'
        //     ],
        //     [
        //         'kode.required' => 'Nomor Induk Harus Diisi',
        //         'nomorinduk.required' => 'Password Harus Diisi',
        //         'password.required' => 'Nomor Induk Harus Diisi',
        //         'role.required' => 'Password Harus Diisi'
        //     ]
        // );

        //if ($validated->fails()) return redirect()->back()->$data['nama'] = $request->nama;
        $data['kode'] = $request->kode;
        $data['nama'] = $request->nama;
        $data['lokasi'] = $request->lokasi;
        $data['deskripsi'] = $request->deskripsi;
        $data['gambar'] = $request->gambar;
        $data['virtualtour_url'] = $request->virtualtour_url;
        $data['prodi_id'] = $request->prodi_id;
        $data['status_ketersediaan'] = 'TERSEDIA';
        $data['kategori'] = $request->kategori;
        $data['status'] = $request->status;
        $data['user_id'] = $request->user_id;

        Lab::Create($data);
        return redirect('/lab');
    }
}
