<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class C_History extends Controller
{
    public function dataHistory()
    {
        return view('history.history');
    }
}
