<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Als Deutschlands erste Nano-Influencer Plattform verschaffen wir Brands skalierbare Reichweite & authentische Reviews durch Nano-Influencer.">

    <title>Deine Nano Influencer Plattform | WunderBrudis</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/favicon.ico') }}">

    <!--Core CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('new/assets/css/app.css')}}">
    <link id="theme-sheet" rel="stylesheet" href="{{ asset('new/assets/css/core.css')}}">
    <style type="text/css">
        .toggle-wrap{
            background-color: #fff;
        }
        .single-toggle-wrapper{
            margin-bottom: 10px;
            border-radius: 40px;
        }
        .navbar-wrapper .navbar-brand img {
            height: 56px;
        }
        .navbar-item img {
            max-height: 3.5rem;
        }
        .navbar-wrapper.navbar-faded .navbar-brand img {
            height: 39px;
        }
    </style>

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PBDZSCD');</script>
    <!-- End Google Tag Manager -->


</head>

<body class="is-theme-core">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PBDZSCD"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <div class="pageloader"></div>
    <div class="infraloader is-active"></div>
    <!-- Hero -->
    <div class="hero is-relative is-fullheight is-app-grey">

        <!--Nav-->
        <nav class="navbar navbar-wrapper navbar-default navbar-fade is-transparent">
            <div class="container">
                <!-- Brand -->
                <div class="navbar-brand">
                <a class="navbar-item" href="/">
                        <img class="light-logo" src="{{asset('new/assets/img/logo1.svg')}}" alt="">
                        <img class="dark-logo switcher-logo" src="{{asset('new/assets/img/logo1.svg')}}" alt="">
                    </a>
                    <!-- Sidebar Trigger
                    <a id="navigation-trigger" class="navbar-item hamburger-btn" href="javascript:void(0);">
                        <span class="menu-toggle">
                            <span class="icon-box-toggle">
                                <span class="rotate">
                                    <i class="icon-line-top"></i>
                                    <i class="icon-line-center"></i>
                                    <i class="icon-line-bottom"></i>
                                </span>
                        </span>
                        </span>
                    </a> -->

                    <!-- Responsive toggle -->
                    <div class="custom-burger" data-target="">
                        <a id="" class="responsive-btn" href="javascript:void(0);">
                            <span class="menu-toggle">
                                <span class="icon-box-toggle">
                                    <span class="rotate">
                                        <i class="icon-line-top"></i>
                                        <i class="icon-line-center"></i>
                                        <i class="icon-line-bottom"></i>
                                    </span>
                            </span>
                            </span>
                        </a>
                    </div>
                    <!-- /Responsive toggle -->
                </div>

                <!-- Navbar menu -->
                <div class="navbar-menu">
                    <!-- Navbar Start -->
                    <div class="navbar-end">
                        <!-- Navbar item -->
                        <a class="navbar-item is-slide" href="/">
                            Home
                        </a>
                        <a class="navbar-item is-slide" href="/influencer">
                        Influencer
                        </a>
                        <!-- Navbar item -->
                        <a class="navbar-item is-slide" href="/business">
                        Brands
                        </a>
                        <!-- Navbar item -->
                        <a class="navbar-item is-slide" href="/preise">
                        Preise
                        </a>
                    </div>

                    <!-- Navbar end -->
                    <div class="navbar-end">
                        <!-- Signup button -->
                        <div class="navbar-item">
                            @if (Auth::guest())
                                <a id="#signup-btn" href="{{ route('login') }}" class="button button-cta btn-outlined is-bold btn-align primary-btn raised">
                                    Anmeldung
                                </a>
                            @else
                                <a id="#signup-btn" href="{{ route('dashboard') }}" class="button button-cta btn-outlined is-bold btn-align primary-btn raised">
                                    Dashboard
                                </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!--Star Fall-->
        <div class='starfall'>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
            <div class='falling-star'></div>
        </div>
        <div class="hero-body">
            <div class="container">
                <div class="columns has-text-centered">
                    <!-- Caption -->
                    <div class="column is-8 is-offset-2 is-hero-caption is-centered">
                        <h1 class="title is-1">WunderBrudis - Kleine Influencer, Riesen Ergebnis!</h1>
                        <h2 class="subtitle is-5 pt-10">
                            Wir verbinden Brands mit Nano Influencern für authentische Produktplatzierungen & Reviews.
                        </h2>

                        <div class="buttons">
                            <a href="/influencer" class="button button-cta is-bold btn-align white-btn">
                                Ich bin ein Nano-Influencer
                            </a>
                            <a href="/business" class="button button-cta is-bold btn-align primary-btn raised">
                                Ich bin eine Brand
                            </a>
                        </div>
                        <!-- Hero Mockup -->
                        <img class="people-mockup-1" src="{{ asset('new/assets/img/graphics/compositions/hero-people-1-core.svg')}}" data-base-url="assets/img/graphics/compositions/hero-people-1" data-extension=".svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- erster absatz product
    <div id="product" class="section is-medium is-skewed-sm">
        <div class="container is-reverse-skewed-sm">

            <div class="section-title-wrapper has-text-centered">
                <div class="bg-number">1</div>
                <h2 class="section-title-landing">
                    Sales just got Simple
                </h2>
                <h4>Learn to sell better and faster</h4>
            </div>

            <div class="content-wrapper">
                <div class="columns is-vcentered">
                    <div class="column is-5 is-offset-1 has-text-centered">
                        <div class="columns is-vcentered has-text-centered is-multiline">
                            <div class="column is-6">
                                <div class="flex-card icon-card hover-inset">
                                    <img src="{{ asset('assets/img/graphics/icons/invoice-core.svg')}}" data-base-url="{{ asset('new/assets/img/graphics/icons/invoice')}}" data-extension=".svg" alt="">
                                    <div class="icon-card-text is-clean">
                                        Invoicing
                                    </div>
                                </div>
                            </div>
                            <div class="column is-6">
                                <div class="flex-card icon-card hover-inset">
                                    <img src="{{ asset('new/assets/img/graphics/icons/gateway-core.svg')}}" data-base-url="{{ asset('new/assets/img/graphics/icons/gateway')}}" data-extension=".svg" alt="">
                                    <div class="icon-card-text is-clean">
                                        Payment gateway
                                    </div>
                                </div>
                            </div>
                            <div class="column is-6">
                                <div class="flex-card icon-card hover-inset">
                                    <img src="{{ asset('new/assets/img/graphics/icons/records-core.svg')}}" data-base-url="{{ asset('new/assets/img/graphics/icons/records')}}" data-extension=".svg" alt="">
                                    <div class="icon-card-text is-clean">
                                        Customer records
                                    </div>
                                </div>
                            </div>
                            <div class="column is-6">
                                <div class="flex-card icon-card hover-inset">
                                    <img src="{{ asset('new/assets/img/graphics/icons/sync-core.svg')}}" data-base-url="{{ asset('new/assets/img/graphics/icons/sync')}}" data-extension=".svg" alt="">
                                    <div class="icon-card-text is-clean">
                                        Cloud Sync
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->

                    <!--
                    <div class="column is-5">
                        <div class="side-feature-text">
                            <h2 class="feature-headline is-clean">Made by business people for business people</h2>
                            <p class="body-color">Lorem ipsum dolor sit amet, vim quidam blandit voluptaria no, has eu lorem convenire
                                incorrupte. Vis mutat altera percipit ad, ipsum prompta ius eu. Sanctus appellantur vim ea.
                            </p>
                            <p class="body-color">Lorem ipsum dolor sit amet, vim quidam blandit voluptaria no, has eu lorem convenire
                                incorrupte. Dolorem delicata vis te, aperiam nostrum ut per.</p>
                            <div class="button-wrap">
                                <a href="kit2-signup.html" class="button button-cta btn-align raised primary-btn">
                                    Try it free
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->


    <!--
    <div id="services" class="section section-feature-grey is-medium is-skewed-sm">
        <div class="container is-reverse-skewed-sm">

            <div class="section-title-wrapper has-text-centered">
                <div class="bg-number">2</div>
                <h2 class="section-title-landing">
                    Wie profitiere ich als Brand von Nano-Influencing?
                </h2>
                <h4></h4>
            </div>

            <div class="content-wrapper hover-cards">
                <div class="columns is-vcentered">
                    <div class="column is-10 is-offset-1">
                        <div class="columns is-vcentered">
                            <div class="column is-6">
                                <div class="flex-card icon-card-hover first-card light-bordered">
                                    <h3 class="card-title is-clean">
                                        💸 Kosteneffektivität
                                    </h3>
                                    <p class="card-description">Mit unseren Nano-Influencern erhältst du Markenbotschafter, die authentisch motiviert sind. Die Vergütung erfolgt dabei über Product-Placements oder Giveaways.</p>
                                </div>

                                <div class="flex-card icon-card-hover second-card light-bordered">
                                    <h3 class="card-title is-clean">
                                        🔝 Höheres Engagement

                                    </h3>
                                    <p class="card-description">Die WunderBrudis garantieren dir höhere Interaktionsraten. Nano-Influencer stehen im engen Austausch mit ihren Followern. Die Engagementrate ist zwei- bis dreimal höher, als die der großen Influencer.

