<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
    <link rel="shortcut icon" href="{{ url('/img/icon.png') }}" type="image/x-icon">
</head>

<body>

    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #141432">
        <div class="container-xxl mx-auto p-0 position-relative header-2-3" style="font-family: 'Poppins', sans-serif">
            <nav class="navbar navbar-expand-lg navbar-dark" style="margin-top: -1%">
                <div class="d-flex" style="margin-bottom: -40px">
                    <a href="{{ url('/') }}">
                        <img src="{{ url('img/logo.png') }}" class="w-25" />
                    </a>
                    <button class="navbar-toggler border-0" type="button" data-bs-toggle="modal"
                        data-bs-target="#targetModal-item">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>

                <div class="modal-item modal fade" id="targetModal-item" tabindex="-1" role="dialog"
                    aria-labelledby="targetModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content border-0" style="background-color: #141432">
                            <div class="modal-header border-0" style="padding: 2rem; padding-bottom: 0">
                                <a class="modal-title" id="targetModalLabel">
                                    <img style="margin-top: 0.5rem"
                                        src="http://api.elements.buildwithangga.com/storage/files/2/assets/Header/Header2/Header-2-3.png"
                                        alt="" />
                                </a>
                                <button type="button" class="close btn-close text-white" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="padding: 2rem; padding-top: 0; padding-bottom: 0">
                                <ul class="navbar-nav responsive me-auto mt-2 mt-lg-0">
                                    <<li class="nav-item active">
                                        <a class="nav-link" href="{{ url('/') }}"
                                            style="color: #e7e7e8">Beranda</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-bs-toggle="modal"
                                                data-bs-target="#staticBackdrop">Tahun release</a>

                                        </li>
                                </ul>
                            </div>
                            <div class="modal-footer border-0 gap-3" style="padding: 2rem; padding-top: 0.75rem">
                                <form action="{{ url('/search') }}"
                                    class="d-flex align-items-center justify-content-end gap-4">
                                    <input type="text" placeholder="Search" class="search form-control"
                                        name="q" value="{{ request('q') }}" />
                                    <button class="btn btn-search d-flex justify-content-center align-items-center p-0"
                                        type="submit">
                                        <img src="img/ic_search.svg" width="20px" height="20px" />
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo" style="margin-top: 33px">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0" style="margin-left: -50%">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}" style="color: #e7e7e8">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop">Tahun release</a>

                        </li>
                    </ul>
                    <div>
                        <form action="{{ url('/search') }}" class="d-flex align-items-center justify-content-end gap-4">
                            <input type="text" placeholder="Search" class="search form-control" name="q"
                                value="{{ request('q') }}" />
                            <button class="btn btn-search d-flex justify-content-center align-items-center p-0"
                                type="submit">
                                <img src="img/ic_search.svg" width="20px" height="20px" />
                            </button>
                        </form>
                    </div>
                </div>
            </nav>

            <div style="margin-top: -1%">
                <div class="mx-auto d-flex flex-lg-row flex-column hero">
                    @yield('sprojectfilm')
                </div>
            </div>
        </div>
    </section>

    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #141432">
        <div class="footer-2-3 container-xxl mx-auto position-relative p-0"
            style="font-family: 'Poppins', sans-serif">
            <div class="border-color info-footer">
                <div class="">
                    <hr class="hr" />
                </div>
                <div class="mx-auto d-flex flex-column flex-lg-row align-items-center footer-info-space gap-4">
                    <div class="d-flex title-font font-medium align-items-center gap-4">
                        <a href="https://web.facebook.com/subhan.fadilah.399/" target="_blank"
                            class="text-decoration-none text-white fs-3"><i class="bi bi-facebook"></i></a>
                        <a href="https://instagram.com/sbhan04" target="_blank"
                            class="text-decoration-none text-white fs-3"><i class="bi bi-instagram"></i></a>
                        <a href="https://github.com/sbhan9" target="_blank"
                            class="text-decoration-none text-white fs-3"><i class="bi bi-github"></i></a>
                    </div>
                    <nav class="mx-auto d-flex flex-wrap align-items-center justify-content-center gap-4">
                        <a href="https://kosongempat.my.id" class="footer-link" style="text-decoration: none">Website
                            Pribadi</a>
                        <span>|</span>
                        <a href="https://sbhan9.github.io" class="footer-link" style="text-decoration: none">Landing
                            Page</a>
                    </nav>
                    <nav class="d-flex flex-lg-row flex-column align-items-center justify-content-center">
                        <p style="margin: 0">Sproject Productive 2022</p>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    {{-- modal --}}
    <div class="modal fade" id="staticBackdrop" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body bg-dark">
                    <div class="container">
                        <div class="row">
                            @php
                                $tahun = 1931;
                                $tahun_val = 1931;
                            @endphp
                            @for ($i = 1931; $i <= date('Y'); $i++)
                                {{-- for pc --}}
                                <div class="col-2">
                                    <a class="text-decoration-none text-white mt-3"
                                        href="{{ url('/release?tahun=' . $tahun_val++) }}">{{ $tahun++ }}</a>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="modal-footer bg-dark text-white">
                    <button type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
