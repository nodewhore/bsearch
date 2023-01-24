<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    if(Auth::check()){
       return redirect('home');
    }
    else{
    return view('welcome');
    }
});
Route::get('rooms',function ()
{
    return view('rooms');
});

Route::name('general.')->group(function (){
Route::view('/home','home')->middleware('auth')->name('home');
    Route::get('/auth', function () {
        if(Auth::check()) {
            return redirect(route('general.home'));
        }

        return view('auth');
    })->name('auth');
Route::post('/auth',[\App\Http\Controllers\AuthController::class,'login']);

    Route::get('/logout',function (){
        Auth::logout();
        return redirect(route('general.home'));
    })->name('logout');
    Route::get('/register', function () {
        if(Auth::check()) {
            return redirect(route('general.home'));
        }
        return view('register');
    })->name('register');
    Route::post('/register',[App\Http\Controllers\RegisterController::class,'register']);
});