.</p>
                                </div>
                            </div>
                            <div class="column is-6">

                                <div class="flex-card icon-card-hover third-card light-bordered">
                                    <h3 class="card-title is-clean">
                                        👥 Authentische Communitys

                                    </h3>
                                    <p class="card-description">Nano-Influencer wählen Product-Placements, hinter denen sie mit ihrem Namen stehen. Das sorgt für Authentizität und einem höheren Impact auf die Kaufentscheidung.

</p>
                                </div>

                                <div class="flex-card icon-card-hover fourth-card light-bordered">
                                    <h3 class="card-title is-clean">
                                        Scale up
                                    </h3>
                                    <p class="card-description">Lorem ipsum dolor sit amet, vim quidam blandit voluptaria
                                        no, has eu lorem convenire incorrupte.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="button-wrap has-text-centered is-title-reveal">
                    <a href="kit2-signup.html" class="button button-cta btn-align raised primary-btn raised">
                        Start your Free Trial
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="features" class="section is-medium is-skewed-sm">
        <div class="container is-reverse-skewed-sm">
            <div class="section-title-wrapper has-text-centered">
                <div class="bg-number">3</div>
                <h2 class="section-title-landing">
                    Ich bin Nano-Influencer was bringen mir die WunderBrudis?
                </h2>
                <h4></h4>
            </div>

            <div class="content-wrapper tabbed-features">

                <div class="columns is-vcentered">
                    <div class="column">
                        <div class="navigation-tabs outlined-pills animated-tabs">
                            <div class="tabs is-centered">
                                <ul>
                                    <li class="tab-link is-active" data-tab="new-deals"><a>Coole Produkte</a></li>
                                    <li class="tab-link" data-tab="invoices"><a> Entwicklung
</a></li>
                                    <li class="tab-link" data-tab="reporting"><a> Eine Plattform
</a></li>
                                </ul>
                            </div>

                            <div id="new-deals" class="navtab-content is-active">
                                <div class="columns is-vcentered">
                                    <div class="column is-6">
                                        <figure class="image">
                                            <img class="has-light-shadow" src="{{ asset('new/assets/img/graphics/apps/app-2-core.png')}}" data-base-url="{{ asset('new/assets/img/graphics/apps/app-2')}}" data-extension=".png" alt="">
                                        </figure>
                                    </div>
                                    <div class="column is-6">
                                        <div class="inner-content">
                                            <h2 class="feature-headline is-clean">📦 Coole Produkte</h2>

                                            <p class="body-color">Melde dich bereits <b>ab 500 Followern</b> an und erhalte regelmäßig neue spannende Produkte, die du testen und deiner Community zeigen kannst.
                                            </p>
                                            <div class="button-wrap">
                                                <a href="kit2-features.html" class="button btn-align btn-more is-link color-primary">
                                                    Learn more about deals <i class="sl sl-icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="invoices" class="navtab-content">
                                <div class="columns is-vcentered">
                                    <div class="column is-6">
                                        <figure class="image">
                                            <img class="has-light-shadow" src="{{ asset('new/assets/img/graphics/apps/app-1-core.png')}}" data-base-url="{{ asset('new/assets/img/graphics/apps/app-1')}}" data-extension=".png" alt="">
                                        </figure>
                                    </div>
                                    <div class="column is-6">
                                        <div class="inner-content">
                                            <h2 class="feature-headline is-clean">🎓 Entwicklung


</h2>
                                            <p class="body-color">Nutze unsere BrudiCademy und lerne richtiges und rechtssicheres Influencing von den Profis.

 </p>
                                            <p class="body-color">
                                            <div class="button-wrap">
                                                <a href="kit2-features.html" class="button btn-align btn-more is-link color-primary">
                                                    Learn more about invoices <i class="sl sl-icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="reporting" class="navtab-content">
                                <div class="columns is-vcentered">
                                    <div class="column is-6">
                                        <figure class="image">
                                            <img class="has-light-shadow" src="{{ asset('new/assets/img/graphics/apps/app-2-core.png')}}" data-base-url="{{ asset('new/assets/img/graphics/apps/app-2')}}" data-extension=".png" alt="">
                                        </figure>
                                    </div>
                                    <div class="column is-6">
                                        <div class="inner-content">
                                            <h2 class="feature-headline is-clean">👫 Eine Plattform
</h2>
                                            <p class="body-color">Wir bieten dir eine innovative Plattform, über die du kostenlos mit unzähligen Brands in Kontakt treten kannst.

 </p>
                                            <p class="body-color">
                                            </p>
                                            <div class="button-wrap">
                                                <a href="kit2-signup.html" class="button btn-align btn-more is-link color-primary">
                                                    Learn more about reporting <i class="sl sl-icon-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
{{--
<!-- Values -->
<section id="values" class="section section-feature-grey is-medium is-skewed-sm">
    <div class="container is-reverse-skewed-sm">
        <div class="section-title-wrapper has-text-centered">
            <div class="bg-number"></div>
            <h2 class="section-title-landing">
                Deine Vorteile von WunderBrudis als Nano-Influencer
            </h2>
            <h3>Du hast 500 – 10.000 Follower und möchtest kostenlos Produkte zugeschickt bekommen? Mit uns findest du passende Kampagnen und erhältst lukrative Werbedeals!</h3>
        </div>

        <div class="content-wrapper floating-circles">
            <div class="columns is-vcentered">
                <div class="column is-4">
                    <div class="floating-circle levitate is-icon-reveal">
                        <img src="https://image.flaticon.com/icons/png/512/2827/2827585.png" data-base-url="https://image.flaticon.com/icons/png/512/2827/2827585.png" data-extension=".png" alt="">
                    </div>
                    <div class="has-text-centered floating-text">
                        <span class="clean-text"><b>📦 Teste coole Produkte</b></span>
                        <p><br></p>
                        <p>Melde dich auch mit kleinem Following an und du erhältst regelmäßig neue coole Produkte, die du testen und deiner Community vorstellen kannst.</p>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="floating-circle levitate delay-2 is-icon-reveal">
                        <img src="https://image.flaticon.com/icons/png/512/783/783196.png" data-base-url="https://image.flaticon.com/icons/png/512/783/783196.png" data-extension=".png" alt="">
                    </div>
                    <div class="has-text-centered floating-text">
                        <span class="clean-text"><b>🎓 Entwickle dich weiter</b></span>
                        <p><br></p>
                        <p>In unserer BrudiCademy lernst du von den besten! Profi-Influencer zeigen dir, wie richtiges und rechtssicheres Influencing funktioniert.</p>
                    </div>
                </div>
                <div class="column is-4">
                    <div class="floating-circle levitate delay-4 is-icon-reveal">
                        <img src="https://image.flaticon.com/icons/png/512/2835/2835639.png" data-base-url="https://image.flaticon.com/icons/png/512/2835/2835639.png" data-extension=".png" alt="">
                    </div>
                    <div class="has-text-centered floating-text">
                        <span class="clean-text"><b>👫 Wachse mit unserer Plattform</b></span>
                        <p><br></p>
                        <p>Mit WunderBrudis hast du die Möglichkeit, kostenlos mit unzähligen Unternehmen in Kontakt zu treten, ohne lange Recherche und ohne zeitintensives „Klinkenputzen“. </p>
                    </div>
                </div>
            </div>
            <div class="button-wrap has-text-centered is-title-reveal">
                <a href="/influencer" class="button button-cta btn-align raised primary-btn">
Mehr erfahren</a>
            </div>
        </div>
    </div>
</section>
<!-- /Values -->
--}}
<section id="values" class="section section-feature-grey is-medium is-skewed-sm">
    <div class="container is-reverse-skewed-sm">
         <!-- Title -->
         <div class="section-title-wrapper has-text-centered">
            <div class="bg-number"></div>
            <h2 class="section-title-landing">
               Mehr als 500 Follower? Du bist Nano Influencer!
            </h2>
            <h3 class="title is-5">Finde passende Kampagnen, erhalte das Produkt & teile es auf Instagram! Thats it.</h3>
        </div>

        <div class="content-wrapper">
            <div class="columns">
                <!-- Benefit box -->
                <div class="column is-4">
                    <div class="flex-card is-feature padding-40" style="height: 100%;">
                        <!-- Icon -->
                        <div class="icon-container is-first is-icon-reveal is-size-1">
                            <i class="im im-icon-Box-Open"></i>
                        </div>
                        <!-- Content -->
                        <div class="content-container has-text-centered">
                            <h3>Coole Produkte</h3>
                            <p>Melde dich bereits <b>ab 500 Followern</b> an und erhalte regelmäßig neue spannende Produkte, die du testen und deiner Community zeigen kannst.</p>
                        </div>
                    </div>
                </div>
                <!-- Benefit box -->
                <div class="column is-4">
                    <div class="flex-card is-feature padding-40" style="height: 100%;">
                        <!-- Icon -->
                        <div class="icon-container is-second is-icon-reveal is-size-2">
                            <i class="im im-icon-Student-MaleFemale"></i>
                        </div>
                        <!-- Content -->
                        <div class="content-container has-text-centered">
                            <h3>Entwicklung</h3>
                            <p>Nutze unsere BrudiCademy und lerne richtiges und rechtssicheres Influencing von den Profis.</p>
                        </div>
                    </div>
                </div>
                <!-- Benefit box -->
                <div class="column is-4">
                    <div class="flex-card is-feature padding-40" style="height: 100%;">
                        <!-- Icon -->
                        <div class="icon-container is-third is-icon-reveal is-size-2">
                            <i class="im im-icon-Phone-SMS"></i>
                        </div>
                        <!-- Content -->
                        <div class="content-container has-text-centered">
                            <h3>Eine Plattform</h3>
                            <p>Wir bieten dir eine innovative Plattform, über die du <b>kostenlos</b> mit unzähligen Brands in Kontakt treten kannst.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- CTA -->
            <div class="button-wrap has-text-centered is-title-reveal mt-40 mb-40" data-sr-id="1" style="; visibility: visible;  -webkit-transform: translateY(0) scale(1); opacity: 1;transform: translateY(0) scale(1); opacity: 1;-webkit-transition: -webkit-transform 0.6s cubic-bezier(0.215, 0.61, 0.355, 1) 0.1s, opacity 0.6s cubic-bezier(0.215, 0.61, 0.355, 1) 0.1s; transition: transform 0.6s cubic-bezier(0.215, 0.61, 0.355, 1) 0.1s, opacity 0.6s cubic-bezier(0.215, 0.61, 0.355, 1) 0.1s; ">
                <a href="/influencer" class="button button-cta btn-align raised primary-btn">
                    Jetzt Vorteile entdecken &amp; starten
                </a>
            </div>
        </div>
    </div>
