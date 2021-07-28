@extends('layout/base')

@php
    $title = $campaign->title;
@endphp
@section('title', $title)

@section('page-style')
        {{-- Page Css files --}}
        <link rel="stylesheet" href="{{ asset(mix('css/pages/campaigns.css')) }}">
@endsection
@section('content')
    <div class="row">
        <div class="col-md-6 col-12">
            <h2>{{ $campaign->company()->first()->name }}</h2>
            {{ $campaign->campaignCategory()->first()->name }}<br/><br/>
            <p>
                {{ $campaign->description }}
            </p>
            @if ($hashtags)
            <div class="hashtags">
                @foreach ($hashtags as $hashtag)
                    <div>{{ $hashtag }}</div>
                @endforeach
            </div>
            @endif
        </div>
        <div class="col-md-6 col-12">
            <div id="campaignIndicators" class="carousel slide">
                <ol class="carousel-indicators">
                    @foreach ($images as $key=>$image)
                        <li data-target="#campaignIndicators" data-slide-to="{{ $key }}" class="active"></li>
                    @endforeach
                </ol>
                <div class="carousel-inner">
                    @foreach ($images as $image)
                        @if ($loop->first)
                            <div class="carousel-item active">
                        @else
                            <div class="carousel-item">
                        @endif
                            <img class="d-block w-100" src="{{ $image->url }}">
                        </div>
                    @endforeach
                </div>
                <a class="carousel-control-prev" href="#campaignIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#campaignIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <div class="mt-3">
        @if ($user->isCompany())
            <a href="{{ route('campaign.edit', $campaign->slug) }}">
                <button type="button" class="btn btn-primary float-right mb-2 waves-effect waves-light">Kampagne bearbeiten</button>
            </a>
            <form method="POST" action="{{ route('campaign.delete', [$campaign->company()->first()->slug, $campaign->slug]) }}">
                @csrf
                @method('delete')
                <input type="hidden" value="{{$campaign->slug}}" name="campaign_slug">
                <button type="submit" class="btn btn-primary btn-inline mb-50 waves-effect waves-light">Kampagne löschen</button>
            </form>
        @endif
        @if (!$user->isCompany())
            @if ($user->address || $campaign->coupon_code)
                <form method="POST" action="{{ route('campaign.apply') }}">
                    @csrf
                    @method('post')
                    @if($user->campaigns()->find($campaign->id) == null)
                        @if($campaign->influencerCount() < $campaign->influencer_quantity)
                            <input type="hidden" value="{{$campaign->slug}}" name="campaign_slug">
                            <button type="submit" class="btn btn-primary float-right mb-2 waves-effect waves-light">Bewerben</button>
                        @else
                            <p>Diese Kampagne ist bereits voll. Du kannst dich leider nicht mehr bewerben.</p>
                        @endif
                    @endif
                </form>
            @else
                <p class="alert alert-warning">Bitte hinterlege zuerst deine Adresse, bevor du dich auf diese Kampagne bewerben kannst. <a href="{{ route('account.address') }}">Hier Adresse hinterlegen.</a></p>
            @endif
        @endif
    </div>
@endsection
@section('page-script')
        <script>
            $('.carousel').carousel('pause'); 
        </script>
@endsection
