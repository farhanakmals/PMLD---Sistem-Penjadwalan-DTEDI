<?php

namespace App\Http\Controllers;

use App\Models\Kurikulum;
use App\Models\DaftarDosen;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TestController extends Controller
{
    // public function index() 
    // {
    //     return view('test', [
    //         'kurikulum' => Kurikulum::all()
    //     ]);
    // }
    public function show() {
        $kurikulum = Kurikulum::all();
        $daftar_dosen = DaftarDosen::all();

        return view('test', compact('kurikulum', 'daftar_dosen'));
    }

    public function plotting() {
        $kurikulum = Kurikulum::all();
        $daftar_dosen = DaftarDosen::all();

        return view('testPlotting', compact('kurikulum', 'daftar_dosen'));
    }
}
