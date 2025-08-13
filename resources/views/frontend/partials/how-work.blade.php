<style>
    .transformation-card {
        border-radius: 1rem;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .before-after {
        display: flex;
        position: relative;
        height: 250px;
    }

    .image-box {
        position: relative;
        flex: 1;
    }

    .image-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .caption {
        position: absolute;
        bottom: 10px;
        left: 10px;
        background: rgba(0, 0, 0, 0.7);
        color: #fff;
        padding: 3px 8px;
        font-size: 0.85rem;
        border-radius: 5px;
    }

    .testimonial-overlay {
        background-color: #fff;
        padding: 1rem;
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    .testimonial-overlay p {
        font-style: italic;
        color: #333;
        margin-bottom: 0.5rem;
    }

    .testimonial-overlay strong {
        color: #198754;
    }
</style>

<section class="py-5" style="background-color: #f5f5f5">
    <div class="container">
        <!-- Heading -->
        <div class="text-center mb-4">
            <h2 class="fw-bold text-success">Proof That It Works</h2>
            <p class="text-muted w-75 mx-auto">
                With Rasamrit's trusted weight loss food delivery in Bangalore, you can focus 100% on your fitness goals without ever stressing about food.
            </p>
        </div>

        <!-- Transformation Cards -->
        <div class="row g-4">
            <!-- Card 1 -->
            <div class="col-md-4 d-flex">
                <div class="bg-white shadow-sm transformation-card w-100">
                    <div class="before-after">
                        <div class="image-box">
                            <img src="frontend/img/Before.jpg" alt="Before">
                            <div class="caption">DAY 01</div>
                        </div>
                        <div class="image-box">
                            <img src="frontend/img/after.jpg" alt="After">
                            <div class="caption">DAY 54</div>
                        </div>
                    </div>
                    <div class="testimonial-overlay">
                        <p>“I lost 6kg in 5 weeks — without starving or skipping meals. Rasamrit is magic!”</p>
                        <strong>— Priya Mehta, HR Manager</strong>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4 d-flex">
                <div class="bg-white shadow-sm transformation-card w-100">
                    <div class="before-after">
                        <div class="image-box">
                            <img src="frontend/img/before-work.jpg" alt="Before">
                            <div class="caption">DAY 01</div>
                        </div>
                        <div class="image-box">
                            <img src="frontend/img/after-work.jpg" alt="After">
                            <div class="caption">DAY 21</div>
                        </div>
                    </div>
                    <div class="testimonial-overlay">
                        <p>“I’m diabetic, and Rasamrit has helped me balance sugar without compromising on taste.”</p>
                        <strong>— Rohit S., Software Developer</strong>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4 d-flex">
                <div class="bg-white shadow-sm transformation-card w-100">
                    <div class="before-after">
                        <div class="image-box">
                            <img src="frontend/img/day-one.jpg" alt="Before">
                            <div class="caption">DAY 01</div>
                        </div>
                        <div class="image-box">
                            <img src="frontend/img/day-ninety.jpg" alt="After">
                            <div class="caption">DAY 48</div>
                        </div>
                    </div>
                    <div class="testimonial-overlay">
                        <p>“I lost 6kg in 5 weeks — without starving or skipping meals. Rasamrit is magic!”</p>
                        <strong>— Priya Mehta, HR Manager</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
