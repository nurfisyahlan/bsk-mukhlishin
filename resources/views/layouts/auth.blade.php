<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web BSK - @yield('title')</title>

    {{-- Bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

</head>
<body class="d-flex justify-content-center align-items-center vh-100">

    <div class="auth-card text-center">
        {{-- Logo (opsional) --}}
        <img src="{{ asset('images/logo.png') }}" alt="Logo Web BSK" class="auth-logo">

        {{-- Tempat isi konten login/register --}}
        @yield('content')
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
