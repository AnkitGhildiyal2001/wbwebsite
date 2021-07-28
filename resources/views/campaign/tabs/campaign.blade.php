<section id="basic-tabs-components">
    <div class="row">
      <div class="col-sm-12">
        <div class="card overflow-hidden">
          <div class="card-content">
            <div class="card-body">
              
                  <div class="row">
                        <div class="col-md-6 col-12">
                            {{ $campaign->campaignCategory()->first()->name }}<br/><br/>
                            <p>
                                {{ $campaign->campaign_description }}
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