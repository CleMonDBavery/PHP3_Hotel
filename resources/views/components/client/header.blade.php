<!-- header -->
<header>
    <!-- header inner -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="index.html"><img src="{{ asset('client/images/logo.png') }}" alt="#"/></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('home') }}">Trang chủ</a>
                                </li>
                                <li class="nav-item {{ request()->routeIs('about') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('about') }}">Giới thiệu</a>
                                </li>
                                <li class="nav-item {{ request()->routeIs('room') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('room') }}">Phòng</a>
                                </li>
                                {{--                                <li class="nav-item {{ request()->routeIs('gallery') ? 'active' : '' }}"> --}}
                                {{--                                    <a class="nav-link" href="{{ route('gallery') }}">Gallery</a> --}}
                                {{--                                </li> --}}
                                <li class="nav-item {{ request()->routeIs('blog') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('blog') }}">Bài viết</a>
                                </li>
                                <li class="nav-item {{ request()->routeIs('contact') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('contact') }}">Liên hệ</a>
                                </li>
                                {{-- <li class="nav-item {{ request()->routeIs('account') ? 'active' : '' }}">
                                    <a class="nav-link" href="{{ route('account') }}">Tài khoản</a>
                                </li> --}}
                                <li class="nav-item">
                                    <!-- Avatar Dropdown -->
                                    <div class="dropdown">
                                        <!-- Trigger -->
                                        <button class="btn btn-secondary dropdown-toggle d-flex align-items-center"
                                                type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                            <!-- Avatar -->
                                            <img
                                                src="https://cellphones.com.vn/sforum/wp-content/uploads/2023/10/avatar-trang-4.jpg"
                                                class="rounded-circle me-2" style="width: 20px; height: 20px;">
                                            <!-- User name -->
                                            <span>{{ Auth::user()->name }}</span>
                                        </button>

                                        <!-- Dropdown Menu -->
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <!-- Profile -->
                                            <li>
                                                <a class="dropdown-item" href="{{ route('profile.edit') }}">
                                                    {{ __('Thông tin cá nhân') }}
                                                </a>
                                            </li>
                                            <!-- Logout -->
                                            <li>
                                                <form method="POST" action="{{ route('logout') }}" class="m-0">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item">
                                                        {{ __('Đăng xuất') }}
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>

                                </li>
                            </ul>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header inner -->
<!-- end header -->
