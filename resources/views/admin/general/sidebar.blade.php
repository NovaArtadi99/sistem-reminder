<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
        <li class="nav-header">INTRO</li>
        <li class="nav-item {{ request()->routeIs('admin.admin.dashboard') ? 'menu-open active' : '' }}">
            <a href="{{ route('admin.admin.dashboard') }}" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Dashboard
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link">
                <i class="nav-icon fas fa-globe"></i>
                <p>
                    See Website
                </p>
            </a>
        </li>
        <li class="nav-header">MANAGE DATA</li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon far fa-file"></i>
                <p>
                    Home
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.list.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Home Page</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Testimoni Data</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon far fa-file"></i>
                <p>
                    Fitur
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.fitur.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fitur Title</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.app.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fitur Aplikasi</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.akses.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Akses Gadget</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.reminder.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fitur Permudah </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.optimal.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fitur Optimal</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon far fa-file"></i>
                <p>
                    Harga
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.solusi.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Title Harga</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.price.index') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Harga</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>List Harga</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon far fa-file"></i>
                <p>Gallery Aplikasi</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon far fa-file"></i>
                <p>Blog</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.contact.index') }}" class="nav-link">
                <i class="nav-icon far fa-file"></i>
                <p>Contact Us</p>
            </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('admin.about.index') }}" class="nav-link">
                <i class="nav-icon far fa-file"></i>
                <p>About</p>
            </a>
        </li>
        <li class="nav-item {{ request()->routeIs('admin.masterAdmin.index') ? 'menu-open active' : '' }}">
            <a href="#" class="nav-link">
                <i class="nav-icon far fa-file"></i>
                <p>
                    Footer
                </p>
            </a>
        </li>
        <li class="nav-item {{ request()->routeIs('admin.masterAdmin.index') ? 'menu-open active' : '' }}">
            <a href="#" class="nav-link">
                <i class="nav-icon far fa-file"></i>
                <p>
                    Dictionary
                </p>
            </a>
        </li>
        <li class="nav-header">MASTER DATA</li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                    Data Admin
                    <i class="fas fa-angle-left right"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item {{ request()->routeIs('admin.masterAdmin.index') ? 'menu-open active' : '' }}">
                    <a href="{{ route('admin.masterAdmin.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>
                            Data Admin
                        </p>
                    </a>
                </li>
                <li class="nav-item {{ request()->routeIs('admin.admin.users') ? 'menu-open active' : '' }}">
                    <a href="{{ route('admin.admin.users') }}" class="nav-link">
                        <i class="nav-icon fas fa-user-alt"></i>
                        <p>
                            Data User
                        </p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item {{ request()->routeIs('admin.masterAdmin.index') ? 'menu-open active' : '' }}">
            <a href="{{ route('admin.masterAdmin.index') }}" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                    Data Email
                </p>
            </a>
        </li>
        <li class="nav-item {{ request()->routeIs('admin.masterAdmin.index') ? 'menu-open active' : '' }}">
            <a href="{{ route('admin.masterAdmin.index') }}" class="nav-link">
                <i class="nav-icon fas fa-file"></i>
                <p>
                    Data Language
                </p>
            </a>
        </li>
    </ul>
</nav>
