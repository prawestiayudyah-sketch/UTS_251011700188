@extends('layouts.app')

@section('title', $electronic->name)

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-lg border-0">
                <div class="row g-0">
                    <div class="col-md-5 d-flex align-items-center justify-content-center p-4"
                         style="background: #faf5ff;">
                        <img src="{{ asset('assets/images/' . $electronic->image) }}"
                             class="img-fluid"
                             alt="{{ $electronic->name }}"
                             style="max-height: 400px; object-fit: contain;">
                    </div>

                    <div class="col-md-7">
                        <div class="card-body p-4 p-lg-5">
                            <span class="badge mb-3"
                                  style="background-color: #7c3aed;">
                                {{ $electronic->category }}
                            </span>

                            <h2 class="fw-bold mb-2"
                                style="color: #4c1d95;">
                                {{ $electronic->name }}
                            </h2>

                            <p class="text-muted mb-3">
                                <strong>Brand:</strong> {{ $electronic->brand }}
                            </p>

                            <h3 class="fw-bold mb-4"
                                style="color: #7c3aed;">
                                Rp {{ number_format($electronic->price, 0, ',', '.') }}
                            </h3>

                            <h5 class="fw-semibold mb-2">Spesifikasi:</h5>

                            <p class="text-muted" style="line-height: 1.7;">
                                {{ $electronic->specs }}
                            </p>

                            <hr class="my-4">

                            <a href="{{ route('electronics.index') }}"
                               class="btn btn-secondary px-4">
                                ← Kembali ke Daftar Produk
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
