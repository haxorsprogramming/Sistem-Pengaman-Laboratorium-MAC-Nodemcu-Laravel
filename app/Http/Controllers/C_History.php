<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\M_Scan_Data;


class C_History extends Controller
{
    public function dataHistory()
    {
        $dataHistory = M_Scan_Data::orderByRaw('id DESC') -> get();
        $dr = ['dataHistory' => $dataHistory];
        return view('history.history', $dr);
    }
}
