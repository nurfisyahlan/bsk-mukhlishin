    @extends('layouts.admin')

    @section('content2')
        <div class="container">
            <h2 class="fw-bold">Beranda</h2>

            <!-- Grid Tabel -->
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-oren text-white d-flex justify-content-between align-items-center">
                            <span><i class="bi bi-table"></i> Monitoring Pembayaran</span>
                            <a href="{{ url('admin-monitoring-pembayaran') }}" class="btn btn-sm btn-outline-light">
                                <i class="bi bi-search"></i> Detail
                            </a>
                        </div>
                        <div class="table-wrapper">
                            <!-- Filter Bar -->
                            <div class="filter-bar">
                                <div class="row g-2">
                                    <div class="col-md-6 d-flex gap-1">
                                        <input type="text" id="searchInput" class="form-control" placeholder="Cari nama...">
                                        <button class="btn btn-primary rounded-circle cari">
                                            <i class="bi bi-search"></i>
                                        </button>
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
                            <div class="p-1 table-scroll">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Bulan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody id="paymentTable">
                                        <tr>
                                            <td>Contoh 1</td>
                                            <td>Januari</td>
                                            <td>Lunas</td>
                                        </tr>                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-oren text-white d-flex justify-content-between align-items-center">
                            <span><i class="bi bi-people"></i> Data Keluarga</span>
                            <a href="{{ url('admin-keluarga') }}" class="btn btn-sm btn-outline-light">
                                <i class="bi bi-search"></i> Detail
                            </a>
                        </div>
                        <div class="table-wrapper">
                            <!-- Filter Bar -->
                            <div class="filter-bar">
                                <div class="row g-2">
                                    <div class="col-md-6 d-flex gap-1">
                                        <input type="text" id="searchInput" class="form-control" placeholder="Cari nama...">
                                        <button class="btn btn-primary rounded-circle cari">
                                            <i class="bi bi-search"></i>
                                        </button>
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
                            <div class="table-scroll">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>Kepala Keluarga</th>
                                            <th>Jumlah Keluarga</th>
                                            <th>Rincian</th>                                                                                    
                                        </tr>
                                    </thead>
                                    <tbody id="paymentTable">
                                        <tr>
                                            <td>Contoh 1</td>
                                            <td>Januari</td>
                                            <td>
                                                <button class="btn-detailinfo text-white">Info</button>
                                            </td>                                                
                                        </tr>                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>        
                
                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-oren text-white d-flex justify-content-between align-items-center">
                            <span><i class="bi bi-cash"></i> Kutipan</span>
                            <a href="{{ url('admin-kutipan#periodekutipan') }}" class="btn btn-sm btn-outline-light">
                                <i class="bi bi-search"></i> Detail
                            </a>
                        </div>
                        <div class="filter-bar">
                                <div class="row g-2">                                                                   
                                    <div class="col-md-4">
                                        <select id="statusFilter" class="form-select">
                                            <option value="" hidden>Pilih Periode</option>
                                            <option value="kutipan">Periode I</option>                                                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <div class="table-scroll">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Tanggal</th>
                                        <th>Total Terkumpul</th>                                                                                                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>                   
                                        <td>1</td>                     
                                        <td>xx-xx-xxxx</td>                     
                                        <td>xxx.xxx</td>                     
                                    </tr>                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-oren text-white d-flex justify-content-between align-items-center">
                            <span><i class="bi bi-cash"></i> Periode</span>
                            <a href="{{ url('admin-kutipan#periodekutipan') }}" class="btn btn-sm btn-outline-light">
                                <i class="bi bi-search"></i> Detail
                            </a>
                        </div>
                        <div class="filter-bar">
                                <div class="row g-2">                                                                   
                                    <div class="col-md-4">
                                        <select id="statusFilter" class="form-select">
                                            <option value="" hidden>Pilih Periode</option>
                                            <option value="kutipan">Periode I</option>                                                                            
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <div class="table-scroll">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Tanggal Periode</th>                                                                                
                                        <th>Total Tekumpul</th>                                                                                
                                        <th>Tanggal Setor</th>                                                                                
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>    
                                        <td>xx-xx-xxxx</td>                                    
                                        <td>x.xxx.xxx</td>                                    
                                        <td>xx-xx-xxxx</td>                                    
                                    </tr>                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-oren text-white d-flex justify-content-between align-items-center">
                            <span><i class="bi bi-cash"></i> Rekap Saldo</span>
                            <a href="{{ url('admin-saldo') }}" class="btn btn-sm btn-outline-light">
                                <i class="bi bi-search"></i> Detail
                            </a>
                        </div>
                        <div class="filter-bar">
                                <div class="row g-2">                                                                   
                                    <div class="col-md-3">
                                        <select id="statusFilter" class="form-select">
                                            <option value="">Rekapan</option>
                                            <option value="Lunas">Saldo Masuk</option>
                                            <option value="Belum">Saldo Keluar</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <div class="table-scroll">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>                                        
                                        <th>Tanggal</th>
                                        <th>Uraian</th>
                                        <th>Masuk</th>
                                        <th>Keluar</th>
                                        <th>Saldo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01-08-2025</td>
                                        <td>Iuran Bulanan</td>
                                        <td>Rp500.000</td>                                        
                                        <td>-</td>
                                        <td>-</td>
                                    </tr>                                
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-oren text-white d-flex justify-content-between align-items-center">
                            <span><i class="bi bi-tools"></i> Inventaris</span>
                            <a href="{{ url('admin-inventaris') }}" class="btn btn-sm btn-outline-light">
                                <i class="bi bi-search"></i> Detail
                            </a>
                        </div>
                        <div class="card-body p-3">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Nama Barang</th>
                                        <th>Jumlah</th>
                                        <th>Kondisi</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Speaker Aktif</td>
                                        <td>1</td>
                                        <td>Baik</td>
                                        <td>Tersedia</td>
                                    </tr>                        
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-oren text-white d-flex justify-content-between align-items-center">
                            <span><i class="bi bi-flag"></i> Kematian</span>
                            <a href="{{ url('admin-kematian') }}" class="btn btn-sm btn-outline-light">
                                <i class="bi bi-search"></i> Detail
                            </a>
                        </div>
                        <div class="card-body p-3">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Nama Anggota</th>
                                        <th>Jam</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01-08-2025</td>
                                        <td>Fulan</td>
                                        <td>12:45</td>
                                        <td>-</td>
                                    </tr>                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-oren text-white d-flex justify-content-between align-items-center">
                            <span><i class="bi bi-broadcast"></i> Pengumuman</span>
                            <a href="{{ url('admin-pengumuman') }}" class="btn btn-sm btn-outline-light">
                                <i class="bi bi-search"></i> Detail
                            </a>
                        </div>
                        <div class="card-body p-3">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Judul Pengumuman</th>
                                        <th>Kategori</th>
                                        <th>Isi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01-01-1970</td>
                                        <td>Lorem ipsum dolor sit amet.</td>
                                        <td>Kematian</td>
                                        <td>
                                            <button class="btn btn-detailinfo text-light">
                                                Lihat isi
                                            </button>
                                        </td>
                                    </tr>                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                    
        </div>
    @endsection

