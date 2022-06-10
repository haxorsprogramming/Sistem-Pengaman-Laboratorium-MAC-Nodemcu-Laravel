<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
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
    public function prosesTambahMahasiswa(Request $request)
    {
        // {'nama':nama, 'jk':jk, 'prodi':prodi, 'nim':nim, 'idCard':idCard} 
        $mhs = new M_Mahasiswa();
        $mhs -> kd_mahasiswa = Str::uuid();
        $mhs -> nama_mahasiswa = $request -> nama;
        $mhs -> jk = $request -> jk;
        $mhs -> prodi = $request -> prodi;
        $mhs -> nim = $request -> nim;
        $mhs -> kd_id_card = $request -> idCard;
        $mhs -> save();
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
    public function prosesHapusMahasiswa(Request $request)
    {
        // {'kdMhs':kdMhs}
        M_Mahasiswa::where('kd_mahasiswa', $request -> kdMhs) -> delete();
        $dr = ['status' => 'sukses'];
        return \Response::json($dr);
    }
}
