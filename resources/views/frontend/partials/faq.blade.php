<section class="py-5" id="faq">
    <div class="container">
        <div class="row align-items-center">
            <!-- Left Column: Centered Heading -->
            <div class="col-md-6 d-flex flex-column justify-content-center text-center mb-4 mb-md-0">
                <h2 class="fw-bold text-success">Frequently Asked Questions</h2>
                <p class="text-muted">Got Questions? We Have the Answers…</p>
            </div>

            <!-- Right Column: Accordion -->
            <div class="col-md-6">
                <div class="accordion" id="faqAccordion">
                    @php
                        $faqs = [
                            ['q' => 'Is meal delivery healthy?', 'a' => 'It depends on where you are ordering from. At Rasamrit, absolutely yes. Our meals are dietitian-approved, made fresh daily with whole ingredients, and tailored to your specific health goals.'],
                            ['q' => 'Are home-cooked meals healthy?', 'a' => 'Yes, our in-house chefs cook using home-style methods with no processed junk.'],
                            ['q' => 'Are the meals actually cooked at home?', 'a' => 'Yes! Every dish is freshly cooked in-house, just like your mom would make it.'],
                            ['q' => 'Can I change my meal plan midweek?', 'a' => 'Yes. Just call your dedicated nutritionist and they’ll update your plan.'],
                            ['q' => 'What if I don’t see results?', 'a' => 'If you follow our plan and still see no results, we offer a full refund.'],
                            ['q' => 'Is Rasamrit suitable for diabetics or PCOS?', 'a' => 'Absolutely. We design custom plans based on health conditions.'],
                        ];
                    @endphp

                    @foreach ($faqs as $index => $faq)
                        <div class="accordion-item border-0 mb-2">
                            <h2 class="accordion-header" id="heading{{ $index }}">
                                <button class="accordion-button collapsed fw-bold"
                                        type="button"
                                        data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $index }}"
                                        aria-expanded="false"
                                        aria-controls="collapse{{ $index }}"
                                        style="background-color: #E8FCEF; color: #065f46; border: none; box-shadow: none; outline: none;">
                                    {{ $faq['q'] }}
                                </button>

                            </h2>
                            <div id="collapse{{ $index }}" class="accordion-collapse collapse fw-semibold" aria-labelledby="heading{{ $index }}" data-bs-parent="#faqAccordion">
                                <div class="accordion-body"
                                     style="background-color: #d1fae5; color: #065f46;">
                                    {{ $faq['a'] }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- CTA Section -->
{{--        <div class="text-center mt-5">--}}
{{--            <h3 class="fw-bold text-success mb-3">Feel the Difference with Every Bite</h3>--}}
{{--            <p class="text-muted mb-4">--}}
{{--                Book a free call with our certified nutritionist and start your transformation today.--}}
{{--            </p>--}}
{{--            <a href="#contact" class="btn btn-success btn-lg px-4">Book Free Call</a>--}}
{{--        </div>--}}
    </div>
</section>
