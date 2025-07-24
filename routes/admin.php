<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Backend\BlogPostController;

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {
    // Authentication Routes
    Route::get('/', function () {
        return redirect()->route('admin.login');
    });
    Route::get('login', [App\Http\Controllers\Backend\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [App\Http\Controllers\Backend\Auth\LoginController::class, 'login'])->name('login.submit');
    Route::post('logout', [App\Http\Controllers\Backend\Auth\LoginController::class, 'logout'])->name('logout');

    // Protected Routes
    Route::middleware('auth:admin')->group(function () {
        Route::get('dashboard', [App\Http\Controllers\Backend\DashboardController::class, 'index'])->name('dashboard');
        Route::resource('goal', App\Http\Controllers\Backend\GoalController::class);
        Route::resource('diet-type', App\Http\Controllers\Backend\DietTypeController::class);
        Route::resource('food-menu', App\Http\Controllers\Backend\FoodMenuController::class);
        Route::resource('food-plan', App\Http\Controllers\Backend\FoodPlanController::class);
        Route::resource('food-program', App\Http\Controllers\Backend\FoodProgramController::class);
        Route::resource('food-pricing', App\Http\Controllers\Backend\FoodPricingController::class);
        Route::resource('food-subscription', App\Http\Controllers\Backend\FoodSubscriptionController::class);
        Route::resource('Program-subscription', App\Http\Controllers\Backend\ProgramSubscriptionController::class);
        Route::resource('query', App\Http\Controllers\Backend\QueryController::class);
        Route::resource('testimonial', App\Http\Controllers\Backend\TestimonialController::class);
        Route::resource('faq', App\Http\Controllers\Backend\FaqController::class);
        Route::resource('website-setup', App\Http\Controllers\Backend\WebsiteSetupController::class);

        // Product Management Routes
        Route::resource('products', ProductController::class);

        // Order Management Routes
        Route::get('orders', [OrderController::class, 'adminIndex'])->name('orders.index');
        Route::get('orders/{order}', [OrderController::class, 'adminShow'])->name('orders.show');
        Route::patch('orders/{order}/status', [OrderController::class, 'updateStatus'])->name('orders.update-status');
        Route::patch('orders/{order}/payment', [OrderController::class, 'updatePaymentStatus'])->name('orders.update-payment');

        //blog-posts

        Route::resource('blog-posts', \App\Http\Controllers\Backend\BlogPostController::class);

    });
});
