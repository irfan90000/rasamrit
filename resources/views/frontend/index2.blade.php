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
    style="background-image: url({{ asset('storage/website_setup/Main-banner1.jpg') }});
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 text-center text-lg-start">
                <p class="mb-4 fw-bold text-success">
                    <span class="me-2" style="color: #198754;">&#9679;</span>
                    Bangalore's <strong>Best Prepared</strong> Meal Delivery Service.
                </p>

                <h2 class="hero_title text-success fw-bold  animated slideInLeft">
                    Healthy & Homemade
                </h2>
                <p class="hero_spantitle animated slideInLeft text-success mb-2">
                    Nutritious, calorie-counted, home-made cooked meals for weight loss and gym recovery. Fresh
                    and healthy food delivery daily to your doorstep.
                </p>
{{--                <p class="hero_subtitle animated slideInLeft">--}}
{{--                    {{ websiteSetupValue('description') }}--}}
{{--                </p>--}}



                <div class="d-flex flex-column flex-md-row gap-3 mt-5">

                    <!-- Orange Button -->
                    <button
                            class="text-white fw-semibold px-4 py-2 rounded-pill border-0"
                            style="background-color: #FA724C;"
                    >
                        Get My Custom Meal Plan
                    </button>

                    <!-- Yellow Button -->
                    <button
                            class="fw-semibold px-4 py-2 rounded-pill border-0"
                            style="background-color: #F2C94C; color: #1A7A29;"
                    >
                        Explore Food Subscriptions
                    </button>

                </div>


            </div>
        </div>
    </div>



</section>


<section>
<div class="py-5 text-white" style="background-color: #198754;">
    <div class="container">
        <div class="row text-center g-0">
            <!-- Box 1 -->
            <div class="col-md-3 border-end border-white">
                <div class="d-flex flex-column align-items-center">
                    <i class="fas fa-home fs-1 mb-3"></i>
                </div>
            </div>

            <!-- Box 2 -->
            <div class="col-md-3 border-end border-white">
                <div class="d-flex flex-column align-items-center">
                    <i class="fas fa-comments fs-1 mb-3"></i>
                </div>
            </div>

            <!-- Box 3 -->
            <div class="col-md-3 border-end border-white">
                <div class="d-flex flex-column align-items-center">
                    <i class="fas fa-utensils fs-1 mb-3"></i>
                </div>
            </div>

            <!-- Box 4 -->
            <div class="col-md-3">
                <div class="d-flex flex-column align-items-center">
                    <i class="fas fa-weight fs-1 mb-3"></i>
                </div>
            </div>
        </div>
    </div>
</div>
</section>


{{--     about section--}}

<section class="section-padding bg-white">
    <div class="container">
        <div class="row gx-4 gy-5 align-items-center">


            <div class="col-lg-6">
                <div class="overflow-hidden rounded-3 position-relative" style="height: 80vh;">
                    <img
                            src="{{ asset('storage/website_setup/Main-banner14.jpg') }}"
                            alt="About Rasamrit"
                            class="position-absolute top-0 start-50 translate-middle-x h-100"
                            style="width: 200%; object-fit: cover;"
                    >
                </div>
            </div>





            <div class="col-lg-6 ps-lg-5 pe-lg-5">


                <span class="text-success fw-bold">• About Rasamrit</span>

                <h2 class="mb-3 fw-bold text-success ">A Trusted Food Darzee Alternative That’s Affordable for Everyone</h2>
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
{{--                <p class="mb-4">--}}
{{--                    We’re not here to sell food. We’re here to deliver results.--}}
{{--                    With 5,000+ happy customers, an in-house team of nutritionists,--}}
{{--                    and the city’s most diverse 28-day rotating meal plan, Rasamrit is Bangalore’s trusted healthy--}}
{{--                    food delivery service and the perfect Food Darzee alternative that doesn’t break the bank.--}}
{{--                </p>--}}
                <div class="">

                    <h6 class="text-success mb-1">• We are not a food factory.</h6>
                    <h6 class="text-success">• We are your partner in wellness.</h6>

                </div>
                <div class="mt-5">
                <button
                        class="text-white fw-semibold px-4 py-2 rounded-pill border-0"
                        style="background-color: #FA724C;"
                >
                    Get My Custom Meal Plan
                </button>
                </div>
            </div>
        </div>
    </div>
