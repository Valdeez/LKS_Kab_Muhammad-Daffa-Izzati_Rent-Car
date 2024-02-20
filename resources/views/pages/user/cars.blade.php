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
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="card card-car">
                        <img src="assets/images/car-01.jpg" alt="Car" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">Mobil 1</h5>
                            <p class="card-text">Rp. 200.000 / Hari</p>
                            <a href="{{ route('car') }}" class="btn btn-primary d-block">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="card card-car">
                        <img src="assets/images/car-06.jpg" alt="Car" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title
                                ">Mobil 2</h5>
                            <p class="card-text">Rp. 200.000 / Hari</p>
                            <a href="{{ route('car') }}" class="btn btn-primary d-block">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="card card-car">
                        <img src="assets/images/car-08.jpg" alt="Car" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title
                                ">Mobil 3</h5>
                            <p class="card-text">Rp. 200.000 / Hari</p>
                            <a href="{{ route('car') }}" class="btn btn-primary d-block">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="card card-car">
                        <img src="assets/images/car-08.jpg" alt="Car" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title
                                                ">Mobil 3</h5>
                            <p class="card-text">Rp. 200.000 / Hari</p>
                            <a href="{{ route('car') }}" class="btn btn-primary d-block">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="card card-car">
                        <img src="assets/images/car-08.jpg" alt="Car" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title
                                                ">Mobil 3</h5>
                            <p class="card-text">Rp. 200.000 / Hari</p>
                            <a href="{{ route('car') }}" class="btn btn-primary d-block">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="card card-car">
                        <img src="assets/images/car-08.jpg" alt="Car" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title
                                                ">Mobil 3</h5>
                            <p class="card-text">Rp. 200.000 / Hari</p>
                            <a href="{{ route('car') }}" class="btn btn-primary d-block">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="card card-car">
                        <img src="assets/images/car-08.jpg" alt="Car" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title
                                                ">Mobil 3</h5>
                            <p class="card-text">Rp. 200.000 / Hari</p>
                            <a href="{{ route('car') }}" class="btn btn-primary d-block">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="card card-car">
                        <img src="assets/images/car-08.jpg" alt="Car" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title
                                                ">Mobil 3</h5>
                            <p class="card-text">Rp. 200.000 / Hari</p>
                            <a href="{{ route('car') }}" class="btn btn-primary d-block">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
