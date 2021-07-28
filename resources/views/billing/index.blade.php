@extends('layout.base')
@section('title', 'Mitgliedschaft')

@section('content')
    <div>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"></div>

                    <div class="card-body">
                        @if (session('message'))
                            <div class="alert alert-info">{{ session('message') }}</div>
                        @endif

                        @if (is_null($currentPlan))
                            Aktuell hast du keine aktive Mitgliedschaft. Wähle die passende Mitgliedschaft für dein Unternehmen um eine Kampagne zu veröffentlichen.
                            <br/><br/>
                                <div class="alert alert-danger" role="alert">
                                    Bitte beachte, dass aktuell nur die Zahlung per Kreditkarte möglich ist. Sollte dies ein Problem darstellen, kontaktiere unseren Support und wir finden eine Lösung.
                                </div>
                        @endif
                        <br>
                        <br>
                        <br>
                        <div class="row">
                            @foreach ($plans as $plan)
                                <div class="col-md-4 text-center">
                                    <h3>{{ $plan->name }}</h3>
                                    <b>${{ number_format($plan->price / 100, 2) }}/Month</b>
                                    <hr/>
                                    @if (!is_null($currentPlan) && $plan->stripe_plan_id == $currentPlan->stripe_plan)
                                        Aktuelle Mitgliedschaft
                                        <br />
                                        @if (!$currentPlan->onGracePeriod())
                                            <a href="{{ route('cancel') }}" class="btn btn-danger" onclick="return confirm('Bist du sicher?')">Mitgliedschaft beenden</a>
                                        @else
                                            Mitgliedschaft endet am {{ $currentPlan->ends_at->toDateString() }}
                                            <br /><br />
                                            <a href="{{ route('resume') }}" class="btn btn-primary">Mitgliedschaft fortsetzen</a>
                                        @endif
                                    @else
                                        <a href="{{ route('checkout', $plan->id) }}" class="btn btn-primary">{{ $plan->name }} buchen</a>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!--Payment Method Section-->
                    @if (!is_null($currentPlan))
                        <br/>
                        <div class="card">
                            <div class="card-header">Zahlungsmethoden</div>

                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Herausgeber</th>
                                        <th>Ablaufdatum</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($paymentMethods as $paymentMethod)
                                        <tr>
                                            <td>{{ $paymentMethod->card->brand }}</td>
                                            <td>{{ $paymentMethod->card->exp_month }}
                                                / {{ $paymentMethod->card->exp_year }}</td>
                                            <td>
                                                @if ($defaultPaymentMethod->id == $paymentMethod->id)
                                                    default
                                                @else
                                                    <a href="{{ route('payment-methods.markDefault', $paymentMethod->id) }}"><Mark
                                                        as Default></a>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <br/>
                                <a href="{{ route('payment-methods.create') }}" class="btn btn-primary">Hinzufügen</a>
                            </div>
                        </div>
                @endif
                <!--End Payment Method Section-->

                    <br />
                    <div class="card">
                        <div class="card-header">Rechnungen</div>

                        <div class="card-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Datum</th>
                                    <th>Betrag</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($payments as $payment)
                                    <tr>
                                        <td>{{ $payment->created_at }}</td>
                                        <td>${{ number_format($payment->total / 100, 2) }}</td>
                                        <td>
                                            <a href="{{ route('invoices.download', $payment->id) }}" class="btn btn-sm btn-primary">Als PDF laden</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection