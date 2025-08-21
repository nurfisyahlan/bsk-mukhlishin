@extends('layouts.admin')

@section('content2')
    <div class="container">
        <h2 class="fw-bold mb-4">Monitoring Pembayaran</h2>

        <!-- Grid Tabel -->
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="card shadow-sm border-0 tinggi-card">
                    <!-- Header -->
                    <div class="card-header bg-primary text-white fw-bold">
                        <i class="bi bi-table"></i> Monitoring Pembayaran
                    </div>

                    <!-- Body -->
                    <div class="table-wrapper2 d-flex flex-column h-100">
                        
                        <!-- Filter Bar -->
                        <div class="filter-bar p-3 bg-light border-bottom">
                        <div class="row g-2 justify-content-center">
                            <div class="col-md-4">
                                <input type="text" id="searchInput" class="form-control" placeholder="🔍 Cari nama...">
                            </div>
                            <div class="col-md-3">
                                <select id="rtRwFilter" class="form-select">
                                    <option value="">📍 RT/RW</option>
                                    <option value="01/04">01/04</option>                                            
                                    <option value="02/04">02/04</option>                                            
                                    <option value="03/04">03/04</option>                                            
                                    <option value="03/03">03/03</option>                                            
                                    <option value="RW05">RW 05</option>                                            
                                </select>
                            </div>
                            <div class="col-md-3">
                            <select id="statusFilter" class="form-select">
                                <option value="">✅ Status</option>
                                <option value="Lunas">Lunas</option>
                                <option value="Belum">Belum</option>
                            </select>
                            </div>
                        </div>
                        </div>

                        <!-- Scrollable Table -->
                        <div class="table-scroll flex-grow-1 overflow-auto">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-primary sticky-top">
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
                            </tbody>
                        </table>
                        </div>
                    </div>
                    </div>

            </div>
                            
        </div>
                
    </div>
@endsection

