<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function changePassword()
    {
        return view('account.password');
    }

    public function savePassword(Request $request)
    {
        $validation = $request->validate([
            'oldpw' => 'required|',
            'newpw' => 'required|min:8',
            'newpw_confirmation' => 'same:newpw',
        ],
        [
            'newpw_confirmation.same' => 'Die Passwörter stimmen nicht überein!',
        ]);

        $passwordMatches = Hash::check($validation['oldpw'], auth()->user()->password);

        if($passwordMatches) {
            auth()->user()->update([
                'password' => Hash::make($validation['newpw']),
            ]);

            $request->session()->flash('message', 'Dein Passwort wurde geändert!'); 
            $request->session()->flash('alert-class', 'alert-success'); 
        } else {
            $request->session()->flash('error', 'Das eingegebene Passwort hat nicht mit deinem hinterlegtem übereinstimmt!'); 
        }

        return back();
    }

    public function changeAddress()
    {
        $user = auth()->user();
        return view('account.address', compact('user'));
    }

    public function saveAddress(Request $request)
    {
        $validate = $request->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'address' => 'required|string',
            'zip' => 'required|string',
            'city' => 'required|string',
            'country' => 'nullable|string',
        ]);

        $user = auth()->user();
        $user->update($validate);

        if($user->wasChanged('firstname') || $user->wasChanged('lastname')) {
            $user->update([
                'name' => $validate['firstname'] . ' ' . $validate['lastname']
            ]);
        }

        $request->session()->flash('message', 'Adresse wurde gepspeichert!'); 
        $request->session()->flash('alert-class', 'alert-success'); 

        if($request->session()->get('campaign_redirect_url') !== null) {
            $redirect_url = $request->session()->get('campaign_redirect_url');
            $request->session()->forget('campaign_redirect_url');
            return redirect($redirect_url);
        }

        return back();
    }
}
