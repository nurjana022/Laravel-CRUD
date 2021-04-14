<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{

    public function index()
    {
        $data_pasien = \App\Models\Pasien::all();
        return view('pasien.index',['data_pasien' => $data_pasien]);
    }

    public function create(Request $request)
    {
        $request->validate([
            'nama_pasien' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'pekerjaan' => 'required',
            'keluhan' => 'required',
            'nama_dokter' => 'required',
        ]);
        
        \App\Models\Pasien::create($request->all());
        return redirect('/home')->with('status', 'Data sudah berhasil didaftarkan!');
    }

    public function home(Request $request)
    {
        return view('index2');
    }
}
