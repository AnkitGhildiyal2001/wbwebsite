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
    <a class="nav-link" id="pills-influencer-tab" data-toggle="pill" href="#pills-influencer" role="tab" aria-controls="pills-influencer" aria-selected="false"><i style="margin-right:2px" class="fa fa-user"></i>Influencer</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><i style="margin-right:2px" class="fa fa-tags"></i>Produktdetails</a>
  </li>
  @if($campaign->campaign_type == 2)
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><i style="margin-right:2px" class="fa fa-gift"></i>Giveaway</a>
  </li>
  @endif
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">@include('campaign.tabs.campaign', compact('users', 'campaign', 'user', 'images', 'steps', 'hashtags'))</div>
  <div class="tab-pane fade" id="pills-influencer" role="tabpanel" aria-labelledby="pills-influencer-tab">@include('campaign.tabs.influencer', compact('users', 'campaign', 'user', 'images', 'steps', 'hashtags'))
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  @include('campaign.tabs.product',['product' => $product])
  </div>
  @if($campaign->campaign_type == 2)
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">@include('campaign.tabs.giveaway',['participation_terms' => $campaign->participation_terms, 'users' => $users,'giveaway_address'=> $giveaway_address])</div>
  @endif
</div>

@endsection
@section('page-script')
        <script>
            $('.carousel').carousel('pause');
            $( document ).ready(function() {
                $('#variations a').on('click', function(e){
                  e.preventDefault();
                    //alert($(this).data("id"));
                    $("#carouselExampleIndicators").carousel($(this).data("id"));
                    $('#variations button').text($(this).text());
                });
            }); 
        </script>
@endsection