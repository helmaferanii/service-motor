<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link" style="text-decoration: none">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('user.profile', Auth::user()->id) }}" class="d-block"
                    style="text-decoration: none">{{ Auth::user()->name }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href=" {{ route('home') }} " class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('user.index') }}" class="nav-link">
                        {{-- <i class="nav-icon fas fa-th"></i> --}}
                        <i class="fa-solid fa-users " style="font-size: 20px"></i>
                        <p class="ml-2">
                            User
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('barang.index') }}" class="nav-link">
                        {{-- <i class="nav-icon fas fa-th"></i> --}}
                        <i class="fa-solid fa-basket-shopping" style="font-size: 20px"></i>
                        <p class="ml-2">
                            Barang
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('montir.index') }}" class="nav-link">
                        {{-- <i class="nav-icon fas fa-th"></i> --}}
                        <i class="fa-solid fa-users-gear" style="font-size: 20px"></i>
                        <p class="ml-2">
                            Montir
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('service.index') }}" class="nav-link">
                        <i class="fa-solid fa-gears" style="font-size: 20px"></i>
                        <p class="ml-2">
                            Layanan Service
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('transaksi.adminTable') }}" class="nav-link">
                        <i class="fa-solid fa-list" style="font-size: 20px"></i>
                        <p class="ml-2">
                            Riwayat Service
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('laporan.index') }}" class="nav-link">
                        <i class="fa-solid fa-chart-bar" style="font-size: 20px"></i>
                        <p class="ml-2">
                            Laporan Service
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
