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
            margin-top: 100px;
        }

        @media (max-width: 768px) {
            .title-pricing {
                font-size: 22px;
                color: #333;
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
                color: #333;
            }
        }
    </style>


    <div class="breadchrumb" style="height: 50vh;">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 text-center">
                    <h1 class="title-pricing text-center fw-bold animated slideInLeft">Healthy Food Online – Weekly Meal Menu by Rasamrit</h1>
                    <p class="sub-title1 mt-1">
                        Discover Rasamrit's freshly curated healthy food Bangalore online menu with meals crafted for every lifestyle,
                        from vegetarian comfort to low-carb and ketogenic meal boxes.</p>
                </div>
            </div>
        </div>
        {{--    <div class="container-fluid">--}}
        {{--        <h1 class="text-success text-center fw-bold">Healthy Food Online – Weekly Meal Menu by Rasamrit</h1>--}}
        {{--        <p class="text-center text-dark">--}}
        {{--            Discover Rasamrit's freshly curated healthy food Bangalore online menu with meals crafted for every lifestyle,--}}
        {{--            from vegetarian comfort to low-carb and ketogenic meal boxes.</p>--}}
        {{--    </div>--}}
    </div>

    <section class="section-padding1 bg-white">
        <div class="container">
            <h6 class="text-center text-dark m-0 pt-lg-5 pt-3 pb-3">
                NOTE: This is just a 7 days sample menu, your menu will be totally customised
                from over 250+ options. <br>To check our complete diet plan
                <a href="{{route('front.allmenu')}}" class="text-info">Click Here</a>
            </h6>
            @foreach ($diet_list as $key => $diet)
                @if ($diet->getFood->count() > 0)
                    <div class="food_menu_area">
                        <div class="text-center wow fadeInUp">
                            <h1 class="into-title mb-2 text-success">#{{ $diet->name }} </h1>
                            <p class="text-dark text-center">{{ $diet->fooddescription }}</p>
                        </div>
                        @foreach ($diet->getFood as $food)
                            <div class="text-center wow fadeInUp">

                                <h4 class="intro_subtitle mb-2">
                                    {{ match ($food->dietary) {
                                        'vegetarian' => 'Veg Food',
                                        'nonvegetarian' => 'Nonveg Food',
                                        default => 'Egg Food',
                                    } }}
                                </h4>
                                <p class="text-dark mt-0 text-center">{{ $diet->dietdescription }}</p>
                            </div>
                            <div class="tab-class text-center wow fadeInUp">
                                <ul class="nav nav-pills food_menu">
                                    @for ($i = 1; $i <= 7; $i++)
                                        <li class="nav-item">
                                            <a class="{{ $i == 1 ? 'active' : '' }}" data-bs-toggle="pill"
                                               href="#{{ getDay($i) }}{{ $food->dietary }}{{ $key }}">
                                                <h6 class="day">
                                                    <i class="fas fa-utensils"></i>
                                                    <span>{{ getDay($i) }}</span>
                                                </h6>
                                            </a>
                                        </li>
                                    @endfor
                                </ul>

                                <div class="tab-content">
                                    @for ($i = 1; $i <= 7; $i++)
                                        <div id="{{ getDay($i) }}{{ $food->dietary }}{{ $key }}"
                                             class="tab-pane fade show p-0 {{ $i == 1 ? 'active' : '' }}">
                                            <div class="row g-3">
                                                <div class="col-lg-3 col-6">
                                                    <h6 class="type">Breakfast</h6>
                                                    <div class="menu_item_card">
                                                        <div class="menu_item_inner">
                                                            <div class="menu_item">
                                                                <img class="img-fluid"
                                                                     src="{{ match ($food->dietary) {
                                                                    'vegetarian' => asset('frontend/img/veg.jpg'),
                                                                    'nonvegetarian' => asset('frontend/img/nonveg.jpg'),
                                                                    default => asset('frontend/img/egg.jpg'),
                                                                } }}"
                                                                     alt="">
                                                                <h6 class="food">
                                                                    {{ $food->menu['breakfast'][$i]['name'] }}
                                                                </h6>
                                                            </div>
                                                            <div class="menu_desc">
                                                                <p>
                                                                    {{ $food->menu['breakfast'][$i]['description'] }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6">
                                                    <h6 class="type">Lunch</h6>
                                                    <div class="menu_item_card">
                                                        <div class="menu_item_inner">
                                                            <div class="menu_item">
                                                                <img class="img-fluid"
                                                                     src="{{ match ($food->dietary) {
                                                                    'vegetarian' => asset('frontend/img/veg.jpg'),
                                                                    'nonvegetarian' => asset('frontend/img/nonveg.jpg'),
                                                                    default => asset('frontend/img/egg.jpg'),
                                                                } }}"
                                                                     alt="">
                                                                <h6 class="food">{{ $food->menu['lunch'][$i]['name'] }}
                                                                </h6>
                                                            </div>
                                                            <div class="menu_desc">
                                                                <p>
                                                                    {{ $food->menu['lunch'][$i]['description'] }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6">
                                                    <h6 class="type">Evening Snack</h6>
                                                    <div class="menu_item_card">
                                                        <div class="menu_item_inner">
                                                            <div class="menu_item">
                                                                <img class="img-fluid"
                                                                     src="{{ match ($food->dietary) {
                                                                    'vegetarian' => asset('frontend/img/veg.jpg'),
                                                                    'nonvegetarian' => asset('frontend/img/nonveg.jpg'),
                                                                    default => asset('frontend/img/egg.jpg'),
                                                                } }}"
                                                                     alt="">
                                                                <h6 class="food">{{ $food->menu['snack'][$i]['name'] }}
                                                                </h6>
                                                            </div>
                                                            <div class="menu_desc">
                                                                <p>
                                                                    {{ $food->menu['snack'][$i]['description'] }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-6">
                                                    <h6 class="type">Dinner</h6>
                                                    <div class="menu_item_card">
                                                        <div class="menu_item_inner">
                                                            <div class="menu_item">
                                                                <img class="img-fluid"
                                                                     src="{{ match ($food->dietary) {
                                                                    'vegetarian' => asset('frontend/img/veg.jpg'),
                                                                    'nonvegetarian' => asset('frontend/img/nonveg.jpg'),
                                                                    default => asset('frontend/img/egg.jpg'),
                                                                } }}"
                                                                     alt="">
                                                                <h6 class="food">{{ $food->menu['dinner'][$i]['name'] }}
                                                                </h6>
                                                            </div>
                                                            <div class="menu_desc">
                                                                <p>
                                                                    {{ $food->menu['dinner'][$i]['description'] }}
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            @endforeach
        </div>
    </section>
    <div class="row g-4 align-items-center mt-2">
        <h2 class="text-center text-success fw-bold">Delivery Areas in Bangalore</h2>
        <p class="mt-0 text-center">We currently deliver across major areas in Bengaluru, including Koramangala,
            Whitefield, Indiranagar, HSR Layout, Jayanagar, and more.</p>
        <h6 class="mt-0 text-center text-danger fw-bold">
            Do we serve your area? Contact us or WhatsApp us to confirm delivery availability.
        </h6>

    </div>
    @include('frontend.partials.Delivery-area')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-start g-5">

                <!-- Left Column -->



                <div class="col-lg-7">
                    <!-- First Heading -->
                    <h2 class="text-2xl fw-bold text-success mb-3">
                        Why Choose Rasamrit for Healthy Food Online?
                    </h2>
                    <p class="text-dark mb-4">
                        We combine the comfort of homemade meals with the science of nutrition, offering Bangalore’s most trusted healthy food delivery service.
                        All meals are made from fresh organic ingredients, delivered on time, and suited for weight management or daily nourishment.
                    </p>

                    <!-- Second Heading -->
                    <h2 class="text-2xl fw-bold text-success mb-3">
                        Looking for Healthy Food in Bangalore Online Near You?
                    </h2>
                    <p class="text-dark">
                        Explore Rasamrit’s wide range of meal kits, brochures, and packages tailored for every preference –
                        from diet food home delivery near me to organic food service in Bangalore.
                        <br><br>
                        Order your healthy food online from Rasamrit now and enjoy weekly meal prep with organic vegetables,
                        delicious boxes, and doorstep delivery in Bangalore. Starting at just ₹70/day.
                    </p>
                </div>

                <!-- Right Column -->

                <div class="col-lg-5">
                    <h2 class="text-2xl fw-bold text-success mb-4 text-center text-lg-start">
                        Why Customers Love Our Food Menu
                    </h2>
                    <ul class="list-disc list-inside text-dark text-left">
                        <li>Meals change every day (no repeats in a week)</li>
                        <li>Hygienically prepared with love</li>
                        <li>Nutritionist-designed for your health goals</li>
                        <li>Suitable for office-goers, students, and fitness lovers</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    @include('frontend.partials.faq')
    @include('frontend.partials.cta-section')


@endsection