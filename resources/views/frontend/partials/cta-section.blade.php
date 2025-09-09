<section>
    <div class="position-relative text-white main-banner-cta">
        <!-- Overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100"
             style="background: rgba(0, 0, 0, 0.4);"></div>

        <!-- Content -->
        <div class="position-relative z-1 d-flex h-100">
            <div class="d-flex flex-column justify-content-center align-items-start width-col text-start md:ps-5 ps-2">
                <h2 class="fw-bold mb-3 text-white text-font">Feel the Difference with Every Bite</h2>
                <p class="mb-4 text-description text-white">
                    Get your personalized meal plan by booking a free call with our certified nutritionist.
                </p>
                <button class="fw-semibold px-4 py-2 rounded-pill border-0 subs_btn animated slideInLeft"
                        style="background: linear-gradient(125deg, #105c01, #009245);">
                    Book Free Call
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
    .width-col{
        width: 50%;
    }
    @media (max-width: 768px) {
        .width-col{
            width: 80%;
        }
    }
    .text-font{
        font-size: 60px;
    }
    @media (max-width: 768px) {
        .text-font{
            font-size: 30px;
        }
    }
    .text-description{
        font-size: 26px;
    }
    @media (max-width: 768px) {
        .text-description{
            font-size: 16px;
        }
    }
</style>
