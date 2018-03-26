<ul class="list-unstyled menu-depth--1 row line-height-2">
    @foreach($page->navItems as $item)
        <li class="col-12 pb-5">
            @if ($item->children)
                <h6 class="text-muted mb-3">{{$item->text}}</h6>
            @else
                <a href="{{$item->url}}">
                    {{$item->text}}
                </a>
            @endif

            @if($item->children)
                <ul class="list-unstyled menu-depth--2">
                    @foreach($item->children as $child)
                        <li>
                            <a class="text-white {{$page->activeClass($child->url)}}"
                               href="{{$child->url}}"
                            >
                                {{$child->text}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
</ul>