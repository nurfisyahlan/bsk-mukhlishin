<footer class="footer-menu py-2 mt-4">
    <div class="d-flex justify-content-center gap-3">
        <a href="/monitoring-pembayaran" 
        class="menu-btn {{ Request::is('monitoring-pembayaran') ? 'active' : '' }}">
            <span class="icon">📡</span> Pemantauan Pembayaran
        </a>

        <a href="/saldo" 
        class="menu-btn {{ Request::is('saldo') ? 'active' : '' }}">
            <span class="icon">📷</span> Laporan Keuangan
        </a>

        <a href="/inventaris" 
        class="menu-btn {{ Request::is('inventaris') ? 'active' : '' }}">
            <span class="icon">📋</span> Daftar Inventaris
        </a>

        <a href="#" class="menu-btn" data-bs-toggle="modal" data-bs-target="#menuModal">
            <span class="icon">➕</span> Lainnya
        </a>
    </div>

    <!-- Modal Menu -->
        <div class="modal fade" id="menuModal" tabindex="-1" aria-labelledby="menuModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content p-3">
              <div class="modal-header">
                <h5 class="modal-title fw-bold" id="menuModalLabel">Menu Lainnya</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
              </div>
              <div class="modal-body">
                <div class="row g-3 text-center">
                    <div class="col-6">
                        <a href="/monitoring-pembayaran" style="color:black; text-decoration:none;">
                            <div class="info-card">
                                📡<br>Pemantauan Pembayaran
                            </div>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="/saldo" style="color:black; text-decoration:none;">
                            <div class="info-card">
                                📷<br>Laporan Keuangan
                            </div>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="/inventaris" style="color:black; text-decoration:none;">
                            <div class="info-card">
                                📋<br>Daftar Inventaris
                            </div>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="/keluarga" style="color:black; text-decoration:none;">
                            <div class="info-card">
                                👨‍👩‍👧‍👦<br>Data Keluarga
                            </div>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="/kematian" style="color:black; text-decoration:none;">
                            <div class="info-card">
                                ⚰️<br>Kematian
                            </div>
                        </a>
                    </div>
                    <div class="col-6">
                        <a href="/pengumuman" style="color:black; text-decoration:none;">
                            <div class="info-card">
                                📢<br>Pengumuman
                            </div>
                        </a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

</footer>   