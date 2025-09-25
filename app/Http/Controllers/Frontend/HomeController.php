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
            'page_title' => 'Healthy Food Bangalore | Best Prepared Meal Delivery Service',
            'description' => 'Looking for healthy food Bangalore near me? Rasamrit offers the best prepared meal 
            delivery service at an affordable price for weight loss and busy lifestyles.',
        ]);
    }

    public function foodmenu()
    {
        $diet_list = DietType::with('getFood')->latest()->get();
        $faq_list = Faq::latest()->take(3)->get();
        return view('frontend.foodmenu',compact('diet_list' ,'faq_list'), [
            'page_title'    => 'Healthy Food Online in Bangalore | Rasamrit Weekly Food Menu',
            'description'   => ' Explore Rasamrit’s healthy food Bangalore online menu. Find delicious vegetarian, low-carb, keto, and balanced meals available for home delivery. 
            Subscribe now for fresh, organic food boxes every week!',
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
            'page_title' => 'Rasamrit Virtual Meal Plans - Starting at Just ₹99',
            'description' => 'Get expert online coaching for healthy meal planning from Rasamrit. Ideal for individuals who 
            cannot subscribe to meal delivery. Learn to prep balanced meals at home.',
        ]);
    }

    public function about()
    {
        $faq_list = Faq::latest()->get();
        $faq_list = Faq::latest()->take(3)->get();
        return view('frontend.about',compact('faq_list' , 'faq_list'), [
            'page_title' => 'About Rasamrit – Your Trusted Homemade Food Provider',
            'description' => ' Discover Rasamrit’s journey of homemade healthy meals in Bangalore. 
            Stay fit with expert plans designed by nutritionists, join us today! ',
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
