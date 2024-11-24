<aside class="main-sidebar sidebar-light-primary shadow-lg"style="height: 100vh;">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link d-flex align-items-center">
        <img src="{{ asset('fontend/imgs/logo_BookingTravel_2.png') }}" alt="Admin Logo" class="brand-image elevation-3 rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
        <span class="brand-text font-weight-light ml-2">Admin<br>BookingTravel</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            @if(Auth::check() && Auth::user()->profile_image)
                <img src="{{ asset('backend/storage/' . Auth::user()->profile_image) }}" class="img-circle elevation-2" alt="User Image">
            @else
                <img src="{{asset('backend/dist/img/null.jpg')}}" class="img-circle elevation-2" alt="User Image">
            @endif
        </div>
        <div class="info">
            @if(Auth::check())
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            @else
                <span>
                    <a href="{{ route('login') }}" class="d-inline me-2">Đăng nhập</a> /
                    <a href="{{ route('register') }}" class="d-inline ms-2">Đăng ký</a>
                </span>
            @endif
        </div>
    </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            {{-- <li class="nav-item {{Request::segment(1)=='tours' ? 'menu-open menu-is-opening' : '' }}"> --}}
            <li class="nav-item menu-open menu-is-opening">
                <a href="javascript:void(0)" class="nav-link">
                    <i class="nav-icon fa-solid fa-location-dot"></i>
                <p>
                    Quản lý Tour
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('tours.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh sách Tour</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('tours.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tạo Tour</p>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Chỉnh sửa Tour</p>
                    </a>
                </li> --}}
                </ul>
            </li>
            {{-- <li class="nav-item {{Request::segment(1)=='categories' ? 'menu-open menu-is-opening' : '' }}"> --}}
            <li class="nav-item menu-open menu-is-opening">
                <a href="javascript:void(0)" class="nav-link">
                <i class="nav-icon fa-solid fa-layer-group"></i>
                <p>
                    Quản lý Danh mục
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>

                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('categories.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Danh sách Danh mục</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('categories.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Tạo Danh mục</p>
                    </a>
                </li>

                {{-- <li class="nav-item">
                    <a href="javascript:void(0)" onclick='window.location.href ="/admin"' class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Chỉnh Sửa Danh mục</p>
                    </a>
                </li> --}}
                </ul>
            </li>
            <li class="nav-item menu-open menu-is-opening">
                <a href="{{ route('home') }}" class="nav-link">
                <i class="nav-icon fa-solid fa-chart-pie"></i>
                <p>
                    Thống kê
                    <i class="right fas fa-angle-left"></i>
                </p>
                </a>
                <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="./index.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard v1</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard v2</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Dashboard v3</p>
                    </a>
                </li>
                </ul>
            </li>
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
