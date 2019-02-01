@foreach ($categories as $category)

    @if ($category->children->where('published', 1)->count())
        <li class="nav-item dropdown">
            <a href="{{url("/blog/category/$category->slug")}}" class="nav-link dropdown-toggle" data-toggle="dropdown">
                {{$category->title}} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
                <a class="dropdown-item" href="{{url("/blog/category/$category->slug")}}">
                    {{ $category->title }}
                </a>
                @foreach($category->children as $child)
                    <a class="dropdown-item" href="{{url("/blog/category/$child->slug")}}">
                        - {{ $child->title }}
                    </a>
                @endforeach
            </ul>
    @else
        <li>
            <a class="nav-link" href="{{url("/blog/category/$category->slug")}}">
                {{$category->title}}
            </a>
    @endif
        </li>
@endforeach