</section>
    <!-- Slanted feature Section -->
    <section class="section section-primary is-medium is-skewed-sm is-relative">
        <div class="container slanted-container is-reverse-skewed-sm">
            <div class="columns is-vcentered">
                <!-- Content -->
                 <div class="column is-6 is-offset-3">
                    <h2 style="text-align: center" class="title is-3 clean-text light-text">Häufig gestellte Fragen
</h2>
                    <div class="single-toggle-wrapper">
                        <div class="toggle-wrap">
                            <span class="trigger"><a href="#">Was bringt WunderBrudis meinem Unternehmen?<i class="im im-icon-Add"></i></a></span>
                            <div class="toggle-container">
                                <p class="no-padding mt-10">Wir haben uns auf das Vernetzen von Unternehmen mit Nano-Influencern spezialisiert. Mit unserer Plattform garantieren wir deinem Unternehmen ein außergewöhnlich hohes Engagement mit Kunden deiner Zielgruppe. Auf WunderBrudis findest du eine große Auswahl an Nano-Influencern und kannst in einer Kooperation kosteneffizientes Marketing für dein Produkt erzielen.</p>
                                <p class="no-padding mt-10"></p>
                            </div>
                        </div>
                    </div>

                    <div class="single-toggle-wrapper">
                        <div class="toggle-wrap">
                            <span class="trigger"><a href="#">Warum Nano-Influencer und keine großen Influencer?<i class="im im-icon-Add"></i></a></span>
                            <div class="toggle-container">
                                <p class="no-padding mt-10">Große Influencer haben ein großes, bunt gemischtes Following. Eine Kooperation mit einem großen Influencer ist preislich im hohen, 5-stelligen Bereich angesiedelt, doch nur ein kleiner Teil der Community entspricht deiner Zielgruppe. Das Investment macht sich schnell für das Unternehmen bemerkbar. Nano-Influencer sind demgegenüber oft markentreuer, weil sie nur Produkte vorstellen, von denen sie wirklich überzeugt sind. Das wiederum merken die User und sind eher geneigt, dein Produkt zu kaufen. Die Vergütung fällt bei effektiverem Marketing also sehr viel geringer aus.

</p>
                                <p class="no-padding mt-10"></p>
                            </div>
                        </div>
                    </div>
                     <div class="single-toggle-wrapper">
                         <div class="toggle-wrap">
                             <span class="trigger"><a href="#">Für welche Unternehmen ist WunderBrudis geeignet?<i class="im im-icon-Add"></i></a></span>
                             <div class="toggle-container">
                                 <p class="no-padding mt-10">Egal, ob du ein Start-up gegründet hast und dein Budget für Werbung gering ist, oder ob du eine große Brand leitest und wenig oder keine Erfahrungen mit Influencer-Marketing gemacht hast. Auf unserer Plattform sind die passenden Nano-Influencer, um kosteneffizient zu werben und eine hohe Engagement- und Verkaufsrate mit wenig Aufwand zu erreichen.

                                 </p>
                                 <p class="no-padding mt-10"></p>
                             </div>
                         </div>
                     </div>
                    <div class="single-toggle-wrapper">
                        <div class="toggle-wrap">
                            <span class="trigger"><a href="#">Ich bin ein Unternehmen und brauche die Wunderbrudis. Wie nehme ich Kontakt auf?<i class="im im-icon-Add"></i></a></span>
                            <div class="toggle-container">
                                <p class="no-padding mt-10">Vielen Dank für dein Interesse! Kontaktiere uns gerne über unseren Support: mail@wunderbrudis.de. First-things-first: gerne vereinbaren wir eine Demo und stellen unsere Plattform unter der Anleitung einer unserer WunderProfis vor.

