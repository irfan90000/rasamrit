@extends('frontend.layout.app')
@section('content')
    @section('title', $page_title)
    @section('description', $description)
    <div class="breadchrumb">
        <div class="container-fluid">
            <h1 class="title">About Us</h1>
            <p class="sub-title">Transform Into the Best Version of Yourself!</p>
        </div>
    </div>
    <section class="section-padding bg-white">
        <div class="container">
            <div class="row gx-4 gy-5 align-items-center">
                <div class="col-lg-6 order-2 order-lg-1">
                    <div class="row g-3">
                        <div class="col-6 text-start">
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
                <div class="col-lg-6 ps-lg-5 wow fadeIn order-1 order-lg-2">
                <span class="badge_title">About Us</span>
                <h2 class="mb-3">Know About <mark class="highlight">{{ config('app.name') }}</mark></h2>
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
                            <p class="flex-shrink-0 text-primary mb-0" data-toggle="counter-up">15</p>
                            <div class="ps-4">
                                <p class="mb-0">Years of</p>
                                <p class="text-uppercase mb-0">Experience</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="d-flex align-items-center border-start border-3 border-primary px-3">
                            <p class="flex-shrink-0 text-primary mb-0" data-toggle="counter-up">50</p>
                            <div class="ps-4">
                                <p class="mb-0">Popular</p>
                                <p class="text-uppercase mb-0">Food Options</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>
            <div class="col-lg-12 text-center my-3">
                <a href="{{ route('front.subscription') }}" type="button" class="subs_btn wow fadeInLeft">
                    Start Food Subscripton <span><i class="fas fa-arrow-right"></i></span>
                </a>
            </div>
        @include('frontend.partials.why-choose')

        @include('frontend.partials.faq')
    </section>

@endsection
