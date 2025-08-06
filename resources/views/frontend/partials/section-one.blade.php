<section>
<div class="container py-5">
    <h2 class="text-center mb-4 fw-bold text-success">Why Trust Us?</h2>

    @php
        $trustElements = [
            [
                'image' => asset('frontend/img/homemade.jpg'),
                'title' => '100% Homemade Food Delivery',
            ],
            [
                'image' => asset('frontend/img/about-2.jpg'),
                'title' => 'Zero White Sugar, Salt, or Refined Oils',
            ],
            [
                'image' => asset('frontend/img/frshcook.jpeg'),
                'title' => 'Freshly Cooked Per Order',
            ],
            [
                'image' => asset('frontend/img/plastic-free.jpeg'),
                'title' => 'Plastic-Free Packaging',
            ],
            [
                'image' => asset('frontend/img/weight-loss-meal.jpeg'),
                'title' => 'Guaranteed Weight Loss Meal Subscription',
            ],
        ];
    @endphp

    <div class="row justify-content-center g-4 custom-five-cols">
        @foreach ($trustElements as $element)
            <div class="custom-col">
                <div class="card trust-card h-100 border border-gray shadow-sm">
                    <img src="{{ $element['image'] }}" alt="{{ $element['title'] }}" class="card-img-top object-fit-cover">
                    <div class="card-body text-left bg-white rounded-bottom px-3 py-4 d-flex align-items-center justify-content-center">
                        <h5 class="card-title fw-bold fs-6 mb-0 text-dark">{{ $element['title'] }}</h5>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</section>

