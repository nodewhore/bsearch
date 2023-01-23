<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if(Auth::check()){
            return redirect(route('general.home'));
        }
        $formFields = $request->only(['email', 'password']);
        if (Auth::attempt($formFields)) {
            return redirect()->intended('/');
        }
    }
}
