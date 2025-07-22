<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand">
            <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
            </div>
            <div class="top-menu ms-auto">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item dropdown dropdown-large">
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="header-notifications-list">
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-large">
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="header-message-list"> </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="ms-auto">
                <a href="{{route('front.index')}}" target="_blank" class="btn header-icon" data-bs-toggle="tooltip" data-bs-placement="bottom" title="" data-bs-original-title="Browse Website" aria-describedby="tooltip294218">
                    <i class="bx bx-globe"></i>
                    <small>Website</small>
                </a>
            </div>
            <div class="user-box dropdown">
                <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('backend/images/user.png') }}" class="user-img" alt="user avatar">
                    <div class="user-info ps-1 text-center">
                        <small class="text-dark">Welcome</small>
                        <p class="user-name mb-0">{{ Auth::user()->name }}</p>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="javascript:;">
                            <i class="bx bx-message-square-edit"></i>
                            <span>Change Password</span>
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('admin.logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class='bx bx-log-out-circle'></i>
                            <span>Logout</span>
                        </a>
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
