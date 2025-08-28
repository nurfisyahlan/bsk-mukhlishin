<!-- Sidebar -->
<div id="sidebar" class="bg-dark">
    <div class="p-2">
        <h4 class="text-white mt-2 p-2">BSK Dashboard</h4>
        <nav class="nav flex-column pt-3">
            <a class="nav-link {{ Request::is('admin-dashboard') ? 'active' : '' }}" href="{{ url('admin-dashboard') }}">
                Beranda
            </a>
            <a class="nav-link {{ Request::is('admin-monitoring-pembayaran') ? 'active' : '' }}" href="{{ url('admin-monitoring-pembayaran') }}">
                Monitoring Pembayaran
            </a>
            <a class="nav-link {{ Request::is('admin-kutipan') ? 'active' : '' }}" href="{{ url('admin-kutipan') }}">
                Kutipan
            </a>
            <a class="nav-link {{ Request::is('admin-keluarga') ? 'active' : '' }}" href="{{ url('admin-keluarga') }}">
                Keluarga
            </a>
            <a class="nav-link {{ Request::is('admin-saldo') ? 'active' : '' }}" href="{{ url('admin-saldo') }}">
                Saldo
            </a>
            <a class="nav-link {{ Request::is('admin-inventaris') ? 'active' : '' }}" href="{{ url('admin-inventaris') }}">
                Inventaris
            </a>
            <a class="nav-link {{ Request::is('admin-kematian') ? 'active' : '' }}" href="{{ url('admin-kematian') }}">
                Kematian
            </a>
            <a class="nav-link {{ Request::is('admin-pengumuman') ? 'active' : '' }}" href="{{ url('admin-pengumuman') }}">
                Pengumuman
            </a>
        </nav>
    </div>
</div>