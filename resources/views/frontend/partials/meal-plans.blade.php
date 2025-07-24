<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold text-success">A Day at Rasamrit – Your Daily Nutrition, Fully Managed</h2>
        <p class="lead text-muted">From morning detox to dinner done right, we take care of everything.</p>
    </div>

    <div class="card overflow-hidden mb-5 shadow-sm border-0 rounded-4">
        <div class="row g-0 flex-column flex-md-row align-items-stretch" style="height: 100px;">
            <!-- Left Image -->
            <div class="col-md-6">
                <img src="{{ asset('frontend/img/about-1.jpg') }}"
                     alt="A Day at Rasamrit"
                     class="img-fluid w-100"
                     style="height: 100px; object-fit: cover; border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
            </div>

            <!-- Right Text -->
            <div class="col-md-6 bg-light p-3 d-flex flex-column justify-content-center"
                 style="height: 100px; border-top-right-radius: .5rem; border-bottom-right-radius: .5rem;">
                <h3 class="fw-bold text-success mb-1">Our Meal Plans</h3>
                <p class="text-muted mb-0 fs-6 fw-semibold">Choose what fits your body best with our food dietitians</p>

            </div>
        </div>

    </div>

    <div class="row g-4">
        @php
            $plans = [
                [
                    'title' => 'Weight Loss Plan (1000–1400 cal)',
                    'desc' => 'Burn fat with high-fiber, low-GI meals',
                    'icon' => '🔥',
                ],
                [
                    'title' => 'Muscle Gain Plan (2000+ cal)',
                    'desc' => 'Fuel muscle recovery with high-protein meals',
                    'icon' => '💪',
                ],
                [
                    'title' => 'Diabetic/Low GI Plan',
                    'desc' => 'Sugar-conscious meals crafted with expert input',
                    'icon' => '🍽️',
                ],
                [
                    'title' => 'Healthy Eating / Office Plan',
                    'desc' => 'Perfect for professionals who want energy all day',
                    'icon' => '💼',
                ],
                [
                    'title' => 'Vegan / Keto / Custom Plan',
                    'desc' => 'Tailored options for your dietary lifestyle',
                    'icon' => '🥗',
                ],
                [
                    'title' => 'Home Gym Training Program',
                    'desc' => 'Get paired workouts with your meal plan',
                    'icon' => '🏋️‍♂️',
                ],
            ];
        @endphp

        @foreach ($plans as $plan)
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="card h-100 shadow-sm border border-gray rounded-3 p-4 text-center">
                    <div class="mb-3 display-4">{{ $plan['icon'] }}</div>
                    <h5 class="fw-bold text-success">{{ $plan['title'] }}</h5>
                    <p class="text-muted">{{ $plan['desc'] }}</p>
                </div>
            </div>
        @endforeach

        <div class="col-12">
            <div class="text-center mt-4">
                <a href="#subscribe" class="btn btn-success btn-lg rounded-pill px-4 shadow">
                    Start Meal Subscription in Bangalore
                </a>
            </div>
        </div>
    </div>
</div>


