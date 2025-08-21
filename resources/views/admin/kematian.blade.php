@extends('layouts.admin')

@section('content2')
    <div class="container">
        <h2 class="fw-bold mb-4">Kematian</h2>

        <div class="col-lg-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-light">Kematian</div>
                <div class="card-body p-0">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>Tanggal</th>
                                <th>Nama Anggota Keluarga</th>
                                <th>Jam</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01-08-2025</td>
                                <td>Fulan</td>
                                <td>17:02</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>03-08-2025</td>
                                <td>Fulanah</td>
                                <td>09:45</td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
