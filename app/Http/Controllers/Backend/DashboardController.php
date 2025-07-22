<?php

namespace App\Http\Controllers\Backend;

use App\Models\Faq;
use App\Models\Goal;
use App\Models\Query;
use App\Models\DietType;
use App\Models\FoodMenu;
use App\Models\FoodPlan;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Models\FoodSubscription;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $goal = Goal::count();
        $diet = DietType::count();
        $foodmenu = FoodMenu::count();
        $foodplan = FoodPlan::count();
        $subscription = FoodSubscription::count();
        $queries = Query::count();
        $testimonial = Testimonial::count();
        $faq = Faq::count();
        return view('backend.dashboard',compact('goal', 'diet', 'foodmenu', 'foodplan', 'subscription', 'queries', 'testimonial', 'faq'), ['page_title' => 'Dashboard']);
    }
}
