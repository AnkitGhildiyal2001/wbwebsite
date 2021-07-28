@php $configData = Helper::applClasses(); @endphp
<div class="main-menu menu-fixed {{($configData['theme'] === 'light') ? " menu-dark " : "menu-dark "}} menu-accordion menu-shadow" data-scroll-to-active="true" style="z-index: 5001;">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="{{ route('dashboard') }}">
                    <div class="brand-logo"></div>
                    <h2 class="brand-text mb-0">WunderBrudis</h2>
                </a>
            </li>
            <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                    <i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i>
                    <i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block primary collapse-toggle-icon" data-ticon="icon-disc">
          </i>
                </a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content ps">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
                <a href="/dashboard">
                    <i class="feather icon-home"></i>
                    <span class="menu-title" data-i18n="">Dashboard</span>
                </a>
            </li>

            <li class="nav-item {{ (request()->is('profile*')) ? 'active' : '' }}">
                <a href="{{ route('profile.index') }}">
                    <i class="feather icon-users"></i>
                    <span class="menu-title" data-i18n="">Profil</span>
                </a>
            </li>

            <li class="nav-item {{ (request()->is('kampagne*')) ? 'open' : '' }} has-sub">
                <a href="">
                    <i class="feather icon-dollar-sign"></i>
                    <span class="menu-title" data-i18n="">Kampagnen</span>
                </a>
                <ul class="menu-content">
                    <li class="{{ (request()->is('meine-kampagnen')) ? 'active' : '' }}"">
                        <a href="{{ route('user.campaign.index') }}">
                            <i class="feather icon-users"></i>
                            <span class="menu-title" data-i18n="">Meine Kampagnen</span>
                        </a>
                    </li>
                    @if (!auth()->user()->isCompany())
                    <li class="{{ (request()->is('kampagnen')) ? 'active' : '' }}">
                        <a href="{{ route('campaign.index') }}">
                            <i class="feather icon-edit-1"></i>
                            <span class="menu-title" data-i18n="">Alle Kampagnen</span>
                        </a>
                    </li>
                    @endif
                </ul>
            </li>

            @if (auth()->user()->isCompany())
            <li class="nav-item {{ (request()->is('produkt*')) ? 'active' : '' }}">
                <a href="{{ route('product.index') }}">
                    <i class="feather icon-package"></i>
                    <span class="menu-title" data-i18n="">Produkte</span>
                </a>
            </li>
            @endif

            <li class="nav-item {{ (request()->is('nachrichten')) ? 'active' : '' }}">
                <a href="{{ route('chatroom.index') }}">
                    <i class="feather icon-mail"></i>
                    <span class="menu-title" data-i18n="">Nachrichten</span>
                </a>
            </li>

            <li class="nav-item has-sub">
                <a href="">
                    <i class="feather icon-settings"></i>
                    <span class="menu-title" data-i18n="">Einstellungen</span>
                </a>
                <ul class="menu-content">
                    <li class="">
                        <a href="{{ route('account.password') }}">
                            <i class="feather icon-users"></i>
                            <span class="menu-title" data-i18n="">Passwort ändern</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="{{ route('account.address') }}">
                            <i class="feather icon-edit-1"></i>
                            <span class="menu-title" data-i18n="">Adresse</span>
                        </a>
                    </li>
                </ul>
            @if (auth()->user()->isCompany())
            <li class="">
                <a href="{{ route('billing') }}">
                    <i class="feather icon-credit-card"></i>
                    <span class="menu-title" data-i18n="">Mitgliedschaft</span>
                </a>
            </li>
@endif
            </li>
            <!-- <li class="">
            PLATZHALTER FÜR BRUDICADEMY
                <a href="{{ route('chapters') }}">
                    <i class="feather icon-credit-card"></i>
                    <span class="menu-title" data-i18n="">Chapters</span>
                </a>
            </li> -->
            <li class="nav-item position-absolute" style="bottom: 0; right: 0;">
              <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="feather icon-log-out"></i>
                    <span class="menu-title" data-i18n="">Logout</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </li>
        </ul>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
        </div>
    </div>

</div>
<!-- END: Main Menu-->