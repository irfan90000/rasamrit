<section class="py-5" style=" border-radius: 16px;" >
    <div class="container px-0 py-4" >
        <!-- Section Title -->
        <div class="text-center mb-5">
            <h2 class="fw-bold text-success">How Our Meal Subscription Works</h2>
            <p class="lead text-muted fw-bold">Simplicity, delivered in 5 easy steps</p>
        </div>

        <!-- Steps Cards Full-Width -->
        <div class="row g-3 px-3">
            @php
                $steps = [
                    ['title' => 'Pick Your Goal', 'desc' => 'Weight loss, muscle gain, diabetic care, or balanced eating'],
                    ['title' => 'Free Calls With a Nutritionist', 'desc' => 'We understand your body, habits, and needs'],
                    ['title' => 'Get Custom Meal Plan', 'desc' => 'Calorie-based plans backed by nutritional science'],
                    ['title' => 'Daily Meal Delivery', 'desc' => 'Fresh, hot, and hygienically packed to your doorstep'],
                    ['title' => 'Refund Guarantee', 'desc' => 'No results after following? We’ll refund. 24/7 support.'],
                ];
            @endphp

            @foreach ($steps as $index => $step)
                <div class="col-12 col-md-6 col-lg-2 flex-fill">
                    <div class="card h-100 text-center border-0 rounded-4 shadow-sm"
                         style="    background: linear-gradient(125deg, #105c01, #009245);">
                        <div class="card-body py-5 px-3 d-flex flex-column align-items-center justify-content-center">
                            <h5 class="fw-bold mb-2 text-white" >{{ $step['title'] }}</h5>

                            <p class="text-white  mb-0" >{{ $step['desc'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-4">
            <h6 class="text-muted fw-bold text-center"> Adjust your plan anytime. 24/7 chat & call support.</h6>
        </div>
    </div>
</section>