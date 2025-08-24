@extends('layouts.admin')

@section('content2')
    <div class="container">
        <h2 class="fw-bold mb-4 d-flex justify-content-between align-items-center">
            Pengumuman
            <!-- Tombol Create -->
            <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#createModal">
                <i class="bi bi-plus-circle"></i> Tambah Pengumuman
            </button>
        </h2>

        <div class="col-lg-12">
            <div class="card shadow-sm tinggi-card">
                <div class="card-header bg-oren text-white fw-bold">
                    <i class="bi bi-broadcast"></i> Pengumuman
                </div>

                <!-- Filter Bar -->
                <div class="filter-bar p-3 bg-light border-bottom">
                    <div class="row g-2">
                        <div class="col-md-4 d-flex gap-2">
                            <input type="text" id="searchInput" class="form-control" placeholder="Cari judul...">
                            <button class="btn btn-primary"><i class="bi bi-search"></i></button>
                        </div>
                        <div class="col-md-3">
                            <select id="statusFilter" class="form-select">
                                <option value="" hidden>Kategori</option>
                                <option value="tersedia">Berita</option>                                            
                                <option value="tidaktersedia">Kematian</option>                                                                                                                    
                            </select>
                        </div>                                                                           
                    </div>
                </div>

                <!-- Tabel -->
                <div class="card-body p-0">
                    <table class="table table-striped mb-0 align-middle">
                        <thead class="table-primary">
                            <tr>
                                <th>Tanggal</th>
                                <th>Judul</th>
                                <th>Kategori</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01-08-2025</td>
                                <td>Pengumuman Kematian Alm. H. Ramli</td>
                                <td><span class="badge bg-danger">Kematian</span></td>
                                <td>
                                    <button class="btn btn-primary btn-sm btn-detail" data-bs-toggle="modal" data-bs-target="#detailModal" data-judul="Pengumuman Kematian Alm. H. Ramli" data-isi="Innalillahi wa inna ilaihi raji'un. Telah meninggal dunia Alm. H. Ramli bin Abdullah pada tanggal 01-08-2025.">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm btn-delete" data-name="Pengumuman Kematian Alm. H. Ramli" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </td>
                            </tr>
                            <tr>
                                <td>03-08-2025</td>
                                <td>Pengumuman Santunan BSK</td>
                                <td><span class="badge bg-info text-dark">Berita</span></td>
                                <td>
                                    <button class="btn btn-primary btn-sm btn-detail" data-bs-toggle="modal" data-bs-target="#detailModal" data-judul="Pengumuman Santunan BSK" data-isi="Santunan untuk keluarga Alm. H. Ramli akan diberikan pada tanggal 05-08-2025 bertempat di Masjid Mukhlishin.">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm btn-delete" data-name="Pengumuman Santunan BSK" data-bs-toggle="modal" data-bs-target="#deleteModal">
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

    <!-- Modal Tambah -->
    <div class="modal fade" id="createModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title">Tambah Pengumuman</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3 d-flex gap-2">
                <div class="col-md-5">
                  <label class="form-label">Tanggal</label>
                  <input type="date" class="form-control">
                </div>
                <div class="col-md-7">
                  <label class="form-label">Kategori</label>
                  <select class="form-select">
                      <option value="kematian">Pilih Kategori</option>
                      <option value="kematian">Kematian</option>
                      <option value="berita">Berita</option>
                  </select>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label">Judul</label>
                <input type="text" class="form-control">
              </div>              
              <div class="mb-3">
                <label class="form-label">Isi</label>
                <textarea class="form-control" rows="3"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button class="btn btn-primary">Simpan</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Detail -->
    <div class="modal fade" id="detailModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header bg-primary text-white">
            <h5 class="modal-title" id="detailTitle">Detail Pengumuman</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <p id="detailContent"></p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Edit -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header bg-warning">
            <h5 class="modal-title">Edit Pengumuman</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            <form>
              <div class="mb-3 d-flex gap-2">
                <div class="col-md-5">
                  <label class="form-label">Tanggal</label>
                  <input type="date" class="form-control">
                </div>
                <div class="col-md-7">
                  <label class="form-label">Kategori</label>
                  <select class="form-select">
                      <option value="kematian">Pilih Kategori</option>
                      <option value="kematian">Kematian</option>
                      <option value="berita">Berita</option>
                  </select>
                </div>
              </div>
              <div class="mb-3">
                <label class="form-label">Judul</label>
                <input type="text" class="form-control">
              </div>              
              <div class="mb-3">
                <label class="form-label">Isi</label>
                <textarea class="form-control" rows="3"></textarea>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button class="btn btn-warning">Update</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Delete -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header bg-danger text-white">
            <h5 class="modal-title">Konfirmasi Hapus</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            Apakah kamu yakin ingin menghapus <strong id="deleteName">pengumuman ini</strong>?
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button class="btn btn-danger">Hapus</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Script: isi detail & delete -->
    <script>
      document.addEventListener("DOMContentLoaded", function() {
        const detailButtons = document.querySelectorAll(".btn-detail");
        const detailTitle = document.getElementById("detailTitle");
        const detailContent = document.getElementById("detailContent");
        const deleteButtons = document.querySelectorAll(".btn-delete");
        const deleteName = document.getElementById("deleteName");

        detailButtons.forEach(btn => {
          btn.addEventListener("click", function() {
            detailTitle.textContent = this.getAttribute("data-judul");
            detailContent.textContent = this.getAttribute("data-isi");
          });
        });

        deleteButtons.forEach(btn => {
          btn.addEventListener("click", function() {
            deleteName.textContent = this.getAttribute("data-name");
          });
        });
      });
    </script>
@endsection
