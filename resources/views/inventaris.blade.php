<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard BSK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="{{ asset('css/dashboard2.css') }}" rel="stylesheet">

</head>
<body class="pt-2 px-5 pb-5">

    @extends('layouts.app')

    @section('content')
        <div class="container">
            <h2 class="fw-bold text-center mb-4">Inventaris</h4>

            <div class="row g-4 mb-4">
                <div class="inventaris">
                <!-- Search & View Option -->
                <div class="filter-header">
                    <input type="text" class="form-control" placeholder="Cari barang...">
                    <button class="btn btn-search"><i class="bi bi-search"></i></button>
                    <button class="btn btn-toggle"><i class="bi bi-list-ul"></i></button>
                    <button class="btn btn-toggle"><i class="bi bi-grid-3x3-gap"></i></button>
                </div>

                <div class="container">
                    <div class="row g-4">
                        <!-- Item 1 -->
                        <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card h-100 shadow-sm">
                            <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="Inventaris 1">
                            <div class="card-body">
                            <h5 class="card-title">Meja Lipat</h5>
                            <p class="card-text">Jumlah: 5 buah</p>
                            <a href="#" class="btn btn-sm btn-primary">Detail</a>
                            </div>
                        </div>
                        </div>
                        
                        <!-- Item 2 -->
                        <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card h-100 shadow-sm">
                            <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="Inventaris 2">
                            <div class="card-body">
                            <h5 class="card-title">Kursi Plastik</h5>
                            <p class="card-text">Jumlah: 50 buah</p>
                            <a href="#" class="btn btn-sm btn-primary">Detail</a>
                            </div>
                        </div>
                        </div>
                        
                        <!-- Item 3 -->
                        <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card h-100 shadow-sm">
                            <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="Inventaris 3">
                            <div class="card-body">
                            <h5 class="card-title">Tenda</h5>
                            <p class="card-text">Jumlah: 2 buah</p>
                            <a href="#" class="btn btn-sm btn-primary">Detail</a>
                            </div>
                        </div>
                        </div>
                        
                        <!-- Item 4 -->
                        <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card h-100 shadow-sm">
                            <img src="https://via.placeholder.com/200x150" class="card-img-top" alt="Inventaris 4">
                            <div class="card-body">
                            <h5 class="card-title">Sound System</h5>
                            <p class="card-text">Jumlah: 1 set</p>
                            <a href="#" class="btn btn-sm btn-primary">Detail</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
        </div>
        @endsection
            

</body>
</html>
