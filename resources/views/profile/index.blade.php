@extends('layout/base')

@section('title', 'Hey, ' . $user->username)

@section('page-style')
    @include('profile._instagram_feed')
    {{-- Page Css files --}}
    <link rel="stylesheet" href="{{ asset(mix('css/pages/app-user.css')) }}">
    <style>
        #button_id {
            margin-top: 10px;
        }
        #invite_count {
            margin-top: 10px;
        }
    </style>
@endsection

@section('content')
    @if( !empty(session('social-account-error')) )
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {!! session('social-account-error') !!}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
		<?php session(['social-account-error' => '']) ?>
    @endif
    <!-- page users view start -->
    <section class="page-users-view">
        <div class="row">
            <!-- account start -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Account</div>
                        <div class="row">
                            <div class="col-2 users-view-image">
                                <img src="{{ $user->image }}" class="w-100 rounded mb-2"
                                     alt="avatar">
                                <!-- height="150" width="150" -->
                            </div>
                            <div class="col-sm-4 col-12">
                                <table>
                                    <tr>
                                        <td class="font-weight-bold">Username</td>
                                        <td>{{ $user->username }}</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Name</td>
                                        <td>{{ $user->firstname }} {{ $user->lastname }}</td>
                                    </tr>
                                    @if (!Auth::user()->isCompany())
                                    <tr>
                                        <td class="font-weight-bold">Email</td>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                    @endif
                                </table>
                            </div>
                            <div class="col-md-6 col-12 ">
                                <table class="ml-0 ml-sm-0 ml-lg-0">
                                    <tr>
                                        <td class="font-weight-bold">Status</td>
                                        <td>Aktiv</td>
                                    </tr>
                                    <tr>
                                        <td class="font-weight-bold">Rolle</td>
                                        <td>{{ $user->isCompanyContact ? 'Unternehmen' : 'Influencer ' }}</td>

                                    </tr>
                                    @if ($user->isCompany())
                                        <tr>
                                            <td class="font-weight-bold">Unternehmen</td>
                                            <td>{{ $user->company()->first()->name }}</td>
                                        </tr>
                                    @endif
                                    <tr>
                                        <td class="font-weight-bold">Über mich</td>
                                        <td>{{ $profile->about }}</td>
                                    </tr>
                                </table>
                            </div>
                            @if (!$user->isCompany())
                                <div class="col-12">
                                    @foreach ($user->campaignCategories as $category)
                                        <div class="badge badge-pill badge-primary badge-md mr-1 mb-1">{{ $category->name }}</div>
                                    @endforeach
                                </div>
                            @endif
                            @if (!Auth::user()->isCompany())
                            <div class="col-12">
                                <a href="{{ route('profile.edit', $user->slug) }}" class="btn btn-primary mr-1"><i class="feather icon-edit-1"></i> Profil bearbeiten</a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            @if (!$user->isCompany())
            @if (!Auth::user()->isCompany())
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Dein persönlicher WunderBrudis Link</div>

                        <p>Diesen Link kannst du mit deinen Freunden & Followern teilen, wenn du glaubst Sie haben auch das Zeug zum Influencer bei WunderBrudis. <BR /> Jede Registierung über deinen Link wird gezählt und bringt dir in Zukunft Vorteile!</p>

                        <div>
                            <input type="text" id="text" value="https://wunderbrudis.de/{{ $user->username }}"/>

                            <a href="#" id="button_id" onClick="copyTextToClipBoard()" class="btn btn-primary mr-1"><i class="feather icon-copy"></i> Kopieren</a>

                        </div>
                        <p id="invite_count" class="font-weight-bold">Du hast bisher {{ $user->invite_count ?? 0 }} neue Nutzer eingeladen.</p>
                    </div>
                </div>
            </div>
            @endif
            @endif
            @if (!$user->isCompany())
                @if ($instagram)
                    <div class="col-md-4">
                        <div class="card social-card instagram-profile-card">
                            <div class="card-img-block">
                                <div class="info-box">
                                    <div class="row logo">
                                        <img src="{{ asset('images/social/instagram.svg') }}" alt="Instagram Logo">
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="social-number followers" style="font-size: 18px"></div>
                                            <small>Follower</small>
                                        </div>
                                        <div class="col-4">
                                            <div class="social-number media_count" style="font-size: 18px"></div>
                                            <small>Posts</small>
                                        </div>
                                        <div class="col-4">
                                            <div class="social-number engagement_rate" style="font-size: 18px"></div>
                                            <small>Engagement Rate</small>
                                        </div>
                                    </div>
                                </div>
                                <img src="{{ asset('images/social/instagram.svg') }}" alt="Instagram Logo">
                            </div>
                            <div class="card-body pt-5">
                              @if(isset($insta_stats['profile_img']))
                                <img src="{{$insta_stats['profile_img']}}" alt="profile-image" class="profile profile_image"/>
                              @endif
                                <h5 class="card-title text-center">{{ '@' . $instagram->username }}</h5>
                                <p class="card-text text-center bio"></p>
                            </div>
                        </div>
                    </div>
                @else
                    @if(auth()->user()->isCompany())
                        <div class="col-md-4">
                            <div class="card social-card">
                                <div class="card-img-block">
                                    <div class="info-box">
                                        <div class="logo">

                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-5">
                                    <p class="card-text text-center">Kein Instagram Account hinterlegt</p>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="col-md-4">
                            <a href="{{ route('profile.edit', $user->slug) }}">
                                <div class="card social-card">
                                    <div class="card-img-block">
                                        <div class="info-box">
                                            <div class="logo">
                                                <img src="{{ asset('images/social/instagram.svg') }}" alt="Instagram Logo">
                                            </div>
                                            <div class="add-social"><i class="feather icon-plus-circle"></i></div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-5">
                                        <p class="card-text text-center">Hinterlege deinen Instagram Account</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endif
                @endif
                      {{--
                      <div class="col-md-4">
                           @if( !optional($youtube_stats)['title'] )
                               <a href="{{ route('profile.edit', $user->slug) }}">
                           @endif
                           <div class="card social-card">
                               <div class="card-img-block">
                                   <div class="info-box">
                                       <div class="row logo">
                                           <img src="{{ asset('images/social/youtube.svg') }}" alt="Youtube Logo">
                                       </div>
                                       @if( !optional($youtube_stats)['title'] )
                                           <div class="add-social"><i class="feather icon-plus-circle"></i></div>
                                       @endif
                                       @if( optional($youtube_stats)['title'] )
                                           <div class="row">
                                               <div class="col-4">
                                                   <div class="social-number" style="font-size: 18px">{{ optional($youtube_stats)['subscriber_count'] }}</div>
                                                   <small>Abos</small>
                                               </div>
                                               <div class="col-4">
                                                   <div class="social-number" style="font-size: 18px">{{ optional($youtube_stats)['video_count'] }}</div>
                                                   <small>Videos</small>
                                               </div>
                                               <div class="col-4">
                                                   <div class="social-number engagement_rate" style="font-size: 18px">{{ optional($youtube_stats)['engagement_rate'] }}</div>
                                                   <small>Engagement Rate</small>
                                               </div>
                                           </div>
                                       @endif
                                   </div>
                               </div>
                               @if( optional($youtube_stats)['title'])
                                   <div class="card-body pt-5">
                                       <img src="{{ optional($youtube_stats)['thumbnail_url'] }}" alt="{{ optional($youtube_stats)['title'] }}" class="profile"/>
                                       <h5 class="card-title text-center">{{ optional($youtube_stats)['title'] }}</h5>
                                       <p class="card-text text-center">{!! optional($youtube_stats)['description'] !!}</p>
                                   </div>
                               @else
                                   <div class="card-body pt-5">
                                       <p class="card-text text-center">Hinterlege deinen Youtube Account</p>
                                   </div>
                               @endif
                           </div>
                           @if( !optional($youtube_stats)['title'] )
                               </a>
                           @endif
                       </div>--}}
                       {{--
                       @if( optional($twitch_stats)['id'] )
                           <div class="col-md-4">
                               <div class="card social-card">
                                   <div class="card-img-block">
                                       <div class="info-box">
                                           <div class="row logo">
                                               <img src="images/social/twitch.svg" alt="Twitch Logo">
                                           </div>
                                           <div class="row">
                                               <div class="col-6">
                                                   <div class="social-number">{{ optional($twitch_stats)['followers'] }}</div>
                                                   <small>Follower</small>
                                               </div>
                                               <div class="col-6">
                                                   <div class="social-number">{{ optional($twitch)->view_count }}</div>
                                                   <small>Aufrufe</small>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                                   <div class="card-body pt-5">
                                       <img src="{{ optional($twitch_stats)['avatar'] }}" alt="{{ optional($twitch_stats)['name'] }}" class="profile"/>
                                       <h5 class="card-title text-center">{{ optional($twitch_stats)['name'] }}</h5>
                                       <p class="card-text text-center">{!! optional($twitch_stats)['bio'] !!}</p>
                                   </div>
                               </div>
                           </div>
                       @else
                           <div class="col-md-4">
                               <a href="{{ route('profile.edit', $user->slug) }}">
                                   <div class="card social-card">
                                       <div class="card-img-block">
                                           <div class="info-box">
                                               <div class="logo">
                                                   <img src="{{ asset('images/social/twitch.svg') }}" alt="Twitch Logo">
                                               </div>
                                               <div class="add-social"><i class="feather icon-plus-circle"></i></div>
                                           </div>
                                       </div>
                                       <div class="card-body pt-5">
                                           <p class="card-text text-center">Hinterlege deinen Twitch Account</p>
                                       </div>
                                   </div>
                               </a>
                           </div>
                       @endif--}}
                       @if( $facebook )
                       <div class="col-md-4">
                           <div class="card social-card">
                               <div class="card-img-block">
                                   <div class="info-box">
                                       <div class="row logo">
                                           <img src="{{ asset('images/facebook/logo.png') }}" alt="">
                                       </div>
                                       <div class="row">
                                           <div class="col-6">
                                               <div class="social-number">{{ 0 }}</div>
                                               <small>Follower</small>
                                           </div>
                                           <div class="col-6">
                                               <div class="social-number">{{ 0 }}</div>
                                               <small>Posts</small>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <div class="card-body pt-5">
                                   <img src="{{ $facebook->avatar }}" alt="profile-image" class="profile"/>
                                   <h5 class="card-title text-center">{{ $facebook->name }}</h5>
                               </div>
                           </div>
                       </div>
                       @endif
       -
                   @endif
                   <script>
                       function copyTextToClipBoard(){
                           //Input Element with id "text"
                           let textToBeCopied = document.getElementById('text');
                           //Select the content in the input element
                           textToBeCopied.select();
                           textToBeCopied.setSelectionRange(0, 99999);
                           //copy the text inside the input element to clipboard
                           document.execCommand('copy');
                           document.getElementById('button_id').text = "In die Zwischenablage kopiert";
                       }
                   </script>
                   {{-- <div class="col-md-4 col-12 ">
                     <div class="card">
                       <div class="card-body">
                         <div class="card-title mb-2">Social Links</div>
                         <table>
                           <tr>
                             <td class="font-weight-bold">Twitter</td>
                             <td>https://twitter.com/adoptionism744
                             </td>
                           </tr>
                           <tr>
                             <td class="font-weight-bold">Facebook</td>
                             <td>https://www.facebook.com/adoptionism664
                             </td>
                           </tr>
                           <tr>
                             <td class="font-weight-bold">Instagram</td>
                             <td>https://www.instagram.com/adopt-ionism744/
                             </td>
                           </tr>
                           <tr>
                             <td class="font-weight-bold">Github</td>
                             <td>https://github.com/madop818
                             </td>
                           </tr>
                           <tr>
                             <td class="font-weight-bold">CodePen</td>
                             <td>https://codepen.io/adoptism243
                             </td>
                           </tr>
                           <tr>
                             <td class="font-weight-bold">Slack</td>
                             <td>@adoptionism744
                             </td>
                           </tr>
                         </table>
                       </div>
                     </div>
                   </div>

                   <div class="col-md-4 col-12 ">
                     <div class="card">
                       <div class="card-body">
                         <div class="card-title mb-2">Social Links</div>
                         <table>
                           <tr>
                             <td class="font-weight-bold">Twitter</td>
                             <td>https://twitter.com/adoptionism744
                             </td>
                           </tr>
                           <tr>
                             <td class="font-weight-bold">Facebook</td>
                             <td>https://www.facebook.com/adoptionism664
                             </td>
                           </tr>
                           <tr>
                             <td class="font-weight-bold">Instagram</td>
                             <td>https://www.instagram.com/adopt-ionism744/
                             </td>
                           </tr>
                           <tr>
                             <td class="font-weight-bold">Github</td>
                             <td>https://github.com/madop818
                             </td>
                           </tr>
                           <tr>
                             <td class="font-weight-bold">CodePen</td>
                             <td>https://codepen.io/adoptism243
                             </td>
                           </tr>
                           <tr>
                             <td class="font-weight-bold">Slack</td>
                             <td>@adoptionism744
                             </td>
                           </tr>
                         </table>
                       </div>
                     </div>
                   </div> --}}

        </div>
    </section>
    <!-- page users view end -->
@endsection

@section('page-script')
    {{-- Page js files --}}
    <script src="{{ asset(mix('js/scripts/pages/app-user.js')) }}"></script>
@endsection
