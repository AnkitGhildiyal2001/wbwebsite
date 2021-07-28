@php $configData = Helper::applClasses(); @endphp
<div class="main-menu menu-fixed {{($configData['theme'] === 'light') ? " menu-light " : "menu-dark "}} menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="dashboard-analytics">
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

            <li class="nav-item active">
                <a href="/dashboard">
                    <i class="feather icon-home"></i>
                    <span class="menu-title" data-i18n="">Dashboard</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('profile.index') }}">
                    <i class="feather icon-users"></i>
                    <span class="menu-title" data-i18n="">Profil</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('campaign.index') }}">
                    <i class="feather icon-dollar-sign"></i>
                    <span class="menu-title" data-i18n="">Kampagnen</span>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('chatroom.index') }}">
                    <i class="feather icon-mail"></i>
                    <span class="menu-title" data-i18n="">Nachrichten</span>
                </a>
            </li>

            <li class="nav-item has-sub">
                <a href="">
                    <i class="feather icon-users"></i>
                    <span class="menu-title" data-i18n="">Account</span>
                </a>
                <ul class="menu-content">
                    <li class="">
                        <a href="page-user-profile">
                            <i class="feather icon-users"></i>
                            <span class="menu-title" data-i18n="">Profil</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="">
                            <i class="feather icon-edit-1"></i>
                            <span class="menu-title" data-i18n="">Profil bearbeiten</span>
                        </a>
                    </li>
                </ul>
            </li>
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