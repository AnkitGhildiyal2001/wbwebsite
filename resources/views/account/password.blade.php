@extends('layout/base')

@section('title', 'Passwort ändern')

@section('content')
@if(Session::has('message'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
@endif
<div class="card">
    <div class="card-content">
        <div class="card-body">
            <form id="change-address" method="POST" action="{{ route('account.savePassword') }}" autocomplete="on">
                @method('patch')
                @csrf
                <div class="form-group mt-2">
                    <div class="row">
                        <div class="col-sm-6 col-12">
                            <div class="form-label-group">
                                <input type="password" class="form-control" placeholder="Altes Passwort" name="oldpw" value="{{ old('oldpw') }}" required>
                                <label for="oldpw">Altes Password</label>
                                @if(Session::has('error'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ Session::get('error') }}
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row mt-50">
                        <div class="col-sm-6 col-12">
                            <div class="form-label-group">
                                <input type="password" class="form-control" placeholder="Neues Passwort" name="newpw" value="{{ old('newpw') }}" required>
                                <label for="newpw">Neues Passwort</label>
                                @error('newpw')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row mt-50">
                        <div class="col-sm-6 col-12">
                            <div class="form-label-group">
                                <input type="password" class="form-control" placeholder="Wiederholung neues Passwort" name="newpw_confirmation" value="{{ old('newpw_confirmation') }}" required>
                                <label for="newpw_confirmation">Wiederholung neues Passwort</label>
                                @error('newpw_confirmation')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-2 mt-2 float-right">Speichern</button>
            </form>
        </div>
    </div>
</div>
@endsection