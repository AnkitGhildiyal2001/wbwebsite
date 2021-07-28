<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class InviteCountController extends Controller
{
    public function index(Request $request, $username)
    {
        $userIsValid = User::where('slug', $username)->exists();

        if($userIsValid) {
            $request->session()->put('user_invite', $username);
        }
        
        return redirect('/');
    }
}
