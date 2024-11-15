<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-light">
    <!-- Container wrapper -->
    <div class="container-fluid">
        <!-- Toggle button -->
        <button
            data-mdb-collapse-init
            class="navbar-toggler"
            type="button"
            data-mdb-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Collapsible wrapper -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Navbar brand -->
            <a class="navbar-brand mt-2 mt-lg-0" href="{{ route('index') }}">
                <img
                    src="{{ URL::asset('images/logo.png') }}"
                    height="40"
                    alt="Book Store Logo"
                    loading="lazy" />
            </a>
            <!-- Left links -->
            <ul class="navbar-nav  mb-2 mb-lg-0 justify-content-around w-100">
                <li class="nav-item">
                    <a class="nav-link active" href="#">books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">popular</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">borrowed books</a>
                </li>
            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center">

            <!-- Notifications -->
            <div class="dropdown me-4 notifications">
                <a
                    data-mdb-dropdown-init
                    class="link-secondary dropdown-toggle hidden-arrow"
                    href="#"
                    id="navbarDropdownNotifications"
                    role="button"
                    aria-expanded="false">
                    <i id="notifications-icon" class="fas fa-bell fs-3"></i>
                    <span class="badge rounded-pill badge-notification bg-danger">1</span>
                </a>
                <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="navbarDropdownMenuLink">
                    <li>
                        <a class="dropdown-item" href="#">Some news</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Another news</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </li>
                </ul>
            </div>
            <!-- Avatar -->
            <div class="dropdown avatar">
                <a
                    data-mdb-dropdown-init
                    class="dropdown-toggle d-flex align-items-center"
                    href="#"
                    id="navbarDropdownMenuAvatar"
                    role="button"
                    aria-expanded="false">
                    <img
                        src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                        class="rounded-circle"
                        height="30"
                        alt='profile images'
                        loading="lazy" />
                </a>
                <ul
                    class="dropdown-menu dropdown-menu-end"
                    aria-labelledby="navbarDropdownMenuAvatar">
                    <li>
                        <a class="dropdown-item" href="#">My profile</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Settings</a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->