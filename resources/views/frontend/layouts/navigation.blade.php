<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="shopDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Shop
    </a>
    <div class="dropdown-menu" aria-labelledby="shopDropdown">
        <a class="dropdown-item" href="{{ route('shop.index') }}">All Products</a>
        @auth
            <a class="dropdown-item" href="{{ route('cart.index') }}">
                My Cart
                <span class="badge badge-primary cart-count">0</span>
            </a>
            <a class="dropdown-item" href="{{ route('orders.index') }}">My Orders</a>
        @endauth
    </div>
</li> 