<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- Icon --}}
    <link rel="icon" href="{{ url('/images/logo-website.png') }}">

    <title>Blog Amigo | Administrator</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
</head>
<body>
    <div id="app">
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                            <span class="fs-2 d-none d-sm-inline">
                                <img class="img-fluid" src="{{ url('/images/logo-black.png') }}" alt="logo" >
                            </span>
                        </a>
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <span class="small-text fs-6 text-muted fw-bold">Menu</span>
                            <li>
                                <a href="{{ route('admin.index') }}" class="nav-link px-0 align-middle text-white">
                                    <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> 
                                </a>
                            </li>
                            <span class="small-text fs-6 text-muted fw-bold">App</span>
                            <li>
                                <a href="#" class="nav-link px-0 align-middle text-white">
                                    <i class="bi bi-pin-angle-fill fs-4"></i> <span class="ms-1 d-none d-sm-inline">Posts</span></a>
                            </li>
                            <li>
                                <a href="{{ route('admin.categories.index') }}" class="nav-link px-0 align-middle text-white">
                                    <i class="bi bi-tag-fill fs-4"></i> <span class="ms-1 d-none d-sm-inline">Categories</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-white">
                                    <i class="fs-4 bi-grid"></i> <span class="ms-1 d-none d-sm-inline">Products</span> 
                                </a>
                            </li>
                            <li>
                                <a href="#" class="nav-link px-0 align-middle text-white">
                                    <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                            </li>
                        </ul>
                        <hr>
                        <div class="dropdown pb-4">
                            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                <span class="d-none d-sm-inline mx-1">loser</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                                <li><a class="dropdown-item" href="#">New project...</a></li>
                                <li><a class="dropdown-item" href="#">Settings</a></li>
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Sign out</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col py-3">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
</html>