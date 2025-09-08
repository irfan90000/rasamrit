{{--<section class="py-5" style=" border-radius: 16px;" >--}}
{{--    <div class="container px-0 py-4" >--}}
{{--        <!-- Section Title -->--}}
{{--        <div class="text-center mb-5">--}}
{{--            <h2 class="fw-bold text-success">How Our Meal Subscription Works</h2>--}}
{{--            <p class="lead text-muted fw-bold">Simplicity, delivered in 5 easy steps</p>--}}
{{--        </div>--}}

{{--        <!-- Steps Cards Full-Width -->--}}
{{--        <div class="row g-3 px-3">--}}
{{--            @php--}}
{{--                $steps = [--}}
{{--                    ['title' => 'Pick Your Goal', 'desc' => 'Weight loss, muscle gain, diabetic care, or balanced eating'],--}}
{{--                    ['title' => 'Free Calls With a Nutritionist', 'desc' => 'We understand your body, habits, and needs'],--}}
{{--                    ['title' => 'Get Custom Meal Plan', 'desc' => 'Calorie-based plans backed by nutritional science'],--}}
{{--                    ['title' => 'Daily Meal Delivery', 'desc' => 'Fresh, hot, and hygienically packed to your doorstep'],--}}
{{--                    ['title' => 'Refund Guarantee', 'desc' => 'No results after following? We’ll refund. 24/7 support.'],--}}
{{--                ];--}}
{{--            @endphp--}}

{{--            @foreach ($steps as $index => $step)--}}
{{--                <div class="col-12 col-md-6 col-lg-2 flex-fill">--}}
{{--                    <div class="card h-100 text-center border-0 rounded-4 shadow-sm"--}}
{{--                         style="    background: linear-gradient(125deg, #105c01, #009245);">--}}
{{--                        <div class="card-body py-5 px-3 d-flex flex-column align-items-center justify-content-center">--}}
{{--                            <h5 class="fw-bold mb-2 text-white" >{{ $step['title'] }}</h5>--}}

