@extends('layouts.app')

@section('cars', 'active')

@section('content')
    <section class="car py-5">
        <div class="container">
            <div class="row">
                <!-- search -->
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <form action="" class="d-flex justify-content-center align-items-center gap-3">
                        <input type="text" class="form-control search-input" placeholder="Cari Mobil">
                        <button class="btn btn-primary btn-search">Cari</button>
                    </form>

                </div>
            </div>
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
