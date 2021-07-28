<div class="container">
  <div class="row">
    <div class="col-8">
    	<h3 style="padding-top: 20px;padding-bottom: 10px">{{$product->name}}</h3>
    	<div class="row"> 

    			  <div style="text-align: center;font-style: italic;font-weight: bold;" class="col-12">
    			  	@if (!$user->isCompany())
Selection left : <span id="selection_left">{{$campaign->product_givaway_count? $campaign->product_givaway_count+1 : 1 }}</span>
					@endif
    		<div style="padding-top: 5px" class="row"> 
    			  </div>

		</div>
    			  <div class="col-5">
    			
				   <div class="list-group variations_select">
				   	@foreach($variations as $key => $value)
					  <a href="#" data-id="{{$key+1}}" class="list-group-item list-group-item-action">
					  	{{$value->variation}}
					  </a>
					@endforeach  
					 </div>
				  </div>
				  <div style="text-align: center;margin-top: 50px" class="col-2">
				  	@if (!$user->isCompany())
				  	<img src="{{asset('images/ms/switch.png')}}">
				  	@endif
				  </div>
				   <div class="col-5">
				   <div style="max-height: 150px" class="list-group variations_selected overflow-auto">
					  
				   </div>

				</div>
    				
    		</div>
    		<p style="margin-top: 10px">{{$campaign->description}}</p>
       
    </div>
    <div class="col-4">
    	<div id="carouselExampleIndicators" data-interval="false" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>

		    @foreach($variations as $key => $value)
		    <li data-target="#carouselExampleIndicators" data-slide-to="{{$key+1}}"></li>
		    @endforeach 
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		     <div class="d-flex justify-content-center">
		      <img height="200" src="{{$baseUrl}}{{$product->image_product}}" class="d -lock" alt="...">
		     </div>
		    </div>

		   @foreach($variations as $key => $value)
		    <div class="carousel-item">
		     <div class="d-flex justify-content-center">
		      <img height="200" src="{{$baseUrl}}{{$value->image}}" class="d-block" alt="...">
		     </div>
		    </div>
		    @endforeach
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
    </div>

  </div>

</div>
<div style="display: none;" class="alert alert-success alert-message" role="alert">
  Selection saved successfully!
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
            
                @csrf
                @method('post')
                @if($user->campaigns()->find($campaign->id) == null)
                    @if($campaign->influencerCount() < $campaign->influencer_quantity)
                       
                        <button class="apply btn btn-primary float-right mb-2 waves-effect waves-light">Bewerben</button>
                    @else
                        <p>Diese Kampagne ist bereits voll. Du kannst dich leider nicht mehr bewerben.</p>
                    @endif
                @endif
            
        @else
            <p class="alert alert-warning">Bitte hinterlege zuerst deine Adresse, bevor du dich auf diese Kampagne bewerben kannst. <a href="{{ route('account.address') }}">Hier Adresse hinterlegen.</a></p>
        @endif
    @endif


</div>


