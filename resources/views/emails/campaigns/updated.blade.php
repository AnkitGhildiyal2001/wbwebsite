@extends('emails.base')

@section('greeting')
    Hallo {{ $name }},
@endsection

@section('message')
    @if ($fromInfluencer)
        Für deine Kampagne "{{ $campaignTitle }}" wurde von {{ $influencerName }} ein Nachweis eingereicht. Schaue ihn dir jetzt auf der Kampagnenseite an.
    @else
        Deine Kampange "{{ $campaignTitle }}" wurde als {{ $campaignState }} markiert. 
    @endif
@endsection

@section('cta-link', route('user.campaign.show', $campaignSlug))
@section('cta-text', 'Zur Kampagne')