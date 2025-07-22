<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Faq;
use App\Models\Goal;
use App\Models\DietType;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController
{
    public function index()
    {
        $goal_list = Goal::latest()->get();
        $testimonial_list = Testimonial::latest()->get();
        $faq_list = Faq::latest()->take(3)->get();
        return view('frontend.index',compact('goal_list', 'testimonial_list', 'faq_list'), [
            'page_title' => 'Rasamarit - Healthy & Tasty Food',
            'description' => 'Discover the perfect blend of health and taste with Rasamrit. Explore our wide range of delicious and nutritious meals crafted to nourish your body and delight your taste buds.',
        ]);
    }

    public function foodmenu()
    {
        $diet_list = DietType::with('getFood')->latest()->get();
        return view('frontend.foodmenu',compact('diet_list'), [
            'page_title'    => 'Menu | Rasamarti - Healthy & Tasty Food',
            'description'   => 'Explore Rasamrits diverse menu filled with wholesome and flavorful dishes. From breakfast to dinner, find healthy options for every craving!',
        ]);
    }

    public function allmenu()
    {
        return view('frontend.allmenu', ['page_title'   => 'All Menu']);
    }

    public function coaching()
    {
        $goal_list = Goal::latest()->get();
        $testimonial_list = Testimonial::latest()->get();
        return view('frontend.coaching',compact('goal_list', 'testimonial_list'), [
            'page_title' => 'Online Coaching | Rasamarti - Healthy & Tasty Food',
            'description' => 'Transform your lifestyle with Rasamrit online coaching. Get expert guidance on healthy eating, fitness, and sustainable habits.',
        ]);
    }

    public function about()
    {
        $faq_list = Faq::latest()->get();
        return view('frontend.about',compact('faq_list'), [
            'page_title' => 'About Rasamarti - Healthy & Tasty Food',
            'description' => 'Learn more about Rasamrit, your trusted partner in healthy and tasty living. Discover our mission, vision, and commitment to wellness.',
        ]);
    }

    public function terms()
    {
        return view('frontend.terms', ['page_title' => 'Terms & Conditions']);
    }

    public function privacy()
    {
        return view('frontend.privacy', ['page_title' => 'Privacy Policy']);
    }
}
