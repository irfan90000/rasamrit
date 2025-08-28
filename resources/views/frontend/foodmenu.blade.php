@extends('frontend.layout.app')
@section('content')
@section('title', $page_title)
@section('description', $description)
<div class="breadchrumb" style="height: 50vh;">
    <div class="container-fluid">
        <h1 class="text-success text-center fw-bold">Healthy Food Online – Weekly Meal Menu by Rasamrit</h1>
        <p class="text-center text-dark">
            Discover Rasamrit's freshly curated healthy food Bangalore online menu with meals crafted for every lifestyle,
            from vegetarian comfort to low-carb and ketogenic meal boxes.</p>
    </div>
</div>

<section class="section-padding1 bg-white">
    <div class="container">
        <h6 class="text-center text-dark m-0 pt-lg-5 pt-3 pb-3">
            NOTE: This is just a 7 days sample menu, your menu will be totally customised
            from over 250+ options. <br>To check our complete diet plan
            <a href="{{route('front.allmenu')}}" class="text-info">Click Here</a>
        </h6>
        @foreach ($diet_list as $key => $diet)
            @if ($diet->getFood->count() > 0)
                <div class="food_menu_area">
                    <div class="text-center wow fadeInUp">
                        <h1 class="into-title mb-2 text-success">#{{ $diet->name }}</h1>
                        <p class="text-dark text-center">Flavorful and balanced vegetarian meals are prepared fresh for every weekday.</p>
                    </div>
                    @foreach ($diet->getFood as $food)
                        <div class="text-center wow fadeInUp">

                            <h4 class="intro_subtitle mb-2">
                                {{ match ($food->dietary) {
                                    'vegetarian' => 'Veg Food',
                                    'nonvegetarian' => 'Nonveg Food',
                                    default => 'Egg Food',
                                } }}
                            </h4>
                            <p class="text-dark mt-0 text-center">All vegetarian meals are made with fresh organic vegetables and home-style recipes.</p>
                        </div>
                        <div class="tab-class text-center wow fadeInUp">
                            <ul class="nav nav-pills food_menu">
                                @for ($i = 1; $i <= 7; $i++)
                                    <li class="nav-item">
                                        <a class="{{ $i == 1 ? 'active' : '' }}" data-bs-toggle="pill"
                                            href="#{{ getDay($i) }}_{{ $food->dietary }}_{{ $key }}">
                                            <h6 class="day">
                                                <i class="fas fa-utensils"></i>
                                                <span>{{ getDay($i) }}</span>
                                            </h6>
                                        </a>
                                    </li>
                                @endfor
                            </ul>

                            <div class="tab-content">
                                @for ($i = 1; $i <= 7; $i++)
                                    <div id="{{ getDay($i) }}_{{ $food->dietary }}_{{ $key }}"
                                        class="tab-pane fade show p-0 {{ $i == 1 ? 'active' : '' }}">
                                        <div class="row g-3">
                                            <div class="col-lg-3 col-6">
                                                <h6 class="type">Breakfast</h6>
                                                <div class="menu_item_card">
                                                    <div class="menu_item_inner">
                                                        <div class="menu_item">
                                                            <img class="img-fluid"
                                                                src="{{ match ($food->dietary) {
                                                                    'vegetarian' => asset('frontend/img/veg.jpg'),
                                                                    'nonvegetarian' => asset('frontend/img/nonveg.jpg'),
                                                                    default => asset('frontend/img/egg.jpg'),
                                                                } }}"
                                                                alt="">
                                                            <h6 class="food">
                                                                {{ $food->menu['breakfast'][$i]['name'] }}
                                                            </h6>
                                                        </div>
                                                        <div class="menu_desc">
                                                            <p>
                                                                {{ $food->menu['breakfast'][$i]['description'] }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-6">
                                                <h6 class="type">Lunch</h6>
                                                <div class="menu_item_card">
                                                    <div class="menu_item_inner">
                                                        <div class="menu_item">
                                                            <img class="img-fluid"
                                                                src="{{ match ($food->dietary) {
                                                                    'vegetarian' => asset('frontend/img/veg.jpg'),
                                                                    'nonvegetarian' => asset('frontend/img/nonveg.jpg'),
                                                                    default => asset('frontend/img/egg.jpg'),
                                                                } }}"
                                                                alt="">
                                                            <h6 class="food">{{ $food->menu['lunch'][$i]['name'] }}
                                                            </h6>
                                                        </div>
                                                        <div class="menu_desc">
                                                            <p>
                                                                {{ $food->menu['lunch'][$i]['description'] }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-6">
                                                <h6 class="type">Evening Snack</h6>
                                                <div class="menu_item_card">
                                                    <div class="menu_item_inner">
                                                        <div class="menu_item">
                                                            <img class="img-fluid"
                                                                src="{{ match ($food->dietary) {
                                                                    'vegetarian' => asset('frontend/img/veg.jpg'),
                                                                    'nonvegetarian' => asset('frontend/img/nonveg.jpg'),
                                                                    default => asset('frontend/img/egg.jpg'),
                                                                } }}"
                                                                alt="">
                                                            <h6 class="food">{{ $food->menu['snack'][$i]['name'] }}
                                                            </h6>
                                                        </div>
                                                        <div class="menu_desc">
                                                            <p>
                                                                {{ $food->menu['snack'][$i]['description'] }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-6">
                                                <h6 class="type">Dinner</h6>
                                                <div class="menu_item_card">
                                                    <div class="menu_item_inner">
                                                        <div class="menu_item">
                                                            <img class="img-fluid"
                                                                src="{{ match ($food->dietary) {
                                                                    'vegetarian' => asset('frontend/img/veg.jpg'),
                                                                    'nonvegetarian' => asset('frontend/img/nonveg.jpg'),
                                                                    default => asset('frontend/img/egg.jpg'),
                                                                } }}"
                                                                alt="">
                                                            <h6 class="food">{{ $food->menu['dinner'][$i]['name'] }}
                                                            </h6>
                                                        </div>
                                                        <div class="menu_desc">
                                                            <p>
                                                                {{ $food->menu['dinner'][$i]['description'] }}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        @endforeach
    </div>
</section>
@endsection
