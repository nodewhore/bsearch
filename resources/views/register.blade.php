@extends('template')
@section('title','Регистрация')
@section('content')
    <p style="visibility:hidden;">1</p>
    @extends('nav')
    <main class="main-auth container mt-3">
        <h1 class="mt-5 title">Регистрация</h1>
        <form action="{{route('general.register')}}" method="POST" class="d-flex flex-column auth-form mt-5" id="register-form">
            @csrf
            <input type="text" name="email" id="email" placeholder="E-mail" class="auth-input mt-3">
            <input type="text" name="name" id="name" placeholder="Имя" class="auth-input mt-3">
            <input type="text" name="password" id="password" placeholder="Пароль" class="auth-input mt-3">
            <input type="text"  id="password_2" placeholder="Повторите пароль" class="auth-input mt-3">
            <input type="text" name="city" id="city" placeholder="Выберите город" class="auth-input mt-3">
            <input type="text" name="number" id="number" placeholder="Номер телефона" class="auth-input mt-3">
            <div class="form-check w-50">
                <input class="form-check-input mt-3" type="checkbox" value="" id="flexCheckChecked">
                <label for="flexCheckChecked" class="form-check-label mt-2">Я согласен с условиями <a href=""
                                                                                                      class="link">пользовательского соглашения</a></label>
            </div>
{{--            @error--}}
{{--            <div class="error mt-3">--}}
{{--                <p>{{$message}}</p>--}}
{{--            </div>--}}
{{--            @enderror--}}
            <button type="submit" class="auth-btn mt-3">Войти</button>
            <p class="mt-3">Есть аккаунт? <a href="/auth" class="link">Авторизуйтесь...</a></p>
        </form>
    </main>
@endsection
