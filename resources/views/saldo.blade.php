<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard BSK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="{{ asset('css/dashboard2.css') }}" rel="stylesheet">

</head>
<body class="pt-2 px-5 pb-5">

    @extends('layouts.app')

    @section('content')
        <div class="container">
            <h2 class="fw-bold text-center mb-4">Laporan Keuangan</h4>

            <div class="row g-4 mb-4">
                <div class="tabel-saldo">
                    <table class="table table-bordered table-sm text-center mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Uraian</th>
                                <th>Masuk</th>
                                <th>Keluar</th>
                                <th>Saldo</th>
                                <th>Cek Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>                                        
                                <td></td>                                        
                                <td></td>                                        
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><button class="btn btn-primary btn-sm">
                                        <i class="bi bi-info-circle"></i> Info
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endsection
            

</body>
</html>
