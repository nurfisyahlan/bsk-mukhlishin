<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/monitoring-pembayaran', function () {
    return view('monitoring-pembayaran');
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

Route::get('/lainnya', function () {
    return view('lainnya');
});
