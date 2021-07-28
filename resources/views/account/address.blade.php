@extends('layout/base')

@section('title', 'Adresse ändern')

@section('content')
    @if(Session::has('message'))
    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
    @endif
    <div class="card">
        <div class="card-header">
            <p>
                @if ($user->isCompany())
                    Bitte hinterlegen Sie hier Ihre Rechnungsadresse.
                @else
                    An diese Adresse schicken wir deine Produktsamples.
                @endif
            </p>
        </div>
        <div class="card-content">
            <div class="card-body">
                <form id="change-address" method="POST" action="{{ route('account.saveAddress') }}" autocomplete="on">
                    @method('patch')
                    @csrf
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-row mb-1">
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="Vorname" name="firstname" value="{{ old('firstname', $user->firstname) }}" required>
                                    @error('firstname')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col-6">
                                    <input type="text" class="form-control" placeholder="Nachname" name="lastname" value="{{ old('lastname', $user->lastname) }}" required>
                                    @error('lastname')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row mb-1">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="Straße und Hausnummer" name="address" value="{{ old('address', $user->address) }}" required>
                                    @error('address')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row mb-1">
                                <div class="col-4">
                                    <input type="text" class="form-control" placeholder="PLZ" name="zip" value="{{ old('zip', $user->zip) }}" required>
                                    @error('plz')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Stadt" name="city" value="{{ old('city', $user->city) }}" required>
                                    @error('city')
                                        <div class="alert alert-danger" role="alert">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-12">
                                    <input type="text" class="form-control" placeholder="Land" name="country" value="{{ old('country', $user->country) }}" required>
                                    @error('country')
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