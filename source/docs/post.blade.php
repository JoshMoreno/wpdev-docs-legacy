@extends('_layouts.docs')

@section('page_title', 'Post')

@section('content')
    @docsSection
        <p>A better post object. Ditch "The Loop".</p>
    @enddocsSection

    @include('_partials.docs.apiReference', ['class' => $page['classes']['Post']])
@endsection
