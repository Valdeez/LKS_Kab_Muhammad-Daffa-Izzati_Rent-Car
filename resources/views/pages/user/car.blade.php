@extends('layouts.app')

@section('cars', 'active')

@section('content')
    <section class="detail-car py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ asset('storage/' . $data['car']->image) }}" alt="{{ $data['car']->name }}" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold mb-2">{{ $data['car']->name }} ({{ $data['car']->brand_name }})</h1>
                    <p class="lead mb-3">Rp. {{ $data['car']->price_per_day }}/hari</p>
                    <p class="nav-link active p-0">Stok tersisa {{ $data['car']->stock }}</p>
                    @guest
                        <a href="/login" class="btn btn-primary">Sewa</a>
                    @endguest
                    @auth
                        @if ($data['reservation'] == null || $data['reservation']->status == 'completed')
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSewa">
                                Sewa
                            </button>
                        @elseif ($data['reservation']->status == 'pending')
                            <button type="button" class="btn btn-primary" disabled>
                                Menunggu konfirmasi
                            </button>
                        @else
                            <button type="button" class="btn btn-primary" disabled>
                                Sedang anda sewa
                            </button>
                        @endif
                    @endauth
                </div>
            </div>
        </div>
    </section>
    <!-- modal sewa -->
    @auth
        <div class="modal fade" id="modalSewa" tabindex="-1" aria-labelledby="modalSewaLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalSewaLabel">Sewa Mobil</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body
                    ">
                        <form action="{{ route('reserve', $data['car']->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nama</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" value="{{ $data['user']->name }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ $data['user']->email }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="no_hp" class="form-label">Nomor HP</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon">+62</span>
                                    <input id="no_hp" type="number"
                                        class="form-control @error('no_hp') is-invalid @enderror" name="no_hp"
                                        value="{{ $data['user']->no_hp }}" required autocomplete="no_hp">
                                    @error('no_hp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="start_date" class="form-label">Tanggal Sewa</label>
                                <input type="date" class="form-control @error('start_date') is-invalid @enderror"
                                    id="start_date" name="start_date" value="{{ old('start_date') }}" required
                                    autocomplete="start_date">
                                @error('start_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="end_date" class="form-label">Tanggal Kembali</label>
                                <input type="date" class="form-control @error('end_date') is-invalid @enderror"
                                    id="end_date" name="end_date" value="{{ old('end_date') }}" required
                                    autocomplete="end_date">
                                @error('end_date')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="proof" class="form-label">Bukti Pembayaran</label>
                                <input class="form-control @error('proof') is-invalid @enderror" name="proof"
                                    type="file" id="proof" required>
                                @error('proof')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Sewa</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endauth
@endsection
