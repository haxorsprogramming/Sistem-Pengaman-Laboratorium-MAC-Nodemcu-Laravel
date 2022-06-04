<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\M_State;

class C_Device extends Controller
{
    public function prosesChangeStatusDevice(Request $request)
    {
        // {'command':command}
        $command = $request -> command;
        if($command == 'ready'){
            $value = "READY";
        }else if($command == 'add_access'){
            $value = "ADD_ACCESS";
        }else{
            $value = "TURN_OFF";
        }
        M_State::where('nama_state', 'STATUS_DEVICE') -> update(['value' => $value]);
        $dr = ['status' => 'sukses', 'command' => $command];
        return \Response::json($dr);
    }
}
