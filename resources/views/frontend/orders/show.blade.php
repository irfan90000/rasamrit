@extends('frontend.layout.app')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Order #{{ $order->id }}</h1>
        <a href="{{ route('orders.index') }}" class="btn btn-outline-primary">
            Back to Orders
        </a>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Order Items</h5>
                </div>
                <div class="card-body">
                    @foreach($order->items as $item)
                        <div class="row mb-4">
                            <div class="col-md-2">
                                @if($item->product->image)
                                    <img src="{{ Storage::url($item->product->image) }}" class="img-fluid rounded" alt="{{ $item->product->name }}">
                                @else
                                    <div class="bg-light text-center py-4 rounded">
                                        <span class="text-muted">No Image</span>
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-6">
                                <h5 class="mb-1">{{ $item->product->name }}</h5>
                                <p class="text-muted mb-0">Quantity: {{ $item->quantity }}</p>
                            </div>
                            <div class="col-md-4 text-end">
                                <div class="h5 mb-0">${{ number_format($item->price * $item->quantity, 2) }}</div>
                                <small class="text-muted">${{ number_format($item->price, 2) }} each</small>
                            </div>
                        </div>
                        @unless($loop->last)
                            <hr>
                        @endunless
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Order Summary</h5>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <span>Order Date</span>
                        <span>{{ $order->created_at->format('M d, Y') }}</span>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <span>Order Status</span>
                        <span class="badge badge-{{ $order->status === 'completed' ? 'success' : ($order->status === 'cancelled' ? 'danger' : 'warning') }}">
                            {{ ucfirst($order->status) }}
                        </span>
                    </div>
                    <div class="d-flex justify-content-between mb-3">
                        <span>Payment Status</span>
                        <span class="badge badge-{{ $order->payment_status === 'paid' ? 'success' : ($order->payment_status === 'failed' ? 'danger' : 'warning') }}">
                            {{ ucfirst($order->payment_status) }}
                        </span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between mb-3">
                        <span class="h5">Total</span>
                        <span class="h5">${{ number_format($order->total_amount, 2) }}</span>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Shipping & Billing</h5>
                </div>
                <div class="card-body">
                    <h6>Shipping Address</h6>
                    <p class="mb-4">{{ $order->shipping_address }}</p>

                    <h6>Billing Address</h6>
                    <p class="mb-0">{{ $order->billing_address }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 