<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Rent Car</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>
    <div id="app">
        <header>
            <nav class="navbar navbar-expand-md py-3 navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#">Rent Car</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div id="navbarCollapse" class="collapse navbar-collapse">
                        <ul class="navbar-nav
                        mb-2 mb-md-0 mx-auto">
                            <li class="nav-item">
                                <a class="nav-link @yield('home')" href="{{ route('home') }}">
                                    Beranda
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @yield('cars')" href="{{ route('cars') }}">
                                    Mobil
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @yield('contact')" href="{{ route('contact') }}">
                                    Kontak Kami
                                </a>
                            </li>
                        </ul>
                    </div>
                    @guest
                        <div class="d-flex">
                            <a href="/login" class="btn btn-outline-primary">Masuk</a>
                            <a href="/register" class="btn btn-primary ms-3">Daftar</a>
                        </div>
                    @endguest
                    @auth
                        <div class="dropdown">
                            <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenu2"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Profile
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li><a href="{{ route('transaction') }}" class="dropdown-item" type="button">Transaksi</a>
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button class="dropdown-item" type="submit">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        {{-- <div class="d-flex">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="btn btn-outline-primary">Logout</button>
                            </form>
                        </div> --}}
                    @endauth
                </div>
            </nav>
        </header>

        <main class="">
            @yield('content')
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
