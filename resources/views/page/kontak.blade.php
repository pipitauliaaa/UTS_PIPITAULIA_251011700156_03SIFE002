@extends('layouts.app')

@section('title', 'Hubungi Kami - Sewpeda')

@section('content')
<!-- Header Section -->
<div class="container my-4">
    <div class="bg-light rounded-4 p-4 p-md-5 border text-center">
        <span class="badge bg-primary text-white fw-bold px-3 py-2 mb-3 rounded-pill">
            Hubungi Kami
        </span>
        <h1 class="display-5 fw-bold mb-3">Ada Pertanyaan atau Butuh Bantuan?</h1>
        <p class="lead text-muted mx-auto" style="max-width: 650px;">
            Tim Sewpeda siap membantu Anda. Silakan hubungi kami melalui formulir di bawah ini atau melalui kontak resmi kami.
        </p>
    </div>
</div>

<div class="container my-5">
    <div class="row g-4">
        <!-- Informasi Kontak & Jam Operasional -->
        <div class="col-lg-5">
            <div class="card border-0 shadow-sm rounded-4 p-4 h-100">
                <h4 class="fw-bold mb-4">Informasi Kontak</h4>

                <div class="d-flex align-items-start mb-4">
                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3 fs-5">
                        📍
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Lokasi Garasi / Kantor</h6>
                        <p class="text-muted small mb-0">Jl. Pemuda No. 123, Kel. Rawamangun, Kec. Pulo Gadung, Jakarta Timur</p>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-4">
                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3 fs-5">
                        📞
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Telepon / WhatsApp</h6>
                        <p class="text-muted small mb-0">+62 812-3456-7890</p>
                    </div>
                </div>

                <div class="d-flex align-items-start mb-4">
                    <div class="bg-primary bg-opacity-10 text-primary rounded-circle p-3 me-3 fs-5">
                        ✉️
                    </div>
                    <div>
                        <h6 class="fw-bold mb-1">Email Support</h6>
                        <p class="text-muted small mb-0">info@sewpeda.com / cs@sewpeda.com</p>
                    </div>
                </div>

                <hr class="my-4">

                <h5 class="fw-bold mb-3">Jam Operasional</h5>
                <ul class="list-unstyled text-muted small mb-0">
                    <li class="d-flex justify-content-between mb-2">
                        <span>Senin - Jumat:</span>
                        <span class="fw-bold text-dark">07:00 - 20:00 WIB</span>
                    </li>
                    <li class="d-flex justify-content-between mb-2">
                        <span>Sabtu - Minggu:</span>
                        <span class="fw-bold text-dark">06:00 - 21:00 WIB</span>
                    </li>
                    <li class="d-flex justify-content-between">
                        <span>Hari Libur Nasional:</span>
                        <span class="fw-bold text-primary">Kemitraan Tetap Buka</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Form Kirim Pesan -->
        <div class="col-lg-7">
            <div class="card border-0 shadow-sm rounded-4 p-4 p-md-5 h-100">
                <h4 class="fw-bold mb-2">Kirim Pesan</h4>
                <p class="text-muted small mb-4">Isi formulir di bawah ini dan tim kami akan membalas pesan Anda sesegera mungkin.</p>

                <!-- Alert jika ada pesan sukses (Optional Laravel Flash Message) -->
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show rounded-3" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <form action="/contact" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label small fw-bold text-muted">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control border-0 bg-light py-2 rounded-3" placeholder="Contoh: Budi Santoso" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label small fw-bold text-muted">Email</label>
                            <input type="email" name="email" class="form-control border-0 bg-light py-2 rounded-3" placeholder="nama@email.com" required>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label small fw-bold text-muted">Nomor WhatsApp</label>
                            <input type="tel" name="phone" class="form-control border-0 bg-light py-2 rounded-3" placeholder="081234567890">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label small fw-bold text-muted">Subjek / Topik</label>
                            <select name="subject" class="form-select border-0 bg-light py-2 rounded-3">
                                <option value="Pertanyaan Umum">Pertanyaan Umum</option>
                                <option value="Sewa Event / Rombongan">Sewa Event / Group (Rombongan)</option>
                                <option value="Kendala Transaksi">Kendala Transaksi & Pembayaran</option>
                                <option value="Kemitraan">Kemitraan & Kerjasama</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label class="form-label small fw-bold text-muted">Pesan Anda</label>
                            <textarea name="message" rows="4" class="form-control border-0 bg-light rounded-3" placeholder="Tuliskan pertanyaan atau kebutuhan Anda di sini..." required></textarea>
                        </div>
                        <div class="col-12 mt-4">
                            <button type="submit" class="btn btn-primary fw-bold px-4 py-2 rounded-pill w-100">
                                Kirim Pesan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Google Maps Embed -->
<div class="container my-5">
    <div class="card border-0 shadow-sm rounded-4 overflow-hidden">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.81956135000001!3d-6.194741399999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTEnNDEuMSJTIDEwNsKwNDknMTAuNCJF!5e0!3m2!1sid!2sid!4v1630000000000!5m2!1sid!2sid" 
            width="100%" 
            height="350" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</div>
@endsection