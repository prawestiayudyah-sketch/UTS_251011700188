@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
<div class="container">
    <div class="row align-items-center min-vh-75 py-5">
        <div class="col-lg-6 text-center text-lg-start">
            <h1 class="display-4 fw-bold mb-3" style="color: #4c1d95;">
                Selamat Datang di<br>ElectroStore
            </h1>
            <p class="lead text-muted mb-4">
                Temukan smartphone, laptop, headphone, TV, kamera dan berbagai perangkat elektronik berkualitas dengan harga terbaik.
            </p>
            <a href="{{ route('electronics.index') }}" class="btn btn-primary btn-lg px-5">
                Lihat Produk →
            </a>
        </div>
        <div class="col-lg-6 text-center mt-5 mt-lg-0">
            <div class="p-4 rounded-4" style="background: rgba(255,255,255,0.6);">
                <h3 class="fw-bold mb-3" style="color: #7c3aed;">⚡ ElectroStore</h3>
                <p class="text-muted mb-0">
                    Toko elektronik terpercaya untuk kebutuhan gadget modern Anda.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection