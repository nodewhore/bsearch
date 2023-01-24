<p style="visibility:hidden;">1</p>
<style>
    .logo__c1{
    color: #f322fe;
    }
    .logo__c2{
    color: #065990;
    }
</style>
<div class="container nav">
    <div class="logo">
        <a href="/" class="nav__link" style="font-weight: 400!important;"><span class="logo__c1">Bottle</span><span class="logo__c2">Search</span></a>
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
        <div class="dropdown">
            <button class="nav__link" type="button"  data-bs-toggle="dropdown" aria-expanded="false"> <i class="bi bi-person-circle"></i></button>
            <ul class="dropdown-menu dropdown-menu-dark text-small" style="position: absolute; inset: 0px 0px auto auto; margin: 0px; transform: translate(0px, 34px);" data-popper-placement="bottom-end">
                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#modalUser" type="button"><i class="bi bi-person-lines-fill"></i> Профиль</a></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-gear-fill"></i> Настройки</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#"><i class="bi bi-box-arrow-right"></i> Выйти</a></li>
            </ul>
        </div>
    @endif
</div>
