@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="badge badge-primary">Категории 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="badge badge-primary">Материалов 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="badge badge-primary">Поситителей 0</span></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <p><span class="badge badge-primary">Сегодня 0</span></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <a href="" class="btn btn-block btn-outline-secondary">Создать Категорию</a>
                <a href="" class="list-group-item">
                    <h4 class="list-group-item-heading">Категория первая</h4>
                    <p class="list-group-iten-text">
                        Количество материаллов
                    </p>
                </a>
            </div>
            <div class="col-sm-6">
                <a href="" class="btn btn-block btn-outline-secondary">Создать Материал</a>
                <a href="" class="list-group-item">
                    <h4 class="list-group-item-heading">Материал первая</h4>
                    <p class="list-group-iten-text">
                        Категория
                    </p>
                </a>
            </div>
        </div>
    </div>
@endsection