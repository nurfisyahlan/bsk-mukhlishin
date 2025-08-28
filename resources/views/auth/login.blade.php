@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <h3 class="mb-4">Login Web BSK</h3>
    <form>
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
        <button type="submit" class="btn bg-oren w-100">Login</button>
    </form>
    <p class="mt-3">Belum punya akun? <a href="{{ url('register') }}">Register</a></p>
@endsection
