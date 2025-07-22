<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cartItems = Cart::with('product')
            ->where('user_id', auth()->id())
            ->get();

        $total = $cartItems->sum(function ($item) {
            return $item->product->price * $item->quantity;
        });

        return view('frontend.cart.index', compact('cartItems', 'total'));
    }

    public function add(Request $request, Product $product)
    {
        if (!$product->is_active || $product->status !== 'in_stock') {
            return response()->json([
                'success' => false,
                'message' => 'Product is not available.',
            ], 400);
        }

        $quantity = $request->input('quantity', 1);

        if ($quantity > $product->stock_quantity) {
            return response()->json([
                'success' => false,
                'message' => 'Not enough stock available.',
            ], 400);
        }

        $cartItem = Cart::where('user_id', auth()->id())
            ->where('product_id', $product->id)
            ->first();

        if ($cartItem) {
            $newQuantity = $cartItem->quantity + $quantity;
            if ($newQuantity > $product->stock_quantity) {
                return response()->json([
                    'success' => false,
                    'message' => 'Not enough stock available.',
                ], 400);
            }
            $cartItem->update(['quantity' => $newQuantity]);
        } else {
            Cart::create([
                'user_id' => auth()->id(),
                'product_id' => $product->id,
                'quantity' => $quantity,
            ]);
        }

        $cartCount = Cart::where('user_id', auth()->id())->sum('quantity');

        return response()->json([
            'success' => true,
            'cartCount' => $cartCount,
            'message' => 'Product added to cart successfully.',
        ]);
    }

    public function update(Request $request, Cart $cart)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);

        if ($cart->user_id !== auth()->id()) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized action.',
            ], 403);
        }

        if ($request->quantity > $cart->product->stock_quantity) {
            return response()->json([
                'success' => false,
                'message' => 'Not enough stock available.',
            ], 400);
        }

        $cart->update(['quantity' => $request->quantity]);

        return response()->json([
            'success' => true,
            'message' => 'Cart updated successfully.',
            'total' => number_format($cart->product->price * $cart->quantity, 2),
            'cartTotal' => number_format(Cart::where('user_id', auth()->id())->get()->sum(function ($item) {
                return $item->product->price * $item->quantity;
            }), 2),
        ]);
    }

    public function remove(Cart $cart)
    {
        if ($cart->user_id !== auth()->id()) {
            return response()->json([
                'success' => false,
                'message' => 'Unauthorized action.',
            ], 403);
        }

        $cart->delete();

        return response()->json([
            'success' => true,
            'message' => 'Item removed from cart.',
            'cartCount' => Cart::where('user_id', auth()->id())->sum('quantity'),
        ]);
    }
} 