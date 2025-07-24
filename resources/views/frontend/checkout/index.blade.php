@extends('frontend.layout.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 fw-bold text-success">Checkout</h2>

    <div class="row">
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title fw-bold text-success mb-4">Shipping & Billing Information</h5>
                    <form action="{{ route('checkout.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="shipping_address" class="form-label text-success">Shipping Address</label>
                            <textarea name="shipping_address" id="shipping_address" class="text-success form-control @error('shipping_address') is-invalid @enderror" rows="3" required>{{ old('shipping_address') }}</textarea>
                            @error('shipping_address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="billing_address" class="form-label text-success">Billing Address</label>
                            <textarea name="billing_address" id="billing_address" class="text-success form-control @error('billing_address') is-invalid @enderror" rows="3" required>{{ old('billing_address') }}</textarea>
                            @error('billing_address')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-success px-4 py-2 rounded-pill shadow-sm btn-lg">Place Order</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title mb-4 fw-bold text-success">Order Summary</h5>

                    @foreach($cartItems as $item)
                        <div class="d-flex justify-content-between mb-3">
                            <div>
                                <h6 class="mb-0 text-success">{{ $item->product->name }}</h6>
                                <small class="text-muted text-success">Qty: {{ $item->quantity }}</small>
                            </div>
                            <span class="text-success fw-bold">${{ number_format($item->product->price * $item->quantity, 2) }}</span>
                        </div>
                    @endforeach

                    <hr>

                    <div class="d-flex justify-content-between mb-3">
                        <span class="h5 text-success">Total</span>
                        <span class="h5 text-success">${{ number_format($total, 2) }}</span>
                    </div>

                    <div class="alert alert-info mb-0" style="background-color: #d6fadd">
                        <small class="text-success fw-bold " >
                            By placing this order, you agree to our terms and conditions. Your order will be processed and shipped once payment is confirmed.
                        </small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection