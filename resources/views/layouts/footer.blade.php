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

        <a href="#" class="menu-btn">
            <span class="icon">➕</span> Lainnya
        </a>
    </div>
</footer>   