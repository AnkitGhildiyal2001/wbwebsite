<!DOCTYPE html>
<html lang="en">

<head>


    <!-- Required Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="Die Datenschutzerkl√§rung unserer Plattform zum nachlesen">

    <title>Datenschutz</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/favicon.ico') }}">

    <!--Core CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('new/assets/css/app.css')}}">
    <link id="theme-sheet" rel="stylesheet" href="{{ asset('new/assets/css/core.css')}}">
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
                        <h1 class="title main-title is-2">Datenschutz</h1>
                        <h2 class="subtitle is-5 is-light">
                        <p class="lead mb-0">Unsere Datenschutzerkl√§rung</p>
                        </h2>
                        <br />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Form section -->
    <div class="section section-feature-grey is-medium">
        <div class="container">
            <!-- Title -->
            <div class="">
                <div class="bg-number"><i class=""></i></div>
                <h2 class="title section-title  dark-text  has-text-centered">
                    Datenschutzerkl√§rung
                </h2>
                
                 <p class="pb-20 body-color has-text-centered text-size:">
                    Verantwortlich im Sinne der Datenschutzgesetzes:
                            WunderBrudis UG Armstr 1445355 Essen Datenschutz
                    </p>
                
            </div>

            <div class="content-wrapper">
                <div class="columns">
                   <div class="column is-11 is-offset-1">
                    <p class="pb-20 body-color">
                           
                    </p>

                    </h2>
                <div class="subtitle section-subtitle has-text-centered">
                    ¬ß1 Geltungsbereich und Anbieter
                </div>

                    <p class="pb-20 body-color">
                          (1) Die Allgemeinen Gesch√§ftsbedingungen (nachfolgend "AGB" genannt) regeln das Vertragsverh√§ltnis zwischen WunderBrudis UG (haftungsbeschr√§nkt) (nachfolgend Anbieter) und Ihnen (nachfolgend Besteller), in ihrer zum Zeitpunkt des Vertragsabschlusses g√ľltigen Fassung.<br>
                          (2) Abweichende AGB des Bestellers werden zur√ľckgewiesen.
Bitte lesen Sie diese Bedingungen aufmerksam, bevor Sie eine Dienstleistung der WunderBrudis UG (haftungsbeschr√§nkt) in Anspruch nehmen.<br>
                        (3) Auf WunderBrudis bieten wir Ihnen folgende Dienstleistungen an:
Vermittlung von Social-Media Influencer an Unternehmen Vermittlung von Produkten von Unternehmen an Influencer Versand von Produkten an Influencer im Auftrag von Unternehmen.

                    </p><br><br>
                    <div class="subtitle section-subtitle has-text-centered">
                    ¬ß2 Zustandekommen des Vertrages
                </div>

                    <p class="pb-20 body-color">
                          (1) Vertr√§ge auf diesem Portal k√∂nnen ausschlie√ülich in deutscher Sprache abgeschlossen werden.<br>
(2) Der Besteller muss das 18. Lebensjahr vollendet haben.<br>
(3) Der Zugang zur Nutzung des WunderBrudis-Service setzt die Anmeldung voraus.<br>
(4) Mit der Anmeldung erkennt der Besteller die vorliegenden AGB an. Mit der Anmeldung entsteht ein Vertragsverh√§ltnis zwischen WunderBrudis und dem angemeldeten Besteller, das sich nach den Regelungen dieser AGB richtet.<br>
(5) Die Pr√§sentation der Dienstleistung auf der Website stellt kein rechtlich wirksames Angebot dar. Durch die Pr√§sentation der Dienstleistung wird der Kunde 1/11 lediglich dazu aufgefordert ein Angebot zu machen.<br>
(6) Mit Bestellung eines kostenpflichtigen Dienstes geht der angemeldete Besteller ein weiteres, von der Anmeldung getrenntes Vertragsverh√§ltnis mit WunderBrudis ein. Der Nutzer wird vor Abschluss dieses Vertragsverh√§ltnisses √ľber den jeweiligen kostenpflichtigen Dienst und die Zahlungsbedingungen informiert. Das Vertragsverh√§ltnis entsteht indem der Besteller die Bestellung und Zahlungsverpflichtung durch das Anklicken des Buttons ‚ÄěKampagne ver√∂ffentlichen" best√§tigt.<br>
(7) Sie stimmen zu, dass Sie Rechnungen elektronisch erhalten. Elektronische Rechnungen werden Ihnen per E-Mail oder in dem Kundenkonto der Webseite zur Verf√ľgung gestellt. Wir werden Sie f√ľr jede Dienstleistung dar√ľber informieren, ob eine elektronische Rechnung verf√ľgbar ist. Weitere Informationen √ľber elektronische Rechnungen erhalten Sie auf unserer Website.<br>
                    </p><br><br>
                    <div class="subtitle section-subtitle has-text-centered">
                    ¬ß3 Beschreibung des Leistungsumfanges
                </div>

                    <p class="pb-20 body-color">
                        Der Leistungsumfang von WunderBrudis besteht aus folgenden Dienstleistungen:
