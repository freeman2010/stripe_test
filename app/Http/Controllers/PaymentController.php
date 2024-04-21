<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// class PaymentController extends Controller
// {
//   try {
//     $charge = \Stripe\Charge::create([
//       'amount' => 1000,
//       'currency' => 'usd',
//       'source' => $requeset->stripeToken,
//       'description' => 'Laravel payment',
//     ]);
//     if($charge->status == 'succeeded') {
//       return redirect()->route('payment.success');
//     }
//   } catch (\Stripe\Exception\CardException $e) {
//     return back()->withErrors(['card_error' => $e->getMessage()]);
//   } catch (\Exception $e) {
//     return back()->withErrors(['general_error' => 'Something went wrong. Please try again.']);
//   }
// }
