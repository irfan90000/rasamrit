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
        return view('backend.subscription.index',compact('subscription_list'), ['page_title' => 'Food Subscription']);
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