Die Nutzung der Plattform WunderBrudis ist f√ľr Influencer entgeltfrei. F√ľr Unternehmen entstehen erst Kosten bei Buchung einer kostenpflichtigen Kampagne, oder bei Abschluss eines wiederkehrenden Abos.
                    </p><br><br>
                    <div class="subtitle section-subtitle has-text-centered">
                   ¬ß4 Preise und Versandkosten
                </div>

                    <p class="pb-20 body-color">
                       (1) Zur Nutzung von WunderBrudis ist zun√§chst eine Registrierung notwendig.<br>
(2) Um die Dienstleistungen der Website kaufen zu k√∂nnen, muss der Nutzer sich registrieren und ein Benutzerkonto erstellen.<br>
(3) Sofern der Nutzer einen kostenpflichtigen Dienst in Anspruch nehmen m√∂chte, wird er vorher auf die Kostenpflichtigkeit hingewiesen. So werden ihm insbesondere der jeweilige zus√§tzliche Leistungsumfang, die anfallenden Kosten und die Zahlungsweise aufgef√ľhrt.<br>
(4) Der Anbieter beh√§lt sich das Recht vor, f√ľr verschiedene Buchungszeitpunkte und Nutzergruppen und insbesondere f√ľr verschiedene Nutzungszeitr√§ume unterschiedliche Entgeltmodelle zu berechnen, wie auch verschiedene 2/11 Leistungsumf√§nge anzubieten.
                    </p><br><br>
                    <div class="subtitle section-subtitle has-text-centered">
                    ¬ß5 Zahlungsbedingungen
                </div>

                    <p class="pb-20 body-color">
                          (1) Ein anfallendes Entgelt ist im Voraus, zum Zeitpunkt der F√§lligkeit ohne Abzug an WunderBrudis zu entrichten.<br>
