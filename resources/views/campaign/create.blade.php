@extends('layout/base')

@section('title', 'Kampagne erstellen')


@section('page-style')
        <!-- Page css files -->
        <link rel="stylesheet" href="{{ asset(mix('css/pages/app-ecommerce-shop.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/plugins/forms/wizard.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/plugins/extensions/toastr.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('css/pages/campaigns.css')) }}">
        <link rel="stylesheet" href="{{ asset(mix('vendors/css/extensions/nouislider.min.css')) }}">
        <link rel="stylesheet" href="{{ asset('fonts/font-awesome/css/font-awesome.css') }}">
        <script src="https://js.stripe.com/v3/"></script>
        <link rel="stylesheet" href="{{ asset('vendor/dropdown/css/dropdown.css') }}">
       <style> /**
        * The CSS shown here will not be introduced in the Quickstart guide, but shows
        * how you can use CSS to style your Element's container.
        */
        .StripeElement {
        box-sizing: border-box;

        height: 40px;

        padding: 10px 12px;

        border: 1px solid transparent;
        border-radius: 4px;
        background-color: white;

        box-shadow: 0 1px 3px 0 #e6ebf1;
        -webkit-transition: box-shadow 150ms ease;
        transition: box-shadow 150ms ease;
        }

        .StripeElement {
            width: 100%;
        }

        .StripeElement--focus {
        box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
        border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
        background-color: #fefde5 !important;
        }
        .noUi-connect {
            background: #7367f0;
        }
        .steps{
            font-size: 11px;
        }
        </style>
@endsection

@section('content')
@if ($isProduct || $isCoupon || $isGiveaway || $isReview)

