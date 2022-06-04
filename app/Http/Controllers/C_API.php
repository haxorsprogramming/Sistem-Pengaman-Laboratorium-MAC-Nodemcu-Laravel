<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\M_State;
use App\Models\M_Mahasiswa;
use App\Models\M_Scan_Data;

class C_API extends Controller
{
    public function cekStatusDevice()
    {
        $dataStatusDevice = M_State::where('nama_state', 'STATUS_DEVICE') -> first();
        $sd = $dataStatusDevice -> value;
        return $sd;
    }
    public function cekAksesIdCard(Request $request)
    {
        $waktu = date('Y-m-d H:i:s');
        $sd = new M_Scan_Data();
        $sd -> kd_scan = Str::uuid();
        $sd -> id_card = $request -> idcard;
        $sd -> waktu_update = $waktu;
        $sd -> save();
        $idCard = $request -> idcard;
        $cekId = M_Mahasiswa::where('kd_id_card', $idCard) -> count();
        if($cekId > 0){
            return "SUCCESS";
        }else{
            return "NO_ID";
        }
        
    }
}
