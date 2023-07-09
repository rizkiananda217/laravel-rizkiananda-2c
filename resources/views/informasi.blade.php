<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="{{ asset('images/logo.ico') }}">

    <title>Pajak-Kendaraan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('') }}">



</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark py-3 fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('images/logo.png') }}" height="55" width="55" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link active text-black" aria-current="page" href="home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-black" href="informasi">Informasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-black" href="#">Perhitungan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-black" href="#">Pembayaran</a>
                    </li>
                </ul>
                @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @endif

                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                <div class="d-flex">
                    
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->
    
    <section id="hero" class="px-0">
        <div class="container text-center text-white">
            <div class="hero-title">
                <div class="hero-text">Bayarlah Pajak Kendaraan Anda Tepat Pada Waktunya!!!</div>
                <h4>Dimana Pun dan Kapanpun</h4>

            </div>
        </div>
    </section>

    <section id="menu" style="margin-top: -30px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <h5>Kendaraan Roda Dua </h5>
                        </div>
                        <img src="{{ asset('images/2.jpg') }}" height="55" width="55" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <h5>Kendaraan Roda Tiga </h5>
                        </div>
                        <img src="{{ asset('images/3.jpg') }}" height="55" width="55" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="bg-white rounded-3 shadow p-3 d-flex justify-content-between align-items-center">
                        <div>
                            <h5>Kendaraan Roda Empat </h5>
                        </div>
                        <img src="{{ asset('images/4.jpg') }}" height="55" width="55" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- awal Informasi -->
    <section id="informasi py-5">
        <div class="container py-5">
            <div class="header-informasi text-center">
                <h2 class="fw-bold">Informasi Pajak Kendaraan</h2>
            </div>
            <div class="row py-5">
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('images/info4.jpg') }}" class="img-fluid mb-3" alt="">
                        <div class="konten-informasi">
                            <p class="mb-3 text-secondary">21/07/2023</p>
                            <h4 class="fw-bold mb-3">Pembayaran Manual Pajak Kendaraan</h4>
                            <p class="text-secondary">#samsatlhokseumawe <br>#Aceh</p>
                            <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('images/info2.jpg') }}" class="img-fluid mb-3" alt="">
                        <div class="konten-informasi">
                            <p class="mb-3 text-secondary">21/07/2023</p>
                            <h4 class="fw-bold mb-3">Pembayaran Manual Pajak Kendaraan</h4>
                            <p class="text-secondary">#samsatlhokseumawe <br>#Aceh</p>
                            <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('images/info3.jpg') }}" class="img-fluid mb-3" alt="">
                        <div class="konten-informasi">
                            <p class="mb-3 text-secondary">21/07/2023</p>
                            <h4 class="fw-bold mb-3">Pembayaran Manual Pajak Kendaraan</h4>
                            <p class="text-secondary">#samsatlhokseumawe <br>#Aceh</p>
                            <a href="" class="text-decoration-none text-danger">Selengkapnya</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-informasi text-center">
                <a href="" class="btn btn-outline-danger">Informasi Lainnya</a>
            </div>
        </div>
    </section>
    <!-- akhir informasi -->


    <!-- awal footer -->
    <section id="footer" class="bg-white">
        <div class="container py-4">
            <footer>
                <div class="row">
                    <!-- kolom-1 navigasi -->
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3">Navigasi</h5>
                        <div class="d-flex">
                            <ul class="nav flex-column me-5">
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Informasi</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Perhitungan</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pembayaran</a>
                                </li>
                            </ul>
                            <ul class="nav flex-column me-5">
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Online</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Berita</a>
                                </li>
                                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pajak</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- kolom-2 media sosial -->
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3">Follow Kami</h5>
                        <div class="d-flex mb-3">
                            <a href="" target="_blank" class="text-decoration-none text-dark">
                                <img src="{{ asset('images/ig.jpg') }}" height="30" width="30" class="me-4" alt="">
                            </a>
                            <a href="" target="_blank" class="text-decoration-none text-dark">
                                <img src="{{ asset('images/fc.jpg') }}" height="30" width="30" class="me-4" alt="">
                            </a>
                            <a href="" target="_blank" class="text-decoration-none text-dark">
                                <img src="{{ asset('images/tt.jpg') }}" height="30" width="30" class="me-4" alt="">
                            </a>
                            <a href="" target="_blank" class="text-decoration-none text-dark">
                                <img src="{{ asset('images/yt.jpg') }}" height="30" width="30" class="me-4" alt="">
                            </a>

                        </div>
                    </div>
                    <!-- kolom-3 kontak -->
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="fw-bold mb-3">Kontak Kami</h5>
                        <ul class="nav flex-column ">
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">samsatlhok.com</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">0824-9867-0978</a>
                            </li>
                            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">0983-0392-9384</a>
                            </li>
                        </ul>
                    </div>
                    <!-- kolom-4 alamat -->
                    <div class="col-12 col-md-3 mb-3">
                        <h5 class="font-inter fw-bold mb-3">Alamat</h5>
                        <p>Panggoi Muara Dua Lhokseumawe Aceh</p>
                    </div>
                </div>
            </footer>
        </div>
    </section>

    <section class="bg-light border-top">
        <div class="container py-4">
            <div class="d-flex justify-content-between ">
                <div>
                    Samsat Lhokseumawe
                </div>
                <div class="d-flex">
                    <p class="me-4">Syarat & Ketentuan</p>
                    <p><a href="/kebijakan" class="text-decoration-none text-dark">Kebijakan Privacy</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>