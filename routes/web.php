<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\EnsureUserIsSeller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Seller Routes 
    Route::middleware([EnsureUserIsSeller::class])->group(function () {
        Route::get('/product/add', function () {
            return view('products.add');
        });
        Route::get('/product/view', [ProductController::class, 'getProducts']);
        Route::post('/product', [ProductController::class, 'createProduct']);
        Route::delete('/product/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
        // Route::get('/product/{id}', [ProductController::class, 'editView']);
        Route::get('/product/{product}/variant/{variant}', [ProductController::class, 'editView'])->name('products.variants.edit');
        Route::put('/product/{productId}', [ProductController::class, 'edit']);
        
        // Manage Orders
        Route::get('/orders/manage', [OrderController::class, 'manageOrders']);
        Route::put('/orders/update', [OrderController::class, 'update'])->name('orders.update');

        //Switch to user
        Route::get('/user/switch', function() {
            return view('user.switch');
        });
        Route::post('/user/switch', [ProfileController::class, 'switchToUser']);
    });

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Cart Routes 
    Route::get('/cart', [CartController::class, 'index']);
    Route::get('/cart/add/{productId}/{variantId}', [CartController::class, 'add'])->name('cart.add');
    Route::delete('/cart/remove/{key}', [CartController::class, 'remove'])->name('cart.remove');
    Route::put('/cart/update/{key}', [CartController::class, 'update'])->name('cart.update');

    // Orders Routes 
    Route::post('/orders/place', [OrderController::class, 'placeOrder'])->name('orders.place');
    Route::get('/orders', [OrderController::class, 'getOrders'])->name('orders');

    
    // Contact us
    Route::get('/contactus', function() {
        return view('contactus.index');
    });

    Route::get('/seller/become', function() {
        return view('seller.become');
    });

    Route::post('/seller/become', [ProfileController::class, 'becomeSeller']);
});

require __DIR__ . '/auth.php';
