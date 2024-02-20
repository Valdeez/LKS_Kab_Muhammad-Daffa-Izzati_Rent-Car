@extends('layouts.app')

@section('contact', 'active')

@section('content')
    <section class="contact py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="display-4 fw-bold">Kontak Kami</h2>
                    <p class="lead">Jika
                        Anda memiliki pertanyaan, silakan hubungi kami melalui formulir di bawah ini. Kami akan
                        merespons secepatnya.</p>
                </div>
                <div class="col-lg-6">
                    <form action="">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea class="form-control" id="message" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
