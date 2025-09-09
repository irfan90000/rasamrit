@php
    $meals = [
        [
            "time" => "6:00 AM",
            "title" => "Detox Water",
            "desc"  => "Tulsi + Jira or Rose water or Cucumber + Mint",
               "image" => asset('frontend/image/detox-water-3.jpg'),
        ],
        [
            "time" => "7:30 AM",
            "title" => "Cold-Pressed Juice",
            "desc"  => "A different blend every day (e.g., Beetroot + Carrot + Apple)",
            "image" => asset('frontend/image/Cold-juice-3.jpg'),
        ],
        [
            "time" => "8:30 AM",
            "title" => "Fresh Salad",
            "desc"  => "7–8 exotic fruits, rich in fiber, vitamins & antioxidants",
              "image" => asset('frontend/image/fruit-bow--2.jpg'),
        ],
        [
            "time" => "9:30 AM",
            "title" => "Breakfast",
            "desc"  => "High protein oats meal, Poha or Egg sandwich – fully customisable",
           "image" => asset('frontend/image/breakfast-2.jpg'),
        ],
        [
            "time" => "11:00 AM",
            "title" => "Mid-Morning Snacks",
            "desc"  => "Freshly cut fruits or dry fruits (with Green Tea)",
              "image" => asset('frontend/image/mid-morning-.jpg'),
        ],
        [
            "time" => "1:00 PM",
            "title" => "Lunch + Detox Water ",
            "desc"  => "Calorie counted meal (Veg/Non-Veg)",
            "image" => asset('frontend/image/lunch.jpg'),
        ],
        [
            "time" => "4:30 PM",
            "title" => "Snacks + Green Tea",
            "desc"  => "Light evening snacks with detox tea",
              "image" => asset('frontend/image/green-snacks.jpeg'),
        ],
        [
            "time" => "7:00 PM",
            "title" => "Dinner + Detox Water",
            "desc"  => "Calorie counted meal as per request",
             "image" => asset('frontend/image/dinner.jpg'),
        ],
    ];
@endphp
<section style="background-color: #f5f5f5;">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-green">A Day at Rasamrit – Your Daily Nutrition, Fully Managed</h2>
            <p class="lead text-muted">From morning detox to dinner done right, we take care of everything.</p>
        </div>

        <div class="row g-4 py-2">
            @foreach($meals as $meal)
                <div class="col-12 col-sm-6 col-lg-3 ">
                    <div class="shadow-sm border-0 rounded-4 h-100 p-2 bg-white">
                        <div class="row g-0 align-items-center h-100">
                            <div class="col-5">
                                <img src="{{ $meal['image'] }}" class="img-fluid  rounded-4 w-100 " style="height: 140px; object-fit: cover" alt="{{ $meal['title'] }}">
                            </div>
                            <div class="col-7">
                                <div class="p-2">
                                    <small class="fw-bold d-block text-dark">{{ $meal['time'] }}</small>
                                    <h6 class="fw-bold text-green mb-1">{{ $meal['title'] }}</h6>
                                    <p class="small text-muted mb-0">{{ $meal['desc'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Break row every 4 cards --}}
                @if(($loop->iteration % 4) == 0)
        </div><div class="row g-4 py-2">
            @endif
            @endforeach
        </div>
    </div>
</section>


<style>

    .text-green{
        color: #197241;


    }

</style>