</section>

{{--   end  about section--}}


@include('frontend.partials.three-section')




@include('frontend.partials.why-choose')
{{--@include('frontend.partials.meal-plans')--}}
{{--@include('frontend.partials.how-work')--}}



<section class="bg-success py-5 text-center text-white">
    <div class="container">
        <h2 class="fw-bold text-white mb-5">Our Meal Plans</h2>

        <div id="mealPlanCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">

                <!-- Slide 1 -->
                <div class="carousel-item active">
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-3">
                            <div class="position-relative rounded-4 overflow-hidden">

                                <img src="{{ asset('storage/website_setup/Main-banner9.jpg') }}" class="img-fluid w-100" alt="">

                                <!-- Smooth fading black gradient at bottom -->
                                <div class="position-absolute bottom-0 start-0 w-100 px-3 py-2 text-warning d-flex justify-content-between align-items-end"
                                     style="
                                      background: linear-gradient(to top, rgba(0, 0, 0, 20.85), rgba(0, 0, 0, 0));
                                      height: 75%;
                                    ">
                                    <span class="fw-semibold">View All</span>
                                    <span class="fs-5">&rarr;</span>
                                </div>


                            </div>

                            <p class="mt-2 fw-medium">Weight Loss Plan</p>


                        </div>

                        <div class="col-md-3">
                            <div class="position-relative rounded-4 overflow-hidden">
                                <img  src="{{ asset('storage/website_setup/Main-banner9.jpg') }}" class="img-fluid w-100" alt="">
                                <div class="position-absolute bottom-0 start-0 w-100 px-3 py-2 text-warning d-flex justify-content-between align-items-end"
                                     style="
                                     background: linear-gradient(to top, rgba(0, 0, 0, 20.85), rgba(0, 0, 0, 0));
                                      height: 75%;
                                    ">
                                    <span class="fw-semibold">View All</span>
                                    <span class="fs-5">&rarr;</span>
                                </div>

                            </div>
                            <p class="mt-2 fw-medium">Muscle Gain Plan</p>
                        </div>

                        <div class="col-md-3">
                            <div class="position-relative rounded-4 overflow-hidden">
                                <img  src="{{ asset('storage/website_setup/Main-banner10.jpg') }}" class="img-fluid w-100" alt="">
                                <div class="position-absolute bottom-0 start-0 w-100 px-3 py-2 text-warning d-flex justify-content-between align-items-end"
                                     style="
                                       background: linear-gradient(to top, rgba(0, 0, 0, 20.85), rgba(0, 0, 0, 0));
                                      height: 75%;
                                    ">
                                    <span class="fw-semibold">View All</span>
                                    <span class="fs-5">&rarr;</span>
                                </div>

                            </div>
                            <p class="mt-2 fw-medium">Diabetic/Low GI Plan</p>
                        </div>

                        <div class="col-md-3">
                            <div class="position-relative rounded-4 overflow-hidden">
                                <img  src="{{ asset('storage/website_setup/Main-banner13.jpg') }}" class="img-fluid w-100" alt="">
                                <div class="position-absolute bottom-0 start-0 w-100 px-3 py-2 text-warning d-flex justify-content-between align-items-end"
                                     style="
                                       background: linear-gradient(to top, rgba(0, 0, 0, 20.85), rgba(0, 0, 0, 0));
                                      height: 75%;
                                    ">
                                    <span class="fw-semibold">View All</span>
                                    <span class="fs-5">&rarr;</span>
                                </div>

                            </div>
                            <p class="mt-2 fw-medium">Office Plan</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item">
                    <div class="row g-4 justify-content-center">
                        <div class="col-md-3">
                            <div class="position-relative rounded-4 overflow-hidden">
                                <img  src="{{ asset('storage/website_setup/Main-banner10.jpg') }}" class="img-fluid w-100" alt="">
                                <div class="position-absolute bottom-0 start-0 w-100 px-3 py-2 text-warning d-flex justify-content-between align-items-end"
                                     style="
                                       background: linear-gradient(to top, rgba(0, 0, 0, 20.85), rgba(0, 0, 0, 0));
                                      height: 75%;
                                    ">
                                    <span class="fw-semibold">View All</span>
                                    <span class="fs-5">&rarr;</span>
                                </div>

                            </div>
                            <p class="mt-2 fw-medium">Keto Plan</p>
                        </div>

                        <div class="col-md-3">
                            <div class="position-relative rounded-4 overflow-hidden">
                                <img  src="{{ asset('storage/website_setup/Main-banner13.jpg') }}" class="img-fluid w-100" alt="">
                                <div class="position-absolute bottom-0 start-0 w-100 px-3 py-2 text-warning d-flex justify-content-between align-items-end"
                                     style="
                                      background: linear-gradient(to top, rgba(0, 0, 0, 20.85), rgba(0, 0, 0, 0));
                                      height: 75%;
                                    ">
                                    <span class="fw-semibold">View All</span>
                                    <span class="fs-5">&rarr;</span>
                                </div>

                            </div>
                            <p class="mt-2 fw-medium">Family Plan</p>
                        </div>

                        <div class="col-md-3">
                            <div class="position-relative rounded-4 overflow-hidden">
                                <img  src="{{ asset('storage/website_setup/Main-banner10.jpg') }}" class="img-fluid w-100" alt="">
                                <div class="position-absolute bottom-0 start-0 w-100 px-3 py-2 text-warning d-flex justify-content-between align-items-end"
                                     style="
                                      background: linear-gradient(to top, rgba(0, 0, 0, 20.85), rgba(0, 0, 0, 0));
                                      height: 75%;
                                    ">
                                    <span class="fw-semibold">View All</span>
                                    <span class="fs-5">&rarr;</span>
                                </div>

                            </div>
                            <p class="mt-2 fw-medium">Vegan Plan</p>
                        </div>

                        <div class="col-md-3">
                            <div class="position-relative rounded-4 overflow-hidden">
                                <img  src="{{ asset('storage/website_setup/Main-banner9.jpg') }}" class="img-fluid w-100" alt="">
                                <div class="position-absolute bottom-0 start-0 w-100 px-3 py-2 text-warning d-flex justify-content-between align-items-end"
                                     style="
                                      background: linear-gradient(to top, rgba(0, 0, 0, 20.85), rgba(0, 0, 0, 0));
                                      height: 75%;
                                    ">
                                    <span class="fw-semibold">View All</span>
                                    <span class="fs-5">&rarr;</span>
                                </div>

                            </div>
                            <p class="mt-2 fw-medium">Student Plan</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>