<div id="example-basic"> 
    
    <h3>Allgemeines</h3>
    <section>
        <div class="card">
            <div class="card-content">
                <form method="post" action="" enctype="multipart/form-data" id="campaign">
                    @csrf
                    <div class="card-body">
                        <div class="form-label-group">
                            <input id="title" type="text" class="form-control required" name="title" placeholder="Titel" value="{{ old('title') }}" required="" autofocus="">
                            <label for="title">Titel</label>
                            @error('title')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-label-group">
                            <textarea class="form-control" name="description" placeholder="Was muss der Influencer über das Produkt wissen? Was gilt es hervorzuheben?" id="description" required>{{ old('description') }}</textarea>
                            <label for="description">Informationen zum Produkt</label>
                            @error('description')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        
                        @if (!$isReview) 
                            <label for="Hashtags">Hashtags (mit Enter bestätigen)</label>
                            <ul class="tags form-control">
                                <li class="tagAdd taglist">  
                                    <input type="text" id="search-field">
                                </li>
                            </ul>
                        @endif
                        <label for="account_to_url"></label>
                        <div class="form-label-group">
                            <input id="account_to_url" type="text" class="form-control required" name="account_to_url" placeholder="Url" value="{{ old('account_to_url') }}" autofocus="">
                            @error('account_to_url')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> 

                        @if ($isReview) 
                        <label for="review_url"></label>
                        <div class="form-label-group">
                            <input id="review_url" type="text" class="form-control required" name="review_url" placeholder="Review Url" value="{{ old('review_url') }}" required="" autofocus="">
                            @error('review_url')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> 
                        @endif
                        
                        
                        <label>In welchem Zeitraum sollen die Posts zur Kamapgne erfolgen?</label>
                        <div class="form-label-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <input onchange="setMinDate(this)" id="publication_period_from" type="date" class="form-control required" name="publication_period_from" min="{{ date('Y-m-d') }}" placeholder="Beginn der Veröffentlichung" value="{{ old('publication_period_from') }}" required="" autofocus="">
                                </div>
                                <div class="col-md-6">
                                    <input id="publication_period_to" type="date" class="form-control required" name="publication_period_to" min="{{ date('Y-m-d') }}" placeholder="Ende der Veröffentlichung" value="{{ old('publication_period_to') }}" required="" autofocus="">
                                </div>
                            </div>
                            <!-- <label for="publication_period">Zeitraum der Veröffentlichung</label>
                            @error('publication_period')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror -->
                        </div>
                        @if (!$isReview) 
                        <div class="form-label-group">
                            <input id="account_to_tag" type="text" class="form-control ignore" name="account_to_tag" placeholder="Welche Accounts sollen verlinkt/erwähnt werden?" value="{{ old('account_to_tag') }}" autofocus="">
                            <label for="account_to_tag">Welche Accounts sollen verlinkt/erwähnt werden?</label>
                            @error('account_to_tag')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>                        
                        @endif
                        <div class="form-label-group">
                            <input id="influencer_quantity" type="number" @if($max_users != -1) max="{{ $max_users }}" @endif data-max_users="{{ $max_users }}" class="form-control" name="influencer_quantity" placeholder="Maximale Anzahl Influencer" value="{{ old('influencer_quantity') }}" required>
                            <label for="influencer_quantity">Wie viele Influencer dürfen an dieser Kampagne teilnehmen?</label>
                            @error('influencer_quantity')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-label-group">
                            <label for="category">Kategorie der Kampagne</label>
                            <select id="category" name="category_id" class="custom-select" required>
                                <option disabled selected>Kategorie</option>
                                @foreach ($categories as $category)
                                    @if (old('category_id') == $category->id)
                                        <option selected value="{{ $category->id }}">{{ $category->name }}</option>    
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-label-group">
                            <label for="influencer_product">Welches Produkt soll der Influencer erhalten?</label>
                            <select id="influencer_product" name="influencer_product" class="custom-select" required>
                                <option disabled selected>Produkt wählen</option>
                                @foreach ($products as $products)
                                    @if (old('influencer_product') == $products->id)
                                        <option selected value="{{ $products->id }}">{{ $products->name }}</option>    
                                    @else
                                        <option value="{{ $products->id }}">{{ $products->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('influencer_product')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-label-group">
                            <fieldset class="form-group">
                                <label for="gallery">Gibt es weitere Bilder für die Kampagne?</label>
                                <div class="custom-file">
                                    <input type="file" name="gallery[]" id="gallery" multiple>
                                </div>
                            </fieldset>
                        </div>
                        {{--
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-label-group">
                                    <div class="d-flex align-items-center">
                                        <label class="switch">
                                            <input type="checkbox" id="youtube" name="youtube" {{ old('youtube') == 'on' ? 'checked' : '' }}>
                                            <span class="slider round"></span>
                                        </label>
                                        <span class="pl-1">YouTube</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label-group">
                                    <div class="d-flex align-items-center">
                                        <label class="switch">
                                            <input type="checkbox" id="twitch" name="twitch" {{ old('twitch') == 'on' ? 'checked' : '' }}>
                                            <span class="slider round"></span>
                                        </label>
                                        <span class="pl-1">Twitch</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-label-group">
                                    <div class="d-flex align-items-center">
                                        <label class="switch">
                                            <input type="checkbox" id="instagram" name="instagram" {{ old('instagram') == 'on' ? 'checked' : '' }}>
                                            <span class="slider round"></span>
                                        </label>
                                        <span class="pl-1">Instagram (+Story)</span>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        

                
                        @if ($isCoupon)
                        <div class="form-label-group" id="coupon-form-group">
                            <input id="coupon" type="text" class="form-control" name="coupon" placeholder="Gutscheincode fur influencer" value="{{ old('coupon') }}" required>
                            <label for="Coupon">Rabatt- oder Gutscheincode (Wird im Post öffentlich geteilt)</label>
                            @error('coupon')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                       <div class="form-label-group" id="dummycode-form-group">
                            <div class="d-flex align-items-center">
                                <label class="switch">
                                    <input onchange="disablecouponInput(this);" type="checkbox" id="dummycode" name="dummycode" {{ old('dummycode') == 'on' ? 'checked' : '' }}>
                                    <span class="slider round"></span>
                                </label>
                                <span class="pl-1">Personalisierter Code? (Muss jedem Influencer gesondert mitgeteilt werden)</span>
                            </div>
                        </div>
                        @endif

                        @if ($isGiveaway)
                        <div class="form-label-group">
                            <label for="product_givaway_count">Anzahl der zu verlosenden Produkte (Pro Influencer)</label>
                            <select id="product_givaway_count" name="product_givaway_count" class="custom-select" required>
                                <option disabled selected>Anzahl der im Giveaway zu verlosenden Produkte (Pro teilnehmenden Influencer)</option>
                                @for ($i = 1; $i <=50; $i++)
                                    @if (old('product_givaway_count') == $i)
                                        <option selected value="{{ $i }}">{{ $i }}</option>    
                                    @else
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endif
                                @endfor
                            </select>
                            @error('product_givaway_count')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-label-group">
                            <textarea class="form-control" name="participation_terms" placeholder="Gib hier an, wenn du inviduelle Bedingungen hast, welche für das Giveaway gelten sollen. (Wenn leer, stellen wir automatisch standardmäßige Bedingungen)" id="participation_terms" required>{{ old('participation_terms') }}</textarea>
                            <label for="participation_terms">Teilnahmebedingungen</label>
                            @error('participation_terms')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        @endif





                        <div class="form-label-group">
                            <div class="d-flex align-items-center">
                                <label class="switch">
                                    <input type="checkbox" id="approve_influencer" name="approve_influencer" {{ old('approve_influencer') == 'on' ? 'checked' : '' }}>
                                    <span class="slider round"></span>
                                </label>
                                <span class="pl-1">Influencer müssen durch uns ({{ $company->name }}) für die Kampagne freigegeben werden</span>
                            </div>
                        </div>
                
                        <div class="form-label-group" id="shipping-form-group">
                            <div class="d-flex align-items-center">
                                <label class="switch">
                                    <input type="checkbox" id="shipping_by_company" name="shipping_by_company" {{ old('shipping_by_company') == 'on' ? 'checked' : '' }}>
                                    <span class="slider round"></span>
                                </label>
                                <span class="pl-1">Wir ({{ $company->name }}) übernehmen den Versand der Produkte an die Influencer selbst</span>
                            </div>
                        </div>
                        <div class="form-label-group" id="packaging-form-group">
                            <div class="d-flex align-items-center">
                                <label class="switch">
                                    <input type="checkbox" id="custom_packaging" name="custom_packaging" {{ old('custom_packaging') == 'on' ? 'checked' : '' }}>
                                    <span class="slider round"></span>
                                </label>
                                <span class="pl-1">Wir wünschen eine individuelle Verpackung mit unserem Logo</span>
                            </div>
                        </div>

                        


                   
                    

                    @if($isProduct)
                        <input type="hidden" id="campaign_type" name="campaign_type" value="0">
                        <div class="btn btn-primary float-right mb-2" id="next-pay">Weiter</div>
                        @endif
                        @if($isCoupon)
                        <input type="hidden" id="campaign_type" name="campaign_type" value="1">
                        <div class="btn btn-primary float-right my-2" id="next-pay">Weiter</button>
                        @endif
                        @if($isGiveaway)
                        <input type="hidden" id="campaign_type" name="campaign_type" value="2">
                        <div class="btn btn-primary float-right my-2" id="next-pay">Weiter</button>
                        @endif
                        @if($isReview)
                        <input type="hidden" id="campaign_type" name="campaign_type" value="3">
                        <div class="btn btn-primary float-right my-2" id="next-pay">Weiter</button>
                        @endif
                         </div>
                </form>
            </div>
        </div>
    </section>

            <h3>Kampagnendetails</h3>
    <section>
        <div class="card">
            <div class="card-content">
               <div style="margin:20px;" id="outer_wrapper">
                <h1 style="font-size: 4rem;font-weight: bold;">Kampagnendetails</h1>
                <p style="margin-left: 4px; margin-right: 4px; margin-top: 20px; margin-bottom: 20px;">Gib dem Influencer hier einen kurze Überblick über deine Kamapgne. Füge hier auch die Steps hinzu, welche der Influencer zur erfolgreichen Kampagne durchführen muss.</p>
                <form method="post" action="" enctype="multipart/form-data" id="campaign_description_form">
                    @csrf
                    <div style="padding: 3px" class="card-body">
                     <textarea class="form-control required" id="new_campaign_description" name="new_campaign_description" rows="4" cols="67" required></textarea>
                    </div>
                
                <p style="margin-left: 4px; margin-right: 4px; margin-top: 20px; margin-bottom: 20px;">Hier kannst du Guidelines angeben, welche der Influencer bei der Umsetzung der Kampagne beachten muss.</p>

                <div id="wrapper">
                <input class="form-control required" placeholder="Guideline (max. 40 Zeichen)" style="outline: 0;border-width: 0 0 2px;border-color: #b8c2cc;" type="text" id="need_to_do" name="need_to_do[]" required="" autofocus="">
                </div>
                
                  
                

                </div>
            <p onclick="addFields()" style="width:660px;text-align: center;"><i style="color: #7367f0" class="fas fa-plus-circle"></i></p>

            <input style="margin-right: 30px" class="btn btn-primary float-right my-2" id="step_2_button" type="button" value="Weiter">


            </form>
            </div>
        </div>
    </section>   

    <h3>Zielgruppe</h3>
    <section>
        <div class="card">
            <div class="card-content">
            <form method="POST" action="" enctype="multipart/form-data" id="campaign_options">
                    @csrf
                    <div class="card-body">
                        <label style="margin-bottom: 10px" for="state">Bundesland deiner Zielgruppe</label>
                        <div class="form-label-group">
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="allstates" value="option">
  <label style="font-size: 9px" class="form-check-label" for="inlineCheckbox1">Deutschlandweit</label>
</div>
                          <div class="dropdown-sin-1">
                            <select style="display:none" multiple  placeholder="Select">
                                @foreach(Lang::get('onboarding.states') as $key => $value)
                                <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
                          </div>

                        </div>

                        <label for="age">Alter deiner Zielgruppe</label>  <span id="show_age"></span>
                        <div class="form-label-group">

                           <div style="margin-top: 10px" id="slider"></div>

                            @error('age')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                <input class="btn btn-primary float-right my-2" id="options_button" type="button" value="Weiter">

                    </div>
                </form>
            </div>
        </div>
    </section>

    @if ($isProduct || $isCoupon || $isGiveaway || $isReview)
    <h3>Bezahlen</h3>
    <section>
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <form action="" method="post" id="payment-form">
                        <div>
                            @csrf
                            <div class="row">
                                <div class="col-md-3 col-6">
                                    Versand (pro Paket):
                                </div>
                                <div class="col-6">
                                    <span class="primary" id="shipping"></span>
                                </div>
                            </div>
                            <hr/>
                            <div class="row">
                                <div class="col-md-3 col-6">
                                    Individuelle Verpackung (pro 30 Influencer)<small>Es wird immer aufgerundet.</small>:
                                </div>
                                <div class="col-6">
                                    <span class="primary" id="customPackaging"></span>
                                </div>
                            </div>
                            <hr/>
                            <div class="row mb-4">
                                <div class="col-md-3 col-6">
                                    Zwischensumme:
                                </div>
                                <div class="col-6">
                                    <span class="primary" id="sum"></span>
                                </div>
                            </div>
                            <hr/>
                            <div class="row mb-4">
                                <div class="col-md-3 col-6">
                                    Steuer:
                                </div>
                                <div class="col-6">
                                    <span class="primary" id="tax"></span>
                                </div>
                            </div>
                            <hr/>
                            <div class="row mb-4">
                                <div class="col-md-3 col-6">
                                    Gesamtpreis:
                                </div>
                                <div class="col-6">
                                    <span class="primary" id="total"></span>
                                </div>
                            </div>
                            @if(false)
                            <label for="card-element">
                                Kredit- oder Debitkarte
                            </label>
                            <div id="card-element">
                                <!-- A Stripe Element will be inserted here. -->
                            </div>
                
                            <!-- Used to display form errors. -->
                            <div id="card-errors" role="alert"></div>
                            @endif
                        </div>
                        <button class="btn btn-primary float-right my-2" id="submit" form="payment-form">Zahlen</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @endif
    <h3>Veröffentlichung</h3>
    <section>
        <div class="card">
            <div class="card-content">
                <div class="card-body text-center">
                    <h2 class="my-3">#Danke für deine Kampagne, Brudi!</h2>
                    <h4>Wir informieren dich, sobald ein Influencer deine Kampagne annimmt.</h4>
                    <a href="{{ route('user.campaign.index') }}" class="btn btn-primary my-2">Zu meinen Kampagnen</a>
                    <div class="alert alert-danger" role="alert">
                        <h4>Wichtige Info zum Versand!</h4>
                        <p>Falls du gewählt hast, dass WunderBrudis den Versand eurer Produkte zum Influencer übernehmen soll, sendet die Produkte bitte gesammelt an folgende Adresse:</p>
                        <p>
                            WunderBrudis UG<br>
                            c/o Ruben Richthammer<br>
                            Armstr 14<br>
                            45355 Essen<br>
                            Deutschland<br>
                        </p>
                        <p>
                            Solltest du zusätzlich noch eine individuelle Verpackung mit deinem Logo gewähl haben, nehmen wir innerhalb von 24 Stunden automatisch mit dir Kontakt auf. Danke!
                        </p>
                    </div>
            </div>
        </div>
    </section>
</div>
@else 
<section>
    <div class="shadow-sm bg-white rounded" style="{{ $shallDisable ? 'filter: blur(10px);' : '' }}" >
        <div class="card-content">
            <div class="card-body">
                Um was für eine Art von Kampagne handelt es sich?
                <div class="row">
                    <div class="col-md-4 p-3">
                        <div class="card shadow-sm rounded">
                            <div class="card-content">
                                <a href="{{route('campaign.create', 'product')}}">
                                <div class="item-img text-center">
                                <img class="img-fluid" src="{{ asset('css/static') }}/frontilu2.png" alt="img-placeholder">
                                </div>
                                <div class="card-body">
                                <div class="item-name">
                                    <h3>Produktkamapgne</h3>
                                </div>
                                <div>
                                    <p class="item-description">
                                        Bei dieser Kampagnenart erhält der Nano-Influencer euer Produkt und teilt seine Meinung dazu mit seiner Community.
                                    </p>
                                </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-3">
                        <div class="card shadow-sm rounded">
                            <div class="card-content">
                                <a href="{{route('campaign.create', 'coupon')}}">
                                <div class="item-img text-center">
                                <img class="img-fluid" src="{{ asset('css/static') }}/frontilu4.png" alt="img-placeholder">
                                </div>
                                <div class="card-body">
                                <div class="item-name">
                                    <h3>Gutscheinkamapgne</h3>
                                </div>
                                <div>
                                    <p class="item-description">
                                        Bei dieser Kampagnenart erhält der Nano-Influencer euer Produkt und teilt es mit seiner Community. Zusätzlich erhält er einen Gutscheincode/Rabattcode zum öffentlichen Teilen im Post.
                                    </p>
                                </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 p-3">
                        <div class="card shadow-sm rounded">
                            <div class="card-content">
                                <a href="{{route('campaign.create', 'giveaway')}}">
                                <div class="item-img text-center">
                                <img class="img-fluid" src="{{ asset('css/static') }}/frontilu1.png" alt="img-placeholder">
                                </div>
                                <div class="card-body">
                                <div class="item-name">
                                    <h3>Giveawaykampagne</h3>
                                </div>
                                <div>
                                    <p class="item-description">
                                        Bei dieser Kampagnenart erhält der Nano-Influencer euer Produkt und teilt es mit seiner Community. Zusätzlich veranstaltet er ein Gewinnspiel mit einer festgelegten Anzahl eures Produktes.
                                    </p>
                                </div>
                                </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-top: -80px" class="row">
                    <div class="col-md-4 p-3">
                        </div>
                    <div class="col-md-4 p-3">
                        <div class="card shadow-sm rounded">
                            <div class="card-content">
                                <a href="{{route('campaign.create', 'review')}}">
                                <div class="item-img text-center">
                                <img class="img-fluid" src="{{ asset('css/static') }}/frontilu3.png" alt="img-placeholder">
                                </div>
                                <div class="card-body">
                                <div class="item-name">
                                    <h3>Rezensionkamapgne</h3>
                                </div>
                                <div>
                                    <p class="item-description">
                                        Bei dieser Kampagnenart erhält der Nano-Influencer euer Produkt und bewertet es unter der angegebenen URL fair & ehrlich.
                                    </p>
                                </div>
                                </div>
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
@if ($shallDisable)
    <div class="modal fade in text-left show" tabindex="-1" role="dialog" style="display: block; z-index: 500;" aria-modal="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h5>Create 1 Product</h5>
                <p>Bevor du alle Kampagnen sehen kannst hinterlege bitte in deinen <a href="{{ route('profile.edit', $user->slug) }}">Profileinstellungen</a> mindestens eine Plattform.</p>
                <p>Vielen Dank.</p>
                <div class="row">
                </div>
            </div>
            <div class="modal-footer">
                <a href="{{ route('product.create') }}" class="btn btn-primary waves-effect waves-light">Create Product</a>
            </div>
        </div>
        </div>
    </div>
@endif
@endif
@endsection

@section('vendor-script')
        <!-- Vendor js files -->
        <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
        <script src="{{ asset(mix('vendors/js/forms/spinner/jquery.bootstrap-touchspin.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/extensions/jquery.steps.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
        <script src="{{ asset(mix('vendors/js/extensions/toastr.min.js')) }}"></script>

@endsection

@section('page-script')
    <script type="text/javascript">
        function setMinDate(val)
        {
            document.getElementById("publication_period_to").setAttribute("min", val.value);
        }

        function disablecouponInput(val)
        {
            if (val.checked == true) {
                document.getElementById("coupon").setAttribute("disabled", "true");
            }
            else
            {
                document.getElementById("coupon").removeAttribute("disabled");
            }
        }
        function delEl(e){
            e.parentNode.remove();
        }
        
        function addFields(){
                var parent = document.getElementById('outer_wrapper');
                var container = document.getElementById('wrapper');
                var conn = document.createElement('div');
                conn.innerHTML = "<div style='margin-top:40px;margin-bottom:40px;' class='wrapper'><input class='form-control' placeholder='Guideline 1 (max. 40 Zeichen)' style='outline: 0;border-width: 0 0 2px;border-color: #b8c2cc;width: 97%;' type='text' name='need_to_do[]'><span onclick='delEl(this)'><i style='color: #7367f0;float: right;margin-top: -20px;' class='far fa-times-circle'></i></span></div>";
                $('#outer_wrapper').append(conn);
            }


    </script>


    <!-- Page js files -->
    <script src="{{ asset('vendor/dropdown/js/dropdown.js') }}"></script>
    <script src="{{ asset(mix('js/scripts/pages/campaigns.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/extensions/nouislider.min.js')) }}"></script>
    
    
@endsection