<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Daily Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link type="text/css" href="{{ asset('css/custom-styles.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</head>
<body>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand ps-3" href="">Daily Shop</a>
    <button class="btn btn-link btn-lg order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
        <i class="fas fa-bars"></i>
    </button>
    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
        </div>
    </form>

    
    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user fa-fw"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#!">Settings</a></li>
                <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                <li><hr class="dropdown-divider" /></li>
                @if(Auth::check())
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="dropdown-item"><i class="fa fa-sign-out"></i>{{ __('Logout') }}</button>
                    </form>
                @else
                    <li><a class="dropdown-item" href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a></li>
                @endif
            </ul>
        </li>
    </ul>
</nav>

<div id="layoutSidenav">
    @include('layouts/_nav')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">@yield('title')</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item">@yield('bread_controller')</li>
                    <li class="breadcrumb-item active">@yield('bread_action')</li>
                </ol>
                @yield('content')
            </div>
        </main>

        @include('layouts/_footer')
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/scripts.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/datatables-simple-demo.js') }}"></script>

<script>
    // Toastr options
    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "positionClass": "toast-top-right",
        "timeOut": "3000",
    };

    // Show toastr messages if any
    @if(session('success')) toastr.success("{{ session('success') }}"); @endif
    @if(session('error')) toastr.error("{{ session('error') }}"); @endif
    @if(session('warning')) toastr.warning("{{ session('warning') }}"); @endif
    @if(session('info')) toastr.info("{{ session('info') }}"); @endif
</script>
</body>
</html>
