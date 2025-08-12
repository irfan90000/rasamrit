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




<!-- Testimonial Section -->
<section class="py-5 " style="background-color: #f5f5f5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-success">Proof That It Works</h2>
            <p class="text-muted">Trusted by hundreds. See what our customers say:</p>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="border p-4 rounded-4 shadow-sm h-100 bg-white">
                    <h6 class="fst-italic text-black">“I lost 6kg in 5 weeks — without starving or skipping meals. Rasamrit is magic!”</h6>
                    <p class="fw-bold mb-0 text-success">— Priya Mehta, HR Manager</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="border p-4 rounded-4 shadow-sm h-100 bg-white">
                    <h6 class="fst-italic text-black">“I’m diabetic, and Rasamrit has helped me balance sugar without compromising on taste.”</h6>
                    <p class="fw-bold mb-0 text-success">— Rohit S., Software Developer</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Nutritionists Section -->
<section class="py-5 ">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-success">Meet Your Nutritionists & Trainers</h2>
            <p class="text-muted">Work 1:1 with our expert in-house team</p>
        </div>

        @php
            $experts = [
                ['name' => 'Nilesh Shah', 'image' => asset('frontend/img/DrNilesh.jpeg'), 'linkedin' => 'https://linkedin.com/in/nilesh'],
                ['name' => 'Dr. Anjali Kapoor', 'image' => asset('frontend/img/Dr.Anjali.jpg'), 'linkedin' => 'https://linkedin.com/in/anjali'],
                ['name' => 'Ritika Sen', 'image' => asset('frontend/img/DrRitika.jpeg'), 'linkedin' => 'https://linkedin.com/in/ritika'],
            ];
        @endphp

        <div class="row justify-content-center g-4">
            @foreach ($experts as $expert)
                <div class="col-md-4 col-sm-6 gap-4">
                    <div class="card h-100 border-0 shadow-sm text-center" >
                        <img src="{{ $expert['image'] }}" alt="{{ $expert['name'] }}" class="card-img-top img-fluid rounded-top" style="height: 400px; object-fit: cover;">
                        <div class="card-body "  style="background-color: #f5f5f5">
                            <h5 class="fw-bold text-black mb-1">{{ $expert['name'] }}</h5>
                            <a href="{{ $expert['linkedin'] }}" target="_blank" class="text-success small">View LinkedIn</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-center mt-5">
            <a href="#" class="btn btn-success px-4 py-2 rounded-pill shadow-sm">Chat With an Expert Now</a>
        </div>
    </div>
</section>



