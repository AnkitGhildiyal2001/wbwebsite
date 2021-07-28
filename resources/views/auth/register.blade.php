@extends('layouts/fullLayoutMaster')

@section('title', 'Registrieren')

@section('page-style')
        {{-- Page Css files --}}
        <link rel="stylesheet" href="{{ asset(mix('css/pages/authentication.css')) }}">
        <meta name="description" content="Du bist noch kein WunderBrudi? Dann registiere dich hier jetzt kostenfrei!">

@endsection
@section('content')
<section class="row flexbox-container">
  <div class="col-xl-8 col-10 d-flex justify-content-center">
      <div class="card bg-authentication rounded-0 mb-0">
          <div class="row m-0">
              <div class="col-12 p-0">
                  <div class="card rounded-0 mb-0 p-2">
                      <div class="card-header pt-50 pb-1">
                          <div class="card-title">
                              <h4 class="mb-0">Account erstellen</h4>
                          </div>
                      </div>
                      <div class="card-content">
                          <div class="card-body pt-0">
                            <form method="POST" action="{{ route('register') }}">
                              @csrf
                                <div class="form-label-group">
                                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="Benutzername" value="{{ old('username') }}" required autocomplete="username" autofocus>
                                    <label for="username">Benutzername</label>
                                    @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                  <div class="form-label-group">
                                      <!-- <input type="text" id="inputName" class="form-control" placeholder="Name" required> -->
                                      <input id="firstname" type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" placeholder="Vorname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus>
                                      <label for="firstname">Vorname</label>
                                      @error('firstname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                      @enderror
                                  </div>
                                  <div class="form-label-group">
                                    <!-- <input type="text" id="inputName" class="form-control" placeholder="Name" required> -->
                                    <input id="lastname" type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" placeholder="Nachname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>
                                    <label for="lastname">Nachname</label>
                                    @error('lasttname')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </div>
                                  <div class="form-label-group">
                                      <!-- <input type="email" id="inputEmail" class="form-control" placeholder="Email" required> -->
                                      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
                                      <label for="email">Email</label>
                                      @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                      @enderror
                                  </div>
                                  <div class="form-label-group">
                                      <!-- <input type="password" id="inputPassword" class="form-control" placeholder="Password" required> -->
                                      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Passwort" required autocomplete="new-password">
                                      <label for="password">Passwort</label>
                                      @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                      @enderror
                                  </div>
                                  <div class="form-label-group">
                                      <!-- <input type="password" id="inputConfPassword" class="form-control" placeholder="Confirm Password" required> -->
                                      <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Passwort bestätigen" required autocomplete="new-password">
                                      <label for="password-confirm">Passwort bestätigen</label>
                                  </div>
                                    <div class="form-label-group">
                                        <div class="d-flex align-items-center">
                                            <label class="switch">
                                                <input type="checkbox" id="isCompanyContact" name="isCompanyContact" {{ old('isCompanyContact') == 'on' ? 'checked' : '' }}>
                                                <span class="slider round"></span>
                                            </label>
                                            <span class="pl-1">Wir sind ein Unternehmen</span>
                                        </div>
                                    </div>
                                    <div class="form-label-group hidden" id="companyNameInput">
                                        <input id="company" type="text" class="form-control @error('company') is-invalid @enderror" name="company" placeholder="Firmenname" value="{{ old('company') }}" autocomplete="company" autofocus>
                                        <label for="company">Firmenname</label>
                                        @error('company')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                  <div class="form-group row">
                                      <div class="col-12 d-flex align-items-center">
                                          <fieldset class="checkbox">
                                            <div class="vs-checkbox-con vs-checkbox-primary">
                                              <input type="checkbox" checked>
                                              <span class="vs-checkbox">
                                                <span class="vs-checkbox--check">
                                                  <i class="vs-icon feather icon-check"></i>
                                                </span>
                                              </span>
                                            </div>
                                          </fieldset>
                                          <span class="">Ich akzeptiere die <a href="/agb" target="_blank">allgemeinen Geschäftsbedingungen</a></span>
                                      </div>
                                  </div>
                                  <a href="login" class="btn btn-outline-primary float-left btn-inline mb-50">Login</a>
                                  <button type="submit" id="submitButton" class="btn btn-primary float-right btn-inline mb-50">Registrieren</a>
                                      <script type="text/javascript">
                                          document.getElementById('submitButton').addEventListener('click', function() {
                                              fbq('track', 'CompleteRegistration');
                                          }, false);
                                      </script>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection

@section('page-script')
    <!-- Page js files -->
    <script src="{{ asset(mix('js/scripts/pages/register.js')) }}"></script>
@endsection