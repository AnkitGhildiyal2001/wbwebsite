<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function setTheme()
    {
        $currentUser = auth()->user();

        $newTheme = $currentUser->darkmode ? null : 1;

        $currentUser->darkmode = $newTheme;
        $currentUser->save();

        return back();
    }
}
