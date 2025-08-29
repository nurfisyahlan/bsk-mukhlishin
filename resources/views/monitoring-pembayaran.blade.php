<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard BSK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="{{ asset('css/user.css') }}" rel="stylesheet">

</head>
<body class="pt-2 px-5 pb-5">

    @extends('layouts.app')

    @section('content')
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="fw-bold text-center flex-grow-1">Monitoring Pembayaran</h2>
                <button class="btn btn-primary btn-sm ms-3" data-bs-toggle="modal" data-bs-target="#cekkutipan">
                    <i class="bi bi-calendar-range"></i> Cek Kutipan
                </button>
            </div>

            <div class="row g-4 mb-4">
                {{-- Kolom kiri: Tabel --}}
                <div class="col-md-6">
                    <div class="border rounded p-3">
                        <h5 class="fw-bold mb-1">Rekap Pembayaran</h5>
                        <div class="d-flex gap-2 mb-3 flex-wrap">
                            <!-- Cetak PDF -->
                            <button class="btn btn-outline-danger btn-sm">
                                <i class="fas fa-file-pdf"></i> PDF
                            </button>

                            <!-- Cari -->
                            <button class="btn btn-outline-primary btn-sm">
                                <i class="fas fa-search"></i> Cari
                            </button>

                            <!-- Filter RT/RW -->
                            <div class="dropdown">
                                <button class="btn btn-outline-success btn-sm dropdown-toggle" type="button" id="filterRTRW" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fas fa-filter"></i> RT/RW
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="filterRTRW">
                                    <li><a class="dropdown-item" href="#" data-filter="RT 01 RW 04">RT 01 RW 04</a></li>
                                    <li><a class="dropdown-item" href="#" data-filter="RT 02 RW 04">RT 02 RW 04</a></li>
                                    <li><a class="dropdown-item" href="#" data-filter="RT 03 RW 04">RT 03 RW 04</a></li>
                                    <li><a class="dropdown-item" href="#" data-filter="RT 03 RW 03">RT 03 RW 03</a></li>
                                    <li><a class="dropdown-item" href="#" data-filter="RW 05">RW 05</a></li>
                                </ul>
                            </div>
                        </div>
                        <div style="height: 300px; overflow-y: auto;">
                            <table class="table table-bordered table-sm text-center mb-0">
                                <thead class="table-light">
                                    <tr>
                                        <th>Kepala Keluarga</th>
                                        <th>Tunggakan</th>
                                        <th>Tagihan</th>
                                        <th>Cek Detail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>                                        
                                        <td><span class="badge bg-success">Lunas</span></td>
                                        <td></td>
                                        <td></td>
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
                    
                    <div class="tahun-pembayaran">
                        <div class="d-flex overflow-auto gap-3">
                            <!-- Tahun 2023 -->
                            <div class="p-1 d-flex flex-column mt-2" style="min-width: 300px;">
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
                                    <div class="p-2">
                                        <p>Keterangan: Menunggak ... Bulan <br> Tagihan ... </p>
                                        
                                    </div>
                            </div>

                            <!-- Tahun 2024 -->
                            <div class="p-1 d-flex flex-column mt-2" style="min-width: 300px;">
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
                                <div class="p-2">
                                    <p>Keterangan: Menunggak ... Bulan <br> Tagihan ... </p>
                                    
                                </div>
                            </div>

                            <!-- Tahun 2025 -->
                            <div class="p-1 d-flex flex-column mt-2" style="min-width: 300px;">
                                <h6 class="fw-bold">Tahun 2025</h6>
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
                                <div class="p-2">
                                    <p>Keterangan: Menunggak ... Bulan <br> Tagihan ... </p>
                                    
                                </div>
                            </div>

                            <!-- Tahun 2026 -->
                            <div class="p-1 d-flex flex-column mt-2" style="min-width: 300px;">
                                <h6 class="fw-bold">Tahun 2026</h6>
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
                                <div class="p-2">
                                    <p>Keterangan: Menunggak ... Bulan <br> Tagihan ... </p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <!-- Modal Periode -->
        <div class="modal fade" id="cekkutipan" tabindex="-1" aria-labelledby="periodeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="periodeModalLabel">Laporan Berdasarkan Kutipan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
              </div>
              <div class="modal-body">

                <!-- Filter Periode -->
                <div class="row mb-3">
                  <div class="col-md-3">
                    <select id="statusFilter" class="form-select">
                        <option value="" hidden>Pilih Periode</option>
                        <option value="kutipan">Periode I</option>                                                                            
                    </select>
                  </div>                 
                  <div class="col-md-3">
                    <select id="statusFilter" class="form-select">
                        <option value="" hidden>Pilih Kutipan</option>
                        <option value="kutipan">Kutipan I</option>                                                                            
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
                      <th>Nama Kepala Keluarga</th>
                      <th>Yang dibayar</th>
                      <th>Masuk</th>                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td>01-08-2025</td>
                      <td></td>
                      <td>5 Bulan</td>
                      <td>Rp. 50.000-</td>                      
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