@include('frontend.partials.Our-reviews')

<div class="container my-5">
    <div class="row  text-white rounded-4 p-4 align-items-center" style="background-color: #065f46;
    border-radius: 2.5rem;">

        <!-- 🖼 Left Image - 7 Columns -->
        <div class="col-lg-7 mb-4 mb-lg-0 " style="max-height: 400px;  overflow: hidden;">
            <img src="{{ asset('storage/website_setup/Main-banner-15.jpg') }}"
                 alt="Nutritionist" class="img-fluid rounded-4 w-100 h-100 object-fit-cover"
            style="border-radius: 1.5rem;">
        </div>


        <!-- ✍️ Right Content - 5 Columns -->
        <div class="col-lg-5">
            <p class="text-white mb-1 fw-bold">• Meet Your Nutritionists & Trainers</p>

            <h2 class="text-warning fw-bold lh-base mb-3">
                Work 1:1 with our <br>
                in-house nutritionists <br>
                and fitness trainers.
            </h2>

            <p class="text-white-50 mb-4">
                Work 1:1 with our in-house nutritionists and fitness trainers.
            </p>

            <div class="d-flex align-items-center gap-2">
                <a href="#" class="btn fw-bold rounded-pill px-4 py-2" style="background-color: #F2C94C; color: #1A7A29;">
                    Book Your Appointment
                </a>
                <span class="d-inline-flex align-items-center justify-content-center rounded-circle bg-danger text-white" style="width: 40px; height: 40px;">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6.364 13.364a.5.5 0 0 0 .707 0L13 7.435V11.5a.5.5 0 0 0 1 0v-6a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.065l-5.93 5.929a.5.5 0 0 0 0 .707z"/>
          </svg>
        </span>
            </div>
        </div>

    </div>
</div>



@include('frontend.partials.faq')


<section style="background-color: #198754; height: 250px; width: 100%;">
    <div class="container h-100 d-flex align-items-center justify-content-center">

    </div>
</section>


@endsection
