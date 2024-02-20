@extends('layouts.admin')

@section('content')
    <div class="container py-5">
        <div class="d-flex align-items-center justify-content-between mb-2">
            <div>
                <p class="fs-1">Form Edit Mobil</p>
            </div>
        </div>
        <div>
            <form method="POST" action="{{ route('car.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nama Mobil</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                        name="name" value="{{ $data->name }}" required autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Pilih Gambar Mobil</label>
                    <input class="form-control @error('image') is-invalid @enderror" name="image" type="file"
                        id="image">
                    @error('image')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="brand_name" class="form-label">Nama Brand Mobil</label>
                    <input id="brand_name" type="text" class="form-control @error('brand_name') is-invalid @enderror"
                        name="brand_name" value="{{ $data->brand_name }}" required>
                    @error('brand_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price_per_day" class="form-label">Harga Mobil/Hari</label>
                    <input id="price_per_day" type="number"
                        class="form-control @error('price_per_day') is-invalid @enderror" name="price_per_day"
                        value="{{ $data->price_per_day }}" required>
                    @error('price_per_day')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="stock" class="form-label">Stok Mobil</label>
                    <input id="stock" type="number" class="form-control @error('stock') is-invalid @enderror"
                        name="stock" value="{{ $data->stock }}" required>
                    @error('stock')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Edit</button>
            </form>
        </div>
    </div>
@endsection
