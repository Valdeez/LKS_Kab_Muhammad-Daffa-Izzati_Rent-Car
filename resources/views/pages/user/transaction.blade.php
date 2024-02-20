@extends('layouts.app')

@section('content')
    <section class="transactions py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2 class="text-center
                        mb-4">Transaksi</h2>
                    <table class="table table-hover">
                        <thead class="">
                            <tr class="">
                                <th scope="col" class="align-middle">No</th>
                                <th scope="col" class="align-middle">Nama Mobil</th>
                                <th scope="col" class="align-middle">Harga Mobil</th>
                                <th scope="col" class="align-middle">Tanggal Sewa</th>
                                <th scope="col" class="align-middle">Tanggal Kembali</th>
                                <th scope="col" class="align-middle">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data['reservations'] as $r)
                                <tr>
                                    <th scope="row" class="align-middle">{ { $loop->iteration }}</th>
                                    <td class="align-middle">{{ $r->car->name }}</td>
                                    <td class="align-middle">{{ \Carbon\Carbon::parse($r->start_date)->format('d F Y') }}
                                    </td>
                                    <td class="align-middle">{{ \Carbon\Carbon::parse($r->end_date)->format('d F Y') }}</td>
                                    @if ($r->payment_status == 'pending')
                                        <td class="align-middle" nowrap>
                                            <a href="{{ route('car.reservation', ['id' => $r->id, 'trigger' => 1]) }}"
                                                class="btn btn-sm btn-primary">Bayar</a>
                                        </td>
                                    @else
                                        <td class="align-middle" nowrap>
                                            <a href="{{ route('car.reservation', ['id' => $r->id, 'trigger' => 0]) }}"
                                                class="btn btn-sm btn-info text-white">Kembalikan</a>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
