@extends('layout/base')

@section('title', 'Profil bearbeiten')

@section('vendor-style') {{-- Page Css files --}}
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/pickadate/pickadate.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('vendors/css/editors/quill/quill.snow.css')) }}">
@endsection

@section('page-style') {{-- Page Css files --}}
    <link rel="stylesheet" href="{{ asset(mix('css/plugins/forms/validation/form-validation.css')) }}">
    <link rel="stylesheet" href="{{ asset(mix('css/pages/app-user.css')) }}">
    @include('profile._instagram_feed')
@endsection

@section('content')
<!-- users edit start -->
<section class="users-edit">
    <div class="card">
        <div class="card-content">
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                        <!-- users edit media object start -->
                        @if( !empty(session('social-account-error')) )
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {!! session('social-account-error') !!}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <?php session(['social-account-error' => '']) ?>
                        @endif
                        <div class="media mb-2">
                            <a class="mr-2 my-25" href="#">
                                <img src="{{ $user->image }}" id ="user-avatar" alt="users avatar" class="users-avatar-shadow rounded" height="64" width="64">
                            </a>
                            <div class="media-body mt-50">
                                <h4 class="media-heading">{{ $user->firstname }} {{ $user->lastname }}</h4>
                                <div class="col-12 d-flex mt-1 px-0">
                                    <button href="#" id="change-avatar" class="btn btn-primary d-none d-sm-block mr-75">Ändern</button>
                                    <button href="#" id="remove-avatar" class="btn btn-outline-danger d-none d-sm-block">Löschen</button>
                                </div>
                            </div>
                        </div>
                        <!-- users edit media object ends -->
                        <!-- users edit account form start -->
                        <form id="edit-profile" method="POST" action="{{ route('profile.update', $profile) }}" enctype="multipart/form-data">
                            @method('patch')
                            @csrf
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group mt-2">
                                        <div class="form-label-group">
                                            <input type="file" name="image" id="image" class="hidden" onchange="loadFile(event)">
                                            <input type="hidden" id="removed-image" name="removed-image" val="">
                                            <input id="username" type="text" class="form-control " name="username" placeholder="Benutzername" value="{{ old('username', $user->username) }}" required="" autocomplete="username" autofocus="">
                                            <label for="username">Benutzername</label>
                                            @error('username')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <div class="row">
                                            <div class="col">
                                                <div class="form-label-group">
                                                    <!-- <input type="text" id="inputName" class="form-control" placeholder="Name" required> -->
                                                    <input id="firstname" type="text" class="form-control " name="firstname" placeholder="Vorname" value="{{ old('firstname', $user->firstname) }}" required="" autocomplete="firstname" autofocus="">
                                                    <label for="firstname">Vorname</label>
                                                    @error('firstname')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-label-group">
                                                    <!-- <input type="text" id="inputName" class="form-control" placeholder="Name" required> -->
                                                    <input id="lastname" type="text" class="form-control " name="lastname" placeholder="Nachname" value="{{ old('lastname', $user->lastname) }}" required="" autocomplete="lastname" autofocus="">
                                                    <label for="lastname">Nachname</label>
                                                    @error('lastname')
                                                    <div class="alert alert-danger" role="alert">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-2">
                                        <div class="form-label-group">
                                            <input id="email" type="email" class="form-control " name="email" placeholder="E-Mail-Adresse" value="{{ old('email', $user->email) }}" required="" autocomplete="email" autofocus="">
                                            <label for="email">E-Mail-Adresse</label>
                                            @error('email')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    @if ($user->isCompany())
                                    <div class="form-group mt-2">
                                        <div class="form-label-group">
                                            <input id="company" type="text" class="form-control " name="company" placeholder="Unternehmen" value="{{ old('company', $user->company()->first()->name) }}" required="" autocomplete="email" autofocus="">
                                            <label for="email">Unternehmen</label>
                                            @error('company')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                    </div>
                                    @endif
                                    <fieldset class="form-label-group">
                                        <textarea class="form-control" name="about" id="about" placeholder="Beschreibung" style="height: 141px;">
                                            {{ old('about', $profile->about) }}
                                        </textarea>
                                        <label for="label-textarea">Beschreibung</label>
                                    </fieldset>
                                    @error('about')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                @if (!$user->isCompany())
                                    <div style="margin-bottom: 15px" class="col-12 col-md-6">
                                        <span class="vs-checkbox-con vs-checkbox-primary">
                                            <input type="checkbox" name="notify[]" value="notify" {{ $user->notify ? 'checked' : ''}}>
                                            <span class="vs-checkbox">
                                                <span class="vs-checkbox--check">
                                                <i class="vs-icon feather icon-check"></i>
                                                </span>
                                            </span>
                                            <span class="">Benachrichtige mich bei passenden Kampagnen per Email</span>
                                        </span>
                                    </div>
                                    <div class="col-12">
                                        <h6>Meine Kategorien</h6>
                                    </div>
                                    <div class="col-12">
                                        @error('category')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="col-12 col-md-6">
                                        @foreach ($categories->slice(0,8) as $category)
                                        <span class="vs-checkbox-con vs-checkbox-primary">
                                            <input type="checkbox" name="category[]" value="{{ $category->id }}" {{ in_array($category->id, old('category', $myCategoriesIds)) ? 'checked' : '' }}>
                                            <span class="vs-checkbox">
                                                <span class="vs-checkbox--check">
                                                <i class="vs-icon feather icon-check"></i>
                                                </span>
                                            </span>
                                            <span class="">{{ $category->name }}</span>
                                        </span>
                                        @endforeach
                                    </div>
                                    <div class="col-12 col-md-6">
                                        @foreach ($categories->slice(8) as $category)
                                        <span class="vs-checkbox-con vs-checkbox-primary">
                                            <input type="checkbox" name="category[]" value="{{ $category->id }}" {{ in_array($category->id, old('category', $myCategoriesIds)) ? 'checked' : '' }}>
                                            <span class="vs-checkbox">
                                                <span class="vs-checkbox--check">
                                                <i class="vs-icon feather icon-check"></i>
                                                </span>
                                            </span>
                                            <span class="">{{ $category->name }}</span>
                                        </span>
                                        @endforeach
                                    </div>
                                @endif
                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Speichern
                                    </button>
                                </div>
                                @if (!$user->isCompany())
                                <div>
                                    <div>
                                    <a href="{{ !$instagram ? 'https://api.instagram.com/oauth/authorize?client_id='.config('services.instagram.client_id').'&redirect_uri='.url('/').'/instagram-auth&response_type=code&scope=user_profile,user_media' : 'https://www.instagram.com/' . $instagram->username }}" target="{{ $instagram ? '_blank' : '_self	'}}" class="d-flex align-items-center">
                                        <span class="badge badge-pill badge-primary badge-xl mx-1 my-1">
                                            <i class="feather icon-instagram"></i>
                                        </span>
                                        @if ($instagram)
                                            {{ $instagram->username }}
                                            &nbsp;<span class="badge badge-pill badge-primary badge-xl mx-1 my-1 disconnect-social-account" data-channel="instagram">
                                                <i class="feather icon-x"></i>
                                            </span>
                                        @else
                                            Instagram verbinden
                                        @endif
                                    </a>
                                    </div>
                                    
                                    {{--
                                    <a href="{{ !$youtube ? url('profile/connect-social/youtube') : 'https://www.youtube.com/channel/' . $youtube->id }}" target="{{ $youtube ? '_blank' : '_self	'}}" class="d-flex align-items-center">
                                        <div class="badge badge-pill badge-success badge-xl mx-1 my-1">
                                            <i class="feather icon-youtube"></i>
                                        </div>
                                        @if ($youtube)
                                            {{ $youtube->nickname }}
                                            &nbsp;<span class="badge badge-pill badge-primary badge-xl mx-1 my-1 disconnect-social-account" data-channel="youtube">
                                                <i class="feather icon-x"></i>
                                            </span>
                                        @else
                                            Youtube verbinden
                                        @endif
                                    </a>
                                    <a href="{{ !$twitch ? url('profile/connect-social/twitch') : 'https://www.facebook.com' }}" target="{{ $twitch ? '_blank' : '_self	'}}" class="d-flex align-items-center">
                                        <div class="badge badge-pill badge-primary badge-xl mx-1 my-1">
                                            <i class="feather icon-cast"></i>
                                        </div>
                                        @if ($twitch)
                                            {{ $twitch->name }}
                                            &nbsp;<span class="badge badge-pill badge-primary badge-xl mx-1 my-1 disconnect-social-account" data-channel="twitch">
                                                <i class="feather icon-x"></i>
                                            </span>
                                        @else
                                            Twitch verbinden
                                        @endif
                                    </a>
                                    --}}

                                </div>
                                @endif
                            </div>
                        </form>
                        <!-- users edit account form ends -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- users edit ends -->

@endsection @section('vendor-script') {{-- Vendor js files --}}
    <script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/forms/validation/jqBootstrapValidation.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.js')) }}"></script>
    <script src="{{ asset(mix('vendors/js/pickers/pickadate/picker.date.js')) }}"></script>
@endsection

@section('page-script') {{-- Page js files --}}
    <script src="{{ asset(mix('js/scripts/pages/app-user.js')) }}"></script>
    <script src="{{ asset(mix('js/scripts/navs/navs.js')) }}"></script>
    <script>
        $(document).ready(function () {
            $('.disconnect-social-account').on('click', function () {
                var channel = $(this).data('channel');
                if( confirm('Möchtest du diesen Account wirklich entfernen?') ) {
                    $.ajax({
                        type: 'POST',
                        url: '{{ url('profile/disconnect-channel') }}?_token={{ csrf_token() }}',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: 'channel=' + channel,
                        dataType: 'json',
                    }).done(function (response) {
                        location.reload();
                    });
                }
                return false;
            })
        });
    </script>
@endsection