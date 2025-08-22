@extends('layouts.admin')

@section('content2')
    <div class="container">
        <h2 class="fw-bold mb-4 d-flex justify-content-between align-items-center">
            Inventaris
            <!-- Tombol Create -->
            <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#createModal">
                <i class="bi bi-plus-circle"></i> Tambah Barang
            </button>
        </h2>
        

        <div class="col-lg-12">
            <div class="card shadow-sm tinggi-card">
                <div class="card-header bg-primary text-white fw-bold">Inventaris</div>
                <!-- Filter Bar -->
                <div class="filter-bar p-3 bg-light border-bottom">
                    <div class="row g-2">
                        <div class="col-md-4">
                            <input type="text" id="searchInput" class="form-control" placeholder="Cari Item">
                        </div>
                        <div class="col-md-3">
                            <select id="statusFilter" class="form-select">
                                <option value="" hidden>Status</option>
                                <option value="tersedia">Tersedia</option>                                            
                                <option value="tidaktersedia">Tidak Tersedia</option>                                                                                                                    
                            </select>
                        </div>                                    
                    </div>
                </div>
                <div class="table-wrapper2">
                    <div class="card-body p-0">
                        <table class="table table-striped align-middle mb-0">
                            <thead class="table-primary">
                                <tr>
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
                                    <th>Kondisi</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Kain Kafan</td>
                                    <td>10</td>
                                    <td>Baik</td>
                                    <td>Tersedia</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        <button class="btn btn-danger btn-sm btn-delete" data-name="Kain Kafan" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kursi</td>
                                    <td>20</td>
                                    <td>Baik</td>
                                    <td>Tidak Tersedia</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        <button class="btn btn-danger btn-sm btn-delete" data-name="Kursi" data-bs-toggle="modal" data-bs-target="#deleteModal">
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
            <h5 class="modal-title" id="createModalLabel">Tambah Barang Inventaris</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label class="form-label">Nama Barang</label>
                <input type="text" class="form-control" placeholder="Masukkan nama barang...">
              </div>
              <div class="mb-3">
                <label class="form-label">Jumlah</label>
                <input type="number" class="form-control" placeholder="0">
              </div>
              <div class="mb-3">
                <label class="form-label">Kondisi</label>
                <select class="form-select">
                    <option value="Baik">Baik</option>
                    <option value="Rusak">Rusak</option>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label">Status</label>
                <select class="form-select">
                    <option value="Tersedia">Tersedia</option>
                    <option value="Tidak Tersedia">Tidak Tersedia</option>
                </select>
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
            <h5 class="modal-title" id="editModalLabel">Edit Barang Inventaris</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3">
                <label class="form-label">Nama Barang</label>
                <input type="text" class="form-control" value="Kain Kafan">
              </div>
              <div class="mb-3">
                <label class="form-label">Jumlah</label>
                <input type="number" class="form-control" value="10">
              </div>
              <div class="mb-3">
                <label class="form-label">Kondisi</label>
                <select class="form-select">
                    <option value="Baik" selected>Baik</option>
                    <option value="Rusak">Rusak</option>
                </select>
              </div>
              <div class="mb-3">
                <label class="form-label">Status</label>
                <select class="form-select">
                    <option value="Tersedia" selected>Tersedia</option>
                    <option value="Tidak Tersedia">Tidak Tersedia</option>
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
        let barangTarget = "";

        deleteButtons.forEach(button => {
            button.addEventListener("click", function() {
                barangTarget = this.getAttribute("data-name");
                deleteMessage.textContent = `Apakah Anda yakin ingin menghapus barang "${barangTarget}"?`;
            });
        });

        confirmDeleteBtn.addEventListener("click", function() {
            console.log(`Barang "${barangTarget}" berhasil dihapus (simulasi).`);
            let deleteModal = bootstrap.Modal.getInstance(document.getElementById("deleteModal"));
            deleteModal.hide();
        });
    });
    </script>
@endsection
