<style>
    .text-green{
        color: #197241;
    }
    .meal-intro-img {
        height: 250px;
        object-fit: cover;
        border-top-left-radius: .5rem;
        border-bottom-left-radius: .5rem;
    }
    .meal-intro-text {
        background-color: #f6fff8;
        border-top-right-radius: .5rem;
        border-bottom-right-radius: .5rem;
    }

   .plan-card{
       background-color: #f5f5f5;
   }

    .plan-card:hover{
        background-color: #d6fadd;
    }



</style>
<section >
<div class="container py-5 day-section">
    <!-- Heading -->


    <!-- Plans Grid -->
    <div class="row g-4">
        <div class="p-4 d-flex flex-column justify-content-center ">
            <h2  class="fw-bold text-center text-green mb-2">Our Meal Plans</h2>
            <p class="text-muted text-center mb-0 fs-6 fw-semibold">
                Choose what fits your body best with our expert dietitians guiding you every step.
            </p>
        </div>
        @php
            $plans = [
                ['title' => 'Weight Loss Plan (1000–1400 cal)', 'desc' => 'Burn fat with high-fiber, low-GI meals', 'icon' => 'fa-fire'],
                ['title' => 'Muscle Gain Plan (2000+ cal)', 'desc' => 'Fuel muscle recovery with high-protein meals', 'icon' => 'fa-dumbbell'],
                ['title' => 'Diabetic/Low GI Plan', 'desc' => 'Sugar-conscious meals crafted with expert input', 'icon' => 'fa-apple-alt'],
                ['title' => 'Healthy Eating / Office Plan', 'desc' => 'Perfect for professionals who want energy all day', 'icon' => 'fa-briefcase'],
                ['title' => 'Vegan / Keto / Custom Plan', 'desc' => 'Tailored options for your dietary lifestyle', 'icon' => 'fa-leaf'],
                ['title' => 'Home Gym Training Program', 'desc' => 'Get paired workouts with your meal plan', 'icon' => 'fa-running'],
            ];
        @endphp

        @foreach ($plans as $plan)
            <div class="col-12 col-sm-6 col-lg-4 ">
                <div class=" h-100 shadow-lg  plan-card rounded-3 p-4 text-center ">
                    <div class="mb-3 text-green fs-1"><i class="fas {{ $plan['icon'] }} plan-icon"></i></div>
                    <h5 class="fw-bold text-dark ">{{ $plan['title'] }}</h5>
                    <p class="text-muted">{{ $plan['desc'] }}</p>
                </div>
            </div>
        @endforeach

        <!-- CTA -->
        <div class="col-12">
            <div class="text-center mt-4">
                <button class="fw-semibold px-4 py-2 rounded-pill border-0 subs_btn animated slideInLeft">
                    <a class="fw-semibold text-white" href="#subscribe" >
                        Start Meal Subscription in Bangalore </a>
                </button>
            </div>
        </div>
    </div>
</div>
</section>