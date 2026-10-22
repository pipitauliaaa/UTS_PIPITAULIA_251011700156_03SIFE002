@extends('layouts.app')

@section('title', 'Tentang Kami - Sewpeda')

@section('content')
<!-- Hero About Section -->
<div class="container my-4">
    <div class="bg-light rounded-4 p-4 p-md-5 border text-center">
        <span class="badge bg-primary text-white fw-bold px-3 py-2 mb-3 rounded-pill">
            Tentang Sewpeda
        </span>
        <h1 class="display-5 fw-bold mb-3">Mendukung Gaya Hidup Sehat & Ramah Lingkungan</h1>
        <p class="lead text-muted mx-auto" style="max-width: 750px;">
            Sewpeda hadir sebagai solusi transportasi alternatif yang praktis, terjangkau, dan menyenangkan untuk membantu Anda menjelajahi kota tanpa kendala kemacetan.
        </p>
    </div>
</div>

<!-- Cerita & Misi Kami -->
<div class="container my-5">
    <div class="row align-items-center g-4">
        <div class="col-lg-6">
            <img src="https://images.unsplash.com/photo-1511994298241-608e28f14fde?auto=format&fit=crop&w=800&q=80" 
                 alt="Cerita Sewpeda" 
                 class="img-fluid rounded-4 shadow">
        </div>
        <div class="col-lg-6">
            <h2 class="fw-bold mb-3">Solusi Gowes Mudah Setiap Hari</h2>
            <p class="text-muted mb-3">
                Berdiri sejak tahun 2023, Sewpeda berdedikasi menyediakan armada sepeda yang bersih, aman, dan siap pakai. Baik untuk kebutuhan komuter harian, sekadar olahraga sore di akhir pekan, maupun petualangan keliling objek wisata.
            </p>
            <p class="text-muted mb-4">
                Kami percaya bahwa bersepeda bukan hanya sekadar olahraga, tetapi juga langkah kecil menuju gaya hidup yang lebih hijau dan kota yang lebih ramah lingkungan.
            </p>
            
            <div class="row g-3">
                <div class="col-6">
                    <div class="border-start border-primary border-4 ps-3">
                        <h4 class="fw-bold mb-0">500+</h4>
                        <small class="text-muted">Armada Sepeda</small>
                    </div>
                </div>
                <div class="col-6">
                    <div class="border-start border-primary border-4 ps-3">
                        <h4 class="fw-bold mb-0">10.000+</h4>
                        <small class="text-muted">Pelanggan Puas</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Cara Kerja / How It Works -->
<div class="bg-light py-5 my-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold">Cara Mudah Menyewa Sepeda</h2>
            <p class="text-muted">Hanya butuh 3 langkah sederhana untuk mulai gowes</p>
        </div>

        <div class="row g-4">
            <div class="col-md-4 text-center">
                <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow" style="width: 60px; height: 60px;">
                    <span class="fs-4 fw-bold">1</span>
                </div>
                <h5 class="fw-bold">Pilih Sepeda</h5>
                <p class="text-muted small">Buka katalog kami dan pilih jenis sepeda yang sesuai dengan kebutuhan perjalanan Anda.</p>
            </div>
            <div class="col-md-4 text-center">
                <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow" style="width: 60px; height: 60px;">
                    <span class="fs-4 fw-bold">2</span>
                </div>
                <h5 class="fw-bold">Isi Data & Bayar</h5>
                <p class="text-muted small">Tentukan tanggal sewa, lengkapi verifikasi data diri, dan lakukan pembayaran online.</p>
            </div>
            <div class="col-md-4 text-center">
                <div class="bg-primary text-white rounded-circle d-inline-flex align-items-center justify-content-center mb-3 shadow" style="width: 60px; height: 60px;">
                    <span class="fs-4 fw-bold">3</span>
                </div>
                <h5 class="fw-bold">Ambil & Nikmati</h5>
                <p class="text-muted small">Ambil sepeda di cabang terdekat atau gunakan layanan pengantaran kami. Selamat gowes!</p>
            </div>
        </div>
    </div>
</div>

<!-- CTA Banner -->
<div class="container my-5">
    <div class="bg-primary bg-gradient text-white rounded-4 p-4 p-md-5 text-center shadow-sm">
        <h3 class="fw-bold mb-2">Ingin Langsung Coba Sepeda Kami?</h3>
        <p class="text-white-50 mb-4">Lihat daftar lengkap ketersediaan unit dan mulai gowes hari ini.</p>
        <a href="/bikes" class="btn btn-light btn-lg text-primary fw-bold px-5 rounded-pill shadow-sm">
            Katalog Kami
        </a>
    </div>
</div>
@endsection