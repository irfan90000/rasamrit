
<div class="container py-5">
    <h2 class="text-center mb-4 fw-bold text-dark">Why Trust Us?</h2>

    @php
        $trustElements = [
            [
                'image' => asset('frontend/img/about-2.jpg'),
                'title' => '100% Homemade Food Delivery',
            ],
            [
                'image' => asset('frontend/img/about-2.jpg'),
                'title' => 'Zero White Sugar, Salt, or Refined Oils',
            ],
            [
                'image' => asset('frontend/img/about-2.jpg'),
                'title' => 'Freshly Cooked Per Order',
            ],
            [
                'image' => asset('frontend/img/about-2.jpg'),
                'title' => 'Plastic-Free Packaging',
            ],
            [
                'image' => asset('frontend/img/about-2.jpg'),
                'title' => 'Guaranteed Weight Loss Meal Subscription',
            ],
        ];
    @endphp

    <div class="row justify-content-center g-4 custom-five-cols">
        @foreach ($trustElements as $element)
            <div class="custom-col">
                <div class="card trust-card h-100 border border-gray shadow-sm">
                    <img src="{{ $element['image'] }}" alt="{{ $element['title'] }}" class="card-img-top object-fit-cover">
                    <div class="card-body text-center bg-white rounded-bottom px-3 py-4 d-flex align-items-center justify-content-center">
                        <h6 class="card-title fw-bold fs-6 mb-0 text-dark">{{ $element['title'] }}</h6>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<style>
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
</style>
