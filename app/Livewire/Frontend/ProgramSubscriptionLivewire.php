<?php

namespace App\Livewire\Frontend;

use App\Models\Goal;
use Livewire\Component;
use App\Models\DietType;
use App\Models\FoodPlan;
use App\Models\FoodProgram;
use App\Models\ProgramSubscription;

class ProgramSubscriptionLivewire extends Component
{

    public $goalData, $dietData, $gender, $age, $weight, $heightft, $heightinch,
        $planData, $dietary, $mealtype, $name, $phone, $email, $formstep, $diet_list,
        $actualprice, $discount, $totalprice;

    public $bmi, $bmiheight, $bmiweight, $bmistatus;
    public $plan_list, $goal_list;

    public $page_title = "Food Subscription Plan | Rasamarti - Healthy & Tasty Food";
    public $description = "Enjoy hassle-free healthy eating with Rasamrit's food subscription plans. Get fresh, tasty, and nutritious meals delivered to your doorstep regularly.";

    public function mount()
    {
        $this->goalData = null;
        $this->dietData = null;
        $this->gender = 'male';
        $this->age = null;
        $this->weight = null;
        $this->heightft = 5;
        $this->heightinch = 0;
        $this->planData = null;
        $this->dietary = null;
        $this->mealtype = [];
        $this->name = null;
        $this->phone = null;
        $this->email = null;
        $this->formstep = 1;
        $this->bmi = 0;
        $this->bmiheight = 0;
        $this->bmiweight = 0;
        $this->bmistatus = null;
        $this->diet_list = [];
        $this->actualprice = 0;
        $this->discount = 0;
        $this->totalprice = 0;
        $goal_ids = FoodProgram::pluck('goal')->unique()->toArray();
        $this->goal_list = Goal::whereIn('id', $goal_ids)->latest()->get();
        $this->plan_list = [];
    }

    public function render()
    {
        return view('livewire.frontend.program-subscription-livewire');
    }
    public function getDiet(){
        $this->diet_list = DietType::whereJsonContains('goal', $this->goalData)->get();
        $plan_ids = FoodProgram::where('goal', $this->goalData)->pluck('plan')->unique()->toArray();
        $this->plan_list = FoodPlan::whereIn('id', $plan_ids)->get();
    }

    public function getPrice(){
        $price_data = FoodProgram::where('plan', $this->planData)->where('goal', $this->goalData)->first();
        if($this->dietary == 'vegetarian'){
            $pricing_data = $price_data->vegetarian;
        }elseif($this->dietary == 'nonvegetarian') {
            $pricing_data = $price_data->nonvegetarian;
        }else{
            $pricing_data = $price_data->eggetarian;
        }
        $this->totalprice = 0;
        $this->actualprice = 0;
        $this->discount = 0;
        foreach ($this->mealtype as $meal) {
            $plan = FoodPlan::find($this->planData);
            $this->actualprice += $pricing_data[$meal] * $plan->days;
            $this->totalprice =  $this->actualprice - $this->actualprice * $plan->discount / 100;
            $this->discount = $this->actualprice - $this->totalprice;
        }
    }

    public function submitForm()
    {
        switch ($this->formstep) {
            case '1':
                $this->validate([
                    'goalData' => 'required',
                    'dietData' => $this->goalData && count($this->diet_list) > 0 ? 'required' : 'nullable',
                ],[
                    'goalData.required' => 'Please select a goal',
                    'dietData.required' => 'Please select a diet plan.',
                ]);
                $this->formstep = 2;
                break;

            case '2':
                $this->validate([
                    'age'        => 'required|integer|min:18',
                    'weight'     => 'required|numeric|min:10',
                ],[
                    'age.required' => 'Please enter your age',
                    'age.integer' => 'Please enter a valid age',
                    'age.min'    => 'Age must be at least 18 years old.',
                    'weight.required' => 'Please enter your weight',
                    'weight.numeric' => 'Please enter a valid weight',
                    'weight.min' => 'Weight must be at least 10 kg.',
                ]);
                $this->formstep = 3;
                break;

            case '3':
                $this->validate([
                    'planData'      => 'required',
                    'dietary'       =>  $this->planData ? 'required' : 'nullable',
                    'mealtype'      =>   $this->planData && $this->dietary ? 'required|array' : 'nullable',
                ],[
                    'planData.required' => 'Please select a subscription plan.',
                    'dietary.required'  => 'Please select your dietary.',
                    'mealtype.required' => 'Please select meal type.',
                ]);
                $this->formstep = 4;
                break;

            case '4':
                $this->validate([
                    'name' => 'required',
                    'phone' => 'required|digits:10',
                    'email' => 'required|email',
                ],[
                    'name.required' => 'Please enter your name.',
                    'phone.required' => 'Please enter your phone number.',
                    'phone.digits' => 'Phone number must be 10 digits long.',
                    'email.required' => 'Please enter your email address.',
                    'email.email' => 'Please enter a valid email address.',
                ]);

                $this->submitData();
                break;

            default:
                break;
        }
    }

    public function submitData(){
        $subscription = new ProgramSubscription;
        $subscription->name = $this->name;
        $subscription->phone = $this->phone;
        $subscription->email = $this->email;
        $subscription->gender = $this->gender;
        $subscription->age = $this->age;
        $subscription->weight = $this->weight;
        $subscription->height = ($this->heightft * 12) + ($this->heightinch);
        $subscription->goal = $this->goalData;
        $subscription->diet_type = $this->dietData;
        $subscription->plan = $this->planData;
        $planDetail = FoodProgram::where('plan', $this->planData)->where('goal', $this->goalData)->first();
        $subscription->plan_detail = $planDetail;
        $subscription->dietary = $this->dietary;
        $subscription->meal_type = $this->mealtype;
        $subscription->actualprice = $this->actualprice;
        $subscription->discount = $this->discount;
        $subscription->totalprice = $this->totalprice;
        $subscription->save();
        $this->formstep = 5;
    }

    public function calculateBMI(){
        $this->validate([
            'bmiweight' => 'required|numeric|min:0.1',
            'bmiheight' => 'required|numeric|min:0.1',
        ],[
            'bmiweight.required'    => 'Enter weight.',
            'bmiweight.numeric'     => 'Enter weight.',
            'bmiweight.min'         => 'Enter weight.',
            'bmiheight.required'    => 'Enter height.',
            'bmiheight.numeric'     => 'Enter height.',
            'bmiheight.min'         => 'Enter height.',
        ]);

        $heightInMeters = $this->bmiheight * 0.0254;
        $this->bmi = round($this->bmiweight / ($heightInMeters ** 2), 2);
        if ($this->bmi < 18.5) {
            $this->bmistatus = 'Underweight';
        } elseif ($this->bmi >= 18.5 && $this->bmi < 24.9) {
            $this->bmistatus = 'Normal';
        } elseif ($this->bmi >= 25 && $this->bmi < 29.9) {
            $this->bmistatus = 'Overweight';
        } else {
            $this->bmistatus = 'Obesity';
        }
    }
}
