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
    <title>WunderBrudis - Nano Rockstars</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Wir verschaffen Brands Reichweite und authentische Reviews durch Nano-Influencer">
    <link href="{{ asset('css/static') }}/loaders/loader-typing.css" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('css/static') }}/theme.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="preload" as="font" href="{{ asset('fonts/static') }}/Inter-UI-upright.var.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="{{ asset('fonts/static') }}/Inter-UI.var.woff2" type="font/woff2" crossorigin="anonymous">

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/favicon.ico') }}">
    <link rel="stylesheet" type="text/css" href="https://cdn.wpcc.io/lib/1.0.2/cookieconsent.min.css"/><script src="https://cdn.wpcc.io/lib/1.0.2/cookieconsent.min.js"></script>
    <script>window.addEventListener("load", function(){window.wpcc.init({"border":"thin","corners":"small","colors":{"popup":{"background":"#1c1f4b","text":"#ffffff","border":"#afb3e4"},"button":{"background":"#afb3e4","text":"#000000"}},"position":"bottom","content":{"href":"https://wunderbrudis.de/datenschutz","message":"Auch das Krümelmonster ist ein WunderBrudi: Daher verwenden wir auf dieser Seite Cookies.","link":"Mehr erfahren","button":"Verstanden"}})});</script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
              j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
              'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-PBDZSCD');</script>
    <!-- End Google Tag Manager -->
  </head>

  <body data-smooth-scroll-offset="73">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PBDZSCD"
                    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
    <div class="loader">
      <div class="loading-animation"></div>
    </div>
    <div class="navbar-container">
      <nav class="navbar navbar-expand-lg navbar-dark" data-overlay data-sticky="top" style="border-bottom: 0;">
        <div class="container">
          <a class="navbar-brand fade-page" href="/" style="color: white; text-shadow: black 0px 0px 10px;">
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
                  <a href="/" class="nav-link dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true" style="color: white; text-shadow: black 0px 0px 10px;">Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a href="/influencer" class="nav-link dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true" style="color: white; text-shadow: black 0px 0px 10px;">Influencer</a>
                </li>
                <li class="nav-item dropdown">
                  <a href="/business" class="nav-link dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true" style="color: white; text-shadow: black 0px 0px 10px;">Brands</a>
                </li>
                <li class="nav-item dropdown">
                  <a href="/preise" class="nav-link dropdown-toggle" data-toggle="dropdown-grid" aria-expanded="false" aria-haspopup="true" style="color: white; text-shadow: black 0px 0px 10px;">Preise</a>
                </li>
                @if (Auth::guest())
                  <a href="{{ route('login') }}" class="btn btn-white ml-lg-3">Anmeldung</a>
                @else
                  <a href="{{ route('dashboard') }}" class="btn btn-white ml-lg-3">Dashboard</a>
              @endif

            </div>
          </div>
        </div>
      </nav>
    </div>

    <div data-overlay class="bg-primary headerHome text-light o-hidden position-relative">
      <div class="position-absolute w-100 h-100 o-hidden top-0">
        <div class="decoration right bottom scale-2">
          <img class="bg-primary-2" src="{{ asset('images/static') }}/decorations/deco-blob-2.svg" alt="deco-blob-2 decoration" data-inject-svg />
        </div>
      <!--  <div class="decoration right bottom scale-3">
          <img class="bg-white" src="{{ asset('images/static') }}/decorations/deco-dots-6.svg" alt="deco-dots-6 decoration" data-inject-svg />
        </div>
        <div class="decoration top left scale-2  d-none d-md-block">
          <img class="bg-primary-3" src="{{ asset('images/static') }}/decorations/deco-blob-1.svg" alt="deco-blob-1 decoration" data-inject-svg />
        </div> -->
      </div>
      <section class="min-vh-70 o-hidden d-flex flex-column justify-content-center">
        <div class="container">
          <div class="row justify-content-center text-center align-items-center">
            <div class="col-xl-8 col-lg-9 col-md-10 layer-3" data-aos="fade-up" data-aos-delay="500" style="">
              <h1 class="display-3">
                <!-- find soloution for mobile and long text -->
               Die Plattform für Nano-Influencer
              </h1>
              <div class="mb-4">
                <p class="lead px-xl-6" style="font-weight: 500">
                  Wir verschaffen Brands Reichweite und authentische Reviews durch Nano-Influencer
                </p>
              </div>
              <a href="/influencer" class="btn btn-lg btn-primary-3 mb-3 mb-sm-0 mx-1">Ich bin ein Nano-Influencer</a>
              <a href="/business" class="btn btn-lg btn-white mx-1 mb-3 mb-sm-0" data-smooth-scroll>Ich bin eine Brand</a>
            </div>

          </div>
        </div>
      </section>
      <div class="divider flip-x">
        <img src="{{ asset('images/static') }}/dividers/divider-2.svg" alt="graphical divider" data-inject-svg />
      </div>
    </div>
  {{--
    <section class="text-center" id="demos">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-xl-9">
            <h2 class="h1">Unsere Passion: <br> Die richtigen Nano-Influencer für starke Brands</h2>
            <p class="lead">WunderBrudis ermöglicht authentischen Nano-Influencern einen einfachen Zugang zu deinen Produktkampagnen sowie die Steigerung deine Reichweite durch kosteneffektives und authentisches Nano-Influencing.</p>

          </div>
        </div>
      </div>
    </section>
  <section>
    <div class="container">
      <div class="row align-items-center justify-content-around">
        <div class="col-md-5 col-lg-6 mb-3 mb-md-0">
          <div class="image-collage">
            <a href="{{ asset('css/static') }}/frontilu1.png" data-fancybox="Collage Gallery" class="d-none d-lg-block">
              <div data-jarallax-element="0 12" style="mix-blend-mode: multiply;">
                <img src="{{ asset('css/static') }}/frontilu1.png" alt="Image" class="rounded" data-aos="fade-right" style="mix-blend-mode: multiply;">
              </div>
            </a>
            <a href="{{ asset('css/static') }}/frontilu2.png" data-fancybox="Collage Gallery">
              <div style="mix-blend-mode: multiply;">
                <img src="{{ asset('css/static') }}/frontilu2.png" alt="Image" class="rounded" data-aos="fade-up" style="mix-blend-mode: multiply;">
              </div>
            </a>
            <a href="{{ asset('css/static') }}/frontilu3.png" data-fancybox="Collage Gallery" class="d-none d-lg-block">
              <div data-jarallax-element="0 -12" style="mix-blend-mode: multiply;">
                <img src="{{ asset('css/static') }}/frontilu3.png" alt="Image" class="rounded" data-aos="fade-left" style="mix-blend-mode: multiply;">
              </div>
            </a>
          </div>
          <div class="decoration bottom left scale-2" style="mix-blend-mode: multiply;">
            <img class="bg-primary-2" src="assets/img/decorations/deco-blob-13.svg" alt="deco-blob-13 decoration" data-inject-svg />
          </div>
        </div>
        <div class="col-md-6 col-xl-5">
          <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-11">
              <span class="badge badge-primary">Unsere Mission</span>
              <div class="my-3">
                <span class="h1">Wir machen Erfolg skalierbar</span>
              </div>
              <p class="lead">Deine Kampagne profitiert von unseren umfangreichen Individualisierungsmöglichkeiten und Reportings.</p>
              <p class="lead mb-0">Wir WunderBrudis sind an deiner Seite! Als erfahrene Ansprechpartner unterstützen wir dich von der Vorbereitung, Durchführung bis zur Nachbereitung deiner Kampagne.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <section class="has-divider">
    <div class="container">
      <div class="row mb-4" data-aos="fade-up">
        <div class="col">
          <h2>Wie profitiere ich als <b>Brand</b> von Nano-Influencing?</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md d-flex mb-3 mb-md-0" data-aos="fade-up" data-aos-delay="100">
          <img class="icon icon-md bg-primary" src="assets/img/icons/theme/design/patch.svg" alt="patch icon" data-inject-svg />
          <div class="ml-3">
            <i class="feather icon-clock"></i>
            <h5>💸 Kosteneffektivität</h5>
            <p>
              Mit unseren Nano-Influencern erhältst du Markenbotschafter, die authentisch motiviert sind. Die Vergütung erfolgt dabei über Product-Placements oder Giveaways.
            </p>
          </div>
        </div>
        <div class="col-12 col-md d-flex mb-3 mb-md-0" data-aos="fade-up" data-aos-delay="200">
          <img class="icon icon-md bg-primary" src="assets/img/icons/theme/food/miso-soup.svg" alt="miso-soup icon" data-inject-svg />
          <div class="ml-3">
            <i class="feather icon-clock"></i>
            <h5>👥 Authentische Communitys</h5>
            <p>
              Nano-Influencer wählen Product-Placements, hinter denen sie mit ihrem Namen stehen. Das sorgt für Authentizität und einem höheren Impact auf die Kaufentscheidung.
            </p>
          </div>
        </div>
        <div class="col-12 col-md d-flex mb-3 mb-md-0" data-aos="fade-up" data-aos-delay="300">
          <img class="icon icon-md bg-primary" src="assets/img/icons/theme/home/door-open.svg" alt="door-open icon" data-inject-svg />
          <div class="ml-3">
            <i class="feather icon-clock"></i>
            <h5>🔝 Höheres Engagement</h5>
            <p>
              Die WunderBrudis garantieren dir höhere Interaktionsraten. Nano-Influencer stehen im engen Austausch mit ihren Followern. Die Engagementrate ist zwei- bis dreimal höher, als die der großen Influencer.
            </p>
          </div>
        </div>
      </div>
      <div class="row mb-4" data-aos="fade-up">
        <a href="/business" class="btn btn-lg btn-primary-3 mb-3 mb-sm-0 mx-1">Jetzt als Brand anmelden!</a>
      </div>
    </div>

    <div class="divider">
      <img class="bg-primary-alt" src="assets/img/dividers/divider-1.svg" alt="divider graphic" data-inject-svg />
    </div>
  </section>
  <section class="has-divider">
    <div class="container">
      <div class="row mb-4" data-aos="fade-up">
        <div class="col">
          <h2>Ich bin <b>Nano-Influencer</b> was bringen mir die WunderBrudis?</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-md d-flex mb-3 mb-md-0" data-aos="fade-up" data-aos-delay="100">
          <img class="icon icon-md bg-primary" src="assets/img/icons/theme/design/patch.svg" alt="patch icon" data-inject-svg />
          <div class="ml-3">
            <i class="feather icon-clock"></i>
            <h5>📦 Coole Produkte</h5>
            <p>
              Melde dich bereits <b>ab 500 Followern</b> an und erhalte regelmäßig neue spannende Produkte, die du testen und deiner Community zeigen kannst.<br>
            </p>
            <p><br /></p>
          </div>
        </div>
        <div class="col-12 col-md d-flex mb-3 mb-md-0" data-aos="fade-up" data-aos-delay="200">
          <img class="icon icon-md bg-primary" src="assets/img/icons/theme/food/miso-soup.svg" alt="miso-soup icon" data-inject-svg />
          <div class="ml-3">
            <i class="feather icon-clock"></i>
            <h5>🎓 Entwicklung</h5>
            <p>
            Nutze unsere BrudiCademy und lerne richtiges und rechtssicheres Influencing von den Profis.
             </p>
          </div>
        </div>
        <div class="col-12 col-md d-flex mb-3 mb-md-0" data-aos="fade-up" data-aos-delay="300">
          <img class="icon icon-md bg-primary" src="assets/img/icons/theme/home/door-open.svg" alt="door-open icon" data-inject-svg />
          <div class="ml-3">
            <i class="feather icon-clock"></i>
            <h5>👫 Eine Plattform</h5>
            <p>
              Wir bieten dir eine innovative Plattform, über die du kostenlos mit unzähligen Brands in Kontakt treten kannst.
            </p>
          </div>
        </div>
      </div>
      <div class="row mb-4" data-aos="fade-up">
        <div></div>
        <a href="/influencer" class="btn btn-lg btn-primary-3 mb-3 mb-sm-0 mx-1">Jetzt als Nano-Influencer anmelden!</a>
      </div>
    </div>

    <div class="divider">
      <img class="bg-primary-alt" src="assets/img/dividers/divider-1.svg" alt="divider graphic" data-inject-svg />
    </div>
  </section>
   <section class="pt-0">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-8 col-lg-9">
            <h3 class="h2">Häufig gestellte Fragen</h3>
            <div class="my-4">
              <div class="card mb-2 card-sm card-body hover-shadow-sm" data-aos="fade-up" data-aos-delay="NaN">
                <div data-target="#panel-1" class="accordion-panel-title" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-1">
                  <span class="h6 mb-0">Warum die WunderBrudis?</span>
                  <img class="icon" src="{{ asset('images/static') }}/icons/interface/plus.svg" alt="plus interface icon" data-inject-svg />
                </div>
                <div class="collapse" id="panel-1">
                  <div class="pt-3">
                    <p>Wir bieten dir eine innovative Plattform,  die sich auf das Nano-Influencing spezialisiert hat und garantieren dir ein außergewöhnlich hohes Engagement mit deinen potentiellen Kunden,  eine große Auswahl an potentiellen Nano-Influencern sowie eine kosteneffiziente Kampagnenstruktur.
                      Nano-Influencern ermöglichen wir den Einstieg in die Professionalisierung ihres größten Hobbys.</p>
                  </div>
                </div>
              </div>
              <div class="card mb-2 card-sm card-body hover-shadow-sm" data-aos="fade-up" data-aos-delay="NaN">
                <div data-target="#panel-2" class="accordion-panel-title" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-2">
                  <span class="h6 mb-0">Kann jeder Influencer sich anmelden?</span>
                  <img class="icon" src="{{ asset('images/static') }}/icons/interface/plus.svg" alt="plus interface icon" data-inject-svg />
                </div>
                <div class="collapse" id="panel-2">
                  <div class="pt-3">
<p>Natürlich! Du kannst dich bereits ab 500 Followern registrieren. Es macht für uns keinen Unterschied, ob du als Social Influencer dein Leben auf Instagram teilst, als Pro-Gamer Phasmophobia auf Twitch streamst oder als Tech-Nerd Unboxings auf Youtube erstellst. Wichtig ist nur eins: sei authentisch und binde deine offene und interessierte Community ein, mit der du deine Meinung zu Produkten teilen möchtest!</p>
                  </div>
                </div>
              </div>
              <div class="card mb-2 card-sm card-body hover-shadow-sm" data-aos="fade-up" data-aos-delay="NaN">
                <div data-target="#panel-3" class="accordion-panel-title" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-3">
                  <span class="h6 mb-0">Ich bin Unternehmen und brauche die WunderBrudis. Wie nehme ich Kontakt auf?</span>
                  <img class="icon" src="{{ asset('images/static') }}/icons/interface/plus.svg" alt="plus interface icon" data-inject-svg />
                </div>
                <div class="collapse" id="panel-3">
                  <div class="pt-3">
<p>Vielen Dank für dein Interesse! Kontaktiere uns gerne über unseren Support: <a href="mailto:mail@wunderbrudis.de">mail@wunderbrudis.de</a>. First-things-first: gerne vereinbaren wir eine Demo und stellen unsere Plattform unter der Anleitung einer unserer WunderProfis vor.</p>
                  </div>
                </div>
              </div>
              <div class="card mb-2 card-sm card-body hover-shadow-sm" data-aos="fade-up" data-aos-delay="NaN">
                <div data-target="#panel-4" class="accordion-panel-title" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="panel-4">
                  <span class="h6 mb-0">Und was kosten mich die WunderBrudis?</span>
                  <img class="icon" src="{{ asset('images/static') }}/icons/interface/plus.svg" alt="plus interface icon" data-inject-svg />
                </div>
                <div class="collapse" id="panel-4">
                  <div class="pt-3">
                   <p>Das Wichtigste zuerst: Für Nano-Influencer ist die Nutzung unserer Plattform kostenfrei. Sämtliche Produkte erhälst du stets versandkostenfrei nach Hause.</p><p>Brands bieten wir flexible, monatliche Pakete, die sich nach den Wünschen und Anforderungen des jeweiligen Unternehmens richten. Mehr Infos: <a href="/preise">Preis & Addons</a></p>

                  </div>
                </div>
              </div>
            </div>
            <span>Du hast noch offene Fragen, die dir die WunderBrudis beantworten sollen? Schreib uns ein E-Mail an mail@wunderbrudis.de -  oder nutze den Direktchat unten rechts auf unserer Seite!.
            </span>

            <div class="modal fade" id="ask-modal" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <img class="icon bg-dark" src="{{ asset('images/static') }}/icons/interface/cross.svg" alt="cross interface icon" data-inject-svg />
                    </button>
                    <div class="m-3">
                      <ul class="avatars justify-content-center">
                        <li>
                          <img src="{{ asset('images/static') }}/avatars/team-1.jpg" alt="Avatar" class="avatar avatar-lg">
                        </li>
                        <li>
                          <img src="{{ asset('images/static') }}/avatars/team-2.jpg" alt="Avatar" class="avatar avatar-lg">
                        </li>
                        <li>
                          <img src="{{ asset('images/static') }}/avatars/team-3.jpg" alt="Avatar" class="avatar avatar-lg">
                        </li>
                      </ul>
                      <div class="text-center my-3">
                        <h4 class="h3 mb-1">Pre-sales Questions</h4>
                        <p>
                          Please get in touch for any questions you may have. We typically reply within 24 hours.
                        </p>
                      </div>
                      <form action="/forms/smtp.php" data-form-email novalidate>
                        <div class="form-group">
                          <input type="text" class="form-control" name="contact-name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                          <input type="email" class="form-control" name="contact-email" placeholder="Email Address" required>
                        </div>
                        <div class="form-group">
                          <textarea name="contact-box-message" rows="5" class="form-control" placeholder="Type your message here" required></textarea>
                        </div>
                        <div data-recaptcha data-sitekey="INSERT_YOUR_RECAPTCHA_V2_SITEKEY_HERE"></div>
                        <div class="d-none alert alert-danger" role="alert" data-error-message>
                          Please fill all fields correctly.
                        </div>
                        <div class="d-none alert alert-success" role="alert" data-success-message>
                          Thanks, a member of our team will be in touch shortly.
                        </div>
                        <button type="submit" class="btn btn-block btn-primary btn-loading" data-loading-text="Sending">
                          <img class="icon" src="{{ asset('images/static') }}/icons/theme/code/loading.svg" alt="loading icon" data-inject-svg />
                          <span>Send</span>
                        </button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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
            <small class="text-muted">&copy;2020 WunderBrudis - Made with ❤️ & Glück auf in Essen
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
