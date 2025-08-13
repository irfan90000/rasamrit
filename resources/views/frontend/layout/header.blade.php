<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a href="{{ route('front.index') }}" class="navbar-brand">
            <img src="{{ asset('storage/website_setup/' . websiteSetupValue('logo')) }}" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="{{ route('front.index') }}"
                   class="{{ Route::is('front.index') || Route::is('front.contact') || Route::is('front.terms') || Route::is('front.privacy') ? 'active' : '' }} nav-item nav-link ">
                    Home
                </a>
                <li class="nav-item">
                    <a href="{{ route('front.foodmenu') }}"
                       class="nav-link {{ Route::is('front.foodmenu') || Route::is('front.allmenu') ? 'active' : '' }}">
                        Food Menu
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle
        {{ Route::is('front.pricing') || Route::is('front.subscription') || Route::is('front.program') || Route::is('front.Program_subscription') || Route::is('front.coaching') ? 'active' : '' }}"
                       href="#"
                       id="navbarServicesDropdown"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarServicesDropdown">
                        <li>
                            <a href="{{ route('front.pricing') }}"
                               class="dropdown-item {{ Route::is('front.pricing') ? 'active' : '' }}">
                                Pricing Chart
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('front.subscription') }}"
                               class="dropdown-item {{ Route::is('front.subscription') ? 'active' : '' }}">
                                Food Subscription
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('front.program') }}"
                               class="dropdown-item {{ Route::is('front.program') ? 'active' : '' }}">
                                Program
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('front.Program_subscription') }}"
                               class="dropdown-item {{ Route::is('front.Program_subscription') ? 'active' : '' }}">
                                Program Subscription
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('front.coaching') }}"
                               class="dropdown-item {{ Route::is('front.coaching') ? 'active' : '' }}">
                                Online Coaching
                            </a>
                        </li>
                    </ul>
                </li>
                <a href="{{ route('blog.index') }}"
                   class="{{ Route::is('blog.index') || Route::is('front.allmenu') ? 'active' : '' }} nav-item nav-link">
                    Blog
                </a>
                <a href="{{ route('front.about') }}"
                   class="{{ Route::is('front.about') ? 'active' : '' }} nav-item nav-link">
                    About Us
                </a>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ Route::is('shop.*') || Route::is('cart.*') || Route::is('orders.*') ? 'active' : '' }}"
                       href="#"
                       id="navbarShopDropdown"
                       role="button"
                       data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Shop
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarShopDropdown">
                        <li>
                            <a href="{{ route('shop.index') }}"
                               class="dropdown-item {{ Route::is('shop.*') ? 'active' : '' }}">
                                Shop
                            </a>
                        </li>
                        @auth
                            <li>
                                <a href="{{ route('cart.index') }}"
                                   class="dropdown-item {{ Route::is('cart.*') ? 'active' : '' }}">
                                    Cart <span class="badge bg-success cart-count">0</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('orders.index') }}"
                                   class="dropdown-item {{ Route::is('orders.*') ? 'active' : '' }}">
                                    My Orders
                                </a>
                            </li>
                        @endauth
                    </ul>
                </li>
                @guest
                    <a href="{{ route('login') }}" class="nav-item nav-link">
                        <i class="fas fa-sign-in-alt me-1"></i> Login
                    </a>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarUserDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user me-1"></i> {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarUserDropdown">
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">
                                        <i class="fas fa-sign-out-alt me-2"></i> Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endguest

            </div>

            <a href="{{ route('front.contact') }}" type="button" class="tifn_btn">
                Connect With Us <span><i class="fas fa-arrow-right ms-2"></i></span>
            </a>

        </div>
    </div>
</nav>


