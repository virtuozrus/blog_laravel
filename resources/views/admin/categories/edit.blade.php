@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrump')
            @slot('title') Редактирование категории @endslot
            @slot('parent') Главная @endslot
            @slot('active') Категории @endslot
        @endcomponent

        <hr />

        <form action="{{route('admin.category.update', $category)}}" class="form-horizontal" method="post">
            <input type="hidden" name="_method" value="put">
            {{ csrf_field() }}

            {{--include form--}}
            @include('admin.categories.partials.form')
        </form>
    </div>

@endsection