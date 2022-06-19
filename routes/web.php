<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\C_API;
use App\Http\Controllers\C_Home;
use App\Http\Controllers\C_Device;
use App\Http\Controllers\C_Mahasiswa;
use App\Http\Controllers\C_History;

Route::get('/', [C_Home::class, 'homepage']);
Route::get('/beranda', [C_Home::class, 'berandapage']);

Route::post('/device/status/change/proses', [C_Device::class, 'prosesChangeStatusDevice']);
Route::post('/device/set-read-rf-id',[C_Device::class, 'setReadRFID']);
Route::post('/device/set-read-rf-id/rollback', [C_Device::class, 'rollBack']);

Route::get('/mahasiswa', [C_Mahasiswa::class, 'dataMahasiswa']);
Route::get('/mahasiswa/tambah', [C_Mahasiswa::class, 'tambahMahasiswa']);
Route::post('/mahasiswa/tambah/proses', [C_Mahasiswa::class, 'prosesTambahMahasiswa']);
Route::post('/mahasiswa/hapus/proses', [C_Mahasiswa::class, 'prosesHapusMahasiswa']);

Route::get('/api/device/status', [C_API::class, 'cekStatusDevice']);

Route::post('/api/access/id-card/cek', [C_API::class, 'cekAksesIdCard']);

Route::get('/history', [C_History::class, 'dataHistory']);