{{--                            <p class="text-white  mb-0" >{{ $step['desc'] }}</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--        <div class="mt-4">--}}
{{--            <h6 class="text-muted fw-bold text-center"> Adjust your plan anytime. 24/7 chat & call support.</h6>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}






<style>
    .main-bannerr {
        background-image: url("{{ asset('frontend/image/bg-banner.jpg') }}");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        padding: 60px 0;
        height: auto;
    }
</style>

<div class="main-bannerr">
<section class="">
    <div class="container">
        <div class="text-center wow fadeInUp">
            <h2 class="section-intro-title text-success fw-bold">#HOWITWORKS</h2>
            <h5 class="section-title">1 Lakh Plus Happy Customers Served</h5>
        </div>
        <div class="row gy-5 gx-4 mb-5">
            <div class="col-lg-4 wow fadeInUp">
                <div class="row g-3">
                    <div class="col-lg-12">
                        <div class="text-lg-end">
                            <i class="fas fa-2x fa-cart-plus text-primary mb-3"></i>
                            <h5>Choose Plan</h5>
                            <p>Sign up for our healthy diet plan and receive a unique login ID and password.</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="text-end">
                            <i class="fas fa-2x fa-notes-medical text-primary mb-3"></i>
                            <h5>Structure Your Diet</h5>
                            <p>You will be assigned a personal nutritionist, and your diet plan will be tailored to your
                                needs.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp">
                <div class="d-flex aign-items-center text-center h-100">
                    <img class="img-fluid object-contain" src="{{ asset('frontend/img/work.png') }}" alt="">
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp">
                <div class="row g-3">
                    <div class="col-lg-12">
                        <div class="text-start">
                            <i class="fas fa-truck fa-2x text-primary mb-3"></i>
                            <h5>Doorstep Delivery</h5>
                            <p>Healthy meals will be delivered daily across your location, customized to your diet plan.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="text-lg-start text-end">
                            <i class="fas fa-heart fa-2x text-primary mb-3"></i>
                            <h5>Get Fit</h5>
                            <p>Reach your fitness goals with our dedicated support and built-in progress tracker.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="">
    <div class="container" >
        <div class="row align-items-center gx-4 gy-5">
            <div class="col-lg-5 wow fadeInLeft">
                <h5 class="mb-3">
                    Imagine enjoying all of this in your diet while still
                    <mark class="highlight">achieving</mark>
                    your weight loss goals!
                </h5>
                <button
                        class="fw-semibold px-4 py-2 rounded-pill border-0 subs_btn animated slideInLeft"

                >
                    <a class="fw-semibold text-white" href="{{ route('front.subscription') }}">
                        Start Food Subscripton <span><i class="fas fa-arrow-right"></i></span> </a>
                </button>
{{--                <a href="{{ route('front.subscription') }}" type="button" class="subs_btn animated slideInLeft">--}}
{{--                    Start Food Subscripton <span><i class="fas fa-arrow-right"></i></span>--}}
{{--                </a>--}}
            </div>
            <div class="col-lg-7 wow fadeInUp">
                <div class="slide_card">
                    @foreach ($goal_list as $goal)
                        <div class="img_card">
                            <h6>{{ $goal->name }}</h6>
                            <img src="{{ asset('storage/goal/' . $goal->image) }}" class="img-fluid" alt="" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
</div>
{{--<section class="section-padding bg-white">--}}
{{--    <div class="container" >--}}
{{--        <div class="text-center wow fadeInUp">--}}
{{--            <h1 class="section-intro-title">#OURFOODMENU</h1>--}}
{{--            <h5 class="section-title">Serving Our Most Popular Items</h5>--}}
{{--        </div>--}}
{{--        <div class="row g-3">--}}
{{--            <div class="col-lg-4 wow fadeInUp">--}}
{{--                <a href="{{ route('front.foodmenu') }}">--}}
{{--                    <div class="dietary_area">--}}
{{--                        <div class="dietary_card veg">--}}
{{--                        </div>--}}
{{--                        <h6 class="title">Vegetarian</h6>--}}
{{--                        <div class="view_btn">--}}
{{--                            <span class="vw">View All</span>--}}
{{--                            <span class="icon">--}}
{{--                                <i class="fas fa-chevron-right"></i>--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 wow fadeInUp">--}}
{{--                <a href="{{ route('front.foodmenu') }}">--}}
{{--                    <div class="dietary_area">--}}
{{--                        <div class="dietary_card nonveg">--}}
{{--                        </div>--}}
{{--                        <h6 class="title">Non Vegetarian</h6>--}}
{{--                        <div class="view_btn">--}}
{{--                            <span class="vw">View All</span>--}}
{{--                            <span class="icon">--}}
{{--                                <i class="fas fa-chevron-right"></i>--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-lg-4 wow fadeInUp">--}}
{{--                <a href="{{ route('front.foodmenu') }}">--}}
{{--                    <div class="dietary_area">--}}
{{--                        <div class="dietary_card egg">--}}
{{--                        </div>--}}
{{--                        <h6 class="title">Eggetarian</h6>--}}
{{--                        <div class="view_btn">--}}
{{--                            <span class="vw">View All</span>--}}
{{--                            <span class="icon">--}}
{{--                                <i class="fas fa-chevron-right"></i>--}}
{{--                            </span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<section class="video_section">--}}
{{--    <div class="video_content">--}}
{{--        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="{{ websiteSetupValue('video') }}"--}}
{{--                data-bs-target="#videoModal">--}}
{{--            <span></span>--}}
{{--        </button>--}}
{{--        <h4 class="title">Experience how we serve you?</h4>--}}
{{--    </div>--}}
{{--</section>--}}
{{--<section class="cover_bg">--}}
{{--    <div class="container">--}}
{{--        <div class="row align-items-center g-4">--}}
{{--            <div class="col-lg-5 wow fadeInLeft">--}}
{{--                <h5 class="mb-3">--}}
{{--                    Look How Our Customers Achieved Their Health Goals with--}}
{{--                    <mark class="highlight">{{ config('app.name') }}</mark>--}}
{{--                </h5>--}}
{{--                <p class="m-0">--}}
{{--                    We stand by our commitment to delivering results. Your transformation is our priority, and we guide--}}
{{--                    you through a journey of weight loss that's not only effective but also enjoyable every step of the--}}
{{--                    way.--}}
{{--                </p>--}}
{{--            </div>--}}
{{--            <div class="col-lg-7 wow fadeInUp">--}}
{{--                <div class="owl-carousel testimonial-carousel">--}}
{{--                    @foreach ($testimonial_list as $testimonial)--}}
{{--                        <div class="testimonial-item">--}}
{{--                            <p class="title">--}}
{{--                                {{ $testimonial->description }}--}}
{{--                            </p>--}}
{{--                            <div class="d-flex align-items-center">--}}
{{--                                <img class="img-fluid flex-shrink-0 rounded-circle"--}}
{{--                                     alt="" src="{{ asset('storage/testimonial/' . $testimonial->image) }}"--}}
{{--                                     style="width: 40px; height: 40px; object-fit:cover">--}}
{{--                                <div class="ps-3">--}}
{{--                                    <h6 class="mb-0">{{ $testimonial->name }}</h6>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}