</p>
                                <p class="no-padding mt-10"></p>
                            </div>
                        </div>
                    </div>
                    <div class="single-toggle-wrapper">
                        <div class="toggle-wrap">
                            <span class="trigger"><a href="#">Ich bin Unternehmen. Was Kosten mich die WunderBrudis?<i class="im im-icon-Add"></i></a></span>
                            <div class="toggle-container">
                                <p class="no-padding mt-10">Wir bieten deiner Brand flexible, monatliche Pakete an, die sich nach deinen individuellen Wünschen und Anforderungen richtet. Mehr Infos findest du unter: <a href="/preise">Preis & Addons</a></p>
                                <p class="no-padding mt-10"></p>
                            </div>
                        </div>
                    </div>
                     <div class="single-toggle-wrapper">
                         <div class="toggle-wrap">
                             <span class="trigger"><a href="#">Kann sich jeder Influencer anmelden? Wie viele Follower brauche ich?<i class="im im-icon-Add"></i></a></span>
                             <div class="toggle-container">
                                 <p class="no-padding mt-10">Natürlich! Du kannst dich bereits ab 500 Followern registrieren. Es macht für uns keinen Unterschied, ob du als Social Influencer dein Leben auf Instagram teilst, als Pro-Gamer Phasmophobia auf Twitch streamst oder als Tech-Nerd Unboxings auf Youtube erstellst. Wichtig ist nur eins: sei authentisch und binde deine offene und interessierte Community ein, mit der du deine Meinung zu Produkten teilen möchtest!

                                 </p>
                                 <p class="no-padding mt-10"></p>
                             </div>
                         </div>
                     </div>


                    <p style="margin-top: 55px" class="light-text">Du hast noch offene Fragen, die dir die WunderBrudis beantworten sollen? Schreib uns ein E-Mail an mail@wunderbrudis.de - oder nutze den Direktchat unten rechts auf unserer Seite!.</p>


                </div>
            </div>
        </div>
    </section>

    <!-- Values -->
    <section id="values" class="section section-feature-grey is-medium is-skewed-sm">
        <div class="container is-reverse-skewed-sm">
            <!-- Title -->
            <div class="section-title-wrapper has-text-centered">
                <div class="bg-number"></div>
                <h2 class="section-title-landing">
                    Deine Vorteile von WunderBrudis als Unternehmen
                </h2>
                <h3 class="title is-5">Du hast ein cooles Produkt und kennst deine Zielgruppe - wir erledigen den Rest. Wir vernetzen dich mit Nano-Influencern in deiner Nische, damit du mehr Reichweite und ehrliche Reviews erhältst.</h3>
            </div>

            <div class="content-wrapper">
                <div class="columns">
                    <!-- Benefit box -->
                    <div class="column is-4">
                        <div class="flex-card is-feature padding-40" style="height: 100%;">
                            <!-- Icon -->
                            <div class="icon-container is-first is-icon-reveal is-size-2">
                                <i class="im im-icon-Euro"></i>
                            </div>
                            <!-- Content -->
                            <div class="content-container has-text-centered">
                                <h3>Setze dein Budget clever ein</h3>
                                <p>Mit Nano-Influencern erhältst du Markenbotschafter, die authentisch motiviert sind. Die Vergütung erfolgt über Product-Placements oder Giveaways.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Benefit box -->
                    <div class="column is-4">
                        <div class="flex-card is-feature padding-40" style="height: 100%;">
                            <!-- Icon -->
                            <div class="icon-container is-second is-icon-reveal is-size-2">
                                <i class="im im-icon-Checked-User"></i>
                            </div>
                            <!-- Content -->
                            <div class="content-container has-text-centered">
                                <h3>Nano-Influencer Marketing wirkt!</h3>
                                <p>Nano-Influencer haben ein kleineres, aber dafür aktiveres Following in einer bestimmten Nische. Dein Produkt wird mit echtem Mehrwert beworben. Das sorgt für Authentizität und einem höheren Impact auf die Kaufentscheidung der User.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Benefit box -->
                    <div class="column is-4">
                        <div class="flex-card is-feature padding-40" style="height: 100%;">
                            <!-- Icon -->
                            <div class="icon-container is-third is-icon-reveal is-size-2">
                                <i class="im im-icon-Tap"></i>
                            </div>
                            <!-- Content -->
                            <div class="content-container has-text-centered">
                                <h3>Höheres Engagement ohne Aufwand</h3>
                                <p>Erhalte mehr Reichweite und Relevanz! Wir garantieren dir eine höhere Interaktionsrate als bei großen Influencern. Nano-Influencer sind im engeren Austausch mit ihren Followern und genießen ein größeres Vertrauen, von dem du profitieren kannst – mit einer zwei- bis dreimal höheren Engagementrate.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="has-text-centered">
                <h4 class="title is-4 mt-40">Starte noch heute ins Nano-Influencer-Marketing und bringe deine Marke nach vorne!</h4>
                <!-- CTA -->
                <div class="button-wrap has-text-centered is-title-reveal">
                    <a href="/business" class="button button-cta btn-align raised primary-btn">
                        Mehr erfahren
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- /Values -->
{{--
    <!-- Clients -->
    <section id="business-types" class="section is-medium is-skewed-sm">
        <div class="container is-reverse-skewed-sm">
            <!-- Title -->
            <div class="section-title-wrapper has-text-centered">
                <div class="bg-number">5</div>
                <h2 class="section-title-landing">
                    We got you covered
                </h2>
                <h4>Every business matters, learn how we handle it.</h4>
            </div>

            <!-- Content -->
            <div class="content-wrapper">
                <div class="columns is-vcentered">
                    <div class="column is-5 is-offset-1">
                        <div class="side-feature-text">
                            <h2 class="feature-headline is-clean">Every business matters. We give you tools to succeed.</h2>
                            <p>Lorem ipsum dolor sit amet, vim quidam blandit voluptaria no, has eu lorem convenire
                                incorrupte. </p>
                            <p>Lorem ipsum dolor sit amet, vim quidam blandit voluptaria no, has eu lorem convenire
                                incorrupte. Vis mutat altera percipit ad, ipsum prompta ius eu. Sanctus appellantur vim ea.
                            </p>
                            <div class="button-wrap">
                                <a href="kit2-signup.html" class="button button-cta btn-align raised primary-btn">
                                    Try it free
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Card with icons -->
                    <div class="column is-4 is-offset-1">
                        <div class="flex-card company-types">
                            <div class="icon-group">
                                <img src="{{ asset('new/assets/img/graphics/icons/store-core.svg')}}" data-base-url="{{ asset('new/assets/img/graphics/icons/store')}}" data-extension=".svg" alt="">
                                <span>Online stores</span>
                            </div>
                            <div class="icon-group">
                                <img src="{{ asset('new/assets/img/graphics/icons/bank-core.svg')}}" data-base-url="{{ asset('new/assets/img/graphics/icons/bank')}}" data-extension=".svg" alt="">
                                <span>Finance services</span>
                            </div>
                            <div class="icon-group">
                                <img src="{{ asset('new/assets/img/graphics/icons/factory-core.svg')}}" data-base-url="{{ asset('new/assets/img/graphics/icons/factory')}}" data-extension=".svg" alt="">
                                <span>Industry</span>
                            </div>
                            <div class="icon-group">
                                <img src="{{ asset('new/assets/img/graphics/icons/church-core.svg')}}" data-base-url="{{ asset('new/assets/img/graphics/icons/church')}}" data-extension=".svg" alt="">
                                <span>Churches</span>
                            </div>
                            <div class="icon-group">
                                <img src="{{ asset('new/assets/img/graphics/icons/warehouse-core.svg')}}" data-base-url="{{ asset('new/assets/img/graphics/icons/warehouse')}}" data-extension=".svg" alt="">
                                <span>Logistics</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials section -->
    <section id="card-testimonials" class="section section-feature-grey is-medium is-skewed-sm">
        <div class="container is-reverse-skewed-sm">
            <!-- Title -->
            <div class="section-title-wrapper has-text-centered">
                <div class="bg-number">6</div>
                <h2 class="section-title-landing">
                    We are Trusted
                </h2>
                <h4>Access integrations and new features in a matter of seconds</h4>
            </div>

            <div class="content-wrapper">
                <!-- Testimonials -->
                <div class="columns">
                    <div class="column is-10 is-offset-1">
                        <div class="columns is-vcentered">
                            <div class="column is-6">
                                <!-- Testimonial item -->
                                <div class="flex-card testimonial-card light-raised light-bordered padding-20">
                                    <div class="testimonial-title">
                                        Amazed by the product
                                    </div>
                                    <div class="testimonial-text">
                                        Lorem ipsum dolor sit amet, vim quidam blandit voluptaria no, has eu lorem convenire
                                        incorrupte. Vis mutat altera percipit ad.
                                    </div>
                                    <div class="user-id">
                                        <img src="https://via.placeholder.com/250x250" alt="" data-demo-src="{{ asset('new/assets/img/avatars/dan.png')}}">
                                        <div class="info">
                                            <div class="name clean-text">Dan Shwartz</div>
                                            <div class="position">Software engineer</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial item -->
                                <div class="flex-card testimonial-card light-raised light-bordered padding-20">
                                    <div class="testimonial-title">
                                        My tasks are now painless
                                    </div>
                                    <div class="testimonial-text">
                                        Lorem ipsum dolor sit amet, vim quidam blandit voluptaria no, has eu lorem convenire
                                        incorrupte. Vis mutat altera percipit ad.
                                    </div>
                                    <div class="user-id">
                                        <img src="https://via.placeholder.com/250x250" alt="" data-demo-src="{{ asset('new/assets/img/avatars/janet.jpg')}}">
                                        <div class="info">
                                            <div class="name clean-text">Jane Guzmann</div>
                                            <div class="position">CFO</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column is-6">
                                <!-- Testimonial item -->
                                <div class="flex-card testimonial-card light-raised light-bordered padding-20">
                                    <div class="testimonial-title">
                                        Very nice support
                                    </div>
                                    <div class="testimonial-text">
                                        Lorem ipsum dolor sit amet, vim quidam blandit voluptaria no, has eu lorem convenire
                                        incorrupte. Vis mutat altera percipit ad.
                                    </div>
                                    <div class="user-id">
                                        <img src="https://via.placeholder.com/250x250" alt="" data-demo-src="{{ asset('new/assets/img/avatars/helen.jpg')}}">
                                        <div class="info">
                                            <div class="name clean-text">Hellen Miller</div>
                                            <div class="position">Accountant</div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial item -->
                                <div class="flex-card testimonial-card light-raised light-bordered padding-20">
                                    <div class="testimonial-title">
                                        My income has doubled
                                    </div>
                                    <div class="testimonial-text">
                                        Lorem ipsum dolor sit amet, vim quidam blandit voluptaria no, has eu lorem convenire
                                        incorrupte. Vis mutat altera percipit ad.
                                    </div>
                                    <div class="user-id">
                                        <img src="https://via.placeholder.com/250x250" alt="" data-demo-src="{{ asset('new/assets/img/avatars/anthony.jpg')}}">
                                        <div class="info">
                                            <div class="name clean-text">Anthony Leblanc</div>
                                            <div class="position">Founder at Hereby</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Clients grid -->
                <div class="grid-clients three-grid">
                    <div class="columns is-vcentered">
                        <div class="column"></div>
                        <div class="column">
                            <a><img class="client" src="{{ asset('new/assets/img/logos/custom/systek.svg')}}" alt=""></a>
                        </div>
                        <div class="column">
                            <a><img class="client" src="{{ asset('new/assets/img/logos/custom/phasekit.svg')}}" alt=""></a>
                        </div>
                        <div class="column">
                            <a><img class="client" src="{{ asset('new/assets/img/logos/custom/grubspot.svg')}}" alt=""></a>
                        </div>
                        <div class="column"></div>
                    </div>
                    <div class="columns is-vcentered is-separator">
                        <div class="column"></div>
                        <div class="column">
                            <a><img class="client" src="{{ asset('new/assets/img/logos/custom/tribe.svg')}}" alt=""></a>
                        </div>
                        <div class="column">
                            <a><img class="client" src="{{ asset('new/assets/img/logos/custom/kromo.svg')}}" alt=""></a>
                        </div>
                        <div class="column">
                            <a><img class="client" src="{{ asset('new/assets/img/logos/custom/covenant.svg')}}" alt=""></a>
                        </div>
                        <div class="column"></div>
                    </div>
                    <div class="columns is-vcentered is-separator">
                        <div class="column"></div>
                        <div class="column">
                            <a><img class="client" src="{{ asset('new/assets/img/logos/custom/infinite.svg')}}" alt=""></a>
                        </div>
                        <div class="column">
                            <a><img class="client" src="{{ asset('new/assets/img/logos/custom//gutwork.svg')}}" alt=""></a>
                        </div>
                        <div class="column">
                            <a><img class="client" src="{{ asset('new/assets/img/logos/custom/proactive.svg')}}" alt=""></a>
                        </div>
                        <div class="column"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
--}}
    <!-- CTA -->
    <section id="cta" class="section is-medium is-skewed-sm">
        <div class="container is-reverse-skewed-sm">
            <!-- Title -->

            <div class="section-title-wrapper has-text-centered">
                <div class="bg-number">🤔</div>
                <h2 class="section-title-landing">
                    Überzeugt?
                </h2>
            </div>

            <div class="content">
                <h4 class="has-text-centered">Jetzt direkt loslegen.</h4>
            </div>
            <div class="has-text-centered is-title-reveal pt-20 pb-20">
                <a href="/login" class="button button-cta btn-align raised primary-btn">
                    Anmeldung
                </a>
            </div>
        </div>
    </section>
    <!-- /CTA -->

    <!-- Side footer -->
