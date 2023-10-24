<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\card_holder;

use Stripe\Stripe;

use Session;

class UserController extends Controller
{

    public function card_Form()
    {
        return view('Admin.cardForm');
    }
    //
    public function call(Request $request) {
        \Stripe\Stripe::setApiKey('sk_test_51NknywEzFs0spnMqXd4wja8oV7xmk1t61RCK6kTUKj2umcvSMtlKWbw91ZIXCiaNHNpVigvx6GVHNDQbGlzTL3ZS00bO0jSA8s');
    
        // Validate the amount field
        $validatedData = $request->validate([
            'amount' => 'required|numeric|min:1', // Ensure amount is a number and at least 1
        ]);
    
        $customer = \Stripe\Customer::create(array(
            'name' => 'programming solutions',
            'description' => 'test description',
            'email' => 'emails@gmail.com',
            'source' => $request->input('stripeToken'),
            "address" => ["city" => "San Francisco", "country" => "US", "line2" => "510 Townsend St", "postal_code" => "98140", "state" => "CA"]
        ));
    
        try {
            $amount = $validatedData['amount'] * 100; // Multiply by 100 if needed
            $card_holder = $request-> card_holder;
            \Stripe\Charge::create(array(
                "amount" => $amount,
                "currency" => "zar",
                "customer" => $customer->id,
                "description" => $card_holder,
                
            ));
    
            Session::flash('success-message', 'Payment done successfully !');
            return view('Admin.cardForm');
        } catch (\Stripe\Error\Card $e) {
            Session::flash('fail-message', $e->getMessage());
            
            return view('Admin.cardForm');
        }
    }
    
}