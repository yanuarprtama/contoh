<?php

namespace App\Http\Controllers;

use App\Models\peminjamanAlatModel;
use Illuminate\Http\Request;

class peminjamanAlat extends Controller
{
    // public function index()
    // {
    //     $data = peminjamanAlatModel::all();
    //     return view('peminjaman/peminjamanAlat', compact('data'));
    // }
    public function index()
    {
        // $data = peminjamanLabModel::all();
        // $lab = alat::all();
        // return view('peminjaman/peminjamanLab', compact('data'));
        // return view('peminjaman/formalat', [
        //     // 'data' => $data,
        //     'lab' => $lab,
        // ]);
    }

    public function tambah(Request $request)
    {
        // dd($request->all());
        peminjamanAlatModel::create($request->all());
        return redirect('dashboard');
    }
}
