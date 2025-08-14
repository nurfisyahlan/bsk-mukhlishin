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
        <!-- Header -->
        <div class="mb-3">
            <h2 class="mb-0 fw-bold">Badan Sosial Kematian</h2>
            <h5 class="text-secondary">Masjid Mukhlisin</h5>
        </div>

        <div class="row g-4">
            <!-- Left: Search Box -->
            <div class="col-md-6">
                <div class="search-box mb-4">
                    <!-- kosong untuk area data -->
                </div>
                <div class="d-flex">
                    <input type="text" class="form-control search-input" placeholder="Cari nomor anggota/nama kepala keluarga">
                    <button class="search-btn">cari</button>
                </div>
            </div>

            <!-- Right: Info Cards -->
            <div class="col-md-6">
                <div class="d-flex gap-4 text-center">
                    <div>
                        <h4>150+</h4>
                        <p>KK</p>
                    </div>
                    <div>
                        <h4>500+</h4>
                        <p>Anggota</p>
                    </div>
                    <div>
                        <h4>5</h4>
                        <p>RT/RW</p>
                    </div>
                </div>

                <div class="row g-3 mb-2 justify-content-end">
                    <div class="col-6">
                        <a href="/monitoring-pembayaran" style="color:black; text-decoration:none;">
                            <div class="info-card">
                                <div class="info-icon">📡</div>
                                Pemantauan<br>Pembayaran
                            </div>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="/saldo" style="color:black; text-decoration:none;">
                            <div class="info-card">
                                <div class="info-icon">📷</div>
                                Laporan<br>Keuangan
                            </div>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="/inventaris" style="color:black; text-decoration:none;">
                            <div class="info-card">
                                <div class="info-icon">📋</div>
                                Daftar Inventaris
                            </div>
                        </a>
                    </div>
                    <div class="col-6">
                        <div class="info-card">
                            <div class="info-icon">➕</div>
                            Lainnya
                        </div>
                    </div>
                </div>

                <div>
                    Saldo Kas BSK (per ..../..../....)<br>
                    <span class="saldo-text">Rp. xx.xxx.xxx</span>
                </div>
            </div>
        </div>
    @endsection    

</body>
</html>
