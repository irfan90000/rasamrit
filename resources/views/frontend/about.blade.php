@extends('frontend.layout.app')
@section('content')
@section('title', $page_title)
@section('description', $description)

<style>

    .card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 24px rgba(0, 0, 0, 0.08);
        transition: 0.3s ease-in-out;
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
    .slideInLeft {
        animation-name: slideInLeft;
    }
    .animated {
        animation-duration: 1s;
        animation-fill-mode: both;
    }
    .title-pricing {
        font-size: 32px;
        font-weight: 500;
        line-height: 1.4;

        font-family: "Poppins", serif;
        color: #333;
        margin-top: 80px;

    }

    @media (max-width: 768px) {
        .title-pricing {
            font-size: 22px;

            margin-top: 4px;
        }
    }
    .sub-title1 {
        font-size: 16px;
        font-weight: 400;
        margin-bottom: 30px;
        color: #333;
        text-align: center;
    }

    @media (max-width: 768px) {
        .sub-title1 {

        }
    }
</style>

<div class="breadchrumb" style="height: 50vh; ">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center">
                <h1 class="title-pricing text-center fw-bold slideInLeft animated">Online Coaching for Healthy Meal Planning</h1>
                <p class="sub-title1 mt-1">Our online coaching helps you build the same nourishing habits at home
                    with expert-guided meal plans, grocery tips, and nutrition education.</p>
            </div>
        </div>
    </div>

