<section id="Requirements" class="pb-4">
    @if(!empty($title))
        <h3 class="underline underline--secondary">
            <a href="#{{str_slug($title)}}" class="text-secondary no-hover-underline h5">
                <i class="fas fa-hashtag"></i>
            </a>
            {{$title}}
        </h3>
    @endif
    {{$slot}}
</section>