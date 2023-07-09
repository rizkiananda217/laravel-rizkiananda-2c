<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5">
    <title>Home-SIINPAAN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/headers.css" rel="stylesheet">
</head>

<body>
    <main>

        <!-- awal-header -->
        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
                <div class="col-md-3 mb-2 mb-md-0">
                    <img src="{{ asset('storage/images/logo.png') }}" width="80" height="70" alt="Logo">
                </div>

                <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="home" class="nav-link px-3 text-secondary">Home</a></li>
                    <li><a href="perhitungan" class="nav-link px-3 text-secondary">Perhitungan</a></li>
                    <li><a href="#" class="nav-link px-3 text-secondary">Informasi</a></li>
                    <li><a href="#" class="nav-link px-3 text-secondary">Pembayaran</a></li>
                    <li><a href="#" class="nav-link px-3 text-secondary">Riwayat</a></li>
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
                </ul>



            </header>
        </div>

        <!-- akhir-header -->

        <!-- awal konten -->
        <div class="container pb-3">
            <div class="row">
                <div class="col-6 ">
                    <div class="border border-2">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-6">
                    <div class="border border-2">
                        <i class="bi bi-calculator fa-5x"></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, temporibus.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- akhir konten -->

        <!-- awal-foter -->
        <div class="container">
            <footer class="py-5">
                <div class="row">
                    <div class="col-6 col-md-2 mb-3">
                        <h5></h5>
                        <iframe style="width:600px; height:300px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.4713547068545!2d97.11764227447449!3d5.188335337238395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30479d3364d2879b%3A0xe2fbcc6d6b048e37!2sSAMSAT%20Lhokseumawe!5e0!3m2!1sid!2sid!4v1686584900399!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5></h5>
                        <ul class="nav flex-column">

                        </ul>
                    </div>

                    <div class="col-6 col-md-2 mb-3">
                        <h5></h5>
                        <ul class="nav flex-column">

                        </ul>
                    </div>

                    <div class="col-md-5 offset-md-1 mb-3">
                        <form>
                            <h5>pesan dan kesan</h5>
                            <p>Masukan Aspirasi demi meningkatkan kemajuan kami.</p>
                            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                                <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                                <button class="btn btn-secondary" type="button">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                    <p>&copy; 2023 Rizki, Seluruh hak cipta dilindungi undang-undang.</p>
                    <ul class="list-unstyled d-flex">
                        <i class="fab fa-facebook"></i>

                    </ul>
                </div>
            </footer>
        </div>
        <!-- akhir-foter -->

    </main>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</html>