@extends('layouts.admin')

@section('content2')
    <div class="container">
        <h2 class="fw-bold mb-4 d-flex justify-content-between align-items-center">
            Kematian
            <!-- Tombol Create -->
            <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#createModal">
                <i class="bi bi-plus-circle"></i> Tambah Data
            </button>
        </h2>

        <div class="col-lg-12">
            <div class="card shadow-sm tinggi-card">
                <div class="card-header bg-oren text-white fw-bold">
                    <i class="bi bi-flag"></i> Kematian
                </div>
                <!-- Filter Bar -->
                <div class="filter-bar p-3 bg-light border-bottom">
                    <div class="row g-2">
                        <div class="col-md-4 d-flex gap-2">
                            <input type="text" id="searchInput" class="form-control" placeholder="Cari nama anggota keluarga">
                            <button class="btn btn-primary"><i class="bi bi-search"></i></button>
                        </div>
                        <div class="col-md-3">
                            <select id="statusFilter" class="form-select">
                                <option value="" hidden>Status Santunan</option>
                                <option value="tersedia">Sudah Diberikan</option>                                            
                                <option value="tidaktersedia">Belum diberikan</option>                                                                                                                    
                            </select>
                        </div>                                    
                    </div>
                </div>
                <div class="table-wrapper2">
                    <div class="card-body p-0">
                        <table class="table table-striped mb-0">
                            <thead class="table-primary">
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Nama Anggota Keluarga</th>
                                    <th>Jam</th>
                                    <th>Status Santunan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>01-08-2025</td>
                                    <td>Fulan</td>
                                    <td>17:02</td>
                                    <td><span class="badge bg-warning text-dark">Belum Diberikan</span></td>
                                    <td>
                                        <!-- Tombol Edit -->
                                        <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">
                                            <i class="bi bi-pencil-square"></i>
                                        </button>
                                        <!-- Tombol Delete -->
                                        <button class="btn btn-danger btn-sm btn-delete" data-name="Fulan" data-bs-toggle="modal" data-bs-target="#deleteModal">
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
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="createModalLabel">Tambah Data Kematian</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3 d-flex gap-2">
                <div class="col-md-7">
                  <label class="form-label">Tanggal</label>
                  <input type="date" class="form-control">
                </div>
                <div class="col-md-5">
                  <label class="form-label">Jam</label>
                  <input type="time" class="form-control">
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label">Nama Anggota Keluarga</label>
                <input type="text" class="form-control">
              </div>              
              <div class="mb-3">
                <label class="form-label">Status Santunan</label>
                <select class="form-select">
                    <option value="sudah">Sudah Diberikan</option>
                    <option value="belum">Belum Diberikan</option>
                </select>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-warning">
            <h5 class="modal-title" id="editModalLabel">Edit Data Kematian</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3 d-flex gap-2">
                <div class="col-md-7">
                  <label class="form-label">Tanggal</label>
                  <input type="date" class="form-control">
                </div>
                <div class="col-md-5">
                  <label class="form-label">Jam</label>
                  <input type="time" class="form-control">
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label">Nama Anggota Keluarga</label>
                <input type="text" class="form-control">
              </div>              
              <div class="mb-3">
                <label class="form-label">Status Santunan</label>
                <select class="form-select">
                    <option value="sudah">Sudah Diberikan</option>
                    <option value="belum">Belum Diberikan</option>
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
            Apakah kamu yakin ingin menghapus data <strong id="deleteName">ini</strong>?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="button" class="btn btn-danger">Hapus</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Script untuk isi nama di modal delete -->
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        const deleteButtons = document.querySelectorAll(".btn-delete");
        const deleteName = document.getElementById("deleteName");

        deleteButtons.forEach(btn => {
          btn.addEventListener("click", function() {
            const name = this.getAttribute("data-name");
            deleteName.textContent = name;
          });
        });
      });
    </script>

@endsection
