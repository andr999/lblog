@extends('layouts.layout', ['title' => "404 Ошибка"])

@section('content')
    <div class="card">
        <h2 class="card-header">404 Ошибка</h2>
        <img src="/img/404.jpg" alt="">
    </div>
    <a href="/" class="btn btn-danger btn-lg">Вернуться  на  главную</a>
@endsection
