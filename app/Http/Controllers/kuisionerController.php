<?php

namespace App\Http\Controllers;

use App\Models\kritik;
use Illuminate\Http\Request;
use App\Models\kuisioner;

class kuisionerController extends Controller
{
    public function index()
    {
        $data = kuisioner::all();
        return view('kuisioner/pertanyaan', compact('data'));
    }
    public function kritiksaran()
    {
        $data = kritik::all();
        return view('kuisioner/kritiksaran', compact('data'));
    }
    public function tambahpertanyaan()
    {
        return view('kuisioner/tambahpertanyaan');
    }
    public function prosestambahpertanyaan(Request $request)
    {
        // $request->validate(
        //     [
        //         'pertanyaan'    => 'required',
        //         'tipe'          => 'required'
        //     ],
        //     [
        //         'pertanyaan.required' => 'Kolom pertanyaan harus diisi',
        //         'tipe.required'     => 'Kolom tipe harus diisi'
        //     ]
        // );
        $data['pertanyaan'] = $request->pertanyaan;
        $data['tipe'] = $request->tipe;
        $data['jawaban'] = $request->jawaban;

        kuisioner::Create($data);
        return redirect('/pertanyaan');
    }
}
