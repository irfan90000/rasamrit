{{--<section class="footer-section">--}}
{{--    <div class="container-fluid">--}}
{{--        <div class="contact-section wow fadeInUp">--}}
{{--            <div class="row g-3 align-items-center">--}}
{{--                <div class="col-lg-3">--}}
{{--                    <h4>Have more questions?</h4>--}}
{{--                </div>--}}
{{--                @if (websiteSetupValue('phone'))--}}
{{--                    <div class="col-lg-3">--}}
{{--                        <p>--}}
{{--                            <i class="fas fa-phone-alt"></i>For enquiry call us on<br>--}}
{{--                            <a href="tel:+91{{ websiteSetupValue('phone') }}">+91-{{ websiteSetupValue('phone') }}</a>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--                @if (websiteSetupValue('email1'))--}}
{{--                    <div class="col-lg-3">--}}
{{--                        <p>--}}
{{--                            <i class="fa fa-envelope"></i>For enquiry email us at<br>--}}
{{--                            <a href="mailto:{{ websiteSetupValue('email1') }}">{{ websiteSetupValue('email1') }}</a>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--                @if (websiteSetupValue('email2'))--}}
{{--                    <div class="col-lg-3">--}}
{{--                        <p>--}}
{{--                            <i class="fa fa-envelope"></i> For complaints, email us at--}}
{{--                            <a href="mailto:{{ websiteSetupValue('email2') }}">{{ websiteSetupValue('email2') }}</a>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="bottom-section wow fadeInLeft">--}}
{{--            <div class="row g-3">--}}
{{--                <div class="col-lg-7">--}}
{{--                    <div class="intro">--}}
{{--                        <img src="{{ asset('storage/website_setup/' . websiteSetupValue('logo')) }}"--}}
{{--                            class="img-fluid logo" alt="" />--}}
{{--                        <div>--}}
{{--                            <h6 class="text-uppercase">{{ config('app.name') }}</h6>--}}
{{--                            <p>{{ websiteSetupValue('description') }}</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-5">--}}
{{--                    <div class="d-flex justify-content-lg-end justify-content-center">--}}
{{--                        @if (websiteSetupValue('facebook'))--}}
{{--                            <a class="btn btn-outline-light btn-social" href="{{ websiteSetupValue('facebook') }}"--}}
{{--                                target="_blank">--}}
{{--                                <i class="fab fa-facebook-f"></i>--}}
{{--                            </a>--}}
{{--                        @endif--}}
{{--                        @if (websiteSetupValue('instagram'))--}}
{{--                            <a class="btn btn-outline-light btn-social" href="{{ websiteSetupValue('instagram') }}"--}}
{{--                                target="_blank">--}}
{{--                                <i class="fab fa-instagram"></i>--}}
{{--                            </a>--}}
{{--                        @endif--}}
{{--                        @if (websiteSetupValue('youtube'))--}}
{{--                            <a class="btn btn-outline-light btn-social" href="{{ websiteSetupValue('youtube') }}"--}}
{{--                                target="_blank">--}}
{{--                                <i class="fab fa-youtube"></i>--}}
{{--                            </a>--}}
{{--                        @endif--}}
{{--                        @if (websiteSetupValue('twitter'))--}}
{{--                            <a class="btn btn-outline-light btn-social" href="{{ websiteSetupValue('twitter') }}"--}}
{{--                                target="_blank">--}}
{{--                                <i class="fab fa-twitter"></i>--}}
{{--                            </a>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row g-3 border-top mt-3">--}}
{{--                <div class="col-lg-6">--}}
{{--                    <ul class="footer-link">--}}
{{--                        <li>--}}
{{--                            <a href="{{ route('front.index') }}">Home</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="{{route('front.privacy')}}">Privacy Policy</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="{{route('front.terms')}}">Terms & Conditions</a>--}}
{{--                        </li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6">--}}
{{--                    <p class="copyright">--}}
{{--                        &copy;{{ config('app.name') }}, All Right Reserved.--}}
{{--                        Designed By <a href="https://techuptechnologies.com/" target="_blank">Techup Technologies</a>--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}






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
{{--                    <li> <a href="{{ route('frontend.blog') }}"--}}
{{--                            class="{{ Route::is('frontend.blog') ? 'active' : '' }}">--}}
{{--                            Blog--}}
{{--                        </a></li>--}}
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
                <p><i class="fa fa-map-marker-alt me-2 text-green"></i>Yelahanka, Bangalore</p>

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

