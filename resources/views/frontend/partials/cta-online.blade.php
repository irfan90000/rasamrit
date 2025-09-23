<section>
    <div class="position-relative text-white main-banner-cta">
        <!-- Overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100"
             style="background: rgba(0, 0, 0, 0.4);"></div>

        <!-- Content -->
        <div class="position-relative z-1 d-flex justify-content-center align-items-center text-center h-100 pt-4">
            <div class="d-flex flex-column align-items-center">
                <h2 class="fw-bold mb-3 text-white text-font">Join Rasamrit’s Online Coaching today</h2>
                <p class="mb-4 text-description text-white">
                    Learn how to eat better, anywhere you live.
                </p>
                <button class="fw-semibold px-4 py-2 rounded-pill border-0 subs_btn animated slideInLeft"
                        style="background: linear-gradient(125deg, #105c01, #009245);">
                    Get Started
                </button>
            </div>
        </div>
    </div>
</section>

<style>
    .main-banner-cta {
        background-image: url("{{ asset('frontend/image/mobile-banner.png') }}");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        min-height: 450px;
    }
    @media (max-width: 768px) {
        .main-banner-cta {
            min-height: 350px;
        }
    }
    .text-font {
        font-size: 60px;
    }
    @media (max-width: 768px) {
        .text-font {
            font-size: 30px;
        }
    }

    .text-description {
        font-size: 26px;
    }
    @media (max-width: 768px) {
        .text-description {
            font-size: 16px;
        }
    }
</style>
