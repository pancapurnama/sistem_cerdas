<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 9 | @yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Klinik Sehat</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    @if (Auth::user()->level == 'doktor')
                        <li class="nav-item">
                            <a class="nav-link" href="/users">Daftar User</a>
                        </li>
                    @endif
                   @if (Auth::user()->level == 'doktor' || Auth::user()->level == 'admin')
                        <li class="nav-item">
                            <a class="nav-link" href="/pasiens">Riwayat Pasien</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/diseases">Daftar Penyakit</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/symptoms">Daftar Gejala</a>
                        </li>
                   @endif
                    
                    @if (Auth::user()->level == 'pasien')
                        <li class="nav-item">
                            <a class="nav-link" href="/consul/1/1">Konsultasi</a>
                        </li>
                    @endif
                    
                    
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="navbar-brand" href="/logout">Logout</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="container">
        @yield('content')
    </div>


    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>