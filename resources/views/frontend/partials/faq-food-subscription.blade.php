<section class="py-5" id="faq">
    <div class="container">
        <div class="text-center wow fadeInUp">
            <h2 class="section-intro-title">#FAQ's</h2>
            <p class="section-title">Got Questions? We Have the Answers</p>
        </div>

        @php
            $faqs = [
                                   ['q' => 'What is the healthiest meal subscription?', 'a' => 'The healthiest meal subscription offers fresh, homemade, balanced meals tailored to your dietary needs. Services like Rasamrit provide nutrient-rich, low-oil, high-protein options perfect for weight loss, fitness, and general wellness.'],
                                   ['q' => 'Which is the best protein meal subscription in Bangalore?', 'a' => 'Rasamrit is one of Bangalore’s best protein meal subscriptions, delivering high-protein, homemade meals daily. Ideal for fitness-focused individuals seeking fresh, nutrient-dense food with zero preservatives.'],
                                   ['q' => 'Which food subscription box is best?', 'a' => 'The best food subscription box combines taste, nutrition, and convenience. Rasamrit offers customizable tiffin plans with fresh, homemade food, perfect for weight loss, fitness, or everyday healthy eating in Bangalore.'],
                                   ['q' => 'How much does a healthy meal subscription cost in Bangalore?', 'a' => 'In Bangalore, a healthy meal subscription typically costs ₹3,000 to ₹7,000 per month, depending on the meal plan, frequency, and dietary preferences. Rasamrit offers affordable, protein-rich homemade food subscriptions designed for wellness and weight loss goals.'],
                                   ['q' => 'Are there vegetarian meal subscription services for weight loss in Bangalore?', 'a' => 'Yes, Bangalore has several vegetarian meal subscription services focused on weight loss. Rasamrit provides high-protein, portion-controlled vegetarian meals made from fresh ingredients, ideal for those seeking healthy, homemade food without compromising taste.'],
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
                                <span class="text-faq-sub accordion-header" id="heading_{{ $index }}">
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


    .text-faq-sub{
        font-family: "Poppins", serif;
        font-weight: 500;
        color: #333;
        line-height: 1.5;
        font-size: 2rem;
    }

</style>