<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('dashboard')?' ':'collapsed'}} " href="{{ route('home') }}">
                <i class="bi bi-grid"></i>
                <span>Home</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('categories.index')?' ':'collapsed'}}"
                href="{{ route('categories.index') }}">
                <i class="bi bi-menu-button-wide"></i><span>Category</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('tags.index')?' ':'collapsed'}}" href="{{ route('tags.index') }}">
                <i class="bi bi-menu-button-wide"></i><span>Tags</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link  {{ request()->routeIs('categories.index')?' ':'collapsed'}}"
                href="{{ route('categories.index') }}">
                <i class="bi bi-menu-button-wide"></i><span>Posts</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('users.index')?' ':'collapsed'}} "
                href="{{ route('users.index') }}">
                <i class="bi bi-menu-button-wide"></i><span>Users</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Dropdowns</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="components-alerts.html">
                        <i class="bi bi-circle"></i><span>Alerts</span>
                    </a>
                </li>

            </ul>
        </li>


    </ul>

</aside>