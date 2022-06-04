<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_API;
use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_Device;

Route::get('/', [C_Home::class, 'homepage']);
Route::get('/beranda', [C_Home::class, 'berandapage']);

Route::post('/device/status/change/proses', [C_Device::class, 'prosesChangeStatusDevice']);

Route::get('/api/device/status', [C_API::class, 'cekStatusDevice']);
