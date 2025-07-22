<?php

namespace App\Http\Controllers\Backend;

use App\Models\Goal;
use App\Models\FoodPlan;
use App\Models\FoodPricing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pricing_list = FoodPricing::with(['getPlan', 'getGoal'])->latest()->get();
        return view('backend.food_program.index',compact('pricing_list'), ['page_title' => 'Food Pricing']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $plan_list = FoodPlan::latest()->get();
        $goal_list = Goal::latest()->get();
        return view('backend.food_pricing.create',compact('plan_list', 'goal_list'), ['page_title' => 'Add Food Price']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'plan'      => 'required',
            'goal'      => 'required',
        ]);

        $pricing = FoodPricing::where('plan', $request->plan)->where('goal', $request->goal)->first();
        if($pricing){
            return redirect()->back()->with('error', 'This pricing already exists.');
        }

        $vegetarian = [
            'breakfast' => $request->breakfast[1]['price'],
            'lunch'    => $request->lunch[1]['price'],
            'snack'    => $request->snack[1]['price'],
            'dinner'   => $request->dinner[1]['price'],
        ];
        $nonvegetarian = [
            'breakfast' => $request->breakfast[2]['price'],
            'lunch'    => $request->lunch[2]['price'],
            'snack'    => $request->snack[2]['price'],
            'dinner'   => $request->dinner[2]['price'],
        ];
        $eggetarian = [
            'breakfast' => $request->breakfast[3]['price'],
            'lunch'    => $request->lunch[3]['price'],
            'snack'    => $request->snack[3]['price'],
            'dinner'   => $request->dinner[3]['price'],
        ];

        $foodPricing = new FoodPricing;
        $foodPricing->plan = $request->plan;
        $foodPricing->goal = $request->goal;
        $foodPricing->vegetarian = $vegetarian;
        $foodPricing->nonvegetarian = $nonvegetarian;
        $foodPricing->eggetarian = $eggetarian;
        $foodPricing->save();

        return redirect()->route('admin.food-pricing.index')->with('success', 'Food pricing created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = FoodPricing::findOrFail($id);
        $data[1] = $data->vegetarian;
        $data[2] = $data->nonvegetarian;
        $data[3] = $data->eggetarian;
        $plan_list = FoodPlan::latest()->get();
        $goal_list = Goal::latest()->get();
        return view('backend.food_pricing.edit',compact('data', 'plan_list', 'goal_list'), ['page_title' => 'Edit Food Price']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'plan'      => 'required',
            'goal'      => 'required',
        ]);

        $pricing = FoodPricing::where('id', '!=', $id)->where('plan', $request->plan)->where('goal', $request->goal)->first();
        if($pricing){
            return redirect()->back()->with('error', 'This pricing already exists.');
        }

        $vegetarian = [
            'breakfast' => $request->breakfast[1]['price'],
            'lunch'    => $request->lunch[1]['price'],
            'snack'    => $request->snack[1]['price'],
            'dinner'   => $request->dinner[1]['price'],
        ];
        $nonvegetarian = [
            'breakfast' => $request->breakfast[2]['price'],
            'lunch'    => $request->lunch[2]['price'],
            'snack'    => $request->snack[2]['price'],
            'dinner'   => $request->dinner[2]['price'],
        ];
        $eggetarian = [
            'breakfast' => $request->breakfast[3]['price'],
            'lunch'    => $request->lunch[3]['price'],
            'snack'    => $request->snack[3]['price'],
            'dinner'   => $request->dinner[3]['price'],
        ];

        $foodPricing = FoodPricing::findOrFail($id);
        $foodPricing->plan = $request->plan;
        $foodPricing->goal = $request->goal;
        $foodPricing->vegetarian = $vegetarian;
        $foodPricing->nonvegetarian = $nonvegetarian;
        $foodPricing->eggetarian = $eggetarian;
        $foodPricing->save();

        return redirect()->route('admin.food-pricing.index')->with('success', 'Food Pricing updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