<footer class="footer footer-light-left">
    <div class="container">
        <div class="columns is-vcentered">
            <div class="column is-6">
                <div class="mb-20">
                    <img class="small-footer-logo" src="{{asset('assets/img/logos/bulkit-logo-g.png')}}" alt="">
                </div>
                <div>
                    <span class="moto">Founded and coded with <i class="fa fa-heart color-red"></i> in Essen.</span>
                    <nav class="level is-mobile mt-20">
                        <div class="level-left level-social">
                            <a href="https://facebook.com/wunderbrudis" class="level-item">
                                <span class="icon"><i class="fa fa-facebook"></i></span>
                            </a>
                            <a href="https://twitter.com/wunderbrudis" class="level-item">
                                <span class="icon"><i class="fa fa-twitter"></i></span>
                            </a>
                            <a href="https://de.linkedin.com/company/wunderbrudis?trk=public_profile_topcard-current-company" class="level-item">
                                <span class="icon"><i class="fa fa-linkedin"></i></span>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
            <div class="column">
                <div class="footer-nav-right">
                    <a class="footer-nav-link" href="/impressum">Impressum</a>
                    <a class="footer-nav-link" href="/agb">Agbs</a>
                    <a class="footer-nav-link" href="/datenschutz">Datenschutzerklärung</a>
                </div>
            </div>
        </div>
    </div>
