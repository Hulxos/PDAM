<?php

use Illuminate\Support\Facades\Route;
// Dashboard
route::get('/', function () {
    return view('dashboard/Dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard/Dashboard');
});
// Pengaduan
Route::get('/pengaduan', function () {
    return view('pengaduan/Pengaduan');
});
// Sambungan
Route::get('/sambungan', function () {
    return view('sambungan/Sambungan');
});
// Karyawan
Route::get('/karyawan', function () {
    return view('karyawan/Karyawan');
});

route::get('/daftarkaryawan', function () {
    return view('karyawan/DaftarKaryawan');
});

Route::get('/karyawan/edit', function () {
    return view('karyawan/EditKaryawan');
});

// Pengguna

route::get('/pengguna', function () {
    return view('pengguna/Pengguna');
});
