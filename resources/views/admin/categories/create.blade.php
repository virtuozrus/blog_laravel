@extends('admin.layouts.app_admin')

@section('content')

    <div class="container">

        @component('admin.components.breadcrump')
            @slot('title') Создание категории @endslot
            @slot('parent') Главная @endslot
            @slot('active') Категории @endslot
        @endcomponent

            <hr />

            <form action="{{route('admin.category.store')}}" class="form-horizontal" method="post">
                {{ csrf_field() }}

                {{--include form--}}
                @include('admin.categories.partials.form')
            </form>
    </div>

@endsection