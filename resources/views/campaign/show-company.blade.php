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

<section id="basic-tabs-components">
    <div class="row">
      <div class="col-sm-12">
        <div class="card overflow-hidden">
          <div class="card-content">
            <div class="card-body">
              <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" aria-controls="profile"
                    role="tab" aria-selected="false">Kampagne</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" aria-controls="about" role="tab"
                    aria-selected="false">Influencer</a>
                </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="profile" aria-labelledby="profile-tab" role="tabpanel">
                    <div class="row">
                        <div class="col-md-6 col-12">
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
                </div>
                <div class="tab-pane" id="about" aria-labelledby="about-tab" role="tabpanel">
                    <div class="row">
                          <div class="col-12">
                            <div class="row mt-1">
                                <div class="col-md-4 col-12">
                                    <div class="list-group" id="list-tab" role="tablist">
                                        @foreach ($users as $key=>$influencer)
                                        <a class="list-group-item list-group-item-action {{ $key == 0 ? 'active' : '' }}" id="list-home-list" data-toggle="list" href="#{{$influencer->slug}}" role="tab" aria-controls="list-home">
                                            <img class="round" src="{{ $influencer->image }}" alt="avatar" height="40" width="40">
                                            {{ $influencer->firstname }} {{ $influencer->lastname }}
                                        </a>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-8 col-12 mt-1">
                                    <div class="tab-content" id="nav-tabContent">
                                        @foreach ($users as $key=>$influencer)
                                        <div class="tab-pane fade show {{ $key == 0 ? 'active' : '' }}" id="{{ $influencer->slug }}" role="tabpanel"
                                        aria-labelledby="list-home-list">
                                        @php
                                            $submissions = null;
                                            $campaignUser = $campaign->users->find($influencer->id);
                                            $state_id = $campaignUser->pivot->state_id;
                                            if($state_id == 4 || $state_id == 6) {
                                                $submissions = json_decode($campaignUser->pivot->submission);
                                            }
                                            $state = App\CampaignState::find($state_id)->name;
                                            $currentStateKeyinSteps = array_search($state, $steps);
                                            if($state_id !== 6) {
                                                $nextStepIndex = $currentStateKeyinSteps + 1;
                                                $nextStep = $steps[$nextStepIndex];
                                            }
                                        @endphp
                                            <ul class="state-list">
                                                @foreach ($steps as $key=>$step)
                                                    @if ($step == $state)
                                                    <li class="active">
                                                    @else
                                                        @if ($key + 1 < $state_id && $step !== $state)
                                                            <li class="done">
                                                        @else
                                                            <li>
                                                        @endif
                                                    @endif
                                                        <div class="step_number">{{ $key + 1 }}</div>
                                                        <p>{{ $step }}</p>
                                                    </li>
                                                    @if ($step == "Nachweis eingereicht" && $submissions)
                                                        <div class="mb-2">
                                                            @foreach ($submissions as $submission)
                                                                <p>
                                                                    <a href="{{ $submission }}" target="_blank">{{ $submission }}</a>
                                                                </p>
                                                            @endforeach
                                                        </div>
                                                    @endif
                                                @endforeach
                                            </ul>
                                            <div>
                                                <a href="{{ route('influencer.profile', $influencer->slug) }}">
                                                    Profil ansehen
                                                </a>
                                            </div>
                                            @switch($state_id)
                                                @case(1)
                                                <div>
                                                    <form action="{{ route('campaign.accept', [$campaign->slug, $influencer->slug] ) }}" method="post">
                                                        @csrf
                                                        @method('post')
                                                        <button type="submit" class="btn btn-success float-right">Annehmen</button>
                                                    </form>
                                                    <form action="{{ route('campaign.decline', [$campaign->slug, $influencer->slug] ) }}" method="post">
                                                        @csrf
                                                        @method('post')
                                                        <button type="submit" class="btn btn-danger mr-2 float-right">Ablehnen</button>
                                                    </form>
                                                </div>
                                                    @break
                                                @case(2)
                                                    @if (!$campaign->coupon_code && $campaign->shipping_by_company)
                                                        <form action="{{ route('campaign.setstate', [$campaign->slug, $influencer->slug, $nextStep] ) }}" method="post">
                                                            @csrf
                                                            @method('patch')
                                                            <button type="submit" class="btn btn-primary float-right btn-inline mb-50 waves-effect waves-light">Als versendet markieren</button>
                                                        </form>
                                                    @endif
                                                    @break
                                                @case(4)
                                                    <form action="{{ route('campaign.setstate', [$campaign->slug, $influencer->slug, $nextStep] ) }}" method="post">
                                                        @csrf
                                                        @method('patch')
                                                        <button type="submit" class="btn btn-primary float-right btn-inline mb-50 waves-effect waves-light">Als abgeschlossen markieren</button>
                                                    </form>
                                                @default
                                            @endswitch
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{-- Basic Tag Input end --}}

    
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
            <form method="POST" action="{{ route('campaign.apply') }}">
                @csrf
                @method('post')
                @if($user->campaigns()->find($campaign->id) == null)
                    <input type="hidden" value="{{$campaign->slug}}" name="campaign_slug">
                    <button type="submit" class="btn btn-primary float-right mb-2 waves-effect waves-light">Bewerben</button>
                @endif
            </form>
        @endif
    </div>
@endsection
@section('page-script')
        <script>
            $('.carousel').carousel('pause'); 
        </script>
@endsection
