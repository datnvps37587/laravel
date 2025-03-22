<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Techview') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap 5 & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>



    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
</head>
<body>
    
    <div id="app" class="d-flex">
        <!-- Sidebar Menu -->
        @if (!request()->is('login') && !request()->is('register'))
        <nav class="admin-menu d-flex flex-column align-items-center">
            <!-- Logo -->
            <a href="#" class="navbar-logo mb-3">
                <img src="{{ asset('uploads/logo.png') }}" alt="logo">
            </a>
            <button class="btn btn-outline-primary d-lg-none me-3" id="toggle-menu">
                <i class="bi bi-list"></i>
            </button>

            <!-- Menu -->
            <ul class="nav flex-column w-100">
    <li class="nav-item">
        <a class="nav-link menu-item active" href="{{ route('home') }}">
            <i class="bi bi-menu-button"></i> Trang chủ
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link menu-item" href="{{ route('categories.index') }}">
            <i class="bi bi-list"></i> Quản lý danh mục
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link menu-item" data-bs-toggle="collapse" href="#menuProducts">
            <i class="bi bi-box-seam"></i> Sản phẩm <i class="bi bi-chevron-down float-end"></i>
        </a>
        <ul class="collapse list-unstyled ms-4" id="menuProducts">
            <li><a class="nav-link" href="{{ route('products.index') }}">Danh sách sản phẩm</a></li>
            <li><a class="nav-link" href="{{ route('categories.index') }}">Danh mục sản phẩm</a></li>
            <li><a class="nav-link" href="{{ route('products.create') }}">Thêm sản phẩm</a></li>
        </ul>
    </li>
    <li class="nav-item"><a class="nav-link menu-item" href="{{ route('orders.index') }}"><i class="bi bi-bag-heart"></i> Quản lý đơn hàng</a></li>
    <li class="nav-item"><a class="nav-link menu-item" href="{{ route('users.index') }}"><i class="bi bi-person"></i> Quản lý khách hàng</a></li>
    <li class="nav-item"><a class="nav-link menu-item" href="{{ route('users.index') }}"><i class="bi bi-person-workspace"></i> Quản lý nhân viên</a></li>
    <li class="nav-item"><a class="nav-link menu-item" href="{{ route('comments.index') }}"><i class="bi bi-chat-left-text"></i> Quản lý bình luận</a></li>
    <li class="nav-item"><a class="nav-link menu-item" href="{{ route('reviews.index') }}"><i class="bi bi-star"></i> Quản lý đánh giá</a></li>
    <li class="nav-item"><a class="nav-link menu-item" href="{{ route('baiviet.index') }}"><i class="bi bi-sticky"></i> Quản lý tin tức</a></li>
    <li class="nav-item"><a class="nav-link menu-item" href="{{ route('reviews.index') }}"><i class="bi bi-cash-coin"></i> Quản lý khuyến mãi</a></li>
    <li class="nav-item"><a class="nav-link menu-item" href="{{ route('reviews.index') }}"><i class="bi bi-wallet"></i> Quản lý doanh thu</a></li>
</ul>


            <!-- User Dropdown -->
            <ul class="nav flex-column w-100 mt-auto">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}"><i class="bi bi-person-plus"></i> Register</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link menu-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle"></i> {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="bi bi-box-arrow-left"></i> Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest
            </ul>
        </nav>
        <div class="content w-100">
            <!-- Navbar Top -->
            <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom px-4 py-2">
                <div class="container-fluid">
                    <!-- Ô tìm kiếm -->
                    <div class="position-relative">
                        <input class="form-control search-box" type="search" placeholder="Search">
                        <i class="bi bi-search search-icon"></i>
                    </div>

                    <!-- Các icon chức năng -->
                    <div class="d-flex align-items-center ms-auto">
                        <i class="bi bi-moon me-3"></i>
                        <i class="bi bi-fullscreen me-3"></i>
                        <i class="bi bi-chat-dots me-3 position-relative">
                            <span
                                class="position-absolute top-0 start-100 translate-middle p-1 bg-success border border-light rounded-circle"></span>
                        </i>
                        <i class="bi bi-bell position-relative me-3">
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">4</span>
                        </i>

                        <!-- Avatar với dropdown -->
                        <div class="dropdown">
                            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button"
                                data-bs-toggle="dropdown">
                                <img src="/assets/img/avatar.png" alt="Avatar" class="rounded-circle me-2" width="40"
                                    height="40">
                                <div>
                                    <span class="fw-bold">Anthony</span>
                                    <small class="d-block text-muted">USA</small>
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="#">Đổi mật khẩu</a></li>
                                <li><a class="dropdown-item text-danger" href="#">Đăng xuất</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        @endif

        <!-- Main Content -->
        <main class="py-4 flex-grow-1">
            @yield('content')
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
