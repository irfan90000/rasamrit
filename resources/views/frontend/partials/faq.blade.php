<section class="section-padding bg-white">
    <div class="container">
        <div class="text-center wow fadeInUp">
            <h2 class="section-intro-title">#FAQ's</h2>
            <p class="section-title">Got Questions? We Have the Answers</p>
        </div>
        <div class="row g-4 align-items-center">
            <div class="col-lg-5">
                <div class="row g-3">
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded rounded-3 w-100 wow zoomIn"
                             alt="" src="{{ asset('frontend/img/about-1.jpg') }}">
                    </div>
                    <div class="col-6 text-start">
                        <img class="img-fluid rounded rounded-3 w-75 wow zoomIn"
                             alt="" src="{{ asset('frontend/img/about-2.jpg') }}" style="margin-top: 25%;">
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="faq-info wow fadeInUp">
                    <div class="accordion" id="faq-details">
                        @foreach ($faq_list as $faq)
                            <div class="accordion-item">
                                <p class="accordion-header" id="heading_{{ $faq->id }}">
                                    <a href="javascript:void(0);" class="accordion-button collapsed"
                                       style="padding-left: 6px; padding-right: 6px;"
                                        data-bs-toggle="collapse" data-bs-target="#collapse_{{ $faq->id }}"
                                        aria-expanded="false" aria-controls="collapse_{{ $faq->id }}">
                                        {{ $faq->title }}
                                    </a>
                                </p>
                                <div id="collapse_{{ $faq->id }}" class="accordion-collapse collapse"
                                    aria-labelledby="{{ $faq->id }}" data-bs-parent="#faq-details"
                                    style="">
                                    <div class="accordion-body">
                                        <div class="accordion-content">
                                            <p>
                                                {{ $faq->description }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


