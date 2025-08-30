<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? ' Admin - Dashboard BSK' }}</title>

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    {{-- CSS Custom --}}
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>
    <div class="d-flex" id="wrapper">
        {{-- Sidebar --}}
        @include('layouts.admin-sidebar')

        {{-- Page Content --}}
        <div id="content" class="flex-grow-1">
            {{-- Navbar --}}
            @include('layouts.admin-navbar')

            {{-- Konten Halaman --}}
            <div class="container mt-3">
                @yield('content2')
            </div>

            {{-- Footer --}}
            <footer class="mt-4 text-center">
                &copy; {{ date('Y') }} Badan Sosial Kematian - Semua Hak Dilindungi
            </footer>
        </div>
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Sidebar Toggle Script --}}
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function () {
            document.getElementById('sidebar').classList.toggle('collapsed');
        });
    </script>
</body>
</html>
