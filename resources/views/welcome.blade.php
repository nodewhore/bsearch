@extends('template')
@section('title','Добро пожаловать')
@section('content')
    <div class="welcome">
{{--        @extends('nav')--}}
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
