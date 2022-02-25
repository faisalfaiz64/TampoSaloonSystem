<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout($id)
    {   
        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey('sk_test_51I6bouGWHigJXeEuWgapzbhrGWvaM1p3nKKcyEDwwhBHee1TC88TFIXwxwVDpuDq51H4UTmLdxzDze6B0G803sXr00bwAlkEjP');
        		
		$amount = $id;
		$amount *= $id;
        $amount = (int) $amount;
        
        $payment_intent = \Stripe\PaymentIntent::create([
			'description' => 'Stripe Test Payment',
			'amount' => $amount,
			'currency' => 'PKR',
			'description' => 'Payment From TampoSalon',
			'payment_method_types' => ['card'],
		]);
		$intent = $payment_intent->client_secret;

		return view('checkout.credit-card',compact('intent','id'));

    }

    public function afterPayment()
    {
        
    }
}