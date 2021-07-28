<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Unsere Allgemeinen Geschäftsbedingungen zur Nutzung unserer Plattform">

    <title>AGBs</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/favicon.ico') }}">

    <!--Core CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('new/assets/css/app.css')}}">
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
    <!-- Hero (Parallax) and nav -->
    <div class="hero parallax is-cover is-relative is-default is-bold" data-background="{{ asset('images/static/inner-6.jpg')}}" data-color="#000" data-color-opacity="0.3" data-demo-background="assets/img/demo/startup/contact.jpg">
        <nav class="navbar navbar-wrapper navbar-fade navbar-light is-transparent">
            <div class="container">
                <!-- Brand -->
                <div class="navbar-brand">
                <a class="navbar-item" href="/">
                        <img class="light-logo" src="{{asset('new/assets/img/logo2.svg')}}" alt="">
                        <img class="dark-logo switcher-logo" src="{{asset('new/assets/img/logo1.svg')}}" alt="">
                    </a>
                <!-- Sidebar Trigger -->

                    <!-- Responsive toggle -->
                    <div class="custom-burger" data-target="nav-menu">
                        <a class="responsive-btn" href="javascript:void(0);">
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
                <div id="nav-menu" class="navbar-menu">
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
        <!-- Hero text -->
        <div id="main-hero" class="hero-body pt-80 pb-80">
            <div class="container has-text-centered">
                <div class="columns is-vcentered">
                    <div class="column is-6 is-offset-3 has-text-centered is-header-caption">
                        <h1 class="title main-title is-2">AGBs</h1>
                        <h2 class="subtitle is-5 is-light">
                        <p class="lead mb-0">Unsere Allgemeinen Gesch&auml;ftsbedingungen</p>
                        </h2>
                        <br />
                    </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="section section-feature-grey is-medium">
        <div class="container">
            <!-- Title -->
            <div class="section-title-wrapper">

            </div>

            <div class="content-wrapper">
                <div class="columns">
                   <div class="column is-11 is-offset-1">
                   
                        <div class="subtitle section-subtitle has-text-centered">
                            Geltungsbereich und Anbieter
                        </div>
        
                        <p align="justify" class="pb-20 body-color">
                            
                            (1) Die Allgemeinen Gesch&auml;ftsbedingungen (nachfolgend &quot;AGB&quot; genannt) regeln das Vertragsverh&auml;ltnis zwischen WunderBrudis UG (haftungsbeschr&auml;nkt) (nachfolgend Anbieter) und Ihnen (nachfolgend Besteller), in ihrer zum Zeitpunkt des Vertragsabschlusses g&uuml;ltigen Fassung.<br />
                            (2) Abweichende AGB des Bestellers werden zur&uuml;ckgewiesen.<br />
                            Bitte lesen Sie diese Bedingungen aufmerksam, bevor Sie eine Dienstleistung der WunderBrudis UG (haftungsbeschr&auml;nkt) in Anspruch nehmen.<br />
                            (3) Auf WunderBrudis bieten wir Ihnen folgende Dienstleistungen an:<br />
                            Vermittlung von Social-Media Influencer an Unternehmen Vermittlung von Produkten von Unternehmen an Influencer Versand von Produkten an Influencer im Auftrag von Unternehmen<br />
                            </p>
                            <div class="subtitle section-subtitle has-text-centered">
                              Zustandekommen des Vertrages
                          </div>
                          <p align="justify" class="pb-20 body-color">
                            (1) Vertr&auml;ge auf diesem Portal k&ouml;nnen ausschlie&szlig;lich in deutscher Sprache abgeschlossen werden.<br />
                            (2) Der Besteller muss das 18. Lebensjahr vollendet haben.<br />
                            (3) Der Zugang zur Nutzung des WunderBrudis-Service setzt die Anmeldung voraus.<br />
                            (4) Mit der Anmeldung erkennt der Besteller die vorliegenden AGB an. Mit der Anmeldung entsteht ein Vertragsverh&auml;ltnis zwischen WunderBrudis und dem angemeldeten Besteller, das sich nach den Regelungen dieser AGB richtet.<br />
                            (5) Die Pr&auml;sentation der Dienstleistung auf der Website stellt kein rechtlich wirksames Angebot dar. Durch die Pr&auml;sentation der Dienstleistung wird der Kunde<br />
                            1/11
                            lediglich dazu aufgefordert ein Angebot zu machen.<br />
      
                            (6) Mit Bestellung eines kostenpflichtigen Dienstes geht der angemeldete Besteller ein weiteres, von der Anmeldung getrenntes Vertragsverh&auml;ltnis mit WunderBrudis ein. Der Nutzer wird vor Abschluss dieses Vertragsverh&auml;ltnisses &uuml;ber den jeweiligen kostenpflichtigen Dienst und die Zahlungsbedingungen informiert. Das Vertragsverh&auml;ltnis entsteht indem der Besteller die Bestellung und Zahlungsverpflichtung durch das Anklicken des Buttons &#8222;Kampagne ver&ouml;ffentlichen&quot; best&auml;tigt.<br />
      
                            (7) Sie stimmen zu, dass Sie Rechnungen elektronisch erhalten. Elektronische Rechnungen werden Ihnen per E-Mail oder in dem Kundenkonto der Webseite zur Verf&uuml;gung gestellt. Wir werden Sie f&uuml;r jede Dienstleistung dar&uuml;ber informieren, ob eine elektronische Rechnung verf&uuml;gbar ist. Weitere Informationen &uuml;ber elektronische Rechnungen erhalten Sie auf unserer Website.<br />

                        </p>

                            <div class="subtitle section-subtitle has-text-centered">
                                Beschreibung des Leistungsumfanges
                            </div>
            
                                <p align="justify" class="pb-20 body-color">
                                    Der Leistungsumfang von WunderBrudis besteht aus folgenden Dienstleistungen:<br />
                                    Die Nutzung der Plattform WunderBrudis ist f&uuml;r Influencer entgeltfrei. F&uuml;r Unternehmen entstehen erst Kosten bei Buchung einer kostenpflichtigen Kampagne, oder bei Abschluss eines wiederkehrenden Abos.<br />
                                   
                                </p>
                                <div class="subtitle section-subtitle has-text-centered">
                                    Preise und Versandkosten
                                </div>                
                                    <p align="justify" class="pb-20 body-color">
                                        <br />
                                        (1) Zur Nutzung von WunderBrudis ist zun&auml;chst eine Registrierung notwendig.<br />
                                        (2) Um die Dienstleistungen der Website kaufen zu k&ouml;nnen, muss der Nutzer sich registrieren und ein Benutzerkonto erstellen.<br />
                                        (3) Sofern der Nutzer einen kostenpflichtigen Dienst in Anspruch nehmen m&ouml;chte, wird er vorher auf die Kostenpflichtigkeit hingewiesen. So werden ihm insbesondere der jeweilige zus&auml;tzliche Leistungsumfang, die anfallenden Kosten und die Zahlungsweise aufgef&uuml;hrt.<br />
                                        (4) Der Anbieter beh&auml;lt sich das Recht vor, f&uuml;r verschiedene Buchungszeitpunkte und Nutzergruppen und insbesondere f&uuml;r verschiedene Nutzungszeitr&auml;ume unterschiedliche Entgeltmodelle zu berechnen, wie auch verschiedene<br />
                                        2/11
                                    </p>
                                    <div class="subtitle section-subtitle has-text-centered">
                                        Zahlungsbedingungen
                                    </div>                
                                        <p align="justify" class="pb-20 body-color">
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
      3/11
      (12) Die Abwicklung kann &uuml;ber folgende Zahlungsmittel erfolgen:<br />
      Paypal Kreditkarte Lastschrift:<br />
      Im Falle einer vom Besteller zu vertretenden R&uuml;cklastschrift erhebt die WunderBrudis UG (haftungsbeschr&auml;nkt) einen pauschalierten Schadensersatz in H&ouml;he von 8 &euro; (acht Euro). Der Besteller kann nachweisen, dass ein Schaden &uuml;berhaupt nicht entstanden oder wesentlich niedriger ist als die Pauschale. Die vorstehenden Regelungen gelten entsprechend f&uuml;r Zahlungen des Kaufpreises von Waren, die von Drittanbietern verkauft werden.<br />
      Sofort&uuml;berweisung Vorkasse<br />
      
                                        </p>
                                        <div class="subtitle section-subtitle has-text-centered">
                                            Anmeldung und K&uuml;ndigung
                                        </div>                
                                            <p  align="justify" class="pb-20 body-color">
                                                (1) Weiterhin erkl&auml;rt der Besteller, dass er und nach seiner Kenntnis auch kein Mitglied seines Haushaltes nicht wegen einer vors&auml;tzlichen Straftat die die Sicherheit von Dritten gef&auml;hrdet vorbestraft ist, insbesondere nicht wegen einer Straftat gegen die sexuelle Selbstbestimmung (&sect;&sect; 174 ff. StGB, einer Straftat gegen das Leben (&sect;&sect; 211 ff. StGB), einer Straftat gegen die k&ouml;rperliche Unversehrtheit (&sect; 223 ff. StGB), einer Straftat gegen die pers&ouml;nliche Freiheit (&sect;&sect; 232 ff. StGB), oder wegen eines Diebstahl und Unterschlagung (&sect;&sect; 242 ff. StGB) oder des Raubes und der Erpressung (&sect;&sect; 249 ff. StGB) oder wegen Drogenmissbrauch.<br />
      (2) Ein Nutzerkonto ist f&uuml;r seine/ihre alleinige und pers&ouml;nliche Nutzung und ein Nutzer darf Dritte nicht autorisieren dieses Konto zu nutzen. Ein Nutzer darf sein/ ihr Konto nicht an Dritte &uuml;bertragen.<br />
      (3) Ein Nutzer ist, unter Vorbehalt, jederzeit berechtigt, sich ohne Angabe eines Grundes schriftlich per Post, E-Mail oder Telefon abzumelden. Gleichzeitig besteht bei die M&ouml;glichkeit, innerhalb der Daten und Einstellungen im Nutzer-Account diesen vollst&auml;ndig und eigenh&auml;ndig zu deaktivieren. Das vorher geschlossene Vertragsverh&auml;ltnis ist damit beendet.<br />
      (4) Hat ein Nutzer sich f&uuml;r einen entgeltlichen Dienst angemeldet, so kann er sp&auml;testens 3 Tage vor dem Buchungszeitraumes k&uuml;ndigen. Wird diese Frist nicht<br />
      4/11
      eingehalten, so verl&auml;ngert sich der kostenpflichtige Dienst je nach gew&auml;hlter Buchungszeit um diese und die K&uuml;ndigung wird erst zum Ende des Folgebuchungszeitraumes wirksam. Eine K&uuml;ndigung ist per Telefon, E-Mail oder Brief m&ouml;glich und wird von uns schriftlich best&auml;tigt. Damit Ihre K&uuml;ndigung zugeordnet werden kann sollen der vollst&auml;ndige Name, die hinterlegte E-Mail-Adresse und die Anschrift des Kunden angegeben werden. Im Fall einer K&uuml;ndigung per Telefon wird das individuelle Telefon-Passwort ben&ouml;tigt.<br />
      (5) WunderBrudis kann den Vertrag nach eigenem Ermessen, mit oder ohne vorherige Ank&uuml;ndigung und ohne Angabe von Gr&uuml;nden, zu jeder Zeit k&uuml;ndigen. WunderBrudis h&auml;lt sich weiterhin das Recht vor, Profile und /oder jeden Inhalt der auf der Website durch oder von dem Nutzer ver&ouml;ffentlich wurde zu entfernen. Falls WunderBrudis die Registrierung des Nutzers beendet und/oder Profile oder ver&ouml;ffentliche Inhalte des Nutzers entfernt, besteht f&uuml;r WunderBrudis keine Verpflichtung den Nutzer dar&uuml;ber noch &uuml;ber den Grund der Beendigung oder der Entfernung zu informieren.<br />
      (6) Im Anschluss an jede Beendigung von jedweder individuellen Nutzung der Services von WunderBrudis, h&auml;lt WunderBrudis sich das Recht vor, eine Information hier&uuml;ber an andere registrierte Nutzer mit denen WunderBrudis annimmt, dass diese in Kontakt mit dem Nutzer standen, zu versenden. WunderBrudis's Entscheidung die Registrierung des Nutzers zu beenden und/oder weitere Nutzer zu benachrichtigen mit dem WunderBrudis annimmt, dass der Nutzer in Kontakt stand, impliziert nicht bzw. sagt keinesfalls aus, dass WunderBrudis Aussagen &uuml;ber den individuellen Charakter, generelle Reputation, pers&ouml;nliche Charakteristika noch &uuml;ber den Lebensstil trifft.<br />
      (7) Die Nutzer sind verpflichtet, in Ihrem Profil und sonstigen Bereichen des Portals keine absichtlichen oder betr&uuml;gerischen Falschangaben zu machen. Solche Angaben k&ouml;nnen zivilrechtliche Schritte nach sich ziehen. Der Betreiber beh&auml;lt sich dar&uuml;ber hinaus das Recht vor, in einem solchen Fall das bestehende Vertragsverh&auml;ltnis mit sofortiger Wirkung aufzul&ouml;sen.<br />
      (8) Wird der Zugang eines Nutzers wegen schuldhaften Vertragsversto&szlig;es gesperrt und/oder das Vertragsverh&auml;ltnis aufgel&ouml;st, hat der Nutzer f&uuml;r die verbleibende Vertragslaufzeit Schadenersatz in H&ouml;he des vereinbarten Entgelts abz&uuml;glich der ersparten Aufwendungenzu zahlen. Die H&ouml;he der ersparten Aufwendungen wird pauschal auf 10% des Entgelts angesetzt. Es bleibt beiden Vertragsparteien unbenommen nachzuweisen, dass der Schaden, und/oder die ersparten Aufwendungen tats&auml;chlich h&ouml;her oder niedriger sind.<br />
      (9) Nach Beendigung des Vertragsverh&auml;ltnisses werden s&auml;mtliche Daten des Nutzers von WunderBrudis gel&ouml;scht.<br />
      5/11
    </p>
    <div class="subtitle section-subtitle has-text-centered">
        Haftungsbegrenzung (Dienstleistungen)
    </div>                
        <p align="justify" class="pb-20 body-color">
            (1) WunderBrudis &uuml;bernimmt keine Verantwortung f&uuml;r den Inhalt und die Richtigkeit der Angaben in den Anmelde- und Profildaten der Besteller sowie weiteren von den Bestellern generierten Inhalten.<br />
      (2) In Bezug auf die gesuchte oder angebotene Dienstleistung kommt der Vertrag ausschlie&szlig;lich zwischen den jeweilig beteiligten Bestellern zustande. Daher haftet WunderBrudis nicht f&uuml;r Leistungen der teilnehmenden Besteller. Entsprechend sind alle Angelegenheiten bzgl. der Beziehung zwischen den Bestellern einschlie&szlig;lich, und ohne Ausnahme, der Dienstleistungen die ein Suchender erhalten hat oder Zahlungen die an Besteller f&auml;llig sind, direkt an die jeweilige Partei des zu richten. WunderBrudis kann hierf&uuml;r nicht verantwortlich gemacht werden und widerspricht hiermit ausdr&uuml;cklich allen etwaigen Haftungsanspr&uuml;chen welcher Art auch immer einschlie&szlig;lich Forderungen, Leistungen, direkte oder indirekte Besch&auml;digungen jeder Art, bewusst oder unbewusst, vermutet oder unvermutet, offengelegt oder nicht, in welcher Art auch immer im Zusammenhang mit den genannten Angelegenheiten.<br />
      (3) F&uuml;r Sch&auml;den aus der Verletzung des Lebens, des K&ouml;rpers oder der Gesundheit haftet WunderBrudis UG (haftungsbeschr&auml;nkt) nur, wenn sie auf einer vors&auml;tzlichen oder fahrl&auml;ssigen Pflichtverletzung von WunderBrudis UG (haftungsbeschr&auml;nkt) oder einer vors&auml;tzlichen oder fahrl&auml;ssigen Pflichtverletzung eines gesetzlichen Vertreters oder Erf&uuml;llungsgehilfen von WunderBrudis UG (haftungsbeschr&auml;nkt) beruhen.<br />
      (4) F&uuml;r sonstige Sch&auml;den, soweit sie nicht auf der Verletzung von Kardinalpflichten (solche Pflichten, deren Erf&uuml;llung die ordnungsgem&auml;&szlig;e Durchf&uuml;hrung des Vertrages &uuml;berhaupt erst erm&ouml;glichen und auf deren Einhaltung der Vertragspartner regelm&auml;&szlig;ig vertrauen darf) beruhen, haftet WunderBrudis UG (haftungsbeschr&auml;nkt) Europe nur, wenn sie auf einer vors&auml;tzlichen oder grob fahrl&auml;ssigen Pflichtverletzung von WunderBrudis UG (haftungsbeschr&auml;nkt) oder auf einer vors&auml;tzlichen oder grob fahrl&auml;ssigen Pflichtverletzung eines gesetzlichen Vertreters oder Erf&uuml;llungsgehilfen von WunderBrudis UG (haftungsbeschr&auml;nkt) beruhen.<br />
      (5) Die Schadensersatzanspr&uuml;che sind, auf den vorhersehbaren, vertragstypischen Schaden begrenzt. Sie betragen im Falle des Verzuges h&ouml;chstens 5% des Auftragswertes.<br />
      (6) Schadenersatzanspr&uuml;che, die auf der Verletzung des Lebens, des K&ouml;rpers oder der Gesundheit oder der Freiheit beruhen, verj&auml;hren nach 30 Jahren; im &Uuml;brigen nach 1 Jahr, wobei die Verj&auml;hrung mit dem Schluss des Jahres, in dem der Anspruch entstanden ist und der Gl&auml;ubiger von den Anspruch begr&uuml;ndenden Umst&auml;nden und der Person des Schuldners Kenntnis erlangt oder ohne grobe Fahrl&auml;ssigkeit erlangen m&uuml;sste (&sect; 199 Abs.1 BGB).<br />
      6/11
      (7) Der Anbieter beh&auml;lt sich das Recht vor, den Inhalt eines von einem Nutzer verfassten Textes sowie hochgeladener Dateien auf die Einhaltung von Gesetz und Recht hin zu &uuml;berpr&uuml;fen und, wenn n&ouml;tig, ganz oder teilweise zu l&ouml;schen.<br />

    </p>
        <div class="subtitle section-subtitle has-text-centered">
            Aufrechnung und Zur&uuml;ckbehaltungsrecht
        </div>                
            <p align="justify" class="pb-20 body-color">
                <br />
                (1) Dem Besteller steht das Recht zur Aufrechnung nur zu, wenn die Gegenforderung des Bestellers rechtskr&auml;ftig festgestellt worden ist oder von dem Anbieter nicht bestritten wurde.<br />
      (2) Der Besteller kann ein Zur&uuml;ckbehaltungsrecht nur aus&uuml;ben, soweit Ihre Gegenforderung auf demselben Vertragsverh&auml;ltnis beruht.<br />

            </p>
            <div class="subtitle section-subtitle has-text-centered">
                Widerrufsbelehrung
            </div>                
                <p align="justify" class="pb-20 body-color">
                    <br />
                    (1) Ist der Besteller ein Verbraucher, so hat er ein Widerrufsrecht nach Ma&szlig;gabe der folgenden Bestimmungen:<br />
      (2) Widerrufsrecht<br />
      Sie haben das Recht, binnen vierzehn Tagen ohne Angabe von Gr&uuml;nden diesen Vertrag zu widerrufen.<br />
      Die Widerrufsfrist f&uuml;r Dienstleistungen betr&auml;gt vierzehn Tage ab dem Tag des Vertragsabschlusses.<br />
      Um Ihr Widerrufsrecht auszu&uuml;ben, m&uuml;ssen Sie uns: WunderBrudis UG (haftungsbeschr&auml;nkt)<br />
      Armstr, 14 45355 Essen<br />
      Telefon: 0201/83888900<br />
      E-Mail: mail@wunderbrudis.de<br />
      mittels einer eindeutigen Erkl&auml;rung (z. B. ein mit der Post versandter Brief, Telefax oder E-Mail) &uuml;ber Ihren Entschluss, diesen Vertrag zu widerrufen, informieren. Sie k&ouml;nnen daf&uuml;r das Muster-Widerrufsformular auf unserer Internetseite verwenden<br />
      7/11
      oder uns eine andere eindeutige Erkl&auml;rung &uuml;bermitteln. Machen Sie von dieser M&ouml;glichkeit Gebrauch, so werden wir Ihnen unverz&uuml;glich (z.B. per E-Mail) eine Best&auml;tigung &uuml;ber den Eingang eines solchen Widerrufs &uuml;bermitteln.<br />
      Zur Wahrung der Widerrufsfrist reicht es aus, dass Sie die Mitteilung &uuml;ber die Aus&uuml;bung des Widerrufsrechts vor Ablauf der Widerrufsfrist absenden und Sie die Waren &uuml;ber unser Online-R&uuml;cksendezentrum innerhalb der unten definierten Frist zur&uuml;ckgesendet haben.<br />
      F&uuml;r zus&auml;tzliche Informationen hinsichtlich der Reichweite, des Inhalts und Erl&auml;uterungen zur Aus&uuml;bung wenden Sie sich bitte an unseren Kundenservice.<br />
      (3) Folgen des Widerrufs<br />
      Wenn Sie diesen Vertrag widerrufen, haben wir Ihnen alle Zahlungen, die wir von Ihnen erhalten haben, einschlie&szlig;lich der Lieferkosten (mit Ausnahme der zus&auml;tzlichen Kosten, die sich daraus ergeben, dass Sie eine andere Art der Lieferung als die von uns angebotene, g&uuml;nstigste Standardlieferung gew&auml;hlt haben), unverz&uuml;glich und sp&auml;testens binnen 14 Tagen ab dem Tag zur&uuml;ckzuzahlen, an dem die Mitteilung &uuml;ber Ihren Widerruf dieses Vertrags bei uns eingegangen ist. F&uuml;r diese R&uuml;ckzahlung verwenden wir dasselbe Zahlungsmittel, das Sie bei der urspr&uuml;nglichen Transaktion eingesetzt haben, es sei denn, mit Ihnen wurde ausdr&uuml;cklich etwas anderes vereinbart; in keinem Fall werden Ihnen wegen dieser R&uuml;ckzahlung Entgelte berechnet.<br />
      Haben Sie verlangt, dass die Dienstleistungen w&auml;hrend der Widerrufsfrist beginnen sollen, so haben Sie uns einen angemessenen Betrag zu zahlen, der dem Anteil der bis zu dem Zeitpunkt, zu dem Sie uns von der Aus&uuml;bung des Widerrufsrechts hinsichtlich dieses Vertrags unterrichten, bereits erbrachten Dienstleistungen im Vergleich zum Gesamtumfang der im Vertrag vorgesehenen Dienstleistungen entspricht.<br />
      (4) Ausnahmen vom Widerrufsrecht<br />
      Sie m&uuml;ssen f&uuml;r einen etwaigen Wertverlust der Waren nur aufkommen, wenn dieser Wertverlust auf einen zur Pr&uuml;fung der Beschaffenheit, Eigenschaften und Funktionsweise der Waren nicht notwendigen Umgang mit ihnen zur&uuml;ckzuf&uuml;hren ist.<br />
      Das Widerrufsrecht besteht nicht bzw. erlischt bei folgenden Vertr&auml;gen:<br />
      zur Lieferung von Waren, die aus Gr&uuml;nden des Gesundheitsschutzes oder aus Hygienegr&uuml;nden nicht zur R&uuml;ckgabe geeignet sind und deren Versiegelung nach der Lieferung entfernt wurde oder die nach der Lieferung aufgrund ihrer Beschaffenheit untrennbar mit anderen G&uuml;tern vermischt wurden;<br />
      8/11
      zur Lieferung von Ton- oder Videoaufnahmen oder Computersoftware in einer versiegelten Packung, wenn die Versiegelung nach der Lieferung entfernt wurde;<br />
      zur Lieferung von Waren, die nach Kundenspezifikation angefertigt werden oder eindeutig auf die pers&ouml;nlichen Bed&uuml;rfnisse zugeschnitten sind<br />
      zur Lieferung von Waren, die schnell verderben k&ouml;nnen oder deren Verfallsdatum schnell &uuml;berschritten w&uuml;rde;<br />
      bei Dienstleistungen, wenn WunderBrudis diese vollst&auml;ndig erbracht hat und Sie vor der Bestellung zur Kenntnis genommen und ausdr&uuml;cklich zugestimmt haben, dass wir mit der Erbringung der Dienstleistung beginnen k&ouml;nnen und Sie Ihr Widerrufsrecht bei vollst&auml;ndiger Vertragserf&uuml;llung verlieren;<br />
      zur Lieferung von Zeitungen, Zeitschriften oder Illustrierte, mit Ausnahme von Abonnement-Vertr&auml;gen; und<br />
      zur Lieferung alkoholischer Getr&auml;nke, deren Preis beim Abschluss des Kaufvertrags vereinbart wurde, deren Lieferung aber erst nach 30 Tagen erfolgen kann und deren aktueller Wert von Schwankungen auf dem Markt abh&auml;ngt, auf die der Unternehmer keinen Einfluss hat.<br />

                </p>
                <div class="subtitle section-subtitle has-text-centered">
                    Datenschutz
                </div>                
                    <p align="justify" class="pb-20 body-color">
                        <br />
                        (1) Sollten personenbezogene Daten (z.B. Name, Anschrift, E-Mail-Adresse) erhoben werden, verpflichten wir uns dazu, Ihre vorherige Einverst&auml;ndnis einzuholen. Wir verpflichten uns dazu, keine Daten an Dritte weiterzugeben, es sei denn, Sie haben zuvor eingewilligt.<br />
      (2) Wir weisen darauf hin, dass die &Uuml;bertragung von Daten im Internet (z. B. per E- Mail) Sicherheitsl&uuml;cken aufweisen kann. Demnach kann ein fehlerfreier und st&ouml;rungsfreier Schutz der Daten Dritter nicht vollst&auml;ndig gew&auml;hrleistet werden. Diesbez&uuml;glich ist unsere Haftung ausgeschlossen.<br />
      (3) Dritte sind nicht dazu berechtigt, Kontaktdaten f&uuml;r gewerbliche Aktivit&auml;ten zu nutzen, sofern der Anbieter den betroffenen Personen vorher eine schriftliche Einwilligung erteilt hat.<br />
      (4) Sie haben jederzeit das Recht, von WunderBrudis &uuml;ber den Sie betreffenden Datenbestand vollst&auml;ndig und unentgeltlich Auskunft zu erhalten.<br />
      (5) Des Weiteren besteht ein Recht auf Berichtigung/L&ouml;schung von Daten/Einschr&auml;nkung der Verarbeitung f&uuml;r den Nutzer.<br />
      9/11
    </p>
    <div class="subtitle section-subtitle has-text-centered">
        Cookies
    </div>                
        <p align="justify" class="pb-20 body-color">
            <br />
            (1) Zur Anzeige des Produktangebotes kann es vorkommen, dass wir Cookies einsetzen. Bei Cookies handelt es sich um kleine Textdateien, die lokal im Zwischenspeicher des Internet-Browsers des Seitenbesuchers gespeichert werden.<br />
            (2) Zahlreiche Internetseiten und Server verwenden Cookies. Viele Cookies enthalten eine sogenannte Cookie-ID. Eine Cookie-ID ist eine eindeutige Kennung des Cookies. Sie besteht aus einer Zeichenfolge, durch welche Internetseiten und Server dem konkreten Internetbrowser zugeordnet werden k&ouml;nnen, in dem das Cookie gespeichert wurde. Dies erm&ouml;glicht es den besuchten Internetseiten und Servern, den individuellen Browser der betroffenen Person von anderen Internetbrowsern, die andere Cookies enthalten, zu unterscheiden. Ein bestimmter Internetbrowser kann &uuml;ber die eindeutige Cookie-ID wiedererkannt und identifiziert werden.<br />
            (3) Durch den Einsatz von Cookies kann den Nutzern dieser Internetseite nutzerfreundlichere Services bereitstellen, die ohne die Cookie-Setzung nicht m&ouml;glich w&auml;ren.<br />
            (4) Wir weisen Sie darauf hin, dass einige dieser Cookies von unserem Server auf Ihr Computersystem &uuml;berspielt werden, wobei es sich dabei meist um so genannte sitzungsbezogene Cookies handelt. Sitzungsbezogene Cookies zeichnen sich dadurch aus, dass diese automatisch nach Ende der Browser-Sitzung wieder von Ihrer Festplatte gel&ouml;scht werden. Andere Cookies verbleiben auf Ihrem Computersystem und erm&ouml;glichen es uns, Ihr Computersystem bei Ihrem n&auml;chsten Besuch wieder zu erkennen (sog. dauerhafte Cookies).<br />
            (5) Sie k&ouml;nnen der Speicherung von Cookies widersprechen, hierzu steht Ihnen ein Banner zu Verf&uuml;gung dem Sie widersprechen/annehmen k&ouml;nnen.<br />
            (6) Selbstverst&auml;ndlich k&ouml;nnen Sie Ihren Browser so einstellen, dass keine Cookies auf der Festplatte abgelegt werden bzw. bereits abgelegte Cookies wieder gel&ouml;scht werden. Die Anweisungen bez&uuml;glich der Verhinderung sowie L&ouml;schung von Cookies k&ouml;nnen Sie der Hilfefunktion Ihres Browsers oder Softwareherstellers entnehmen.<br />
            
        </p>
        <div class="subtitle section-subtitle has-text-centered">
            Gerichtsstand und anwendbares Recht
        </div>                
            <p align="justify" class="pb-20 body-color">
                (1) F&uuml;r Meinungsverschiedenheiten und Streitigkeiten anl&auml;sslich dieses Vertrages gilt ausschlie&szlig;lich das Recht der Bundesrepublik Deutschland unter Ausschluss des UN- Kaufrechts.<br />
                10/11
                (2) Alleiniger Gerichtsstand bei Bestellungen von Kaufleuten, juristischen Personen des &ouml;ffentlichen Rechts oder &ouml;ffentlich-rechtlichen Sonderverm&ouml;gen ist der Sitz des Anbieters.<br />
      &sect;Schlussbestimmungen 13 <br />
      (1) Vertragssprache ist deutsch.<br />
      (2) Wir bieten keine Produkte oder Dienstleistungen zum Kauf durch Minderj&auml;hrige an. Unsere Produkte f&uuml;r Kinder k&ouml;nnen nur von Erwachsenen gekauft werden. Falls Sie unter 18 sind, d&uuml;rfen Sie WunderBrudis nur unter Mitwirkung eines Elternteils oder Erziehungsberechtigten nutzen.<br />
      (3) Wenn Sie diese AGB verletzen und wir unternehmen hiergegen nichts, sind wir weiterhin berechtigt, von unseren Rechten bei jeder anderen Gelegenheit, in der Sie diese Verkaufsbedingungen verletzen, Gebrauch zu machen.<br />
      (4) Wir behalten uns das Recht vor, &Auml;nderungen an unserer Webseite, Regelwerken, Bedingungen einschlie&szlig;lich dieser AGB jederzeit vorzunehmen. Auf Ihre Bestellung finden jeweils die Verkaufsbedingungen, Vertragsbedingungen und AGB Anwendung, die zu dem Zeitpunkt Ihrer Bestellung in Kraft sind, es sei denn eine &Auml;nderung an diesen Bedingungen ist gesetzlich oder auf beh&ouml;rdliche Anordnung erforderlich (in diesem Fall finden sie auch auf Bestellungen Anwendung, die Sie zuvor get&auml;tigt haben). Falls eine Regelung in diesen Verkaufsbedingungen unwirksam, nichtig oder aus irgendeinem Grund undurchsetzbar ist, gilt diese Regelung als abtrennbar und beeinflusst die G&uuml;ltigkeit und Durchsetzbarkeit der verbleibenden Regelungen nicht.<br />
      (5) Die Unwirksamkeit einer Bestimmung ber&uuml;hrt die Wirksamkeit der anderen Bestimmungen aus dem Vertrag nicht. Sollte dieser Fall eintreten, soll die Bestimmung nach Sinn und Zweck durch eine andere rechtlich zul&auml;ssige Bestimmung ersetzt werden, die dem Sinn und Zweck der unwirksamen Bestimmung entspricht.<br />
      11/11<br />

            </p>
     </div>
              </div>
            </div> 


            <div class="content-wrapper">
                <div class="columns">
                </div>
            </div>
        </div>
    </div>

    <!-- Map -->

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
                      <a class="footer-nav-link" href="/datenschutz">Datenschutzerklärung</a>
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
    
       <!-- <div class="switcher-close">
            <i class="material-icons">close</i>
        </div>-->
        
    <!-- Google maps api call with api key -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyAGLO_M5VT7BsVdjMjciKoH1fFJWWdhDPU"></script>
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
