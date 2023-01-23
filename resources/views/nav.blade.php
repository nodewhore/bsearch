<p style="visibility:hidden;">1</p>
<div class="container nav">
    <div class="logo">
        <a href="" class="nav__link logo">BottleSearch</a>
    </div>
    @if(Auth::check())
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
    @endif
</div>
