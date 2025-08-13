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