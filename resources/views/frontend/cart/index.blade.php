@extends('frontend.layout.app')

@section('content')
<div class="container py-5">
    <h1 class="mb-4">Shopping Cart</h1>

    @if($cartItems->count() > 0)
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        @foreach($cartItems as $item)
                            <div class="row mb-4 cart-item" data-id="{{ $item->id }}">
                                <div class="col-md-2">
                                    @if($item->product->image)
                                        <img src="{{ Storage::url($item->product->image) }}" class="img-fluid rounded" alt="{{ $item->product->name }}">
                                    @else
                                        <div class="bg-light text-center py-4 rounded">
                                            <span class="text-muted">No Image</span>
                                        </div>
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <h5>{{ $item->product->name }}</h5>
                                    <p class="text-muted mb-0">${{ number_format($item->product->price, 2) }} each</p>
                                </div>
                                <div class="col-md-3">
                                    <div class="input-group">
                                        <button class="btn btn-outline-secondary decrease-quantity" type="button">-</button>
                                        <input type="number" class="form-control text-center quantity-input" value="{{ $item->quantity }}" min="1" max="{{ $item->product->stock_quantity }}">
                                        <button class="btn btn-outline-secondary increase-quantity" type="button">+</button>
                                    </div>
                                    <small class="text-muted">{{ $item->product->stock_quantity }} available</small>
                                </div>
                                <div class="col-md-2">
                                    <div class="h5 mb-0 item-total">${{ number_format($item->product->price * $item->quantity, 2) }}</div>
                                </div>
                                <div class="col-md-1">
                                    <button class="btn btn-link text-danger remove-item">
                                        <i class="fas fa-trash"></i>
                                    </button>
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
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Order Summary</h5>
                        <div class="d-flex justify-content-between mb-3">
                            <span>Subtotal</span>
                            <span class="cart-total">${{ number_format($total, 2) }}</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-3">
                            <span class="h5">Total</span>
                            <span class="h5 cart-total">${{ number_format($total, 2) }}</span>
                        </div>
                        <a href="{{ route('checkout.index') }}" class="btn btn-primary btn-lg w-100">
                            Proceed to Checkout
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="text-center py-5">
            <h3 class="text-muted">Your cart is empty</h3>
            <a href="{{ route('shop.index') }}" class="btn btn-primary mt-3">
                Continue Shopping
            </a>
        </div>
    @endif
</div>


@endsection 

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.cart-item').forEach(item => {
            const id = item.dataset.id;
            const quantityInput = item.querySelector('.quantity-input');
            const decreaseBtn = item.querySelector('.decrease-quantity');
            const increaseBtn = item.querySelector('.increase-quantity');
            const removeBtn = item.querySelector('.remove-item');
            const itemTotal = item.querySelector('.item-total');
            const maxQuantity = parseInt(quantityInput.max);
    
            const updateQuantity = (newQuantity) => {
                fetch(`/cart/${id}`, {
                    method: 'PATCH',
                    headers: {
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                    },
                    body: JSON.stringify({ quantity: newQuantity })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        itemTotal.textContent = `$${data.total}`;
                        document.querySelectorAll('.cart-total').forEach(el => {
                            el.textContent = `$${data.cartTotal}`;
                        });
                    } else {
                        alert(data.message || 'Update failed.');
                        quantityInput.value = Math.max(1, parseInt(quantityInput.value) - 1);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    alert('Failed to update cart.');
                });
            };
    
            decreaseBtn.addEventListener('click', () => {
                const currentValue = parseInt(quantityInput.value);
                if (currentValue > 1) {
                    quantityInput.value = currentValue - 1;
                    updateQuantity(currentValue - 1);
                }
            });
    
            increaseBtn.addEventListener('click', () => {
                const currentValue = parseInt(quantityInput.value);
                if (currentValue < maxQuantity) {
                    quantityInput.value = currentValue + 1;
                    updateQuantity(currentValue + 1);
                }
            });
    
            quantityInput.addEventListener('change', () => {
                let value = parseInt(quantityInput.value);
                if (value < 1) value = 1;
                if (value > maxQuantity) value = maxQuantity;
                quantityInput.value = value;
                updateQuantity(value);
            });
    
            removeBtn.addEventListener('click', () => {
                if (confirm('Are you sure you want to remove this item?')) {
                    fetch(`/cart/${id}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            'Accept': 'application/json',
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            item.remove();
                            document.querySelector('.cart-count').textContent = data.cartCount;
    
                            if (data.cartCount === 0) {
                                window.location.reload();
                            }
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('Failed to remove item from cart.');
                    });
                }
            });
        });
    });
    </script>
    
