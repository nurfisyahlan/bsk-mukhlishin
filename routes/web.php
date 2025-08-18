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

Route::get('/admin-inventaris', function () {
    return view('admin/inventaris');
});

Route::get('/admin-saldo', function () {
    return view('admin/saldo');
});

Route::get('/admin-monitoring-pembayaran', function () {
    return view('admin/monitoring-pembayaran');
});

Route::get('/admin-kematian', function () {
    return view('admin/kematian');
});

Route::get('/admin-pengumuman', function () {
    return view('admin/pengumuman');
});
