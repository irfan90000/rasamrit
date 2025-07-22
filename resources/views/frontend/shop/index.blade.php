@extends('frontend.layout.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <!-- Filters -->
        <div class="col-lg-3">
            <div class="card mb-4">
                <div class="card-header">
                    <h5 class="mb-0">Filters</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('shop.index') }}" method="GET">
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select name="status" class="form-control">
                                <option value="">All</option>
                                <option value="in_stock" {{ request('status') === 'in_stock' ? 'selected' : '' }}>In Stock</option>
                                <option value="out_of_stock" {{ request('status') === 'out_of_stock' ? 'selected' : '' }}>Out of Stock</option>
                                <option value="coming_soon" {{ request('status') === 'coming_soon' ? 'selected' : '' }}>Coming Soon</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Price Range</label>
                            <div class="row">
                                <div class="col">
                                    <input type="number" name="min_price" class="form-control" placeholder="Min" value="{{ request('min_price') }}">
                                </div>
                                <div class="col">
                                    <input type="number" name="max_price" class="form-control" placeholder="Max" value="{{ request('max_price') }}">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Sort By</label>
                            <select name="sort" class="form-control">
                                <option value="latest" {{ request('sort') === 'latest' ? 'selected' : '' }}>Latest</option>
                                <option value="price_low" {{ request('sort') === 'price_low' ? 'selected' : '' }}>Price: Low to High</option>
                                <option value="price_high" {{ request('sort') === 'price_high' ? 'selected' : '' }}>Price: High to Low</option>
                                <option value="name" {{ request('sort') === 'name' ? 'selected' : '' }}>Name</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Apply Filters</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="col-lg-9">
            <div class="row">
                @forelse($products as $product)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            @if($product->image)
                                <img src="{{ Storage::url($product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                            @else
                                <div class="card-img-top bg-light text-center py-4">No Image</div>
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text text-muted">{{ Str::limit($product->description, 100) }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="h5 mb-0">${{ number_format($product->price, 2) }}</span>
                                    <span class="badge badge-{{ $product->status === 'in_stock' ? 'success' : ($product->status === 'out_of_stock' ? 'danger' : 'warning') }}">
                                        {{ str_replace('_', ' ', ucfirst($product->status)) }}
                                    </span>
                                </div>
                            </div>
                            <div class="card-footer bg-white border-top-0">
                                <div class="d-grid">
                                    @if($product->status === 'in_stock')
                                        <button class="btn btn-primary add-to-cart" data-product-id="{{ $product->id }}">
                                            Add to Cart
                                        </button>
                                    @else
                                        <button class="btn btn-secondary" disabled>
                                            {{ $product->status === 'out_of_stock' ? 'Out of Stock' : 'Coming Soon' }}
                                        </button>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div class="alert alert-info">
                            No products found.
                        </div>
                    </div>
                @endforelse
            </div>

            <div class="mt-4">
                {{ $products->links() }}
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', function() {
        const productId = this.dataset.productId;
        // We'll implement this AJAX call later
        fetch(`/cart/add/${productId}`, {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                'Accept': 'application/json',
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Update cart count
                document.querySelector('.cart-count').textContent = data.cartCount;
                alert('Product added to cart!');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Failed to add product to cart.');
        });
    });
});
</script>
@endpush
@endsection 