@extends('layouts.app')

@section('home', 'active')

@section('content')
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="display-4 fw-bold">Sewa Mobil Dengan Harga Terjangkau</h1>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.</p>
                    <a href="{{ route('cars') }}" class="btn btn-primary">Lihat Mobil</a>
                </div>
                <div class="col-lg-6">
                    <img src="assets/images/car-right.png" alt="Hero" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <section class="car">
        <div class="container">
            <h2 class="display-4 fw-bold text-center mb-5">Mobil Kami</h2>
            <div class="row">
                @foreach ($data as $c)
                    <div class="col-12 col-sm-12 col-md-3 col-lg-4">
                        <div class="card card-car">
                            <img src="{{ asset('storage/' . $c->image) }}" alt="{{ $c->name }}" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">{{ $c->name }}</h5>
                                <p class="card-text">Rp. {{ $c->price_per_day }} / Hari</p>
                                <a href="{{ route('car', $c->id) }}" class="btn btn-primary d-block">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
