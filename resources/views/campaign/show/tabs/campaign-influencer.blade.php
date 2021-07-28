{{-- This file is the campaign shown after sucsessfull apply of user --}}
 <div class="row">
     <div class="col-md-6 col-12 mb-3">
         <h2>{{ $campaign->company()->first()->name }}</h2>
            <p>{{ $campaign->campaignCategory()->first()->name }}</p>
            <p>
                {{ $campaign->campaign_description }}
            </p>
            @if ($showCouponCode)
                <h3>Code zum Teilen mit der Community: <span class="primary">{{ $campaign->coupon_code }}</span></h3>
            @endif
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
                    <span class="font-weight-bold">Bewertungen müssen zwischen dem: </span>{{date('d-m-Y', strtotime($campaign->publication_period_from))  }}<span class="font-weight-bold"> und dem </span>{{date('d-m-Y', strtotime($campaign->publication_period_to))  }}<span class="font-weight-bold"> erfolgen</span>
                @endif
            </div>
            <br>

            @if($campaign->campaign_url)
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

    @if ($show_submission_form)
    <div class="card">
        <div class="card-content">
           <form method="post" action="{{ route('campaign.submitpost', [$campaign->slug, auth()->user()->slug]) }}" enctype="multipart/form-data">
              @csrf
              @method('post')
              <div class="card-body">
                 <div class="form-label-group">
                    <div class="position-relative" id="submission-input-container">
                        <input id="submission" type="url" class="form-control required" name="submission[]" placeholder="URL des Posts" required>
                    </div>
                    <label for="submission">Nachweis</label>
                    <span class="add-icon-round" id="add-submission-input" onclick="addFieldsCampaign()">
                        <i class="feather icon-plus-circle"></i>
                    </span>
                 </div>
                 <p>Um weitere Nachweise hinzuzufügen klicke rechts auf das Plus.</p>
                <button type="submit" class="btn btn-primary float-right mb-2 waves-effect waves-light">Nachweis einreichen</button>
              </div>
           </form>
        </div>
     </div>
    @endif
    @if ($submissions)
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <h4>Nachweise</h4>
            </div>
        </div>
        <div class="card-content">
           <div class="card-body">
               @foreach ($submissions as $submission)
                <p>
                    <a href="{{ $submission }}" target="_blank">{{ $submission }}</a>
                </p>
               @endforeach
           </div>
        </div>
     </div>
    @endif
