<section class="py-5 ">
    <div class="container px-3 px-md-2">
        <!-- Section Title -->
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-2 text-green">Plans & Pricing</h2>
            <p class="text-muted fs-5">Affordable, goal-driven meal plans for every lifestyle</p>
        </div>

        <!-- Pricing Cards -->
        <div class="row g-4 margin-row">
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
                            <h5 class="fw-bold text-dark mb-1">{{ $plan['type'] }}</h5>
                            <p class="text-muted small mb-3">{{ $plan['ideal'] }}</p>
                            <h3 class="fw-bold text-green">{{ $plan['price'] }}
                                @if($plan['price'] !== 'Custom')
                                    <small class="fs-6 text-muted">/day</small>
                                @endif
                            </h3>
                            <button class="fw-semibold  py-2 rounded-pill border-0 subs_btn animated slideInLeft"
                                    style="padding-right: 36px;padding-left: 36px;">
                                <a class="fw-semibold text-white" >
                                    Select Plan </a>
                            </button>
{{--                            <button class="btn btn-success mt-3 px-4 rounded-pill plan-btn text-white border-0">--}}
{{--                                Select Plan--}}
{{--                            </button>--}}

                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Bottom Highlights -->

        <div class="">
            <div class="row g-4 align-items-stretch main-banner-about p-4">
                <!-- Left Column: Delivery Check -->
                <div class="col-md-6 d-flex">
                    <div class="card border-0 shadow-sm rounded-4 p-4 w-100 h-100">
                        <div class="d-flex flex-column justify-content-center align-items-center text-center mt-0">
                            <h2 class="fw-bold text-green mb-3">Delivery Areas in Bangalore</h2>
                            <p class="text-muted mb-2">
                                Includes Koramangala, Whitefield, Indiranagar, HSR Layout, Jayanagar and more
                            </p>
                        </div>

                        <!-- Input box -->
                        <div class="input-group mb-3 shadow-sm rounded-pill mt-4">
                    <span class="input-group-text bg-white border-0 rounded-start-pill">
                        <i class="fas fa-search text-success"></i>
                    </span>
                            <input type="text" class="form-control border-0 rounded-end-pill"
                                   placeholder="Enter area, landmark or pincode">
                        </div>

                        <!-- Tags -->
                        <div class="mb-3 mt-2">
                            <span class="badge bg-color-green text-green px-3 py-2 me-2 mb-2">Koramangala</span>
                            <span class="badge bg-color-green text-green px-3 py-2 me-2 mb-2">Whitefield</span>
                            <span class="badge bg-color-green text-green px-3 py-2 me-2 mb-2">Indiranagar</span>
                            <span class="badge bg-color-green text-green px-3 py-2 me-2 mb-2">HSR Layout</span>
                            <span class="badge bg-color-green text-green px-3 py-2 mb-2">Jayanagar</span>
                        </div>

                        <!-- Trust Points -->
                        <div class="mb-4 text-muted mt-4">
                            <p class="mb-1"><i class="fas fa-check-circle text-success me-1"></i> Free Delivery</p>
                            <p class="mb-1"><i class="fas fa-money-bill-wave text-success me-1"></i> COD Available</p>
                            <p class="mb-0"><i class="fas fa-ban text-success me-1"></i> No Advance</p>
                        </div>

                        <!-- Buttons -->
                        <div class="d-flex flex-column flex-md-row gap-2 mt-auto">
                            <button class="btn btn-success fw-semibold px-4 py-2 rounded-pill shadow-sm flex-fill">
                                Check availability
                            </button>
                            <button class="btn btn-outline-success fw-semibold px-4 py-2 rounded-pill flex-fill">
                                WhatsApp to confirm
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Map -->
                <div class="col-md-6 d-flex">
                    <div class="bg-light rounded-4 p-3 shadow-sm w-100 h-100">
                        <div class="ratio ratio-4x3">
                            <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.111156463539!2d77.5946!3d12.9716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670e3b2f5f7%3A0x2f7e9b94c02b3d9d!2sBangalore%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1693660299446!5m2!1sen!2sin"
                                    style="border:0;"
                                    allowfullscreen
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        {{--        <div class="container my-5">--}}
{{--            <div class="row align-items-center bg-light rounded shadow-sm p-4">--}}

{{--                <!-- Google Map Column -->--}}
{{--                <div class="col-md-6 mb-3 mb-md-0">--}}
{{--                    <div class="ratio ratio-4x3">--}}
{{--                        <iframe--}}
{{--                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3889.111156463539!2d77.5946!3d12.9716!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670e3b2f5f7%3A0x2f7e9b94c02b3d9d!2sBangalore%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1693660299446!5m2!1sen!2sin"--}}
{{--                                style="border:0;"--}}
{{--                                allowfullscreen--}}
{{--                                loading="lazy"--}}
{{--                                referrerpolicy="no-referrer-when-downgrade">--}}
{{--                        </iframe>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Content Column -->--}}
{{--                <div class="col-md-6 text-center text-md-start">--}}
{{--                    <!-- Heading -->--}}
{{--                    <h2 class="fs-4 fw-bold text-success mb-3">--}}
{{--                        <i class="fas fa-map-marker-alt text-danger me-2"></i>--}}
{{--                        Free Delivery in Bangalore--}}
{{--                    </h2>--}}

{{--                    <!-- Trust Points -->--}}
{{--                    <p class="small mb-4">--}}
{{--                        <i class="fas fa-money-bill-wave me-1 text-black"></i> COD Available--}}
{{--                        <span class="mx-2">|</span>--}}
{{--                        <i class="fas fa-shield-alt me-1 text-black"></i> No Advance Required--}}
{{--                        <span class="mx-2">|</span>--}}
{{--                        <i class="fas fa-retweet me-1 text-black"></i> Easy Pause or Switch--}}
{{--                    </p>--}}

{{--                    <!-- CTA -->--}}
{{--                    <button class="fw-semibold px-4 py-2 rounded-pill border-0 subs_btn animated slideInLeft">--}}
{{--                        Start a 3-Day Trial Meal Plan--}}
{{--                    </button>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}

    </div>
</section>
<style>

    .main-banner-about {
        background-image: url("{{ asset('frontend/image/bg-banner.jpg') }}");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        padding: 60px 0;
        height: auto;
    }
    .margin-row{
        margin-bottom: 60px;
    }
    .text-green{
        color: #197241 !important;
    }
    .bg-color-green{
        background-color: #c3f1d5 !important;
        border-radius: 16px;
    }
</style>


