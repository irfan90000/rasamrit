{{--<section style="background-color: #f2c94c">--}}
{{--<div class="container py-5 ">--}}
{{--    <h2 class="text-center mb-4 fw-bold text-success">Why Trust Us?</h2>--}}

{{--    @php--}}
{{--        $trustElements = [--}}
{{--            [--}}
{{--                'image' => asset('frontend/img/food-delivery.png'),--}}
{{--                'title' => '100% Homemade Food Delivery',--}}
{{--            ],--}}
{{--            [--}}
{{--                'image' => asset('frontend/img/Nosalt.jpg'),--}}
{{--                'title' => 'Zero White Sugar, Salt, or Refined Oils',--}}
{{--            ],--}}
{{--            [--}}
{{--                'image' => asset('frontend/img/frshcook.jpeg'),--}}
{{--                'title' => 'Freshly Cooked Per Order',--}}
{{--            ],--}}
{{--            [--}}
{{--                'image' => asset('frontend/img/free-plastic.jpeg'),--}}
{{--                'title' => 'Plastic-Free Packaging',--}}
{{--            ],--}}
{{--            [--}}
{{--                'image' => asset('frontend/img/weight-loss-meal.jpeg'),--}}
{{--                'title' => 'Guaranteed Weight Loss Meal Subscription',--}}
{{--            ],--}}
{{--        ];--}}
{{--    @endphp--}}

