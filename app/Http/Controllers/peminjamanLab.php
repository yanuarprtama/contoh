<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peminjamanLabModel;
use App\Models\Lab;

class peminjamanLab extends Controller
{
    public function index()
    {
        // $data = peminjamanLabModel::all();
        $lab = Lab::all();
        // return view('peminjaman/peminjamanLab', compact('data'));
        return view('peminjaman/formlab', [
            // 'data' => $data,
            'lab' => $lab,
        ]);
    }

    public function tambah(Request $request)
    {
        // dd($request->all());
        peminjamanLabModel::create($request->all());
        return redirect('dashboard');
    }
}
