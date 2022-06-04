<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\M_State;

class C_Home extends Controller
{
    public function homepage()
    {   
        return view('home');
    }
    public function berandapage()
    {
        $dataStatusDevice = M_State::where('nama_state', 'STATUS_DEVICE') -> first();
        $sd = $dataStatusDevice -> value;
        $dr = ['sd' => $sd];
        return view('beranda', $dr);
    }
}
