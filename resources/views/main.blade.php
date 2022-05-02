
<!DOCTYPE html>
<html lang="en">

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
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <a href=""><img src="{{asset('style/demo/assets/images/logo/logo.png')}}" alt="Logo" srcset=""></a>
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            
            <li
                class="sidebar-item  ">
                <a href="{{ url('home')}}" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Home</span>
                </a>
            </li>
            <li
            class="sidebar-item  ">
            <a href="{{ url('suppliers')}}" class='sidebar-link'>
                <i class="bi bi-folder"></i>
                <span>Data Warehouse</span>
            </a>
        </li>  
        <li class="sidebar-item  ">
        <a href="{{ url('produks')}}" class='sidebar-link'>
            <i class="bi bi-folder"></i>
            <span>Product</span>
        </a>
        </li>
        <li class="sidebar-item  ">
            <a href="{{ url('category')}}" class='sidebar-link'>
                <i class="bi bi-stack"></i>
                <span>Category</span>
            </a>
            </li>
            <li class="sidebar-item  ">
                <a href="{{ url('inventory')}}" class='sidebar-link'>
                    <i class="bi bi-stack"></i>
                    <span>Inventory</span>
                </a>
                </li>
        </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            @yield('page-heading')
            @yield('content')



    

</div>

        </div>
    </div>
    <script src="{{ asset('style/demo/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{ asset('style/demo/assets/js/bootstrap.bundle.min.js')}}"></script>
    
    <script src="{{ asset('style/demo/assets/js/mazer.js')}}"></script>
</body>

</html>