</footer>
    <!-- /Side footer -->
    <!-- Side navigation -->
    <div class="side-navigation-menu">
        <!-- Categories menu -->
        <div class="category-menu-wrapper">
            <!-- Menu -->
            <ul class="categories">
                <li class="square-logo"><img src="{{ asset('new/assets/img/logos/square-white.svg')}}" alt=""></li>
                <li class="category-link is-active" data-navigation-menu="demo-pages"><i class="sl sl-icon-layers"></i></li>
                <li class="category-link" data-navigation-menu="onepagers"><i class="sl sl-icon-docs"></i></li>
                <li class="category-link" data-navigation-menu="components"><i class="sl sl-icon-grid"></i></li>
            </ul>
            <!-- Menu -->

            <ul class="author">
                <li>
                    <!-- Theme author -->
                    <a href="https://cssninja.io" target="_blank">
                        <img class="main-menu-author" src="{{ asset('new/assets/img/logos/cssninja.svg')}}" alt="">
                    </a>
                </li>
            </ul>
        </div>
        <!-- /Categories menu -->

        <!-- Navigation menu -->
        <div id="demo-pages" class="navigation-menu-wrapper animated preFadeInRight fadeInRight">
            <!-- Navigation Header -->
            <div class="navigation-menu-header">
                <span>Demo pages</span>
                <a class="ml-auto hamburger-btn navigation-close" href="javascript:void(0);">
                    <span class="menu-toggle">
                        <span class="icon-box-toggle">
                            <span class="rotate">
                                <i class="icon-line-top"></i>
                                <i class="icon-line-center"></i>
                                <i class="icon-line-bottom"></i>
                            </span>
                    </span>
                    </span>
                </a>
            </div>
            <!-- Navigation Body -->
            <ul class="navigation-menu">
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">weekend</span>Agency kit</a>
                    <ul>
                        <li><a class="is-submenu" href="/agency-home.html">Homepage</a></li>
                        <li><a class="is-submenu" href="/agency-about.html">About</a></li>
                        <li><a class="is-submenu" href="/agency-portfolio.html">Portfolio</a></li>
                        <li><a class="is-submenu" href="/agency-contact.html">Contact</a></li>
                        <li><a class="is-submenu" href="/agency-blog.html">Blog</a></li>
                        <li><a class="is-submenu" href="/agency-post-nosidebar.html">Post no sidebar</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">wb_incandescent</span>Startup kit</a>
                    <ul>
                        <li><a class="is-submenu" href="/startup-landing.html">Homepage</a></li>
                        <li><a class="is-submenu" href="/startup-about.html">About</a></li>
                        <li><a class="is-submenu" href="/startup-product.html">Product</a></li>
                        <li><a class="is-submenu" href="/startup-contact.html">Contact</a></li>
                        <li><a class="is-submenu" href="/startup-login.html">Login</a></li>
                        <li><a class="is-submenu" href="/startup-signup.html">Sign up</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">apps</span>Landing kit 1</a>
                    <ul>
                        <li><a class="is-submenu" href="/kit1-landing.html">Landing page v1</a></li>
                        <li><a class="is-submenu" href="/kit1-landing-2.html">Landing page v2</a></li>
                        <li><a class="is-submenu" href="/kit1-landing-3.html">Landing page v3</a></li>
                        <li><a class="is-submenu" href="/kit1-landing-4.html">Landing page v4</a></li>
                        <li><a class="is-submenu" href="/kit1-landing-5.html">Landing page v5</a></li>
                        <li><a class="is-submenu" href="/kit1-landing-6.html">Landing page v6</a></li>
                        <li><a class="is-submenu" href="/kit1-landing-7.html">Landing page v7</a></li>
                        <li><a class="is-submenu" href="/kit1-landing-8.html">Landing page v8</a></li>
                        <li><a class="is-submenu" href="/kit1-features.html">Features v1</a></li>
                        <li><a class="is-submenu" href="/kit1-features-2.html">Features v2</a></li>
                        <li><a class="is-submenu" href="/kit1-pricing.html">Pricing page</a></li>
                        <li><a class="is-submenu" href="/kit1-login.html">Login page</a></li>
                        <li><a class="is-submenu" href="/kit1-signup.html">Signup page</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">timelapse</span>Landing kit 2</a>
                    <ul>
                        <li><a class="is-submenu" href="/kit2-landing.html">Landing page v1</a></li>
                        <li><a class="is-submenu" href="/kit2-landing-2.html">Landing page v2</a></li>
                        <li><a class="is-submenu" href="/kit2-landing-3.html">Landing page v3</a></li>
                        <li><a class="is-submenu" href="/kit2-landing-4.html">Landing page v4</a></li>
                        <li><a class="is-submenu" href="/kit2-landing-5.html">Landing page v5</a></li>
                        <li><a class="is-submenu" href="/kit2-landing-6.html">Landing page v6</a></li>
                        <li><a class="is-submenu" href="/kit2-landing-7.html">Landing page v7</a></li>
                        <li><a class="is-submenu" href="/kit2-landing-8.html">Landing page v8</a></li>
                        <li><a class="is-submenu" href="/kit2-landing-9.html">Landing page v9</a></li>
                        <li><a class="is-submenu" href="/kit2-landing-10.html">Landing page v10</a></li>
                        <li><a class="is-submenu" href="/kit2-landing-11.html">Landing page v11</a></li>
                        <li><a class="is-submenu" href="/kit2-features.html">Features v1</a></li>
                        <li><a class="is-submenu" href="/kit2-features-2.html">Features v2</a></li>
                        <li><a class="is-submenu" href="/kit2-pricing.html">Pricing page</a></li>
                        <li><a class="is-submenu" href="/kit2-login.html">Login page</a></li>
                        <li><a class="is-submenu" href="/kit2-signup.html">Signup page</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">assistant</span>Landing kit 3</a>
                    <ul>
                        <li><a class="is-submenu" href="/kit3-landing.html">Landing page v1</a></li>
                        <li><a class="is-submenu" href="/kit3-landing-2.html">Landing page v2</a></li>
                        <li><a class="is-submenu" href="/kit3-features.html">Feature page</a></li>
                        <li><a class="is-submenu" href="/kit3-pricing.html">Pricing page</a></li>
                        <li><a class="is-submenu" href="/kit3-login.html">Login page</a></li>
                        <li><a class="is-submenu" href="/kit3-signup.html">Signup page</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">brightness_2</span>Landing kit 4</a>
                    <ul>
                        <li><a class="is-submenu" href="/kit4-landing.html">Landing page</a></li>
                        <li><a class="is-submenu" href="/kit4-pricing.html">Pricing page</a></li>
                        <li><a class="is-submenu" href="/kit4-help.html">Help center</a></li>
                        <li><a class="is-submenu" href="/kit4-help-category.html">Help category</a></li>
                        <li><a class="is-submenu" href="/kit4-help-article.html">Help article</a></li>
                        <li><a class="is-submenu" href="/kit4-signup.html">Sign Up</a></li>
                        <li><a class="is-submenu" href="/kit4-login.html">Login</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">toys</span>Landing kit 5</a>
                    <ul>
                        <li><a class="is-submenu" href="/kit5-landing.html">Landing page</a></li>
                        <li><a class="is-submenu" href="/kit5-features.html">Feature page</a></li>
                        <li><a class="is-submenu" href="/kit5-pricing.html">Pricing Page</a></li>
                        <li><a class="is-submenu" href="/kit5-login.html">Login / Signup</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">mouse</span>Landing kit 6</a>
                    <ul>
                        <li><a class="is-submenu" href="kit6-landing.html">Landing page</a></li>
                        <li><a class="is-submenu" href="kit6-login.html">Login page</a></li>
                        <li><a class="is-submenu" href="kit6-signup.html">Signup page</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">work</span>Landing kit
                        7</a>
                    <ul>
                        <li><a class="is-submenu" href="/kit7-landing.html">Landing page</a></li>
                        <li><a class="is-submenu" href="/kit7-landing-alt.html">Landing page v2</a></li>
                        <li><a class="is-submenu" href="/kit7-landing-3.html">Landing page v3</a></li>
                        <li><a class="is-submenu" href="/kit7-landing-4.html">Landing page v4</a></li>
                        <li><a class="is-submenu" href="/kit7-landing-5.html">Landing page v5</a></li>
                        <li><a class="is-submenu" href="/kit7-authentication.html">Auth page</a></li>
                        <li><a class="is-submenu" href="/kit7-pricing.html">Pricing page</a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <a class="parent-link" href="#">
                        <span class="material-icons">public</span>Landing kit 8</a>
                    <ul>
                        <li><a class="is-submenu" href="/kit8-landing.html">Landing page v1</a></li>
                        <li><a class="is-submenu" href="/kit8-landing-1.html">Landing page v2</a></li>
                        <li><a class="is-submenu" href="/kit8-landing-2.html">Landing page v3</a></li>
                        <li><a class="is-submenu" href="/kit8-landing-3.html">Landing page v4</a></li>
                        <li><a class="is-submenu" href="/kit8-landing-4.html">Landing page v5</a></li>
                        <li><a class="is-submenu" href="/kit8-landing-5.html">Landing page v6</a></li>
                        <li><a class="is-submenu" href="/kit8-landing-6.html">Landing page v7</a></li>
                        <li><a class="is-submenu" href="/kit8-pricing.html">Pricing page</a></li>
                        <li><a class="is-submenu" href="/kit8-jobs.html">Jobs page</a></li>
                        <li><a class="is-submenu" href="/kit8-login.html">Login page</a></li>
                        <li><a class="is-submenu" href="/kit8-signup.html">Signup page</a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <a class="parent-link" href="#">
                        <span class="material-icons">assessment</span>Landing kit 9</a>
                    <ul>
                        <li><a class="is-submenu" href="/kit9-landing.html">Landing page v1</a></li>
                        <li><a class="is-submenu" href="/kit9-landing-2.html">Landing page v2</a></li>
                        <li><a class="is-submenu" href="/kit9-landing-3.html">Landing page v3</a></li>
                        <li><a class="is-submenu" href="/kit9-landing-4.html">Landing page v4</a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <a class="parent-link" href="#">
                        <span class="material-icons">account_balance</span>Landing kit 10</a>
                    <ul>
                        <li><a class="is-submenu" href="/kit10-landing.html">Landing page v1</a></li>
                        <li><a class="is-submenu" href="/kit10-landing-2.html">Landing page v2</a></li>
                        <li><a class="is-submenu" href="/kit10-landing-3.html">Landing page v3</a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <a class="parent-link" href="#">
                        <span class="material-icons">shop</span>Landing kit 11</a>
                    <ul>
                        <li><a class="is-submenu" href="/kit11-landing.html">Landing page v1</a></li>
                        <li><a class="is-submenu" href="/kit11-landing-2.html">Landing page v2</a></li>
                        <li><a class="is-submenu" href="/kit11-landing-3.html">Landing page v3</a></li>
                        <li><a class="is-submenu" href="/kit11-landing-4.html">Landing page v4</a></li>
                        <li><a class="is-submenu" href="/kit11-landing-5.html">Landing page v5</a></li>
                        <li><a class="is-submenu" href="/kit11-landing-6.html">Landing page v6</a></li>
                        <li><a class="is-submenu" href="/kit11-landing-7.html">Landing page v7</a></li>
                        <li><a class="is-submenu" href="/kit11-landing-8.html">Landing page v8</a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <a class="parent-link" href="#">
                        <span class="material-icons">stars</span>Landing kit 12</a>
                    <ul>
                        <li><a class="is-submenu" href="/kit12-landing.html">Landing page v1</a></li>
                        <li><a class="is-submenu" href="/kit12-landing-2.html">Landing page v2</a></li>
                        <li><a class="is-submenu" href="/kit12-landing-3.html">Landing page v3</a></li>
                        <li><a class="is-submenu" href="/kit12-landing-4.html">Landing page v4</a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <a class="parent-link" href="#">
                        <span class="material-icons">new_releases</span>Landing kit 13</a>
                    <ul>
                        <li><a class="is-submenu" href="/kit13-landing.html">Landing page v1</a></li>
                        <li><a class="is-submenu" href="/kit13-landing-2.html">Landing page v2</a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <a class="parent-link" href="#">
                        <span class="material-icons">code</span>Landing kit 14</a>
                    <ul>
                        <li><a class="is-submenu" href="/kit14-landing.html">Landing page v1</a></li>
                        <li><a class="is-submenu" href="/kit14-landing-2.html">Landing page v2</a></li>
                        <li><a class="is-submenu" href="/kit14-landing-3.html">Landing page v3</a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <a class="parent-link" href="#">
                        <span class="material-icons">settings</span>Landing kit 15</a>
                    <ul>
                        <li><a class="is-submenu" href="/kit15-landing.html">Landing page v1</a></li>
                        <li><a class="is-submenu" href="/kit15-landing-2.html">Landing page v2</a></li>
                        <li><a class="is-submenu" href="/kit15-landing-3.html">Landing page v3</a></li>
                        <li><a class="is-submenu" href="/kit15-landing-4.html">Landing page v4</a></li>
                        <li><a class="is-submenu" href="/kit15-landing-5.html">Landing page v5</a></li>
                        <li><a class="is-submenu" href="/kit15-landing-6.html">Landing page v6</a></li>
                        <li><a class="is-submenu" href="/kit15-about.html">About page</a></li>
                        <li><a class="is-submenu" href="/kit15-contact.html">Contact page</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Navigation menu -->
        <div id="onepagers" class="navigation-menu-wrapper animated preFadeInRight fadeInRight is-hidden">
            <!-- Navigation Header -->
            <div class="navigation-menu-header">
                <span>Sub Pages</span>
                <a class="ml-auto hamburger-btn navigation-close" href="javascript:void(0);">
                    <span class="menu-toggle">
                        <span class="icon-box-toggle">
                            <span class="rotate">
                                <i class="icon-line-top"></i>
                                <i class="icon-line-center"></i>
                                <i class="icon-line-bottom"></i>
                            </span>
                    </span>
                    </span>
                </a>
            </div>
            <!-- Navigation body -->
            <ul class="navigation-menu">
                <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">shopping_cart</span>Commerce</a>
                    <ul>
                        <li><a class="is-submenu" href="/commerce-home.html">Shop Home</a></li>
                        <li><a class="is-submenu" href="/commerce-product-landing.html">Product landing v1</a></li>
                        <li><a class="is-submenu" href="/commerce-product-landing-2.html">Product landing v2</a></li>
                        <li><a class="is-submenu" href="/commerce-product-1.html">Product page</a></li>
                        <li><a class="is-submenu" href="/commerce-cart.html">Cart page</a></li>
                        <li><a class="is-submenu" href="/commerce-payment-flow.html">Checkout page</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">domain</span>Company</a>
                    <ul>
                        <li><a class="is-submenu" href="/about-page-1.html">About v1</a></li>
                        <li><a class="is-submenu" href="/about-page-2.html">About v2</a></li>
                        <li><a class="is-submenu" href="/case-study-1.html">Case Study v1</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">call</span>Contact</a>
                    <ul>
                        <li><a class="is-submenu" href="/contact-page-1.html">Contact v1</a></li>
                        <li><a class="is-submenu" href="/contact-page-2.html">Contact v2</a></li>
                        <li><a class="is-submenu" href="/contact-page-3.html">Contact v3</a></li>
                        <li><a class="is-submenu" href="/contact-page-4.html">Contact v4</a></li>
                        <li><a class="is-submenu" href="/contact-page-5.html">Contact v5</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link has-new" href="#"><span class="material-icons">book</span>Blog</a>
                    <ul>
                        <li><a class="is-submenu" href="/blog-posts-full.html">Posts List v1</a></li>
                        <li><a class="is-submenu" href="/blog-posts-full-alt.html">Posts List v2</a></li>
                        <li><a class="is-submenu" href="/blog-posts-side.html">Posts List v3</a></li>
                        <li><a class="is-submenu" href="/blog-posts-side-alt.html">Posts List v4</a></li>
                        <li><a class="is-submenu" href="/blog-posts-grid-full.html">Posts Grid v1</a></li>
                        <li><a class="is-submenu" href="/blog-posts-grid-full-masonry.html">Posts Grid v2</a></li>
                        <li><a class="is-submenu" href="/blog-posts-grid-side.html">Posts Grid v3</a></li>
                        <li><a class="is-submenu" href="/blog-posts-grid-side-masonry.html">Posts Grid v4</a></li>
                        <li><a class="is-submenu" href="/blog-single-full.html">Single Post V1</a></li>
                        <li><a class="is-submenu" href="/blog-single-side.html">Single Post V2</a></li>
                    </ul>
                </li>
                <li class="has-children">
                    <a class="parent-link has-new" href="#"><span class="material-icons">highlight</span>Error Pages</a>
                    <ul>
                        <li><a class="is-submenu" href="/error-1.html">Error v1</a></li>
                        <li><a class="is-submenu" href="/error-2.html">Error v2</a></li>
                        <li><a class="is-submenu" href="/error-3.html">Error v3</a></li>
                        <li><a class="is-submenu" href="/error-4.html">Error v4</a></li>
                        <li><a class="is-submenu" href="/error-5.html">Error v5</a></li>
                        <li><a class="is-submenu" href="/error-6.html">Error v6</a></li>
                        <li><a class="is-submenu" href="/error-7.html">Error v7</a></li>
                        <li><a class="is-submenu" href="/error-8.html">Error v8</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Navigation menu -->
        <div id="components" class="navigation-menu-wrapper animated preFadeInRight fadeInRight is-hidden">
            <!-- Navigation Header -->
            <div class="navigation-menu-header">
                <span>Components</span>
                <a class="ml-auto hamburger-btn navigation-close" href="javascript:void(0);">
                    <span class="menu-toggle">
                        <span class="icon-box-toggle">
                            <span class="rotate">
                                <i class="icon-line-top"></i>
                                <i class="icon-line-center"></i>
                                <i class="icon-line-bottom"></i>
                            </span>
                    </span>
                    </span>
                </a>
            </div>
            <!-- Navigation body -->
            <ul class="navigation-menu">
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">view_quilt</span>Layout</a>
                    <ul>
                        <li><a class="is-submenu" href="/_components-layout-grid.html">Grid system</a></li>
                        <li><a class="is-submenu" href="/_components-layout-video.html">Video background</a></li>
                        <li><a class="is-submenu" href="/_components-layout-parallax.html">Parallax</a></li>
                        <li><a class="is-submenu" href="/_components-layout-headers.html">Headers</a></li>
                        <li><a class="is-submenu" href="/_components-layout-footers.html">Footers</a></li>
                        <li><a class="is-submenu" href="/_components-layout-typography.html">Typography</a></li>
                        <li><a class="is-submenu" href="/_components-layout-colors.html">Colors</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">subject</span>Navbars</a>
                    <ul>
                        <li><a class="is-submenu" href="/_components-layout-navbar-fade-light.html">Fade light</a></li>
                        <li><a class="is-submenu" href="/_components-layout-navbar-fade-dark.html">Fade dark</a></li>
                        <li><a class="is-submenu" href="/_components-layout-navbar-static-light.html">Static
                                light</a></li>
                        <li><a class="is-submenu" href="/_components-layout-navbar-static-dark.html">Static
                                dark</a></li>
                        <li><a class="is-submenu" href="/_components-layout-navbar-static-solid.html">Static
                                solid</a></li>
                        <li><a class="is-submenu" href="/_components-layout-navbar-double-dark.html">Double
                                dark</a></li>
                        <li><a class="is-submenu" href="/_components-layout-navbar-double-light.html">Double
                                light</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">view_stream</span>Sections</a>
                    <ul>
                        <li><a class="is-submenu" href="/_components-sections-features.html">Features</a></li>
                        <li><a class="is-submenu" href="/_components-sections-pricing.html">Pricing</a></li>
                        <li><a class="is-submenu" href="/_components-sections-team.html">Team</a></li>
                        <li><a class="is-submenu" href="/_components-sections-testimonials.html">Testimonials</a></li>
                        <li><a class="is-submenu" href="/_components-sections-clients.html">Clients</a></li>
                        <li><a class="is-submenu" href="/_components-sections-counters.html">Counters</a></li>
                        <li><a class="is-submenu" href="/_components-sections-carousel.html">Carousel</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">playlist_add_check</span>Basic
                        UI</a>
                    <ul>
                        <li><a class="is-submenu" href="/_components-basicui-cards.html">Cards</a></li>
                        <li><a class="is-submenu" href="/_components-basicui-buttons.html">Buttons</a></li>
                        <li><a class="is-submenu" href="/_components-basicui-dropdowns.html">Dropdowns</a></li>
                        <li><a class="is-submenu" href="/_components-basicui-lists.html">Lists</a></li>
                        <li><a class="is-submenu" href="/_components-basicui-modals.html">Modals</a></li>
                        <li><a class="is-submenu" href="/_components-basicui-tabs.html">Tabs & pills</a></li>
                        <li><a class="is-submenu" href="/_components-basicui-accordion.html">Accordions</a></li>
                        <li><a class="is-submenu" href="/_components-basicui-badges.html">Badges & labels</a></li>
                        <li><a class="is-submenu" href="/_components-basicui-popups.html">Popups</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">playlist_add</span>Advanced
                        UI</a>
                    <ul>
                        <li><a class="is-submenu" href="/_components-advancedui-tables.html">Tables</a></li>
                        <li><a class="is-submenu" href="/_components-advancedui-timeline.html">Timeline</a></li>
                        <li><a class="is-submenu" href="/_components-advancedui-boxes.html">Boxes</a></li>
                        <li><a class="is-submenu" href="/_components-advancedui-messages.html">Messages</a></li>
                        <li><a class="is-submenu" href="/_components-advancedui-megamenu.html">Megamenu</a></li>
                        <li><a class="is-submenu" href="/_components-advancedui-calendar.html">Calendar</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">check_box</span>Forms</a>
                    <ul>
                        <li><a class="is-submenu" href="/_components-forms-inputs.html">Inputs</a></li>
                        <li><a class="is-submenu" href="/_components-forms-controls.html">Controls</a></li>
                        <li><a class="is-submenu" href="/_components-forms-layouts.html">Form layouts</a></li>
                        <li><a class="is-submenu" href="/_components-forms-steps.html">Step forms</a></li>
                        <li><a class="is-submenu" href="/_components-forms-uploader.html">Uploader</a></li>
                    </ul>
                </li>
                <li class="has-children"><a class="parent-link" href="#"><span class="material-icons">adjust</span>Icons</a>
                    <ul>
                        <li><a class="is-submenu" href="/_components-icons-im.html">Icons Mind</a></li>
                        <li><a class="is-submenu" href="/_components-icons-sl.html">Simple Line Icons</a></li>
                        <li><a class="is-submenu" href="/_components-icons-fa.html">Font Awesome</a></li>
                        <li><a class="is-submenu" href="https://material.io/icons/" target="_blank">Material Icons</a></li>
                        <li><a class="is-submenu" href="/_components-extensions-iconpicker.html">Icon Picker</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /Navigation menu -->
    </div>
    <!-- /Side navigation -->
    <!-- Back To Top Button -->
    <!-- <div id="backtotop"><a href="#"></a></div>
    <div id="style-switcher" class="style-switcher visible"> -->
        <!-- <div class="switcher-close">
            <i class="material-icons">close</i>
        </div> -->
        <!--Main Theme-->
        <!-- <div class="style-dot">
            <input type="radio" id="core" name="theme_selector" checked>
            <div class="style-dot-inner"></div>
        </div> -->
        <!--Main Theme-->
        <!-- <div class="style-dot">
            <input type="radio" id="purple" name="theme_selector">
            <div class="style-dot-inner is-purple"></div>
        </div> -->
        <!--Main Theme-->
        <!-- <div class="style-dot">
            <input type="radio" id="teal" name="theme_selector">
            <div class="style-dot-inner is-teal"></div>
        </div> -->
        <!--Main Theme-->
        <!-- <div class="style-dot">
            <input type="radio" id="green" name="theme_selector">
            <div class="style-dot-inner is-green"></div>
        </div> -->

        <!--Main Theme-->
        <!-- <div class="style-dot">
            <input type="radio" id="azur" name="theme_selector">
            <div class="style-dot-inner is-azur"></div>
        </div> -->
        <!--Main Theme-->
        <!-- <div class="style-dot">
            <input type="radio" id="blue" name="theme_selector">
            <div class="style-dot-inner is-blue"></div>
        </div> -->
        <!--Main Theme-->
        <!-- <div class="style-dot">
            <input type="radio" id="night" name="theme_selector">
            <div class="style-dot-inner is-night"></div>
        </div> -->
        <!--Main Theme-->
        <!-- <div class="style-dot">
            <input type="radio" id="yellow" name="theme_selector">
            <div class="style-dot-inner is-yellow"></div>
        </div> -->
        <!--Main Theme-->
        <!-- <div class="style-dot">
            <input type="radio" id="orange" name="theme_selector">
            <div class="style-dot-inner is-orange"></div> -->
        <!-- </div> -->
        <!--Main Theme-->
        <!-- <div class="style-dot">
            <input type="radio" id="red" name="theme_selector">
            <div class="style-dot-inner is-red"></div>
        </div> -->
    <!-- </div> Bulchat Button -->
    <!-- <div id="bulchat" class="open">
        <div class="chat-button open g-item"></div> -->
    </div> <!-- Chat widget -->
    <div id="chat-widget">
        <div class="chat-widget-body is-closed">
            <div class="chat-header">
                <div class="close-chat is-hidden-desktop is-hidden-tablet"><img src="{{ asset('new/assets/img/graphics/legacy/close-small.svg')}}" alt=""></div>
                <div class="chat-team">
                    <div class="team-member has-text-centered">
                        <img src="https://via.placeholder.com/250x250" alt="" data-demo-src="{{ asset('new/assets/img/avatars/alan.jpg')}}">
                        <div class="is-handwritten">Alan maynard</div>
                    </div>
                </div>
                <div class="response-delay has-text-centered">
                    Answers in less than 18 hours
                </div>
            </div>
            <div class="message-container">
                <div class="divider">
                    <span class="before-divider"></span>
                    <div class="children">Today</div>
                    <span class="after-divider"></span>
                </div>
                <div class="chat-message from">
                    <img src="https://via.placeholder.com/250x250" alt="" data-demo-src="{{ asset('new/assets/img/avatars/alan.jpg')}}">
                    <div class="bubble-wrapper">
                        <div class="timestamp">02:49 pm</div>
                        <div class="chat-bubble">
                            Hey iam Alan ! Iam here to help. What can i do for you ?
                        </div>
                    </div>
                </div>
                <div class="chat-message to">
                    <div class="bubble-wrapper">
                        <div class="timestamp">02:48 pm</div>
                        <div class="chat-bubble">
                            Hello, someone out there ? I could use some help
                        </div>
                    </div>
                    <img src="https://via.placeholder.com/250x250" alt="" data-demo-src="{{ asset('new/assets/img/avatars/helen.jpg')}}">
                </div>
            </div>
            <div class="message-input">
                <textarea class="" rows="1" placeholder="Send a message ..."></textarea>
                <div class="message-options">
                    <div class="emoji-button"></div>
                    <div class="attach-button"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Chat widget -->
    <script src="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js"></script>
    <script src="{{ asset('new/assets/js/app.js')}}"></script>
    <script src="{{ asset('new/assets/js/core.js')}}"></script>

    <script>
    var urlParams = new URLSearchParams(window.location.search);
    if (urlParams.has('mailContact')) {
      (function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/bf6y1dp7';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
      Intercom('show');
    }
  </script>


    <script>
      (function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/bf6y1dp7';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
      window.intercomSettings = {
        app_id: "bf6y1dp7"
        @auth()
        name: "{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}", // Full name
        email: "{{ Auth::user()->email }}", // Email address
        created_at: "{{ Auth::user()->created_at->timestamp }}", // Signup date as a Unix timestamp
        "Type": "{{ Auth::user()->isCompanyContact ?? 0 }}"
        @endauth
      };
    </script>
</body>

</html>
