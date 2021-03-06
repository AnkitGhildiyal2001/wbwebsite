@php
$configData = Helper::applClasses();
@endphp
{{-- Horizontal Menu --}}
<div class="horizontal-menu-wrapper">
    <div class="header-navbar navbar-expand-sm navbar navbar-horizontal {{$configData['horizontalMenuClass']}} {{($configData['theme'] === 'light') ? "navbar-light" : "navbar-dark" }} navbar-without-dd-arrow navbar-shadow navbar-brand-center"
        role="navigation" data-menu="menu-wrapper" data-nav="brand-center">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="dashboard-analytics">
                        <div class="brand-logo">WunderBrudis</div>
                        <h2 class="brand-text mb-0">WunderBrudis</h2>
                    </a></li>
                <li class="nav-item nav-toggle">
                    <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">

                    </a>
                </li>
            </ul>
        </div>
        <!-- Horizontal menu content-->
        <div class="navbar-container main-menu-content" data-menu="menu-container">
            <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                {{-- Foreach menu item starts --}}
                @if(isset($menuData[1]))
                @foreach($menuData[1]->menu as $menu)
                @php
                $custom_classes = "";
                if(isset($menu->classlist)) {
                $custom_classes = $menu->classlist;
                }
                $translation = "";
                if(isset($menu->i18n)){
                $translation = $menu->i18n;
                }
                @endphp
                <li class="dropdown nav-item {{ (request()->is($menu->url)) ? 'active' : '' }} {{ $custom_classes }}"
                    data-menu="dropdown">
                    <a href="{{ $menu->url }}" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <i class="{{ $menu->icon }}"></i>
                        <span data-i18n="{{ $translation }}">{{ $menu->name }}</span>
                    </a>
                    @if(isset($menu->submenu))
                    @include('panels/horizontalSubmenu', ['menu' => $menu->submenu])
                    @endif
                </li>
                @endforeach
                @endif
                {{-- Foreach menu item ends --}}
            </ul>
        </div>
    </div>
</div>