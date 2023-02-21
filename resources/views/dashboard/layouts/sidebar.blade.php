<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link" href="/dashboard/user/{{auth()->user()->id}}">
                    <span data-feather="users" class="align-text-bottom"></span>
                    Profile
                </a>
            </li>
            <a class="nav-link" href="/dashboard/user">
                <li class="nav-item">
                    <span data-feather="users" class="align-text-bottom"></span>
                    Data User
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/dashboard/toko">
                    <span data-feather="home" class="align-text-bottom"></span>
                    Data Toko
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <span data-feather="external-link" class="align-text-bottom"></span>
                    Back to Home
                </a>
            </li>
        </ul>
    </div>
</nav>