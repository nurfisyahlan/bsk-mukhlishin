<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard BSK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">    
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>

    @extends('layouts.admin')

    @section('content2')
        <div class="container mt-4">
            <h2 class="fw-bold mb-4">Inventaris</h2>

            <div class="col-lg-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">Inventaris</div>
                    <div class="card-body p-0">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
                                    <th>Kondisi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr><td>Kain Kafan</td><td>10</td><td>Baik</td></tr>
                                <tr><td>Kursi</td><td>20</td><td>Baik</td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
        </div>
    @endsection

</body>
</html>
