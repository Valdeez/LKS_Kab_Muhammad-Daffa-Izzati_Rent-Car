@extends('layouts.app')

@section('content')
    <section class="transactions py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-center
                        mb-4">Transaksi</h2>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Mobil</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Tanggal Sewa</th>
                                <th scope="col">Tanggal Kembali</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Toyota Avanza</td>
                                <td>Rp 300.000</td>
                                <td>12-12-2022</td>
                                <td>15-12-2022</td>
                                <td>
                                    <a href="#" class="btn btn-primary">Bayar</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
