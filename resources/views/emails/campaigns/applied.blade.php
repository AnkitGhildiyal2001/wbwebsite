@extends('emails.base')

@section('greeting')
    Hallo {{ $name }},
@endsection

@section('message')
    {{ $influencerName }} hat sich auf deine Kampagne "{{ $campaignTitle }}" beworben.
    <br/>
    {{ $approveText }}
@endsection

@section('cta-link', route('user.campaign.show', $campaignSlug))
@section('cta-text', 'Zur Kampagne')