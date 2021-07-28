@extends('layout.base')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bestätige deine Email Addresse') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Ein frischer Link wurde an deine Mailadresse gesendet!.') }}
                        </div>
                    @endif

                    {{ __('Bevor du unsere Plattform nutzen kannst, klicke bitte auf den Link in der Email, welche wir dir gerade gesendet haben.') }}
                    {{ __('Du hast keine Mail erhalten? Schaue in allen Ordnern (auch dem Spam) nach, oder') }} <a href="{{ url('email/resend') }}">{{ __('fordere hier eine neue Email an') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
