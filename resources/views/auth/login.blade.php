@extends('layouts.auth')

@section('title', 'Login')

@section('content')
    <h3 class="mb-4">Login Web BSK</h3>
    <form>
        <div class="mb-3 text-start">
            <label class="form-label">Email / Username</label>
            <input type="text" class="form-control" placeholder="Masukkan email atau username">
        </div>
        <div class="mb-3 text-start">
            <label class="form-label">Password</label>
            <input type="password" class="form-control" placeholder="Masukkan password">
        </div>
        <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
    <p class="mt-3">Belum punya akun? <a href="{{ url('register') }}">Register</a></p>
@endsection
