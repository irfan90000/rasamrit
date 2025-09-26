

<section class="md:pt-5 pt-1 ">
    <div class="container">

        @php
            $trustElements = [
                [
                    'image' => asset('frontend/img/food-delivery.png'),
                    'title' => '100% Homemade ',
                    'desc'  => 'Every meal is prepared in our own kitchen using family recipes.'
                ],
                [
                    'image' => asset('frontend/img/Nosalt.jpg'),
                    'title' => 'Zero White Sugar',
                    'desc'  => 'We use only natural, wholesome ingredients — nothing hidden.'
                ],
                [
                    'image' => asset('frontend/img/frshcook.jpeg'),
                    'title' => 'Freshly Cooked ',
                    'desc'  => 'No reheating, no preservatives — your order is made just for you.'
                ],
                [
                    'image' => asset('frontend/img/free-plastic.jpeg'),
                    'title' => 'Plastic-Free Packaging',
                    'desc'  => 'We care for the planet as much as your health with eco-friendly packs.'
                ],
                [
                    'image' => asset('frontend/img/Meal-Subscription.jpg'),
                    'title' => 'Guaranteed Results',
                    'desc'  => 'A proven plan backed by our satisfied customers and nutritionists.'
                ],
            ];
        @endphp

        <div class="row justify-content-center md:g-4 g-1 custom-five-cols">
            @foreach ($trustElements as $element)
                <div class="custom-col text-center">
                    <div class="circle-gradient mx-auto md:mb-3  mb-1">
                        <img src="{{ $element['image'] }}" alt="{{ $element['title'] }}">
                    </div>
                    <p class="fw-bold fs-6 text-dark mb-1">{{ $element['title'] }}</p>
                </div>
            @endforeach
        </div>



    </div>
</section>

<style>
    /* Gradient Circle Style */
    .circle-gradient {
        width: 160px;
        height: 160px;
        border-radius: 50%;
        overflow: hidden;
        padding: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: linear-gradient(125deg, #105c01, #009245);
        box-shadow: 0 6px 12px rgba(0,0,0,0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .circle-gradient img {
        width: 80%;
        height: 80%;
        object-fit: contain;
        background: white;
        border-radius: 50%;
        padding: 10px;
    }

    .circle-gradient:hover {
        transform: translateY(-6px) scale(1.05);
        box-shadow: 0 10px 20px rgba(0,0,0,0.15);
    }

    /* Grid Layout (default: mobile) */
    .custom-five-cols {
        display: grid;
        gap: 1rem;
        justify-content: center;
    }

    .custom-five-cols .custom-col {
        text-align: center;
    }

    /* Tablet: 2 + 2 + 1 */
    @media (min-width: 768px) and (max-width: 1199px) {
        .custom-five-cols {
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }

        /* Last one centered */
        .custom-five-cols .custom-col:last-child {
            grid-column: 1 / -1;      /* span full width */
            justify-self: center;     /* center horizontally */
        }
    }

    /* Large screens: all 5 in one row */
    @media (min-width: 1200px) {
        .custom-five-cols {
            grid-template-columns: repeat(5, 1fr);
            gap: 1.5rem;
        }

        .custom-five-cols .custom-col:last-child {
            grid-column: auto;
            justify-self: auto;
        }
    }

    .custom-col {
        flex: 0 0 calc(20% - 12px); /* 5 cards per row with spacing */
        margin-bottom: 24px;
    }

    @media (max-width: 992px) {
        .custom-col {
            flex: 0 0 calc(50% - 12px);
            margin-bottom: 0;
        }
    }

    @media (max-width: 576px) {
        .custom-col {
            flex: 0 0 100%;
            margin-bottom: 0;
        }
    }
</style>
