@extends('layouts.admin')

@section('content2')
    <div class="container">
        <h2 class="fw-bold mb-4 d-flex justify-content-between align-items-center">
            Keluarga
            <!-- Tombol Create -->
            <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#createModal">
                <i class="bi bi-plus-circle"></i> Tambah Data
            </button>
        </h2>

        <div class="col-lg-12">
            <div class="card shadow-sm tinggi-card">
                <div class="card-header bg-primary text-white fw-bold">Data Keluarga</div>
                <div class="table-wrapper2">
                    <!-- Filter Bar -->
                    <div class="filter-bar p-3 bg-light border-bottom">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" id="searchInput" class="form-control" placeholder="Cari kepala keluarga...">
                            </div>
                            <div class="col-md-3">
                                <select id="statusFilter" class="form-select">
                                    <option value="">📍 RT/RW</option>
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
                        <table class="table table-striped align-middle mb-0">
                            <thead class="table-primary sticky-top">
                                <tr>
                                    <th>Kepala Keluarga</th>
                                    <th>Jumlah Keluarga</th>
                                    <th>Rincian</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="familyTable">
                                <tr>
                                    <td>Contoh 1</td><td>5</td><td>info</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        <button class="btn btn-danger btn-sm btn-delete" data-name="Contoh 1" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Contoh 2</td><td>3</td><td>info</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        <button class="btn btn-danger btn-sm btn-delete" data-name="Contoh 2" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Contoh 3</td><td>6</td><td>info</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        <button class="btn btn-danger btn-sm btn-delete" data-name="Contoh 3" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Contoh 4</td><td>4</td><td>info</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        <button class="btn btn-danger btn-sm btn-delete" data-name="Contoh 4" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                            <i class="bi bi-trash"></i>
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

    <!-- Modal Create -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header bg-success text-white">
            <h5 class="modal-title" id="createModalLabel">Tambah Data Keluarga</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <form>
            <div class="mb-3">
                <label class="form-label">Kepala Keluarga</label>
                <input type="text" class="form-control" placeholder="Masukkan nama kepala keluarga...">
            </div>
            <div class="mb-3">
                <label class="form-label">Jumlah Keluarga</label>
                <input type="number" class="form-control" placeholder="Masukkan jumlah keluarga...">
            </div>
            <div class="mb-3">
                <label class="form-label">Rincian</label>
                <textarea class="form-control" rows="2" placeholder="Masukkan rincian..."></textarea>
            </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-success">Simpan</button>
        </div>
        </div>
    </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header bg-warning text-dark">
            <h5 class="modal-title" id="editModalLabel">Edit Data Keluarga</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <form>
            <div class="mb-3">
                <label class="form-label">Kepala Keluarga</label>
                <input type="text" class="form-control" value="Contoh 1">
            </div>
            <div class="mb-3">
                <label class="form-label">Jumlah Keluarga</label>
                <input type="number" class="form-control" value="5">
            </div>
            <div class="mb-3">
                <label class="form-label">Rincian</label>
                <textarea class="form-control" rows="2">info</textarea>
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
                console.log(`Data "${namaTarget}" berhasil dihapus (simulasi).`);
                let deleteModal = bootstrap.Modal.getInstance(document.getElementById("deleteModal"));
                deleteModal.hide();
            });
        });
    </script>

@endsection
