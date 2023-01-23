@extends('template')
@section('title','Авторизация')
@section('content')
    @extends('nav')

    <!-- navbar -->
    <main class="main-auth container mt-5">
        <h1 class="mt-5 title">Авторизация</h1>
        <form action="{{route('general.auth')}}" method="POST" class="d-flex flex-column auth-form mt-5">
            @csrf
            <input type="email" name="email" id="email" placeholder="E-mail" class="auth-input mt-3">
            <input type="password" name="password" id="password" placeholder="Пароль" class="auth-input mt-3">
            @error('password')
            <div class="error mt-3">
                <p>{{$message}}</p>
            </div>
            @enderror
            <button type="submit" class="auth-btn mt-3">Войти</button>
            <p class="mt-3">Нет аккаунта? <a href="/register" class="link">Зарегистрируйтесь...</a></p>
        </form>

    </main>

@endsection
