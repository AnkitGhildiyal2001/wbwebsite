<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Request;
use Stripe\Coupon;
use Stripe\Stripe;

class CheckoutController extends Controller
{
    public function checkout($plan_id)
    {
        $plan = Plan::findOrFail($plan_id);

        $currentPlan = auth()->user()->subscription('default')->stripe_plan ?? NULL;
        if (!is_null($currentPlan) && $currentPlan != $plan->stripe_plan_id) {
            auth()->user()->subscription('default')->noProrate()->swap($plan->stripe_plan_id);

        }

        $subtotal = $plan->price;
        $taxPercent = auth()->user()->taxPercentage();
        $taxAmount = round($subtotal * $taxPercent / 100);
        $total = $subtotal + $taxAmount;

        $intent = auth()->user()->createSetupIntent();
        return view('billing.checkout', compact('plan', 'intent', 'subtotal', 'taxPercent', 'taxAmount', 'total'));
    }

    public function processCheckout(Request $request)
    {
        $plan = Plan::findOrFail($request->input('billing_plan_id'));
        try {
            auth()->user()->newSubscription('default', $plan->stripe_plan_id)
                ->withCoupon($request->input('coupon'))
                ->create($request->input('payment-method'));
            return redirect()->route('billing')->withMessage('Subscribed successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->withError($e->getMessage());
        }
    }

    public function checkCoupon(Request $request) {
        try {
            Stripe::setApiKey(env('STRIPE_SECRET'));
            $coupon = Coupon::retrieve($request->input('coupon_code'));
        } catch (\Exception $ex) {
            return response()->json(['error_text' => 'Coupon not found']);
        }

        return $coupon;
    }

}
