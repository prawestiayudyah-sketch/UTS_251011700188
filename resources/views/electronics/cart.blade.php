@extends('layouts.app')

@section('title', 'Keranjang')

@section('content')
<div class="container">
    <h2 class="fw-bold mb-4 text-center" style="color: #4c1d95;">Keranjang Belanja</h2>

    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    @if(empty($cart) || count($products) == 0)
        <div class="card shadow border-0">
            <div class="card-body p-5 text-center">
                <p class="lead text-muted mb-4">Keranjang Anda masih kosong.</p>
                <a href="{{ route('electronics.index') }}" class="btn btn-primary px-4">
                    ← Lihat Produk
                </a>
            </div>
        </div>
    @else
        <div class="row g-4">
            @foreach($products as $item)
                <div class="col-md-6">
                    <div class="card shadow-sm h-100">
                        <div class="row g-0">
                            <div class="col-4 d-flex align-items-center justify-content-center p-2">
                                <img src="{{ asset('assets/images/' . $item->image) }}" 
                                     class="img-fluid" 
                                     style="max-height: 120px; object-fit: contain;"
                                     alt="{{ $item->name }}">
                            </div>
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-title fw-bold">{{ $item->name }}</h5>
                                    <p class="text-muted small mb-1">Brand: {{ $item->brand }}</p>
                                    <p class="fw-bold mb-2" style="color: #7c3aed;">
                                        Rp {{ number_format($item->price, 0, ',', '.') }}
                                    </p>
                                    <p class="small mb-2">Jumlah: {{ $cart[$item->id]['quantity'] }}</p>
                                    <a href="{{ route('cart.remove', $item->id) }}" 
                                       class="btn btn-sm btn-outline-danger">
                                        Hapus
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('electronics.index') }}" class="btn btn-secondary px-4">
                ← Lanjut Belanja
            </a>
        </div>
    @endif
</div>
@endsection