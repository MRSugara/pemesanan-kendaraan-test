<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6 text-center text-uppercase"
        href="/">{{ Auth::user()->divisi->name }}</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search"
        aria-label="Search">
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <form class="nav-link px-3" action="/logout" method="GET">
                @csrf
                <button type="submit" class="dropdown-item">Sign out</button>
            </form>
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
            <div class="position-sticky pt-3 sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link  {{ $judul === 'Dashboard' ? 'active' : '' }} " aria-current="page"
                            href="/">
                            <span data-feather="home" class="align-text-bottom"></span>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $judul === 'Order' ? 'active' : '' }}" aria-current="page" href="/order">
                            <span data-feather="shopping-bag" class="align-text-bottom"></span>
                            Order
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $judul === 'Kendaraan' ? 'active' : '' }}" href="/kendaraan">
                            <span data-feather="truck" class="align-text-bottom"></span>
                            Kendaraan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ $judul === 'Supir' ? 'active' : '' }}" href="/supir">
                            <span data-feather="users" class="align-text-bottom"></span>
                            Supir
                        </a>
                    </li>
                    @if (Auth::user()->role_id == 1)
                        <li class="nav-item">
                            <a class="nav-link {{ $judul === 'User' ? 'active' : '' }}" href="/user">
                                <span data-feather="user-plus" class="align-text-bottom"></span>
                                User
                            </a>
                        </li>
                    @endif
                </ul>


                @if (Auth::user()->role_id == 2)
                    <h6
                        class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted text-uppercase">
                        <span>Kepala Bagian</span>
                        <a class="link-secondary" href="#" aria-label="Add a new report">
                            <span data-feather="plus-circle" class="align-text-bottom"></span>
                        </a>
                    </h6>
                    <ul class="nav flex-column mb-2">
                        <li class="nav-item">
                            <a class="nav-link {{ $judul === 'Persetujuan' ? 'active' : '' }}" href="/persetujuan">
                                <span data-feather="archive" class="align-text-bottom"></span>
                                Persetujuan
                            </a>
                        </li>
                    </ul>
                @endif

            </div>
        </nav>
        <div class="container mt-3">

            @yield('admincontainer')
        </div>

    </div>
</div>
