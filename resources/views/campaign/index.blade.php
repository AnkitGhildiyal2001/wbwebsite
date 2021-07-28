@extends('layout/base')

@section('title', 'Kampagnen')

@section('body-class', 'ecommerce-application')

@section('page-style')
    <link rel="stylesheet" href="{{ asset(mix('css/plugins/extensions/noui-slider.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/pages/app-ecommerce-shop.css')) }}">
@endsection

@section('content')
<div class="sidebar-detached sidebar-left" style="{{ !$hasChannels ? 'filter: blur(10px);' : '' }}">
    <div class="sidebar">
        <!-- Ecommerce Sidebar Starts -->
        <div class="sidebar-shop" id="ecommerce-sidebar-toggler">
        <div class="row">
            <div class="col-sm-12">
            <h6 class="filter-heading d-none d-lg-block">Filter</h6>
            </div>
        </div>
        <span class="sidebar-close-icon d-block d-md-none">
            <i class="feather icon-x"></i>
        </span>
        <div class="card">
            <div class="card-body">
                    <form method="GET" action="{{ route('campaign.index', [$searchquery ?? '', json_encode($selectedCategories)]) }}" id="category-filter">
                    <!-- Categories Starts -->
                    <div class="brands">
                        <div class="brand-title mt-1 pb-1">
                        <h6 class="filter-title mb-0">Kategorien</h6>
                        </div>
                        <div class="brand-list" id="brands">
                            <ul class="list-unstyled">
                                @foreach ($categories as $category)
                                    @if(in_array($category->id, $userSelectedCategpries))
                                    <li class="d-flex justify-content-between align-items-center py-25">
                                        <span class="vs-checkbox-con vs-checkbox-primary">
                                            <input type="checkbox" name="category[]" value="{{ $category->id }}"  {{ in_array($category->id, old('category', $selectedCategories)) ? 'checked' : '' }}>
                                            <span class="vs-checkbox">
                                                <span class="vs-checkbox--check">
                                                <i class="vs-icon feather icon-check"></i>
                                                </span>
                                            </span>
                                            <span class="">{{ $category->name }}</span>
                                        </span>
                                    </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <!-- Categories Ends -->
                    <!-- Clear Filters Starts -->
                    <div id="clear-filters">
                        <button type="submit" class="btn btn-block btn-primary">Filter anwenden</button>
                        <button type="reset" class="btn btn-block btn-outline-primary" id="reset-filters" onclick="resetFilters()">Alle Filter löschen</button>
                    </div>
                    <!-- Clear Filters Ends -->
                </form>
            </div>
        </div>
        </div>
        <!-- Ecommerce Sidebar Ends -->

    </div>
</div>
<div class="content-detached content-right" style="{{ !$hasChannels ? 'filter: blur(10px);' : '' }}">
    <div class="content-body">
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
                    <form method="GET" action="{{ route('campaign.index', [$searchquery ?? '', json_encode($selectedCategories)]) }}">
                        <fieldset class="form-group position-relative">
                            <input type="text" class="form-control search-product" id="iconLeft5" name="s" placeholder="Suchen" value="{{ old('s', $searchquery ?? null) }}">
                            <div class="form-control-position" style="top: 4px;">
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
                    @if($user->campaigns()->find($campaign->id) == null)
                        <a href="{{ route('campaign.show', [$campaign->company()->first()->slug, $campaign->slug]) }}">
                    @else
                        <a href="{{ route('user.campaign.show', $campaign->slug) }}">
                    @endif
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
                    {{ $campaigns->appends($_GET)->links() }}
                    </ul>
                </nav>
                </div>
            </div>
        </section>
        <!-- Ecommerce Pagination Ends -->
    </div>
</div>
@if (!$hasChannels)
    <div class="modal fade in text-left show" tabindex="-1" role="dialog" style="display: block; z-index: 500;" aria-modal="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h5>Du hast noch keine Plattform hinterlegt!</h5>
                <p>Bevor du alle Kampagnen sehen kannst hinterlege bitte in deinen <a href="{{ route('profile.edit', $user->slug) }}">Profileinstellungen</a> mindestens eine Plattform.</p>
                <p>Vielen Dank.</p>
                <div class="row">
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{ route('profile.edit', $user->slug) }}" class="btn btn-primary waves-effect waves-light">Zu den Profileinstellungen</a>
            </div>
        </div>
        </div>
    </div>
@endif
@endsection

@section('vendor-script')

@endsection

@section('page-script')
    <script>
        function resetFilters() {
            var checks = document.getElementsByName('category[]');
            checksLength =  checks.length;
            for (var i = 0; i < checksLength; i++) {
                checks[i].checked = false;
            }
            document.getElementById('category-filter').submit();
        }
    </script>
@endsection
