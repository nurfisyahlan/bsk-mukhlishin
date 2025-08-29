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
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold text-center flex-grow-1">Laporan Keuangan</h2>
                <button class="btn btn-primary btn-sm ms-3" data-bs-toggle="modal" data-bs-target="#cekperiode">
                    <i class="bi bi-calendar-range"></i> Cek Periode
                </button>
            </div>

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


        <!-- Modal Periode -->
        <div class="modal fade" id="cekperiode" tabindex="-1" aria-labelledby="periodeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="periodeModalLabel">Laporan Berdasarkan Periode</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <div class="modal-body">

                <!-- Filter Periode -->
                <div class="row mb-3">
                  <div class="col-md-5">
                    <select id="statusFilter" class="form-select">
                        <option value="" hidden>Pilih Periode</option>
                        <option value="kutipan">Periode I</option>                                                                            
                    </select>
                  </div>                 
                  <div class="col-md-2 d-flex align-items-end">
                    <button class="btn btn-success w-100"><i class="bi bi-search"></i> Cari</button>
                  </div>
                </div>

                <!-- Tabel Periode -->
                <table class="table table-bordered table-striped text-center">
                  <thead class="table-primary">
                    <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>Uraian</th>
                      <th>Masuk</th>
                      <th>Keluar</th>
                      <th>Saldo</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>01-08-2025</td>
                      <td>Iuran Bulanan</td>
                      <td>Rp500.000</td>
                      <td>-</td>
                      <td>Rp500.000</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>05-08-2025</td>
                      <td>Pembelian Perlengkapan</td>
                      <td>-</td>
                      <td>Rp300.000</td>
                      <td>Rp200.000</td>
                    </tr>
                  </tbody>
                </table>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
              </div>
            </div>
          </div>
        </div>

        @endsection
            

</body>
</html>
