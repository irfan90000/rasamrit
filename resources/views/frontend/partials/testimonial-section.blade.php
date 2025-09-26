
<section class="cover_bg">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-5 wow fadeInLeft">
                <p class="mb-3 test-test fw-bold">
                    Look How Our Customers Achieved Their Health Goals with
                    <mark class="highlight">{{ config('app.name') }}</mark>
                </p>
                <p class="m-0 text-dark">
                    We stand by our commitment to delivering results. Your transformation is our priority, and we guide
                    you through a journey of weight loss that's not only effective but also enjoyable every step of the
                    way.
                </p>
            </div>
            <div class="col-lg-7 wow fadeInUp">
                <div class="owl-carousel testimonial-carousel">
                    @foreach ($testimonial_list as $testimonial)
                        <div class="testimonial-item" style="background-color: #c3f1d5">
                            <p class="title">
                                {{ $testimonial->description }}
                            </p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded-circle text-green"
                                     alt="" src="{{ asset('storage/testimonial/' . $testimonial->image) }}"
                                     style="width: 40px; height: 40px; object-fit:cover">
                                <div class="ps-3">
                                    <p class="mb-0 text-test">{{ $testimonial->name }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .text-test{
        color: #197241;
        font-size: 15px;
        font-family: "Poppins", serif;
        font-weight: 500;

        line-height: 1.5;
    }
    .test-test{
      font-size: 1.25rem;
        font-family: "Poppins", serif;
        color: #197241 !important;
        line-height: 1.5;
    }
</style>