<nav id="nav" class="header-navbar navbar-expand-lg navbar floating-nav navbar-light navbar-shadow" style="z-index: 600;">
    <div class="navbar-wrapper">
  <div class="navbar-container content">
    <div class="navbar-collapse" id="navbar-mobile-1">
        <ul class="nav navbar-nav bookmark-icons mr-auto float-left">
            <li class="nav-item mobile-menu d-xl-none mr-auto">
                <a class="nav-link nav-menu-main hidden-xs menu-toggle" href="#">
                    <i class="ficon feather icon-menu"></i>
                </a>
            </li>
        </ul>
        <ul class="nav navbar-nav flex-row float-right">
            <form action="" method="post">
                @csrf
                @method('post')
            </form>
            <li class="nav-item d-lg-block">
                <a class="nav-link" href="{{ route('darkmode') }}" onclick="event.preventDefault(); document.getElementById('darkmode-form').submit();">
                    <i class="ficon feather icon-moon {{ auth()->user()->darkmode ? 'primary' : '' }}"></i>
                </a>
                <form id="darkmode-form" action="{{ route('darkmode') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </li>
            <notifications
                :user="{{ auth()->user() }}"
                :notifications="{{ $notifications }}"
            >
            </notifications>
            {{-- <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon feather icon-bell"></i><span class="badge badge-pill badge-danger badge-up">5</span></a>
                <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right notification-window">
                    <li class="dropdown-menu-header">
                        <div class="dropdown-header m-0 p-2">
                            <h3 class="white">5 New</h3><span class="grey darken-2">App Notifications</span>
                        </div>
                    </li>
                    <li class="scrollable-container media-list ps">
                        <a class="d-flex justify-content-between" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left"><i class="feather icon-plus-square font-medium-5 primary"></i></div>
                                <div class="media-body">
                                    <h6 class="primary media-heading">You have new order!</h6><small class="notification-text"> Are your going to meet me tonight?</small>
                                </div>
                                <small><time class="media-meta" datetime="2015-06-11T18:29:20+08:00">9 hoursago</time></small>
                            </div>
                        </a>
                        <a class="d-flex justify-content-between" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left"><i class="feather icon-download-cloud font-medium-5 success"></i></div>
                                <div class="media-body">
                                    <h6 class="success media-heading red darken-1">99% Server load</h6><small class="notification-text">You got new order of goods.</small>
                                </div>
                                <small><time class="media-meta" datetime="2015-06-11T18:29:20+08:00">5 hourago</time></small>
                            </div>
                        </a>
                        <a class="d-flex justify-content-between" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left"><i class="feather icon-alert-triangle font-medium-5 danger"></i></div>
                                <div class="media-body">
                                    <h6 class="danger media-heading yellow darken-3">Warning notifixation</h6><small class="notification-text">Server have 99% CPU usage.</small>
                                </div>
                                <small><time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                            </div>
                        </a>
                        <a class="d-flex justify-content-between" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left"><i class="feather icon-check-circle font-medium-5 info"></i></div>
                                <div class="media-body">
                                    <h6 class="info media-heading">Complete the task</h6><small class="notification-text">Cake sesame snaps cupcake</small>
                                </div>
                                <small><time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Lastweek</time></small>
                            </div>
                        </a>
                        <a class="d-flex justify-content-between" href="javascript:void(0)">
                            <div class="media d-flex align-items-start">
                                <div class="media-left"><i class="feather icon-file font-medium-5 warning"></i></div>
                                <div class="media-body">
                                    <h6 class="warning media-heading">Generate monthly report</h6><small class="notification-text">Chocolate cake oat cake tiramisu marzipan</small>
                                </div>
                                <small><time class="media-meta" datetime="2015-06-11T18:29:20+08:00">Lastmonth</time></small>
                            </div>
                        </a>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps__rail-y" style="top: 0px; right: 0px;">
                            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                        </div>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps__rail-y" style="top: 0px; right: 0px;">
                            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                        </div>
                    </li>
                    <li class="dropdown-menu-footer"><a class="dropdown-item p-1 text-center" href="javascript:void(0)">Read all notifications</a></li>
                </ul>
            </li> --}}
            @php
              $user = Auth::user();
              $type = $user->isCompanyContact ? $user->company->name : 'Influencer';
            @endphp
            <li class="dropdown dropdown-user nav-item">
                <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                    <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">
                      {{ $user->username }}
                    </span>
                    <span class="user-status">{{ $type }}</span>
                  </div>
                  <span>
              <img class="round" src="{{ Auth::user()->image ?? "default.png" }}" alt="avatar" height="40"
              width="40" /></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right settings-window">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-2').submit();"><i class="feather icon-power"></i> Logout</a>
                </div>
                <form id="logout-form-2" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
 </div>
</div>
</nav>