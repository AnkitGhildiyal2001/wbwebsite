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
    <title>AGBs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Unsere Allgemeinen Gesch&auml;ftsbedingungen">
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
            <h1 class="display-4">AGBs</h1>
            <p class="lead mb-0">Unsere Allgemeinen Gesch&auml;ftsbedingungen</p>
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
    <p>ALLGEMEINE GESCH&Auml;FTSBEDINGUNGEN VON<br />
      https://wunderbrudis.de<br />
      Willkommen bei WunderBrudis!<br />
      &sect;1<br />
      Geltungsbereich und Anbieter<br />
      (1) Die Allgemeinen Gesch&auml;ftsbedingungen (nachfolgend &quot;AGB&quot; genannt) regeln das Vertragsverh&auml;ltnis zwischen WunderBrudis UG (haftungsbeschr&auml;nkt) (nachfolgend Anbieter) und Ihnen (nachfolgend Besteller), in ihrer zum Zeitpunkt des Vertragsabschlusses g&uuml;ltigen Fassung.<br />
      (2) Abweichende AGB des Bestellers werden zur&uuml;ckgewiesen.<br />
      Bitte lesen Sie diese Bedingungen aufmerksam, bevor Sie eine Dienstleistung der WunderBrudis UG (haftungsbeschr&auml;nkt) in Anspruch nehmen.<br />
      (3) Auf WunderBrudis bieten wir Ihnen folgende Dienstleistungen an:<br />
      Vermittlung von Social-Media Influencer an Unternehmen Vermittlung von Produkten von Unternehmen an Influencer Versand von Produkten an Influencer im Auftrag von Unternehmen<br />
      &sect;2 Zustandekommen des Vertrages<br />
      (1) Vertr&auml;ge auf diesem Portal k&ouml;nnen ausschlie&szlig;lich in deutscher Sprache abgeschlossen werden.<br />
      (2) Der Besteller muss das 18. Lebensjahr vollendet haben.<br />
      (3) Der Zugang zur Nutzung des WunderBrudis-Service setzt die Anmeldung voraus.<br />
      (4) Mit der Anmeldung erkennt der Besteller die vorliegenden AGB an. Mit der Anmeldung entsteht ein Vertragsverh&auml;ltnis zwischen WunderBrudis und dem angemeldeten Besteller, das sich nach den Regelungen dieser AGB richtet.<br />
      (5) Die Pr&auml;sentation der Dienstleistung auf der Website stellt kein rechtlich wirksames Angebot dar. Durch die Pr&auml;sentation der Dienstleistung wird der Kunde<br />
      1/11</p>

    <p>lediglich dazu aufgefordert ein Angebot zu machen.<br />
      (6) Mit Bestellung eines kostenpflichtigen Dienstes geht der angemeldete Besteller ein weiteres, von der Anmeldung getrenntes Vertragsverh&auml;ltnis mit WunderBrudis ein. Der Nutzer wird vor Abschluss dieses Vertragsverh&auml;ltnisses &uuml;ber den jeweiligen kostenpflichtigen Dienst und die Zahlungsbedingungen informiert. Das Vertragsverh&auml;ltnis entsteht indem der Besteller die Bestellung und Zahlungsverpflichtung durch das Anklicken des Buttons &#8222;Kampagne ver&ouml;ffentlichen&quot; best&auml;tigt.<br />
      (7) Sie stimmen zu, dass Sie Rechnungen elektronisch erhalten. Elektronische Rechnungen werden Ihnen per E-Mail oder in dem Kundenkonto der Webseite zur Verf&uuml;gung gestellt. Wir werden Sie f&uuml;r jede Dienstleistung dar&uuml;ber informieren, ob eine elektronische Rechnung verf&uuml;gbar ist. Weitere Informationen &uuml;ber elektronische Rechnungen erhalten Sie auf unserer Website.<br />
      &sect;3<br />
      Beschreibung des Leistungsumfanges<br />
      Der Leistungsumfang von WunderBrudis besteht aus folgenden Dienstleistungen:<br />
      Die Nutzung der Plattform WunderBrudis ist f&uuml;r Influencer entgeltfrei. F&uuml;r Unternehmen entstehen erst Kosten bei Buchung einer kostenpflichtigen Kampagne, oder bei Abschluss eines wiederkehrenden Abos.<br />
      &sect;4<br />
      Preise und Versandkosten<br />
      (1) Zur Nutzung von WunderBrudis ist zun&auml;chst eine Registrierung notwendig.<br />
      (2) Um die Dienstleistungen der Website kaufen zu k&ouml;nnen, muss der Nutzer sich registrieren und ein Benutzerkonto erstellen.<br />
      (3) Sofern der Nutzer einen kostenpflichtigen Dienst in Anspruch nehmen m&ouml;chte, wird er vorher auf die Kostenpflichtigkeit hingewiesen. So werden ihm insbesondere der jeweilige zus&auml;tzliche Leistungsumfang, die anfallenden Kosten und die Zahlungsweise aufgef&uuml;hrt.<br />
      (4) Der Anbieter beh&auml;lt sich das Recht vor, f&uuml;r verschiedene Buchungszeitpunkte und Nutzergruppen und insbesondere f&uuml;r verschiedene Nutzungszeitr&auml;ume unterschiedliche Entgeltmodelle zu berechnen, wie auch verschiedene<br />
      2/11</p>

    <p>Leistungsumf&auml;nge anzubieten.<br />
      &sect;5<br />
      Zahlungsbedingungen<br />
      (1) Ein anfallendes Entgelt ist im Voraus, zum Zeitpunkt der F&auml;lligkeit ohne Abzug an WunderBrudis zu entrichten.<br />
      (2) Mit der Anmeldung, der Angabe der f&uuml;r das Bezahlverfahren notwendigen Informationen sowie der Nutzung des kostenpflichtigen Dienstes erteilt der Nutzer dem Betreiber die Erm&auml;chtigung zum Einzug des entsprechenden Betrags.<br />
      (3) Ein kostenpflichtiger Dienst verl&auml;ngert sich um den jeweils gebuchten Zeitraum (Abonnement) automatisch, soweit dieser nicht per Telefon, E-Mail oder Brief gek&uuml;ndigt wird.<br />
      (4) Das Abonnement wird zum folgenden Zeitpunkt eingezogen: Bei Abschluss der Buchung<br />
      (5) Bestimmte Zahlungsarten k&ouml;nnen im Einzelfall von dem Anbieter ausgeschlossen werden.<br />
      (6) Dem Besteller ist nicht gestattet die Dienstleistung durch das Senden von Bargeld oder Schecks zu bezahlen.<br />
      (7) Sollte der Besteller ein Online-Zahlungsverfahren w&auml;hlen, erm&auml;chtigt der Besteller den Anbieter dadurch, die f&auml;lligen Betr&auml;ge zum Zeitpunkt der Bestellung einzuziehen.<br />
      (8) Sollte der Anbieter die Bezahlung per Vorkasse anbieten und der Besteller diese Zahlungsart w&auml;hlen, hat der Besteller den Rechnungsbetrag innerhalb von f&uuml;nf Kalendertagen nach Eingang der Bestellung, auf das Konto des Anbieters zu &uuml;berweisen.<br />
      (9) Sollte der Anbieter die Bezahlung per Kreditkarte anbieten und der Besteller diese Zahlungsart w&auml;hlen, erm&auml;chtigt dieser den Anbieter ausdr&uuml;cklich dazu, die f&auml;lligen Betr&auml;ge einzuziehen.<br />
      (10) Sollte der Anbieter die Bezahlung per Lastschrift anbieten und der Besteller diese Zahlungsart w&auml;hlen, erteilt der Besteller dem Anbieter ein SEPA Basismandat. Sollte es bei der Zahlung per Lastschrift zu einer R&uuml;ckbuchung einer Zahlungstransaktion mangels Kontodeckung oder aufgrund falsch &uuml;bermittelter Daten der Bankverbindung kommen, so hat der Besteller daf&uuml;r die Kosten zu tragen.<br />
      (11) Sollte der Besteller mit der Zahlung in Verzug kommen, so beh&auml;lt sich der<br />
      3/11</p>

    <p>Anbieter die Geltendmachung des Verzugschadens vor.<br />
      (12) Die Abwicklung kann &uuml;ber folgende Zahlungsmittel erfolgen:<br />
      Paypal Kreditkarte Lastschrift:<br />
      Im Falle einer vom Besteller zu vertretenden R&uuml;cklastschrift erhebt die WunderBrudis UG (haftungsbeschr&auml;nkt) einen pauschalierten Schadensersatz in H&ouml;he von 8 &euro; (acht Euro). Der Besteller kann nachweisen, dass ein Schaden &uuml;berhaupt nicht entstanden oder wesentlich niedriger ist als die Pauschale. Die vorstehenden Regelungen gelten entsprechend f&uuml;r Zahlungen des Kaufpreises von Waren, die von Drittanbietern verkauft werden.<br />
      Sofort&uuml;berweisung Vorkasse<br />
      &sect;6<br />
      Anmeldung und K&uuml;ndigung<br />
      (1) Weiterhin erkl&auml;rt der Besteller, dass er und nach seiner Kenntnis auch kein Mitglied seines Haushaltes nicht wegen einer vors&auml;tzlichen Straftat die die Sicherheit von Dritten gef&auml;hrdet vorbestraft ist, insbesondere nicht wegen einer Straftat gegen die sexuelle Selbstbestimmung (&sect;&sect; 174 ff. StGB, einer Straftat gegen das Leben (&sect;&sect; 211 ff. StGB), einer Straftat gegen die k&ouml;rperliche Unversehrtheit (&sect; 223 ff. StGB), einer Straftat gegen die pers&ouml;nliche Freiheit (&sect;&sect; 232 ff. StGB), oder wegen eines Diebstahl und Unterschlagung (&sect;&sect; 242 ff. StGB) oder des Raubes und der Erpressung (&sect;&sect; 249 ff. StGB) oder wegen Drogenmissbrauch.<br />
      (2) Ein Nutzerkonto ist f&uuml;r seine/ihre alleinige und pers&ouml;nliche Nutzung und ein Nutzer darf Dritte nicht autorisieren dieses Konto zu nutzen. Ein Nutzer darf sein/ ihr Konto nicht an Dritte &uuml;bertragen.<br />
      (3) Ein Nutzer ist, unter Vorbehalt, jederzeit berechtigt, sich ohne Angabe eines Grundes schriftlich per Post, E-Mail oder Telefon abzumelden. Gleichzeitig besteht bei die M&ouml;glichkeit, innerhalb der Daten und Einstellungen im Nutzer-Account diesen vollst&auml;ndig und eigenh&auml;ndig zu deaktivieren. Das vorher geschlossene Vertragsverh&auml;ltnis ist damit beendet.<br />
      (4) Hat ein Nutzer sich f&uuml;r einen entgeltlichen Dienst angemeldet, so kann er sp&auml;testens 3 Tage vor dem Buchungszeitraumes k&uuml;ndigen. Wird diese Frist nicht<br />
      4/11</p>

    <p>eingehalten, so verl&auml;ngert sich der kostenpflichtige Dienst je nach gew&auml;hlter Buchungszeit um diese und die K&uuml;ndigung wird erst zum Ende des Folgebuchungszeitraumes wirksam. Eine K&uuml;ndigung ist per Telefon, E-Mail oder Brief m&ouml;glich und wird von uns schriftlich best&auml;tigt. Damit Ihre K&uuml;ndigung zugeordnet werden kann sollen der vollst&auml;ndige Name, die hinterlegte E-Mail-Adresse und die Anschrift des Kunden angegeben werden. Im Fall einer K&uuml;ndigung per Telefon wird das individuelle Telefon-Passwort ben&ouml;tigt.<br />
      (5) WunderBrudis kann den Vertrag nach eigenem Ermessen, mit oder ohne vorherige Ank&uuml;ndigung und ohne Angabe von Gr&uuml;nden, zu jeder Zeit k&uuml;ndigen. WunderBrudis h&auml;lt sich weiterhin das Recht vor, Profile und /oder jeden Inhalt der auf der Website durch oder von dem Nutzer ver&ouml;ffentlich wurde zu entfernen. Falls WunderBrudis die Registrierung des Nutzers beendet und/oder Profile oder ver&ouml;ffentliche Inhalte des Nutzers entfernt, besteht f&uuml;r WunderBrudis keine Verpflichtung den Nutzer dar&uuml;ber noch &uuml;ber den Grund der Beendigung oder der Entfernung zu informieren.<br />
      (6) Im Anschluss an jede Beendigung von jedweder individuellen Nutzung der Services von WunderBrudis, h&auml;lt WunderBrudis sich das Recht vor, eine Information hier&uuml;ber an andere registrierte Nutzer mit denen WunderBrudis annimmt, dass diese in Kontakt mit dem Nutzer standen, zu versenden. WunderBrudis's Entscheidung die Registrierung des Nutzers zu beenden und/oder weitere Nutzer zu benachrichtigen mit dem WunderBrudis annimmt, dass der Nutzer in Kontakt stand, impliziert nicht bzw. sagt keinesfalls aus, dass WunderBrudis Aussagen &uuml;ber den individuellen Charakter, generelle Reputation, pers&ouml;nliche Charakteristika noch &uuml;ber den Lebensstil trifft.<br />
      (7) Die Nutzer sind verpflichtet, in Ihrem Profil und sonstigen Bereichen des Portals keine absichtlichen oder betr&uuml;gerischen Falschangaben zu machen. Solche Angaben k&ouml;nnen zivilrechtliche Schritte nach sich ziehen. Der Betreiber beh&auml;lt sich dar&uuml;ber hinaus das Recht vor, in einem solchen Fall das bestehende Vertragsverh&auml;ltnis mit sofortiger Wirkung aufzul&ouml;sen.<br />
      (8) Wird der Zugang eines Nutzers wegen schuldhaften Vertragsversto&szlig;es gesperrt und/oder das Vertragsverh&auml;ltnis aufgel&ouml;st, hat der Nutzer f&uuml;r die verbleibende Vertragslaufzeit Schadenersatz in H&ouml;he des vereinbarten Entgelts abz&uuml;glich der ersparten Aufwendungenzu zahlen. Die H&ouml;he der ersparten Aufwendungen wird pauschal auf 10% des Entgelts angesetzt. Es bleibt beiden Vertragsparteien unbenommen nachzuweisen, dass der Schaden, und/oder die ersparten Aufwendungen tats&auml;chlich h&ouml;her oder niedriger sind.<br />
      (9) Nach Beendigung des Vertragsverh&auml;ltnisses werden s&auml;mtliche Daten des Nutzers von WunderBrudis gel&ouml;scht.<br />
      5/11</p>

    <p>&sect;7<br />
      Haftungsbegrenzung (Dienstleistungen)<br />
      (1) WunderBrudis &uuml;bernimmt keine Verantwortung f&uuml;r den Inhalt und die Richtigkeit der Angaben in den Anmelde- und Profildaten der Besteller sowie weiteren von den Bestellern generierten Inhalten.<br />
      (2) In Bezug auf die gesuchte oder angebotene Dienstleistung kommt der Vertrag ausschlie&szlig;lich zwischen den jeweilig beteiligten Bestellern zustande. Daher haftet WunderBrudis nicht f&uuml;r Leistungen der teilnehmenden Besteller. Entsprechend sind alle Angelegenheiten bzgl. der Beziehung zwischen den Bestellern einschlie&szlig;lich, und ohne Ausnahme, der Dienstleistungen die ein Suchender erhalten hat oder Zahlungen die an Besteller f&auml;llig sind, direkt an die jeweilige Partei des zu richten. WunderBrudis kann hierf&uuml;r nicht verantwortlich gemacht werden und widerspricht hiermit ausdr&uuml;cklich allen etwaigen Haftungsanspr&uuml;chen welcher Art auch immer einschlie&szlig;lich Forderungen, Leistungen, direkte oder indirekte Besch&auml;digungen jeder Art, bewusst oder unbewusst, vermutet oder unvermutet, offengelegt oder nicht, in welcher Art auch immer im Zusammenhang mit den genannten Angelegenheiten.<br />
      (3) F&uuml;r Sch&auml;den aus der Verletzung des Lebens, des K&ouml;rpers oder der Gesundheit haftet WunderBrudis UG (haftungsbeschr&auml;nkt) nur, wenn sie auf einer vors&auml;tzlichen oder fahrl&auml;ssigen Pflichtverletzung von WunderBrudis UG (haftungsbeschr&auml;nkt) oder einer vors&auml;tzlichen oder fahrl&auml;ssigen Pflichtverletzung eines gesetzlichen Vertreters oder Erf&uuml;llungsgehilfen von WunderBrudis UG (haftungsbeschr&auml;nkt) beruhen.<br />
      (4) F&uuml;r sonstige Sch&auml;den, soweit sie nicht auf der Verletzung von Kardinalpflichten (solche Pflichten, deren Erf&uuml;llung die ordnungsgem&auml;&szlig;e Durchf&uuml;hrung des Vertrages &uuml;berhaupt erst erm&ouml;glichen und auf deren Einhaltung der Vertragspartner regelm&auml;&szlig;ig vertrauen darf) beruhen, haftet WunderBrudis UG (haftungsbeschr&auml;nkt) Europe nur, wenn sie auf einer vors&auml;tzlichen oder grob fahrl&auml;ssigen Pflichtverletzung von WunderBrudis UG (haftungsbeschr&auml;nkt) oder auf einer vors&auml;tzlichen oder grob fahrl&auml;ssigen Pflichtverletzung eines gesetzlichen Vertreters oder Erf&uuml;llungsgehilfen von WunderBrudis UG (haftungsbeschr&auml;nkt) beruhen.<br />
      (5) Die Schadensersatzanspr&uuml;che sind, auf den vorhersehbaren, vertragstypischen Schaden begrenzt. Sie betragen im Falle des Verzuges h&ouml;chstens 5% des Auftragswertes.<br />
      (6) Schadenersatzanspr&uuml;che, die auf der Verletzung des Lebens, des K&ouml;rpers oder der Gesundheit oder der Freiheit beruhen, verj&auml;hren nach 30 Jahren; im &Uuml;brigen nach 1 Jahr, wobei die Verj&auml;hrung mit dem Schluss des Jahres, in dem der Anspruch entstanden ist und der Gl&auml;ubiger von den Anspruch begr&uuml;ndenden Umst&auml;nden und der Person des Schuldners Kenntnis erlangt oder ohne grobe Fahrl&auml;ssigkeit erlangen m&uuml;sste (&sect; 199 Abs.1 BGB).<br />
      6/11</p>

    <p>(7) Der Anbieter beh&auml;lt sich das Recht vor, den Inhalt eines von einem Nutzer verfassten Textes sowie hochgeladener Dateien auf die Einhaltung von Gesetz und Recht hin zu &uuml;berpr&uuml;fen und, wenn n&ouml;tig, ganz oder teilweise zu l&ouml;schen.<br />
      &sect;8<br />
      Aufrechnung und Zur&uuml;ckbehaltungsrecht<br />
      (1) Dem Besteller steht das Recht zur Aufrechnung nur zu, wenn die Gegenforderung des Bestellers rechtskr&auml;ftig festgestellt worden ist oder von dem Anbieter nicht bestritten wurde.<br />
      (2) Der Besteller kann ein Zur&uuml;ckbehaltungsrecht nur aus&uuml;ben, soweit Ihre Gegenforderung auf demselben Vertragsverh&auml;ltnis beruht.<br />
      &sect;9 Widerrufsbelehrung<br />
      (1) Ist der Besteller ein Verbraucher, so hat er ein Widerrufsrecht nach Ma&szlig;gabe der folgenden Bestimmungen:<br />
      (2) Widerrufsrecht<br />
      Sie haben das Recht, binnen vierzehn Tagen ohne Angabe von Gr&uuml;nden diesen Vertrag zu widerrufen.<br />
      Die Widerrufsfrist f&uuml;r Dienstleistungen betr&auml;gt vierzehn Tage ab dem Tag des Vertragsabschlusses.<br />
      Um Ihr Widerrufsrecht auszu&uuml;ben, m&uuml;ssen Sie uns: WunderBrudis UG (haftungsbeschr&auml;nkt)<br />
      Armstr, 14 45355 Essen<br />
      Telefon: 0201/83888900<br />
      E-Mail: mail@wunderbrudis.de<br />
      mittels einer eindeutigen Erkl&auml;rung (z. B. ein mit der Post versandter Brief, Telefax oder E-Mail) &uuml;ber Ihren Entschluss, diesen Vertrag zu widerrufen, informieren. Sie k&ouml;nnen daf&uuml;r das Muster-Widerrufsformular auf unserer Internetseite verwenden<br />
      7/11</p>

    <p>oder uns eine andere eindeutige Erkl&auml;rung &uuml;bermitteln. Machen Sie von dieser M&ouml;glichkeit Gebrauch, so werden wir Ihnen unverz&uuml;glich (z.B. per E-Mail) eine Best&auml;tigung &uuml;ber den Eingang eines solchen Widerrufs &uuml;bermitteln.<br />
      Zur Wahrung der Widerrufsfrist reicht es aus, dass Sie die Mitteilung &uuml;ber die Aus&uuml;bung des Widerrufsrechts vor Ablauf der Widerrufsfrist absenden und Sie die Waren &uuml;ber unser Online-R&uuml;cksendezentrum innerhalb der unten definierten Frist zur&uuml;ckgesendet haben.<br />
      F&uuml;r zus&auml;tzliche Informationen hinsichtlich der Reichweite, des Inhalts und Erl&auml;uterungen zur Aus&uuml;bung wenden Sie sich bitte an unseren Kundenservice.<br />
      (3) Folgen des Widerrufs<br />
      Wenn Sie diesen Vertrag widerrufen, haben wir Ihnen alle Zahlungen, die wir von Ihnen erhalten haben, einschlie&szlig;lich der Lieferkosten (mit Ausnahme der zus&auml;tzlichen Kosten, die sich daraus ergeben, dass Sie eine andere Art der Lieferung als die von uns angebotene, g&uuml;nstigste Standardlieferung gew&auml;hlt haben), unverz&uuml;glich und sp&auml;testens binnen 14 Tagen ab dem Tag zur&uuml;ckzuzahlen, an dem die Mitteilung &uuml;ber Ihren Widerruf dieses Vertrags bei uns eingegangen ist. F&uuml;r diese R&uuml;ckzahlung verwenden wir dasselbe Zahlungsmittel, das Sie bei der urspr&uuml;nglichen Transaktion eingesetzt haben, es sei denn, mit Ihnen wurde ausdr&uuml;cklich etwas anderes vereinbart; in keinem Fall werden Ihnen wegen dieser R&uuml;ckzahlung Entgelte berechnet.<br />
      Haben Sie verlangt, dass die Dienstleistungen w&auml;hrend der Widerrufsfrist beginnen sollen, so haben Sie uns einen angemessenen Betrag zu zahlen, der dem Anteil der bis zu dem Zeitpunkt, zu dem Sie uns von der Aus&uuml;bung des Widerrufsrechts hinsichtlich dieses Vertrags unterrichten, bereits erbrachten Dienstleistungen im Vergleich zum Gesamtumfang der im Vertrag vorgesehenen Dienstleistungen entspricht.<br />
      (4) Ausnahmen vom Widerrufsrecht<br />
      Sie m&uuml;ssen f&uuml;r einen etwaigen Wertverlust der Waren nur aufkommen, wenn dieser Wertverlust auf einen zur Pr&uuml;fung der Beschaffenheit, Eigenschaften und Funktionsweise der Waren nicht notwendigen Umgang mit ihnen zur&uuml;ckzuf&uuml;hren ist.<br />
      Das Widerrufsrecht besteht nicht bzw. erlischt bei folgenden Vertr&auml;gen:<br />
      zur Lieferung von Waren, die aus Gr&uuml;nden des Gesundheitsschutzes oder aus Hygienegr&uuml;nden nicht zur R&uuml;ckgabe geeignet sind und deren Versiegelung nach der Lieferung entfernt wurde oder die nach der Lieferung aufgrund ihrer Beschaffenheit untrennbar mit anderen G&uuml;tern vermischt wurden;<br />
      8/11</p>

    <p>zur Lieferung von Ton- oder Videoaufnahmen oder Computersoftware in einer versiegelten Packung, wenn die Versiegelung nach der Lieferung entfernt wurde;<br />
      zur Lieferung von Waren, die nach Kundenspezifikation angefertigt werden oder eindeutig auf die pers&ouml;nlichen Bed&uuml;rfnisse zugeschnitten sind<br />
      zur Lieferung von Waren, die schnell verderben k&ouml;nnen oder deren Verfallsdatum schnell &uuml;berschritten w&uuml;rde;<br />
      bei Dienstleistungen, wenn WunderBrudis diese vollst&auml;ndig erbracht hat und Sie vor der Bestellung zur Kenntnis genommen und ausdr&uuml;cklich zugestimmt haben, dass wir mit der Erbringung der Dienstleistung beginnen k&ouml;nnen und Sie Ihr Widerrufsrecht bei vollst&auml;ndiger Vertragserf&uuml;llung verlieren;<br />
      zur Lieferung von Zeitungen, Zeitschriften oder Illustrierte, mit Ausnahme von Abonnement-Vertr&auml;gen; und<br />
      zur Lieferung alkoholischer Getr&auml;nke, deren Preis beim Abschluss des Kaufvertrags vereinbart wurde, deren Lieferung aber erst nach 30 Tagen erfolgen kann und deren aktueller Wert von Schwankungen auf dem Markt abh&auml;ngt, auf die der Unternehmer keinen Einfluss hat.<br />
      &sect; 10<br />
      Datenschutz<br />
      (1) Sollten personenbezogene Daten (z.B. Name, Anschrift, E-Mail-Adresse) erhoben werden, verpflichten wir uns dazu, Ihre vorherige Einverst&auml;ndnis einzuholen. Wir verpflichten uns dazu, keine Daten an Dritte weiterzugeben, es sei denn, Sie haben zuvor eingewilligt.<br />
      (2) Wir weisen darauf hin, dass die &Uuml;bertragung von Daten im Internet (z. B. per E- Mail) Sicherheitsl&uuml;cken aufweisen kann. Demnach kann ein fehlerfreier und st&ouml;rungsfreier Schutz der Daten Dritter nicht vollst&auml;ndig gew&auml;hrleistet werden. Diesbez&uuml;glich ist unsere Haftung ausgeschlossen.<br />
      (3) Dritte sind nicht dazu berechtigt, Kontaktdaten f&uuml;r gewerbliche Aktivit&auml;ten zu nutzen, sofern der Anbieter den betroffenen Personen vorher eine schriftliche Einwilligung erteilt hat.<br />
      (4) Sie haben jederzeit das Recht, von WunderBrudis &uuml;ber den Sie betreffenden Datenbestand vollst&auml;ndig und unentgeltlich Auskunft zu erhalten.<br />
      (5) Des Weiteren besteht ein Recht auf Berichtigung/L&ouml;schung von Daten/Einschr&auml;nkung der Verarbeitung f&uuml;r den Nutzer.<br />
      9/11</p>

    <p>&sect; 11<br />
      Cookies<br />
      (1) Zur Anzeige des Produktangebotes kann es vorkommen, dass wir Cookies einsetzen. Bei Cookies handelt es sich um kleine Textdateien, die lokal im Zwischenspeicher des Internet-Browsers des Seitenbesuchers gespeichert werden.<br />
      (2) Zahlreiche Internetseiten und Server verwenden Cookies. Viele Cookies enthalten eine sogenannte Cookie-ID. Eine Cookie-ID ist eine eindeutige Kennung des Cookies. Sie besteht aus einer Zeichenfolge, durch welche Internetseiten und Server dem konkreten Internetbrowser zugeordnet werden k&ouml;nnen, in dem das Cookie gespeichert wurde. Dies erm&ouml;glicht es den besuchten Internetseiten und Servern, den individuellen Browser der betroffenen Person von anderen Internetbrowsern, die andere Cookies enthalten, zu unterscheiden. Ein bestimmter Internetbrowser kann &uuml;ber die eindeutige Cookie-ID wiedererkannt und identifiziert werden.<br />
      (3) Durch den Einsatz von Cookies kann den Nutzern dieser Internetseite nutzerfreundlichere Services bereitstellen, die ohne die Cookie-Setzung nicht m&ouml;glich w&auml;ren.<br />
      (4) Wir weisen Sie darauf hin, dass einige dieser Cookies von unserem Server auf Ihr Computersystem &uuml;berspielt werden, wobei es sich dabei meist um so genannte sitzungsbezogene Cookies handelt. Sitzungsbezogene Cookies zeichnen sich dadurch aus, dass diese automatisch nach Ende der Browser-Sitzung wieder von Ihrer Festplatte gel&ouml;scht werden. Andere Cookies verbleiben auf Ihrem Computersystem und erm&ouml;glichen es uns, Ihr Computersystem bei Ihrem n&auml;chsten Besuch wieder zu erkennen (sog. dauerhafte Cookies).<br />
      (5) Sie k&ouml;nnen der Speicherung von Cookies widersprechen, hierzu steht Ihnen ein Banner zu Verf&uuml;gung dem Sie widersprechen/annehmen k&ouml;nnen.<br />
      (6) Selbstverst&auml;ndlich k&ouml;nnen Sie Ihren Browser so einstellen, dass keine Cookies auf der Festplatte abgelegt werden bzw. bereits abgelegte Cookies wieder gel&ouml;scht werden. Die Anweisungen bez&uuml;glich der Verhinderung sowie L&ouml;schung von Cookies k&ouml;nnen Sie der Hilfefunktion Ihres Browsers oder Softwareherstellers entnehmen.<br />
      &sect; 12<br />
      Gerichtsstand und anwendbares Recht<br />
      (1) F&uuml;r Meinungsverschiedenheiten und Streitigkeiten anl&auml;sslich dieses Vertrages gilt ausschlie&szlig;lich das Recht der Bundesrepublik Deutschland unter Ausschluss des UN- Kaufrechts.<br />
      10/11</p>

    <p>(2) Alleiniger Gerichtsstand bei Bestellungen von Kaufleuten, juristischen Personen des &ouml;ffentlichen Rechts oder &ouml;ffentlich-rechtlichen Sonderverm&ouml;gen ist der Sitz des Anbieters.<br />
      &sect; 13 Schlussbestimmungen<br />
      (1) Vertragssprache ist deutsch.<br />
      (2) Wir bieten keine Produkte oder Dienstleistungen zum Kauf durch Minderj&auml;hrige an. Unsere Produkte f&uuml;r Kinder k&ouml;nnen nur von Erwachsenen gekauft werden. Falls Sie unter 18 sind, d&uuml;rfen Sie WunderBrudis nur unter Mitwirkung eines Elternteils oder Erziehungsberechtigten nutzen.<br />
      (3) Wenn Sie diese AGB verletzen und wir unternehmen hiergegen nichts, sind wir weiterhin berechtigt, von unseren Rechten bei jeder anderen Gelegenheit, in der Sie diese Verkaufsbedingungen verletzen, Gebrauch zu machen.<br />
      (4) Wir behalten uns das Recht vor, &Auml;nderungen an unserer Webseite, Regelwerken, Bedingungen einschlie&szlig;lich dieser AGB jederzeit vorzunehmen. Auf Ihre Bestellung finden jeweils die Verkaufsbedingungen, Vertragsbedingungen und AGB Anwendung, die zu dem Zeitpunkt Ihrer Bestellung in Kraft sind, es sei denn eine &Auml;nderung an diesen Bedingungen ist gesetzlich oder auf beh&ouml;rdliche Anordnung erforderlich (in diesem Fall finden sie auch auf Bestellungen Anwendung, die Sie zuvor get&auml;tigt haben). Falls eine Regelung in diesen Verkaufsbedingungen unwirksam, nichtig oder aus irgendeinem Grund undurchsetzbar ist, gilt diese Regelung als abtrennbar und beeinflusst die G&uuml;ltigkeit und Durchsetzbarkeit der verbleibenden Regelungen nicht.<br />
      (5) Die Unwirksamkeit einer Bestimmung ber&uuml;hrt die Wirksamkeit der anderen Bestimmungen aus dem Vertrag nicht. Sollte dieser Fall eintreten, soll die Bestimmung nach Sinn und Zweck durch eine andere rechtlich zul&auml;ssige Bestimmung ersetzt werden, die dem Sinn und Zweck der unwirksamen Bestimmung entspricht.<br />
      11/11<br />
    </p>
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