{{--    <div class="row justify-content-center g-4 custom-five-cols">--}}
{{--        @foreach ($trustElements as $element)--}}
{{--            <div class="custom-col">--}}
{{--                <div class="card trust-card h-100 border border-gray shadow-sm">--}}
{{--                    <img src="{{ $element['image'] }}" alt="{{ $element['title'] }}" class="card-img-top object-fit-cover">--}}
{{--                    <div class="card-body text-left  rounded-bottom px-3 py-4--}}
{{--                    d-flex align-items-center justify-content-center"--}}
{{--                    style="background-color: #d6fadd">--}}
{{--                        <h5 class="card-title fw-bold fs-6 mb-0 text-success">{{ $element['title'] }}</h5>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        @endforeach--}}
{{--    </div>--}}
{{--</div>--}}
{{--</section>--}}





{{--<section>--}}
{{--    <div class="container py-5">--}}
{{--        <h2 class="text-center mb-2 fw-bold text-success">Why Trust Us?</h2>--}}
{{--        <h5 class="text-center text-muted mb-4"></h5>--}}

{{--        @php--}}
{{--            $trustElements = [--}}
{{--                [--}}
{{--                    'image' => asset('frontend/img/food-delivery.png'),--}}
{{--                    'title' => '100% Homemade Food Delivery',--}}
{{--                ],--}}
{{--                [--}}
{{--                    'image' => asset('frontend/img/Nosalt.jpg'),--}}
{{--                    'title' => 'Zero White Sugar, Salt, or Refined Oils',--}}
{{--                ],--}}
{{--                [--}}
{{--                    'image' => asset('frontend/img/frshcook.jpeg'),--}}
{{--                    'title' => 'Freshly Cooked Per Order',--}}
{{--                ],--}}
{{--                [--}}
{{--                    'image' => asset('frontend/img/free-plastic.jpeg'),--}}
{{--                    'title' => 'Plastic-Free Packaging',--}}
{{--                ],--}}
{{--                [--}}
{{--                    'image' => asset('frontend/img/Meal-Subscription.jpg'),--}}
{{--                    'title' => 'Guaranteed Weight Loss Meal Subscription',--}}
{{--                ],--}}
{{--            ];--}}
{{--        @endphp--}}

{{--        <div class="row justify-content-center g-4 custom-five-cols">--}}
{{--            @foreach ($trustElements as $element)--}}
{{--                <div class="custom-col">--}}
{{--                    <div class="card trust-card h-100 border-0 shadow-sm overflow-hidden"--}}
{{--                         style="transition: transform 0.3s ease;">--}}
{{--                        <img src="{{ $element['image'] }}" alt="{{ $element['title'] }}"--}}
{{--                             class="card-img-top object-fit-cover"--}}
{{--                             style="height: 200px;">--}}
{{--                        <div class="card-body text-center px-3 py-4"--}}
{{--                             style="background-color: #eeeeee;">--}}
{{--                            <h5 class="card-title fw-bold fs-6 mb-0 text-dark" >--}}
{{--                                {{ $element['title'] }}--}}
{{--                            </h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{--<style>--}}
{{--    .trust-card:hover {--}}
{{--        transform: translateY(-5px);--}}
{{--        box-shadow: 0 10px 20px rgba(0,0,0,0.12);--}}
{{--    }--}}
{{--    @media (min-width: 992px) {--}}
{{--        .custom-five-cols {--}}
{{--            display: grid;--}}
{{--            grid-template-columns: repeat(5, 1fr);--}}
{{--            /*gap: 0.5rem;*/--}}
{{--        }--}}
{{--        .custom-col {--}}
{{--            display: flex;--}}
{{--        }--}}
{{--    }--}}
{{--</style>--}}




<section class="pt-5 ">
    <div class="container">
{{--        <h2 class="text-center fw-bold mb-2 text-success">Why Trust Us?</h2>--}}
{{--        <p class="text-center text-muted mb-5">--}}
{{--            We’ve built our reputation on honesty, quality, and care in every meal we serve.--}}
{{--        </p>--}}

        @php
            $trustElements = [
                [
                    'image' => asset('frontend/img/food-delivery.png'),
                    'title' => '100% Homemade ',
                    'desc'  => 'Every meal is prepared in our own kitchen using family recipes.'
                ],
                [
                    'image' => asset('frontend/img/Nosalt.jpg'),
                    'title' => 'Zero White Sugar',
                    'desc'  => 'We use only natural, wholesome ingredients — nothing hidden.'
                ],
                [
                    'image' => asset('frontend/img/frshcook.jpeg'),
                    'title' => 'Freshly Cooked ',
                    'desc'  => 'No reheating, no preservatives — your order is made just for you.'
                ],
                [
                    'image' => asset('frontend/img/free-plastic.jpeg'),
                    'title' => 'Plastic-Free Packaging',
                    'desc'  => 'We care for the planet as much as your health with eco-friendly packs.'
                ],
                [
                    'image' => asset('frontend/img/Meal-Subscription.jpg'),
                    'title' => 'Guaranteed Results',
                    'desc'  => 'A proven plan backed by our satisfied customers and nutritionists.'
                ],
            ];
        @endphp

        <div class="row justify-content-center g-4 custom-five-cols">
            @foreach ($trustElements as $element)
                <div class="custom-col text-center">
                    <div class="circle-gradient mx-auto mb-3">
                        <img src="{{ $element['image'] }}" alt="{{ $element['title'] }}">
                    </div>
                    <h5 class="fw-bold fs-6 text-dark mb-1">{{ $element['title'] }}</h5>
                </div>
            @endforeach
        </div>



    </div>
</section>

<style>
    /* Gradient Circle Style */
    .circle-gradient {
        width: 160px;
        height: 160px;
        border-radius: 50%;
        overflow: hidden;
        padding: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(135deg, #28a745, #88d498);
        box-shadow: 0 6px 12px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .circle-gradient img {
        width: 80%;
        height: 80%;
        object-fit: contain;
        background: white;
        border-radius: 50%;
        padding: 10px;
    }

    .circle-gradient:hover {
        transform: translateY(-6px) scale(1.05);
        box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }

    /* Grid Layout (default: mobile) */
    .custom-five-cols {
        display: grid;
        gap: 1rem;
        justify-content: center;
    }

    .custom-five-cols .custom-col {
        text-align: center;
    }

    /* Tablet: 2 + 2 + 1 */
    @media (min-width: 768px) and (max-width: 1199px) {
        .custom-five-cols {
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }

        /* Last one centered */
        .custom-five-cols .custom-col:last-child {
            grid-column: 1 / -1;      /* span full width */
            justify-self: center;     /* center horizontally */
        }
    }

    /* Large screens: all 5 in one row */
    @media (min-width: 1200px) {
        .custom-five-cols {
            grid-template-columns: repeat(5, 1fr);
            gap: 1.5rem;
        }

        .custom-five-cols .custom-col:last-child {
            grid-column: auto;
            justify-self: auto;
        }
    }


</style>
