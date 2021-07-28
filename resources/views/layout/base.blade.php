<!DOCTYPE html>
<html lang="de"
    data-textdirection="{{ env('MIX_CONTENT_DIRECTION') === 'rtl' ? 'rtl' : 'ltr' }}">

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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') - WunderBrudis</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/favicon.ico') }}">
    <script>
        (function(c,o,v,i,e,w){c[v]=c[v]||function(){(c[v].a=c[v].a||[]).push(arguments)};var s=o.createElement(i);s.src=e;s.async=1;var h=o.getElementsByTagName(i)[0];h.parentNode.insertBefore(s,h);c.addEventListener('error',function(err){c[v]('error',err)});c.addEventListener('message',function(msg){c[v]('message',msg)})})(window,document,'coview','script','https://cdn.coview.com/coview.js')
        coview('start', {
            projectKey:'H3xy7KVI8pY'
        });
    </script>
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
    @endif

    <link rel="stylesheet" href="{{ asset(mix('css/pages/dashboard-analytics.css')) }}">
    @include('panels/styles')
</head>

<body class="{{ !auth()->user()->isCompany() && !auth()->user()->hasCategoriesSet() ? 'body-onboarding-bg ' : '' }} vertical-layout vertical-menu-modern 2-columns {{ auth()->user()->darkmode ? 'dark-layout' : '' }} navbar-floating menu-expanded footer-static @yield('body-class')" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="{{ auth()->user()->darkmode ? 'dark' : 'light' }}">
    @if (!auth()->user()->isCompany() && !auth()->user()->hasCategoriesSet())
        @include('layout.partials.onboarding')
    @endif
    @include('layout.partials.sidebar')
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PBDZSCD"
                      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!-- BEGIN: Content-->
    <div class="app-content content" id="app">
        <!-- BEGIN: Header-->
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>

        @include('layout.partials.navbar')

        <!-- END: Header-->
        
        <div class="content-wrapper mx-2 mx-md-0">
            @if(\Session::has('status'))
                <div>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ \Session::get('status') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                </div>
            @endif
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">@yield('title')</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                @yield('content')
            </div>
        </div>

    </div>
    <!-- End: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static  footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; {{ now()->year }}          
                    WunderBrudis </span><span class="float-md-right d-none d-md-block">Made with<i
                    class="feather icon-heart pink"></i> in Essen</span>
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->

    {{-- Vendor Scripts --}}
    <script src="{{ asset(mix('vendors/js/vendors.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/ui/prism.min.js')) }}"></script>
    @yield('vendor-script')
    {{-- Theme Scripts --}}
    <script src="{{ asset(mix('js/core/app-menu.js')) }}"></script>
    <script src="{{ asset(mix('js/core/app.js')) }}"></script>
    <script src="{{ asset(mix('js/scripts/components.js')) }}"></script>
    {{-- @if($configData['blankPage'] == false)
    <script src="{{ asset(mix('js/scripts/customizer.js')) }}"></script>
    <script src="{{ asset(mix('js/scripts/footer.js')) }}"></script>
    @endif --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/ms/jquery.multi-select.js') }}" defer></script>
    {{-- page script --}}
    @yield('page-script')
    {{-- page script --}}

</body>

</html>