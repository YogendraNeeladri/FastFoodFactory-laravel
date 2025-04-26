<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class, 'my_home']);  // Home page route
Route::get('/cart', [HomeController::class, 'my_cart']); // View cart
Route::get('/remove_cart/{id}', [HomeController::class, 'remove_cart']); // Remove item from cart
Route::post('/confirm_order', [HomeController::class, 'confirm_order']); // Confirm order

Route::get('/home', [HomeController::class, 'index']);  // User home page route

// Admin routes
Route::get('/add_food', [AdminController::class, 'add_food']);
Route::post('/upload_food', [AdminController::class, 'upload_food']);
Route::get('/view_food', [AdminController::class, 'view_food']);
Route::get('/delete_food/{id}', [AdminController::class, 'delete_food']);
Route::get('/update_food/{id}', [AdminController::class, 'update_food']);
Route::post('/edit_food/{id}', [AdminController::class, 'edit_food']);

// Cart routes
Route::post('/add_cart/{id}', [HomeController::class, 'add_cart']);
Route::get('/my_cart', [HomeController::class, 'my_cart']);
Route::get('/remove_cart/{id}', [HomeController::class, 'remove_cart']);
Route::post('/confirm_order', [HomeController::class, 'confirm_order']);

// Order management (Admin routes)
Route::get('/orders', [AdminController::class, 'orders']);
Route::get('/on_the_way/{id}', [AdminController::class, 'on_the_way']);
Route::get('/delivered/{id}', [AdminController::class, 'delivered']);
Route::get('/cancelled/{id}', [AdminController::class, 'cancelled']);

// Authentication routes for verified users
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
