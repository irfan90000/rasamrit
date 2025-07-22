<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div class="w-100 d-flex align-items-center text-center">
            <img src="{{ asset('storage/website_setup/' . websiteSetupValue('logo')) }}" class="logo-icon" alt="logo">
            <h5 class="logo-title">{{ config('app.name') }}</h5>
        </div>
        <div class="toggle-icon ms-auto">
            <i class='bx bx-menu'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ route('admin.dashboard') }}">
                <div class="parent-icon">
                    <i class="bx bx-home-circle"></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.goal.index') }}">
                <div class="parent-icon">
                    <i class='bx bx-football'></i>
                </div>
                <div class="menu-title">Diet Goal</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.diet-type.index') }}">
                <div class="parent-icon">
                    <i class='bx bxs-cube-alt'></i>
                </div>
                <div class="menu-title">Diet Type</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.food-menu.index') }}">
                <div class="parent-icon">
                    <i class='bx bx-food-tag'></i>
                </div>
                <div class="menu-title">Food Menu</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.food-plan.index') }}">
                <div class="parent-icon">
                    <i class='bx bx-food-menu'></i>
                </div>
                <div class="menu-title">Food Plan</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.food-program.index') }}">
                <div class="parent-icon">
                    <i class='bx bx-dollar-circle' ></i>
                </div>
                <div class="menu-title">Food Program </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.food-pricing.index') }}">
                <div class="parent-icon">
                    <i class='bx bx-dollar-circle' ></i>
                </div>
                <div class="menu-title">Food Pricing </div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.food-subscription.index') }}">
                <div class="parent-icon">
                    <i class='bx bx-cycling'></i>
                </div>
                <div class="menu-title">Subscription</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.query.index') }}">
                <div class="parent-icon">
                    <i class='bx bx-info-square'></i>
                </div>
                <div class="menu-title">Queries</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.testimonial.index') }}">
                <div class="parent-icon">
                    <i class='bx bx-user-voice'></i>
                </div>
                <div class="menu-title">Testimonial</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.faq.index') }}">
                <div class="parent-icon">
                    <i class='bx bx-info-circle'></i>
                </div>
                <div class="menu-title">FAQ's</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.website-setup.index') }}">
                <div class="parent-icon">
                    <i class="bx bx-globe"></i>
                </div>
                <div class="menu-title">Website Setup</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.products.index') }}">
                <div class="parent-icon">
                    <i class="bx bx-store"></i>
                </div>
                <div class="menu-title">Products</div>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.orders.index') }}">
                <div class="parent-icon">
                    <i class="bx bx-cart"></i>
                </div>
                <div class="menu-title">Orders</div>
            </a>
        </li>
    </ul>
</div>
