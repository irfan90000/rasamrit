<section class="footer-section text-white pt-5 pb-4">
    <div class="container">
        <div class="row gy-4">
            <!-- Logo + Description + Newsletter -->
            <div class="col-lg-4 col-md-6 pe-5">
                <div class="d-flex align-items-center mb-3">

                    <img  src="{{ asset('frontend/image/rasamrit.png') }}" alt="logo" style="width: 60px; height: 60px; ">

                    <h2 class="fw-bold text-white mb-0 ps-3 display-5">
                        {{ config('app.name') }}
                    </h2>

                </div>
                <p>{{ websiteSetupValue('description') }}</p>

                <!-- Newsletter -->
                <h6 class="fw-semibold mb-2 text-white">Subscribe to our newsletter</h6>
                <form class="d-flex">
                    <input type="email" class="form-control me-2" placeholder="Enter your email" required>
                    <button type="submit" class="btn btn-success px-3">Subscribe</button>
                </form>
            </div>

            <!-- Quick Links -->
            <div class="col-lg-2 col-md-6">
                <h6 class="fw-semibold mb-3 text-green">Quick Links</h6>
                <ul class="list-unstyled footer-links">

                    <li> <a href="{{ route('front.index') }}"
                            class="{{ Route::is('front.index') || Route::is('front.contact') ||
                    Route::is('front.terms') || Route::is('front.privacy') ? 'active' : '' }}">
                            Home
                        </a></li>
                    <li>    <a href="{{ route('front.foodmenu') }}"
                               class="{{ Route::is('front.foodmenu') || Route::is('front.allmenu') ? 'active' : '' }}">
                            Food Menu
                        </a></li>
                    <li> <a href="{{ route('front.subscription') }}"
                            class="{{ Route::is('front.subscription') ? 'active' : '' }}">
                            Food Subscription
                        </a></li>
                    <li><a href="{{ route('front.pricing') }}"
                           class=" {{ Route::is('front.pricing') ? 'active' : '' }}">Pricing</a></li>

                    <li>    <a href="{{ route('front.coaching') }}"
                               class="{{ Route::is('front.coaching') ? 'active' : '' }}">
                            Online Coaching
                        </a></li>
                    <li> <a href="{{ route('front.about') }}"
                            class="{{ Route::is('front.about') ? 'active' : '' }}">
                            About Us
                        </a></li>
                    <li>
                        <a href="{{ route('blog.index') }}"
                           class="{{ Route::is('blog.index') ? 'active' : '' }}">
                            Blog
                        </a>
                    </li>

                </ul>
            </div>

            <!-- Services -->
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-semibold mb-3 text-green">Services</h6>
                <ul class="list-unstyled footer-links">
                    <li>Detox Programs</li>
                    <li>Fruit Bowls</li>
                    <li>Salad Bowls</li>
                    <li>Overnight Oats</li>
                    <li>Smoothies</li>
                    <li>Custom Plans</li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="col-lg-3 col-md-6">
                <h6 class="fw-semibold mb-3 text-green">Contact</h6>
                @if (websiteSetupValue('phone'))
                    <p><i class="fas fa-phone me-2 text-green"></i>
                        <a href="tel:+91{{ websiteSetupValue('phone') }}" class="text-white">
                            +91-{{ websiteSetupValue('phone') }}
                        </a>
                    </p>
                @endif
                @if (websiteSetupValue('email1'))
                    <p><i class="fa fa-envelope me-2 text-green"></i>
                        <a href="mailto:{{ websiteSetupValue('email1') }}" class="text-white">
                            {{ websiteSetupValue('email1') }}
                        </a>
                    </p>
                @endif
                @if (websiteSetupValue('email2'))
                    <p><i class="fa fa-envelope me-2 text-green"></i>
                        <a href="mailto:{{ websiteSetupValue('email2') }}" class="text-white">
                            {{ websiteSetupValue('email2') }}
                        </a>
                    </p>
                @endif
                <p><i class="fa fa-map-marker-alt me-2 text-green"></i>Highway 9, BMSIT College, Avalahalli, Yelahanka, Bengaluru, Karnataka</p>

                <!-- Social Links -->
                <div class="d-flex gap-2 mt-3">
                    @if (websiteSetupValue('facebook'))
                        <a href="{{ websiteSetupValue('facebook') }}" target="_blank" class="btn btn-outline-light btn-sm">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    @endif
                    @if (websiteSetupValue('instagram'))
                        <a href="{{ websiteSetupValue('instagram') }}" target="_blank" class="btn btn-outline-light btn-sm">
                            <i class="fab fa-instagram"></i>
                        </a>
                    @endif
                    @if (websiteSetupValue('youtube'))
                        <a href="{{ websiteSetupValue('youtube') }}" target="_blank" class="btn btn-outline-light btn-sm">
                            <i class="fab fa-youtube"></i>
                        </a>
                    @endif
                    @if (websiteSetupValue('twitter'))
                        <a href="{{ websiteSetupValue('twitter') }}" target="_blank" class="btn btn-outline-light btn-sm">
                            <i class="fab fa-twitter "></i>
                        </a>
                    @endif
                </div>
            </div>
        </div>

        <!-- Bottom Section -->
        <div class="row border-top pt-3 mt-4">
            <div class="col-md-6">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item"><a class="text-white" href="{{ route('front.privacy') }}">Privacy Policy</a></li>
                    <li class="list-inline-item"><a class="text-white" href="{{ route('front.terms') }}">Terms</a></li>
                </ul>
            </div>
            <div class="col-md-6 text-md-end text-center">
                <p class="mb-0 text-green">&copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.</p>
            </div>
        </div>
    </div>
</section>

<style>
    .footer-section {
        background-color: #022111; /* Dark green like your sample */
    }
    .footer-links li {
        margin-bottom: 8px;
    }
    .footer-links a {
        color: #dcdcdc;
        text-decoration: none;
    }
    .footer-links a:hover {
        color: #28a745;
    }
    .text-green{
        color: #197241;
    }
</style>