</div>
<section class="section-padding bg-white">
    <div class="container">
        <section>
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
                    </div>

                    <div class="col-lg-6 ps-lg-5">
                        <span class="badge_title">About Rasamrit:</span>
                        <h2 class="mb-3  text-black">Know About <span class="mb-3 fw-semibold text-success"> Rasamrit</span></h2>
                        <p class="mb-2">
                            We are not a food factory. We are your partner in wellness.
                        </p>
                        <p class="mb-2">
                            At Rasamrit, we believe that health is the greatest wealth.
                            We’re here to simplify your journey toward a healthier,
                            more fulfilling lifestyle. Inspired by how celebrities transform
                            their health through personalized diet plans and expert guidance,
                            Rasamrit brings the same level of dedication and care to everyone.




                        </p>


                        <p class="mb-2">
                            We specialize in freshly prepared, diet-tailored meals, cold-pressed juices, exotic fruit bowls,
                            salads, and more, all delivered right to your doorstep. Our team of certified dieticians, nutritionists, gym,
                            and yoga trainers work tirelessly to ensure your health goals are met with ease and precision.
                        </p>

                        <p class="mb-2">
                            Whether you aim to lose weight, detox, or simply adopt a healthier routine,
                            Rasamrit is your one-stop solution for all health goals.
                        </p>

                        {{--                <p class="mb-4">--}}
                        {{--                    Every meal is freshly cooked with premium ingredients, backed by expert guidance,--}}
                        {{--                    and built around your specific health goals,--}}
                        {{--                    whether it’s weight loss, muscle gain, or simply eating clean.--}}
                        {{--                </p>--}}
                        {{--                <p class="mb-4">--}}
                        {{--                    We’re not here to sell food. We’re here to deliver results.--}}
                        {{--                    With 5,000+ happy customers, an in-house team of nutritionists,--}}
                        {{--                    and the city’s most diverse 28-day rotating meal plan, Rasamrit is Bangalore’s trusted healthy--}}
                        {{--                    food delivery service and the perfect Food Darzee alternative that doesn’t break the bank.--}}
                        {{--                </p>--}}
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-3 border-primary px-3">
                                    <h2 class="flex-shrink-0 text-primary mb-0" data-toggle="counter-up">5</h2>
                                    <div class="ps-4">
                                        <p class="mb-0">Years of</p>
                                        <h6 class="text-uppercase mb-0">Experience</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-3 border-primary px-3">
                                    <h2 class="flex-shrink-0 text-primary mb-0" data-toggle="counter-up">500</h2>
                                    <div class="ps-4">
                                        <p class="mb-0">Popular</p>
                                        <h6 class="text-uppercase mb-0">Food Options</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--                <a href="{{ route('front.about') }}" type="button" class="subs_btn animated slideInLeft ">--}}
                        {{--                    Know More About Us <span><i class="fas fa-arrow-right"></i></span>--}}
                        {{--                </a>--}}
                        <button
                                class="fw-semibold px-4 py-2 rounded-pill border-0 subs_btn animated slideInLeft"

                        >
                            <a class="fw-semibold text-white" href="{{ route('front.about') }}">
                                Know More About Us <span><i class="fas fa-arrow-right"></i></span> </a>
                        </button>
                    </div>
                </div>
            </div>

        </section>
{{--            <div class="col-lg-6 ps-lg-5 wow fadeIn">--}}
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
{{--                    Whether you aim to lose weight, detox, or simply adopt a healthier routine, {{ config('app.name') }}--}}
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
{{--            </div>--}}
{{--            <div class="col-lg-12 text-center">--}}
{{--                <a href="{{ route('front.subscription') }}" type="button" class="subs_btn wow fadeInLeft">--}}
{{--                    Start Food Subscripton <span><i class="fas fa-arrow-right"></i></span>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6 wow fadeInLeft">--}}
{{--                <span class="badge_title mb-3">Our Vision & Mission</span>--}}
{{--                <p class="mb-3">--}}
{{--                    <b>To inspire a world where health and wellness are accessible, achievable, and sustainable for--}}
{{--                        everyone. At Rasamrit, we envision a healthier society where people take pride in their--}}
{{--                        well-being,--}}
{{--                        supported by our fresh, nutritious offerings and expert guidance.</b>--}}
{{--                </p>--}}
{{--                <p class="mb-2 text-success">--}}
{{--                    <b>Our mission is to:</b>--}}
{{--                </p>--}}
{{--                <ul>--}}
{{--                    <li class="text-justify">--}}
{{--                        Provide <b>tailored health solutions</b> by combining nutrition, fitness, and wellness services.--}}
{{--                    </li>--}}
{{--                    <li class="text-justify">--}}
{{--                        Deliver <b>fresh, wholesome meals</b> prepared daily, ensuring no preservatives, bulk storage,--}}
{{--                        or--}}
{{--                        compromise on quality.--}}
{{--                    </li>--}}
{{--                    <li class="text-justify">--}}
{{--                        Empower individuals to transform their health by offering <b>affordable, convenient, and--}}
{{--                            customizable</b> programs.--}}
{{--                    </li>--}}
{{--                    <li class="text-justify">--}}
{{--                        Make <b>health accessible</b> to all with a focus on excellent customer service and free--}}
{{--                        doorstep--}}
{{--                        delivery.--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6">--}}
{{--                <div class="row g-3">--}}
{{--                    <div class="col-6 text-end">--}}
{{--                        <img class="img-fluid rounded rounded-3 w-75 wow zoomIn"--}}
{{--                             alt="" src="{{ asset('frontend/img/about-3.jpg') }}">--}}
{{--                    </div>--}}
{{--                    <div class="col-6 text-end">--}}
{{--                        <img class="img-fluid rounded rounded-3 w-100 wow zoomIn"--}}
{{--                             alt="" src="{{ asset('frontend/img/about-4.jpg') }}">--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-12 text-center">--}}
{{--                <a href="{{ route('front.subscription') }}" type="button" class="subs_btn wow fadeInLeft">--}}
{{--                    Start Food Subscripton <span><i class="fas fa-arrow-right"></i></span>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6">--}}
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
{{--            <div class="col-lg-6 wow fadeInUp">--}}
{{--                <span class="badge_title mb-3">Why Choose Us</span>--}}
{{--                <ul>--}}
{{--                    <li class="text-justify">--}}
{{--                        <b>Personalised Meal Plans:</b> Our team of nutritionists and health experts designs--}}
{{--                        personalised meal--}}
{{--                        plans based on your dietary preferences, nutritional needs, and health objectives.--}}
{{--                    </li>--}}
{{--                    <li class="text-justify">--}}
{{--                        <b>Delicious Meals Delivered:</b> Enjoy the convenience of having freshly prepared, nutritious--}}
{{--                        meals--}}
{{--                        delivered straight to your home or office. We take the hassle out of meal prep so you can focus--}}
{{--                        on--}}
{{--                        living your best life.--}}
{{--                    </li>--}}
{{--                    <li class="text-justify">--}}
{{--                        <b>Expert Gym Trainers:</b> Take advantage of our professional gym trainers who will come to--}}
{{--                        your doorstep.--}}
{{--                        Whether you're new to fitness or looking to level up your workouts, our trainers will create--}}
{{--                        personalised workout plans and provide guidance to help you achieve your fitness goals.--}}
{{--                    </li>--}}
{{--                    <li class="text-justify">--}}
{{--                        <b>Guaranteed Transformation:</b> We are confident in the effectiveness of our programs. If you--}}
{{--                        don't see--}}
{{--                        the promised transformation, we offer a money-back guarantee.--}}
{{--                    </li>--}}
{{--                    <li class="text-justify">--}}
{{--                        <b>Expert Guidance:</b> Receive ongoing support and guidance from our experienced wellness--}}
{{--                        coaches. We're--}}
{{--                        here to answer your questions, provide motivation, and ensure your success on your health--}}
{{--                        journey.--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </div>--}}

           @include('frontend.partials.why-choose')

            <div class="col-lg-12">
                <div class="text-center wow fadeInUp">
                    <h1 class="section-intro-title">#FAQ's</h1>
                    <h5 class="section-title mb-2">Got Questions? We Have the Answers</h5>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="faq-info wow fadeInUp">
                    <div class="accordion" id="faq-details">
                        @foreach ($faq_list as $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading_{{ $faq->id }}">
                                    <a href="javascript:void(0);" class="accordion-button collapsed"
                                        data-bs-toggle="collapse" data-bs-target="#collapse_{{ $faq->id }}"
                                        aria-expanded="false" aria-controls="collapse_{{ $faq->id }}">
                                        {{ $faq->title }}
                                    </a>
                                </h2>
                                <div id="collapse_{{ $faq->id }}" class="accordion-collapse collapse"
                                    aria-labelledby="{{ $faq->id }}" data-bs-parent="#faq-details"
                                    style="">
                                    <div class="accordion-body">
                                        <div class="accordion-content">
                                            <p>
                                                {{ $faq->description }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
{{--    </div>--}}
</section>

@endsection
