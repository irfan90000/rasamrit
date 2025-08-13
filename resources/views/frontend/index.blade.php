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
                <h2 class="hero_title fw-bold animated slideInLeft">
                    {{ websiteSetupValue('title') }}
                </h2>
{{--                <p class="hero_spantitle animated slideInLeft text-success">--}}
{{--                    <i>({{ websiteSetupValue('subtitle') }})</i>--}}
{{--                </p>--}}
                <p class="hero_subtitle animated slideInLeft">
                    {{ websiteSetupValue('description') }}
                </p>
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
{{--                <a href="{{ route('front.subscription') }}" type="button" class="subs_btn animated slideInLeft">--}}
{{--                    Start Food Subscripton <span><i class="fas fa-arrow-right"></i></span>--}}
{{--                </a>--}}
            </div>
        </div>
    </div>



</section>
@include('frontend.partials.section-one')
@include('frontend.partials.About-section')

@include('frontend.partials.why-choose')
@include('frontend.partials.meal-plans')
@include('frontend.partials.Meal-subscription')
@include('frontend.partials.how-work')
@include('frontend.partials.Meet-Nutritionists')

<section class="video_section">
    <div class="video_content">
        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="{{ websiteSetupValue('video') }}"
            data-bs-target="#videoModal">
            <span></span>
        </button>
        <h4 class="title">Watch How We Deliver Health to Your Doorstep</h4>
    </div>
</section>


@include('frontend.partials.pricing-plan')
@include('frontend.partials.faq')
@include('frontend.partials.cta-section')
@endsection
