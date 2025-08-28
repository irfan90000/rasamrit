<div class="container my-5">
    <div class="row align-items-center bg-light rounded shadow-sm p-4">

        <!-- Image Column -->
        <div class="col-md-6 mb-3 mb-md-0">

            {{--                    src="frontend/img/free-image.jpg"--}}

            <img src="{{ asset('frontend/img/free-image.jpg') }}"
                 alt="Delivery Service"
                 class="img-fluid rounded shadow-sm">
        </div>

        <!-- Content Column -->
        <div class="col-md-6 text-center text-md-start">
            <!-- Heading -->
            <h2 class="fs-4 fw-bold text-success mb-3">
                <i class="fas fa-map-marker-alt text-danger me-2"></i>
                Free delivery in Bangalore
            </h2>

            <!-- Trust Points -->
            <p class=" small mb-4">
                <i class="fas fa-money-bill-wave me-1 text-black"></i> COD Available
                <span class="mx-2">|</span>
                <i class="fas fa-shield-alt me-1 text-black"></i> No Advance Required
                <span class="mx-2">|</span>
                <i class="fas fa-retweet me-1 text-black"></i> Easy Pause or Switch
            </p>

            <!-- CTA -->

            <button class="fw-semibold px-4 py-2 rounded-pill border-0 subs_btn animated slideInLeft">
                Start a 3-Day Trial Meal Plan
            </button>
        </div>

    </div>
</div>