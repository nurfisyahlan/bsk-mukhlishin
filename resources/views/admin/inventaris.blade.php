@extends('layouts.admin')

@section('content2')
    <div class="container">
        <h2 class="fw-bold mb-4">Inventaris</h2>

        <div class="col-lg-12">
            <div class="card shadow-sm tinggi-card">
                <div class="card-header bg-primary text-white">Inventaris</div>
                <div class="table-wrapper2">
                    <div class="card-body p-0">
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
                                    <td>Kain Kafan</td>
                                    <td>10</td>
                                    <td>Baik</td>
                                    <td>Tersedia</td>
                                </tr>
                                <tr>
                                    <td>Kursi</td>
                                    <td>20</td>
                                    <td>Baik</td>
                                    <td>Tidak Tersedia</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection