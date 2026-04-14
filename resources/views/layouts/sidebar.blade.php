<<<<<<< HEAD
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="{{ url('/home') }}">
            <img src="{{ asset('images/logo.svg') }}" alt="logo" />
        </a>
        <a class="sidebar-brand brand-logo-mini" href="{{ url('/home') }}">
            <img src="{{ asset('images/logo-mini.svg') }}" alt="logo" />
        </a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle"
                             src="{{ asset('images/faces/face1.jpg') }}" alt="profile" />
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">
                            {{ Auth::user()->name ?? 'User' }}
                        </h5>
                        <span>Admin</span>
                    </div>
                </div>
            </div>
        </li>

        <li class="nav-item nav-category">
            <span class="nav-info">Menu</span>
        </li>

        {{-- Dashboard --}}
        <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('/home') }}">
                <span class="icon-bg">
                    <i class="mdi mdi-home menu-icon"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        {{-- Kategori --}}
        <li class="nav-item {{ Request::is('kategori*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('kategori.index') }}">
                <span class="icon-bg">
                    <i class="mdi mdi-tag menu-icon"></i>
                </span>
                <span class="menu-title">Kategori</span>
            </a>
        </li>

        {{-- Buku --}}
        <li class="nav-item {{ Request::is('buku*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('buku.index') }}">
                <span class="icon-bg">
                    <i class="mdi mdi-book menu-icon"></i>
                </span>
                <span class="menu-title">Buku</span>
            </a>
        </li>
    </ul>
=======
<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="{{ url('/home') }}">
            <img src="{{ asset('images/logo.svg') }}" alt="logo" />
        </a>
        <a class="sidebar-brand brand-logo-mini" href="{{ url('/home') }}">
            <img src="{{ asset('images/logo-mini.svg') }}" alt="logo" />
        </a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle"
                             src="{{ asset('images/faces/face1.jpg') }}" alt="profile" />
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">
                            {{ Auth::user()->name ?? 'User' }}
                        </h5>
                        <span>Admin</span>
                    </div>
                </div>
            </div>
        </li>

        <li class="nav-item nav-category">
            <span class="nav-info">Menu</span>
        </li>

        {{-- Dashboard --}}
        <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
            <a class="nav-link" href="{{ url('/home') }}">
                <span class="icon-bg">
                    <i class="mdi mdi-home menu-icon"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        {{-- Kategori --}}
        <li class="nav-item {{ Request::is('kategori*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('kategori.index') }}">
                <span class="icon-bg">
                    <i class="mdi mdi-tag menu-icon"></i>
                </span>
                <span class="menu-title">Kategori</span>
            </a>
        </li>

        {{-- Buku --}}
        <li class="nav-item {{ Request::is('buku*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('buku.index') }}">
                <span class="icon-bg">
                    <i class="mdi mdi-book menu-icon"></i>
                </span>
                <span class="menu-title">Buku</span>
            </a>
        </li>
    </ul>
>>>>>>> e62f55e232320fe8079a65118e75da59c9447a2e
</nav>