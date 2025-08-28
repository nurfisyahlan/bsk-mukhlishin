@extends('layouts.auth')

@section('title', 'Register')

@section('content')
    <h3 class="mb-4">Register Web BSK</h3>
    <form>
        <div class="mb-3 text-start">
            <label class="form-label">Nama Kepala Keluarga</label>
            <input type="text" class="form-control" placeholder="Masukkan nama">
        </div>
        <div class="mb-3 text-start">
            <label class="form-label">Username</label>
            <input type="text" class="form-control" placeholder="Masukkan email atau username">
        </div>
        <div class="mb-3 text-start">
            <label class="form-label">Password</label>
            <div class="input-group">
                <input type="password" class="form-control" id="password" placeholder="Masukkan password">
                <button class="btn btn-outline-secondary" type="button" id="togglePassword">
                    <i class="bi bi-eye"></i>
                </button>
            </div>
        </div>
        <div class="mb-3 text-start">
            <label class="form-label">Konfirmasi Password</label>
            <input type="password" class="form-control" placeholder="Ulangi password">
        </div>
        <button type="submit" class="btn bg-oren w-100">Register</button>
    </form>
    <p class="mt-3">Sudah punya akun? <a href="{{ url('login') }}">Login</a></p>
    
@endsection
