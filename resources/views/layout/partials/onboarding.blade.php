<div class="modal fade in text-left show" id="onboardingForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" style="display: block;z-index:7000;" aria-modal="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel33">Herzlich Wilkommen, {{ auth()->user()->firstname }}!</h4>
        </div>
        <form action="{{ route('influencer.categories') }}" method="post">
            @csrf
            @method('post')
            <div class="modal-body">
                <h5>Vielen Dank für deine Registrierung.</h5>
                <p>Noch eine kleine Sache bevor es losgeht: Bitte wähle aus den Kategorien unten maximal 3 aus, welche deinen Content am besten beschreiben.</p>
                @if ($errors->first('category'))
                        <div class="alert alert-danger">
                            Bitte wähle mindestens 1 aber maximal 3 Kategorien.
                        </div>
                    @endif
                <div class="row">
                    <div class="col-md-6 col-12">
                        @foreach ($categories->slice(0,8) as $category)
                            <li class="d-flex justify-content-between align-items-center py-25">
                                <span class="vs-checkbox-con vs-checkbox-primary">
                                    <input type="checkbox" name="category[]" value="{{ $category->id }}" {{ in_array($category->id, old('category', [])) ? 'checked' : '' }}>
                                    <span class="vs-checkbox">
                                        <span class="vs-checkbox--check">
                                        <i class="vs-icon feather icon-check"></i>
                                        </span>
                                    </span>
                                    <span class="">{{ $category->name }}</span>
                                </span>
                            </li>
                        @endforeach
                    </div>
                    <div class="col-md-6 col-12">
                        @foreach ($categories->slice(8) as $category)
                            <li class="d-flex justify-content-between align-items-center py-25">
                                <span class="vs-checkbox-con vs-checkbox-primary">
                                    <input type="checkbox" name="category[]" value="{{ $category->id }}" {{ in_array($category->id, old('category', [])) ? 'checked' : '' }}>
                                    <span class="vs-checkbox">
                                        <span class="vs-checkbox--check">
                                        <i class="vs-icon feather icon-check"></i>
                                        </span>
                                    </span>
                                    <span class="">{{ $category->name }}</span>
                                </span>
                            </li>
                        @endforeach
                    </div>
                </div>
                <div class="mt-1">
                    <p>Bitte gib noch deinen Geburtstag und dein Bundesland an:</p>
                    @if ($errors->has('birthyear') || $errors->has('birthmonth') || $errors->has('birthday'))
                        <div class="alert alert-danger">
                            Bitte gib ein valides Datum ein.
                        </div>
                    @endif
                    @if ($errors->has('state'))
                        <div class="alert alert-danger">
                            Bitte gib ein Bundesland an.
                        </div>
                    @endif
                    <div class="form-row">
                        <div class="col col-2">
                            <input type="tel" name="birthday" id="birthday" class="form-control" placeholder="Tag" minlength="1" maxlength="2" required value="{{ old('birthday') }}">
                        </div>
                        <div class="col col-4">
                            <select  name="birthmonth" id="birthmonth" required class="form-control">
                                <option value="" disabled selected default>Monat</option>
                                @foreach ($months as $key=>$month)
                                    <option value="{{ $key }}" {{ old('birthmonth') == $key ? 'selected' : '' }}>{{ $month }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col col-2">
                            <input type="tel" name="birthyear" id="birthyear" class="form-control" placeholder="Jahr" minlength="4" maxlength="4" required value="{{ old('birthyear') }}">
                        </div>
                    </div>
                    <div class="form-row mt-1">
                        <div class="col col-8">
                            <select  name="state" id="state" required class="form-control">
                                <option value="" disabled selected default>Bundesland</option>
                                @foreach ($states as $key=>$state)
                                    <option value="{{ $key }}" {{ old('state') == $key ? 'selected' : '' }}>{{ $state }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary waves-effect waves-light">Abschließen</button>
            </div>
        </form>
    </div>
    </div>
</div>