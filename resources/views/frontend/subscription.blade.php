
<style>
    .main-sub{
        height: 50vh;
    }
    @media (max-width: 768px) {
        .main-sub{
            height: auto;
        }
    }
    .title-sub{
        font-size: 40px;
    }
    @media (max-width: 768px) {
        .title-sub{
            font-size: 24px;
        }
    }
</style>
<div>
    @section('title', $page_title)
    @section('description', $description)
    <div class="breadchrumb main-sub">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 text-center">
                    <h1 class="title-sub fw-bold slideInLeft animated">
                        Healthy Food Subscription in Bangalore – Fresh, Homemade & Affordable
                    </h1>
                    <p class="sub-title2 mt-1">
                        Experience the comfort of homemade food delivery in Bangalore with Rasamrit.
                        Whether you're aiming for a healthier diet, weight loss, or just want a daily
                        high-protein meal plan, our subscription service is designed just for you.
                    </p>
                </div>
            </div>
        </div>


    </div>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-8 text-center">
                <h2 class="text-dark fw-bold">
                    Flexible Meal Subscription Plans in Bangalore
                </h2>
                <p class="mt-0">
                    Choose from our 3-day, 14-day, or 30-day meal subscription Bangalore packages.
                    Starting from just ₹70/day, every meal box is prepared fresh with hygienic
                    ingredients and delivered on time.
                </p>
            </div>
        </div>
    </div>


    <div class="subscription_area">
        <div class="container">
            <div class="row g-3">
                <div class="col-lg-7 wow fadeInUp">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="title">
                                @if ($formstep == 1)
                                    <i class="fas fa-utensils"></i>
                                    Meal delivery plan
                                @elseif ($formstep == 2)
                                    <i class="fas fa-weight"></i>
                                    BMI info
                                @elseif ($formstep == 3)
                                    <i class="fas fa-paper-plane"></i>
                                    Subscription plan
                                @elseif ($formstep == 4)
                                    <i class="far fa-user"></i>
                                    Personal Information
                                @endif
                            </h6>
                            <div class="subscription_form">
                                @if ($formstep == 1)
                                    <div class="row gy-4">
                                        <div class="col-lg-4">
                                            <h6>Select your goal?<sup>*</sup></h6>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="row g-3">
                                                @foreach ($goal_list as $goal)
                                                    <div class="col-lg-6">
                                                        <div class="plancheck">
                                                            <input type="radio" wire:model.live="goalData"
                                                                wire:change.live="getDiet" value="{{ $goal->id }}"
                                                                id="goal_{{ $goal->id }}" />
                                                            <label for="goal_{{ $goal->id }}">
                                                                {{ $goal->name }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                @error('goalData')
                                                    <div class="col-lg-12">
                                                        <small class="text-danger fw-bold">
                                                            *{{ $message }}
                                                        </small>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        @if ($goalData && count($diet_list) > 0)
                                            <div class="col-lg-4">
                                                <h6>Choose Your Diet?<sup>*</sup></h6>
                                            </div>
                                            <div class="col-lg-8">
                                                <div class="row g-3">
                                                    @foreach ($diet_list as $diet)
                                                        <div class="col-lg-6">
                                                            <div class="plancheck">
                                                                <input type="radio" wire:model="dietData"
                                                                    value="{{ $diet->id }}"
                                                                    id="diet_{{ $diet->id }}" />
                                                                <label
                                                                    for="diet_{{ $diet->id }}">{{ $diet->name }}</label>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                    @error('dietData')
                                                        <div class="col-lg-12">
                                                            <small class="text-danger fw-bold">
                                                                *{{ $message }}
                                                            </small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                @elseif ($formstep == 2)
                                    <div class="row g-4">
                                        <div class="col-lg-12">
                                            <select class="form-select" wire:model="gender">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="number" wire:model="age" class="form-control"
                                                placeholder="Your Age" />
                                            @error('age')
                                                <small class="text-danger fw-bold">
                                                    *{{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="number" wire:model="weight" class="form-control"
                                                placeholder="Your Weight in Kgs" />
                                            @error('weight')
                                                <small class="text-danger fw-bold">
                                                    *{{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12">
                                            <h6 class="text-dark">Your Height<sup>*</sup></h6>
                                        </div>
                                        <div class="col-lg-3">
                                            <h6 class="text-secondary ms-3">
                                                in Feet
                                                <span id="heightValue" class="float-end text-primary">
                                                    {{ $heightft }}
                                                </span>
                                            </h6>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="range" class="form-range" min="3" max="7"
                                                wire:model.live="heightft" id="heightRange"
                                                oninput="document.getElementById('heightValue').innerText = this.value">
                                        </div>
                                        <div class="col-lg-3">
                                            <h6 class="text-secondary ms-3">
                                                in Inches
                                                <span id="heightInchesValue" class="float-end text-primary">
                                                    {{ $heightinch }}
                                                </span>
                                            </h6>
                                        </div>
                                        <div class="col-lg-9">
                                            <input type="range" class="form-range" min="0" max="11"
                                                wire:model.live="heightinch" id="heightInchesRange"
                                                oninput="document.getElementById('heightInchesValue').innerText = this.value">
                                        </div>
                                    </div>
                                @elseif ($formstep == 3)
                                    <div class="row gy-4">
                                        <div class="col-lg-12">
                                            <h6>Select subscription plan?<sup>*</sup></h6>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="row g-3">
                                                @foreach ($plan_list as $plan)
                                                    <div class="col-lg-3">
                                                        <div class="plancheck">
                                                            <input type="radio" wire:model.live="planData"
                                                                wire:change="getPrice" value="{{ $plan->id }}"
                                                                id="plan_{{ $plan->id }}" />
                                                            <label for="plan_{{ $plan->id }}">
                                                                {{ $plan->name }}
                                                            </label>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                @error('planData')
                                                    <div class="col-lg-12">
                                                        <small class="text-danger fw-bold">
                                                            *{{ $message }}
                                                        </small>
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        @if ($planData)
                                            <div class="col-lg-12">
                                                <h6>Select your dietary?<sup>*</sup></h6>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="row g-3">
                                                    <div class="col-lg-4">
                                                        <div class="plancheck">
                                                            <input type="radio" wire:model.live="dietary"
                                                                wire:change="getPrice" value="vegetarian"
                                                                id="vegetarian" />
                                                            <label for="vegetarian">Vegetarian</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="plancheck">
                                                            <input type="radio" wire:model.live="dietary"
                                                                wire:change="getPrice" value="nonvegetarian"
                                                                id="nonvegetarian" />
                                                            <label for="nonvegetarian">
                                                                Non Vegetarian
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="plancheck">
                                                            <input type="radio" wire:model.live="dietary"
                                                                wire:change="getPrice" value="eggetarian"
                                                                id="eggetarian" />
                                                            <label for="eggetarian">Eggetarian</label>
                                                        </div>
                                                    </div>
                                                    @error('dietary')
                                                        <div class="col-lg-12">
                                                            <small class="text-danger fw-bold">
                                                                *{{ $message }}
                                                            </small>
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            @if ($dietary)
                                                <div class="col-lg-12">
                                                    <h6>Select your meal type?<sup>*</sup></h6>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="row g-3">
                                                        <div class="col-lg-3">
                                                            <div class="plancheck">
                                                                <input type="checkbox" wire:model="mealtype"
                                                                    wire:change="getPrice" value="breakfast"
                                                                    id="breakfast" />
                                                                <label for="breakfast">Breakfast</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="plancheck">
                                                                <input type="checkbox" wire:model="mealtype"
                                                                    wire:change="getPrice" value="lunch"
                                                                    id="lunch" />
                                                                <label for="lunch">Lunch</label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="plancheck">
                                                                <input type="checkbox" wire:model="mealtype"
                                                                    wire:change="getPrice" value="snack"
                                                                    id="snack" />
                                                                <label for="snack">
                                                                    Evening Snack
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <div class="plancheck">
                                                                <input type="checkbox" wire:model="mealtype"
                                                                    wire:change="getPrice" value="dinner"
                                                                    id="dinner" />
                                                                <label for="dinner">Dinner</label>
                                                            </div>
                                                        </div>
                                                        @error('mealtype')
                                                            <div class="col-lg-12">
                                                                <small class="text-danger fw-bold">
                                                                    *{{ $message }}
                                                                </small>
                                                            </div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            @endif
                                        @endif
                                    </div>
                                    <div class="price_data">
                                        <i class="fas fa-rupee-sign"></i><span>{{ $totalprice }}</span>
                                    </div>
                                @elseif ($formstep == 4)
                                    <div class="row g-4">
                                        <div class="col-lg-12">
                                            <input type="text" class="form-control" wire:model="name"
                                                placeholder="Your Name" />
                                            @error('name')
                                                <small class="text-danger fw-bold">
                                                    *{{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="number" class="form-control" wire:model="phone"
                                                placeholder="Your Phone Number" />
                                            @error('phone')
                                                <small class="text-danger fw-bold">
                                                    *{{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="email" class="form-control" wire:model="email"
                                                placeholder="Your Email" />
                                            @error('email')
                                                <small class="text-danger fw-bold">
                                                    *{{ $message }}
                                                </small>
                                            @enderror
                                        </div>
                                    </div>
                                @elseif ($formstep == 5)
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <img src="{{ asset('frontend/img/check.png') }}"
                                                    class="img-fluid mb-2" width="100" alt="">
                                                <h4 class="text-bold text-dark mb-1">Congratulations!</h4>
                                                <p>
                                                    Your subscription request been successfully submitted.
                                                </p>
                                                <a type="button" href="{{ route('front.index') }}"
                                                    class="next-btn text-white">
                                                    Go to home<i class="fas fa-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                @if ($formstep != 5)
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <div class="text-center">
                                                <button type="submit" wire:click="submitForm"
                                                    wire:loading.attr="disabled" wire:target="submitForm"
                                                    class="next-btn">
                                                    <span wire:loading.remove wire:target="submitForm">
                                                        {{ $formstep == 4 ? 'Submit' : 'Next' }}
                                                        <i class="fas fa-arrow-right"></i>
                                                    </span>
                                                    <span wire:loading wire:target="submitForm">Loading...</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="foodprogress">
                            <div class="progress"
                                style="width: @if ($formstep == 1) 0%
                                    @elseif ($formstep == 2) 25%
                                    @elseif ($formstep == 3) 50%
                                    @elseif ($formstep == 4) 75%
                                    @elseif ($formstep == 5) 100% @endif">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 wow fadeInLeft">
                    <div class="card">
                        <div class="card-body">
                            <div class="bmi_calc">
                                <h4 class="title">
                                    Your BMI is
                                    <mark
                                        class="@if ($bmistatus == 'Underweight') text-warning @elseif ($bmistatus == 'Normal')
                                         text-success @elseif ($bmistatus == 'Overweight')
                                         text-warning @else text-danger @endif">
                                        {{ $bmistatus ? $bmistatus : 'NA' }}
                                    </mark>
                                </h4>
                                <h2 class="bmi">{{ $bmi }}</h2>
                                <div class="bmi_meter">
                                    <div class="progress
                                        @if ($bmi < 18.5) bg-warning
                                            @elseif ($bmi >= 18.5 && $bmi < 24.9) bg-success
                                            @elseif ($bmi >= 25 && $bmi < 29.9) bg-warning
                                            @else bg-danger @endif"
                                        role="progressbar" style="width: {{ $bmi }}%;"
                                        aria-valuenow="{{ $bmi }}" aria-valuemin="0" aria-valuemax="100">
                                    </div>
                                </div>
                                <p class="para">
                                    The body mass index(BMI) is a value derived from the mass(weight)
                                    and height of an individual
                                </p>
                            </div>
                            <div class="bmi_ent">
                                <div class="row align-items-center g-3">
                                    <div class="col-lg-3">
                                        <h6 class="label">Weight(kg):</h6>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="number" class="form-control" wire:model="bmiweight"
                                            placeholder="Enter Weight" />
                                        @error('bmiweight')
                                            <small class="text-danger fw-bold">
                                                *{{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-lg-3">
                                        <h6 class="label">Height(In):</h6>
                                    </div>
                                    <div class="col-lg-3">
                                        <input type="number" class="form-control" wire:model="bmiheight"
                                            placeholder="Enter Height" />
                                        @error('bmiheight')
                                            <small class="text-danger fw-bold">
                                                *{{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                    <div class="col-lg-12">
                                        <button class="calculate_btn" wire:click="calculateBMI"
                                            wire:loading.attr="disabled" wire:target="calculateBMI">
                                            <span wire:loading.remove wire:target="calculateBMI">
                                                Calculate<i class="fas fa-arrow-right"></i>
                                            </span>
                                            <span wire:loading wire:target="calculateBMI">Loading...</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="p-4 rounded shadow text-white text-center" style="background: linear-gradient(125deg, #105c01, #009245)">
            <h2 class="mb-3 fw-bold text-white">Need help choosing a plan?</h2>
            <a href="tel:+919876543210" class="btn btn-light btn-lg fw-bold">
                <i class="fas fa-phone-alt me-2"></i> Call Us
            </a>
        </div>
    </div>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-start">

                <!-- Left Column -->
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="text-start mb-4">
                        <h2 class="fw-bold text-success">Monthly Food Delivery Bangalore</h2>
                        <p class="lead">Our fresh and healthy food subscription is ideal for:</p>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-12 d-flex align-items-start">
                            <span class="me-3 text-success fs-4"><i class="fas fa-check-circle"></i></span>
                            <p class="mb-0">Busy professionals & students</p>
                        </div>
                        <div class="col-md-12 d-flex align-items-start">
                            <span class="me-3 text-success fs-4"><i class="fas fa-check-circle"></i></span>
                            <p class="mb-0">Gym-goers looking for protein meals</p>
                        </div>
                        <div class="col-md-12 d-flex align-items-start">
                            <span class="me-3 text-success fs-4"><i class="fas fa-check-circle"></i></span>
                            <p class="mb-0">Health-conscious families</p>
                        </div>
                        <div class="col-md-12 d-flex align-items-start">
                            <span class="me-3 text-success fs-4"><i class="fas fa-check-circle"></i></span>
                            <p class="mb-0">People on specific weight loss meal subscription Bangalore plans</p>
                        </div>
                        <div class="col-md-12 d-flex align-items-start">
                            <span class="me-3 text-success fs-4"><i class="fas fa-check-circle"></i></span>
                            <p class="mb-0">Anyone craving home-style, nutritious food</p>
                        </div>
                    </div>
                </div>

                <!-- Right Column -->
                <div class="col-lg-6">
                    <div class="text-start mb-4">
                        <h2 class="fw-bold text-success">What Makes Rasamrit the Best Meal Subscription in Bangalore?</h2>
                        <p class="lead">
                            Unlike generic meal delivery services, Rasamrit brings the warmth of a home kitchen with every tiffin.
                        </p>
                    </div>

                    <ul class="list-unstyled d-flex flex-column gap-3">
                        <li class="d-flex align-items-center">
                            <span class="text-primary fs-4 me-3"><i class="fas fa-user-md"></i></span>
                            <p class="mb-0">Designed by Certified Nutrition Experts</p>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="text-primary fs-4 me-3"><i class="fas fa-certificate"></i></span>
                            <p class="mb-0">FSSAI Licensed & 100% verified</p>
                        </li>
                        <li class="d-flex align-items-center">
                            <span class="text-primary fs-4 me-3"><i class="fas fa-users"></i></span>
                            <p class="mb-0">10,000+ Meals Delivered</p>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>




    @include('frontend.partials.why-choose')
    @include('frontend.partials.testimonial-section')
    @include('frontend.partials.faq-food-subscription')
    @include('frontend.partials.cta-section')
</div>
