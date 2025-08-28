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
                                   ['q' => 'What is the healthiest meal subscription?', 'a' => 'The healthiest meal subscription offers fresh, homemade, balanced meals tailored to your dietary needs. Services like Rasamrit provide nutrient-rich, low-oil, high-protein options perfect for weight loss, fitness, and general wellness.'],
                                   ['q' => 'Which is the best protein meal subscription in Bangalore?', 'a' => 'Rasamrit is one of Bangalore’s best protein meal subscriptions, delivering high-protein, homemade meals daily. Ideal for fitness-focused individuals seeking fresh, nutrient-dense food with zero preservatives.'],
                                   ['q' => 'Which food subscription box is best?', 'a' => 'The best food subscription box combines taste, nutrition, and convenience. Rasamrit offers customizable tiffin plans with fresh, homemade food, perfect for weight loss, fitness, or everyday healthy eating in Bangalore.'],
                                   ['q' => 'How much does a healthy meal subscription cost in Bangalore?', 'a' => 'In Bangalore, a healthy meal subscription typically costs ₹3,000 to ₹7,000 per month, depending on the meal plan, frequency, and dietary preferences. Rasamrit offers affordable, protein-rich homemade food subscriptions designed for wellness and weight loss goals.'],
                                   ['q' => 'Are there vegetarian meal subscription services for weight loss in Bangalore?', 'a' => 'Yes, Bangalore has several vegetarian meal subscription services focused on weight loss. Rasamrit provides high-protein, portion-controlled vegetarian meals made from fresh ingredients, ideal for those seeking healthy, homemade food without compromising taste.'],
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
                            <div id="collapse{{ $index }}" class="accordion-collapse  collapse fw-semibold" aria-labelledby="heading{{ $index }}" data-bs-parent="#faqAccordion">
                                <div class="accordion-body"
                                     style="background-color: #E8FCEF; color: #065f46;">
                                    {{ $faq['a'] }}
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- CTA Section -->

    </div>
</section>
