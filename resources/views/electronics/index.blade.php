@extends('layouts.app')

@section('title', 'Daftar Produk')

@section('content')
<div class="container">
    <div class="text-center mb-5">
        <h1 class="display-5 fw-bold" style="color: #4c1d95;">Toko Elektronik</h1>
        <p class="lead" style="color: #6b21a8;">Temukan gadget dan perangkat elektronik terbaik</p>
    </div>

    <div class="row g-4">
        @foreach ($electronics as $item)
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm">
                    <img src="{{ asset('assets/images/' . $item->image) }}" 
                         class="card-img-top product-img" 
                         alt="{{ $item->name }}">
                    
                    <div class="card-body d-flex flex-column">
                        <span class="badge mb-2 align-self-start" style="background-color: #7c3aed;">
                            {{ $item->category }}
                        </span>
                        
                        <h5 class="card-title fw-bold">{{ $item->name }}</h5>
                        
                        <p class="card-text text-muted small mb-1">
                            <strong>Brand:</strong> {{ $item->brand }}
                        </p>
                        
                        <p class="card-text fw-bold fs-5 mt-auto" style="color: #7c3aed;">
                            Rp {{ number_format($item->price, 0, ',', '.') }}
                        </p>
                        <div class="d-grid gap-2 mt-2">
                          <a href="{{ route('electronics.show', $item->id) }}"
                            class="btn btn-outline-dark">
                                Lihat Detail →
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection