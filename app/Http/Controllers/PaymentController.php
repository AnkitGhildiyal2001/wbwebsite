<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Charge;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class PaymentController extends Controller
{
    public function paymentProcess()
    {
        Stripe::setApiKey("sk_test_TMde1s3tfDJ4mAT0shwYp05N00YUbM6hu8");

        $intent = PaymentIntent::create([
            'amount' => 1099,
            'currency' => 'eur',
            // Verify your integration in this guide by including this parameter
            'metadata' => ['integration_check' => 'accept_a_payment'],
        ]);

        return $intent;
    }
}
