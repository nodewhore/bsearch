<?php

namespace App\Http\Controllers;
use App\Models\User;
//use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{

    public function register(Request $request){
        if(Auth::check()){
            return redirect(route('general.home'));
        }
        $validateFields = $request->validate([
            'email' => 'required|email',
            'name' =>'required',
            'password' =>'required',
            'city' => 'required',
            'number' => 'required'
        ]);
        if(User::where('email',$validateFields['email'])->exists()){
            return view(route('general.login'))->withErrors([
                'formError' => 'Пользователь уже зарегистрирован'
            ]);
        }
        $user = User::create($validateFields);
        if($user){
            Auth::login($user);
            return redirect(route('general.home'));
        }
        else{
            return view(route('general.login'))->withErrors([
                'formError' => 'Произошла ошибка при регистрации'
            ]);
        }
    }
}
