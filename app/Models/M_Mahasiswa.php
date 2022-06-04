<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_Mahasiswa extends Model
{
    protected $table = "tbl_mahasiswa";
    protected $fillable = [
        'kd_mahasiswa',
        'nama_mahasiswa',
        'jk',
        'prodi',
        'nim',
        'kd_id_card'
    ];
    public $timestamps = false;
}
