

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
        color: #197241 !important;
    }
</style>

<div class="main-banner-about">
<section class="">
    <div class="container">
        <div class="text-center wow fadeInUp">
            <h2 class="section-intro-title text-green fw-bold">#HOWITWORKS</h2>
            <h5 class="section-title text-green">1 Lakh Plus Happy Customers Served</h5>
        </div>
        <div class="row gy-5 gx-4 mb-5">
            <div class="col-lg-4 wow fadeInUp">
                <div class="row g-3">
                    <div class="col-lg-12">
                        <div class="text-lg-end">
                            <i class="fas fa-2x fa-cart-plus text-primary text-green mb-3"></i>
                            <h5>Choose Plan</h5>
                            <p>Sign up for our healthy diet plan and receive a unique login ID and password.</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="md:text-end text-start">
                            <i class="fas fa-2x fa-notes-medical text-primary text-green mb-3"></i>
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
                            <i class="fas fa-truck fa-2x text-primary text-green mb-3"></i>
                            <h5>Doorstep Delivery</h5>
                            <p>Healthy meals will be delivered daily across your location, customized to your diet plan.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="text-lg-start ">
                            <i class="fas fa-heart fa-2x text-primary text-green mb-3"></i>
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
                    <mark class="highlight text-green">achieving</mark>
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
