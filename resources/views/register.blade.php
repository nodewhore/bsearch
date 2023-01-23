@extends('template')

@section('content')
    <p style="visibility:hidden;">1</p>
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
                <input type="search" name="" id="search-input" class="search-control" placeholder="Поиск...">
                <button type="submit" class="btn btn-search"><i class="bi bi-search"></i></button>
            </form>
        </div>
        <div class="auth">
            <a href="" class="nav__link"> <i class="bi bi-person-circle"></i></a>
        </div>
    </div>
    <main class="main-auth container mt-5">
        <h1 class="mt-5 title">Регистрация</h1>
        <form action="" class="d-flex flex-column auth-form mt-5">
            <input type="email" name="email" id="email" placeholder="E-mail" class="auth-input mt-3">
            <input type="text" name="pass" id="pass" placeholder="Пароль" class="auth-input mt-3">
            <input type="text" name="pass_r" id="pass_r" placeholder="Повторите пароль" class="auth-input mt-3">
            <input type="text" name="email" id="email" placeholder="Выберите город" class="auth-input mt-3">
            <input type="text" name="number" id="number" placeholder="Номер телефона" class="auth-input mt-3">
            <div class="form-check w-50">
                <input class="form-check-input mt-3" type="checkbox" value="" id="flexCheckChecked">
                <label for="flexCheckChecked" class="form-check-label mt-2">Я согласен с условиями <a href=""
                                                                                                      class="link">пользовательского соглашения</a></label>
            </div>
            <div class="error mt-3">
                <p>Вы заполнили не все поля</p>
            </div>
            <button type="submit" class="auth-btn mt-3">Войти</button>
            <p class="mt-3">Есть аккаунт? <a href="" class="link">Авторизуйтесь...</a></p>
        </form>
    </main>
@endsection
