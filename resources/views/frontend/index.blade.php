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
                    margin-bottom: 0;
                }
            }

            @media (max-width: 576px) {
                .custom-col {
                    flex: 0 0 100%;
                    margin-bottom: 0;
                }
            }

            .trust-card {
                border-radius: 0.5rem;
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
            /* Default background for large screens */
            .main-bannerr-bg {
                background-image: url("{{ asset('frontend/image/bg-banner.jpg') }}");
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
                width: 100%;
                height: 90vh;
                position: relative;
            }

            /* Transparent white overlay */
            .overlay-white {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(255, 255, 255, 0.6); /* semi-transparent white */
                z-index: 1;
            }

            /* Ensure content is above the overlay */
            .hero-header .container-fluid {
                position: relative;
                z-index: 2;
            }

            /* Override background image on small screens */
            @media (max-width: 1024px) {
                .main-bannerr-bg {
                    background-image: url("{{ asset('frontend/image/mobile-banner.png') }}");
                    background-position: center center;
                    background-size: cover;
                    height: auto;
                }

                .overlay-white {
                    background-color: rgba(255, 255, 255, 0.4); /* lighter overlay for mobile if needed */
                }
            }


            @media (max-width: 768px) {
                .main-banner {
                    background-position: right center;
                    background-size: 200% auto;
                }
            }
            .slideInLeft {
                animation-name: slideInLeft;
            }
            .animated {
                animation-duration: 1s;
                animation-fill-mode: both;
            }
            .text-green{
                color: #197241;
            }
            .hero_title1 {
                font-size: 46px;
                font-weight: 500;
                line-height: 1.4;
                margin-top: 0;
                font-family: "Poppins", serif;
                color: #197241;
            }

            @media (max-width: 1024px) {
                .hero_title1 {
                    font-size: 32px;
                    color: #197241;
                }
            }
            @media (max-width: 768px) {
                .hero_title1 {
                    font-size: 24px;
                    color: #197241;
                }
            }
            .hero_subtitle {
                font-size: 16px;
                font-weight: 400;
                margin-bottom: 30px;
                color: #333;
            }
            @media (max-width: 768px) {
                .hero_subtitle {
                    color: #333;
                    margin-bottom: 5px;
                }
            }
            .main-bannerc {


                width: 100%;
                height: 90vh;            /* fix height */
                object-fit: cover;        /* image ko crop karke fit karega */
                object-position: center;  /* center align karega */
            }
            @media (max-width: 1024px) {
                .main-bannerc {
                   display: none;
                }
            }
            .hero-header img.main-bannerc {
                animation: none !important; /* is par disable */
            }

            .main-title{
                padding-left: 36px;
                color: #0e6006 !important;
            }
            @media (max-width: 768px) {
                .main-title{
                    padding-left: 8px;
                }
            }
            @media (max-width: 768px) {
            .button-width{
            width: 60%;
                 }
            }
            @media (max-width: 405px) {
                .button-width{
                    width: 75%;
                }
            }
            .button-bg{
                color: #197241;
                border-color: #197241;
                background-color: transparent;
            }
            .button-bg:hover{
                background-color: #197241;
                color: white;
                border-color: #197241;
            }

        </style>
    @endsection
    <section class="hero-header main-bannerr-bg position-relative">
        <div class="overlay-white"></div>
        {{--    style="background-image: url({{ asset('frontend/image/main-banner.jpg') }});--}}
        {{--        background-position: center center;--}}
        {{--        background-repeat: no-repeat;--}}
        {{--        background-size: cover;">--}}
        <div class="container-fluid position-relative">
            <div class="row align-items-center">

                <!-- Left Side (col-6) -->
                <div class="col-lg-6 col-md-6 col-sm-9 text-center text-lg-start main-title">
                    <h2 class="hero_title1 fw-bold animated slideInLeft">
                        {{ websiteSetupValue('title') }}
                    </h2>
                    <p class="hero_subtitle animated slideInLeft" >
                        {{ websiteSetupValue('description') }}
                    </p>
                    <div class="d-flex flex-column flex-md-row gap-3 md:mt-5 mt-2">
                        <button class="px-4 py-2 rounded-pill button-width border-0 subs_btn animated slideInLeft">
                            <a class="text-white fw-semibold" href="/food-pricing"> Get My Custom Meal Plan </a>
                        </button>
                        <button class="fw-bold px-4 py-2 button-width button-bg rounded-pill border-2 ">
                            <i class="fas fa-phone me-2 text-green fw-bold"></i> +91-7204490402
                        </button>
                    </div>
                    <div class="mt-4">
                        <p class="small mb-4 fw-bold fs-6 text-green">
                            <i class="fas fa-retweet me-1 text-green"></i> Free Delivery
                            <span class="mx-2">|</span>
                            <i class="fas fa-shield-alt me-1 text-green"></i> No Advance
                            <span class="mx-2">|</span>
                            <i class="fas fa-money-bill-wave me-1 text-green"></i> COD Available
                        </p>
                    </div>
                </div>

                <!-- Right Side (col-6) -->
                <div class="col-lg-6 d-flex p-0">
                    <img class="main-bannerc" src="{{ asset('frontend/image/main-banner.jpg') }}" alt="Banner">
                </div>


            </div>

        </div>



    </section>

    @include('frontend.partials.About-section')
    @include('frontend.partials.trusted-food')
    @include('frontend.partials.section-one')
    @include('frontend.partials.How-It-works')
    @include('frontend.partials.why-choose')
    @include('frontend.partials.Aday-at')
    @include('frontend.partials.meal-plans')

    @include('frontend.partials.how-work')
    @include('frontend.partials.Meet-Nutritionists')

    <section class="video_section" style="    min-height: 500px;">
        <div class="video_content">
            <button type="button" class="btn-play" data-bs-toggle="modal" data-src="{{ websiteSetupValue('video') }}"
                    data-bs-target="#videoModal">
                <span></span>
            </button>
            <h4 class="title">Watch How We Deliver Health to Your Doorstep</h4>
        </div>
    </section>


    @include('frontend.partials.pricing-plan')
    @include('frontend.partials.Blog-Section')
    @include('frontend.partials.testimonial-section')
    @include('frontend.partials.Eat-Healthy')
    @include('frontend.partials.faq-home')
    @include('frontend.partials.cta-section')
@endsection
