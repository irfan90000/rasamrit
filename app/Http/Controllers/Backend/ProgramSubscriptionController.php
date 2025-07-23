<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProgramSubscription;
class ProgramSubscriptionController extends Controller
{
    public function index()
    {
        $subscription_list = ProgramSubscription::with('getGoal', 'getDietType', 'getPlan')->latest()->get();
        return view('backend.programsubscription.index',compact('subscription_list'), ['page_title' => 'Food Subscription']);
    }
}
