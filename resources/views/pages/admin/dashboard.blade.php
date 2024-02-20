@extends('layouts.admin')

@section('dashboard', 'active')

@section('content')
    <div class="container py-5">
        <div class="d-flex align-items-center justify-content-between mb-2">
            <div>
                <p class="fs-1">Data Mobil</p>
            </div>
            <div>
                <a href="{{ route('car.create') }}" class="btn btn-sm btn-primary">Tambah Mobil</a>
            </div>
        </div>
        <table class="table table-hover">
            <thead class="">
                <tr class="table-dark">
                    <th scope="col" class="align-middle">No</th>
                    <th scope="col" class="align-middle">Nama Mobil</th>
                    <th scope="col" class="align-middle">Gambar Mobil</th>
                    <th scope="col" class="align-middle">Brand Mobil</th>
                    <th scope="col" class="align-middle">Harga Sewa/Hari</th>
                    <th scope="col" class="align-middle">Stok Mobil</th>
                    <th scope="col" class="align-middle">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data['cars'] as $c)
                    <tr>
                        <th scope="row" class="align-middle">{{ $loop->iteration }}</th>
                        <td class="align-middle">{{ $c->name }}</td>
                        <td class="align-middle"><img src="{{ asset('storage/' . $c->image) }}" alt="{{ $c->name }}"
                                width="150px"></td>

                        <td class="align-middle">{{ $c->brand_name }}</td>
                        <td class="align-middle">{{ $c->price_per_day }}</td>
                        <td class="align-middle">{{ $c->stock }}</td>
                        <td class="align-middle" nowrap>
                            <a href="{{ route('car.edit', $c->id) }}" class="btn btn-sm btn-warning text-white">Edit</a>
                            <form action="{{ route('car.destroy', $c->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
