<section class="py-5 main-banner-about" id="faq">
    <div class="container">
        <div class="text-center wow fadeInUp">
            <h2 class="section-intro-title">#FAQ's</h2>
            <p class="section-title ">Got Questions? We Have the Answers</p>
        </div>

        @php
            $faqs = [
      [
          'q' => 'Is meal delivery healthy?',
          'a' => 'It depends on where you are ordering from. At Rasamrit, absolutely yes. Our meals are dietitian-approved, made fresh daily with whole ingredients, and tailored to your specific health goals.'
      ],
      [
          'q' => 'How are your meals prepared?',
          'a' => 'Our meals are cooked by in-house chefs using home-style methods, with no processed junk and no shortcuts.'
      ],
      [
          'q' => 'Are the meals actually cooked at home?',
          'a' => 'Yes! Every dish is cooked by in-house chefs, just like how your mom would do it.'
      ],
      [
          'q' => 'Can I change my meal plan midweek?',
          'a' => 'Of course. We are flexible. You just need to call your dedicated nutritionist, and he will change your meal.'
      ],
      [
          'q' => 'What if I don’t see results?',
          'a' => 'After strictly following our guidelines, if you do not see results, you will receive a refund. No questions asked.'
      ],
      [
          'q' => 'Is Rasamrit suitable for diabetics or PCOS?',
          'a' => 'Absolutely. We create plans according to your health conditions.'
      ],
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
                                <h2 class="accordion-header" id="heading_{{ $index }}">
                                    <a href="javascript:void(0);"
                                       class="accordion-button collapsed"
                                       style="padding-left: 6px; padding-right: 6px;"
                                       data-bs-toggle="collapse"
                                       data-bs-target="#collapse_{{ $index }}"
                                       aria-expanded="false"
                                       aria-controls="collapse_{{ $index }}">
                                        {{ $faq['q'] }}
                                    </a>
                                </h2>
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

    .main-banner-about {
        background-image: url("{{ asset('frontend/image/bg-banner.jpg') }}");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        padding: 60px 0;
        height: auto;
    }
</style>