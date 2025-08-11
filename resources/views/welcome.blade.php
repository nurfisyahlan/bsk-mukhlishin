<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard BSK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: Poppins, sans-serif;
        }
        /* Sidebar */
        #sidebar {
            min-width: 250px;
            max-width: 250px;
            min-height: 100vh;
            background: #343a40;
            color: #fff;
            transition: all 0.3s;
        }
        #sidebar .nav-link {
            color: #fff;
        }
        #sidebar.collapsed {
            margin-left: -250px;
        }
        /* Content */
        #content {
            transition: all 0.3s;
        }
        /* Footer */
        footer {
            background: #f8f9fa;
            padding: 10px;
            text-align: center;
            font-size: 14px;
            color: #6c757d;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar" class="bg-dark">
        <div class="p-3">
            <h4 class="text-white">BSK Dashboard</h4>
            <nav class="nav flex-column">
                <a class="nav-link" href="#">Beranda</a>
                <a class="nav-link" href="#">Monitoring Pembayaran</a>
                <a class="nav-link" href="#">Keluarga</a>
                <a class="nav-link" href="#">Saldo</a>
                <a class="nav-link" href="#">Inventaris</a>
            </nav>
        </div>
    </div>

    <!-- Page Content -->
    <div id="content" class="flex-grow-1">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm">
            <div class="container-fluid">
                <button class="btn btn-outline-primary me-3" id="sidebarToggle">☰</button>
                <a class="navbar-brand fw-bold" href="#">Badan Sosial Kematian</a>
            </div>
        </nav>

        <!-- Header -->
        <div class="container mt-4">
            <h2 class="fw-bold mb-4">Beranda</h2>

            <!-- Grid Tabel -->
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white">Monitoring Pembayaran</div>
                        <div class="card-body p-0">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Bulan</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>Contoh 1</td><td>Januari</td><td>Lunas</td></tr>
                                    <tr><td>Contoh 2</td><td>Februari</td><td>Belum</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-success text-white">Data Keluarga</div>
                        <div class="card-body p-0">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Kepala Keluarga</th>
                                        <th>Jumlah Anggota</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>Pak Ahmad</td><td>5</td></tr>
                                    <tr><td>Bu Siti</td><td>4</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-warning text-dark">Rekap Saldo Masuk/Keluar</div>
                        <div class="card-body p-0">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>Keterangan</th>
                                        <th>Masuk</th>
                                        <th>Keluar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>01-08-2025</td><td>Iuran Bulanan</td><td>Rp500.000</td><td>-</td></tr>
                                    <tr><td>03-08-2025</td><td>Biaya Pemakaman</td><td>-</td><td>Rp300.000</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card shadow-sm">
                        <div class="card-header bg-info text-white">Inventaris</div>
                        <div class="card-body p-0">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Nama Barang</th>
                                        <th>Jumlah</th>
                                        <th>Kondisi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><td>Kain Kafan</td><td>10</td><td>Baik</td></tr>
                                    <tr><td>Kursi</td><td>20</td><td>Baik</td></tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="mt-4">
                &copy; {{ date('Y') }} Badan Sosial Kematian - Semua Hak Dilindungi
            </footer>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('sidebarToggle').addEventListener('click', function () {
        document.getElementById('sidebar').classList.toggle('collapsed');
    });
</script>
</body>
</html>
