<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_API;
use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_Device;
use App\Http\Controllers\C_Mahasiswa;

Route::get('/', [C_Home::class, 'homepage']);
Route::get('/beranda', [C_Home::class, 'berandapage']);

Route::post('/device/status/change/proses', [C_Device::class, 'prosesChangeStatusDevice']);

Route::get('/mahasiswa', [C_Mahasiswa::class, 'dataMahasiswa']);

Route::get('/api/device/status', [C_API::class, 'cekStatusDevice']);

Route::post('/api/access/id-card/cek', [C_API::class, 'cekAksesIdCard']);

