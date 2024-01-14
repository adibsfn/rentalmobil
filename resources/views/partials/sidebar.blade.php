<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/"
                        aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                            class="hide-menu">Dashboard</span></a></li>
                <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Master Data</span></li>

                <li class="sidebar-item {{ Request::is('mobils*') ? 'selected' : '' }}"> <a class="sidebar-link " href="/mobils"
                        aria-expanded="false"><i data-feather="package" class="feather-icon"></i><span
                            class="hide-menu">Mobil
                        </span></a>
                </li>
                <li class="sidebar-item {{ Request::is('rentals*') ? 'selected' : '' }}"> <a class="sidebar-link" href="/rentals"
                        aria-expanded="false"><i data-feather="box" class="feather-icon"></i><span
                            class="hide-menu">Rental
                        </span></a>
                </li>
                <li class="sidebar-item {{ Request::is('riwayats*') ? 'selected' : '' }}"> <a class="sidebar-link" href="/riwayats"
                        aria-expanded="false"><i data-feather="box" class="feather-icon"></i><span
                            class="hide-menu">Riwayat Sewa
                        </span></a>
                </li>
                {{-- <li class="sidebar-item {{ Request::is('users*') ? 'selected' : '' }}"> <a class="sidebar-link" href="/users"
                        aria-expanded="false"><i data-feather="users" class="feather-icon"></i><span
                            class="hide-menu">User
                        </span></a>
                </li> --}}
                
                {{-- <li class="list-divider"></li>
                <li class="nav-small-cap"><span class="hide-menu">Master User</span></li>

                <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="/datauser"
                        aria-expanded="false"><i data-feather="user" class="feather-icon"></i><span
                            class="hide-menu">Data User
                        </span></a>
                </li> --}}
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>