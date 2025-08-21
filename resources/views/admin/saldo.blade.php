@extends('layouts.admin')

@section('content2')
    <div class="container">
        <h2 class="fw-bold mb-4">Saldo</h2>
        
        <div class="col-lg-12">
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
    </div>
@endsection

