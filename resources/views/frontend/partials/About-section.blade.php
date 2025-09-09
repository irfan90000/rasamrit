<section class="section-padding main-banner-about">
    <div class="container">

        <div class="row gx-4 gy-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded rounded-3 w-100 wow zoomIn"
                             alt="Bangalore’s Best Prepared Meal" src="{{ asset('frontend/image/about--2222.jpg') }}">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded rounded-3 w-75 wow zoomIn"
                             alt="Freshly prepared meal" src="{{ asset('frontend/image/about-44444.jpg') }}" style="margin-top: 25%;">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded rounded-3 w-75 wow zoomIn"
                             alt="Bangalore’s Best Prepared Meal" src="{{ asset('frontend/image/breakfast-2.jpg') }}">
                    </div>
                    <div class="col-6 text-end">
                        <img class="img-fluid rounded rounded-3 w-100 wow zoomIn"
                             alt="Freshly prepared meal" src="{{ asset('frontend/image/about-four.jpg') }}">
                    </div>
                </div>
                <div class="row g-4 mb-4 mt-2 md:mx-5 mx-0">
                    <div class="col-6">
                        <div class="d-flex align-items-center border-start border-3 text-green border-primary px-3">
                            <h2 class="flex-shrink-0 text-green mb-0" data-toggle="counter-up">5</h2>
                            <div class="sm:ps-4 ps-1">
                                <p class="mb-0 text-green">Years of</p>
                                <h6 class="text-uppercase text-green mb-0">Experience</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center border-start border-3 text-green border-primary px-3">
                            <h2 class="flex-shrink-0  text-green mb-0" data-toggle="counter-up">500</h2>
                            <div class="sm:ps-4 ps-1">
                                <p class="mb-0 text-green">Popular</p>
                                <h6 class="text-uppercase text-green mb-0">Food Options</h6>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 ps-lg-5">
                <span class="badge_title text-green">About Rasamrit:</span>
                <h2 class="mb-3  text-black">Know About <span class="mb-3 fw-semibold text-green"> Rasamrit</span></h2>
                <p class="mb-2 about-text">
                    We are not a food factory. We are your partner in wellness.
                </p>
                <p class="mb-2 about-text">
                    At Rasamrit, we believe that health is the greatest wealth.
                    We’re here to simplify your journey toward a healthier,
                    more fulfilling lifestyle. Inspired by how celebrities transform
                    their health through personalized diet plans and expert guidance,
                    Rasamrit brings the same level of dedication and care to everyone.
                </p>
                <p class="mb-2 about-text">
                    We specialize in freshly prepared, diet-tailored meals, cold-pressed juices, exotic fruit bowls,
                    salads, and more, all delivered right to your doorstep. Our team of certified dieticians, nutritionists, gym,
                    and yoga trainers work tirelessly to ensure your health goals are met with ease and precision.
                </p>
                <p class="mb-2 about-text">
                    Whether you aim to lose weight, detox, or simply adopt a healthier routine,
                    Rasamrit is your one-stop solution for all health goals.
                </p>
                <button class="fw-semibold px-4 py-2 mt-2 rounded-pill border-0 subs_btn animated slideInLeft">
                    <a class="fw-semibold text-white" href="{{ route('front.about') }}">
                        Know More About Us <span><i class="fas fa-arrow-right"></i></span> </a>
                </button>
            </div>
        </div>
    </div>

</section>


<style>
    .main-banner-about {
        background-image: url("{{ asset('frontend/image/bg-banner.jpg') }}");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        padding: 60px 0;
        height: auto;
    }
    .text-green{
        color: #197241;
        border-color: #197241;
        font-weight: bold;
    }
    .about-text{
        font-size: 18px;
    }
    @media (max-width: 768px) {
        .about-text{
            font-size: 14px;
        }
    }
</style>