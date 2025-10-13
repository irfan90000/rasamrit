@push('meta')
    <meta content="Rasamrit Virtual Meal Plans - Starting at Just ₹99">
    <meta name="description" content="Get expert online coaching for healthy meal planning from Rasamrit. Ideal for individuals who can't subscribe to meal delivery. Learn to prep balanced meals at home.">
@endpush
@extends('frontend.layout.app')
@section('content')

        @section('title', $page_title)
        @section('description', $description)
    @section('styles')
        <style>
            .main-online {
                background-image: url("{{ asset('frontend/image/main-online.jpg') }}");
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
                width: 100%;
                height: 90vh;
                position: relative;
            }

            @media (max-width: 1024px) {
                .main-online {
                    background-image: url("{{ asset('frontend/image/mobile-online.jpg') }}");
                    background-position: center center;
                    background-size: cover;
                    height: auto;
                }
            }
            @media (max-width: 768px) {
                .main-online {
                    background-position: right center;
                    background-size: 200% auto;
                }
            }
            .hero-header img.main-online{
                animation: none !important; /* is par disable */
            }
            .bg-baner-online{
                background-image: url("{{ asset('frontend/image/bg-banner.jpg') }}");
                height: auto;
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            .bg-baner-two{
                background-image: url("{{ asset('frontend/image/bg-banner.jpg') }}");
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
                width: 100%;
            }
            .main-for {
                background-image: url("{{ asset('frontend/image/online-for.png') }}");
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
                width: 100%;
                height: 80vh;
                position: relative;
            }

            @media (max-width: 768px) {
                .main-for {
                    height: auto;
                    background: none !important;  /* background remove ho jayega */
                }
            }

            .img-rasamrit{
                max-width: 90%;
            }

            .main-flexible{
                background-image: url("{{ asset('frontend/image/main-flexible.png') }}");
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
                width: 100%;
                height: 50vh;
                position: relative;
            }
            @media (max-width: 768px) {
                .main-flexible {
                   background-image: none;
                    height: auto;
                }
            }
            .hero-header img.main-for{
                animation: none !important; /* is par disable */
            }
            /* Transparent white overlay */
            .overlay-white {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 1;
            }
            /* Ensure content is above the overlay */
            .hero-header .container-fluid {
                position: relative;
                z-index: 2;
            }
            /* Override background image on small screens */
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
    <section class="hero-header main-online position-relative">
        <div class="overlay-white"></div>
        <div class="container-fluid position-relative">
            <div class="row align-items-center">
                <!-- Left Side (col-6) -->
                <div class="col-lg-6  text-center text-lg-start main-title">
                    <h1 class="hero_title1 fw-bold animated slideInLeft">
                       Online Coaching for Healthy Meal Planning
                    </h1>
                    <p class="hero_subtitle animated slideInLeft" >
                        Our online coaching helps you build the same nourishing
                        habits at home with expert-guided meal plans,
                        grocery tips, and nutrition education.
                    </p>
                </div>
                <!-- Right Side (col-6) -->
            </div>
        </div>
    </section>


    <section class="py-5 bg-baner-online">
        <div class="container">
            <div class="row align-items-center ">

                <!-- Left Content -->
                <div class="col-lg-4 text-center order-2 order-lg-1">
                    <div>
                    <img src="{{ asset('frontend/image/main-banner.jpg') }}"
                         alt="Rasamrit Online Coaching"
                         class="img-fluid img-rasamrit rounded-3 shadow-sm">
                    </div>
                </div>
                <div class="col-lg-8 order-1 order-lg-2">
                    <h2 class="fw-bold mb-4 text-success">What is Rasamrit’s Online Coaching?</h2>
                    <p class="text-dark">
                        Our online coaching program is designed for individuals who live outside our meal delivery service area
                        or prefer cooking their own meals. With expert advice from our in-house nutritionists, we’ll teach you how to:
                    </p>

                    <ul class="list-unstyled mt-4">
                        <li class="mb-3 d-flex align-items-start">
                            <i class="fas fa-check-circle text-success me-2 fs-5"></i>
                            <span><strong>Create balanced meal plans</strong> tailored to your goals</span>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <i class="fas fa-seedling text-success me-2 fs-5"></i>
                            <span><strong>Choose the right vegetables</strong>, proteins, and healthy fats</span>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <i class="fas fa-list-alt text-success me-2 fs-5"></i>
                            <span><strong>Follow weekly grocery lists</strong> and prep guides</span>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <i class="fas fa-apple-alt text-success me-2 fs-5"></i>
                            <span><strong>Understand your calorie</strong> and macronutrient needs</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>





    <section class="py-5 main-for">
        <div class="container">
            <div class="row align-items-center g-4">

                <!-- Left Content -->
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-3  text-green hero_title1">Who is This For?</h2>
                    <p class="text-black">This virtual coaching is perfect for:</p>
                    <ul class="list-unstyled mt-3">
                        <li class="mb-3 d-flex align-items-start">
                            <i class="fas fa-check-circle text-success me-2 fs-5"></i>
                            <span class="text-black">Students or professionals living away from Bangalore</span>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <i class="fas fa-check-circle text-success me-2 fs-5"></i>
                            <span class="text-black">People managing weight loss or medical diets on their own</span>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <i class="fas fa-check-circle text-success me-2 fs-5"></i>
                            <span class="text-black">Home cooks seeking structure in their daily meals</span>
                        </li>
                        <li class="mb-3 d-flex align-items-start">
                            <i class="fas fa-check-circle text-success me-2 fs-5"></i>
                            <span class="text-black">Families looking to eat clean and cook nutritious food at home</span>
                        </li>
                    </ul>


                </div>


                <div class="col-lg-6 text-center">

                </div>

            </div>
        </div>
    </section>


    <section class="py-5 " style="background-color: #197241">
        <div class="container">
            <div class="row g-4">

                <!-- Left Card -->
                <div class="col-md-6">
                    <div class="card shadow-lg rounded-4 h-100 border-0">
                        <div class="card-body p-4">
                            <h2 class="fw-bold mb-4 text-green">Why Choose Rasamrit for Meal Coaching?</h2>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-3">🌿 Rooted in traditional Indian food wisdom</li>
                                <li class="mb-3">👨‍⚕️ Backed by real nutritionists</li>
                                <li class="mb-3">🥬 Organic food-based planning</li>
                                <li class="mb-3">🛒 Easy-to-follow grocery brochures</li>
                                <li class="mb-3">🌍 Lifestyle-based, not one-size-fits-all</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Right Card -->
                <div class="col-md-6">
                    <div class="card shadow-lg rounded-4 h-100 border-0">
                        <div class="card-body p-4">
                            <h2 class="fw-bold mb-4 text-green">What You’ll Learn with Our Online Diet Coaching</h2>
                            <p>
                                We don’t just hand over a meal plan. We coach you to think nutritionally and eat mindfully. Our plan includes:
                            </p>
                            <ul class="list-unstyled mt-3">
                                <li class="mb-3">🍲 Customized Meal Plan Templates</li>
                                <li class="mb-3">🥦 Organic Food Selection Tips</li>
                                <li class="mb-3">⚖️ Portion Control Guidance</li>
                                <li class="mb-3">🥗 Meal Box or Prep Kit Recommendations</li>
                                <li class="mb-3">📊 Balanced Diet Chart Examples (Veg, Non-Veg, Egg)</li>
                                <li class="mb-3">🥩 Support for Keto, Low-Carb, and High-Protein Diets</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>



{{--      flexible support--}}

    <section class="md:py-5 py-2 bg-light">
        <div class="container">
            <div class="row align-items-center main-flexible">
                <!-- Left side: Content (4 columns) -->
                <div class="col-lg-4 d-flex flex-column justify-content-center">
                    <h2 class="fw-bold mb-4 text-green ">Flexible Support – Wherever You Are</h2>
                    <p class="text-dark fs-5 fw-bold ">
                        Whether you’re in Delhi, Dubai, or Dehradun, if you have a kitchen, we’ll guide you.
                        With our detailed PDFs, video calls, and weekly check-ins, you can replicate Rasamrit’s healthy lifestyle anywhere.
                    </p>
                </div>

                <!-- Right side: Image background (8 columns) -->
                <div class="col-lg-8 d-none d-lg-block bg-right"></div>
            </div>
        </div>
    </section>


{{--        <!-- Final CTA -->--}}
    @include('frontend.partials.testimonial-section')
    @include('frontend.partials.faq-home')
    @include('frontend.partials.cta-online')

@endsection

