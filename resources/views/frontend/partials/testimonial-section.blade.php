
<section class="cover_bg">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-5 wow fadeInLeft">
                <h5 class="mb-3 text-success fw-bold">
                    Look How Our Customers Achieved Their Health Goals with
                    <mark class="highlight">{{ config('app.name') }}</mark>
                </h5>
                <p class="m-0 text-dark">
                    We stand by our commitment to delivering results. Your transformation is our priority, and we guide
                    you through a journey of weight loss that's not only effective but also enjoyable every step of the
                    way.
                </p>
            </div>
            <div class="col-lg-7 wow fadeInUp">
                <div class="owl-carousel testimonial-carousel">
                    @foreach ($testimonial_list as $testimonial)
                        <div class="testimonial-item">
                            <p class="title">
                                {{ $testimonial->description }}
                            </p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle"
                                     alt="" src="{{ asset('storage/testimonial/' . $testimonial->image) }}"
                                     style="width: 40px; height: 40px; object-fit:cover">
                                <div class="ps-3">
                                    <h6 class="mb-0">{{ $testimonial->name }}</h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
