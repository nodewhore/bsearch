<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <script src="jquery/dist/jquery.js"></script>
    <script src="/js/app.js"></script>
    <title>@yield('title')</title>
</head>
<body>
<div id="app">
    @yield('content')
</div>
<div class="send-cookie" id="cookies" >
    <p class="cookie-par">Мы используем файлы cookie для того,
        чтобы предоставить Вам больше возможностей при использовании сайта. Файлы cookie представляют
        собой небольшие фрагменты данных, которые временно сохраняются на вашем компьютере
        или мобильном устройстве, и обеспечивают более эффективную работу сайта.</p>
    <a href="#" class="btn-modal modal-yes" id="cookie-btn">Принять</a>
</div>
    <div class="start-modal modal fade" style="display: none" id="modalUser" aria-labelledby="modalUser" aria-hidden="true">
        <div class="modal-dialog w-100">
            <div class="modal-content w-100">
        <div class="modal-user w-100">
            <div class="modal-close" data-bs-dismiss="modal" style="cursor:pointer;">X</div>
            <div class="left-user">
                @if(isset(Auth::user()->id))
                <h4 class="modal-title w-100 fw-bold mt-5">Ваш ID: {{Auth::user()->id}}</h4>
                <p>Имя: {{Auth::user()->name}}</p>
                <p>E-mail: {{Auth::user()->email}}</p>
                <p>Номер: {{Auth::user()->number}}</p>
                <p>Город: {{Auth::user()->city}}</p>
                <p>Дата регистрации: {{Auth::user()->created_at->format('d-m-y')}}</p>
                <a href="" class="btn btn-outline-primary w-50 text-white">Редактировать</a>
                <br>
                <a href="/logout" class="btn btn-outline-danger text-white w-50 mt-3">Выйти</a>
            </div>
            <div class="right-user">
                <img src="{{Auth::user()->avatar}}" alt="avatar"
                     class="user-avatar">
                <h4 class="">Ваши комнаты:</h4>
                <a href="" class="btn-modal modal-yes w-100">Ул. Пешкова 18, г. Борисоглебск</a>
                <a href="" class="btn-modal modal-yes w-100">Ул. Пешкова 18, г. Борисоглебск</a>
            </div>
        </div>
            </div>
            @endif
    </div>
    </div>
<div class="preloader" style="background: var(--currentBlack)">
    <div class="spinner">
        <div class="spinner-border text-danger" style="width:100px; height:100px;" role="status">
            <span class="visually-hidden">Loading...</span>
        </div>
    </div>
</div>
</div>

</body>

</html>
