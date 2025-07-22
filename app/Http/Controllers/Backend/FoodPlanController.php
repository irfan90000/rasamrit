<?php

namespace App\Http\Controllers\Backend;

use App\Models\Goal;
use App\Models\FoodPlan;
use App\Models\FoodPricing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FoodPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plan_list = FoodPlan::latest()->get();
        return view('backend.food_plan.index',compact('plan_list'), ['page_title' => 'Food Plan']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      =>  'required',
            'days'      => 'required',
            'discount'  => 'nullable',
        ]);

        $plan = new FoodPlan;
        $plan->name = $request->name;
        $plan->days = $request->days;
        $plan->discount = $request->discount;

        $plan->save();
        return redirect()->route('admin.food-plan.index')->with('success', 'Food plan created successfully.');
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
        $edit_data = FoodPlan::findOrFail($id);
        $plan_list = FoodPlan::latest()->get();
        return view('backend.food_plan.index',compact('plan_list', 'edit_data'), ['page_title' => 'Edit Plan']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'      =>  'required',
            'days'      => 'required',
            'discount'  => 'nullable',
        ]);

        $plan = FoodPlan::findOrFail($id);
        $plan->name = $request->name;
        $plan->days = $request->days;
        $plan->discount = $request->discount;

        $plan->save();
        return redirect()->route('admin.food-plan.index')->with('success', 'Food plan updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
