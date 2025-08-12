<section class="py-5 " style="background-color: #f5f5f5 ">
    <div class="container px-3 px-md-2">
        <!-- Section Title -->
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-2" style="color: #198754;">Plans & Pricing</h2>
            <p class="text-muted fs-5">Affordable, goal-driven meal plans for every lifestyle</p>
        </div>

        <!-- Pricing Cards -->
        <div class="row g-4">
            @php
                $plans = [
                    [
                        'type' => 'Best Weight Loss Meal Delivery',
                        'ideal' => '1–3 Months Fat Loss Plans',
                        'price' => '₹99',
                        'bg' => '#d6fadd',
                        'icon' => 'bi-heart-pulse'
                    ],
                    [
                        'type' => 'Prepared Meal Delivery Service',
                        'ideal' => 'Working Professionals',
                        'price' => '₹99',
                        'bg' => '#d6fadd',
                        'icon' => 'bi-briefcase'
                    ],
                    [
                        'type' => 'Gym Food Delivery in Bangalore',
                        'ideal' => 'High-Protein, Low-Carb Meals',
                        'price' => '₹149',
                        'bg' => '#d6fadd',
                        'icon' => 'bi-barbell'
                    ],
                    [
                        'type' => 'Custom Healthy Meal Delivery',
                        'ideal' => 'Fully Personalized Meals in Bangalore',
                        'price' => 'Custom',
                        'bg' => '#d6fadd',
                        'icon' => 'bi-sliders2'
                    ]
                ];
            @endphp

            @foreach ($plans as $plan)
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card h-100 border-0 shadow rounded-4 bg-white" >
                        <div class="card-body d-flex flex-column align-items-center text-center px-4 py-5">
{{--                            <div class="mb-3">--}}
{{--                                <i class="bi {{ $plan['icon'] }} fs-1 text-dark"></i>--}}
{{--                            </div>--}}
                            <h5 class="fw-bold text-success mb-1">{{ $plan['type'] }}</h5>
                            <p class="text-muted small mb-3">{{ $plan['ideal'] }}</p>
                            <h3 class="fw-bold" style="color: #198754;">{{ $plan['price'] }}
                                @if($plan['price'] !== 'Custom')
                                    <small class="fs-6 text-muted">/day</small>
                                @endif
                            </h3>
                            <button class="btn btn-success mt-3 px-4 rounded-pill plan-btn text-white border-0">
                                Select Plan
                            </button>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Bottom Highlights -->
        <div class="text-center mt-5">
            <p class="mb-2">
                <i class="fas fa-map-marker-alt text-danger me-1"></i>
                <strong>Free delivery in Bangalore</strong>
            </p>

            <p class="text-muted small mb-3">
                <i class="fas fa-money-bill-wave me-1"></i>COD Available &nbsp; | &nbsp;
                <i class="fas fa-shield-alt me-1"></i>No Advance Required &nbsp; | &nbsp;
                <i class="fas fa-retweet me-1"></i>Easy Pause or Switch
            </p>

            <button class="btn btn-success px-4 py-2 rounded-pill shadow-sm">
                Start a 3-Day Trial Meal Plan
            </button>
        </div>
    </div>
</section>



