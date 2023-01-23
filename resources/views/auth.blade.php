@extends('template')
@section('title','Авторизация')
@section('content')
    <div class="container nav">
        <div class="logo">
            <a href="" class="nav__link logo">BottleSearch</a>
        </div>
        <div class="all-links">
            <a href="" class="nav__link">Главная</a>
            <a href="" class="nav__link">Комнаты</a>
            <a href="" class="nav__link">Пользователи</a>
            <a href="" class="nav__link">Истории</a>
            <a href="" class="nav__link">Топ</a>
        </div>
        <div class="search">
            <form action="#" method="GET" class="search-form">
                @csrf
                <input type="search" name="s" id="search-input" class="search-control" placeholder="Поиск...">
                <button type="submit" class="btn btn-search"><i class="bi bi-search"></i></button>
            </form>
        </div>
        <div class="auth">
            <button class="nav__link" type="button" data-bs-toggle="modal" data-bs-target="#modalUser"> <i class="bi bi-person-circle"></i></button>
        </div>
    </div>
    <!-- navbar -->
    <main class="main-auth container mt-5">
        <h1 class="mt-5 title">Авторизация</h1>
        <form action="" class="d-flex flex-column auth-form mt-5">
            <input type="email" name="email" id="email" placeholder="E-mail" class="auth-input mt-3">
            <input type="password" name="pass" id="password" placeholder="Пароль" class="auth-input mt-3">
            <div class="error mt-3">
                <p>Неверный логин или пароль</p>
            </div>
            <button type="submit" class="auth-btn mt-3">Войти</button>
            <p class="mt-3">Нет аккаунта? <a href="/register" class="link">Зарегистрируйтесь...</a></p>
        </form>

    </main>

@endsection
