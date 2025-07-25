<!-- [Body] Start -->

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg fixed inset-0 bg-white dark:bg-themedark-cardbg z-[1034]">
        <div class="loader-track h-[5px] w-full inline-block absolute overflow-hidden top-0">
            <div
                class="loader-fill w-[300px] h-[5px] bg-primary-500 absolute top-0 left-0 animate-[hitZak_0.6s_ease-in-out_infinite_alternate]">
            </div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <!-- [ Sidebar Menu ] start -->
    <nav class="pc-sidebar">
        <div class="navbar-wrapper">
            <div class="m-header flex items-center py-4 px-6 h-header-height">
                <a href="{{ route('dashboard') }}" class="b-brand flex items-center gap-3">
                    <!-- ========   Change your logo from here   ============ -->
                    <img src="{{ asset('/') }}assets/images/softvence.jpg" class="img-fluid logo logo-lg"
                        alt="logo" />
                    <img src="{{ asset('/') }}assets/images/softvence.jpg" class="img-fluid logo logo-sm"
                        alt="logo" />
                </a>
            </div>
            <div class="navbar-content h-[calc(100vh_-_74px)] py-2.5">
                <ul class="pc-navbar">
                    <li class="pc-item pc-caption">
                        <label>Navigation</label>
                    </li>
                    <li class="pc-item">
                    <li class="pc-item">
                        <a href="{{ route('dashboard') }}" class="pc-link">
                            <span class="pc-micon">
                                <i data-feather="home"></i>
                            </span>
                            <span class="pc-mtext">Dashboard</span>
                        </a>
                    </li>
                    <li class="pc-item pc-caption">
                        <label>UI Components</label>
                        <i data-feather="feather"></i>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="{{ route('permission.list') }}" class="pc-link">
                            <span class="pc-micon"> <i data-feather="feather"></i></span>
                            <span class="pc-mtext">Permission List</span>
                        </a>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="{{ route('permission.create') }}" class="pc-link">
                            <span class="pc-micon"> <i data-feather="feather"></i></span>
                            <span class="pc-mtext">Add New Permission</span>
                        </a>
                    </li>
                    {{-- <li class="pc-item pc-hasmenu">
                        <a href="../elements/bc_color.html" class="pc-link">
                            <span class="pc-micon"> <i data-feather="edit"></i></span>
                            <span class="pc-mtext">Color</span>
                        </a>
                    </li> --}}
                    {{-- <li class="pc-item pc-hasmenu">
                        <a href="../elements/bc_typography.html" class="pc-link">
                            <span class="pc-micon"> <i data-feather="type"></i></span>
                            <span class="pc-mtext">Typography</span>
                        </a>
                    </li> --}}
                    {{-- <li class="pc-item pc-hasmenu">
                        <a href="../elements/icon-feather.html" class="pc-link">
                            <span class="pc-micon"> <i data-feather="feather"></i></span>
                            <span class="pc-mtext">Icons</span>
                        </a>
                    </li> --}}

                    <li class="pc-item pc-caption">
                        <label>Pages</label>
                        <i data-feather="monitor"></i>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="../pages/login-v1.html" class="pc-link" target="_blank">
                            <span class="pc-micon"> <i data-feather="lock"></i></span>
                            <span class="pc-mtext">Login</span>
                        </a>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="../pages/register-v1.html" class="pc-link" target="_blank">
                            <span class="pc-micon"> <i data-feather="user-plus"></i></span>
                            <span class="pc-mtext">Register</span>
                        </a>
                    </li>
                    <li class="pc-item pc-caption">
                        <label>Other</label>
                        <i data-feather="sidebar"></i>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link"><span class="pc-micon"> <i data-feather="align-right"></i>
                            </span><span class="pc-mtext">Menu levels</span><span class="pc-arrow"><i
                                    class="ti ti-chevron-right"></i></span></a>
                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="#!">Level 2.1</a></li>
                            <li class="pc-item pc-hasmenu">
                                <a href="#!" class="pc-link">Level 2.2<span class="pc-arrow"><i
                                            class="ti ti-chevron-right"></i></span></a>
                                <ul class="pc-submenu">
                                    <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                                    <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                                    <li class="pc-item pc-hasmenu">
                                        <a href="#!" class="pc-link">Level 3.3<span class="pc-arrow"><i
                                                    class="ti ti-chevron-right"></i></span></a>
                                        <ul class="pc-submenu">
                                            <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="pc-item pc-hasmenu">
                                <a href="#!" class="pc-link">Level 2.3<span class="pc-arrow"><i
                                            class="ti ti-chevron-right"></i></span></a>
                                <ul class="pc-submenu">
                                    <li class="pc-item"><a class="pc-link" href="#!">Level 3.1</a></li>
                                    <li class="pc-item"><a class="pc-link" href="#!">Level 3.2</a></li>
                                    <li class="pc-item pc-hasmenu">
                                        <a href="#!" class="pc-link">Level 3.3<span class="pc-arrow"><i
                                                    class="ti ti-chevron-right"></i></span></a>
                                        <ul class="pc-submenu">
                                            <li class="pc-item"><a class="pc-link" href="#!">Level 4.1</a>
                                            </li>
                                            <li class="pc-item"><a class="pc-link" href="#!">Level 4.2</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="pc-item">
                        <a href="../other/sample-page.html" class="pc-link">
                            <span class="pc-micon">
                                <i data-feather="sidebar"></i>
                            </span>
                            <span class="pc-mtext">Sample page</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- [ Sidebar Menu ] end -->
