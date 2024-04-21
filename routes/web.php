<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\StripePaymentController;

// Route::get('/', function () {
//   return view('payment');
// });

// Route::get('/user/{id}', function(Request $request, string $id) {
//   return 'User:'.$id;
// })->where('id', '[0-9]+');

// Route::get('/user/{name?}', function(?string $name ='default name') {
//   return $name;
// })->where('name', '[A-Za-z]+');

// Route::get('/category/{category}', function(string $category) {
//   return $category;
// })->whereIn('category', ['movie', 'song', 'painting']);

Route::get('/', [StripePaymentController::class, 'stripe'])->name('stripe.index');
Route::get('stripe/checkout', [StripePaymentController::class, 'stripeCheckout'])->name('stripe.checkout');
Route::get('stripe/checkout/success', [StripePaymentController::class, 'stripeCheckoutSuccess'])->name('stripe.checkout.success');
