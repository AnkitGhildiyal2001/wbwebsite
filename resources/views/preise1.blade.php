<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Hier findest du Informationen rund um die Preise unserer Plattform. Unverbindlich & Fair!">

    <title>Preise</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/favicon.ico') }}">
    
    <!--Core CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css" rel="stylesheet" />
    <link rel="stylesheet" href="new/assets/css/app.css">
    <link id="theme-sheet" rel="stylesheet" href="{{asset('new/assets/css/core.css')}}">
    <link id="theme-sheet" rel="stylesheet" href="{{asset('new/assets/css/custom.css')}}">


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
    <!-- Hero and nav -->
    <div class="hero is-relative is-theme-primary">

        <nav class="navbar navbar-wrapper navbar-fade navbar-light is-transparent">
            <div class="container">
                <!-- Brand -->
                <div class="navbar-brand">
                <a class="navbar-item" href="/">
                        <img class="light-logo" src="{{asset('new/assets/img/logo2.svg')}}" alt="">
                        <img class="dark-logo switcher-logo" src="{{asset('new/assets/img/logo1.svg')}}" alt="">
                    </a>
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
                        <a class="navbar-item is-slide" href="home">
                            Home
                        </a>
                        <!-- Navbar item -->
                        <a class="navbar-item is-slide" href="influencer">
                            Influencer
                        </a>
                        <!-- Navbar item -->
                        <a class="navbar-item is-slide" href="business">
                            Brands
                        </a>
                        <a class="navbar-item is-slide" href="preise">
                            Preise
                        </a>
                    </div>

                    <!-- Navbar end -->
                    <div class="navbar-end">
                        <!-- Signup button -->
                        <div class="navbar-item">
                            @if (Auth::guest())
                                <a id="#signup-btn" href="{{ route('login') }}" class="button button-signup btn-outlined is-bold btn-align light-btn raised">
                                    Anmeldung
                                </a>
                            @else
                                <a id="#signup-btn" href="{{ route('dashboard') }}" class="button button-signup btn-outlined is-bold btn-align light-btn raised">
                                    Dashboard
                                </a>
                            @endif
                          
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <div id="main-hero" class="hero-body">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column is-6 is-offset-3 is-header-caption is-centered pt-60 pb-60">
                        <h1 class="title main-title">
                            Preise.
                        </h1>
                        <h2 class="subtitle is-5 light-text">
                            Nutze unsere flexiblen monatlichen Pl??ne f??r unsere Plattform. Kein Stress, Verpflichtung oder ??hnliches - Ehrenwort!
                        </h2>
                        <br>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Fancy Pricing tables -->
    <div class="section">
        <div class="container">
            <div id="header-pricing" class="header-pricing">
                <div class="columns is-vcentered">
                    <div class="column is-10 is-offset-1">
                        <div class="columns is-vcentered">
                            <div class="column is-4">
                                <!-- Pricing table -->
                                <div class="flex-card header-pricing-card primary hover-inset">
                                    <h3 class="plan-name">Startup</h3>
                                    <div class="pricing-card-body">
                                        <div class="plan-price per-month animated preFadeInUp fadeInUp">
                                            <small>???</small> 399 <small>/ Pro User, pro Monat</small>
                                        </div>
                                        <div class="plan-price per-year is-hidden animated preFadeInUp fadeInUp">
                                            <small>$</small> 300 <small>/ year</small>
                                        </div>
                                        <ul class="plan-features">
                                            <li><span class="feature-count-text">Unbegrenzt Kampagnen</span></li>
                                            <li><span class="feature-count-text">Bis zu 25 Teilnehmer pro Kampagne</span></li>
                                            <li><span class="feature-count-text">Influencer Messenger</span></li>
                                            <li><span class="feature-count-text">Basis Support</span></li>
                                            <li style="margin-bottom: 72px"><span class="feature-count-text">BrudiReport Basic (Analytics)</span></li>
                                        </ul>
                                        <div class="pt-20 pb-20">
                                            <a href="/billing" class="button button-cta rounded raised primary-btn btn-outlined is-bold">Startup w??hlen</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="column is-4">
                                <!-- Pricing table -->
                                <div class="flex-card header-pricing-card primary hover-inset">
                                    <h3 class="plan-name">Grow</h3>
                                    <div class="pricing-card-body">
                                        <div class="plan-price per-month animated preFadeInUp fadeInUp">
                                            <small>???</small> 699 <small>/ Pro User, pro Monat</small>
                                        </div>
                                        <div class="plan-price per-year is-hidden animated preFadeInUp fadeInUp">
                                            <small>$</small> 480 <small>/ year</small>
                                        </div>
                                        <ul class="plan-features">
                                            <li><span class="feature-count-text">Unbegrenzt Kampagnen</span></li>
                                            <li><span class="feature-count-text">Bis zu 75 Teilnehmer pro Kampagne</span></li>
                                            <li><span class="feature-count-text">Influencer Messenger</span></li>
                                             <li><span class="feature-count-text">Premium Support mit InstantShare</span></li>
                                              <li style="margin-bottom: 72px"><span class="feature-count-text">BrudiReport Basic (Analytics)</span></li>
                                        </ul>
                                        <div class="pt-20 pb-20">
                                            <a href="/billing" class="button button-cta rounded raised primary-btn btn-outlined is-bold">Grow w??hlen</a>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <div class="column is-4">
                                <!-- Pricing table -->
                                <div class="flex-card header-pricing-card secondary hover-inset">
                                    <h3 class="plan-name">Ultimate</h3>
                                    <div class="pricing-card-body">
                                        <div class="plan-price per-month animated preFadeInUp fadeInUp">
                                            <small>???</small> 999 <small>/ Pro User, pro Monat</small>
                                        </div>
                                        <div class="plan-price per-year is-hidden animated preFadeInUp fadeInUp">
                                            <small>$</small> 825 <small>/ year</small>
                                        </div>
                                        <ul class="plan-features">
                                            <li><span class="feature-count-text">Unbegrenzt Kampagnen</span></li>
                                            <li><span class="feature-count-text">Unbegrenzte Teilnehmer</span></li>
                                            <li><span class="feature-count-text">Influencer Messenger</span></li>
                                            <li><span class="feature-count-text">Premium Support mit InstantShare</span></li>
                                            <li><span class="feature-count-text">BrudiReport+ (Erweiterte Analytics)</span></li>
                                            <li><span class="feature-count-text">Coming soon: Live Tracking der Kampagne</span></li>

                                        </ul>
                                        <div class="pt-20 pb-20">
                                            <a href="/billing" class="button button-cta rounded raised secondary-btn is-bold">Ultimate w??hlen</a>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                        </div>
 <span>Du hast noch offene Fragen, die dir die WunderBrudis beantworten sollen? Schreib uns ein E-Mail an mail@wunderbrudis.de -  oder nutze den Direktchat unten rechts auf unserer Seite!.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Clients -->
    <div class="hero-foot pt-10 pb-10">
        <div class="container">
            <div class="tabs partner-tabs is-centered">
                <ul>
                    <li><a><img class="partner-logo" src="assets/img/logos/custom/covenant.svg" alt=""></a></li>
                    <li><a><img class="partner-logo" src="assets/img/logos/custom/infinite.svg" alt=""></a></li>
                    <li><a><img class="partner-logo" src="assets/img/logos/custom/phasekit.svg" alt=""></a></li>
                    <li><a><img class="partner-logo" src="assets/img/logos/custom/grubspot.svg" alt=""></a></li>
                    <li><a><img class="partner-logo" src="assets/img/logos/custom/livetalk.svg" alt=""></a></li>
                </ul>
            </div>
        </div>
    </div>
    {{--
    <!-- FAQ -->
    <div class="section section-feature-grey is-medium">
        <div class="container">
            <!-- Title -->
            <div class="section-title-wrapper has-text-centered">
                <div class="bg-number">?</div>
                <h2 class="section-title-landing">
                    Frequent questions
                </h2>
                <h4>Do you have some questions ? Find answers in our FAQ.</h4>
            </div>

            <div class="content-wrapper">
                <div class="columns">
                    <div class="column is-4 is-offset-2">
                        <div class="content">
                            <p class="text-bold color-primary">1. How do i get started?</p>
                            <p>Lorem ipsum dolor sit amet, accusata voluptatibus per eu, probo summo argumentum ea vel. Pri
                                nonumy sententiae ex, eam adhuc regione tibique te. Et sit alii vero harum, ne his viderer
                                consectetuer.</p>
                        </div>
                        <div class="content">
                            <p class="text-bold color-primary">3. Where can i get training?</p>
                            <p>Lorem ipsum dolor sit amet, accusata voluptatibus per eu, probo summo argumentum ea vel. Pri
                                nonumy sententiae ex, eam adhuc regione tibique te. Et sit alii vero harum, ne his viderer
                                consectetuer.</p>
                        </div>
                        <div class="content">
                            <p class="text-bold color-primary">5. Are updates mandatory?</p>
                            <p>Lorem ipsum dolor sit amet, accusata voluptatibus per eu, probo summo argumentum ea vel. Pri
                                nonumy sententiae ex, eam adhuc regione tibique te. Et sit alii vero harum, ne his viderer
                                consectetuer.</p>
                        </div>
                    </div>
                    <div class="column is-4">
                        <div class="content">
                            <p class="text-bold color-primary">2. How can i add people to my team?</p>
                            <p>Lorem ipsum dolor sit amet, accusata voluptatibus per eu, probo summo argumentum ea vel. Pri
                                nonumy sententiae ex, eam adhuc regione tibique te. Et sit alii vero harum, ne his viderer
                                consectetuer.</p>
                        </div>
                        <div class="content">
                            <p class="text-bold color-primary">4. Do you have a refund policy?</p>
                            <p>Lorem ipsum dolor sit amet, accusata voluptatibus per eu, probo summo argumentum ea vel. Pri
                                nonumy sententiae ex, eam adhuc regione tibique te. Et sit alii vero harum, ne his viderer
                                consectetuer.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter section -->
    <div class="section section-feature-grey is-relative footer-waves giant-pb">
        <div class="container">
            <!-- Title -->
            <div class="section-title-wrapper has-text-centered">
                <div class="bg-number">#</div>
                <h2 class="section-title-landing">
                    Subscribe to our Newsletter
                </h2>
                <h4>Subscribe to our Newsletter to get our latest updates.</h4>
            </div>
            <div class="content has-text-centered giant-pb">
                <div class="columns">
                    <div class="column is-6 is-offset-3">
                        <!-- Styled input that shows only on desktop and tablet -->
                        <div class="giant-input-wrapper is-wavy is-hidden-mobile">
                            <div class="giant-input">
                                <input type="text" placeholder="Your email address goes here">
                                <button class="button inner button-cta btn-align primary-btn rounded raised no-lh">Subscribe</button>
                            </div>
                        </div>

                        <!-- Fallback input for mobile -->
                        <div class="mobile-input is-hidden-desktop is-hidden-tablet">
                            <input class="input is-medium" type="text" placeholder="Email address">
                            <button class="button button-cta btn-align primary-btn raised is-fullwidth no-lh mt-10">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 --}}
    <!-- Dark footer -->
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
                        <a class="footer-nav-link" href="/datenschutz">Datenschutzerkl??rung</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- /Dark footer -->
    <!-- Side navigation -->
    <div class="side-navigation-menu">
        <!-- Categories menu -->
        <div class="category-menu-wrapper">
            <!-- Menu -->
            <ul class="categories">
                <li class="square-logo"><img src="assets/img/logos/square-white.svg" alt=""></li>
                <li class="category-link is-active" data-navigation-menu="demo-pages"><i class="sl sl-icon-layers"></i></li>
                <li class="category-link" data-navigation-menu="onepagers"><i class="sl sl-icon-docs"></i></li>
                <li class="category-link" data-navigation-menu="components"><i class="sl sl-icon-grid"></i></li>
            </ul>
            <!-- Menu -->

            <ul class="author">
                <li>
                    <!-- Theme author -->
                    <a href="https://cssninja.io" target="_blank">
                        <img class="main-menu-author" src="assets/img/logos/cssninja.svg" alt="">
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
    <div id="backtotop"><a href="#"></a></div>
    
      
     <!-- Bulchat Button -->
    
    <div id="chat-widget">
        <div class="chat-widget-body is-closed">
            <div class="chat-header">
                <div class="close-chat is-hidden-desktop is-hidden-tablet"><img src="{{asset('new/img/graphics/legacy/close-small.svg')}}" alt=""></div>
                <div class="chat-team">
                    <div class="team-member has-text-centered">
                        <img src="https://via.placeholder.com/250x250" alt="" data-demo-src="{{asset('new//img/avatars/alan.jpg')}}">
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
                    <img src="https://via.placeholder.com/250x250" alt="" data-demo-src="{{asset('new//img/avatars/alan.jpg')}}">
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
                    <img src="https://via.placeholder.com/250x250" alt="" data-demo-src="{{asset('new/img/avatars/helen.jpg')}}">
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
    <script src="{{asset('new/assets/js/app.js')}}"></script>
    <script src="{{asset('new/assets/js/core.js')}}"></script>
    <script type="text/javascript">
        $(window).on("scroll",function(){

            if($(window).scrollTop()>65){
                $(".my-logo").attr("style", "color: #8c8cf9 !important");
            }else{
                $(".my-logo").attr("style", "color: #ffffff !important");
            }
        })
    </script>
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