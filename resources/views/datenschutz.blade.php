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
    <title>Datenschutzerklärung</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Unsere Datenschutzerklärung">
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
    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7444660.js"></script>
    <!-- End of HubSpot Embed Code -->
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
            <h1 class="display-4">Datenschutz</h1>
            <p class="lead mb-0">Unsere Datenschutzerklärung</p>
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
  <div class="row justify-content-md-center"><h2><strong>Datenschutzerklärung</strong></h2>
    <p>Verantwortlich im Sinne der Datenschutzgesetzes:</p>
    <p>WunderBrudis UG<br>Armstr 14<br>45355 Essen</p><p><strong>Datenschutz</strong></p><p>Als Webseitenbetreiber nehmen wir den Schutz aller persönlichen Daten sehr ernst. Alle personenbezogenen Informationen werden vertraulich und gemäß den gesetzlichen Vorschriften behandelt, wie in dieser Datenschutzerklärung erläutert.</p><p>Unserer Webseite kann selbstverständlich genutzt werden, ohne dass Sie persönliche Daten angeben. Wenn jedoch zu irgendeinem Zeitpunkt persönliche Daten wie z.B. Name, Adresse oder E-Mail abgefragt werden, wird dies auf freiwilliger Basis geschehen. Niemals werden von uns erhobene Daten ohne Ihre spezielle Genehmigung an Dritte weitergegeben.</p><p>Datenübertragung im Internet, wie zum Beispiel über E-Mail, kann immer Sicherheitslücken aufweisen. Der komplette Schutz der Daten ist im Internet nicht möglich.</p><p><strong>Datenschutzerklärung etracker</strong></p><p>Auf unserer Webseite wird der Analysedienst etracker benutzt, betrieben von der etracker GmbH, Erste Brunnenstraße 1, 20459 Hamburg, Deutschland.</p><p>Die von etracker gesammelten Daten werden dazu verwendet, Nutzungsprofile unter Verwendung von Pseudonymen zu erstellen. Bei diesem Prozess werden Cookies benutzt. Cookies sind kleine Textdateien, die in Ihrem Internet-Browser abgelegt werden. Cookies dienen dazu, bestimmte Browser wiederzuerkennen. Die von etracker gesammelten Informationen werden ohne die spezielle Zustimmung der Nutzer nicht dazu verwandt, um Nutzer unserer Website zu identifizieren. Die Daten werden niemals mit personenbezogenen Informationen über den Träger des Pseudonyms verbunden.</p><p>Sie können der Datenerhebung und -speicherung jederzeit widersprechen. etracker bietet außerdem einen Opt-Out-Cookie an, mit dem Sie verhindern können, dass etracker ihre Besucherdaten bezieht. Mehr Informationen dazu finden Sie hier: http://www.etracker.de/privacy?et=V23Jbb</p><p>Der Opt-Out-Cookie von etracker trägt den Namen “cntcookie”. Wenn Sie diesen Cookie löschen, erlischt Ihr Widerspruch. Mehr Informationen dazu finden Sie hier: http://www.etracker.com/de/datenschutz.html</p><p><strong>Datenschutzerklärung Facebook-Plugins (Like-Button)</strong></p><p>Auf unseren Seiten werden Plugins von Facebook genutzt, Anbieter ist die Facebook Inc., 1 Hacker Way, Menlo Park, California 94025, USA. Facebook-Plugins sind mit einem Facebook-Logo markiert oder zeigen einen “Like-Button” (“Gefällt mir”). Mehr Informationen über Facebook-Plugins finden Sie hier: http://developers.facebook.com/docs/plugins/.</p><p>Beim Besuch unserer Webseite stellt das Plugin eine direkte Verbindung zwischen Ihrem Webbrowser und dem Facebook-Server her. Dabei wird übermittelt, dass Sie sich mit Ihrer IP-Adresse auf unsere Webseite begeben haben. Wird der Facebook “Like-Button” angeklickt, während Sie in Ihrem Facebook-Account eingeloggt sind, können bestimmte Inhalte unserer Webseiten mit Ihrem Facebook-Profil verlinkt werden. In diesem Prozess ist es Facebook möglich, ihren Besuch auf unseren Webseiten mit ihrem Benutzerkonto zu speichern. Als Webseitenbetreiber haben wir keine Informationen darüber, welche Daten übermittelt werden und wie diese genutzt werden. Mehr Informationen dazu finden Sie hier:</p><p>http://de-de.facebook.com/policy.php.</p><p>Um zu vermeiden, dass Facebook Ihren Besuch auf unserer Webseite verfolgt, melden Sie sich bitte vor Nutzung unseres Angebots bei Facebook ab.</p><p><strong>Datenschutzerklärung Google Analytics</strong></p><p>Unsere Website nutzt den Analysedienst Google Analytics, betrieben von Google Inc. 1600 Amphitheatre Parkway Mountain View, CA 94043, USA. Google Analytics nutzt “Cookies”, das sind kleine Textdateien, die in Ihrem Browser gespeichert werden und die es ermöglichen, die Nutzung unserer Website durch die Besucher zu analysieren. Von den Cookies werden Daten über Ihre Nutzung unserer Webseite gesammelt, die normalerweise an einen Google-Server in den USA übertragen und gespeichert werden.</p><p>Wenn die IP-Anonymisierung auf unserer Webseite aktiviert wurde, wird Ihre IP-Adresse von Google innerhalb der Mitgliedstaaten der Europäischen Union oder in anderen Vertragsstaaten des Abkommens über den Europäischen Wirtschaftsraum vorab gekürzt. In seltenen Ausnahmefällen kann die komplette IP-Adresse an einen Google Server in den USA übertragen werden, dann wird diese dort gekürzt. Google nutzt diese Daten in unserem Auftrag, um die Nutzung unserer Website auszuwerten, um Berichte über die Webseitenaktivitäten zu erstellen sowie um weitere Dienstleistungen anzubieten, die mit der Webseitennutzung und Internetnutzung zusammenhängen. Die von Google Analytics erfassten IP-Adressen werden nicht mit anderen Daten von Google korreliert.</p><p>Die Speicherung von Cookies kann durch eine spezielle Einstellung in Ihrem Browser verweigert werden. In diesem Fall ist jedoch die Funktionalität unserer Webseite im vollen Umfang nicht gewährleistet. Zusätzlich steht ihnen ein Browser-Plugin zu Verfügung, mit dem Sie die Sammlung der auf Ihre Nutzung der Website bezogenen erzeugten Daten und IP-Adressen durch Google verhindern können. Mehr Informationen dazu finden Sie hier: http://tools.google.com/dlpage/gaoptout?hl=de</p><p><strong>Datenschutzerklärung Google +1</strong></p><p>Auf unsere Seiten werden Funktionen von Google +1 genutzt, angeboten von Google Inc. 1600 Amphitheatre Parkway Mountain View, CA 94043, USA.</p><p>Sammlung und Übertragung von Daten: Sie können die Google +1-Schaltfläche nutzen, um Informationen weltweit zu veröffentlichen. Die Google +1-Schaltfläche präsentiert Ihnen und anderen Nutzern individuell abgestimmte Inhalte von Google und deren Partnern. Google sammelt Daten über die Informationen, die Sie für einen +1 Inhalt gegeben haben, sowie Daten über die Webseite, die Sie angesehen haben, während Sie auf +1 geklickt haben. Ihre +1 Daten können zusammen mit Ihrem Profilnamen und Ihrem Foto in unterschiedlichen Google-Diensten, wie Suchergebnissen, Ihrem Google-Profil, sowie auf Webseiten und Werbeanzeigen im Internet eingeblendet werden. Informationen über Ihre +1-Aktivitäten werden von Google aufgezeichnet, um die von Ihnen genutzten Google-Dienste zu verbessern. Um Google +1 Schaltflächen nutzen zu können, müssen Sie über ein öffentliches Google-Profil verfügen, in dem mindestens der Name des Profils enthalten sein muss. Alle Google-Dienste verwenden diesen Profilnamen. Manchmal kann dieser Name auch einen anderen Namen ersetzen, den Sie verwendet haben, wenn Inhalte über Ihr Google-Konto mit anderen Nutzern geteilt wurden. Nutzern, die Ihre E-Mail-Adresse kennen oder über andere identifizierende Daten von Ihnen verfügen, kann die Identität Ihres Google-Profils angezeigt werden.</p><p>Nutzung der gesammelten Daten: Zusätzlich zu der bereits beschriebenen Nutzung unterliegen die von Ihnen bereitgestellten Daten den geltenden Google-Datenschutzbestimmungen. Google kann allgemeine Statistiken über die +1-Aktivitäten der Nutzer veröffentlichen, oder diese an Nutzer und Partner, wie Publisher, Inserenten oder Partner- Webseiten, weitergeben.</p><p><strong>Datenschutzerklärung Instagram</strong></p><p>Auf unseren Webseiten werden Funktionen von Instagram verwendet, angeboten von Instagram Inc., 1601 Willow Road, Menlo Park, CA 94025, USA. Inhalte unserer Seiten können mit Ihrem Instagram-Profil verknüpft werden, sofern Sie zeitgleich in Ihrem Instagram-Account eingeloggt sind. Durch Klick auf den Instagram-Button können diese verlinkt werden. Instagram kann dabei die Nutzung unserer Seiten durch Sie registrieren. Als Webseitenbetreiber haben wir keine Informationen darüber, welche Daten übermittel werden und wie diese genutzt werden.</p><p>Mehr Informationen dazu finden Sie hier: http://instagram.com/about/legal/privacy/</p><p><strong>Datenschutzerklärung LinkedIn</strong></p><p>Auf unseren Webseiten werden Funktionen von LinkedIn verwendet, angeboten von der LinkedIn Corporation, 2029 Stierlin Court, Mountain View, CA 94043, USA. Bei jedem Besuch einer unserer Webseiten, die LinkedIn Funktionen beinhaltet, wird eine Verbindung zu LinkedIn Servern etabliert. LinkedIn erhält Daten darüber, dass Sie mit Ihrer IP-Adresse unsere Webseiten besucht haben. Beim Klick auf den &nbsp;LinkedIn “Recommend-Button” ist es LinkedIn möglich, den Besuch auf unserer Internetseite Ihrem Benutzerkonto zuzuordnen, vorausgesetzt, dass Sie zeitgleich in Ihrem LinkedIn Account eingeloggt sind. Als Webseitenbetreiber haben wir keine Informationen darüber, welche Daten übermittel und wie diese genutzt werden.</p><p>Mehr Informationen dazu finden Sie hier: https://www.linkedin.com/legal/privacy-policy</p><p><strong>Datenschutzerklärung Pinterest</strong></p><p>Auf unseren Webseiten werden Social Plugins des sozialen Netzwerkes Pinterest verwendet, betrieben von Pinterest Inc., 635 High Street, Palo Alto, CA 94301, USA (“Pinterest”). Beim Aufrufen einer Seite, die ein entsprechendes Plugin enthält, wird von Ihrem Browser eine direkte Verbindung zu den Pinterest Servern hergestellt. Vom Plugin werden dabei Protokolldaten an den Pinterest Server in den USA übermittelt. Diese Protokolldaten können Ihre IP-Adresse, Adresse besuchter Webseiten die ebenfalls Pinterest-Funktionen verwenden, Art und Einstellungen des Webbrowsers, Datum und Zeitpunkt der Anfrage, Ihre Verwendungsweise von Pinterest sowie Cookies beinhalten.</p><p>Mehr Informationen dazu finden Sie hier: https://about.pinterest.com/de/privacy-policy</p><p><strong>Datenschutzerklärung Tumblr</strong></p><p>Auf unseren Webseiten werden Schaltflächen von Tumblr verwendet, angeboten von Tumblr, Inc., 35 East 21st St, 10th Floor, New York, NY 10010, USA. Mit diesen Schaltflächen wird es ihnen möglich gemacht, Beiträge oder Webseiten über Tumblr zu teilen oder Anbietern bei Tumblr zu folgen. Beim Aufrufen einer Seite, die ein entsprechendes Plugin enthält, wird von Ihrem Browser eine direkte Verbindung zu den Tumblr Servern hergestellt. Als Webseitenbetreiber haben wir keine Informationen darüber, welche Daten übermittel und wie diese genutzt werden. Soweit bekannt ist können IP-Adressen des Nutzers sowie URLs der jeweiligen Webseiten übermittelt werden.</p><p>Mehr Informationen dazu finden Sie hier: http://www.tumblr.com/policy/de/privacy.</p><p><strong>Datenschutzerklärung Twitter</strong></p><p>Auf unseren Webseiten werden Funktionen des Dienstes Twitter verwendet, angeboten von Twitter Inc., 1355 Market Street, Suite 900, San Francisco, CA 94103, USA. Wenn Sie Twitter oder die Funktion “Re-Tweet” nutzen, werden die von Ihnen besuchten Internetseiten mit Ihrem Twitter-Account verbunden. Andere Nutzer können diese Informationen erhalten und es werden Daten an Twitter gesendet. Als Webseitenbetreiber haben wir keine Informationen darüber, welche Daten übermittel und wie diese genutzt werden.</p><p>Mehr Informationen dazu finden Sie hier: &nbsp;http://twitter.com/privacy.</p><p>In den Konto-Einstellungen Ihres Twitter Kontos (unter&nbsp;<a href="https://twitter.com/account/settings" target="_blank" rel="noopener noreferrer">http://twitter.com/account/settings</a>) können Sie Ihre Datenschutzeinstellungen bei Twitter ändern.</p><p><strong>Datenschutzerklärung Xing</strong></p><p>Auf unseren Webseiten werden Funktionen des Netzwerks XING, angeboten von der XING AG, Dammtorstraße 29-32, 20354 Hamburg, Deutschland verwendet. Wenn Sie Seiten auf unserem Internetangebot besuchen, die Xing Funktionen enthalten, wird eine Verbindung zu Xing Servern hergestellt. Soweit wir wissen werden dabei keine personenbezogenen Informationen (wie Nutzungsverhalten oder IP-Adressen) gespeichert oder analysiert.</p><p>Mehr Informationen dazu finden Sie hier: https://www.xing.com/app/share?op=data_protection</p><p><strong>Auskunft, Löschung, Sperrung</strong></p><p>Zu jedem Zeitpunkt können Sie sich über die personenbezogenen Daten, deren Herkunft und Empfänger und den Nutzen der Datenverarbeitung informieren und unentgeltlich eine Korrektur, Sperrung oder Löschung dieser Daten verlangen. Bitte nutzen Sie dafür die im Impressum angegebenen Kontaktwege. Für weitere Fragen zum Thema stehen wir Ihnen ebenfalls jederzeit zur Verfügung.</p><p><strong>Server-Log-Files</strong></p><p>Der Seiten-Provider erhebt und speichert automatisch Daten in Server-Log Files, die von Ihrem Browser an uns übermittelt werden. Diese Daten enthalten:</p><p>– Browsertyp/ Browserversion</p><p>– Betriebssystem des Rechners</p><p>– Referrer URL</p><p>– Hostname des zugreifenden Rechners</p><p>– Uhrzeit der Serveranfrage</p><p>Diese Daten sind nicht personenbezogen. Es erfolgt keine Zusammenführung dieser Daten mit anderen Datenquellen. Wenn uns konkrete Anhaltspunkte für eine rechtswidrige Nutzung bekannt werden behalten wir uns das Recht vor, diese Daten nachträglich zu überprüfen.</p><p><strong>Cookies</strong></p><p>Viele Internetseiten verwenden Cookies. Cookies sind unschädlich für Ihren Rechner und virenfrei. Sie dienen dazu, Internet-Angebote für die Besucher einer <a href="https://onlinepartnersuchekostenlos.de/finya/" target="_blank">Webseite</a> freundlicher, effektiver und sicherer zu machen. Cookies sind kleine Textdateien, die auf Ihrem Computer abgelegt werden und die Ihr Browser verwendet.</p><p>Wir verwenden in der Regel so genannte „Session-Cookies“. Diese werden nach Verlassen unserer Seite automatisch gelöscht. Andere Cookies bleiben auf Ihrem Computer gespeichert, bis Sie diese löschen. Diese Cookies helfen dabei, Ihren Rechner beim nächsten Besuch wiederzuerkennen.</p><p>Über die Browsereinstellungen können sie festlegen, dass Sie über neue Cookies informiert werden und Cookies jeweils annehmen müssen. Ebenso können Sie die Annahme von Cookies für bestimmte Fälle oder generell ausschließen oder das automatische Löschen der Cookies beim Schließen des Browser aktivieren. Werden Cookies desaktiviert, kann die Funktionalität unserer Website eingeschränkt sein.</p><p><strong>Kontaktformular</strong></p><p>Kontaktdaten, die uns über unser Kontaktformular erreichen, werden inklusive des Inhalts der Anfrage für Bearbeitungszwecke und für mögliche Anschlussfragen gespeichert. Diese Daten werden ohne Ihre spezifische Zustimmung nicht weitergegeben.</p><p><strong>Werbe-Mails Widerspruch&nbsp;</strong></p><p>Wir untersagen hiermit ausdrücklich der Nutzung der im Impressum veröffentlichten Kontaktdaten zur Übersendung von nicht ausdrücklich angeforderter Werbung und Informationsmaterialien. Im Falle der unverlangten Zusendung von Werbeinformationen, etwa durch Spam-E-Mails, halten sich die Betreiber der Webseitenrechtliche Schritte vor.</p><p><strong>Newsletterdaten</strong></p><p>Für die Nutzung des von uns angebotenen Newsletter Dienstes werden persönliche Angaben wie E-Mail-Adresse erhoben. Zusätzlich werden Informationen verlangt, welche uns gestatten zu prüfen, dass Sie der Inhaber der angegebenen E-Mail-Adresse und mit dem Empfang des Newsletters einverstanden sind. Alle Informationen werden nur für den Versand der Newsletter verwendet, sie werden nicht an Dritte weitergegeben.</p><p>Sie können jederzeit ihre erteilte Einwilligung zur Speicherung der Daten, der E-Mail-Adresse sowie deren Nutzung zum Versand des Newsletters widerrufen. Im Newsletter steht Ihnen dafür ein „Austragen“-Link zur Verfügung.</p><p><strong>Änderung der Datenschutzbestimmungen</strong></p><p>Unsere Datenschutzerklärung können in unregelmäßigen Abständen angepasst werden, damit sie den aktuellen rechtlichen Anforderungen entsprechen oder um Änderungen unserer Dienstleistungen umzusetzen, z. B. bei der Einfügung neuer Angebote. Für Ihren nächsten Besuch gilt dann automatisch die neue <a href="https://xn--datenschutzerklrungmuster-zec.de/was-ist-eine-datenschutzerklaerung/" target="_blank"><strong>Datenschutzerklärung</strong></a>.</p><p><strong>Kontakt zum Datenschutzmitarbeiter</strong></p><p>Für Fragen zum Datenschutz schicken Sie uns bitte eine Nachricht an admin@wunderbrudis.de mit dem Betreff „Datenschutz“.</p><p>Diese Widerrufsbelehrung Seite wurde bei <a href="https://datenschutzerklärungmuster.de/" target="_blank">datenschutzerklärungmuster.de</a>&nbsp;erstellt.</p></div></div></body>
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
