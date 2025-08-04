<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        $orders = Order::where('user_id', auth()->id())
            ->latest()
            ->paginate(10);
//     dd($orders);
        return view('frontend.orders.index', compact('orders'));
    }

    public function show(Order $order)
    {
        if ($order->user_id !== auth()->id()) {
            abort(403);
        }

        return view('frontend.orders.show', compact('order'));
    }

    public function adminIndex()
    {
        $this->authorize('viewAny', Order::class);

        $orders = Order::with('user')
            ->latest()
            ->paginate(10);

        return view('backend.orders.index', compact('orders'));
    }

    public function adminShow(Order $order)
    {
        $this->authorize('view', $order);

        return view('backend.orders.show', compact('order'));
    }

    public function updateStatus(Request $request, Order $order)
    {
        $this->authorize('update', $order);

        $request->validate([
            'status' => 'required|in:pending,processing,completed,cancelled',
        ]);

        $order->update([
            'status' => $request->status,
        ]);

        return back()->with('success', 'Order status updated successfully.');
    }

    public function updatePaymentStatus(Request $request, Order $order)
    {
        $this->authorize('update', $order);

        $request->validate([
            'payment_status' => 'required|in:pending,paid,failed',
        ]);

        $order->update([
            'payment_status' => $request->payment_status,
        ]);

        return back()->with('success', 'Payment status updated successfully.');
    }
} 