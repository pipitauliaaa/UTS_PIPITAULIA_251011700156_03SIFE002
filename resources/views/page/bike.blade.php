@extends('layouts.app')

@section('title', 'Katalog Sepeda - Sewpeda')

@section('content')
<div class="container my-4">
    <div class="text-center mb-5">
        <span class="badge bg-primary text-white fw-bold px-3 py-2 mb-2 rounded-pill">Armada Kami</span>
        <h2 class="fw-bold">Katalog Sepeda Sewpeda</h2>
        <p class="text-muted">Pilih sepeda terbaik yang siap menamani perjalanan dan aktivitas harianmu.</p>
    </div>

    <div class="row g-4">
        @forelse($bikes as $bike)
            <div class="col-md-4 mb-3">
                <div class="card h-100 shadow-sm border-0 rounded-4 overflow-hidden">
                    <!-- Gambar Sepeda -->
                    <div class="bg-light text-center p-3">
                        <img src="{{ asset('images/' . $bike->image) }}" 
                        class="card-img-top" 
                        style="height: 250px; object-fit: contain;" 
                        alt="{{ $bike->brand }}"
                        onerror="alert('Gagal memuat gambar: {{ $bike->image }}')">
                    </div>

                    <div class="card-body text-center p-4">
                        <span class="badge bg-primary bg-opacity-10 text-primary mb-2 px-3 py-1 rounded-pill">{{ $bike->type }}</span>
                        <h4 class="card-title fw-bold mb-2">{{ $bike->brand }}</h4>
                        
                        <div class="text-muted small mb-3">
                            <span>⚙️ Gear: {{ $bike->gear_count }} Speed</span>
                        </div>

                        <h5 class="text-primary fw-bold mb-0">
                            Rp {{ number_format($bike->rent_price, 0, ',', '.') }} <small class="text-muted fs-6 fw-normal">/ hari</small>
                        </h5>
                    </div>

                    <div class="card-footer bg-white border-0 p-3 pt-0 text-center">
                        <a href="{{ route('bike.show', $bike->id) }}" class="btn btn-outline-primary w-100 rounded-pill fw-bold py-2">
                            Lihat Detail & Sewa
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <p class="text-muted">Belum ada armada sepeda yang tersedia saat ini.</p>
            </div>
        @endforelse
    </div>

    <!-- Paginasi -->
    <div class="d-flex justify-content-center mt-5">
        {{ $bikes->links() }}
    </div>
</div>
@endsection