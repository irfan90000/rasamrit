

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
    .text-how{
        font-family: "Poppins", serif;
        font-weight: 500;
        color: #333;
        line-height: 1.5;
        font-size: 1.25rem;
        margin-top: 0;
        margin-bottom: .5rem;
    }
</style>

<div class="main-banner-about">
<section class="">
    <div class="container">
        <div class="text-center wow fadeInUp">
            <h2 class="section-intro-title text-green fw-bold">#HOWITWORKS</h2>
            <p class="section-title text-how text-green">1 Lakh Plus Happy Customers Served</p>
        </div>
        <div class="row gy-5 gx-4 mb-5">
            <div class="col-lg-4 wow fadeInUp">
                <div class="row g-3">
                    <div class="col-lg-12">
                        <div class="text-lg-end">
                            <i class="fas fa-2x fa-cart-plus text-primary text-green mb-3"></i>
                            <p class="text-how">Choose Plan</p>
                            <p>Sign up for our healthy diet plan and receive a unique login ID and password.</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="md:text-end text-start">
                            <i class="fas fa-2x fa-notes-medical text-primary text-green mb-3"></i>
                            <p class="text-how">Structure Your Diet</p>
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
                            <p class="text-how">Doorstep Delivery</p>
                            <p>Healthy meals will be delivered daily across your location, customized to your diet plan.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="text-lg-start ">
                            <i class="fas fa-heart fa-2x text-primary text-green mb-3"></i>
                            <p class="text-how">Get Fit</p>
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
                <p class="mb-3 text-how">
                    Imagine enjoying all of this in your diet while still
                    <mark class="highlight text-green">achieving</mark>
                    your weight loss goals!
                </p>
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
                            <p class="text-how">{{ $goal->name }}</p>
                            <img src="{{ asset('storage/goal/' . $goal->image) }}" class="img-fluid" alt="" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
</div>

