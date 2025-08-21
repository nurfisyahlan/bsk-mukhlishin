@extends('layouts.admin')

@section('content2')
    <div class="container">
        <h2 class="fw-bold mb-4">Pengumuman</h2>

        <div class="col-lg-12">
                <div class="card shadow-sm">
                    <div class="card-header bg-primary text-white">Pengumuman</div>
                    <div class="card-body p-0">
                        <div class="filter-bar">
                            <div class="row g-2">
                                <div class="col-md-4 d-flex gap-2">
                                    <input type="text" id="searchInput" class="form-control" placeholder="Cari nama...">
                                    <button class="btn btn-primary">Cari</button>
                                </div>                                                                        
                            </div>
                        </div>
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
                                    <td><button class="btn btn-primary">Cek</button></td>
                                </tr>
                                <tr>
                                    <td>01-01-1970</td>
                                    <td>Lorem ipsum dolor sit amet consectetur.</td>
                                    <td>Berita</td>
                                    <td><button class="btn btn-primary">Cek</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>
@endsection
