@extends('layouts.admin')

@section('content2')
    <div class="container">
        <h2 class="fw-bold mb-4 d-flex justify-content-between align-items-center">Monitoring Pembayaran
            <!-- Tombol Create -->
            <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#createModal">
                <i class="bi bi-plus-circle"></i> Tambah Data
            </button>
        </h2>

        <!-- Grid Tabel -->
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="card shadow-sm border-0 tinggi-card">
                    <!-- Header -->
                    <div class="card-header bg-oren text-white fw-bold">
                        <i class="bi bi-table"></i> Monitoring Pembayaran
                    </div>

                    <!-- Body -->
                    <div class="table-wrapper2 d-flex flex-column h-100">
                        
                        <!-- Filter Bar -->
                        <div class="filter-bar p-3 bg-light border-bottom">
                        <div class="row g-2 justify-content-center">
                            <div class="col-md-4 d-flex gap-2">
                                <input type="text" id="searchInput" class="form-control" placeholder="🔍Cari nama kepala keluarga">
                                <button class="btn btn-primary"><i class="bi bi-search"></i></button>
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
                                <th>Tunggakan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>
                            <tbody id="paymentTable">
                            <tr>
                                <td>Contoh 1</td>
                                <td>Januari</td>
                                <td></td>
                                <td>Lunas</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                        <i class="bi bi-trash"></i> 
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Contoh 2</td>
                                <td>Februari</td>
                                <td></td>
                                <td>Belum</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                        <i class="bi bi-trash"></i> 
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Contoh 3</td>
                                <td>Maret</td>
                                <td></td>
                                <td>Lunas</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                        <i class="bi bi-trash"></i> 
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Contoh 4</td>
                                <td>April</td>
                                <td></td>
                                <td>Belum</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                        <i class="bi bi-trash"></i> 
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Contoh 5</td>
                                <td>Mei</td>
                                <td></td>
                                <td>Lunas</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                        <i class="bi bi-trash"></i> 
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>Contoh 6</td>
                                <td>Juni</td>
                                <td></td>
                                <td>Belum</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                        <i class="bi bi-trash"></i> 
                                    </button>
                                </td>
                            </tr>                        
                        </table>
                        </div>
                    </div>
                    </div>

            </div>
                            
        </div>
                
    </div>

    <!-- Modal Create -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="createModalLabel">Tambah Data Pembayaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" placeholder="Masukkan nama...">
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Bulan</label>
                            <select class="form-select">
                                <option value="">Pilih bulan</option>
                                <option>Januari</option>
                                <option>Februari</option>
                                <option>Maret</option>
                                <option>April</option>
                                <option>Mei</option>
                                <option>Juni</option>
                                <option>Juli</option>
                                <option>Agustus</option>
                                <option>September</option>
                                <option>Oktober</option>
                                <option>November</option>
                                <option>Desember</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Status</label>
                            <select class="form-select">
                                <option value="">Pilih status</option>
                                <option>Lunas</option>
                                <option>Belum</option>
                            </select>
                        </div>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success">Simpan</button>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header bg-warning text-dark">
                <h5 class="modal-title" id="editModalLabel">Edit Data Pembayaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" value="Contoh 1">
                </div>
                <div class="mb-3">
                    <label class="form-label">Bulan</label>
                    <select class="form-select">
                    <option>Januari</option>
                    <option selected>Februari</option>
                    <option>Maret</option>
                    <option>April</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select class="form-select">
                    <option>Lunas</option>
                    <option selected>Belum</option>
                    </select>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-warning">Update</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal Delete -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header bg-danger text-white">
                <h5 class="modal-title" id="deleteModalLabel">Konfirmasi Hapus</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p id="deleteMessage">Apakah Anda yakin ingin menghapus data ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-danger" id="confirmDeleteBtn">Hapus</button>
            </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let deleteButtons = document.querySelectorAll(".btn-delete");
            let deleteMessage = document.getElementById("deleteMessage");
            let confirmDeleteBtn = document.getElementById("confirmDeleteBtn");
            let namaTarget = "";

            deleteButtons.forEach(button => {
                button.addEventListener("click", function() {
                    namaTarget = this.getAttribute("data-name");
                    deleteMessage.textContent = `Apakah Anda yakin ingin menghapus data "${namaTarget}"?`;
                });
            });

            confirmDeleteBtn.addEventListener("click", function() {
                // sementara console.log aja, nanti bisa diganti dengan AJAX / form submit ke server
                console.log(`Data "${namaTarget}" berhasil dihapus (simulasi).`);
                // Tutup modal setelah klik hapus
                let deleteModal = bootstrap.Modal.getInstance(document.getElementById("deleteModal"));
                deleteModal.hide();
            });
        });
    </script>

@endsection

