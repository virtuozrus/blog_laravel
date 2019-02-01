@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="jumbotron">
                    <button class="btn btn-secondary">
                        Категорий <span class="badge badge-light">{{$count_categories}}</span>
                    </button>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <button class="btn btn-secondary">
                        Материалов <span class="badge badge-light">{{$count_articles}}</span>
                    </button>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <button class="btn btn-secondary">
                        Посетителей <span class="badge badge-light">0</span>
                    </button>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="jumbotron">
                    <button class="btn btn-secondary">
                        Сегодня <span class="badge badge-light">0</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6">
                <a href="{{route('admin.category.create')}}" class="btn btn-block btn-outline-secondary">Создать категорию</a>
                @foreach($categories as $category)
                    <a href="{{route('admin.category.edit', $category)}}" class="list-group-item list-group-item-action">
                        <h4 class="list-group-item-heading">{{$category->title}}</h4>
                        <p class="list-group-item-text">
                            {{$category->articles()->count()}}
                        </p>
                    </a>
                @endforeach
            </div>
            <div class="col-sm-6">
                <a href="#" class="btn btn-block btn-outline-secondary">Создать материал</a>
                @foreach($articles as $article)
                    <a href="{{route('admin.article.edit', $article)}}" class="list-group-item list-group-item-action">
                        <h4 class="list-group-item-heading">{{$article->title}}</h4>
                        <p class="list-group-item-text">
                            {{$article->categories()->pluck('title')->implode(', ')}}
                        </p>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection