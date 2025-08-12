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





<section>
    <div class="container py-5">
        <h2 class="text-center mb-2 fw-bold text-success">Why Trust Us?</h2>
        <h5 class="text-center text-muted mb-4"></h5>

        @php
            $trustElements = [
                [
                    'image' => asset('frontend/img/food-delivery.png'),
                    'title' => '100% Homemade Food Delivery',
                ],
                [
                    'image' => asset('frontend/img/Nosalt.jpg'),
                    'title' => 'Zero White Sugar, Salt, or Refined Oils',
                ],
                [
                    'image' => asset('frontend/img/frshcook.jpeg'),
                    'title' => 'Freshly Cooked Per Order',
                ],
                [
                    'image' => asset('frontend/img/free-plastic.jpeg'),
                    'title' => 'Plastic-Free Packaging',
                ],
                [
                    'image' => asset('frontend/img/Meal-Subscription.jpg'),
                    'title' => 'Guaranteed Weight Loss Meal Subscription',
                ],
            ];
        @endphp

        <div class="row justify-content-center g-4 custom-five-cols">
            @foreach ($trustElements as $element)
                <div class="custom-col">
                    <div class="card trust-card h-100 border-0 shadow-sm overflow-hidden"
                         style="transition: transform 0.3s ease;">
                        <img src="{{ $element['image'] }}" alt="{{ $element['title'] }}"
                             class="card-img-top object-fit-cover"
                             style="height: 200px;">
                        <div class="card-body text-center px-3 py-4"
                             style="background-color: #eeeeee;">
                            <h5 class="card-title fw-bold fs-6 mb-0 text-dark" >
                                {{ $element['title'] }}
                            </h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    .trust-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.12);
    }
    @media (min-width: 992px) {
        .custom-five-cols {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            /*gap: 0.5rem;*/
        }
        .custom-col {
            display: flex;
        }
    }
</style>
