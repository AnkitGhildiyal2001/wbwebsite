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

<ul class="nav nav-pills nav-fill" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i style="margin-right:2px" class="fa fa-flag"></i>Kampagnendetails</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><i style="margin-right:2px" class="fa fa-tags"></i>Produktdetails</a>
  </li>
  @if($campaign->campaign_type == 2)
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><i style="margin-right:2px" class="fa fa-gift"></i>Giveaway</a>
  </li>
  @endif
  <li class="nav-item">
    <a class="nav-link" id="pills-status-tab" data-toggle="pill" href="#pills-status" role="tab" aria-controls="pills-status" aria-selected="true"><i style="margin-right:2px" class="fa fa-circle-o-notch"></i>Status</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">@include('campaign.show.tabs.campaign-influencer', compact('campaign', 'images', 'steps', 'state_key', 'show_submission_form', 'submissions', 'showCouponCode', 'hashtags'))</div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  @include('campaign.show.tabs.product')
  </div>
  @if($campaign->campaign_type == 2)
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">@include('campaign.show.tabs.giveaway',['participation_terms' => $campaign->participation_terms, 'campaign' => $campaign])</div>
  @endif
  <div class="tab-pane fade" id="pills-status" role="tabpanel" aria-labelledby="pills-status-tab">
  @include('campaign.show.tabs.status')
  </div>
</div>

@endsection
@section('page-script')
        <script>
            $('.carousel').carousel('pause');

            function addFieldsCampaign(){
                var container = document.getElementById("submission-input-container");
                var input = document.createElement("input");
                input.type = "url";
                input.name = "submission[]";
                input.required = true;
                input.classList.add("form-control");
                input.classList.add("mt-1");
                input.placeholder = "URL des Post";
                console.log(input);
                container.appendChild(input);
            }

            function showAlert(message=null) {
                    if(message)
                      $("#alert-message").text(message);
                   $("#alert-message").animate({ 'height':'toggle','opacity':'toggle'});
                    window.setTimeout( function(){
                        $("#alert-message").slideUp();
                    }, 2500);
            }
            max_address = parseInt($('#max_address').text());
            function addFields(){

              

              if(max_address - 1 <= 0)
                return false;

        //$('#max_address').text(--max_address)
        --max_address;

                var container = document.getElementById("submission-input-container");
                var input = document.createElement("textarea");
                //input.type = "url";
                input.name = "submission[]";
                input.required = true;
                input.classList.add("form-control");
                input.classList.add("mt-1");
                input.placeholder = "Giveaway Address";
                console.log(input);
                container.appendChild(input);
            }

            $( document ).ready(function() {

                  productId = "{{$product->id}}";
                  campaignId = "{{$campaign->id}}";
                  count = parseInt($('#selection_left').text());
                  unlocked=0;

                $('.apply').on('click', function(){
                  $('.apply').hide();
                  //return false;
                  if($( ".variations_selected a" ).length == 0){
                    showAlert("Wähle bitte ein Produkt im Produktdetails Tab!");
                    $('.apply').show();
                    return false
                  }
                  showAlert("Please wait");
                  variation_arr = [];
                  $( ".variations_selected a" ).each(function( index, element ) {
                    
                    variation_arr.push(element.text.trim());
                  });
                  console.log(variation_arr);
                  
                    if(variation_arr.length > 0){
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    }); 
                    $.ajax({
                        type: 'POST',
                        url: "/variant/selection/save",
                        data: {'data': JSON.stringify(variation_arr),'productId': productId, 'campaignId': campaignId, 'count': count-1},
                        success: function (result) {
                          //alert(result);
                          
                          showAlert(); 
                          unlocked = 0;
                          $('#giveaway_address_container').show();
                           
           //window.location = '{{route("user.campaign.show", $campaign->slug)}}';

                        }
                    });
                  }else
                      showAlert("Wähle bitte ein Produkt im Produktdetails Tab!");
                  


                });
                $('.variations_select a').on('click', function(e){
                    e.preventDefault();
                   if(unlocked){
                    if(count != 0){
                      count--;
                      $('#selection_left').text(count);
                      $(".variations_selected").append('<a href="#" class="list-group-item list-group-item-action">'+$(this).text()+'</a>');
                      $("#carouselExampleIndicators").carousel($(this).data("id"));
                    }
                  }
                  
                });
                $('.variations_selected').on('click', 'a', function(e){
                    e.preventDefault();
                  if(unlocked){
                    count++;
                    $('#selection_left').text(count);
                    $(this).remove();
                  }
                 });   
            }); 
        </script>
@endsection