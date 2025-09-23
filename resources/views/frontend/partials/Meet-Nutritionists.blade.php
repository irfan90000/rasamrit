<!-- Nutritionists Section -->
<section class="py-5 main-banner-about">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold text-green">Meet Your Nutritionists & Trainers</h2>
            <p class="text-muted">Work 1:1 with our expert in-house team</p>
        </div>

        @php
            $experts = [
                ['name' => 'Nilesh Shah', 'image' => asset('frontend/image/Doctor-1.jpg'), 'linkedin' => '#'],
                ['name' => 'Dr. Anjali Kapoor', 'image' => asset('frontend/image/Doctor-2.jpg'), 'linkedin' => '#'],
                ['name' => 'Ritika Sen', 'image' => asset('frontend/image/Doctor-33.jpg'), 'linkedin' => '#'],
                ['name' => 'Amit Verma', 'image' => asset('frontend/image/Doctor-4.jpg'), 'linkedin' => '#'],
                ['name' => 'Sneha Gupta', 'image' => asset('frontend/image/Doctor-555.jpg'), 'linkedin' => '#'],
                ['name' => 'Rahul Khanna', 'image' => asset('frontend/image/Doctor-6.jpg'), 'linkedin' => '#'],

            ];
        @endphp

        <div id="expertsCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                @foreach ($experts as $index => $expert)
                    @if ($index % 3 == 0)
                        <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                            <div class="row justify-content-center g-4">
                                @endif

                                <div class="col-md-4">
                                    <div class="card h-100 border-0 shadow-sm text-center">
                                        <img src="{{ $expert['image'] }}" alt="{{ $expert['name'] }}" class="card-img-top img-fluid rounded-top" style="height: 400px; object-fit: cover;">
                                        <div class="card-body" style="background-color: #f5f5f5">
                                            <h5 class="fw-bold text-black mb-1">{{ $expert['name'] }}</h5>
                                            <a href="{{ $expert['linkedin'] }}" target="_blank" class="text-green small">View LinkedIn</a>
                                        </div>
                                    </div>
                                </div>

                                @if ($index % 3 == 2 || $loop->last)
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#expertsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#expertsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

        <div class="text-center mt-5">
            <a href="#" class="fw-semibold px-4 py-2 rounded-pill border-0 subs_btn animated slideInLeft">
                Chat With an Expert Now
            </a>
        </div>
    </div>
</section>

<!-- Auto-slide interval -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const carousel = document.querySelector('#expertsCarousel');
        if (carousel) {
            new bootstrap.Carousel(carousel, {
                interval: 3000, // slide every 3 seconds
                ride: 'carousel',
                pause: false, // keep sliding even on hover
                wrap: true    // infinite loop
            });
        }
    });
</script>
<style>
    .text-green{
        color: #197241;
    }
    .main-banner-about {
        background-image: url("{{ asset('frontend/image/bg-banner.jpg') }}");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        padding: 60px 0;
        height: auto;
    }
</style>