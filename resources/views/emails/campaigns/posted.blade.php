@extends('emails.base')

@section('greeting')
    Hallo {{ $name }},
@endsection

@section('message')
    {{ $name }} hat sich auf deine Kampagne "{{ $campaignTitle }}" beworben.
    <br/>
    Message in the email.
@endsection

@section('cta-link', route('user.campaign.show', $campaignSlug))
@section('cta-text', 'Zur Kampagne')