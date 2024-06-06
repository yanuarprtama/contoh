<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\administratorModel;
use Illuminate\Support\Facades\Hash;

class administrator extends Controller
{
    public function index()
    {
        $data = administratorModel::all();
        return view('administrator/administrator', compact('data'));
    }
    public function tambahadmin()
    {
        return view('administrator/tambahadmin');
    }
    public function prosestambahadmin(Request $request)
    {
        // $validate = $request->validated();

        // $admin = new Administrator;
        // $admin->nama = $request->nama;
        // $admin->nomorinduk = $request->nomorinduk;
        // $admin->password = $request->password;
        // $admin->role = $request->role;
        $request->validate(
            [
                'nama'  => 'required',
                'nomorinduk'    => 'required',
                'password'  => 'required',
                'role'  => 'required'
            ],
            [
                'nama.required' => 'Nomor Induk Harus Diisi',
                'nomorinduk.required' => 'Password Harus Diisi',
                'password.required' => 'Nomor Induk Harus Diisi',
                'role.required' => 'Password Harus Diisi'
            ]
        );

        //if ($validated->fails()) return redirect()->back()->$data['nama'] = $request->nama;
        $data['nomorinduk'] = $request->nomorinduk;
        $data['nama'] = $request->nama;
        $data['password'] = Hash::make($request->password);
        $data['role'] = $request->role;

        administratorModel::Create($data);
        return redirect('/administrator');
    }
}
