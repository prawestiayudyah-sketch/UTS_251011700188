@extends('layouts.app')

@section('title', 'Tentang Kami')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow border-0">
                <div class="card-body p-5 text-center">
                    <h2 class="fw-bold mb-3" style="color: #4c1d95;">Tentang ElectroStore</h2>
                    <p class="lead text-muted mb-4">
                        ElectroStore adalah toko elektronik terpercaya yang menyediakan berbagai produk gadget dan perangkat elektronik berkualitas tinggi.
                    </p>
                    <hr>
                    <p class="text-muted">
                        Kami menyediakan smartphone, laptop, headphone, TV, kamera, dan berbagai aksesoris elektronik lainnya dengan harga terbaik dan garansi resmi.
                    </p>
                    <p class="text-muted mb-4">
                        Terima kasih telah mengunjungi toko kami.
                    </p>
                    <a href="{{ route('electronics.index') }}" class="btn btn-primary px-4">
                        ← Kembali ke Beranda
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection