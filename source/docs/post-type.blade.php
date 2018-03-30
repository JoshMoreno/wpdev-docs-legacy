@extends('_layouts.docs')

@section('page_title', 'PostType')

@section('content')
    @docsSection
        <p>Register custom post types with ease.</p>
    @enddocsSection

    @docsSection
        @slot('title')
            Usage
        @endslot
        @snippetPhp
            {{$page->snippet('postType.usage')}}
        @endsnippetPhp
    @enddocsSection

    @include('_partials.docs.apiReference', ['class' => \WPDev\Facades\PostType::class])
@endsection
