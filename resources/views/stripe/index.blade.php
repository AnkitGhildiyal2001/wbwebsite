@extends('layout.base')
@section('title', 'Zahlung')

@section('content')
@endsection

@section('page-script')
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        var stripe = Stripe('{{ env("STRIPE_KEY") }}');
        stripe.redirectToCheckout({
            // Make the id field from the Checkout Session creation API response
            // available to this file, so you can provide it as argument here
            // instead of the CHECKOUT_SESSION_ID placeholder.
            sessionId: '{{ $sessionId }}'
        }).then(function (result) {
            console.log(result);
            // If `redirectToCheckout` fails due to a browser or network
            // error, display the localized error message to your customer
            // using `result.error.message`.
        });
    </script>
@endsection