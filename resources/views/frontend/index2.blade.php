
@extends('frontend.layout.app')
@section('content')
    @section('title', $page_title)
    @section('description', $description)
    @section('styles')
        <style>


            .card:hover {
                transform: translateY(-4px);
                box-shadow: 0 10px 24px rgba(0, 0, 0, 0.08);
                transition: 0.3s ease-in-out;
            }
            .circle-number {
                width: 48px;
                height: 48px;
                font-size: 18px;
            }

            .border-gray {
                border: 1px solid #ccc !important;
            }

            @media (max-width: 576px) {
                .circle-number {
                    width: 36px;
                    height: 36px;
                    font-size: 16px;
                }
            }
            .object-fit-cover {
                object-fit: cover;
                height: 100%;
            }

            .custom-five-cols {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }

            .custom-col {
                flex: 0 0 calc(20% - 12px); /* 5 cards per row with spacing */
                margin-bottom: 24px;
            }

            @media (max-width: 992px) {
                .custom-col {
                    flex: 0 0 calc(50% - 12px);
                }
            }

            @media (max-width: 576px) {
                .custom-col {
                    flex: 0 0 100%;
                }
            }

            .trust-card {
                border-radius: 1rem;
                overflow: hidden;
                transition: transform 0.35s ease, box-shadow 0.35s ease;
            }

            .trust-card:hover {
                transform: translateY(-6px) scale(1.03);
                box-shadow: 0 14px 28px rgba(0, 0, 0, 0.15);
            }

            .card-img-top {
                height: 140px;
                width: 100%;
                object-fit: cover;
            }

            .card-body {
                border-top: 1px solid #dee2e6;
            }

            .border-gray {
                border: 1px solid #ccc !important;
            }
            table thead th {
                border-color: #fff !important;
            }
            table td, table th {
                padding: 1rem !important;
                font-size: 0.95rem;
                font-weight: 500;
            }
            table td:first-child {
                font-weight: 600;
                color: #333;
            }
        </style>
    @endsection
    <section class="hero-header"
             style="background-image: url({{ asset('storage/website_setup/1736344839220.jpg') }});
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="text-black fw-bold animated slideInLeft">
                        Healthy. Homemade. Bangalore’s Best Prepared Meal Delivery Service

                    </h1>
                    <p class="text-success fw-bold animated slideInLeft text-success">
                        <span class="badge_title">Meta Description:</span>
                    </p>
                    <p class="text-muted fw-bold animated slideInLeft">
                        Get the best prepared meal delivery service delivered to your door. Budget-friendly,
                        clean eating plans for weight loss, fitness & busy lifestyles.
                    </p>
{{--                    <a href="{{ route('front.subscription') }}" type="button" class="subs_btn animated slideInLeft">--}}
{{--                        Start Food Subscripton <span><i class="fas fa-arrow-right"></i></span>--}}
{{--                    </a>--}}

                                    <div class="d-flex flex-column flex-md-row gap-3 mt-5">

                                        <!-- Orange Button -->
                                        <button
                                                class="  px-4 py-2 rounded-pill border-0"
                                                style="background-color: #FA724C;"
                                        >
                                            <a class="text-white fw-semibold" href="#"> Get My Custom Meal Plan </a>
                                        </button>

                                        <!-- Yellow Button -->
                                        <button
                                                class="fw-semibold px-4 py-2 rounded-pill border-0"
                                                style="background-color: #F2C94C; color: #1A7A29;"
                                        >
                                           <a class="fw-semibold text-white" href="#"> Explore Food Subscriptions </a>
                                        </button>

                                    </div>


                </div>
            </div>
        </div>



    </section>
    @include('frontend.partials.section-one')

    <section class="section-padding bg-white">
        <div class="container">
            <div class="row gx-4 gy-5 align-items-center">
                <div class="col-lg-6">
                    <div class="row g-3">
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded rounded-3 w-100 wow zoomIn"
                                 alt="" src="{{ asset('frontend/img/about-1.jpg') }}">
                        </div>
                        <div class="col-6 text-start">
                            <img class="img-fluid rounded rounded-3 w-75 wow zoomIn"
                                 alt="" src="{{ asset('frontend/img/about-2.jpg') }}" style="margin-top: 25%;">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded rounded-3 w-75 wow zoomIn"
                                 alt="" src="{{ asset('frontend/img/about-3.jpg') }}">
                        </div>
                        <div class="col-6 text-end">
                            <img class="img-fluid rounded rounded-3 w-100 wow zoomIn"
                                 alt="" src="{{ asset('frontend/img/about-4.jpg') }}">
                        </div>
                    </div>
                </div>
                {{--            <div class="col-lg-6 ps-lg-5">--}}
                {{--                <span class="badge_title">About Us</span>--}}
                {{--                <h3 class="mb-3">Know About <mark class="highlight">{{ config('app.name') }}</mark></h3>--}}
                {{--                <p class="mb-2">--}}
                {{--                    At {{ config('app.name') }}, we believe that health is the greatest wealth. We’re here to simplify--}}
                {{--                    your journey toward a healthier, more fulfilling lifestyle. Inspired by how celebrities transform--}}
                {{--                    their health through personalized diet plans and expert guidance, {{ config('app.name') }} brings--}}
                {{--                    the same level of--}}
                {{--                    dedication and care to everyone.--}}
                {{--                </p>--}}
                {{--                <p class="mb-2">--}}
                {{--                    We specialize in freshly prepared, diet-tailored meals, cold-pressed juices, exotic fruit bowls,--}}
                {{--                    salads, and more, all delivered right to your doorstep. Our team of certified dieticians,--}}
                {{--                    nutritionists, gym, and yoga trainers work tirelessly to ensure your health goals are met with ease--}}
                {{--                    and precision.--}}
                {{--                </p>--}}
                {{--                <p class="mb-4">--}}
                {{--                    Whether you aim to lose weight, detox, or simply adopt a healthier routine,--}}
                {{--                    {{ config('app.name') }}--}}
                {{--                    is your one-stop solution for all health goals.--}}
                {{--                </p>--}}
                {{--                <div class="row g-4 mb-4">--}}
                {{--                    <div class="col-sm-6">--}}
                {{--                        <div class="d-flex align-items-center border-start border-3 border-primary px-3">--}}
                {{--                            <h2 class="flex-shrink-0 text-primary mb-0" data-toggle="counter-up">15</h2>--}}
                {{--                            <div class="ps-4">--}}
                {{--                                <p class="mb-0">Years of</p>--}}
                {{--                                <h6 class="text-uppercase mb-0">Experience</h6>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                    <div class="col-sm-6">--}}
                {{--                        <div class="d-flex align-items-center border-start border-3 border-primary px-3">--}}
                {{--                            <h2 class="flex-shrink-0 text-primary mb-0" data-toggle="counter-up">50</h2>--}}
                {{--                            <div class="ps-4">--}}
                {{--                                <p class="mb-0">Popular</p>--}}
                {{--                                <h6 class="text-uppercase mb-0">Food Options</h6>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
                {{--                <a href="{{ route('front.about') }}" type="button" class="subs_btn animated slideInLeft">--}}
                {{--                    Know More About Us <span><i class="fas fa-arrow-right"></i></span>--}}
                {{--                </a>--}}
                {{--            </div>--}}
                <div class="col-lg-6 ps-lg-5">
                    <span class="badge_title">About Rasamrit:</span>
                    <h2 class="mb-3 fw-bold text-success">A Trusted Food Darzee Alternative That’s Affordable for Everyone</h2>
                    <p class="mb-2">
                        We are not a food factory. We are your partner in wellness.
                    </p>
                    <p class="mb-2">
                        At Rasamrit, we help people transform like celebrities, without the celebrity price tag.
                        Just like movie stars prepping for a role, you’ll get access to tailored diet meals, personal coaching,
                        fitness plans, and daily support from a dedicated nutritionist and trainer.
                    </p>
                    <p class="mb-4">
                        Every meal is freshly cooked with premium ingredients, backed by expert guidance,
                        and built around your specific health goals,
                        whether it’s weight loss, muscle gain, or simply eating clean.
                    </p>
                    <p class="mb-4">
                        We’re not here to sell food. We’re here to deliver results.
                        With 5,000+ happy customers, an in-house team of nutritionists,
                        and the city’s most diverse 28-day rotating meal plan, Rasamrit is Bangalore’s trusted healthy
                        food delivery service and the perfect Food Darzee alternative that doesn’t break the bank.
                    </p>
                    <div class="row g-4 mb-4">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-3 border-primary px-3">
                                <h2 class="flex-shrink-0 text-primary mb-0" data-toggle="counter-up">15</h2>
                                <div class="ps-4">
                                    <p class="mb-0">Years of</p>
                                    <h6 class="text-uppercase mb-0">Experience</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center border-start border-3 border-primary px-3">
                                <h2 class="flex-shrink-0 text-primary mb-0" data-toggle="counter-up">50</h2>
                                <div class="ps-4">
                                    <p class="mb-0">Popular</p>
                                    <h6 class="text-uppercase mb-0">Food Options</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('front.about') }}" type="button" class="subs_btn animated slideInLeft">
                        Know More About Us <span><i class="fas fa-arrow-right"></i></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    @include('frontend.partials.why-choose')
    @include('frontend.partials.meal-plans')
    @include('frontend.partials.how-work')
{{--    <section class="section-padding">--}}
{{--        <div class="container">--}}
{{--            <div class="text-center wow fadeInUp">--}}
{{--                <h1 class="section-intro-title">#HOWITWORKS</h1>--}}
{{--                <h5 class="section-title">1 Lakh Plus Happy Customers Served</h5>--}}
{{--            </div>--}}
{{--            <div class="row gy-5 gx-4 mb-5">--}}
{{--                <div class="col-lg-4 wow fadeInUp">--}}
{{--                    <div class="row g-3">--}}
{{--                        <div class="col-lg-12">--}}
{{--                            <div class="text-lg-end">--}}
{{--                                <i class="fas fa-2x fa-cart-plus text-primary mb-3"></i>--}}
{{--                                <h5>Choose Plan</h5>--}}
{{--                                <p>Sign up for our healthy diet plan and receive a unique login ID and password.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-12">--}}
{{--                            <div class="text-end">--}}
{{--                                <i class="fas fa-2x fa-notes-medical text-primary mb-3"></i>--}}
{{--                                <h5>Structure Your Diet</h5>--}}
{{--                                <p>You will be assigned a personal nutritionist, and your diet plan will be tailored to your--}}
{{--                                    needs.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 wow fadeInUp">--}}
{{--                    <div class="d-flex aign-items-center text-center h-100">--}}
{{--                        <img class="img-fluid object-contain" src="{{ asset('frontend/img/work.png') }}" alt="">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 wow fadeInUp">--}}
{{--                    <div class="row g-3">--}}
{{--                        <div class="col-lg-12">--}}
{{--                            <div class="text-start">--}}
{{--                                <i class="fas fa-truck fa-2x text-primary mb-3"></i>--}}
{{--                                <h5>Doorstep Delivery</h5>--}}
{{--                                <p>Healthy meals will be delivered daily across your location, customized to your diet plan.--}}
{{--                                </p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-12">--}}
{{--                            <div class="text-lg-start text-end">--}}
{{--                                <i class="fas fa-heart fa-2x text-primary mb-3"></i>--}}
{{--                                <h5>Get Fit</h5>--}}
{{--                                <p>Reach your fitness goals with our dedicated support and built-in progress tracker.</p>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}
{{--    <section class="section-padding">--}}
{{--        <div class="container" >--}}
{{--            <div class="row align-items-center gx-4 gy-5">--}}
{{--                <div class="col-lg-5 wow fadeInLeft">--}}
{{--                    <h5 class="mb-3">--}}
{{--                        Imagine enjoying all of this in your diet while still--}}
{{--                        <mark class="highlight">achieving</mark>--}}
{{--                        your weight loss goals!--}}
{{--                    </h5>--}}
{{--                    <a href="{{ route('front.subscription') }}" type="button" class="subs_btn animated slideInLeft">--}}
{{--                        Start Food Subscripton <span><i class="fas fa-arrow-right"></i></span>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-lg-7 wow fadeInUp">--}}
{{--                    <div class="slide_card">--}}
{{--                        @foreach ($goal_list as $goal)--}}
{{--                            <div class="img_card">--}}
{{--                                <h6>{{ $goal->name }}</h6>--}}
{{--                                <img src="{{ asset('storage/goal/' . $goal->image) }}" class="img-fluid" alt="" />--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <section class="section-padding bg-white">--}}
{{--        <div class="container" >--}}
{{--            <div class="text-center wow fadeInUp">--}}
{{--                <h1 class="section-intro-title">#OURFOODMENU</h1>--}}
{{--                <h5 class="section-title">Serving Our Most Popular Items</h5>--}}
{{--            </div>--}}
{{--            <div class="row g-3">--}}
{{--                <div class="col-lg-4 wow fadeInUp">--}}
{{--                    <a href="{{ route('front.foodmenu') }}">--}}
{{--                        <div class="dietary_area">--}}
{{--                            <div class="dietary_card veg">--}}
{{--                            </div>--}}
{{--                            <h6 class="title">Vegetarian</h6>--}}
{{--                            <div class="view_btn">--}}
{{--                                <span class="vw">View All</span>--}}
{{--                                <span class="icon">--}}
{{--                                <i class="fas fa-chevron-right"></i>--}}
{{--                            </span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 wow fadeInUp">--}}
{{--                    <a href="{{ route('front.foodmenu') }}">--}}
{{--                        <div class="dietary_area">--}}
{{--                            <div class="dietary_card nonveg">--}}
{{--                            </div>--}}
{{--                            <h6 class="title">Non Vegetarian</h6>--}}
{{--                            <div class="view_btn">--}}
{{--                                <span class="vw">View All</span>--}}
{{--                                <span class="icon">--}}
{{--                                <i class="fas fa-chevron-right"></i>--}}
{{--                            </span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4 wow fadeInUp">--}}
{{--                    <a href="{{ route('front.foodmenu') }}">--}}
{{--                        <div class="dietary_area">--}}
{{--                            <div class="dietary_card egg">--}}
{{--                            </div>--}}
{{--                            <h6 class="title">Eggetarian</h6>--}}
{{--                            <div class="view_btn">--}}
{{--                                <span class="vw">View All</span>--}}
{{--                                <span class="icon">--}}
{{--                                <i class="fas fa-chevron-right"></i>--}}
{{--                            </span>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <section class="video_section">--}}
{{--        <div class="video_content">--}}
{{--            <button type="button" class="btn-play" data-bs-toggle="modal" data-src="{{ websiteSetupValue('video') }}"--}}
{{--                    data-bs-target="#videoModal">--}}
{{--                <span></span>--}}
{{--            </button>--}}
{{--            <h4 class="title">Experience how we serve you?</h4>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <section class="cover_bg">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center g-4">--}}
{{--                <div class="col-lg-5 wow fadeInLeft">--}}
{{--                    <h5 class="mb-3">--}}
{{--                        Look How Our Customers Achieved Their Health Goals with--}}
{{--                        <mark class="highlight">{{ config('app.name') }}</mark>--}}
{{--                    </h5>--}}
{{--                    <p class="m-0">--}}
{{--                        We stand by our commitment to delivering results. Your transformation is our priority, and we guide--}}
{{--                        you through a journey of weight loss that's not only effective but also enjoyable every step of the--}}
{{--                        way.--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class="col-lg-7 wow fadeInUp">--}}
{{--                    <div class="owl-carousel testimonial-carousel">--}}
{{--                        @foreach ($testimonial_list as $testimonial)--}}
{{--                            <div class="testimonial-item">--}}
{{--                                <p class="title">--}}
{{--                                    {{ $testimonial->description }}--}}
{{--                                </p>--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img class="img-fluid flex-shrink-0 rounded-circle"--}}
{{--                                         alt="" src="{{ asset('storage/testimonial/' . $testimonial->image) }}"--}}
{{--                                         style="width: 40px; height: 40px; object-fit:cover">--}}
{{--                                    <div class="ps-3">--}}
{{--                                        <h6 class="mb-0">{{ $testimonial->name }}</h6>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @endforeach--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

    @include('frontend.partials.pricing-plan')
    @include('frontend.partials.faq')
    {{--<section class="section-padding bg-white">--}}
    {{--    <div class="container">--}}
    {{--        <div class="text-center wow fadeInUp">--}}
    {{--            <h1 class="section-intro-title">#FAQ's</h1>--}}
    {{--            <h5 class="section-title">Got Questions? We Have the Answers</h5>--}}
    {{--        </div>--}}
    {{--        <div class="row g-4 align-items-center">--}}
    {{--            <div class="col-lg-5">--}}
    {{--                <div class="row g-3">--}}
    {{--                    <div class="col-6 text-start">--}}
    {{--                        <img class="img-fluid rounded rounded-3 w-100 wow zoomIn"--}}
    {{--                             alt="" src="{{ asset('frontend/img/about-1.jpg') }}">--}}
    {{--                    </div>--}}
    {{--                    <div class="col-6 text-start">--}}
    {{--                        <img class="img-fluid rounded rounded-3 w-75 wow zoomIn"--}}
    {{--                             alt="" src="{{ asset('frontend/img/about-2.jpg') }}" style="margin-top: 25%;">--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="col-lg-7">--}}
    {{--                <div class="faq-info wow fadeInUp">--}}
    {{--                    <div class="accordion" id="faq-details">--}}
    {{--                        @foreach ($faq_list as $faq)--}}
    {{--                            <div class="accordion-item">--}}
    {{--                                <h2 class="accordion-header" id="heading_{{ $faq->id }}">--}}
    {{--                                    <a href="javascript:void(0);" class="accordion-button collapsed"--}}
    {{--                                        data-bs-toggle="collapse" data-bs-target="#collapse_{{ $faq->id }}"--}}
    {{--                                        aria-expanded="false" aria-controls="collapse_{{ $faq->id }}">--}}
    {{--                                        {{ $faq->title }}--}}
    {{--                                    </a>--}}
    {{--                                </h2>--}}
    {{--                                <div id="collapse_{{ $faq->id }}" class="accordion-collapse collapse"--}}
    {{--                                    aria-labelledby="{{ $faq->id }}" data-bs-parent="#faq-details"--}}
    {{--                                    style="">--}}
    {{--                                    <div class="accordion-body">--}}
    {{--                                        <div class="accordion-content">--}}
    {{--                                            <p>--}}
    {{--                                                {{ $faq->description }}--}}
    {{--                                            </p>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        @endforeach--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    {{--</section>--}}
@endsection
