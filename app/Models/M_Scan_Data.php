<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\M_Mahasiswa;

class M_Scan_Data extends Model
{
    protected $table = "tbl_scan_data";
    protected $fillable = [
        'id',
        'kd_scan',
        'id_card',
        'waktu_update'
    ];
    public $timestamps = false;
    
    public function cekIdCardData($idCard)
    {
        $cekTotal = M_Mahasiswa::where('kd_id_card', $idCard) -> count();
        if($cekTotal < 1){
            return "tidak ada";
        }else{
            $dataMhs = M_Mahasiswa::where('kd_id_card', $idCard) -> first();
            return $dataMhs -> nama_mahasiswa;
        }
    }

    public function getIntervalCheckIn()
    {
        
    }

}
