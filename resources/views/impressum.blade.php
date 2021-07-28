<!doctype html>
<html lang="de">

  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZFJWRYBPEC"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-ZFJWRYBPEC');
    </script>
    <meta charset="utf-8">
    <title>Impresssum</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Unser Impressum">
    <link href="{{ asset('css/static') }}/loaders/loader-typing.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/static') }}/theme.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="preload" as="font" href="assets/fonts/Inter-UI-upright.var.woff2" type="font/woff2" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/favicon.ico') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.wpcc.io/lib/1.0.2/cookieconsent.min.css"/><script src="https://cdn.wpcc.io/lib/1.0.2/cookieconsent.min.js"></script><script>window.addEventListener("load", function(){window.wpcc.init({"border":"thin","corners":"small","colors":{"popup":{"background":"#1c1f4b","text":"#ffffff","border":"#afb3e4"},"button":{"background":"#afb3e4","text":"#000000"}},"position":"bottom","content":{"href":"https://wunderbrudis.de/datenschutz","message":"Auch das Krümelmonster ist ein Brudi: Daher verwenden wir auf dieser Seite Cookies.","link":"Mehr erfahren","button":"Verstanden"}})});</script>

    @if (Auth::guest())
      <script>
        window.intercomSettings = {
          app_id: "bf6y1dp7"
        };
      </script>

      <script>
        // We pre-filled your app ID in the widget URL: 'https://widget.intercom.io/widget/bf6y1dp7'
        (function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/bf6y1dp7';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
      </script>
    @else
      <script>
        window.intercomSettings = {
          app_id: "bf6y1dp7",
          name: "{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}", // Full name
          email: "{{ Auth::user()->email }}", // Email address
          created_at: "{{ Auth::user()->created_at->timestamp }}", // Signup date as a Unix timestamp
          "Type": "{{ Auth::user()->isCompanyContact ?? 0 }}"
        };
      </script>

      <script>
        // We pre-filled your app ID in the widget URL: 'https://widget.intercom.io/widget/bf6y1dp7'
        (function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',w.intercomSettings);}else{var d=document;var i=function(){i.c(arguments);};i.q=[];i.c=function(args){i.q.push(args);};w.Intercom=i;var l=function(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/bf6y1dp7';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);};if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();
      </script>

    @endif
    <link rel="preload" as="font" href="assets/fonts/Inter-UI.var.woff2" type="font/woff2" crossorigin="anonymous">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
              j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
              'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-PBDZSCD');</script>
    <!-- End Google Tag Manager -->
  </head>

  <body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PBDZSCD"
                    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    <div class="loader">
      <div class="loading-animation"></div>
    </div>

    <div class="navbar-container ">
      <nav class="navbar navbar-expand-lg navbar-dark" data-overlay data-sticky="top">
        <div class="container">
          <a class="navbar-brand fade-page" href="/">
            WunderBrudis
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
            <img class="icon navbar-toggler-open" src="{{ asset('images/static') }}/icons/interface/menu.svg" alt="menu interface icon" data-inject-svg />
            <img class="icon navbar-toggler-close" src="{{ asset('images/static') }}/icons/interface/cross.svg" alt="cross interface icon" data-inject-svg />
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <div class="py-2 py-lg-0">
              <ul class="navbar-nav">
                <li class="nav-item dropdown">
                  <a href="/" class="nav-link dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a href="/influencer" class="nav-link dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">Influencer</a>
                </li>
                <li class="nav-item dropdown">
                  <a href="/business" class="nav-link dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">Brands</a>
                </li>
                <li class="nav-item dropdown">
                  <a href="/preise" class="nav-link dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true">Preise</a>
                </li>
                @if (Auth::guest())
                  <a href="{{ route('login') }}" class="btn btn-white ml-lg-3">Anmeldung</a>
                @else
                  <a href="{{ route('dashboard') }}" class="btn btn-white ml-lg-3">Dashboard</a>
              @endif

            </div>
          </div>
      </nav>
    </div>
    <section class="bg-dark text-light header-inner p-0 jarallax o-hidden" data-overlay data-jarallax data-speed="0.2">
      <img src="{{ asset('images/static') }}/inner-6.jpg" alt="Image" class="jarallax-img opacity-30">
      <div class="container py-0 layer-2">
        <div class="row my-3">
          <div class="col">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="/">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="#">Pages</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Current Page</li>
              </ol>
            </nav>
          </div>
        </div>
        <div class="row my-4 my-md-6" data-aos="fade-up">
          <div class="col-lg-9 col-xl-8">
            <h1 class="display-4">Impressum</h1>
            <p class="lead mb-0"></p>
          </div>
        </div>
      </div>
      <div class="decoration-wrapper">
        <div class="decoration bottom right d-none d-md-block" data-jarallax-element="100 100">
          <img class="bg-primary-2" src="{{ asset('images/static') }}/decorations/deco-blob-1.svg" alt="deco-blob-1 decoration" data-inject-svg />
        </div>
      </div>
      <div class="divider flip-x">
        <img src="{{ asset('images/static') }}/dividers/divider-1.svg" alt="graphical divider" data-inject-svg />
      </div>
    </section>
  <div class="container">
    <div class="row justify-content-md-center">
    <h2>Angaben gem&auml;&szlig; &sect; 5 TMG</h2>
    <p>WunderBrudis UG (haftungsbeschr&auml;nkt)<br />
      Armstr, 14<br />
      45355 Essen</p>

    <p>Handelsregister: HRB 31120<br />
      Registergericht: Amtsgericht Essen</p>

    <p><strong>Vertreten durch:</strong><br />
      Ruben Richthammer</p>

    <h2>Kontakt</h2>
    <p>Telefon: 0201/83888900<br />
      E-Mail: mail@wunderbrudis.de</p>

    <h2>Verantwortlich f&uuml;r den Inhalt nach &sect; 55 Abs. 2 RStV</h2>
    <p>Ruben Richthammer</p>

    <h2>EU-Streitschlichtung</h2>
    <p>Die Europ&auml;ische Kommission stellt eine Plattform zur Online-Streitbeilegung (OS) bereit: <a href="https://ec.europa.eu/consumers/odr" target="_blank" rel="noopener noreferrer">https://ec.europa.eu/consumers/odr</a>.<br /> Unsere E-Mail-Adresse finden Sie oben im Impressum.</p>

    <h2>Verbraucher&shy;streit&shy;beilegung/Universal&shy;schlichtungs&shy;stelle</h2><p>Wir sind nicht bereit oder verpflichtet, an Streitbeilegungsverfahren vor einer Verbraucherschlichtungsstelle teilzunehmen.</p>

    <h3>Haftung f&uuml;r Inhalte</h3> <p>Als Diensteanbieter sind wir gem&auml;&szlig; &sect; 7 Abs.1 TMG f&uuml;r eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach &sect;&sect; 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, &uuml;bermittelte oder gespeicherte fremde Informationen zu &uuml;berwachen oder nach Umst&auml;nden zu forschen, die auf eine rechtswidrige T&auml;tigkeit hinweisen.</p> <p>Verpflichtungen zur Entfernung oder Sperrung der Nutzung von Informationen nach den allgemeinen Gesetzen bleiben hiervon unber&uuml;hrt. Eine diesbez&uuml;gliche Haftung ist jedoch erst ab dem Zeitpunkt der Kenntnis einer konkreten Rechtsverletzung m&ouml;glich. Bei Bekanntwerden von entsprechenden Rechtsverletzungen werden wir diese Inhalte umgehend entfernen.</p> <h3>Haftung f&uuml;r Links</h3> <p>Unser Angebot enth&auml;lt Links zu externen Websites Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb k&ouml;nnen wir f&uuml;r diese fremden Inhalte auch keine Gew&auml;hr &uuml;bernehmen. F&uuml;r die Inhalte der verlinkten Seiten ist stets der jeweilige Anbieter oder Betreiber der Seiten verantwortlich. Die verlinkten Seiten wurden zum Zeitpunkt der Verlinkung auf m&ouml;gliche Rechtsverst&ouml;&szlig;e &uuml;berpr&uuml;ft. Rechtswidrige Inhalte waren zum Zeitpunkt der Verlinkung nicht erkennbar.</p> <p>Eine permanente inhaltliche Kontrolle der verlinkten Seiten ist jedoch ohne konkrete Anhaltspunkte einer Rechtsverletzung nicht zumutbar. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Links umgehend entfernen.</p> <h3>Urheberrecht</h3> <p>Die durch die Seitenbetreiber erstellten Inhalte und Werke auf diesen Seiten unterliegen dem deutschen Urheberrecht. Die Vervielf&auml;ltigung, Bearbeitung, Verbreitung und jede Art der Verwertung au&szlig;erhalb der Grenzen des Urheberrechtes bed&uuml;rfen der schriftlichen Zustimmung des jeweiligen Autors bzw. Erstellers. Downloads und Kopien dieser Seite sind nur f&uuml;r den privaten, nicht kommerziellen Gebrauch gestattet.</p> <p>Soweit die Inhalte auf dieser Seite nicht vom Betreiber erstellt wurden, werden die Urheberrechte Dritter beachtet. Insbesondere werden Inhalte Dritter als solche gekennzeichnet. Sollten Sie trotzdem auf eine Urheberrechtsverletzung aufmerksam werden, bitten wir um einen entsprechenden Hinweis. Bei Bekanntwerden von Rechtsverletzungen werden wir derartige Inhalte umgehend entfernen.</p>

    <p>Quelle: <a href="https://www.e-recht24.de">e-recht24.de</a></p>
  </div>
  </div>
    <footer class="pb-4 bg-primary-3 text-light" id="footer">
      <div class="container">
        <div class="row mb-5">
        </div>
        <div class="row mb-5">
          <div class="col-6 col-lg-3 col-xl-2">
            <h5>Rechtliches</h5>
            <ul class="nav flex-column">
              <li class="nav-item">
                <a href="/impressum" class="nav-link">Impressum</a>
              </li>
              <li class="nav-item">
                <a href="/datenschutz" class="nav-link">Datenschutzerklärung</a>
              </li>
              <li class="nav-item">
                <a href="/agb" class="nav-link">Widerrufsrecht</a>
              </li>
              <li class="nav-item">
                <a href="/agb" class="nav-link">AGBs</a>
              </li>
            </ul>
          </div>
          <div class="col-6 col-lg">
            <h5>Kontakt</h5>
            <ul class="list-unstyled">
              <li class="mb-3 d-flex">
                <img class="icon" src="{{ asset('images/static') }}/icons/theme/map/marker-1.svg" alt="marker-1 icon" data-inject-svg />
                <div class="ml-3">
                  <span>Armstr 14,
                    <br />45355 Essen</span>
                </div>
              </li>
              <li class="mb-3 d-flex">
                <img class="icon" src="{{ asset('images/static') }}/icons/theme/communication/call-1.svg" alt="call-1 icon" data-inject-svg />
                <div class="ml-3">
                  <span>0201 83 88 8900</span>
                  <span class="d-block text-muted text-small">Mon - Fri 10:00 - 18:00</span>
                </div>
              </li>
              <li class="mb-3 d-flex">
                <img class="icon" src="{{ asset('images/static') }}/icons/theme/communication/mail.svg" alt="mail icon" data-inject-svg />
                <div class="ml-3">
                  <a href="#">mail@wunderbrudis.de</a>
                </div>
              </li>
            </ul>
          </div>
          <div class="col-lg-5 col-xl-4 mt-3 mt-lg-0">
            <h5>Subscribe</h5>
            <p>Die wichtigsten News von den Brudis - direkt in deine Inbox!</p>
            <form action="/forms/mailchimp.php" data-form-email novalidate>
              <div class="form-row">
                <div class="col-12">
                  <input type="email" class="form-control mb-2" placeholder="Email Address" name="email" required>
                </div>
                <div class="col-12">
                  <div class="d-none alert alert-success" role="alert" data-success-message>
                    Thanks, a member of our team will be in touch shortly.
                  </div>
                  <div class="d-none alert alert-danger" role="alert" data-error-message>
                    Please fill all fields correctly.
                  </div>
                  <div data-recaptcha data-sitekey="INSERT_YOUR_RECAPTCHA_V2_SITEKEY_HERE" data-size="invisible" data-badge="bottomleft">
                  </div>
                  <button type="submit" class="btn btn-primary btn-loading btn-block" data-loading-text="Sending">
                    <img class="icon" src="{{ asset('images/static') }}/icons/theme/code/loading.svg" alt="loading icon" data-inject-svg />
                    <span>Abbonieren</span>
                  </button>
                </div>
              </div>
            </form>
            <small class="text-muted form-text">Wir geben deine Daten nicht weiter. Ehrenwort. Siehe auch unsere <a href="/datenschutz">Privacy Policy</a>
            </small>

          </div>
        </div>
        <div class="row justify-content-center mb-2">
          <div class="col-auto">
            <ul class="nav">
              <li class="nav-item">
                <a href="https://instagram.com/wunderbrudis" class="nav-link">
                  <img class="icon undefined" src="{{ asset('images/static') }}/icons/social/instagram.svg" alt="instagram social icon" data-inject-svg />
                </a>
              </li>
              <li class="nav-item">
                <a href="https://twitter.com/wunderbrudis" class="nav-link">
                  <img class="icon undefined" src="{{ asset('images/static') }}/icons/social/twitter.svg" alt="twitter social icon" data-inject-svg />
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <img class="icon undefined" src="{{ asset('images/static') }}/icons/social/youtube.svg" alt="youtube social icon" data-inject-svg />
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <img class="icon undefined" src="{{ asset('images/static') }}/icons/social/medium.svg" alt="medium social icon" data-inject-svg />
                </a>
              </li>
              <li class="nav-item">
                <a href="https://facebook.com/wunderbrudis" class="nav-link">
                  <img class="icon undefined" src="{{ asset('images/static') }}/icons/social/facebook.svg" alt="facebook social icon" data-inject-svg />
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col col-md-auto text-center">
            <small class="text-muted">&copy;2020 WunderBrudis - Made with ❤️ & Glück auf in Essen</a>
            </small>
          </div>
        </div>
      </div>
    </footer>

    <!-- Required vendor scripts (Do not remove) -->
    <script type="text/javascript" src="{{ asset('js/static') }}/jquery.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/static') }}/popper.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/static') }}/bootstrap.js"></script>

    <!-- Optional Vendor Scripts (Remove the plugin script here and comment initializer script out of index.js if site does not use that feature) -->

    <!-- AOS (Animate On Scroll - animates elements into view while scrolling down) -->
    <script type="text/javascript" src="{{ asset('js/static') }}/aos.js"></script>
    <!-- Clipboard (copies content from browser into OS clipboard) -->
    <script type="text/javascript" src="{{ asset('js/static') }}/clipboard.js"></script>
    <!-- Fancybox (handles image and video lightbox and galleries) -->
    <script type="text/javascript" src="{{ asset('js/static') }}/jquery.fancybox.min.js"></script>
    <!-- Flatpickr (calendar/date/time picker UI) -->
    <script type="text/javascript" src="{{ asset('js/static') }}/flatpickr.min.js"></script>
    <!-- Flickity (handles touch enabled carousels and sliders) -->
    <script type="text/javascript" src="{{ asset('js/static') }}/flickity.pkgd.min.js"></script>
    <!-- Ion rangeSlider (flexible and pretty range slider elements) -->
    <script type="text/javascript" src="{{ asset('js/static') }}/ion.rangeSlider.min.js"></script>
    <!-- Isotope (masonry layouts and filtering) -->
    <script type="text/javascript" src="{{ asset('js/static') }}/isotope.pkgd.min.js"></script>
    <!-- jarallax (parallax effect and video backgrounds) -->
    <script type="text/javascript" src="{{ asset('js/static') }}/jarallax.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/static') }}/jarallax-video.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/static') }}/jarallax-element.min.js"></script>
    <!-- jQuery Countdown (displays countdown text to a specified date) -->
    <script type="text/javascript" src="{{ asset('js/static') }}/jquery.countdown.min.js"></script>
    <!-- jQuery smartWizard facilitates steppable wizard content -->
    <script type="text/javascript" src="{{ asset('js/static') }}/jquery.smartWizard.min.js"></script>
    <!-- Plyr (unified player for Video, Audio, Vimeo and Youtube) -->
    <script type="text/javascript" src="{{ asset('js/static') }}/plyr.polyfilled.min.js"></script>
    <!-- Prism (displays formatted code boxes) -->
    <script type="text/javascript" src="{{ asset('js/static') }}/prism.js"></script>
    <!-- ScrollMonitor (manages events for elements scrolling in and out of view) -->
    <script type="text/javascript" src="{{ asset('js/static') }}/scrollMonitor.js"></script>
    <!-- Smooth scroll (animation to links in-page)-->
    <script type="text/javascript" src="{{ asset('js/static') }}/smooth-scroll.polyfills.min.js"></script>
    <!-- SVGInjector (replaces img tags with SVG code to allow easy inclusion of SVGs with the benefit of inheriting colors and styles)-->
    <script type="text/javascript" src="{{ asset('js/static') }}/svg-injector.umd.production.js"></script>
    <!-- TwitterFetcher (displays a feed of tweets from a specified account)-->
    <script type="text/javascript" src="{{ asset('js/static') }}/twitterFetcher_min.js"></script>
    <!-- Typed text (animated typing effect)-->
    <script type="text/javascript" src="{{ asset('js/static') }}/typed.min.js"></script>
    <!-- Required theme scripts (Do not remove) -->
    <script type="text/javascript" src="{{ asset('js/static') }}/theme.js"></script>
    <!-- Removes page load animation when window is finished loading -->
    <script type="text/javascript">
      window.addEventListener("load", function () {    document.querySelector('body').classList.add('loaded');  });
    </script>

  </body>

</html>
