<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" aria-current="page" href="/home">
                    <span data-feather="home"></span>
                    Input Data
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('data') ? 'active' : '' }}" href="/data">
                    <span data-feather="file"></span>
                    Data Table
                </a>
            </li>
        </ul>
    </div>
</nav>
