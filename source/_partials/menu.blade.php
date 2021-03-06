<ul class="list-unstyled menu-depth--1 row">
    @foreach($page->navItems as $item)
        <li class="col-12 pb-4">
            @if ($item->children)
                <h5 class="border-bottom pb-1">{{$item->text}}</h5>
            @else
                <a class="h5" href="{{$item->url}}">
                    {{$item->text}}
                </a>
            @endif

            @if($item->children)
                <ul class="list-unstyled menu-depth--2">
                    @foreach($item->children as $child)
                        <li>
                            <a class="text-white {{$page->getPath()}}" href="{{$child->url}}">
                                {{$child->text}}
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
</ul>