{{-- resources/views/components/trust-elements.blade.php --}}
<div class="container py-5">
    <h2 class="text-center mb-4">Why Trust Us?</h2>

    <div class="row g-4">
        @php
            $trustElements = [
                ['icon' => 'bi-house-heart', 'title' => '100% Homemade Food Delivery'],
                ['icon' => 'bi-ban', 'title' => 'Zero White Sugar, Salt, or Refined Oils'],
                ['icon' => 'bi-egg-fried', 'title' => 'Freshly Cooked Per Order'],
                ['icon' => 'bi-box-seam', 'title' => 'Plastic-Free Packaging'],
                ['icon' => 'bi-graph-down-arrow', 'title' => 'Guaranteed Weight Loss Meal Subscription'],
            ];
        @endphp

        @foreach ($trustElements as $element)
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card text-center h-100 border-0 shadow-sm hover-zoom">
                    <div class="card-body">
                        <div class="mb-3 text-primary fs-1">
                            <i class="bi {{ $element['icon'] }}"></i>
                        </div>
                        <h6 class="card-title">{{ $element['title'] }}</h6>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

{{-- Inline style or move to app.css --}}
<style>
    .hover-zoom {
        transition: transform 0.3s ease-in-out;
    }
    .hover-zoom:hover {
        transform: scale(1.05);
    }
</style>
