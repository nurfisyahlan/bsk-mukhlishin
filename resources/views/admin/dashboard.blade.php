    @extends('layouts.admin')

    @section('content2')
        <div class="container mt-4">
            <h2 class="fw-bold mb-4">Beranda</h2>

            <!-- Grid Tabel -->
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                            <span>Monitoring Pembayaran</span>
                            <a href="{{ url('admin-monitoring-pembayaran') }}" class="btn btn-sm btn-light">
                                Detail
                            </a>
                        </div>
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
                        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                            <span>Data Keluarga</span>
                            <a href="{{ url('admin-keluarga') }}" class="btn btn-sm btn-light">
                                Detail
                            </a>
                        </div>
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
                        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                            <span>Rekap Saldo Masuk dan Keluar</span>
                            <a href="{{ url('admin-saldo') }}" class="btn btn-sm btn-light">
                                Detail
                            </a>
                        </div>
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

                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-light">Kematian</div>
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
                        <div class="card-header bg-primary text-white">Pengumuman</div>
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

