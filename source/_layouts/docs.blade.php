@extends('_layouts.master')

@section('body')
    <div class="container">
        <div class="row">
            <aside class="py-4 d-none d-lg-block col-lg-4 col-xl-3">
                @include('_partials.docsNav')
            </aside>
            <main class="py-4 col-lg-8 col-xl-9">
                <h2 class="underline line-height-1">@yield('page_title')</h2>
                @yield('content')
                <a></a>
            </main>
        </div>
    </div>
@endsection
