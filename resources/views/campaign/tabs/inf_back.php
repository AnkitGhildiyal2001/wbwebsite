                
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
                                        <div class="row">
                                        <div class="col-8">
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
                                        </div>
                                        <div class="col-4">
                                        @if(isset($vs))
                                         <h5>Products Selected</h5>
                                            <div class="list-group">
                        @foreach($vs as $key => $value)
                            @if($influencer->id == $value->user_id)
                                @foreach(json_decode($value->variant) as $kk => $vv)
                <a href="#" class="list-group-item list-group-item-action">{{$vv}}</a>
                                        @endforeach 
                                    @endif 
                                @endforeach 
                                            </div> 
                                        @endif   
                                      </div>
                                        </div>
                                        @endforeach
                                    
                                        


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
                        </div>