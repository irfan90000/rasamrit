<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
        <a href="{{ route('front.index') }}" class="navbar-brand">
            <img src="{{ asset('storage/website_setup/1736320329162.ico' . websiteSetupValue('logo')) }}" alt="Logo">
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
                <a href="{{ route('front.program') }}"
                   class="{{ Route::is('front.program') ? 'active' : '' }} nav-item nav-link">Program</a>
                <a href="{{ route('front.pricing') }}"
                    class="{{ Route::is('front.pricing') ? 'active' : '' }} nav-item nav-link">Pricing</a>
                <a href="{{ route('front.subscription') }}"
                    class="{{ Route::is('front.subscription') ? 'active' : '' }} nav-item nav-link">
                    Food Subscription
                </a>
                <a href="{{ route('front.Program_subscription') }}"
                   class="{{ Route::is('front.Program_subscription') ? 'active' : '' }} nav-item nav-link">
                    program Subscription
                </a>
                <a href="{{ route('blog.index') }}"
                    class="{{ Route::is('blog.index') || Route::is('front.allmenu') ? 'active' : '' }} nav-item nav-link">
                   Blog
                </a>
                <a href="{{ route('front.foodmenu') }}"
                   class="{{ Route::is('front.foodmenu') || Route::is('front.allmenu') ? 'active' : '' }} nav-item nav-link">
                    Food Menu
                </a>
                <a href="{{ route('front.coaching') }}"
                    class="{{ Route::is('front.coaching') ? 'active' : '' }} nav-item nav-link">
                    Online Coaching
                </a>
                <a href="{{ route('front.about') }}"
                    class="{{ Route::is('front.about') ? 'active' : '' }} nav-item nav-link">
                    About Us
                </a>
                <a href="{{ route('shop.index') }}" class="{{ Route::is('shop.*') ? 'active' : '' }} nav-item nav-link">Shop</a>
                @auth
                    <a href="{{ route('cart.index') }}" class="{{ Route::is('cart.*') ? 'active' : '' }} nav-item nav-link">
                        Cart <span class="badge badge-primary cart-count">0</span>
                    </a>
                    <a href="{{ route('orders.index') }}" class="{{ Route::is('orders.*') ? 'active' : '' }} nav-item nav-link">
                        My Orders
                    </a>
                @endauth
            </div>
            <a href="{{ route('front.contact') }}" type="button" class="tifn_btn">
                Connect With Us <span><i class="fas fa-arrow-right ms-2"></i></span>
            </a>

        </div>
    </div>
</nav>
