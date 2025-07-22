@extends('frontend.layout.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-6">
            @if($product->image)
                <img src="{{ Storage::url($product->image) }}" class="img-fluid rounded" alt="{{ $product->name }}">
            @else
                <div class="bg-light text-center py-5 rounded">
                    <h3 class="text-muted">No Image Available</h3>
                </div>
            @endif
        </div>
        <div class="col-md-6">
            <h1 class="mb-4">{{ $product->name }}</h1>
            
            <div class="mb-4">
                <span class="h2">${{ number_format($product->price, 2) }}</span>
                <span class="badge badge-{{ $product->status === 'in_stock' ? 'success' : ($product->status === 'out_of_stock' ? 'danger' : 'warning') }} ml-2">
                    {{ str_replace('_', ' ', ucfirst($product->status)) }}
                </span>
            </div>

            <div class="mb-4">
                <p class="text-muted">{{ $product->description }}</p>
            </div>

            @if($product->status === 'in_stock')
                <div class="mb-4">
                    <label for="quantity" class="form-label">Quantity</label>
                    <div class="input-group" style="width: 150px;">
                        <button class="btn btn-outline-secondary" type="button" id="decrease-quantity">-</button>
                        <input type="number" class="form-control text-center" id="quantity" value="1" min="1" max="{{ $product->stock_quantity }}">
                        <button class="btn btn-outline-secondary" type="button" id="increase-quantity">+</button>
                    </div>
                    <small class="text-muted">{{ $product->stock_quantity }} items available</small>
                </div>

                <button class="btn btn-primary btn-lg add-to-cart" data-product-id="{{ $product->id }}">
                    Add to Cart
                </button>
            @else
                <button class="btn btn-secondary btn-lg" disabled>
                    {{ $product->status === 'out_of_stock' ? 'Out of Stock' : 'Coming Soon' }}
                </button>
            @endif
        </div>
    </div>
</div>

@push('scripts')
<script>
// Quantity controls
const quantityInput = document.getElementById('quantity');
const decreaseBtn = document.getElementById('decrease-quantity');
const increaseBtn = document.getElementById('increase-quantity');
const maxQuantity = {{ $product->stock_quantity }};

decreaseBtn.addEventListener('click', () => {
    const currentValue = parseInt(quantityInput.value);
    if (currentValue > 1) {
        quantityInput.value = currentValue - 1;
    }
});

increaseBtn.addEventListener('click', () => {
    const currentValue = parseInt(quantityInput.value);
    if (currentValue < maxQuantity) {
        quantityInput.value = currentValue + 1;
    }
});

// Add to cart functionality
document.querySelector('.add-to-cart')?.addEventListener('click', function() {
    const productId = this.dataset.productId;
    const quantity = parseInt(quantityInput.value);

    fetch(`/cart/add/${productId}`, {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
            'Content-Type': 'application/json',
            'Accept': 'application/json',
        },
        body: JSON.stringify({ quantity })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            document.querySelector('.cart-count').textContent = data.cartCount;
            alert('Product added to cart!');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Failed to add product to cart.');
    });
});
</script>
@endpush
@endsection 