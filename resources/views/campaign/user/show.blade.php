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
        <div class="col-md-6 col-12 mb-3">
            <h2>{{ $campaign->company()->first()->name }}</h2>
            <p>{{ $campaign->campaignCategory()->first()->name }}</p>
            <p>
                {{ $campaign->description }}
            </p>
            @if ($showCouponCode)
                <h3><span class="primary">{{ $campaign->coupon_code }}</span></h3>
            @endif
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
    <ul class="state-list">
        @foreach ($steps as $key=>$step)
            @if ($step == "Abgelehnt")
            <li class="dismissed">
                <div class="step_number"><i class="feather icon-x"></i></div>
                <p>{{ $step }}</p>
            </li>
            @else
                @if ($key <= $state_key)
                <li class="{{ $key == $state_key ? 'active' : 'done' }}">
                @else
                <li>
                @endif
                    <div class="step_number">{{ $key + 1 }}</div>
                    <p>{{ $step }}</p>
                </li>
            @endif
        @endforeach
    </ul>
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
                    <span class="add-icon-round" id="add-submission-input" onclick="addFields()">
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
@endsection
@section('page-script')
        <script>
            $('.carousel').carousel('pause');

            function addFields(){
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
        </script>
@endsection
