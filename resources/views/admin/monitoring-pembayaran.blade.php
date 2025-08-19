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
            <h2 class="fw-bold mb-4">Monitoring Pembayaran</h2>

            <!-- Grid Tabel -->
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white">Monitoring Pembayaran</div>
                        <div class="table-wrapper">
                            <!-- Filter Bar -->
                            <div class="filter-bar">
                                <div class="row g-2">
                                    <div class="col-md-4">
                                        <input type="text" id="searchInput" class="form-control" placeholder="Cari nama...">
                                    </div>
                                    <div class="col-md-3">
                                        <select id="statusFilter" class="form-select">
                                            <option value="">RT/RW</option>
                                            <option value="01/04">01/04</option>                                            
                                            <option value="02/04">02/04</option>                                            
                                            <option value="03/04">03/04</option>                                            
                                            <option value="03/03">03/03</option>                                            
                                            <option value="RW05">RW 05</option>                                            
                                        </select>
                                    </div>
                                    <div class="col-md-3">
                                        <select id="statusFilter" class="form-select">
                                            <option value="">Status</option>
                                            <option value="Lunas">Lunas</option>
                                            <option value="Belum">Belum</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <!-- Scrollable Table -->
                            <div class="table-scroll">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Bulan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody id="paymentTable">
                                        <tr><td>Contoh 1</td><td>Januari</td><td>Lunas</td></tr>
                                        <tr><td>Contoh 2</td><td>Februari</td><td>Belum</td></tr>
                                        <tr><td>Contoh 3</td><td>Maret</td><td>Lunas</td></tr>
                                        <tr><td>Contoh 4</td><td>April</td><td>Belum</td></tr>
                                        <tr><td>Contoh 5</td><td>Mei</td><td>Lunas</td></tr>
                                        <tr><td>Contoh 6</td><td>Juni</td><td>Belum</td></tr>
                                        <!-- Data panjang -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                                
            </div>
                    
        </div>
    @endsection

</body>
</html>
