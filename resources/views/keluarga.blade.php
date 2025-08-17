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
            <h2 class="fw-bold text-center mb-4">Data Keluarga</h4>

            <div class="row g-4 mb-4">
                <!-- Filter & Search -->
                
                
                <!-- Tabel -->
                <div class="col-12">
                    <div class="tabel-saldo">
                        <div class="d-flex flex-wrap gap-2 align-items-center mb-3">
                            <!-- Input cari -->
                            <input type="text" class="form-control w-auto" placeholder="Cari Nomor / Nama Kepala Keluarga">
                            <button class="btn btn-primary" type="button">
                                <i class="bi bi-search"></i>
                            </button>
        
                            <!-- Filter RT/RW -->
                            <select class="form-select w-auto">
                                <option value="">Filter RT/RW</option>
                                <option value="1">RT 01/RW 01</option>
                                <option value="2">RT 02/RW 01</option>
                                <option value="3">RT 03/RW 02</option>
                                <!-- tambah opsi sesuai kebutuhan -->
                            </select>

                            <!-- Filter Status -->
                            <select class="form-select w-auto">
                                <option value="">Status</option>
                                <option value="1">Aktif</option>
                                <option value="2">Ditangguhkan</option>
                                <option value="3">Tidak Aktif</option>
                                <!-- tambah opsi sesuai kebutuhan -->
                            </select>
                                
                        </div>
                    
                        <table class="table table-bordered table-sm text-center mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nomor Anggota</th>
                                    <th>Nama Kepala Keluarga</th>
                                    <th>Jumlah Anggota Keluarga</th>
                                    <th>RT/RW</th>
                                    <th>Status</th>
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
                                    <td>
                                        <button class="btn btn-primary btn-sm">
                                            <i class="bi bi-info-circle"></i> Info
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        @endsection
            

</body>
</html>
