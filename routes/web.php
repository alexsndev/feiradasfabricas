<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;

Route::get('/', function () {
    $products = Product::all();
    return view('home', compact('products'));
});

Route::get('/product/{id}', function ($id) {
    $product = Product::findOrFail($id);
    return view('product', compact('product'));
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});
