<div>
    @section('title', $page_title)
    @section('description', $description)
    <div class="breadchrumb">
        <div class="container-fluid">
            <h4 class="title">Program Pricing</h4>
            <p class="sub-title">Transform Into the Best Version of Yourself!</p>
        </div>
    </div>
    <div class="section-padding bg-white">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-lg-5 wow fadeInLeft">
                    <h5 class="fw-bold mb-0">Our Program Pricing</h5>
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
                                                   for="breakfast">Lose Weight</label>
                                            <input type="checkbox" value="breakfast" id="breakfast"
                                                   wire:model="mealpref" hidden wire:change="updatePrice()">
                                        </div>
                                        <div class="col-lg-6 col-6">
                                            <label class="chip {{ in_array('lunch', $mealpref) ? 'active' : '' }}"
                                                   for="lunch">Diabetes Management</label>
                                            <input type="checkbox" value="lunch" id="lunch" wire:model="mealpref"
                                                   hidden wire:change="updatePrice()">
                                        </div>
                                        <div class="col-lg-3 col-6">
                                            <label class="chip {{ in_array('snack', $mealpref) ? 'active' : '' }}"
                                                   for="snack">Gain Muscle</label>
                                            <input type="checkbox" value="snack" id="snack" wire:model="mealpref"
                                                   hidden wire:change="updatePrice()">
                                        </div>
{{--                                        <div class="col-lg-3 col-6">--}}
{{--                                            <label class="chip {{ in_array('dinner', $mealpref) ? 'active' : '' }}"--}}
{{--                                                   for="dinner">Dinner</label>--}}
{{--                                            <input type="checkbox" value="dinner" id="dinner" wire:model="mealpref"--}}
{{--                                                   hidden wire:change="updatePrice()">--}}
{{--                                        </div>--}}
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
                                                <a href="{{ route('front.subscription') }}" type="button"
                                                   class="subs_btn">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
