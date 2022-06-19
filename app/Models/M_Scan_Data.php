<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
    
    public function getIntervalCheckIn()
    {
        
    }

}
