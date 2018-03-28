@extends('_layouts.docs')

@section('page_title', 'Hooks')

@section('content')
    @component('_components.docs.section')
        <p>Coming Soon.</p>
    @endcomponent

    @component('_components.docs.section')
        @slot('title')
            Actions
        @endslot
        <p>Todo</p>
    @endcomponent

    @component('_components.docs.section')
        @slot('title')
            Filters
        @endslot
        <p>Todo</p>
    @endcomponent


@endsection
