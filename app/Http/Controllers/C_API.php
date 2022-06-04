<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\M_State;

class C_API extends Controller
{
    public function cekStatusDevice()
    {
        $dataStatusDevice = M_State::where('nama_state', 'STATUS_DEVICE') -> first();
        $sd = $dataStatusDevice -> value;
        return $sd;
    }
}
