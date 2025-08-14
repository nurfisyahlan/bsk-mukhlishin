<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard BSK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('css/dashboard2.css') }}" rel="stylesheet">

</head>
<body class="pt-2 px-5 pb-5">

    @extends('layouts.app')

    @section('content')
        <div class="container">
            <h2 class="fw-bold text-center mb-4">Pemantauan Pembayaran</h4>

            <div class="row g-4 mb-4">
                {{-- Kolom kiri: Tabel --}}
                <div class="col-md-6">
                    <div class="border rounded p-3">
                        <div class="d-flex gap-2 mb-3">
                            <button class="btn btn-outline-secondary btn-sm">Cetak PDF</button>
                            <button class="btn btn-outline-secondary btn-sm">Unduh</button>
                            <button class="btn btn-outline-secondary btn-sm">Urutkan</button>
                        </div>
                        <div style="height: 300px; overflow-y: auto;">
                            <table class="table table-bordered table-sm text-center mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Bulan</th>
                                        <th>Tanggal Bayar</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Januari</td>
                                        <td>04/02/23</td>
                                        <td><span class="badge bg-success">Lunas</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                {{-- Kolom kanan: Detail --}}
                <div class="col-md-6">
                    <div class="mb-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="fw-bold mb-0">H. Ramli Khatib</h5>
                                <small>001/BSK/2019/1 | 2 Orang</small>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-outline-secondary btn-sm">Lihat Anggota Keluarga</button>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <!-- Tahun 2023 -->
                        <div class="col-md-6">
                            <h6 class="fw-bold">Tahun 2023</h6>                            
                                <table class="table table-bordered table-sm align-middle">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Bulan</th>
                                            <th>Tanggal Bayar</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Januari</td>
                                            <td>04/02/23</td>
                                            <td><span class="badge bg-success">Lunas</span></td>
                                        </tr>
                                        <tr>
                                            <td>Februari</td>
                                            <td>-</td>
                                            <td><span class="badge bg-danger">Belum</span></td>
                                        </tr>
                                        <tr>
                                            <td>Maret</td>
                                            <td>-</td>
                                            <td><span class="badge bg-danger">Belum</span></td>
                                        </tr>
                                        <tr>
                                            <td>April</td>
                                            <td>04/03/23</td>
                                            <td><span class="badge bg-success">Lunas</span></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Mei</td>
                                            <td>04/03/23</td>
                                            <td><span class="badge bg-success">Lunas</span></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Juni</td>
                                            <td>04/03/23</td>
                                            <td><span class="badge bg-success">Lunas</span></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Juli</td>
                                            <td>04/03/23</td>
                                            <td><span class="badge bg-success">Lunas</span></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Agustus</td>
                                            <td>04/03/23</td>
                                            <td><span class="badge bg-success">Lunas</span></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>September</td>
                                            <td>04/03/23</td>
                                            <td><span class="badge bg-success">Lunas</span></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Oktober</td>
                                            <td>04/03/23</td>
                                            <td><span class="badge bg-success">Lunas</span></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>November</td>
                                            <td>04/03/23</td>
                                            <td><span class="badge bg-success">Lunas</span></td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Desember</td>
                                            <td>04/03/23</td>
                                            <td><span class="badge bg-success">Lunas</span></td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                        </div>

                        <!-- Tahun 2024 -->
                        <div class="col-md-6">
                            <h6 class="fw-bold">Tahun 2024</h6>
                            <table class="table table-bordered table-sm align-middle">
                                <thead class="table-light">
                                    <tr>
                                        <th>Bulan</th>
                                        <th>Tanggal Bayar</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Januari</td>
                                        <td>04/02/23</td>
                                        <td><span class="badge bg-success">Lunas</span></td>
                                    </tr>
                                    <tr>
                                        <td>Februari</td>
                                        <td>-</td>
                                        <td><span class="badge bg-danger">Belum</span></td>
                                    </tr>
                                    <tr>
                                        <td>Maret</td>
                                        <td>-</td>
                                        <td><span class="badge bg-danger">Belum</span></td>
                                    </tr>
                                    <tr>
                                        <td>April</td>
                                        <td>04/03/23</td>
                                        <td><span class="badge bg-success">Lunas</span></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Mei</td>
                                        <td>04/03/23</td>
                                        <td><span class="badge bg-success">Lunas</span></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Juni</td>
                                        <td>04/03/23</td>
                                        <td><span class="badge bg-success">Lunas</span></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Juli</td>
                                        <td>04/03/23</td>
                                        <td><span class="badge bg-success">Lunas</span></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Agustus</td>
                                        <td>04/03/23</td>
                                        <td><span class="badge bg-success">Lunas</span></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>September</td>
                                        <td>04/03/23</td>
                                        <td><span class="badge bg-success">Lunas</span></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Oktober</td>
                                        <td>04/03/23</td>
                                        <td><span class="badge bg-success">Lunas</span></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>November</td>
                                        <td>04/03/23</td>
                                        <td><span class="badge bg-success">Lunas</span></td>
                                    </tr>
                                    
                                    <tr>
                                        <td>Desember</td>
                                        <td>04/03/23</td>
                                        <td><span class="badge bg-success">Lunas</span></td>
                                    </tr>
                                    
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
