<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\FoodSubscription;
use App\Http\Controllers\Controller;

class FoodSubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $subscription_list = FoodSubscription::with('getGoal', 'getDietType', 'getPlan')->latest()->get();
        return view('backend.subscription.index',compact('subscription_list'), [
            'page_title'    => 'Healthy Food Subscription Bangalore | Monthly Meals by Rasamrit',
            'description'   => ' Try Rasamrit healthy food subscription in Bangalore. Fresh homemade meals for 
        weight loss or balance. Monthly plans start at just ₹70/day!',
        ]);
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
