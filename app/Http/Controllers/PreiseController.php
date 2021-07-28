<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\User;

class PreiseController extends Controller
{
        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
         $plans = \Stripe\Plan::all();


        return view('preise1');
    }
}
