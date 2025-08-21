<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kematian - BSK</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('css/dashboard2.css') }}" rel="stylesheet">
</head>
<body class="pt-2 px-5 pb-5">

@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fw-bold text-center mb-4">Pengumuman</h2>

    
    <!-- Card Berita Kematian -->
    <div class="card shadow-sm mb-3">        
        <div class="card-body">
            <div class="filter-header">
                <input type="text" class="form-control" placeholder="Cari Pengumuman...">
                <button class="btn btn-search"><i class="bi bi-search"></i></button>
                <button class="btn btn-toggle"><i class="bi bi-list-ul"></i></button>
                <button class="btn btn-toggle"><i class="bi bi-grid-3x3-gap"></i></button>
            </div>
            <h5 class="card-title fw-bold">Berita Duka: Alm. H. Ramli bin Abdullah</h5>
            <p class="card-text text-muted mb-1"><i class="bi bi-calendar-event"></i> 15 Agustus 2025</p>
            <p class="card-text text-muted"><i class="bi bi-geo-alt"></i> RT 02/RW 01 - Masjid Mukhlisin</p>
            <p class="card-text news-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt aperiam, obcaecati pariatur, repudiandae magnam accusantium commodi nulla soluta harum quas quod exercitationem officia sapiente laudantium possimus veniam sequi. Dolorem quasi aspernatur ex vero, dolorum ea, nulla recusandae aut saepe, labore facilis obcaecati? Sit odit nihil laudantium aspernatur ducimus explicabo accusamus, quam numquam deserunt voluptatibus aliquam incidunt cupiditate ut animi reiciendis doloribus. Corporis animi quibusdam, accusantium nesciunt consequatur neque a inventore sit quam commodi accusamus nobis nulla quae velit dolorem natus molestias ea nostrum ipsa porro aperiam. Maxime, pariatur molestiae voluptatem, eius molestias quis quaerat omnis placeat rem dolores tempora debitis? Klik detail untuk informasi selengkapnya.</p>
            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal">
                <i class="bi bi-info-circle"></i> Detail
            </button>
        </div>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll(".news-content").forEach(function (el) {
                let words = el.innerText.trim().split(/\s+/); // pisah jadi array kata
                if (words.length > 20) {
                    el.innerText = words.slice(0, 20).join(" ") + " ...";
                }
            });
        });
    </script>

    <!-- Modal Detail -->
    <div class="modal fade" id="detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title fw-bold" id="detailModalLabel">Berita Duka: Alm. H. Ramli bin Abdullah</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
          </div>
          <div class="modal-body">
            <p><strong>Tanggal:</strong> 15 Agustus 2025</p>
            <p><strong>Nama Anggota:</strong> H. Ramli bin Abdullah</p>
            <p><strong>Keluarga:</strong> Kepala Keluarga Ramli Khatib</p>
            <p><strong>Alamat:</strong> RT 02/RW 01 - Kelurahan X, Pekanbaru</p>
            <p><strong>Status Santunan:</strong> Sudah diberikan</p>
            <hr>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid sapiente obcaecati enim pariatur repellat, nobis quos modi! Facere aliquam eius similique ex alias exercitationem ipsa expedita eligendi odit provident rerum repellendus doloremque, aspernatur, culpa blanditiis delectus unde cum debitis dignissimos! Quae molestiae esse aliquam, mollitia numquam in fugit qui error consequuntur nam tenetur, quia tempora? Ex adipisci ipsam mollitia, perferendis expedita nemo ipsum exercitationem iste, placeat veritatis id repellat harum cum vel? Unde similique voluptas assumenda dolorem iusto, vel tenetur architecto, quis, voluptatibus suscipit omnis quo quasi possimus reiciendis porro? Minima velit harum tenetur modi facilis aut neque quo incidunt.
            </p>
          </div>
        </div>
      </div>
    </div>
</div>
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
