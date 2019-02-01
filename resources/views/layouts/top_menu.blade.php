@foreach ($categories as $category)

    @if ($category->children->where('published', 1)->count())
        <li class="nav-item dropdown">
            <a href="{{url("/blog/category/$category->slug")}}" class="nav-link dropdown-toggle" data-toggle="dropdown">
                {{$category->title}} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu">
                @include('layouts.top_menu', ['categories' => $category->children])
            </ul>
    @else
        <li>
            <a class="nav-link" href="{{url("/blog/category/$category->slug")}}">
                {{$category->title}}
            </a>
    @endif
        </li>
@endforeach