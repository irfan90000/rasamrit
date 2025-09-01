<?php

namespace App\Livewire\Frontend;

use App\Models\Goal;
use App\Models\Testimonial;
use Livewire\Component;
use App\Models\FoodPlan;
use App\Models\FoodPricing;

class PricingLivewire extends Component
{

    public $page_title = "Affordable Home-Cooked Food Delivery in Bangalore – Rasamrit ";
    public $description = "Get fresh, healthy, and affordable home-cooked food delivery in Bangalore.
     Choose from 3-day, 14-day, 
    or 30-day monthly food delivery Bangalore plans. Tiffin service starts at just ₹70/day!";
    public $mealpref, $dietary, $goal;
    public $mealprice, $totalprice, $actualprice, $totalmeal;
    public $plan_list, $goal_list,$testimonial_list;

    public function mount()
    {
        $goal_ids = FoodPricing::pluck('goal')->unique()->toArray();
        $this->goal_list = Goal::whereIn('id', $goal_ids)->latest()->get();
        $this->goal = $goal_ids[0] ?? 0;

        $plan_ids = FoodPricing::where('goal', $this->goal)->pluck('plan')->unique()->toArray();
        $this->plan_list = FoodPlan::whereIn('id', $plan_ids)->get();
        $this->mealpref = ['breakfast'];
        $this->dietary = 'veg';
        $this->mealprice = [];
        $this->totalprice = [];
        $this->actualprice = [];
        $this->totalmeal = [];
        $this->updatePrice();
        $this->testimonial_list = Testimonial::latest()->get();
    }

    public function render()
    {
        return view('frontend.pricing')->layout('frontend.layout.app');
    }

    public function updatePrice()
    {
        if(empty($this->mealpref)){
            $this->mealpref = ['breakfast'];
        }
        $plan_ids = FoodPricing::where('goal', $this->goal)->pluck('plan')->unique()->toArray();
        $food_pricing = FoodPricing::where('goal', $this->goal)->get();
        $this->plan_list = FoodPlan::whereIn('id', $plan_ids)->get();

        foreach ($food_pricing as $key => $pricing) {
            if($this->dietary == 'veg'){
                $pricing_data = $pricing->vegetarian;
            }elseif($this->dietary == 'nonveg') {
                $pricing_data = $pricing->nonvegetarian;
            }else{
                $pricing_data = $pricing->eggetarian;
            }
            $plan_price = 0;
            foreach($this->mealpref as $meal){
                $plan_price += $pricing_data[$meal];
                $this->mealprice[$pricing->plan] = $plan_price;
                $plan_day = FoodPlan::find($pricing->plan)->days;
                $this->totalmeal[$pricing->plan] = $plan_day * count($this->mealpref);
                $this->actualprice[$pricing->plan] = $plan_price * $plan_day;
                $this->totalprice[$pricing->plan] = $this->actualprice[$pricing->plan] - ($this->actualprice[$pricing->plan] * FoodPlan::find($pricing->plan)->discount / 100);
            }
        }
    }
}
