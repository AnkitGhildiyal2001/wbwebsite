    <div style="border-radius: 0.5rem;" class="header-navbar navbar-light navbar-shadow">
    	<div class="navbar-wrapper">
    		<div style="padding-bottom: 10px" class="navbar-container content">

    		<h2 style="padding-top: 30px;padding-bottom: 15px">Participation Terms</h2>
    		
    		<p>{{$participation_terms}}</p>	
    		@if ($user->isCompany())
			
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
                                <div class="col-md-7 col-12">
                                    <div class="tab-content" id="nav-tabContent">
                                        @foreach ($users as $key=>$influencer)
                                        <div class="tab-pane fade show {{ $key == 0 ? 'active' : '' }}" id="{{ $influencer->slug }}" role="tabpanel"
                                        aria-labelledby="list-home-list">
                   

                                    @if(isset($giveaway_address))
                                            <div class="list-group">
                        @foreach($giveaway_address as $key => $value)
                            @if($influencer->id == $value->user_id)
                                @foreach(json_decode($value->address) as $kk => $vv)

                <textarea style="margin-right: 10px" readonly class="form-control required  mb-1" rows="2">
                {{$vv}}
                </textarea>

                                        @endforeach 
                                    @endif 
                                @endforeach 
                                            </div> 
                                        @endif 

                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-md-1 col-12">
                                </div>
                            </div>
                          </div>
                        </div>

    		@endif
    		@if (!$user->isCompany())
    		<div class="card" id="giveaway_address_container" style="display:none">
		        <div class="card-content">
		           <form method="post" action="{{ route('submitgiveawayaddress', [$campaign->slug, auth()->user()->slug]) }}" enctype="multipart/form-data">
		              @csrf
		              @method('post')
		              <div class="card-body">
		              	<div style="font-style: italic;font-weight: bold;" class="mb-1">
		              	Address left : <span id="max_address">{{$campaign->product_givaway_count-1}}</span></div>
		                 <div class="form-label-group">
		                    <div class="position-relative" id="submission-input-container">

		                     <textarea id="submission" name="submission[]" class="form-control required" placeholder="Giveaway Address" required rows="2"></textarea>

		                    </div>
		                    <label for="submission">Nachweis</label>
		                    <span class="add-icon-round" id="add-submission-input" onclick="addFields()">
		                        <i class="feather icon-plus-circle"></i>
		                    </span>
		                 </div>
		                 <p>Um weitere Nachweise hinzuzufügen klicke rechts auf das Plus.</p>
		                <button type="submit" class="btn btn-primary float-right mb-2 waves-effect waves-light">Einreichen</button>
		              </div>
		           </form>
		        </div>
		     </div>
		     @endif
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


