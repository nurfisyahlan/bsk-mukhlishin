<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Dashboard BSK' }}</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- CSS Custom --}}
    <link href="{{ asset('css/user.css') }}" rel="stylesheet">
</head>
<body class="pt-2 px-5 pb-5">
    
    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Konten Halaman --}}
    <div class="container-fluid">
        @yield('content')
    </div>

   {{-- Footer, tampil kecuali di welcome --}}
    @if (!Request::is('/'))
        @include('layouts.footer')
    @endif    

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
