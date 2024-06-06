<?php

namespace App\Http\Controllers;

use App\Models\pengembalianLabModel;
use Illuminate\Http\Request;

class pengembalianLab extends Controller
{
    public function index()
    {
        $data = pengembalianLabModel::all();
        return view('pengembalian/pengembalianLab', compact('data'));
    }
}
