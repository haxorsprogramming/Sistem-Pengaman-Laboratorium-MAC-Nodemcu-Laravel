<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\M_Mahasiswa;

class C_Mahasiswa extends Controller
{
    public function dataMahasiswa()
    {
        $dataMahasiswa = M_Mahasiswa::all();
        $dr = ['dataMahasiswa' => $dataMahasiswa];
        return view('mahasiswa.mahasiswa', $dr);
    }
}
