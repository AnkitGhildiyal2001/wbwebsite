<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZFJWRYBPEC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-ZFJWRYBPEC');
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zahlung</title>
</head>
<body>
    
@extends('layout/base')

@section('title', 'Payment')

@section('content')
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<div class="card">
    <div class="card-content">
        <div class="card-body">
            <form id="change-payment">
                @method('patch')
                @csrf
                <div class="form-group mt-2">
                    <div class="row">
                        <div class="col-sm-6 col-12">
                            <div class="form-label-group">
                                <input type="name" class="form-control" id="card-holder-name" placeholder="Name On card" required>
                                <label for="newName">Card Holder</label>
                                @if(Session::has('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ Session::get('error') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row mt-50">
                        <div class="col-sm-6 col-12">
                                <div id="card-element" class="py-2"></div>
                                <button class="btn btn-primary mb-2 mt-2 float-left" id="card-button" data-secret="{{ $intent->client_secret }}">
                                    Update Payment Method
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://js.stripe.com/v3/"></script>

<script>
        const stripe = Stripe('{{ env('STRIPE_KEY') }}');

const elements = stripe.elements();
const cardElement = elements.create('card');

cardElement.mount('#card-element');

const cardHolderName = document.getElementById('card-holder-name');
const cardButton = document.getElementById('card-button');
const clientSecret = cardButton.dataset.secret;

cardButton.addEventListener('click', async (e) => {
    const { setupIntent, error } = await stripe.handleCardSetup(
        clientSecret, cardElement, {
            payment_method_data: {
                billing_details: { name: cardHolderName.value }
            }
        }
    );

    if (error) {
        // Display "error.message" to the user...
    } else {
        $.post({
                url: '/card-save',
                data: {
                    card: setupIntent["payment_method"],
                    _token: "{{ csrf_token() }}",
                }
                
            })     
    }
    
});
</script>
@endsection

</body>
</html>