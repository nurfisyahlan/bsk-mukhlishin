@extends('layouts.admin')

@section('content2')
    <div class="container">
        <h2 class="fw-bold mb-4 d-flex justify-content-between align-items-center">
            Saldo
            <!-- Tombol Create -->
            <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#createModal">
                <i class="bi bi-plus-circle"></i> Tambah Data
            </button>
        </h2>
        
        <div class="col-lg-12">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-light fw-bold">Rekap Saldo Masuk/Keluar</div>
                <div class="card-body p-0">
                    <!-- Filter Bar -->
                    <div class="filter-bar p-3 bg-light border-bottom">
                        <div class="row g-2">                        
                            <div class="col-md-3">
                                <select id="statusFilter" class="form-select">
                                    <option value="" hidden>Cek Saldo</option>
                                    <option value="masuk">Saldo Masuk</option>                                            
                                    <option value="keluar">Saldo Keluar</option>                                                                                                                    
                                </select>
                            </div>                                    
                        </div>
                    </div>
                    <table class="table table-striped align-middle mb-0">
                        <thead class="table-primary">
                            <tr>
                                <th>Tanggal</th>
                                <th>Keterangan</th>
                                <th>Masuk</th>
                                <th>Keluar</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01-08-2025</td><td>Iuran Bulanan</td><td>Rp500.000</td><td>-</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm btn-delete" data-name="Iuran Bulanan" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>03-08-2025</td><td>Biaya Pemakaman</td><td>-</td><td>Rp300.000</td>
                                <td>
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm btn-delete" data-name="Biaya Pemakaman" data-bs-toggle="modal" data-bs-target="#deleteModal">
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

    <!-- Modal Create -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-success text-white">
            <h5 class="modal-title" id="createModalLabel">Tambah Data Saldo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label class="form-label">Tanggal</label>
                <input type="date" class="form-control">
              </div>
              <div class="mb-3">
                <label class="form-label">Keterangan</label>
                <input type="text" class="form-control" placeholder="Masukkan keterangan...">
              </div>
              <div class="mb-3">
                <label class="form-label">Masuk</label>
                <input type="number" class="form-control" placeholder="Rp0">
              </div>
              <div class="mb-3">
                <label class="form-label">Keluar</label>
                <input type="number" class="form-control" placeholder="Rp0">
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
            <h5 class="modal-title" id="editModalLabel">Edit Data Saldo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label class="form-label">Tanggal</label>
                <input type="date" class="form-control" value="2025-08-01">
              </div>
              <div class="mb-3">
                <label class="form-label">Keterangan</label>
                <input type="text" class="form-control" value="Iuran Bulanan">
              </div>
              <div class="mb-3">
                <label class="form-label">Masuk</label>
                <input type="number" class="form-control" value="500000">
              </div>
              <div class="mb-3">
                <label class="form-label">Keluar</label>
                <input type="number" class="form-control" value="0">
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
