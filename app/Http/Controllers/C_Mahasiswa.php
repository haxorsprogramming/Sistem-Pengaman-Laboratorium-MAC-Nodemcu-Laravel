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
    public function tambahMahasiswa()
    {
        return view('mahasiswa.tambahMahasiswa');
    }
    public function proseTambahMahasiswa(Request $request)
    {
        // {'nama':nama, 'jk':jk, 'prodi':prodi, 'nim':nim, 'idCard':idCard} 
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
}
