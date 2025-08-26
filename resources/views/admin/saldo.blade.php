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
            <div class="card shadow-sm tinggi-card">
                <div class="card-header bg-oren text-light fw-bold">
                    <i class="bi bi-cash"></i> Rekap Saldo Masuk/Keluar
                </div>
                <div class="table-scroll">
                  <div class="card-body p-0">
                      <!-- Filter Bar -->
                      <div class="filter-bar p-3 bg-light border-bottom">
                          <div class="row g-2">                        
                              <div class="col-md-2">
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
                                  <th>Uraian</th>
                                  <th>Masuk</th>
                                  <th>Keluar</th>
                                  <th>Saldo Terkini</th>
                                  <th>Aksi</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td>01-08-2025</td>
                                  <td>Iuran Bulanan</td>
                                  <td>Rp500.000</td>
                                  <td>Rp1.500.000</td>
                                  <td>-</td>
                                  <td>
                                      <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">
                                          <i class="bi bi-pencil-square"></i>
                                      </button>
                                      <button class="btn btn-danger btn-sm btn-delete" data-name="Iuran Bulanan" data-bs-toggle="modal" data-bs-target="#deleteModal">
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
            <h5 class="modal-title" id="createModalLabel">Tambah Data Saldo</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3 d-flex gap-2">
                <div class="col-md-4">
                  <label class="form-label">Tanggal</label>
                  <input type="date" class="form-control">
                </div>

                <div class="col-md-8">
                  <label class="form-label">Pilih jenis Saldo</label>
                  <select class="form-select">                      
                      <option value="masuk">Saldo Masuk</option>
                      <option value="keluar">Saldo Keluar</option>
                  </select>
                </div>                
              </div>
              <div class="mb-3">
                  <label class="form-label">Total Terkumpul</label>
                  <div class="input-group">
                      <span class="input-group-text">Rp.</span>
                      <input type="number" class="form-control" placeholder="Masukkan jumlah total">
                  </div>
              </div>              
              <div class="mb-3">
                <label class="form-label">Uraian</label>
                <input type="text" class="form-control" placeholder="Tuliskan Uraian...">
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
              <div class="mb-3 d-flex gap-2">
                <div class="col-md-4">
                  <label class="form-label">Tanggal</label>
                  <input type="date" class="form-control">
                </div>

                <div class="col-md-8">
                  <label class="form-label">Pilih jenis Saldo</label>
                  <select class="form-select">                      
                      <option value="masuk">Saldo Masuk</option>
                      <option value="keluar">Saldo Keluar</option>
                  </select>
                </div>                
              </div>
              <div class="mb-3">
                  <label class="form-label">Total Terkumpul</label>
                  <div class="input-group">
                      <span class="input-group-text">Rp.</span>
                      <input type="number" class="form-control" placeholder="Masukkan jumlah total">
                  </div>
              </div>
              <div class="mb-3">
                <label class="form-label">Uraian</label>
                <input type="text" class="form-control" placeholder="Tuliskan Uraian...">
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
