@if($configData["mainLayoutType"] == 'horizontal' && isset($configData["mainLayoutType"]))
<nav class="header-navbar navbar-expand-lg navbar navbar-with-menu {{ $configData['navbarColor'] }} navbar-fixed">
  <div class="navbar-header d-xl-block d-none">
    <ul class="nav navbar-nav flex-row">
      <li class="nav-item"><a class="navbar-brand" href="dashboard-analytics">
          <div class="brand-logo"></div>
        </a></li>
    </ul>
  </div>
  @else
  <nav
    class="header-navbar navbar-expand-lg navbar navbar-with-menu {{ $configData['navbarClass'] }} navbar-light navbar-shadow {{ $configData['navbarColor'] }}">
    @endif
    <div class="navbar-wrapper">
      <div class="navbar-container content">
        <div class="navbar-collapse" id="navbar-mobile">
          <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
            <ul class="nav navbar-nav">
              <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs"
                  href="#"><i class="ficon feather icon-menu"></i></a></li>
            </ul>

           <ul class="nav navbar-nav">
             <li class="nav-item d-none d-lg-block">
               <!-- select.bookmark-select-->
               <!--   option 1-Column-->
               <!--   option 2-Column-->
               <!--   option Static Layout-->
             </li>
           </ul>
         </div>
         <ul class="nav navbar-nav float-right">
           <li class="dropdown dropdown-notification nav-item">
             <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
               <li class="dropdown-menu-header">
               </li>
               <li class="scrollable-container media-list">
                 <a class="d-flex justify-content-between" href="javascript:void(0)">
                   <div class="media d-flex align-items-start">
                   </div>
                 </a>
               </li>

             </ul>
           </li>
           @php
               $user = Auth::user();
               $type = $user->isCompanyContact ? $user->company->name : 'Influencer';
           @endphp
           <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#"
               data-toggle="dropdown">
               <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">{{ $user->username }}</span><span class="user-status">{{ $type }}</span></div><span>
                 <img class="round" src="{{ Auth::user()->image ?? "default.png" }}" alt="avatar" height="40"
                   width="40" /></span>
             </a>
           </li>
         </ul>
       </div>
     </div>
   </div>
 </nav>

  {{-- Search Start Here --}}
  <ul class="main-search-list-defaultlist d-none">
    <li class="d-flex align-items-center">
      <a class="pb-25" href="#">
        <h6 class="text-primary mb-0">Files</h6>
      </a>
    </li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer">
      <a class="d-flex align-items-center justify-content-between w-100" href="#">
        <div class="d-flex">
          <div class="ml-0 mr-50"><img src="{{ asset('images/icons/xls.png') }}" alt="png" height="32" />
          </div>
          <div class="search-data">
            <p class="search-data-title mb-0">Two new item submitted</p><small class="text-muted">Marketing
              Manager</small>
          </div>
        </div><small class="search-data-size mr-50 text-muted">&apos;17kb</small>
      </a>
    </li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer">
      <a class="d-flex align-items-center justify-content-between w-100" href="#">
        <div class="d-flex">
          <div class="ml-0 mr-50"><img src="{{ asset('images/icons/jpg.png') }}" alt="png" height="32" />
          </div>
          <div class="search-data">
            <p class="search-data-title mb-0">52 JPG file Generated</p><small class="text-muted">FontEnd
              Developer</small>
          </div>
        </div><small class="search-data-size mr-50 text-muted">&apos;11kb</small>
      </a>
    </li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer">
      <a class="d-flex align-items-center justify-content-between w-100" href="#">
        <div class="d-flex">
          <div class="ml-0 mr-50"><img src="{{ asset('images/icons/pdf.png') }}" alt="png" height="32" />
          </div>
          <div class="search-data">
            <p class="search-data-title mb-0">25 PDF File Uploaded</p><small class="text-muted">Digital
              Marketing Manager</small>
          </div>
        </div><small class="search-data-size mr-50 text-muted">&apos;150kb</small>
      </a>
    </li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer">
      <a class="d-flex align-items-center justify-content-between w-100" href="#">
        <div class="d-flex">
          <div class="ml-0 mr-50"><img src="{{ asset('images/icons/doc.png') }}" alt="png" height="32" />
          </div>
          <div class="search-data">
            <p class="search-data-title mb-0">Anna_Strong.doc</p><small class="text-muted">Web
              Designer</small>
          </div>
        </div><small class="search-data-size mr-50 text-muted">&apos;256kb</small>
      </a>
    </li>
    <li class="d-flex align-items-center">
      <a class="pb-25" href="#">
        <h6 class="text-primary mb-0">Members</h6>
      </a>
    </li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer">
      <a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
        <div class="d-flex align-items-center">
          <div class="avatar mr-50"><img src="{{ asset('images/portrait/small/avatar-s-8.jpg') }}" alt="png"
              height="32" /></div>
          <div class="search-data">
            <p class="search-data-title mb-0">John Doe</p><small class="text-muted">UI designer</small>
          </div>
        </div>
      </a>
    </li>
    <li class="auto-suggestion d-flex align-items-center cursor-pointer">
      <a class="d-flex align-items-center justify-content-between py-50 w-100" href="#">
        <div class="d-flex align-items-center">
          <div class="avatar mr-50"><img src="{{ asset('images/portrait/small/avatar-s-1.jpg') }}" alt="png"
              height="32" /></div>
          <div class="search-data">
            <p class="search-data-title mb-0">Michal Clark</p><small class="text-muted">FontEnd
              Developer</small>
          </div>
        </div>
      </a>
    </li>
  </ul>

  {{-- Search Ends --}}
  <!-- END: Header-->
