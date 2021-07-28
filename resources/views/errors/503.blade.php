<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8" />
    <title>Wartungsarbeiten!</title>
    <meta name="author" content="wunderbrudis" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Libs CSS -->
    <link type="text/css" media="all" href="{{ asset('assets') }}/boostrap-files/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Template CSS -->
    <link type="text/css" media="all" href="{{ asset('assets') }}/css/style.css" rel="stylesheet" />
    <!-- Responsive CSS -->
    <link type="text/css" media="all" href="{{ asset('assets') }}/css/respons.css" rel="stylesheet" />

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets') }}/img/favicons/favicon144x144.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets') }}/img/favicons/favicon114x114.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets') }}/img/favicons/favicon72x72.png" />
    <link rel="apple-touch-icon" href="{{ asset('assets') }}/img/favicons/favicon57x57.png" />
    <link rel="shortcut icon" href="{{ asset('assets') }}/img/favicons/favicon.png" />

    <script src="{{ asset('assets') }}/js/createjs.min.js"></script>
    <script src="{{ asset('assets') }}/js/dinosaur.js"></script>
    <script>
        var canvas, stage, exportRoot;
        function init() {
            canvas = document.getElementById("canvas");
            handleComplete();
        }
        function handleComplete() {
            //This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
            exportRoot = new lib.dinosaur();
            stage = new createjs.Stage(canvas);
            stage.addChild(exportRoot);
            //Registers the "tick" event listener.
            createjs.Ticker.setFPS(lib.properties.fps);
            createjs.Ticker.addEventListener("tick", stage);
            //Code to support hidpi screens and responsive scaling.
            (function(isResp, respDim, isScale, scaleType) {
                var lastW, lastH, lastS=1;
                window.addEventListener('resize', resizeCanvas);
                resizeCanvas();
                function resizeCanvas() {
                    var w = lib.properties.width, h = lib.properties.height;
                    var iw = window.innerWidth, ih=window.innerHeight;
                    var pRatio = window.devicePixelRatio, xRatio=iw/w, yRatio=ih/h, sRatio=1;
                    if(isResp) {
                        if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {
                            sRatio = lastS;
                        }
                        else if(!isScale) {
                            if(iw<w || ih<h)
                                sRatio = Math.min(xRatio, yRatio);
                        }
                        else if(scaleType==1) {
                            sRatio = Math.min(xRatio, yRatio);
                        }
                        else if(scaleType==2) {
                            sRatio = Math.max(xRatio, yRatio);
                        }
                    }
                    canvas.width = w*pRatio*sRatio;
                    canvas.height = h*pRatio*sRatio;
                    canvas.style.width = w*sRatio-15+'px';
                    canvas.style.height = h*sRatio-15+'px';
                    stage.scaleX = pRatio*sRatio;
                    stage.scaleY = pRatio*sRatio;
                    lastW = iw; lastH = ih; lastS = sRatio;
                }
            })(true,'both',false,1);
        }
    </script>

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300italic,800italic,800,700italic,700,600italic,600,400italic,300' rel='stylesheet' type='text/css' />

</head>
<body onload="init();">

<!-- Load page -->
<div class="animationload">
    <div class="loader">
    </div>
</div>
<!-- End load page -->


<!-- Content Wrapper -->
<div id="wrapper">
    <div class="container">

        <!-- Dinosaur -->
        <div class="dinosaur">
            <canvas id="canvas" width="700" height="310" style="display: block;"></canvas>
        </div>
        <!-- end Dinosaur -->

        <!-- Info -->
        <div class="info">
            <h2>Brudi, wir haben da ein kleines Problem...</h2>
            <p>Unsere Seite befindet sich momentan im Wartungsmodus. Versuche es in wenigen Minuten erneut & freue dich auf die Neuerungen die kommen!</p>
            <a onclick="Intercom('show');" class="btn1">Kontakt</a>
        </div>
        <!-- end Info -->

    </div>
    <!-- end container -->
</div>
<!-- end Content Wrapper -->

<!-- Scripts -->
<script src="{{ asset('assets') }}/js/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="{{ asset('assets') }}/boostrap-files/js/bootstrap.min.js" type="text/javascript"></script>
<script src="{{ asset('assets') }}/js/modernizr.custom.js" type="text/javascript"></script>
<script src="{{ asset('assets') }}/js/scripts.js" type="text/javascript"></script>

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