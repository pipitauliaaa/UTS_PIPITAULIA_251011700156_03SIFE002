@extends('layouts.app')

@section('title', $bike->brand . ' - Detail Sepeda')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="mb-4">
                <a href="{{ route('bike.index') }}" class="btn btn-outline-secondary btn-sm rounded-pill px-3">
                    &larr; Kembali ke Katalog
                </a>
            </div>
            
            <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
                <div class="row g-0">
                    <div class="col-md-6 bg-light d-flex align-items-center justify-content-center p-4">
                        <img src="{{ asset('images/' . $bike->image) }}" 
                             class="img-fluid rounded" 
                             style="max-height: 350px; object-fit: contain;" 
                             alt="{{ $bike->brand }}"
                             onerror="this.src='https://images.unsplash.com/photo-1485965120184-e220f721d03e?auto=format&fit=crop&w=600&q=80'">
                    </div>
                    <div class="col-md-6 d-flex flex-column">
                        <div class="card-body p-4 p-lg-5 d-flex flex-column justify-content-between">
                            <div>
                                <span class="badge bg-primary bg-opacity-10 text-primary mb-2 px-3 py-1 rounded-pill">{{ $bike->type }}</span>
                                <h2 class="fw-bold mb-3">{{ $bike->brand }}</h2>
                                
                                <h3 class="text-primary fw-bold mb-4">
                                    Rp {{ number_format($bike->rent_price, 0, ',', '.') }} <small class="text-muted fs-6 fw-normal">/ hari</small>
                                </h3>

                                <ul class="list-unstyled mb-4">
                                    <li class="mb-2 text-muted"><strong>Jumlah Gear:</strong> {{ $bike->gear_count }} Speed</li>
                                    <li class="mb-2 text-muted"><strong>Status:</strong> 
                                        @if($bike->available)
                                            <span class="badge bg-success">Tersedia</span>
                                        @else
                                            <span class="badge bg-danger">Disewa</span>
                                        @endif
                                    </li>
                                </ul>
                            </div>

                            <div>
                                @if($bike->available)
                                    <a href="{{ route('kontak') }}" class="btn btn-primary w-100 rounded-pill py-2 fw-bold shadow-sm">
                                        Sewa Sekarang
                                    </a>
                                @else
                                    <button class="btn btn-secondary w-100 rounded-pill py-2 fw-bold" disabled>
                                        Sedang Tidak Tersedia
                                    </button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection