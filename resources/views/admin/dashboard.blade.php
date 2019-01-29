@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <button class="btn btn-primary">
                        Категорий <span class="badge badge-light">0</span>
                    </button>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <button class="btn btn-primary">
                        Материалов <span class="badge badge-light">0</span>
                    </button>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <button class="btn btn-primary">
                        Посетителей <span class="badge badge-light">0</span>
                    </button>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <button class="btn btn-primary">
                        Сегодня <span class="badge badge-light">0</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <a href="#" class="btn btn-block btn-outline-secondary">Создать категорию</a>
                <a href="#" class="list-group-item list-group-item-action">
                    <h4 class="list-group-item-heading">Категория первая</h4>
                    <p class="list-group-item-text">
                        Количество материалов
                    </p>
                </a>
            </div>
            <div class="col-sm-6">
                <a href="#" class="btn btn-block btn-outline-secondary">Создать материал</a>
                <a href="#" class="list-group-item list-group-item-action">
                    <h4 class="list-group-item-heading">Материал первый</h4>
                    <p class="list-group-item-text">
                        Категория
                    </p>
                </a>
            </div>
        </div>
    </div>
@endsection