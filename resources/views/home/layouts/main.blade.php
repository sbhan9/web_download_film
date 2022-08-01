<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
</head>

<body>

    <section class="h-100 w-100" style="box-sizing: border-box; background-color: #141432">
        <div class="container-xxl mx-auto p-0 position-relative header-2-3" style="font-family: 'Poppins', sans-serif">
            <nav class="navbar navbar-expand-lg navbar-dark" style="margin-top: -1%">
                <div class="d-flex" style="margin-bottom: -40px">
                    <a href="{{ url('/') }}">
                        <img src="{{ url('img/logo.png') }}" class="w-50" />
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
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#" style="color: #e7e7e8">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Feature</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="modal-footer border-0 gap-3" style="padding: 2rem; padding-top: 0.75rem">
                                <button class="btn btn-default btn-no-fill">Log In</button>
                                <button class="btn btn-fill border-0 text-white">Try Now</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo" style="margin-top: 33px">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0" style="margin-left: -20%">
                        <li class="nav-item active">
                            <a class="nav-link" href="#" style="color: #e7e7e8">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Feature</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    <div class="d-flex align-items-center justify-content-end gap-4">
                        <input type="text" placeholder="Search" class="search form-control" />
                        <button class="btn btn-search d-flex justify-content-center align-items-center p-0"
                            type="button">
                            <img src="img/ic_search.svg" width="20px" height="20px" />
                        </button>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
