<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use Stripe\Charge;
use Stripe\Customer;
use Stripe\Stripe;
use Stripe\OAuth;
use App\Plan;
use Illuminate\Support\Facades\DB;

class StripeController extends Controller
{

    public function __construct()
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));
    }
    public function billingCreateSession($plan_id){

        $plan = Plan::findOrFail($plan_id);

        $currentPlan = auth()->user()->subscription('default')->stripe_plan ?? NULL;
        if (!is_null($currentPlan) && $currentPlan != $plan->stripe_plan_id) {
            auth()->user()->subscription('default')->noProrate()->swap($plan->stripe_plan_id);

        }
        Session::put('plan_id', $plan_id);
        $metadata = [
            'user_id' => auth()->user()->id,
            'plan_id' => $plan_id,
        ];
        $stripe_plan_tax_id = env('STRIPE_TAX');
        $payment_method_types = ['card'];
        $line_items = [
            [
                'price' => $plan->stripe_plan_id,
                'quantity' => 1,
                'tax_rates' => [ $stripe_plan_tax_id],
            ]
        ];
        $success_url = route('success.stripe.billing')."?session_id={CHECKOUT_SESSION_ID}";
        $cancel_url = route('cancel.stripe.billing');
        $session_data = [
            'customer_email' => auth()->user()->email,
            'client_reference_id' => auth()->user()->id,
            'allow_promotion_codes' => true,
            'payment_method_types' => $payment_method_types,
            'line_items' => $line_items,
            'mode' => 'subscription',
            'success_url' => $success_url,
            'cancel_url' => $cancel_url,
            'metadata' => $metadata,
            'subscription_data' => [
                "metadata" => $metadata
            ],
            'locale' => 'de'
        ];
        $session = \Stripe\Checkout\Session::create($session_data);
        $sessionId = $session['id'];
        return view('stripe.index', compact('sessionId'));
    }

    public function billingSuccess(Request $request){
        try{
            $session_id = $request->get('session_id');
            $session = \Stripe\Checkout\Session::retrieve($session_id);
            $stripe_subscription_id = $session['subscription'];
            $subscription = \Stripe\Subscription::retrieve($stripe_subscription_id);
            $is_status = $subscription['status'];
            if($is_status == 'active'){
                $paymenth_method_id = $subscription['default_payment_method'];
                $metadata = $subscription['metadata'];
                $plan_id = 0;
                if(isset($metadata->plan_id)){
                    $plan_id = $metadata->plan_id;
                }
                if(!$plan_id){
                    if(Session::has('plan_id')){
                        $plan_id = Session::get('plan_id');
                        Session::forget('plan_id');
                    }
                }

                $customer = \Stripe\Customer::retrieve($session['customer']);
                if(isset($customer['invoice_settings']['default_payment_method'])){
                    \Stripe\Customer::update($session['customer'], [
                        'invoice_settings' => [
                            'default_payment_method' => $paymenth_method_id
                        ]
                    ]);
                }
                $plan = Plan::findOrFail($plan_id);

                $user = auth()->user();
                DB::transaction(function () use ($session, $user, $stripe_subscription_id, $is_status, $plan) {
                    $user->update(['stripe_id' => $session['customer']]);
        
                    $user->subscriptions()->create([
                        'name'          => 'default',
                        'stripe_id'     => $stripe_subscription_id,
                        'stripe_status' => $is_status, // Or use "active" if you don't provide a trial
                        'stripe_plan'   => $plan->stripe_plan_id,
                        'quantity'      => 1,
                    ]);
                });
                return redirect()->route('billing')->withMessage('Subscribed successfully!');
            }else{
                dd($subscription);
            }
        }catch(\Exception $e){
            dd($e->getMessage(), $e->getCode(), $e->getLine(), $e->getFile());
            return redirect()->route('billing')->withError($e->getMessage());
        }
    }

    public function billingCancel(){
        return redirect()->route('billing');
    }
}