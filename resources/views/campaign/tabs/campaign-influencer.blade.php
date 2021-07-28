<div class="row">
        <div class="col-md-6 col-12">
            <h2>{{ $campaign->company()->first()->name }}</h2>
            {{ $campaign->campaignCategory()->first()->name }}<br/><br/>
            <p>
                {{ $campaign->campaign_description }}
            </p>
            @if ($hashtags)
            <div class="hashtags">
                <span class="font-weight-bold">Verwende diese Hashtags:</span>
                @foreach ($hashtags as $hashtag)
                    <div>{{ $hashtag }}</div>
                @endforeach
            </div>
            @endif
            <div style="float: left">
                @if (!$campaign->review_url)
            <span class="font-weight-bold">Dein Post muss zwischen dem: </span>{{date('d-m-Y', strtotime($campaign->publication_period_from))  }}<span class="font-weight-bold"> und dem </span>{{date('d-m-Y', strtotime($campaign->publication_period_to))  }}<span class="font-weight-bold"> erfolgen</span>
                @else
            <span class="font-weight-bold">Deine Bewertung muss zwischen dem: </span>{{date('d-m-Y', strtotime($campaign->publication_period_from))  }}<span class="font-weight-bold"> und dem </span>{{date('d-m-Y', strtotime($campaign->publication_period_to))  }}<span class="font-weight-bold"> erfolgen</span>
                @endif
            </div>
            <br>
            @if ($campaign->campaign_url)
            <div style="float: left">
            <span class="font-weight-bold">Produktwebsite: </span>{{ $campaign->campaign_url }}
            </div>
            <br>
            @endif
            @if ($campaign->review_url)
            <div style="float: left">
            <span class="font-weight-bold">Bewerte das Produkt nach Erhalt hier: </span>{{ $campaign->review_url }}
            </div>
            <br>
            @endif
            @if ($campaign->campaign_type != 3)
            <div style="float: left">
            <span class="font-weight-bold">Verlinke diese Accounts in deinem Post: @</span>{{$campaign->account_to_tag}}
            </div>
            @endif

            @if($campaign->approve_influencer && App\User::find(auth()->user()->id)->campaigns()->find($campaign->id))
@if(App\User::find(auth()->user()->id)->campaigns()->find($campaign->id)->pivot->approved)
  @include('campaign.show.tabs.timeline',compact('campaign'))
@endif
            @else

            @endif

                <br>
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
    <div style="display: none;" class="alert alert-success alert-message" role="alert">
        Auswahl erfolgreich gespeichert!
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
            @if ($user->address)
                <form method="POST" action="{{ route('campaign.apply') }}">
                    @csrf
                    @method('post')
                    @if($user->campaigns()->find($campaign->id) == null)
                        @if($campaign->influencerCount() < $campaign->influencer_quantity)
                            <input type="hidden" value="{{$campaign->slug}}" name="campaign_slug">
                            <button style="display: none;" type="submit" class="btn btn-primary float-right mb-2 waves-effect waves-light">Bewerben</button>
                            <button class="apply btn btn-primary float-right mb-2 waves-effect waves-light">Bewerben</button>
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
