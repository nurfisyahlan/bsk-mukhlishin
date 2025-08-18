<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/monitoring-pembayaran', function () {
    return view('monitoring-pembayaran');
});

Route::get('/admin', function () {
    return view('admin-dashboard');
});

Route::get('/inventaris', function () {
    return view('inventaris');
});

Route::get('/keluarga', function () {
    return view('keluarga');
});

Route::get('/saldo', function () {
    return view('saldo');
});

Route::get('/kematian', function () {
    return view('kematian');
});

Route::get('/pengumuman', function () {
    return view('pengumuman');
});

Route::get('/admin-dashboard', function () {
    return view('admin/dashboard');
});

Route::get('/admin-keluarga', function () {
    return view('admin/keluarga');
});
