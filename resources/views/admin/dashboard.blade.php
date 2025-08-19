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
            <h2 class="fw-bold mb-4">Beranda</h2>

            <!-- Grid Tabel -->
            <div class="row g-4">
                <div class="col-lg-6">
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
                
                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white">Data Keluarga</div>
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
                                </div>
                            </div>

                            <!-- Scrollable Table -->
                            <div class="table-scroll2">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>Kepala Keluarga</th>
                                            <th>Jumlah Keluarga</th>
                                            <th>Rincian</th>
                                        </tr>
                                    </thead>
                                    <tbody id="paymentTable">
                                        <tr><td>Contoh 1</td><td>Januari</td><td>info</td></tr>
                                        <tr><td>Contoh 2</td><td>Februari</td><td>info</td></tr>
                                        <tr><td>Contoh 3</td><td>Maret</td><td>info</td></tr>
                                        <tr><td>Contoh 4</td><td>April</td><td>info</td></tr>
                                        <tr><td>Contoh 5</td><td>Mei</td><td>info</td></tr>
                                        <tr><td>Contoh 6</td><td>Juni</td><td>info</td></tr>
                                        <!-- Data panjang -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-light">Rekap Saldo Masuk/Keluar</div>
                        <div class="card-body p-0">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Keterangan</th>
                                        <th>Masuk</th>
                                        <th>Keluar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>01-08-2025</td><td>Iuran Bulanan</td><td>Rp500.000</td><td>-</td></tr>
                                    <tr><td>03-08-2025</td><td>Biaya Pemakaman</td><td>-</td><td>Rp300.000</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
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
                    
        </div>
    @endsection

</body>
</html>
