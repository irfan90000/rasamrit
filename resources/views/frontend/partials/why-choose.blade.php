<section class="main-banner-about py-5">
    <div class="container text-center">
        <h2 class="fw-bold text-green mb-2">Why Choose Rasamrit?</h2>
        <h5 class="text-muted mb-4">How we’re different — and better</h5>

        <div class="table-comparison bg-white rounded-12  shadow-lg overflow-hidden mx-auto">
            <table class="table table-bordered mb-0">
                <thead>
                <tr>
                    <th class="py-3 bg-green text-white">Feature</th>
                    <th class="py-3 bg-green text-white">
                        <img style="width: 24px; height: 24px;"
                             alt="Bangalore’s Best Prepared Meal" src="{{ asset('frontend/image/rasamrit.png') }}">
                        Rasamrit</th>
                    <th class="py-3 text-dark bg-white">Other Brands</th>
                </tr>
                </thead>
                <tbody class="bg-white">
                <tr>
                    <td>Food prep</td>
                    <td class="fw-bold text-green">A real, freshly prepared meal delivery service, not factory-reheated food.</td>
                    <td>Cooked in bulk</td>
                </tr>
                <tr>
                    <td>Meals per day</td>
                    <td class="fw-bold text-green">Everything you need — from detox drinks to dinner, all meals + beverages</td>
                    <td>2–4 max</td>
                </tr>
                <tr>
                    <td>Packaging</td>
                    <td class="fw-bold text-green">Premium packaging</td>
                    <td>Plastic containers</td>
                </tr>
                <tr>
                    <td>Personalization</td>
                    <td class="fw-bold text-green">Nutritionist-designed - healthy eating and sustainable weight loss</td>
                    <td>Pre-decided menu</td>
                </tr>
                <tr>
                    <td>Goal Fit</td>
                    <td class="fw-bold text-green">Weight loss, gain, diabetes, and healthy eating.</td>
                    <td>General meals</td>
                </tr>
                <tr>
                    <td>Menu Variety</td>
                    <td class="fw-bold text-green">28-day non-repeating meal</td>
                    <td>Repeats weekly</td>
                </tr>
                <tr>
                    <td>Support</td>
                    <td class="fw-bold text-green">Daily call, 24/7</td>
                    <td>Limited</td>
                </tr>
                <tr>
                    <td>Payment</td>
                    <td class="fw-bold text-green">COD, no advance</td>
                    <td>Upfront payment</td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td class="fw-bold text-green">Half of the market rate</td>
                    <td>High price</td>
                </tr>
                <tr>
                    <td>Guarantee</td>
                    <td class="fw-bold text-green">Full refund if no result</td>
                    <td>No refund policy</td>
                </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-4">
            <button class="btn btn-success bg-green btn-lg">Start 3-day trial</button>
            <button class="btn btn-outline-dark btn-lg ms-2">Explore →</button>
        </div>
    </div>
</section>



<style>
    .rounded-12 {
        border-radius: 12px !important;
    }
    .bg-green{
        background-color: #197241 !important;
    }
    .text-green{
        color: #197241 !important;
    }
    .main-banner-about {
        background-image: url("{{ asset('frontend/image/bg-banner.jpg') }}");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        padding: 60px 0;
        height: auto;
    }

    .table-comparison {
        max-width: 960px;
    }

    .table thead th {
        background-color: #e9f5e7;
        font-weight: 600;
        font-size: 1rem;
        text-align: center;
        border-color: #fff !important;
    }

    .table td, .table th {
        vertical-align: middle;
        font-size: 0.95rem;
        padding: 1rem !important;
        font-weight: 500;
        text-align: left;
    }

    .table td:first-child {
        font-weight: 600;
        color: #333;
    }

    .table td:nth-child(2),
    .table td:nth-child(3) {
        text-align: left;
    }

    @media (max-width: 768px) {
        .table {
            font-size: 0.85rem;
        }
        .table td, .table th {
            padding: 0.75rem !important;
        }
    }
</style>



