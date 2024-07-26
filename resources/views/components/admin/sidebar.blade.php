<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item ">
                    <a href="{{ route('dashboard') }}"
                        class="nav-link {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Thống kê
                        </p>
                    </a>
                </li>
                <li class="nav-item ">
                  <a href="{{ route('hotel') }}"
                      class="nav-link {{ request()->routeIs('hotel') ? 'active' : '' }}">
                      <i class="nav-icon fa-solid fa-hotel"></i>
                      <p>
                          khách sạn
                      </p>
                  </a>
              </li>
              </li>
                {{-- <li class="nav-item ">
                    <a href="{{ route('reservation ') }}"
                        class="nav-link {{ request()->routeIs('reservation ') ? 'active' : '' }}">
                        <i class="nav-icon fa-regular fa-square-check"></i>
                        <p>
                            Đặt phòng
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li> --}}
                <li class="nav-item ">
                    <a href="{{ route('room_management') }}" class="nav-link {{ request()->routeIs('room') || request()->routeIs('diagram') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-door-open"></i>
                        <p>
                            Quản lí phòng
                        </p>
                    </a>
                </li>
                {{-- <li class="nav-item ">
                    <a href="{{ route('payment') }}"
                        class="nav-link {{ request()->routeIs('payment') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-credit-card"></i>
                        <p>
                            Thanh toán
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li> --}}
                <li class="nav-item ">
                    <a href="{{ route('user') }}" class="nav-link {{ request()->routeIs('user') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-user"></i>
                        <p>
                            Người dùng
                        </p>
                    </a>
                </li>

                <li class="nav-item ">
                    <a href="{{ route('service') }}"
                       class="nav-link {{ request()->routeIs('service') ? 'active' : '' }}">
                        <i class="nav-icon fa-solid fa-bell"></i>
                        <p>
                            Dịch vụ
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
