<section class="footer-section">
    <div class="container-fluid">
        <div class="contact-section wow fadeInUp">
            <div class="row g-3 align-items-center">
                <div class="col-lg-3">
                    <h4>Have more questions?</h4>
                </div>
                @if (websiteSetupValue('phone'))
                    <div class="col-lg-3">
                        <p>
                            <i class="fas fa-phone-alt"></i>For enquiry call us on<br>
                            <a href="tel:+91{{ websiteSetupValue('phone') }}">+91-{{ websiteSetupValue('phone') }}</a>
                        </p>
                    </div>
                @endif
                @if (websiteSetupValue('email1'))
                    <div class="col-lg-3">
                        <p>
                            <i class="fa fa-envelope"></i>For enquiry email us at<br>
                            <a href="mailto:{{ websiteSetupValue('email1') }}">{{ websiteSetupValue('email1') }}</a>
                        </p>
                    </div>
                @endif
                @if (websiteSetupValue('email2'))
                    <div class="col-lg-3">
                        <p>
                            <i class="fa fa-envelope"></i> For complaints, email us at
                            <a href="mailto:{{ websiteSetupValue('email2') }}">{{ websiteSetupValue('email2') }}</a>
                        </p>
                    </div>
                @endif
            </div>
        </div>
        <div class="bottom-section wow fadeInLeft">
            <div class="row g-3">
                <div class="col-lg-7">
                    <div class="intro">
                        <img src="{{ asset('storage/website_setup/' . websiteSetupValue('logo')) }}"
                            class="img-fluid logo" alt="" />
                        <div>
                            <h6 class="text-uppercase">{{ config('app.name') }}</h6>
                            <p>{{ websiteSetupValue('description') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex justify-content-lg-end justify-content-center">
                        @if (websiteSetupValue('facebook'))
                            <a class="btn btn-outline-light btn-social" href="{{ websiteSetupValue('facebook') }}"
                                target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        @endif
                        @if (websiteSetupValue('instagram'))
                            <a class="btn btn-outline-light btn-social" href="{{ websiteSetupValue('instagram') }}"
                                target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        @endif
                        @if (websiteSetupValue('youtube'))
                            <a class="btn btn-outline-light btn-social" href="{{ websiteSetupValue('youtube') }}"
                                target="_blank">
                                <i class="fab fa-youtube"></i>
                            </a>
                        @endif
                        @if (websiteSetupValue('twitter'))
                            <a class="btn btn-outline-light btn-social" href="{{ websiteSetupValue('twitter') }}"
                                target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="row g-3 border-top mt-3">
                <div class="col-lg-6">
                    <ul class="footer-link">
                        <li>
                            <a href="{{ route('front.index') }}">Home</a>
                        </li>
                        <li>
                            <a href="{{route('front.privacy')}}">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="{{route('front.terms')}}">Terms & Conditions</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <p class="copyright">
                        &copy;{{ config('app.name') }}, All Right Reserved.
                        Designed By <a href="https://techuptechnologies.com/" target="_blank">Techup Technologies</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
