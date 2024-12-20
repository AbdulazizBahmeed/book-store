<!-- Navbar -->
<nav class="navbar 
    navbar-expand-lg 
    navbar-light  
    @if(request()->is('dashboard*') || request()->is('orders*'))
    bg-light
    @else
    fixed-top
    @endif
    transparent ">
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
                    <a class="
                    nav-link 
                    fw-bold 
                    position-relative
                    @if(request()->is('/'))
                    active
                    @endif
                    "
                        href={{route('index')}}>home</a>
                </li>
                @auth
                <li class="nav-item">
                    <a class="nav-link 
                    fw-bold 
                    position-relative
                    @if(request()->is('orders*'))
                    active
                    @endif
                    " 
                    href={{route('orders.index')}}>borrowed books</a>
                </li>
                @endauth

                @role('Administrator')
                <li class="nav-item">
                    <a class="nav-link 
                    fw-bold 
                    position-relative
                    @if(request()->is('dashboard*'))
                    active
                    @endif" 
                    href="{{route('dashboard.users.index')}}">dashboard</a>
                </li>
                @endrole

            </ul>
            <!-- Left links -->
        </div>
        <!-- Collapsible wrapper -->

        <!-- Right elements -->
        <div class="d-flex align-items-center">

            @auth
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
                        <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                    </li>
                </ul>
            </div>
            @endauth

            @guest
            <a href="{{route('login')}}">
                <button type="button" class="btn btn-primary btn-rounded"
                    data-mdb-ripple-init>
                    login
                </button>
            </a>
            @endguest


        </div>
        <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
</nav>
<!-- Navbar -->