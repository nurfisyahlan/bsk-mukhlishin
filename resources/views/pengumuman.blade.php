<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kematian - BSK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('css/dashboard2.css') }}" rel="stylesheet">
</head>
<body class="pt-2 px-5 pb-5">

@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fw-bold text-center mb-4">Pengumuman</h2>

    <!-- Filter & Search -->
    <div class="d-flex flex-wrap gap-2 align-items-center mb-4">
        <div class="input-group w-auto">
            <input type="text" class="form-control" placeholder="Cari Judul Pengumuman">
            <button class="btn btn-primary"><i class="bi bi-search"></i></button>
        </div>        
    </div>

    <!-- Card Berita Kematian -->
    <div class="card shadow-sm mb-3">
        <div class="card-body">
            <h5 class="card-title fw-bold">Berita Duka: Alm. H. Ramli bin Abdullah</h5>
            <p class="card-text text-muted mb-1"><i class="bi bi-calendar-event"></i> 15 Agustus 2025</p>
            <p class="card-text text-muted"><i class="bi bi-geo-alt"></i> RT 02/RW 01 - Masjid Mukhlisin</p>
            <p class="card-text">Telah berpulang ke rahmatullah salah satu anggota BSK. Klik detail untuk informasi selengkapnya.</p>
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal">
                <i class="bi bi-info-circle"></i> Detail
            </button>
        </div>
    </div>

    <!-- Modal Detail -->
    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title fw-bold" id="detailModalLabel">Berita Duka: Alm. H. Ramli bin Abdullah</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
          </div>
          <div class="modal-body">
            <p><strong>Tanggal:</strong> 15 Agustus 2025</p>
            <p><strong>Nama Anggota:</strong> H. Ramli bin Abdullah</p>
            <p><strong>Keluarga:</strong> Kepala Keluarga Ramli Khatib</p>
            <p><strong>Alamat:</strong> RT 02/RW 01 - Kelurahan X, Pekanbaru</p>
            <p><strong>Status Santunan:</strong> Sudah diberikan</p>
            <hr>
            <p>
                Dengan penuh duka cita, keluarga besar BSK Masjid Mukhlisin mengabarkan bahwa 
                Alm. H. Ramli bin Abdullah telah berpulang ke rahmatullah pada 15 Agustus 2025. 
                Semoga Allah SWT menerima amal ibadah beliau dan memberikan tempat terbaik di sisi-Nya. 
                Amin ya Rabbal Alamin.
            </p>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
