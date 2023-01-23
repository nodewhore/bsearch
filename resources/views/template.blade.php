
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/app.css">
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
                <h4 class="modal-title w-100 fw-bold mt-5">Информация о пользователе nodewhore:</h4>
                <p>Имя: nodewhore</p>
                <p>E-mail: vladqqsj@bk.ru</p>
                <p>Номер +79507771763</p>
                <p>E-mail: vladqqsj@bk.ru</p>
                <p>Дней с момента регистрации: 1</p>
                <a href="" class="btn-modal modal-yes btn-center">Редактировать</a>
            </div>
            <div class="right-user">
                <img src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png" alt="avatar"
                     class="user-avatar">
                <h4 class="">Ваши комнаты:</h4>
                <a href="" class="btn-modal modal-yes w-100">Ул. Пешкова 18, г. Борисоглебск</a>
                <a href="" class="btn-modal modal-yes w-100">Ул. Пешкова 18, г. Борисоглебск</a>
            </div>
        </div>
            </div>
    </div>
    </div>
</div>

</body>

</html>
