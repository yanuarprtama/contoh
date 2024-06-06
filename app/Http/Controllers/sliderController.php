<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slider;

class sliderController extends Controller
{
    public function index()
    {
        $data = slider::all();
        return view('konten/slider', compact('data'));
    }
}
