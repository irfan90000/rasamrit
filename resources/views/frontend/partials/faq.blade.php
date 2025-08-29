{{--<section class="py-5" id="faq">--}}
{{--    <div class="container">--}}
{{--        <div class="row align-items-center">--}}
{{--            <!-- Left Column: Centered Heading -->--}}
{{--            <div class="col-md-6 d-flex flex-column justify-content-center text-center mb-4 mb-md-0">--}}
{{--                <h2 class="fw-bold text-success">Frequently Asked Questions</h2>--}}
{{--                <p class="text-muted">Got Questions? We Have the Answers…</p>--}}
{{--            </div>--}}

{{--            <!-- Right Column: Accordion -->--}}
{{--            <div class="col-md-6">--}}
{{--                <div class="accordion" id="faqAccordion">--}}
{{--                    @php--}}
{{--                        $faqs = [--}}
{{--                            ['q' => 'Is meal delivery healthy?', 'a' => 'It depends on where you are ordering from. At Rasamrit, absolutely yes. Our meals are dietitian-approved, made fresh daily with whole ingredients, and tailored to your specific health goals.'],--}}
{{--                            ['q' => 'Are home-cooked meals healthy?', 'a' => 'Yes, our in-house chefs cook using home-style methods with no processed junk.'],--}}
{{--                            ['q' => 'Are the meals actually cooked at home?', 'a' => 'Yes! Every dish is freshly cooked in-house, just like your mom would make it.'],--}}
{{--                            ['q' => 'Can I change my meal plan midweek?', 'a' => 'Yes. Just call your dedicated nutritionist and they’ll update your plan.'],--}}
{{--                            ['q' => 'What if I don’t see results?', 'a' => 'If you follow our plan and still see no results, we offer a full refund.'],--}}
{{--                            ['q' => 'Is Rasamrit suitable for diabetics or PCOS?', 'a' => 'Absolutely. We design custom plans based on health conditions.'],--}}
{{--                        ];--}}
{{--                    @endphp--}}

{{--                    @foreach ($faqs as $index => $faq)--}}
{{--                        <div class="accordion-item border-0 mb-2">--}}
{{--                            <h2 class="accordion-header" id="heading{{ $index }}">--}}
{{--                                <button class="accordion-button collapsed fw-bold"--}}
{{--                                        type="button"--}}
{{--                                        data-bs-toggle="collapse"--}}
{{--                                        data-bs-target="#collapse{{ $index }}"--}}
{{--                                        aria-expanded="false"--}}
{{--                                        aria-controls="collapse{{ $index }}"--}}
{{--                                        style="background-color: #E8FCEF; color: #065f46; border: none; box-shadow: none; outline: none;">--}}
{{--                                    {{ $faq['q'] }}--}}
{{--                                </button>--}}

{{--                            </h2>--}}
{{--                            <div id="collapse{{ $index }}" class="accordion-collapse  collapse fw-semibold" aria-labelledby="heading{{ $index }}" data-bs-parent="#faqAccordion">--}}
{{--                                <div class="accordion-body"--}}
{{--                                     style="background-color: #E8FCEF; color: #065f46;">--}}
{{--                                    {{ $faq['a'] }}--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <!-- CTA Section -->--}}

{{--    </div>--}}
{{--</section>--}}







<section class="section-padding bg-white">
    <div class="container">
        <div class="text-center wow fadeInUp">
            <h1 class="section-intro-title">#FAQ's</h1>
            <h5 class="section-title">Got Questions? We Have the Answers</h5>
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
                                <h2 class="accordion-header" id="heading_{{ $faq->id }}">
                                    <a href="javascript:void(0);" class="accordion-button collapsed"
                                       style="padding-left: 6px; padding-right: 6px;"
                                        data-bs-toggle="collapse" data-bs-target="#collapse_{{ $faq->id }}"
                                        aria-expanded="false" aria-controls="collapse_{{ $faq->id }}">
                                        {{ $faq->title }}
                                    </a>
                                </h2>
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