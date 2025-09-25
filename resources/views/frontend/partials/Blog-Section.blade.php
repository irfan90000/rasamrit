<section>
    <div class="container py-5">
        <h2 class="text-success fw-bold mb-4 border-bottom pb-2">Blog Posts</h2>

        <div class="row g-4">
            {{-- Blog Post 1 --}}
            <div class="col-md-4">
                <div class="card h-100 border border-success shadow-sm rounded-4">
                    <img src="{{ asset('frontend/image/about--2222.jpg') }}"
                         class="card-img-top rounded-top-4"
                         style="height: 200px; object-fit: cover;" alt="Blog 1">

                    <div class="card-body d-flex flex-column">
                        <h5 class="fw-bold text-success mb-2">
                            <a href="#"
                               class="text-decoration-none text-success">
                                How to Eat Healthy Everyday
                            </a>
                        </h5>

                        <div class="mb-2 small text-dark">
                            <strong>By:</strong> Admin<br>
                            <strong>Date:</strong> 20-09-2025
                        </div>

                        <p class="text-dark flex-grow-1">
                            Learn simple and effective tips to maintain a healthy lifestyle with balanced meals.
                        </p>

                        <a href="#"
                           class="btn btn-success btn-sm mt-auto rounded-pill">Read More</a>
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="card h-100 border border-success shadow-sm rounded-4">

                    <img src="{{ asset('/frontend/image/about-44444.jpg') }}"
                         class="card-img-top rounded-top-4"
                         style="height: 200px; object-fit: cover;" alt="Blog 2">

                    <div class="card-body d-flex flex-column">
                        <h5 class="fw-bold text-success mb-2">
                            <a href="#"
                               class="text-decoration-none text-success">
                                Top 10 Weight Loss Foods
                            </a>
                        </h5>

                        <div class="mb-2 small text-dark">
                            <strong>By:</strong> Nutritionist<br>
                            <strong>Date:</strong> 15-09-2025
                        </div>

                        <p class="text-dark flex-grow-1">
                            Discover the best natural foods that help in quick and sustainable weight loss.
                        </p>

                        <a href="#"
                           class="btn btn-success btn-sm mt-auto rounded-pill">Read More</a>
                    </div>
                </div>
            </div>

            {{-- Blog Post 3 --}}
            <div class="col-md-4">
                <div class="card h-100 border border-success shadow-sm rounded-4">
                    <img src="{{ asset('/frontend/image/about-four.jpg') }}"
                         class="card-img-top rounded-top-4"
                         style="height: 200px; object-fit: cover;" alt="Blog 3">

                    <div class="card-body d-flex flex-column">
                        <h5 class="fw-bold text-success mb-2">
                            <a href="#"
                               class="text-decoration-none text-success">
                                Why Hydration is Key to Health
                            </a>
                        </h5>

                        <div class="mb-2 small text-dark">
                            <strong>By:</strong> Rasamrit Team<br>
                            <strong>Date:</strong> 10-09-2025
                        </div>

                        <p class="text-dark flex-grow-1">
                            Staying hydrated is vital. Here’s why water and fluids should be part of your daily plan.
                        </p>

                        <a href="#"
                           class="btn btn-success btn-sm mt-auto rounded-pill">Read More</a>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>