(2) Mit der Anmeldung, der Angabe der f√ľr das Bezahlverfahren notwendigen Informationen sowie der Nutzung des kostenpflichtigen Dienstes erteilt der Nutzer dem Betreiber die Erm√§chtigung zum Einzug des entsprechenden Betrags.<br>
(3) Ein kostenpflichtiger Dienst verl√§ngert sich um den jeweils gebuchten Zeitraum (Abonnement) automatisch, soweit dieser nicht per Telefon, E-Mail oder Brief gek√ľndigt wird.<br>
(4) Das Abonnement wird zum folgenden Zeitpunkt eingezogen: Bei Abschluss der Buchung.<br>
(5) Bestimmte Zahlungsarten k√∂nnen im Einzelfall von dem Anbieter ausgeschlossen werden.<br>
(6) Dem Besteller ist nicht gestattet die Dienstleistung durch das Senden von Bargeld oder Schecks zu bezahlen.<br>
(7) Sollte der Besteller ein Online-Zahlungsverfahren w√§hlen, erm√§chtigt der Besteller den Anbieter dadurch, die f√§lligen Betr√§ge zum Zeitpunkt der Bestellung einzuziehen.<br>
(8) Sollte der Anbieter die Bezahlung per Vorkasse anbieten und der Besteller diese Zahlungsart w√§hlen, hat der Besteller den Rechnungsbetrag innerhalb von f√ľnf Kalendertagen nach Eingang der Bestellung, auf das Konto des Anbieters zu √ľberweisen.<br>
(9) Sollte der Anbieter die Bezahlung per Kreditkarte anbieten und der Besteller diese Zahlungsart w√§hlen, erm√§chtigt dieser den Anbieter ausdr√ľcklich dazu, die f√§lligen Betr√§ge einzuziehen.<br>
(10) Sollte der Anbieter die Bezahlung per Lastschrift anbieten und der Besteller diese Zahlungsart w√§hlen, erteilt der Besteller dem Anbieter ein SEPA Basismandat. Sollte es bei der Zahlung per Lastschrift zu einer R√ľckbuchung einer Zahlungstransaktion mangels Kontodeckung oder aufgrund falsch √ľbermittelter Daten der Bankverbindung kommen, so hat der Besteller daf√ľr die Kosten zu tragen.<br>
(11) Sollte der Besteller mit der Zahlung in Verzug kommen, so beh√§lt sich der 3/11 Anbieter die Geltendmachung des Verzugschadens vor.<br>
(12) Die Abwicklung kann √ľber folgende Zahlungsmittel erfolgen:
Paypal Kreditkarte Lastschrift:<br>
Im Falle einer vom Besteller zu vertretenden R√ľcklastschrift erhebt die WunderBrudis UG (haftungsbeschr√§nkt) einen pauschalierten Schadensersatz in H√∂he von 8 ‚ā¨ (acht Euro). Der Besteller kann nachweisen, dass ein Schaden √ľberhaupt nicht entstanden oder wesentlich niedriger ist als die Pauschale. Die vorstehenden Regelungen gelten entsprechend f√ľr Zahlungen des Kaufpreises von Waren, die von Drittanbietern verkauft werden Sofort√ľberweisung Vorkasse
                    </p><br><br>
                    
                    <div class="subtitle section-subtitle has-text-centered">
                    ¬ß6 Anmeldung und K√ľndigung
                </div>

                    <p class="pb-20 body-color">
                            (1) Weiterhin erkl√§rt der Besteller, dass er und nach seiner Kenntnis auch kein Mitglied seines Haushaltes nicht wegen einer vors√§tzlichen Straftat die die Sicherheit von Dritten gef√§hrdet vorbestraft ist, insbesondere nicht wegen einer Straftat gegen die sexuelle Selbstbestimmung (¬ß¬ß 174 ff. StGB, einer Straftat gegen das Leben (¬ß¬ß 211 ff. StGB), einer Straftat gegen die k√∂rperliche Unversehrtheit (¬ß 223 ff. StGB), einer Straftat gegen die pers√∂nliche Freiheit (¬ß¬ß 232 ff. StGB), oder wegen eines Diebstahl und Unterschlagung (¬ß¬ß 242 ff. StGB) oder des Raubes und der Erpressung (¬ß¬ß 249 ff. StGB) oder wegen Drogenmissbrauch.<br>
(2) Ein Nutzerkonto ist f√ľr seine/ihre alleinige und pers√∂nliche Nutzung und ein Nutzer darf Dritte nicht autorisieren dieses Konto zu nutzen. Ein Nutzer darf sein/ ihr Konto nicht an Dritte √ľbertragen.<br>
(3) Ein Nutzer ist, unter Vorbehalt, jederzeit berechtigt, sich ohne Angabe eines Grundes schriftlich per Post, E-Mail oder Telefon abzumelden. Gleichzeitig besteht bei die M√∂glichkeit, innerhalb der Daten und Einstellungen im Nutzer-Account diesen vollst√§ndig und eigenh√§ndig zu deaktivieren. Das vorher geschlossene Vertragsverh√§ltnis ist damit beendet.<br>
(4) Hat ein Nutzer sich f√ľr einen entgeltlichen Dienst angemeldet, so kann er sp√§testens 3 Tage vor dem Buchungszeitraumes k√ľndigen. Wird diese Frist nicht 4/11 eingehalten, so verl√§ngert sich der kostenpflichtige Dienst je nach gew√§hlter Buchungszeit um diese und die K√ľndigung wird erst zum Ende des Folgebuchungszeitraumes wirksam. Eine K√ľndigung ist per Telefon, E-Mail oder Brief m√∂glich und wird von uns schriftlich best√§tigt. Damit Ihre K√ľndigung zugeordnet werden kann sollen der vollst√§ndige Name, die hinterlegte E-Mail-Adresse und die Anschrift des Kunden angegeben werden. Im Fall einer K√ľndigung per Telefon wird das individuelle Telefon-Passwort ben√∂tigt.<br>
(5) WunderBrudis kann den Vertrag nach eigenem Ermessen, mit oder ohne vorherige Ank√ľndigung und ohne Angabe von Gr√ľnden, zu jeder Zeit k√ľndigen. WunderBrudis h√§lt sich weiterhin das Recht vor, Profile und /oder jeden Inhalt der auf der Website durch oder von dem Nutzer ver√∂ffentlich wurde zu entfernen. Falls WunderBrudis die Registrierung des Nutzers beendet und/oder Profile oder ver√∂ffentliche Inhalte des Nutzers entfernt, besteht f√ľr WunderBrudis keine Verpflichtung den Nutzer dar√ľber noch √ľber den Grund der Beendigung oder der Entfernung zu informieren.<br>
(6) Im Anschluss an jede Beendigung von jedweder individuellen Nutzung der Services von WunderBrudis, h√§lt WunderBrudis sich das Recht vor, eine Information hier√ľber an andere registrierte Nutzer mit denen WunderBrudis annimmt, dass diese in Kontakt mit dem Nutzer standen, zu versenden. WunderBrudis's Entscheidung die Registrierung des Nutzers zu beenden und/oder weitere Nutzer zu benachrichtigen mit dem WunderBrudis annimmt, dass der Nutzer in Kontakt stand, impliziert nicht bzw. sagt keinesfalls aus, dass WunderBrudis Aussagen √ľber den individuellen Charakter, generelle Reputation, pers√∂nliche Charakteristika noch √ľber den Lebensstil trifft.<br>
(7) Die Nutzer sind verpflichtet, in Ihrem Profil und sonstigen Bereichen des Portals keine absichtlichen oder betr√ľgerischen Falschangaben zu machen. Solche Angaben k√∂nnen zivilrechtliche Schritte nach sich ziehen. Der Betreiber beh√§lt sich dar√ľber hinaus das Recht vor, in einem solchen Fall das bestehende Vertragsverh√§ltnis mit sofortiger Wirkung aufzul√∂sen.<br>
(8) Wird der Zugang eines Nutzers wegen schuldhaften Vertragsversto√ües gesperrt und/oder das Vertragsverh√§ltnis aufgel√∂st, hat der Nutzer f√ľr die verbleibende Vertragslaufzeit Schadenersatz in H√∂he des vereinbarten Entgelts abz√ľglich der ersparten Aufwendungenzu zahlen. Die H√∂he der ersparten Aufwendungen wird pauschal auf 10% des Entgelts angesetzt. Es bleibt beiden Vertragsparteien unbenommen nachzuweisen, dass der Schaden, und/oder die ersparten Aufwendungen tats√§chlich h√∂her oder niedriger sind.<br>
(9) Nach Beendigung des Vertragsverh√§ltnisses werden s√§mtliche Daten des Nutzers von WunderBrudis gel√∂scht.
5/11
                    </p><br><br>
                    <div class="subtitle section-subtitle has-text-centered">
                    ¬ß7 Haftungsbegrenzung (Dienstleistungen)
                </div>

                    <p class="pb-20 body-color">
                           (1) WunderBrudis √ľbernimmt keine Verantwortung f√ľr den Inhalt und die Richtigkeit der Angaben in den Anmelde- und Profildaten der Besteller sowie weiteren von den Bestellern generierten Inhalten.<br>
(2) In Bezug auf die gesuchte oder angebotene Dienstleistung kommt der Vertrag ausschlie√ülich zwischen den jeweilig beteiligten Bestellern zustande. Daher haftet WunderBrudis nicht f√ľr Leistungen der teilnehmenden Besteller. Entsprechend sind alle Angelegenheiten bzgl. der Beziehung zwischen den Bestellern einschlie√ülich, und ohne Ausnahme, der Dienstleistungen die ein Suchender erhalten hat oder Zahlungen die an Besteller f√§llig sind, direkt an die jeweilige Partei des zu richten. WunderBrudis kann hierf√ľr nicht verantwortlich gemacht werden und widerspricht hiermit ausdr√ľcklich allen etwaigen Haftungsanspr√ľchen welcher Art auch immer einschlie√ülich Forderungen, Leistungen, direkte oder indirekte Besch√§digungen jeder Art, bewusst oder unbewusst, vermutet oder unvermutet, offengelegt oder nicht, in welcher Art auch immer im Zusammenhang mit den genannten Angelegenheiten.<br>
(3) F√ľr Sch√§den aus der Verletzung des Lebens, des K√∂rpers oder der Gesundheit haftet WunderBrudis UG (haftungsbeschr√§nkt) nur, wenn sie auf einer vors√§tzlichen oder fahrl√§ssigen Pflichtverletzung von WunderBrudis UG (haftungsbeschr√§nkt) oder einer vors√§tzlichen oder fahrl√§ssigen Pflichtverletzung eines gesetzlichen Vertreters oder Erf√ľllungsgehilfen von WunderBrudis UG (haftungsbeschr√§nkt) beruhen.<br>
(4) F√ľr sonstige Sch√§den, soweit sie nicht auf der Verletzung von Kardinalpflichten (solche Pflichten, deren Erf√ľllung die ordnungsgem√§√üe Durchf√ľhrung des Vertrages √ľberhaupt erst erm√∂glichen und auf deren Einhaltung der Vertragspartner regelm√§√üig vertrauen darf) beruhen, haftet WunderBrudis UG (haftungsbeschr√§nkt) Europe nur, wenn sie auf einer vors√§tzlichen oder grob fahrl√§ssigen Pflichtverletzung von WunderBrudis UG (haftungsbeschr√§nkt) oder auf einer vors√§tzlichen oder grob fahrl√§ssigen Pflichtverletzung eines gesetzlichen Vertreters oder Erf√ľllungsgehilfen von WunderBrudis UG (haftungsbeschr√§nkt) beruhen.<br>
(5) Die Schadensersatzanspr√ľche sind, auf den vorhersehbaren, vertragstypischen Schaden begrenzt. Sie betragen im Falle des Verzuges h√∂chstens 5% des Auftragswertes.<br>
(6) Schadenersatzanspr√ľche, die auf der Verletzung des Lebens, des K√∂rpers oder der Gesundheit oder der Freiheit beruhen, verj√§hren nach 30 Jahren; im √úbrigen nach 1 Jahr, wobei die Verj√§hrung mit dem Schluss des Jahres, in dem der Anspruch entstanden ist und der Gl√§ubiger von den Anspruch begr√ľndenden Umst√§nden und der Person des Schuldners Kenntnis erlangt oder ohne grobe Fahrl√§ssigkeit erlangen m√ľsste (¬ß 199 Abs.1 BGB).
6/11<br>

(7) Der Anbieter beh√§lt sich das Recht vor, den Inhalt eines von einem Nutzer verfassten Textes sowie hochgeladener Dateien auf die Einhaltung von Gesetz und Recht hin zu √ľberpr√ľfen und, wenn n√∂tig, ganz oder teilweise zu l√∂schen.
                    </p><br><br>
                       <div class="subtitle section-subtitle has-text-centered">
                    ¬ß8 Aufrechnung und Zur√ľckbehaltungsrecht
                </div>

                    <p class="pb-20 body-color">
                            (1) Dem Besteller steht das Recht zur Aufrechnung nur zu, wenn die Gegenforderung des Bestellers rechtskr√§ftig festgestellt worden ist oder von dem Anbieter nicht bestritten wurde.<br>
(2) Der Besteller kann ein Zur√ľckbehaltungsrecht nur aus√ľben, soweit Ihre Gegenforderung auf demselben Vertragsverh√§ltnis beruht.
                    </p>
                       <div class="subtitle section-subtitle has-text-centered">
                    ¬ß9 Widerrufsbelehrung
                </div>

                    <p class="pb-20 body-color">
                    (1) Ist der Besteller ein Verbraucher, so hat er ein Widerrufsrecht nach Ma√ügabe der folgenden Bestimmungen:<br>
(2) Widerrufsrecht Sie haben das Recht, binnen vierzehn Tagen ohne Angabe von Gr√ľnden diesen Vertrag zu widerrufen. Die Widerrufsfrist f√ľr Dienstleistungen betr√§gt vierzehn Tage ab dem Tag des Vertragsabschlusses.
Um Ihr Widerrufsrecht auszu√ľben, m√ľssen Sie uns:<br>
WunderBrudis UG (haftungsbeschr√§nkt) Armstr, 14 45355 Essen<br>
Telefon: 0201/83888900<br>
E-Mail: mail@wunderbrudis.de<br>
mittels einer eindeutigen Erkl√§rung (z. B. ein mit der Post versandter Brief, Telefax oder E-Mail) √ľber Ihren Entschluss, diesen Vertrag zu widerrufen, informieren. Sie k√∂nnen daf√ľr das Muster-Widerrufsformular auf unserer Internetseite verwenden 7/11 oder uns eine andere eindeutige Erkl√§rung √ľbermitteln. Machen Sie von dieser M√∂glichkeit Gebrauch, so werden wir Ihnen unverz√ľglich (z.B. per E-Mail) eine Best√§tigung √ľber den Eingang eines solchen Widerrufs √ľbermitteln. Zur Wahrung der Widerrufsfrist reicht es aus, dass Sie die Mitteilung √ľber die Aus√ľbung des Widerrufsrechts vor Ablauf der Widerrufsfrist absenden und Sie die Waren √ľber unser Online-R√ľcksendezentrum innerhalb der unten definierten Frist zur√ľckgesendet haben. F√ľr zus√§tzliche Informationen hinsichtlich der Reichweite, des Inhalts und Erl√§uterungen zur Aus√ľbung wenden Sie sich bitte an unseren Kundenservice.<br>
(3) Folgen des Widerrufs Wenn Sie diesen Vertrag widerrufen, haben wir Ihnen alle Zahlungen, die wir von Ihnen erhalten haben, einschlie√ülich der Lieferkosten (mit Ausnahme der zus√§tzlichen Kosten, die sich daraus ergeben, dass Sie eine andere Art der Lieferung als die von uns angebotene, g√ľnstigste Standardlieferung gew√§hlt haben), unverz√ľglich und sp√§testens binnen 14 Tagen ab dem Tag zur√ľckzuzahlen, an dem die Mitteilung √ľber Ihren Widerruf dieses Vertrags bei uns eingegangen ist. F√ľr diese R√ľckzahlung verwenden wir dasselbe Zahlungsmittel, das Sie bei der urspr√ľnglichen Transaktion eingesetzt haben, es sei denn, mit Ihnen wurde ausdr√ľcklich etwas anderes vereinbart; in keinem Fall werden Ihnen wegen dieser R√ľckzahlung Entgelte berechnet. Haben Sie verlangt, dass die Dienstleistungen w√§hrend der Widerrufsfrist beginnen sollen, so haben Sie uns einen angemessenen Betrag zu zahlen, der dem Anteil der bis zu dem Zeitpunkt, zu dem Sie uns von der Aus√ľbung des Widerrufsrechts hinsichtlich dieses Vertrags unterrichten, bereits erbrachten Dienstleistungen im Vergleich zum Gesamtumfang der im Vertrag vorgesehenen Dienstleistungen entspricht.<br>
(4) Ausnahmen vom Widerrufsrecht Sie m√ľssen f√ľr einen etwaigen Wertverlust der Waren nur aufkommen, wenn dieser Wertverlust auf einen zur Pr√ľfung der Beschaffenheit, Eigenschaften und Funktionsweise der Waren nicht notwendigen Umgang mit ihnen zur√ľckzuf√ľhren ist. Das Widerrufsrecht besteht nicht bzw. erlischt bei folgenden Vertr√§gen: zur Lieferung von Waren, die aus Gr√ľnden des Gesundheitsschutzes oder aus Hygienegr√ľnden nicht zur R√ľckgabe geeignet sind und deren Versiegelung nach der Lieferung entfernt wurde oder die nach der Lieferung aufgrund ihrer Beschaffenheit untrennbar mit anderen G√ľtern vermischt wurden;
8/11 zur Lieferung von Ton- oder Videoaufnahmen oder Computersoftware in einer versiegelten Packung, wenn die Versiegelung nach der Lieferung entfernt wurde; zur Lieferung von Waren, die nach Kundenspezifikation angefertigt werden oder eindeutig auf die pers√∂nlichen Bed√ľrfnisse zugeschnitten sind
zur Lieferung von Waren, die schnell verderben k√∂nnen oder deren Verfallsdatum schnell √ľberschritten w√ľrde;
bei Dienstleistungen, wenn WunderBrudis diese vollst√§ndig erbracht hat und Sie vor der Bestellung zur Kenntnis genommen und ausdr√ľcklich zugestimmt haben, dass wir mit der Erbringung der Dienstleistung beginnen k√∂nnen und Sie Ihr Widerrufsrecht bei vollst√§ndiger Vertragserf√ľllung verlieren;
zur Lieferung von Zeitungen, Zeitschriften oder Illustrierte, mit Ausnahme von Abonnement-Vertr√§gen; und
zur Lieferung alkoholischer Getr√§nke, deren Preis beim Abschluss des Kaufvertrags vereinbart wurde, deren Lieferung aber erst nach 30 Tagen erfolgen kann und deren aktueller Wert von Schwankungen auf dem Markt abh√§ngt, auf die der Unternehmer keinen Einfluss hat.
                    </p><br><br>
                       <div class="subtitle section-subtitle has-text-centered">
                    ¬ß 10 Datenschutz
                </div>

                    <p class="pb-20 body-color">
                            (1) Sollten personenbezogene Daten (z.B. Name, Anschrift, E-Mail-Adresse) erhoben werden, verpflichten wir uns dazu, Ihre vorherige Einverst√§ndnis einzuholen. Wir verpflichten uns dazu, keine Daten an Dritte weiterzugeben, es sei denn, Sie haben zuvor eingewilligt.<br>
(2) Wir weisen darauf hin, dass die √úbertragung von Daten im Internet (z. B. per E- Mail) Sicherheitsl√ľcken aufweisen kann. Demnach kann ein fehlerfreier und st√∂rungsfreier Schutz der Daten Dritter nicht vollst√§ndig gew√§hrleistet werden. Diesbez√ľglich ist unsere Haftung ausgeschlossen.<br>
(3) Dritte sind nicht dazu berechtigt, Kontaktdaten f√ľr gewerbliche Aktivit√§ten zu nutzen, sofern der Anbieter den betroffenen Personen vorher eine schriftliche Einwilligung erteilt hat.<br>
(4) Sie haben jederzeit das Recht, von WunderBrudis √ľber den Sie betreffenden Datenbestand vollst√§ndig und unentgeltlich Auskunft zu erhalten.<br>
(5) Des Weiteren besteht ein Recht auf Berichtigung/L√∂schung von Daten/Einschr√§nkung der Verarbeitung f√ľr den Nutzer.9/11
                    </p><br><br>
                       <div class="subtitle section-subtitle has-text-centered">
                    ¬ß 11 Cookies
                </div>

                    <p class="pb-20 body-color">
                    (1) Zur Anzeige des Produktangebotes kann es vorkommen, dass wir Cookies einsetzen. Bei Cookies handelt es sich um kleine Textdateien, die lokal im Zwischenspeicher des Internet-Browsers des Seitenbesuchers gespeichert werden.<br>
(2) Zahlreiche Internetseiten und Server verwenden Cookies. Viele Cookies enthalten eine sogenannte Cookie-ID. Eine Cookie-ID ist eine eindeutige Kennung des Cookies. Sie besteht aus einer Zeichenfolge, durch welche Internetseiten und Server dem konkreten Internetbrowser zugeordnet werden k√∂nnen, in dem das Cookie gespeichert wurde. Dies erm√∂glicht es den besuchten Internetseiten und Servern, den individuellen Browser der betroffenen Person von anderen Internetbrowsern, die andere Cookies enthalten, zu unterscheiden. Ein bestimmter Internetbrowser kann √ľber die eindeutige Cookie-ID wiedererkannt und identifiziert werden.<br>
(3) Durch den Einsatz von Cookies kann den Nutzern dieser Internetseite nutzerfreundlichere Services bereitstellen, die ohne die Cookie-Setzung nicht m√∂glich w√§ren.<br>
(4) Wir weisen Sie darauf hin, dass einige dieser Cookies von unserem Server auf Ihr Computersystem √ľberspielt werden, wobei es sich dabei meist um so genannte sitzungsbezogene Cookies handelt. Sitzungsbezogene Cookies zeichnen sich dadurch aus, dass diese automatisch nach Ende der Browser-Sitzung wieder von Ihrer Festplatte gel√∂scht werden. Andere Cookies verbleiben auf Ihrem Computersystem und erm√∂glichen es uns, Ihr Computersystem bei Ihrem n√§chsten Besuch wieder zu erkennen (sog. dauerhafte Cookies).<br>
(5) Sie k√∂nnen der Speicherung von Cookies widersprechen, hierzu steht Ihnen ein Banner zu Verf√ľgung dem Sie widersprechen/annehmen k√∂nnen.<br>
(6) Selbstverst√§ndlich k√∂nnen Sie Ihren Browser so einstellen, dass keine Cookies auf der Festplatte abgelegt werden bzw. bereits abgelegte Cookies wieder gel√∂scht werden. Die Anweisungen bez√ľglich der Verhinderung sowie L√∂schung von Cookies k√∂nnen Sie der Hilfefunktion Ihres Browsers oder Softwareherstellers entnehmen.
                    </p><br><br>
                       <div class="subtitle section-subtitle has-text-centered">
                    ¬ß 12 Gerichtsstand und anwendbares Recht
                </div>

                    <p class="pb-20 body-color">
                            (1) F√ľr Meinungsverschiedenheiten und Streitigkeiten anl√§sslich dieses Vertrages gilt ausschlie√ülich das Recht der Bundesrepublik Deutschland unter Ausschluss des UN- Kaufrechts. 10/11<br>

(2) Alleiniger Gerichtsstand bei Bestellungen von Kaufleuten, juristischen Personen des √∂ffentlichen Rechts oder √∂ffentlich-rechtlichen Sonderverm√∂gen ist der Sitz des Anbieters.
                    
                     </p><br><br>
                       <div class="subtitle section-subtitle has-text-centered">
                    ¬ß 13 Schlussbestimmungen
                </div>

                    <p class="pb-20 body-color">
                     (1) Vertragssprache ist deutsch.<br>
(2) Wir bieten keine Produkte oder Dienstleistungen zum Kauf durch Minderj√§hrige an. Unsere Produkte f√ľr Kinder k√∂nnen nur von Erwachsenen gekauft werden. Falls Sie unter 18 sind, d√ľrfen Sie WunderBrudis nur unter Mitwirkung eines Elternteils oder Erziehungsberechtigten nutzen.<br>
(3) Wenn Sie diese AGB verletzen und wir unternehmen hiergegen nichts, sind wir weiterhin berechtigt, von unseren Rechten bei jeder anderen Gelegenheit, in der Sie diese Verkaufsbedingungen verletzen, Gebrauch zu machen.<br>
(4) Wir behalten uns das Recht vor, √Ąnderungen an unserer Webseite, Regelwerken, Bedingungen einschlie√ülich dieser AGB jederzeit vorzunehmen. Auf Ihre Bestellung finden jeweils die Verkaufsbedingungen, Vertragsbedingungen und AGB Anwendung, die zu dem Zeitpunkt Ihrer Bestellung in Kraft sind, es sei denn eine √Ąnderung an diesen Bedingungen ist gesetzlich oder auf beh√∂rdliche Anordnung erforderlich (in diesem Fall finden sie auch auf Bestellungen Anwendung, die Sie zuvor get√§tigt haben). Falls eine Regelung in diesen Verkaufsbedingungen unwirksam, nichtig oder aus irgendeinem Grund undurchsetzbar ist, gilt diese Regelung als abtrennbar und beeinflusst die G√ľltigkeit und Durchsetzbarkeit der verbleibenden Regelungen nicht.<br>
(5) Die Unwirksamkeit einer Bestimmung ber√ľhrt die Wirksamkeit der anderen Bestimmungen aus dem Vertrag nicht. Sollte dieser Fall eintreten, soll die Bestimmung nach Sinn und Zweck durch eine andere rechtlich zul√§ssige Bestimmung ersetzt werden, die dem Sinn und Zweck der unwirksamen Bestimmung entspricht. 11/11
                     </p><br><br>
                
                 </div>
              </div>
            </div>
        </div>
    </div>


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
                        <a class="footer-nav-link" href="/datenschutz">Datenschutzerkl√§rung</a>
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
