<section>
    <div class="container">
        <div class="text-center wow fadeInUp">
            <h2 class="section-intro-title">#FAQ's</h2>
            <p class="section-title">Got Questions? We Have the Answers</p>
        </div>

        @php
            $faqs = [
                ['q' => 'What is the price of a monthly tiffin service in Bangalore?', 'a' => 'Rasamrit plans start as low as ₹70 per day and go up based on the meal plan and duration. Choose from 3-day, 14-day, or 30-day packages.'],
                ['q' => 'Do you offer both veg and non-veg meals?', 'a' => 'Yes! Rasamrit provides healthy and hygienic veg and non-veg options across all plans.'],
                ['q' => 'How do I subscribe to a meal plan?', 'a' => 'Simply choose your plan, fill out the form on our Contact or Pricing page, and our team will confirm your subscription.'],
                ['q' => 'Is food freshly cooked every day?', 'a' => 'Yes, all our meals are prepared fresh daily using quality ingredients, no preservatives, and no reheating.'],
                ['q' => 'Which is the best home meal delivery service?', 'a' => 'Rasamrit is one of the best home meal delivery services, offering healthy, home-cooked veg and non-veg tiffins in Bangalore. With flexible plans and daily fresh meals, it’s ideal for students, professionals, and families.'],
                ['q' => 'How to order home food in Bangalore?', 'a' => 'To order home-cooked food in Bangalore, visit rasamrit.online, choose a meal plan, and fill out the contact form. You’ll get fresh, daily tiffin service at your doorstep with flexible subscription options.'],
                ['q' => 'What is the most ordered food in Bangalore?', 'a' => 'In Bangalore, the most ordered food includes biryani, masala dosa, paneer dishes, and thali meals. Among health-conscious consumers, simple home-style meals like dal, rice, sabzi, and roti are increasingly popular.'],
            ];
        @endphp

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
                        @foreach ($faqs as $index => $faq)
                            <div class="accordion-item">
                                <span class="text-faq-price accordion-header" id="heading_{{ $index }}">
                                    <a href="javascript:void(0);"
                                       class="accordion-button collapsed"
                                       style="padding-left: 6px; padding-right: 6px;"
                                       data-bs-toggle="collapse"
                                       data-bs-target="#collapse_{{ $index }}"
                                       aria-expanded="false"
                                       aria-controls="collapse_{{ $index }}">
                                        {{ $faq['q'] }}
                                    </a>
                                </span>
                                <div id="collapse_{{ $index }}"
                                     class="accordion-collapse collapse"
                                     aria-labelledby="heading_{{ $index }}"
                                     data-bs-parent="#faq-details">
                                    <div class="accordion-body">
                                        <div class="accordion-content">
                                            <p>{{ $faq['a'] }}</p>
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

<style>
    .text-faq-price{
        font-family: "Poppins", serif;
        font-weight: 500;
        color: #333;
        line-height: 1.5;
        font-size: 2rem;
    }
</style>



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

{{--                            ['q' => 'What is the price of a monthly tiffin service in Bangalore?', 'a' => 'Rasamrit plans start as low as ₹70 per day and go up based on the meal plan and duration. Choose from 3-day, 14-day, or 30-day packages.'],--}}
{{--                            ['q' => 'Do you offer both veg and non-veg meals?', 'a' => 'Yes! Rasamrit provides healthy and hygienic veg and non-veg options across all plans.'],--}}
{{--                            ['q' => 'How do I subscribe to a meal plan?', 'a' => 'Simply choose your plan, fill out the form on our Contact or Pricing page, and our team will confirm your subscription.'],--}}
{{--                            ['q' => 'Is food freshly cooked every day?', 'a' => 'Yes, all our meals are prepared fresh daily using quality ingredients, no preservatives, and no reheating.'],--}}
{{--                            ['q' => 'Which is the best home meal delivery service?', 'a' => 'Rasamrit is one of the best home meal delivery services, offering healthy, home-cooked veg and non-veg tiffins in Bangalore. With flexible plans and daily fresh meals, it’s ideal for students, professionals, and families.'],--}}
{{--                            ['q' => 'How to order home food in Bangalore?', 'a' => 'To order home-cooked food in Bangalore, visit rasamrit.online, choose a meal plan, and fill out the contact form. You’ll get fresh, daily tiffin service at your doorstep with flexible subscription options.'],--}}
{{--                            ['q' => 'What is the most ordered food in Bangalore?', 'a' => 'In Bangalore, the most ordered food includes biryani, masala dosa, paneer dishes, and thali meals. Among health-conscious consumers, simple home-style meals like dal, rice, sabzi, and roti are increasingly popular.'],--}}
{{--                        ];--}}
{{--                    @endphp--}}


{{--                @foreach ($faqs as $index => $faq)--}}
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
