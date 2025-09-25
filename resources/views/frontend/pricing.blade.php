
<section>
    @section('title', $page_title)
    @section('description', $description)
    <div class="breadchrumb" style="height: 50vh; ">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6 text-center">
                    <h1 class="title-pricing text-center fw-bold slideInLeft animated">Home-Cooked Food Delivery in Bangalore - Rasamrit Meal Plans</h1>
                    <p class="sub-title1 mt-1">Enjoy delicious, homemade food delivered straight to your doorstep with Rasamrit,
                        the trusted choice for home-cooked food delivery in Bangalore.</p>
                </div>
            </div>
        </div>
{{--        <div class="container-fluid">--}}
{{--            <h1 class="title-pricing text-center fw-bold">Home-Cooked Food Delivery in Bangalore - Rasamrit Meal Plans</h1>--}}
{{--            <p class="sub-title1 mt-1">Enjoy delicious, homemade food delivered straight to your doorstep with Rasamrit, <br>--}}
{{--                the trusted choice for home-cooked food delivery in Bangalore.</p>--}}
{{--        </div>--}}
    </div>
    <div class="section-padding" style="background-color: #f5f5f5">
        <div class="container" >
            <div class="row g-4 align-items-center " >
                <div class="col-lg-5 wow fadeInLeft">
                    <h2 class="fw-bold mb-0">Meal Preferences and Customization</h2>
                    <p class="">We understand that every customer has unique food preferences.
                        With Rasamrit, you can fully customize your plan:</p>
                </div>
                <div class="col-lg-7 wow fadeInUp">
                    <div class="card filter_card">
                        <div class="card-body">
                            <div class="row g-3 align-items-center">
                                <div class="col-lg-3">
                                    <p class="mb-0 fw-bold">Meal Preferences:</p>
                                </div>
                                <div class="col-lg-9">
                                    <div class="row g-2">
                                        <div class="col-lg-3 col-6">
                                            <label class="chip {{ in_array('breakfast', $mealpref) ? 'active' : '' }}"
                                                for="breakfast">Breakfast</label>
                                            <input type="checkbox" value="breakfast" id="breakfast"
                                                wire:model="mealpref" hidden wire:change="updatePrice()">
                                        </div>
                                        <div class="col-lg-3 col-6">
                                            <label class="chip {{ in_array('lunch', $mealpref) ? 'active' : '' }}"
                                                for="lunch">Lunch</label>
                                            <input type="checkbox" value="lunch" id="lunch" wire:model="mealpref"
                                                hidden wire:change="updatePrice()">
                                        </div>
                                        <div class="col-lg-3 col-6">
                                            <label class="chip {{ in_array('snack', $mealpref) ? 'active' : '' }}"
                                                for="snack">Snack</label>
                                            <input type="checkbox" value="snack" id="snack" wire:model="mealpref"
                                                hidden wire:change="updatePrice()">
                                        </div>
                                        <div class="col-lg-3 col-6">
                                            <label class="chip {{ in_array('dinner', $mealpref) ? 'active' : '' }}"
                                                for="dinner">Dinner</label>
                                            <input type="checkbox" value="dinner" id="dinner" wire:model="mealpref"
                                                hidden wire:change="updatePrice()">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <p class="mb-0 fw-bold">Meal Type:</p>
                                </div>
                                <div class="col-lg-9">
                                    <div class="row g-2">
                                        <div class="col-4">
                                            <label class="chip {{ $dietary == 'veg' ? 'active' : '' }}"
                                                for="veg">Veg</label>
                                            <input type="radio" value="veg" id="veg" wire:model="dietary"
                                                hidden wire:change="updatePrice()">
                                        </div>
                                        <div class="col-4">
                                            <label class="chip {{ $dietary == 'nonveg' ? 'active' : '' }}"
                                                for="nonveg">Nonveg</label>
                                            <input type="radio" value="nonveg" id="nonveg" wire:model="dietary"
                                                hidden wire:change="updatePrice()">
                                        </div>
                                        <div class="col-4">
                                            <label class="chip {{ $dietary == 'egg' ? 'active' : '' }}"
                                                for="egg">Egg</label>
                                            <input type="radio" value="egg" id="egg" wire:model="dietary"
                                                hidden wire:change="updatePrice()">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <p class="mb-0 fw-bold">Goal Type:</p>
                                </div>
                                <div class="col-lg-9">
                                    <select class="custom_select form-select" wire:model="goal" wire:change="updatePrice()">
                                        @foreach ($goal_list as $goal)
                                            <option value="{{ $goal->id }}">{{ $goal->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row g-4 align-items-center">
                <div class="col-lg-12">
                    <div class="row g-3 mt-lg-4 wow fadeInUp">
                        @foreach ($plan_list as $plan)
                            <div class="col-lg-3">
                                <div class="card plan_card">
                                    <div class="card-body">
                                        <div class="row g-1">
                                            <div class="col-6">
                                                <span class="name">{{ $plan->name }}</span>
                                            </div>
                                            <div class="col-6 text-end">
                                                <span class="day">{{ $plan->days }} Days</span>
                                            </div>
                                            <div class="col-lg-12">
                                                <span class="icon"><i class="fas fa-rupee-sign"></i></span>
                                                <span class="meal_price">
                                {{ number_format($mealprice[$plan->id], 2) }}
                                <small>/Day</small>
                            </span>
                                            </div>
                                            <div class="col-lg-12">
                                                <span class="icon"><i class="fas fa-rupee-sign"></i></span>
                                                <span class="total_price">
                                {{ number_format($totalprice[$plan->id], 2) }}
                            </span>
                                                @if ($plan->discount)
                                                    <span class="icon"><i class="fas fa-rupee-sign"></i></span>
                                                    <span class="actual_price">
                                    {{ number_format($actualprice[$plan->id], 2) }}
                                </span>
                                                @endif
                                            </div>
                                            <div class="col-lg-12">
                                                <span class="icon"><i class="fas fa-utensils"></i></span>
                                                <span class="meal">{{ $totalmeal[$plan->id] }} meals</span>
                                            </div>
                                            <div class="col-lg-12">
                                                <a href="{{ route('front.subscription') }}" type="button" class="subs_btn">
                                                    Subscribe Now <span><i class="fas fa-arrow-right"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @if ($plan->discount)
                                        <div class="discount">
                                            Save {{ $plan->discount }}%
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach

                        {{-- Fourth hard-coded card --}}
                        <div class="col-lg-3">
                            <div class="card plan_card">
                                <div class="card-body">
                                    <div class="row g-1">
                                        <div class="col-6">
                                            <span class="name">Special Plan</span>
                                        </div>
                                        <div class="col-6 text-end">
                                            <span class="day">30 Days</span>
                                        </div>
                                        <div class="col-lg-12">
                                            <span class="icon"><i class="fas fa-rupee-sign"></i></span>
                                            <span class="meal_price">250.00 <small>/Day</small></span>
                                        </div>
                                        <div class="col-lg-12">
                                            <span class="icon"><i class="fas fa-rupee-sign"></i></span>
                                            <span class="total_price">7500.00</span>
                                            <span class="icon"><i class="fas fa-rupee-sign"></i></span>
                                            <span class="actual_price">9000.00</span>
                                        </div>
                                        <div class="col-lg-12">
                                            <span class="icon"><i class="fas fa-utensils"></i></span>
                                            <span class="meal">90 meals</span>
                                        </div>
                                        <div class="col-lg-12">
                                            <a href="{{ route('front.subscription') }}" type="button" class="subs_btn">
                                                Subscribe Now <span><i class="fas fa-arrow-right"></i></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="discount">
                                    Save 20%
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            @include('frontend.partials.why-choose')
            <div class="row g-4 align-items-center mt-2">
                <div class="col-12">
                    <h2 class="text-center text-success fw-bold">Delivery Areas in Bangalore</h2>
                    <p class="mt-0 text-center">
                        We currently deliver across major areas in Bengaluru, including Koramangala,
                        Whitefield, Indiranagar, HSR Layout, Jayanagar, and more.
                    </p>
                    <h6 class="mt-0 text-center text-danger fw-bold">
                        Do we serve your area? Contact us or WhatsApp us to confirm delivery availability.
                    </h6>
                </div>

                <div class="col-12 text-center">
                    <a href="tel:+917204490402"
                       class="fw-semibold px-5 py-2 rounded-pill border-0 subs_btn animated slideInLeft"
                       style="background: linear-gradient(125deg, #105c01, #009245); text-decoration: none; color: #fff;">
                        Call Us Now
                    </a>
                </div>
            </div>

            @include('frontend.partials.Delivery-area')
            @include('frontend.partials.testimonial-section')
            @include('frontend.partials.faq-pricing-plans')

            </div>

        </div>
          @include('frontend.partials.cte-pricing')
    </section>

