@extends('layouts.app')

@section('cars', 'active')

@section('content')
    <section class="detail-car py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="assets/images/car-01.jpg" alt="car" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold mb-2">Toyota Avanza (Toyota)</h1>
                    <p class="lead">Rp. 300.000/hari</p>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSewa">
                        Sewa
                    </button>
                </div>
            </div>
        </div>
    </section>
    <!-- modal sewa -->
    <div class="modal fade" id="modalSewa" tabindex="-1" aria-labelledby="modalSewaLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalSewaLabel">Sewa Mobil</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body
                    ">
                    <form action="">
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="nama">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="telp" class="form-label">No. Telp</label>
                            <input type="text" class="form-control" id="telp">
                        </div>
                        <div class="mb-3">
                            <label for="alamat" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="tgl-sewa" class="form-label">Tanggal Sewa</label>
                            <input type="date" class="form-control" id="tgl-sewa">
                        </div>
                        <div class="mb-3">
                            <label for="tgl-kembali" class="form-label">Tanggal Kembali</label>
                            <input type="date" class="form-control" id="tgl-kembali">
                        </div>
                        <div class="mb-3">
                            <label for="bukti" class="form-label">Bukti Pembayaran</label>
                            <input type="file" class="form-control" id="bukti">
                        </div>
                        <a href="success.html" class="btn btn-primary">Sewa</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
