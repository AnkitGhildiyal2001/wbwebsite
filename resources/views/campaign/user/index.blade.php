@extends('layout/base')

@section('title', 'Meine Kampagnen')

@section('body-class', 'ecommerce-application')

@section('page-style')
    <link rel="stylesheet" href="{{ asset(mix('css/pages/app-ecommerce-shop.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/pages/campaigns.css')) }}">
@endsection

@section('content')
@if (auth()->user()->isCompany())
<div class="add-campaign-btn">

    @if (!is_null(auth()->user()->subscription('default')->stripe_plan ?? NULL))
    <a class="btn btn-primary round" href="{{ route('campaign.create') }}">
        <div>
            Neue Kampagne anlegen ＋
        </div>
    </a>
        @else
        <a class="btn btn-primary round" href="{{ route('billing') }}">
            <div>
                Neue Kampagne anlegen ＋
            </div>
        </a>
        @endif


</div>
@endif
<div class="content-detached">
    <div>
        <section id="ecommerce-header">
            <div class="row">
                <div class="col-sm-12">
                <div class="ecommerce-header-items">
                    <div class="result-toggler">
                    <button class="navbar-toggler shop-sidebar-toggler" type="button" data-toggle="collapse">
                        <span class="navbar-toggler-icon d-block d-lg-none"><i class="feather icon-menu"></i></span>
                    </button>
                    <div class="search-results">
                        {{ $campaigns->total() }} Kampagnen gefunden
                    </div>
                    </div>
                
                </div>
                </div>
            </div>
            </section>
            <!-- Ecommerce Content Section Starts -->

            <!-- Ecommerce Search Bar Starts -->
            <section id="ecommerce-searchbar">
            <div class="row mt-1">
                <div class="col-sm-12">
                    <form method="GET" action="{{ route('user.campaign.index', [$searchquery ?? '']) }}">
                        <fieldset class="form-group position-relative">
                            <input type="text" class="form-control search-product" id="iconLeft5" name="s" placeholder="Suchen" value="{{ old('s', $searchquery ?? null) }}">
                            <div class="form-control-position">
                                <button class="btn btn-icon" type="submit">
                                    <i class="feather icon-search"></i>
                                </button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
            </section>
            <!-- Ecommerce Search Bar Ends -->

            <!-- Ecommerce Products Starts -->
            <section id="ecommerce-products" class="grid-view">
                @forelse ($campaigns as $campaign)
                <div class="card ecommerce-card">
                    <div class="card-content">
                    <a href="{{ $user->isCompany() ? route('campaign.show', [$campaign->company()->first()->slug, $campaign->slug]) : route('user.campaign.show', $campaign->slug) }}">
                        <div class="item-img text-center">
                        <img class="img-fluid" src="{{ $campaign->images()->count() > 0 ? $campaign->images()->first()['url'] : 'https://wb-campaigns.s3.eu-central-1.amazonaws.com/mockup-of-a-shopping-bag-in-a-plain-color-scenario-1476-el.png' }}" alt="img-placeholder">
                        </div>
                        <div class="card-body">
                        <div class="item-wrapper">
                            <div class="item-category">
                                <div class="badge badge-primary badge-md">
                                    @switch($campaign->campaignCategory()->first()->name)
                                        @case("Beauty & Fashion")
                                            <div style="width: 18px;">
                                            <img class="w-100" src="{{ asset('images/icons/kosmetika.svg') }}" alt="">
                                            </div>
                                            @break
                                        @case("Gaming & Apps")
                                            <i class="fa fa-gamepad"></i>
                                            @break
                                        @case("Health & Fitness")
                                            <i class="fa fa-heartbeat"></i>
                                            @break
                                        @case("Schmuck")
                                            <i class="fa fa-diamond"></i>
                                            @break
                                        @case("Food & Nahrungsergänzung")
                                            <i class="fa fa-cutlery"></i>
                                            @break
                                        @case("Technik")
                                            <i class="fa fa-laptop"></i>
                                            @break
                                        @case("Autos")
                                            <i class="fa fa-car"></i>
                                            @break
                                        @case("Mobilität")
                                            <i class="fa fa-train"></i>
                                            @break
                                        @case("Kochen & Backen")
                                            <div style="width: 15px;">
                                            <img class="w-100" src="{{ asset('images/icons/schneebesen.svg') }}" alt="">
                                            </div>
                                            @break
                                        @case("Lifestyle")
                                            Lifestyle
                                            @break
                                        @case("Haustier")
                                            Haustier
                                            @break
                                        @case("Politik")
                                            Politik
                                            @break
                                        @case("Behörden")
                                            Behörden
                                            @break
                                        @case("Deko & Einrichtung")
                                            Deko
                                            @break
                                        @case("Basteln")
                                            Basteln
                                            @break
                                        @case("Filme & Musik & Bücher")
                                            <i class="fa fa-film"></i>
                                            @break
                                        @default
                                            
                                    @endswitch
                                </div>
                            </div>
                            <div>
                                @if(!$user->isCompany())
                                    <p class="item-price">
                                        @php
                                            $user_campaign = $user->campaigns()->find($campaign->id);
                                            $state_id = $user_campaign->pivot->state_id;
                                            $state = App\CampaignState::where('id', $state_id)->first();
                                        @endphp
                                        {{ $state->name }}
                                    </p>
                                    @else
                                        @if ($campaign->influencerLimitReached())
                                            Max. Influencer erreicht
                                        @else
                                            {{ $campaign->users()->where('state_id', '<>', 7)->where('state_id', '<>', 1)->count() }} von {{ $campaign->influencer_quantity }} Influencern
                                        @endif
                                @endif
                            </div>
                        </div>
                        <div class="item-name">
                            <span>{{ $campaign->title }}</span>
                            <p class="item-company">By <span class="company-name">Google</span></p>
                        </div>
                        <div>
                            <p class="item-description">
                                {{ $campaign->description }}
                            </p>
                        </div>
                        </div>
                        <div class="item-options text-center">
                            <div class="wishlist">
                            {{ $campaign->company()->first()->name }}</span>
                            </div>
                            <div class="cart">
                            <span>Mehr erfahren</span> 
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
                @empty
                    Keine Kampagnen vorhanden
                @endforelse
            </section>
            <!-- Ecommerce Products Ends -->

            <!-- Ecommerce Pagination Starts -->
            <section id="ecommerce-pagination">
            <div class="row">
                <div class="col-sm-12">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mt-2">
                    {{ $campaigns->links() }}
                    </ul>
                </nav>
                </div>
            </div>
        </section>
        <!-- Ecommerce Pagination Ends -->
    </div>
</div>
@endsection