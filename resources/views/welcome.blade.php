<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title') Inventory</title>
        
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('style/demo/assets/css/bootstrap.css')}}">
        
        <link rel="stylesheet" href="{{ asset('style/demo/assets/vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
        <link rel="stylesheet" href="{{ asset('style/demo/assets/vendors/bootstrap-icons/bootstrap-icons.css')}}">
        <link rel="stylesheet" href="{{ asset('style/demo/assets/css/app.css')}}">
        <link rel="shortcut icon" href="{{ asset('style/demo/assets/images/favicon.svg" type="image/x-icon')}}">
    </head>
    <body>
    <div id="app" style="background-images:">
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                <div class="container">
                    <a class="navbar-brand me-auto" href="index.html">
                        {{-- <img src="{{asset('style/demo/assets/images/logo/logo.png')}}" alt="Logo"> --}}
                        <h1>Inventory</h1>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="{{url('home')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('suppliers')}}">Supplier</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('produks')}}">Produk</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container">
            <section class="hero">
                <div class="row">
                    <div class="col-lg-6 col-12 order-2 order-md-1">
                        
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script src="demo/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>