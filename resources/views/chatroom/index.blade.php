@extends('layout/base')

@section('body-class', 'chat-application')
@section('title', 'Nachrichten')

@section('page-style')
        <!-- Page css files -->
        <style>
          @media only screen and (max-width: 768px) {
            .chat-application .chat-app-window .user-chats {
              height: calc(var(--vh, 1vh)*100 - 29.5rem) !important;
            }
          }
        </style>
        <link rel="stylesheet" href="{{ asset(mix('css/pages/app-chat.css')) }}">
@endsection

@section('content')
<div class="content-area-wrapper" id="chat-window">
    @if($chatrooms)
        <chat
            :user="{{ auth()->user() }}"
            :partner="{{ $firstPartner }}"
            :chatrooms="{{ $chatrooms }}"
            :baseurl="'{{ $baseurl }}'"
        ></chat>
    @else
        Keine Nachrichten vorhanden
    @endif
    {{-- <div class="sidebar-left">
        <div class="sidebar">
            <!-- Chat Sidebar area -->
            <div class="sidebar-content card">
                <span class="sidebar-close-icon">
                    <i class="feather icon-x"></i>
                </span>
                <div class="chat-fixed-search">
                    <div class="d-flex align-items-center">
                        <div class="sidebar-profile-toggle position-relative d-inline-flex">
                            <div class="avatar">
                                <img src="http://wbwebsite.koch/images/portrait/small/avatar-s-11.jpg" alt="user_avatar" height="40" width="40">
                            </div>
                            <div class="bullet-success bullet-sm position-absolute"></div>
                        </div>
                        <fieldset class="form-group position-relative has-icon-left mx-1 my-0 w-100">
                            <input type="text" class="form-control round" id="chat-search" placeholder="Search or start a new chat">
                            <div class="form-control-position">
                                <i class="feather icon-search"></i>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div id="users-list" class="chat-user-list list-group position-relative">
                    <h3 class="primary p-1 mb-0">Chats</h3>
                    <ul class="chat-users-list-wrapper media-list">
                        @forelse ($chatrooms as $chatroom)
                        @php
                            $partner = $chatroom->members()->where('id', '!=', $user->id)->first()   
                        @endphp
                        <li>
                            <div class="pr-1">
                                <span class="avatar m-0 avatar-md"><img class="media-object rounded-circle" src="{{ $partner->image }}" height="42" width="42" alt="Generic placeholder image">
                                <i></i>
                                </span>
                            </div>
                            <div class="user-chat-info">
                                <div class="contact-info">
                                <h5 class="font-weight-bold mb-0">{{ $partner->firstname . " " . $partner->lastname}}</h5>
                                <p class="truncate">{{ $chatroom->messages()->orderBy('created_at')->first()->content }}</p>
                                </div>
                                <div class="contact-meta">
                                <span class="float-right mb-25">4:14 PM</span>
                                <span class="badge badge-primary badge-pill float-right">3</span>
                                </div>
                            </div>
                        </li>
                        @empty
                        @endforelse
                    </ul>
                </div>
            </div>
            <!--/ Chat Sidebar area -->

        </div>
    </div>
    <div class="content-right">
        <div class="content-wrapper">
            <div class="content-body">
                <section class="chat-app-window">
                    <div class="start-chat-area">
                        <span class="mb-1 start-chat-icon feather icon-message-square"></span>
                        <h4 class="py-50 px-1 sidebar-toggle start-chat-text">Start Conversation</h4>
                    </div>
                    <div class="active-chat d-none">
                        <div class="chat_navbar">
                            <header class="chat_header d-flex justify-content-between align-items-center p-1">
                                <div class="vs-con-items d-flex align-items-center">
                                    <div class="sidebar-toggle d-block d-lg-none mr-1"><i class="feather icon-menu font-large-1"></i></div>
                                    <div class="avatar user-profile-toggle m-0 m-0 mr-1">
                                        <img src="http://wbwebsite.koch/images/portrait/small/avatar-s-1.jpg" alt="" height="40" width="40" />
                                    </div>
                                    <h6 class="mb-0">Felecia Rower</h6>
                                </div>
                            </header>
                        </div>
                        <div class="user-chats">
                            <div class="chats">
                                <div class="chat">
                                    <div class="chat-avatar">
                                        <a class="avatar m-0" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
                                            <img src="http://wbwebsite.koch/images/portrait/small/avatar-s-1.jpg" alt="avatar" height="40" width="40" />
                                        </a>
                                    </div>
                                    <div class="chat-body">
                                        <div class="chat-content">
                                            <p>How can we help? We're here for you!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat chat-left">
                                    <div class="chat-avatar">
                                        <a class="avatar m-0" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
                                            <img src="http://wbwebsite.koch/images/portrait/small/avatar-s-7.jpg" alt="avatar" height="40" width="40" />
                                        </a>
                                    </div>
                                    <div class="chat-body">
                                        <div class="chat-content">
                                            <p>Hey John, I am looking for the best admin template.</p>
                                            <p>Could you please help me to find it out?</p>
                                        </div>
                                        <div class="chat-content">
                                            <p>It should be Bootstrap 4 compatible.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="divider">
                                    <div class="divider-text">Yesterday</div>
                                </div>
                                <div class="chat">
                                    <div class="chat-avatar">
                                        <a class="avatar m-0" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
                                            <img src="http://wbwebsite.koch/images/portrait/small/avatar-s-1.jpg" alt="avatar" height="40" width="40" />
                                        </a>
                                    </div>
                                    <div class="chat-body">
                                        <div class="chat-content">
                                            <p>Absolutely!</p>
                                        </div>
                                        <div class="chat-content">
                                            <p>Vuexy admin is the responsive bootstrap 4 admin template.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat chat-left">
                                    <div class="chat-avatar">
                                        <a class="avatar m-0" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
                                            <img src="http://wbwebsite.koch/images/portrait/small/avatar-s-7.jpg" alt="avatar" height="40" width="40" />
                                        </a>
                                    </div>
                                    <div class="chat-body">
                                        <div class="chat-content">
                                            <p>Looks clean and fresh UI.</p>
                                        </div>
                                        <div class="chat-content">
                                            <p>It's perfect for my next project.</p>
                                        </div>
                                        <div class="chat-content">
                                            <p>How can I purchase it?</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat">
                                    <div class="chat-avatar">
                                        <a class="avatar m-0" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
                                            <img src="http://wbwebsite.koch/images/portrait/small/avatar-s-1.jpg" alt="avatar" height="40" width="40" />
                                        </a>
                                    </div>
                                    <div class="chat-body">
                                        <div class="chat-content">
                                            <p>Thanks, from ThemeForest.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat chat-left">
                                    <div class="chat-avatar">
                                        <a class="avatar m-0" data-toggle="tooltip" href="#" data-placement="left" title="" data-original-title="">
                                            <img src="http://wbwebsite.koch/images/portrait/small/avatar-s-7.jpg" alt="avatar" height="40" width="40" />
                                        </a>
                                    </div>
                                    <div class="chat-body">
                                        <div class="chat-content">
                                            <p>I will purchase it for sure.</p>
                                        </div>
                                        <div class="chat-content">
                                            <p>Thanks.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat">
                                    <div class="chat-avatar">
                                        <a class="avatar m-0" data-toggle="tooltip" href="#" data-placement="right" title="" data-original-title="">
                                            <img src="http://wbwebsite.koch/images/portrait/small/avatar-s-1.jpg" alt="avatar" height="40" width="40" />
                                        </a>
                                    </div>
                                    <div class="chat-body">
                                        <div class="chat-content">
                                            <p>Great, Feel free to get in touch on</p>
                                        </div>
                                        <div class="chat-content">
                                            <p>https://pixinvent.ticksy.com/</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="chat-app-form">
                            <form class="chat-app-input d-flex" onsubmit="enter_chat();" action="javascript:void(0);">
                                <input type="text" class="form-control message mr-1 ml-50" id="iconLeft4-1" placeholder="Type your message">
                                <button type="button" class="btn btn-primary send" onclick="enter_chat();"><i class="fa fa-paper-plane-o d-lg-none"></i> <span class="d-none d-lg-block">Send</span></button>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div> --}}
</div>
@endsection

@section('page-script')
        <!-- Page js files -->
        <script src="{{ asset(mix('js/scripts/pages/app-chat.js')) }}"></script>
@endsection