    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
            <div class="sidebar-brand-icon">
                <i class="fas fa-store"></i>
            </div>
            <div class="sidebar-brand-text mx-3">foodpicky2</div>
        </a>
        <!-- Divider -->
        <hr class="sidebar-divider">
        <?php if ($this->session->userdata('level') == 'admin') : ?>
            <!-- Heading -->
            <div class="sidebar-heading">
                Menu
            </div>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Manage
            </div>

            <!-- Nav Item - Profil Saya -->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('pelanggan') ?>">
                    <i class="fab fa-fw fa-simplybuilt"></i>
                    <span>Pelanggan</span></a>
            </li>
            <!-- Nav Item - Profil Saya -->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('resto') ?>">
                    <i class="fab fa-fw fa-simplybuilt"></i>
                    <span>Resto</span></a>
            </li>
            <!-- Nav Item - Edit Profil -->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('kategori') ?>">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Kategori</span></a>
            </li>
            <!-- Nav Item - Edit Profil -->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('menu') ?>">
                    <i class="fas fa-fw fa-chalkboard-teacher"></i>
                    <span>Menu</span></a>
            </li>
            <!-- Nav Item - Edit Profil -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('pemesanan') ?>">
                    <i class="far fa-fw fa-calendar-alt"></i>
                    <span>Pemesanan</span></a>
            </li>

        <?php endif; ?>

        <?php if ($this->session->userdata('level') == 'user') : ?>

            <!-- Heading -->
            <div class="sidebar-heading">
                Home
            </div>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/index') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                User
            </div>

            <!-- Nav Item - Profil Saya -->
            <li class="nav-item">
                <a class="nav-link pb-0" href="<?= base_url('user/profil') ?>">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Profil Saya</span></a>
            </li>
            <!-- Nav Item - Edit Profil -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('user/edit_profil') ?>">
                    <i class="fas fa-fw fa-user-edit"></i>
                    <span>Edit Profil</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Food
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-list-ul"></i>
                    <span>Kategori</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <?php foreach ($kategori as $kat) : ?>
                            <a class="collapse-item" href="<?= base_url('user/kategori/') . $kat['id_kategori']; ?>"><?= $kat['nama_kategori'] ?></a>
                        <?php endforeach ?>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link pt-0 collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-utensils"></i>
                    <span>Restoran</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <?php foreach ($resto as $rst) : ?>
                            <a class="collapse-item" href="<?= base_url('user/resto/') . $rst['id_resto']; ?>"><?= $rst['nama_resto'] ?></a>
                        <?php endforeach ?>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Profil Saya -->
            <li class="nav-item">
                <a class="nav-link pt-0" href="<?= base_url('user/pesanan') ?>">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Pesanan Saya</span></a>
            </li>

        <?php endif; ?>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Logout -->
        <li class="nav-item">
            <a class="nav-link pt-0" href="<?= base_url('Login'); ?>">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Login</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->