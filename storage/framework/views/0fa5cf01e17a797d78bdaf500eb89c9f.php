<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="<?php echo e(url('/home')); ?>">
            <img src="<?php echo e(asset('images/logo.svg')); ?>" alt="logo" />
        </a>
        <a class="sidebar-brand brand-logo-mini" href="<?php echo e(url('/home')); ?>">
            <img src="<?php echo e(asset('images/logo-mini.svg')); ?>" alt="logo" />
        </a>
    </div>
    <ul class="nav">
        <li class="nav-item profile">
            <div class="profile-desc">
                <div class="profile-pic">
                    <div class="count-indicator">
                        <img class="img-xs rounded-circle"
                             src="<?php echo e(asset('images/faces/face1.jpg')); ?>" alt="profile" />
                        <span class="count bg-success"></span>
                    </div>
                    <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">
                            <?php echo e(Auth::user()->name ?? 'User'); ?>

                        </h5>
                        <span>Admin</span>
                    </div>
                </div>
            </div>
        </li>

        <li class="nav-item nav-category">
            <span class="nav-info">Menu</span>
        </li>

        
        <li class="nav-item <?php echo e(Request::is('home') ? 'active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(url('/home')); ?>">
                <span class="icon-bg">
                    <i class="mdi mdi-home menu-icon"></i>
                </span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>

        
        <li class="nav-item <?php echo e(Request::is('kategori*') ? 'active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(route('kategori.index')); ?>">
                <span class="icon-bg">
                    <i class="mdi mdi-tag menu-icon"></i>
                </span>
                <span class="menu-title">Kategori</span>
            </a>
        </li>

        
        <li class="nav-item <?php echo e(Request::is('buku*') ? 'active' : ''); ?>">
            <a class="nav-link" href="<?php echo e(route('buku.index')); ?>">
                <span class="icon-bg">
                    <i class="mdi mdi-book menu-icon"></i>
                </span>
                <span class="menu-title">Buku</span>
            </a>
        </li>
    </ul>
</nav><?php /**PATH C:\src\koleksi-buku\resources\views/layouts/sidebar.blade.php ENDPATH**/ ?>