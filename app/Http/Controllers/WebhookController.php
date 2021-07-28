<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Laravel\Cashier\Subscription;
use Laravel\Cashier\Http\Controllers\WebhookController as CashierController;

class WebhookController extends CashierController
{

    /**
     * Handle subscription creation.
     *
     * @param  array  $payload
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handleCustomerSubscriptionCreated($payload)
    {
        // Find the user
        if ( $user = $this->getUserByStripeId( $payload['data']['object']['customer'] ) ) {
            $data = $payload['data']['object'];
            // Find the user's subscription
            $user->subscriptions->first(function (Subscription $subscription) use ($data) {

                $plans = [
                    env('STRIPE_PLAN_STRATUP') => 'startup',
                    env('STRIPE_PLAN_GROW') => 'grow',
                    env('STRIPE_PLAN_ULTIMATE') => 'ultimate'
                ];
                $plan_name = isset( $plans[$data['plan']['id']] ) ? $plans[$data['plan']['id']] : false;

                if ( $plan_name ) {

                    $subscription->name = $plan_name;
                    $subscription->stripe_id = $data['id'];
                    $subscription->stripe_plan = $data['plan']['id'];
                    $subscription->quantity = $data['quantity'];
                    $subscription->stripe_status = $data['status'];

                    // Trial ending date
                    if ( isset($data['trial_end'] ) ) {
                        $trial_ends = Carbon::createFromTimestamp( $data['trial_end'] );

                        if ( !$subscription->trial_ends_at || $subscription->trial_ends_at->ne( $trial_ends ) ) {
                            $subscription->trial_ends_at = $trial_ends;
                        }
                    }

                    // Cancellation date
                    if ( isset( $data['cancel_at_period_end'] ) ) {
                        if ( $data['cancel_at_period_end'] ) {
                            $subscription->ends_at = $subscription->onTrial()
                                ? $subscription->trial_ends_at
                                : Carbon::createFromTimestamp($data['current_period_end'] );
                        } else {
                            $subscription->ends_at = null;
                        }
                    }

                    $subscription->save();

                }
            });

        }
        return $this->successMethod();
    }
}