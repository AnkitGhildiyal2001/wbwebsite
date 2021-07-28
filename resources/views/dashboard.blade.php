
@extends('layout/base')

@section('title', 'Dashboard')

@section('vendor-style')
        <!-- vendor css files -->
@endsection
@section('page-style')
        <!-- Page css files -->
  @endsection

  @section('content')
  <section id="dashboard-analytics">
    <div class="row">
        <div class="col-12">
            <div class="card">
            <div class="card-header">
                <h4 class="mb-0">Meine Kampangen</h4>
            </div>
            <div class="card-content">
                <div class="table-responsive mt-1">
                <table class="table table-hover-animation mb-0">
                    <thead>
                    <tr>
                        <th>TITEL</th>
                        <th>STATUS</th>
                        <th>ANSPRECHPARTNER</th>
                        <th>UNTERNEHMEN</th>
                        <th>DATUM</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($campaigns as $campaign)
                    <tr>
                        <td>
                            <a href="{{ route('user.campaign.show', $campaign->slug) }}">
                               {{ \Illuminate\Support\Str::limit($campaign->title, 40, $end="...") }}
                            </a>
                        </td>
                        <td>
                            @php
                                $campaignUser = $campaign->users->where('id', $currentUser->id)->first();
                                $state = App\CampaignState::find($campaignUser->pivot->state_id)->name;
                                $campaignContact = $campaign->company->user;
                            @endphp
                            {{ $state }}
                        </td>
                        <td class="p-1">
                            <ul class="list-unstyled users-list m-0  d-flex align-items-center">
                                <li data-toggle="tooltip" data-popup="tooltip-custom"  data-placement="bottom" data-original-title="{{ $campaignContact->name }}" class="avatar pull-up">
                                <img class="media-object rounded-circle" src="{{ $campaignContact->image }}" alt="Avatar" height="30" width="30">
                                </li>
                            </ul>
                        </td>
                        <td>
                            {{ $campaign->company->name }}
                        </td>
                        <td>{{ $campaignUser->pivot->updated_at->format('d.m.Y H:i') }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="row match-height">
        <div class="col-md-6 col-12">
          <div class="card">
            <div class="card-content">
                <div class="card-header">
                    <h4 class="card-title">{{ $currentUser->isCompany() ? 'Meine neusten Kampangen' : 'Neue Kampangnen' }}</h4>
                </div>
                @if ($newCampaigns)
                <div class="card-body">
                    @foreach ($newCampaigns as $newCampaign)
                    <div class="row pb-50">
                        <div class="col-12 d-flex justify-content-between flex-column order-lg-1 order-2 mt-lg-0 mt-2">
                            <div>
                                <p class="text-bold-500 mb-75"></p>
                                @if (!$currentUser->isCompany())
                                    <h5 class="font-medium-2">
                                        <span class="text-success">{{ $newCampaign->company->name }}</span>
                                    </h5>
                                @endif
                                <h4 class="mb-25">{{ $newCampaign->title }}</h4>

                                <p class="text-bold-500 mb-75">{{ $newCampaign->created_at->diffForHumans() }}</p>
                            </div>
                            <a href="{{ route('campaign.show', [$newCampaign->company->slug,$newCampaign->slug]) }}" class="btn btn-primary float-right waves-effect waves-light">Zur Kampange<i class="feather icon-chevrons-right"></i></a>
                        </div>
                    </div>
                    @if(!$loop->last)
                    <hr/>
                    @endif
                    @endforeach
                </div>
                @endif
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Aktivitäten</h4>
              </div>
              <div class="card-content">
                <div class="card-body">
                  <ul class="activity-timeline timeline-left list-unstyled">
                      @foreach ($newsArray as $news)
                      <li>
                        <div class="timeline-icon bg-primary">
                            @switch($news['type'])
                                @case('applied')
                                    <i class="feather icon-plus font-medium-2 align-middle"></i>
                                    @break
                                @case('submitted')
                                    <i class="feather icon-check font-medium-2 align-middle"></i>
                                    @break
                                @default
                                    <i class="feather icon-plus font-medium-2 align-middle"></i>
                            @endswitch
                        </div>
                        <div class="timeline-info">
                            <p class="font-weight-bold mb-0">{{ $news['type'] }} </p>
                            <span class="font-small-3">
                                {!! $news['text'] !!}
                            </span>
                        </div>
                        <small class="text-muted">{{ $news['timestamp']->diffForHumans() }}</small>
                      </li>
                      @endforeach
                  </ul>
                </div>
              </div>
            </div>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="card bg-analytics text-white">
          <div class="card-content">
            <div class="card-body text-center">
              <img src="{{ asset('images/elements/decore-left.png') }}" class="img-left" alt="card-img-left">
              <img src="{{ asset('images/elements/decore-right.png')}}" class="img-right" alt="card-img-right">
              <div class="avatar avatar-xl bg-primary shadow mt-0">
                  <div class="avatar-content">
                      <i class="feather icon-award white font-large-1"></i>
                  </div>
              </div>
              <div class="text-center">
                <h1 class="mb-2 text-white">Congratulations John,</h1>
                <p class="m-auto w-75">You have done <strong>57.6%</strong> more sales today. Check your new badge in your profile.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
        <div class="col-lg-3 col-md-6 col-12">
          <div class="card">
            <div class="card-header d-flex flex-column align-items-start pb-0">
                <div class="avatar bg-rgba-primary p-50 m-0">
                    <div class="avatar-content">
                        <i class="feather icon-users text-primary font-medium-5"></i>
                    </div>
                </div>
                <h2 class="text-bold-700 mt-1 mb-25">92.6k</h2>
                <p class="mb-0">Subscribers Gained</p>
            </div>
            <div class="card-content">
                <div id="subscribe-gain-chart"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-12">
          <div class="card">
              <div class="card-header d-flex flex-column align-items-start pb-0">
                  <div class="avatar bg-rgba-warning p-50 m-0">
                      <div class="avatar-content">
                          <i class="feather icon-package text-warning font-medium-5"></i>
                      </div>
                  </div>
                  <h2 class="text-bold-700 mt-1 mb-25">97.5K</h2>
                  <p class="mb-0">Orders Received</p>
              </div>
              <div class="card-content">
                  <div id="orders-received-chart"></div>
              </div>
          </div>
        </div>
    </div>
    <div class="row match-height">
        <div class="col-md-6 col-12">
            <div class="card">
              <div class="card-header d-flex justify-content-between pb-0">
                  <h4 class="card-title">Support Tracker</h4>
                  <div class="dropdown chart-dropdown">
                      <button class="btn btn-sm border-0 dropdown-toggle p-0" type="button" id="dropdownItem4"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Last 7 Days
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem4">
                        <a class="dropdown-item" href="#">Last 28 Days</a>
                        <a class="dropdown-item" href="#">Last Month</a>
                        <a class="dropdown-item" href="#">Last Year</a>
                      </div>
                  </div>
              </div>
              <div class="card-content">
                  <div class="card-body pt-0">
                      <div class="row">
                          <div class="col-sm-2 col-12 d-flex flex-column flex-wrap text-center">
                              <h1 class="font-large-2 text-bold-700 mt-2 mb-0">163</h1>
                              <small>Tickets</small>
                          </div>
                          <div class="col-sm-10 col-12 d-flex justify-content-center">
                              <div id="support-tracker-chart"></div>
                          </div>
                      </div>
                      <div class="chart-info d-flex justify-content-between">
                          <div class="text-center">
                              <p class="mb-50">New Tickets</p>
                              <span class="font-large-1">29</span>
                          </div>
                          <div class="text-center">
                              <p class="mb-50">Open Tickets</p>
                              <span class="font-large-1">63</span>
                          </div>
                          <div class="text-center">
                              <p class="mb-50">Response Time</p>
                              <span class="font-large-1">1d</span>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
    </div>
    <div class="row match-height">
        <div class="col-lg-4 col-12">
          <div class="card">
            <div class="card-header d-flex justify-content-between pb-0">
                <h4>Product Orders</h4>
                <div class="dropdown chart-dropdown">
                    <button class="btn btn-sm border-0 dropdown-toggle p-0" type="button" id="dropdownItem2"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Last 7 Days
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem2">
                      <a class="dropdown-item" href="#">Last 28 Days</a>
                      <a class="dropdown-item" href="#">Last Month</a>
                      <a class="dropdown-item" href="#">Last Year</a>
                    </div>
                </div>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <div id="product-order-chart" class="mb-3"></div>
                    <div class="chart-info d-flex justify-content-between mb-1">
                        <div class="series-info d-flex align-items-center">
                            <i class="fa fa-circle-o text-bold-700 text-primary"></i>
                            <span class="text-bold-600 ml-50">Finished</span>
                        </div>
                        <div class="product-result">
                            <span>23043</span>
                        </div>
                    </div>
                    <div class="chart-info d-flex justify-content-between mb-1">
                        <div class="series-info d-flex align-items-center">
                            <i class="fa fa-circle-o text-bold-700 text-warning"></i>
                            <span class="text-bold-600 ml-50">Pending</span>
                        </div>
                        <div class="product-result">
                            <span>14658</span>
                        </div>
                    </div>
                    <div class="chart-info d-flex justify-content-between mb-75">
                        <div class="series-info d-flex align-items-center">
                            <i class="fa fa-circle-o text-bold-700 text-danger"></i>
                            <span class="text-bold-600 ml-50">Rejected</span>
                        </div>
                        <div class="product-result">
                            <span>4758</span>
                        </div>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-start">
              <div>
                <h4 class="card-title">Sales Stats</h4>
                <p class="text-muted mt-25 mb-0">Last 6 months</p>
              </div>
                <p class="mb-0"><i class="feather icon-more-vertical font-medium-3 text-muted cursor-pointer"></i></p>
            </div>
            <div class="card-content">
                <div class="card-body px-0">
                    <div id="sales-chart"></div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Activity Timeline</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <ul class="activity-timeline timeline-left list-unstyled">
                <li>
                  <div class="timeline-icon bg-primary">
                    <i class="feather icon-plus font-medium-2 align-middle"></i>
                  </div>
                  <div class="timeline-info">
                    <p class="font-weight-bold mb-0">Client Meeting</p>
                    <span class="font-small-3">Bonbon macaroon jelly beans gummi bears jelly lollipop apple</span>
                  </div>
                  <small class="text-muted">25 mins ago</small>
                </li>
                <li>
                  <div class="timeline-icon bg-warning">
                    <i class="feather icon-alert-circle font-medium-2 align-middle"></i>
                  </div>
                  <div class="timeline-info">
                    <p class="font-weight-bold mb-0">Email Newsletter</p>
                    <span class="font-small-3">Cupcake gummi bears soufflé caramels candy</span>
                  </div>
                  <small class="text-muted">15 days ago</small>
                </li>
                <li>
                  <div class="timeline-icon bg-danger">
                    <i class="feather icon-check font-medium-2 align-middle"></i>
                  </div>
                  <div class="timeline-info">
                    <p class="font-weight-bold mb-0">Plan Webinar</p>
                    <span class="font-small-3">Candy ice cream cake. Halvah gummi bears</span>
                  </div>
                  <small class="text-muted">20 days ago</small>
                </li>
                <li>
                  <div class="timeline-icon bg-success">
                    <i class="feather icon-check font-medium-2 align-middle"></i>
                  </div>
                  <div class="timeline-info">
                    <p class="font-weight-bold mb-0">Launch Website</p>
                    <span class="font-small-3">Candy ice cream cake. </span>
                  </div>
                  <small class="text-muted">25 days ago</small>
                </li>
                <li>
                  <div class="timeline-icon bg-primary">
                    <i class="feather icon-check font-medium-2 align-middle"></i>
                  </div>
                  <div class="timeline-info">
                    <p class="font-weight-bold mb-0">Marketing</p>
                    <span class="font-small-3">Candy ice cream. Halvah bears Cupcake gummi bears.</span>
                  </div>
                  <small class="text-muted">28 days ago</small>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
  </section>
  @endsection

@section('vendor-script')
        <!-- vendor files -->
@endsection
@section('page-script')
        <!-- Page js files -->
@endsection
