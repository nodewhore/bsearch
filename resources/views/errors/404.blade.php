@extends('template')
@section('title', '404 Error')
@section('content')
<div id="app">
    @extends('nav')
    <div class="error-404">
        <h4>404</h4>
        <p>Страница не найдена</p>
        <a href="" class="btn-modal modal-no">На главную</a>
    </div>
@endsection
