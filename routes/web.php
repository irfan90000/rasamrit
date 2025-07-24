<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShopController;
use App\Livewire\Frontend\ContactLivewire;
use App\Livewire\Frontend\PricingLivewire;
use App\Livewire\Frontend\ProgramLivewire;
use App\Livewire\Frontend\SubscriptionLivewire;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

require __DIR__.'/admin.php';

// User Authentication Routes
Auth::routes();

// Frontend Routes
Route::group(['as'=>'front.'], function () {
    // Controller routes
    Route::group(['namespace' => 'App\Http\Controllers\Frontend'], function () {
        Route::get('/', 'HomeController@index')->name('index');
        Route::get('food-menu', 'HomeController@foodmenu')->name('foodmenu');
        Route::get('all-menu', 'HomeController@allmenu')->name('allmenu');
        Route::get('online-coaching', 'HomeController@coaching')->name('coaching');
        Route::get('about-us', 'HomeController@about')->name('about');
        Route::get('terms-and-conditions', 'HomeController@terms')->name('terms');
        Route::get('privacy-policy', 'HomeController@privacy')->name('privacy');
    });

    // Livewire routes
    Route::group(['namespace' => 'App\Livewire\Frontend'], function () {
        Route::get('food-program', ProgramLivewire::class)->name('program');
        Route::get('food-pricing', PricingLivewire::class)->name('pricing');
        Route::get('food-subscription', SubscriptionLivewire::class)->name('subscription');
        Route::get('Program-subscription', SubscriptionLivewire::class)->name('Program_subscription');
        Route::get('connect-with-us', ContactLivewire::class)->name('contact');
    });
});

// Shop Routes
Route::get('/shop', [ShopController::class, 'index'])->name('shop.index');
Route::get('/shop/{product}', [ShopController::class, 'show'])->name('shop.show');

// Cart Routes
Route::middleware('auth')->group(function () {
    Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
    Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::patch('/cart/{cart}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/{cart}', [CartController::class, 'remove'])->name('cart.remove');
});

// Checkout & Order Routes
Route::middleware('auth')->group(function () {
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout.store');
    Route::get('/orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/orders/{order}', [OrderController::class, 'show'])->name('orders.show');
});

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{blogPost:slug}', [BlogController::class, 'show'])->name('blog.show');
Route::post('/blog/{blogPost:slug}/comment', [BlogController::class, 'comment'])->middleware('auth')->name('blog.comment');
Route::post('/blog/like', [BlogController::class, 'like'])->middleware('auth')->name('blog.like');
