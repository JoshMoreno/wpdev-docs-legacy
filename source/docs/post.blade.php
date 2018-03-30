@extends('_layouts.docs')

@section('page_title', 'Post')

@section('content')
    @docsSection
        <p>A better post object. Ditch "The Loop".</p>
        <p>And in case you missed it, every template gets passed a <code>$Post</code> and <code>$Posts</code> variable.</p>
        <p>Read more about this in the <a href="/docs/default-data">Default Data</a> section.</p>
    @enddocsSection
    @docsSection
        @slot('title')
            Usage
        @endslot

        <div class="mb-4">
            <h5>Single</h5>
            @snippetPhp
                {{$page->snippet('post.singlePostUsage')}}
            @endsnippetPhp
        </div>
        <h5>Loop</h5>
        @snippetPhp
            {{$page->snippet('post.loopUsage')}}
        @endsnippetPhp
    @enddocsSection

    @include('_partials.docs.apiReference', ['class' => \WPDev\Models\Post::class])
@endsection
