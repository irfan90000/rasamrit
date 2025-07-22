@extends('frontend.layout.app')
@section('content')
@section('title', $page_title)
@section('description', $description)
<div class="breadchrumb">
    <div class="container-fluid">
        <h4 class="title">About Us</h4>
        <p class="sub-title">Transform Into the Best Version of Yourself!</p>
    </div>
</div>
<section class="section-padding bg-white">
    <div class="container">
        <div class="row gx-4 gy-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-3">
                    < class="col-6 text-start">
                        <img class="img-fluid rounded rounded-3 w-100 wow zoomIn"
                             alt="" src="{{ asset('frontend/img/about-1.jpg') }}" >
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded rounded-3 w-75 wow zoomIn"
                            src="{{ asset('frontend/img/about-2.jpg') }}"
                             alt=""
                             style="margin-top: 25%;">
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
            <div class="col-lg-6 ps-lg-5 wow fadeIn">
                <span class="badge_title">About Us</span>
                <h3 class="mb-3">Know About <mark class="highlight">{{ config('app.name') }}</mark></h3>
                <p class="mb-2">
                    At {{ config('app.name') }}, we believe that health is the greatest wealth. We’re here to simplify
                    your journey toward a healthier, more fulfilling lifestyle. Inspired by how celebrities transform
                    their health through personalized diet plans and expert guidance, {{ config('app.name') }} brings
                    the same level of
                    dedication and care to everyone.
                </p>
                <p class="mb-2">
                    We specialize in freshly prepared, diet-tailored meals, cold-pressed juices, exotic fruit bowls,
                    salads, and more, all delivered right to your doorstep. Our team of certified dieticians,
                    nutritionists, gym, and yoga trainers work tirelessly to ensure your health goals are met with ease
                    and precision.
                </p>
                <p class="mb-4">
                    Whether you aim to lose weight, detox, or simply adopt a healthier routine, {{ config('app.name') }}
                    is your one-stop solution for all health goals.
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
            </div>
            <div class="col-lg-12 text-center">
                <a href="{{ route('front.subscription') }}" type="button" class="subs_btn wow fadeInLeft">
                    Start Food Subscripton <span><i class="fas fa-arrow-right"></i></span>
                </a>
            </div>
            <div class="col-lg-6 wow fadeInLeft">
                <span class="badge_title mb-3">Our Vision & Mission</span>
                <p class="mb-3">
                    <b>To inspire a world where health and wellness are accessible, achievable, and sustainable for
                        everyone. At Rasamrit, we envision a healthier society where people take pride in their
                        well-being,
                        supported by our fresh, nutritious offerings and expert guidance.</b>
                </p>
                <p class="mb-2 text-success">
                    <b>Our mission is to:</b>
                </p>
                <ul>
                    <li class="text-justify">
                        Provide <b>tailored health solutions</b> by combining nutrition, fitness, and wellness services.
                    </li>
                    <li class="text-justify">
                        Deliver <b>fresh, wholesome meals</b> prepared daily, ensuring no preservatives, bulk storage,
                        or
                        compromise on quality.
                    </li>
                    <li class="text-justify">
                        Empower individuals to transform their health by offering <b>affordable, convenient, and
                            customizable</b> programs.
                    </li>
                    <li class="text-justify">
                        Make <b>health accessible</b> to all with a focus on excellent customer service and free
                        doorstep
                        delivery.
                    </li>
                </ul>
            </div>
            <div class="col-lg-6">
                <div class="row g-3">
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
            <div class="col-lg-12 text-center">
                <a href="{{ route('front.subscription') }}" type="button" class="subs_btn wow fadeInLeft">
                    Start Food Subscripton <span><i class="fas fa-arrow-right"></i></span>
                </a>
            </div>
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
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp">
                <span class="badge_title mb-3">Why Choose Us</span>
                <ul>
                    <li class="text-justify">
                        <b>Personalised Meal Plans:</b> Our team of nutritionists and health experts designs
                        personalised meal
                        plans based on your dietary preferences, nutritional needs, and health objectives.
                    </li>
                    <li class="text-justify">
                        <b>Delicious Meals Delivered:</b> Enjoy the convenience of having freshly prepared, nutritious
                        meals
                        delivered straight to your home or office. We take the hassle out of meal prep so you can focus
                        on
                        living your best life.
                    </li>
                    <li class="text-justify">
                        <b>Expert Gym Trainers:</b> Take advantage of our professional gym trainers who will come to
                        your doorstep.
                        Whether you're new to fitness or looking to level up your workouts, our trainers will create
                        personalised workout plans and provide guidance to help you achieve your fitness goals.
                    </li>
                    <li class="text-justify">
                        <b>Guaranteed Transformation:</b> We are confident in the effectiveness of our programs. If you
                        don't see
                        the promised transformation, we offer a money-back guarantee.
                    </li>
                    <li class="text-justify">
                        <b>Expert Guidance:</b> Receive ongoing support and guidance from our experienced wellness
                        coaches. We're
                        here to answer your questions, provide motivation, and ensure your success on your health
                        journey.
                    </li>
                </ul>
            </div>
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
