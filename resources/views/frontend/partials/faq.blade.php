<section class="py-5 bg-light" id="faq">
    <div class="container">
        <!-- Section Header -->
        <div class="text-center mb-5">
            <h2 class="fw-bold text-success">Why Our Customers Trust Us</h2>
            <p class="text-muted">Honest reviews. Real health results.</p>
        </div>

        <!-- FAQ Cards Grid -->
        <div class="row g-4">
            @php
                $faqs = [
                    ['q' => 'Is meal delivery healthy?', 'a' => 'Absolutely. Our meals are dietitian-approved, made fresh daily, and tailored to your health goals.'],
                    ['q' => 'Are home-cooked meals healthy?', 'a' => 'Yes, our in-house chefs cook using home-style methods with no processed junk.'],
                    ['q' => 'Are the meals actually cooked at home?', 'a' => 'Yes! Every dish is freshly cooked in-house, just like your mom would make it.'],
                    ['q' => 'Can I change my meal plan midweek?', 'a' => 'Yes. Just call your dedicated nutritionist and they’ll update your plan.'],
                    ['q' => 'What if I don’t see results?', 'a' => 'If you follow our plan and still see no results, we offer a full refund.'],
                    ['q' => 'Is Rasamrit suitable for diabetics or PCOS?', 'a' => 'Absolutely. We design custom plans based on health conditions.'],
                ];

                $colors = ['bg-success-subtle', 'bg-warning-subtle', 'bg-primary-subtle', 'bg-danger-subtle', 'bg-info-subtle', 'bg-secondary-subtle'];
            @endphp

            @foreach ($faqs as $index => $faq)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card shadow-sm {{ $colors[$index % count($colors)] }} border-0 h-100">
                        <div class="card-body">
                            <h5 class="card-title fw-semibold text-success">
                               {{ $faq['q'] }}
                            </h5>
                            <p class="card-text text-muted">{{ $faq['a'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- CTA Section -->
        <div class="text-center mt-5">
            <h3 class="fw-bold text-success mb-3">Feel the Difference with Every Bite</h3>
            <p class="text-muted mb-4">
                Book a free call with our certified nutritionist and start your transformation today.
            </p>
            <a href="#contact" class="btn btn-success btn-lg px-4">Book Free Call</a>
        </div>
    </div>
</section>
