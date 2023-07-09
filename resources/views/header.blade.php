<!-- awal-header -->
<div class="container-">
    <header class="d-flex flex-wrap bg-secondary align-items-center justify-content-center  py-3 mb-4 fixed-top">
        <div class="col-md-3 mb-2 mb-md-0">
            <img src="{{ asset('storage/images/logo.png') }}" width="80" height="70" alt="Logo">
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="#" class="nav-link px-3 text-light">Home</a></li>
            <li><a href="perhitungan" class="nav-link px-3 text-light">Perhitungan</a></li>
            <li><a href="#" class="nav-link px-3 text-light">Informasi</a></li>
            <li><a href="#" class="nav-link px-3 text-light">Pembayaran</a></li>
            <li><a href="#" class="nav-link px-3 text-light">Riwayat</a></li>
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