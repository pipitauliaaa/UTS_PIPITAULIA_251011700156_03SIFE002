@extends('layouts.app')

@section('title', 'Sewa Sepeda Mudah & Cepat - Sewpeda')

@section('content')
<!-- Hero Section -->
<div class="container my-4">
    <div class="row align-items-center bg-primary bg-gradient text-white rounded-4 p-4 p-md-5 shadow-lg position-relative overflow-hidden">
        <div class="col-lg-7 z-1">
            <span class="badge bg-light text-primary fw-bold px-3 py-2 mb-3 rounded-pill">
                🚴 Keliling Kota Jadi Lebih Mudah
            </span>
            <h1 class="display-4 fw-extrabold mb-3 lh-sm">
                Sewa Sepeda Favoritmu Tanpa Ribet
            </h1>
            <p class="lead mb-4 text-white-50">
                Jelajahi sudut kota, olahraga santai, atau commuting harian dengan armada sepeda berkualitas, terawat, dan harga ramah kantong.
            </p>
            <div class="d-flex flex-wrap gap-2">
                <a href="/bikes" class="btn btn-light btn-lg text-primary fw-bold px-4 rounded-pill shadow-sm">
                    Katalog Kami
                </a>
                <a href="#fitur" class="btn btn-outline-light btn-lg px-4 rounded-pill">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>
        <div class="col-lg-5 text-center mt-4 mt-lg-0 z-1">
            <img src="https://images.unsplash.com/photo-1485965120184-e220f721d03e?auto=format&fit=crop&w=600&q=80" 
                 alt="Sepeda Rental" 
                 class="img-fluid rounded-4 shadow me-lg-3" 
                 style="max-height: 320px; object-fit: cover;">
        </div>
    </div>
</div>

<!-- Feature Section -->
<div id="fitur" class="container my-5 py-4">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Mengapa Memilih Sewpeda?</h2>
        <p class="text-muted">Kenyamanan dan keamanan berkendara Anda adalah prioritas kami.</p>
    </div>
    
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center p-4 rounded-4">
                <div class="mb-3 text-primary fs-1">🛠️</div>
                <h5 class="fw-bold">Kondisi Prima</h5>
                <p class="text-muted small mb-0">Setiap sepeda selalu diservis dan dibersihkan secara rutin sebelum dan sesudah digunakan.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center p-4 rounded-4">
                <div class="mb-3 text-primary fs-1">🛡️</div>
                <h5 class="fw-bold">Termasuk Helm & Kunci</h5>
                <p class="text-muted small mb-0">Setiap penyewaan sudah dilengkapi perlengkapan keselamatan standar gratis.</p>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm text-center p-4 rounded-4">
                <div class="mb-3 text-primary fs-1">⚡</div>
                <h5 class="fw-bold">Proses Cepat</h5>
                <p class="text-muted small mb-0">Pesan secara online dalam 2 menit, verifikasi instant, dan siap gowes!</p>
            </div>
        </div>
    </div>
</div>

<!-- CTA Banner -->
<div class="container my-5">
    <div class="bg-light rounded-4 p-4 p-md-5 text-center border">
        <h3 class="fw-bold mb-2">Siap untuk Petualangan Berikutnya?</h3>
        <p class="text-muted mb-4">Temukan unit sepeda terbaik dan mulai perjalananmu hari ini.</p>
        <a href="/bikes" class="btn btn-primary btn-lg fw-bold px-5 rounded-pill">
            Katalog Kami
        </a>
    </div>
</div>
@endsection