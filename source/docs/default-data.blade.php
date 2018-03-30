@extends('_layouts.docs')

@section('page_title', 'Default Data')

@section('content')
    @component('_components.docs.section')
        <p>Initial data to get you going even faster!</p>
        <p>Each template rendered by WordPress has a <code>$data</code> associative array exposed to it.</p>
        <p>You can access it like a normal array <code>$data['Post']</code> or directly <code>$Post</code> since it's also passed through <code>extract()</code>.</p>
    @endcomponent

    @component('_components.docs.section')
        @slot('title')
            Post
        @endslot
        <p>An instance of <code>\WPDev\Models\Post</code> objects created from the global post.</p>
    @endcomponent

    @component('_components.docs.section')
        @slot('title')
            Posts
        @endslot
        <p>An array of <code>\WPDev\Models\Post</code> objects created from the main query.</p>
    @endcomponent


@endsection
