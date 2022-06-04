<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_State extends Model
{
    protected $table = "tbl_state";
    protected $fillable = [
        'nama_state',
        'value'
    ];
    public $timestamps = false;
}
