@extends('layouts.admin')

@section('content2')
    <div class="container">
        <h2 class="fw-bold mb-4 d-flex justify-content-between align-items-center">
            Kutipan
            <!-- Tombol Create -->
            <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#createModal">
                <i class="bi bi-plus-circle"></i> Tambah Data
            </button>
        </h2>

        <div class="col-lg-12">
            <div class="card shadow-sm tinggi-card">
                <div class="card-header bg-oren text-white fw-bold">
                    <i class="bi bi-flag"></i> Kutipan
                </div>
                <!-- Filter Bar -->
                <div class="filter-bar p-3 bg-light border-bottom">
                    <div class="row g-2">
                        <div class="col-md-3">
                            <select id="statusFilter" class="form-select">
                                <option value="" hidden>Pilih Kutipan</option>
                                <option value="kutipan">Kutipan I</option>                                                                            
                            </select>
                        </div>                                    
                    </div>
                </div>
                <div class="table-scroll">
                    <div class="card-body p-0">
                        <table class="table table-striped mb-0">
                            <thead class="table-primary">
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Kutipan</th>
                                    <th>Total Terkumpul</th>
                                    <th>Tanggal Setor</th>                                    
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>xx-xx-xxxx s.d. xx-xx-xxxx</td>
                                    <td>Kutipan I</td>                                    
                                    <td>xx-xx-xxxx</td>
                                    <td></td>
                                    <td>
                                        <button class="btn btn-info btn-sm text-white" data-bs-toggle="modal" data-bs-target="#infoModal">
                                            <i class="bi bi-info-circle"></i>
                                        </button>
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

    <!-- Modal Info Kutipan -->
    <div class="modal fade" id="infoModal" tabindex="-1" aria-labelledby="infoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
        <div class="modal-header bg-info text-white">
            <h5 class="modal-title" id="infoModalLabel">Detail Kutipan</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <ul class="list-group">
            <li class="list-group-item">
                <strong>Periode Kutipan:</strong> 01 Agustus 2025 - 31 Agustus 2025
            </li>
            <li class="list-group-item">
                <strong>Kutipan:</strong> Kutipan 1
            </li>
            <li class="list-group-item">
                <strong>Total Terkumpul: </strong>
                <span>Rp. 1.500.000</span>
            </li>
            <li class="list-group-item">
                <strong>Tanggal Setor:</strong> 02 September 2025
            </li>
            </ul>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
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
                <!-- 1. Tanggal Periode Kutipan -->
                <div class="mb-3 d-flex gap-2">
                    <div class="col-md-6">
                    <label class="form-label">Tanggal Mulai Periode Kutipan</label>
                    <input type="date" class="form-control">
                    </div>
                    <div class="col-md-6">
                    <label class="form-label">Tanggal Akhir Periode Kutipan</label>
                    <input type="date" class="form-control">
                    </div>
                </div>

                <!-- 2. Kutipan -->
                <div class="mb-3">
                    <label class="form-label">Kutipan</label>
                    <input type="text" class="form-control" value="Kutipan 1" readonly>
                </div>

                <!-- 3. Total Terkumpul -->
                <div class="mb-3">
                    <label class="form-label">Total Terkumpul</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp.</span>
                        <input type="number" class="form-control" placeholder="Masukkan jumlah total">
                    </div>
                </div>

                <!-- 4. Tanggal Setor -->
                <div class="mb-3">
                    <label class="form-label">Tanggal Setor</label>
                    <input type="date" class="form-control">
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
                <!-- 1. Tanggal Periode Kutipan -->
                <div class="mb-3 d-flex gap-2">
                    <div class="col-md-6">
                    <label class="form-label">Tanggal Mulai Periode Kutipan</label>
                    <input type="date" class="form-control">
                    </div>
                    <div class="col-md-6">
                    <label class="form-label">Tanggal Akhir Periode Kutipan</label>
                    <input type="date" class="form-control">
                    </div>
                </div>

                <!-- 2. Kutipan -->
                <div class="mb-3">
                    <label class="form-label">Kutipan</label>
                    <input type="text" class="form-control" value="Kutipan 1" readonly>
                </div>

                <!-- 3. Total Terkumpul -->
                <div class="mb-3">
                    <label class="form-label">Total Terkumpul</label>
                    <div class="input-group">
                        <span class="input-group-text">Rp.</span>
                        <input type="number" class="form-control" placeholder="Masukkan jumlah total">
                    </div>
                </div>

                <!-- 4. Tanggal Setor -->
                <div class="mb-3">
                    <label class="form-label">Tanggal Setor</label>
                    <input type="date" class="form-control">
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
