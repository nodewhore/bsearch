@extends('template')
@section('content')
    <div class="welcome">
        <p style="visibility:hidden;">1</p>
        <div class="container nav-one">
            <div class="logo w-100">
                <a href="" class="nav__link logo text-center">BottleSearch</a>
            </div>
            <!-- <div class="all-links">
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
            </div> -->
        </div>
        <div class="next-block">
            <div class="left-next">
                <h1 class="title-next">BottleSearch</h1>
                <p class="par-next">Сервис по поиску собутыльников</p>
            </div>
            <div class="right-next">
                <a href="/auth" class="btn-next">Вперед > </a>
            </div>
        </div>
    </div>
@endsection
