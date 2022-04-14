<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <!-- <a href="/"><img src="/assets/images/logo/logo.png" alt="Logo" srcset=""></a> -->
                    <a href="/dashboard">
                        <h5>Ad Distribution System</h5>
                    </a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <!-- <li class="sidebar-title">Menu</li> -->

                <li class="sidebar-item {{ (request()->is('dashboard')) ? 'active' : '' }} ">
                    <a href="/dashboard" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sidebar-item has-sub {{ (request()->is('advertisement*')) ? 'active' : '' }}">
                    <a href="/advertisement" class='sidebar-link'>
                        <i class="fa-solid fa-file-video"></i>
                        <span>Advertisement</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="/advertisement">All Ads</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="/advertisement/create">Add New</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="/advertisement-size">Ad Size</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item has-sub {{ (request()->is('newspaper*')) ? 'active' : '' }}">
                    <a href="/newspaper" class='sidebar-link'>
                        <i class="fa-solid fa-user-group"></i>
                        <span>Newspaper</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="/newspaper">All Newspapers</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="/newspaper/create">Add New</a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-item  {{ (request()->is('institution')) ? 'active' : '' }}">
                    <a href="/institution" class='sidebar-link'>
                        <i class="fa-solid fa-house-chimney"></i>
                        <span>Institution</span>
                    </a>
                </li>


                <li class="sidebar-item  {{ (request()->is('user')) ? 'active' : '' }}">
                    <a href="/user" class='sidebar-link'>
                        <i class="fa-solid fa-user-group"></i>
                        <span>Users</span>
                    </a>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="fa-solid fa-user"></i>
                        <span>Profile</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item ">
                            <a href="auth-login.html">Edit Profice</a>
                        </li>
                        <li class="submenu-item ">
                            <a href="/logout">Logout</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>