<aside class="main-sidebar sidebar-light-primary shadow-lg" style="height: 100vh; ">
    <!-- Brand Logo -->
    <a href="{{ route('admin') }}" class="brand-link d-flex align-items-center">
        <img src="{{ asset('fontend/imgs/logo_BookingTravel_2.png') }}" alt="Admin Logo" class="brand-image elevation-3 rounded-circle" style="width: 50px; height: 50px; object-fit: cover;">
        <span class="brand-text font-weight-light ml-2"><strong>Admin</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            @if(Auth::check() && Auth::user()->profile_image)
                <img src="{{ asset('backend/storage/' . Auth::user()->profile_image) }}" class="img-circle elevation-2" alt="User Image">
            @else
                <img src="{{ asset('backend/dist/img/null.jpg') }}" class="img-circle elevation-2" alt="User Image">
            @endif
        </div>
        <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
            <form action="{{ route('logout') }}" method="POST" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-link p-0">Đăng xuất</button>
            </form>
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
            <li class="nav-item">
                <a href="{{ route('admin')}}" class="nav-link">
                <i class="nav-icon fa-solid fa-address-book"></i>
                <p>Thống kê</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('categories.index') }}" class="nav-link">
                <i class="nav-icon fa-solid fa-layer-group"></i>
                <p>
                    Quản lý Danh mục
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('tours.index') }}" class="nav-link" >
                    <i class="nav-icon fa-solid fa-location-dot"></i>
                <p>
                    Quản lý Tour
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('booking.index') }}" class="nav-link">
                <i class="nav-icon fa-solid fa-address-book"></i>
                <p>Danh sách Đặt Tour</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('residences.index') }}" class="nav-link">
                <i class="nav-icon fa-solid fa-house"></i>
                <p>
                    Quản lý Lưu trú
                </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('vehicles.index') }}" class="nav-link">
                <i class="nav-icon fa-solid fa-van-shuttle"></i>
                <p>
                    Quản lý Phương tiện
                </p>
                </a>
            </li>
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
