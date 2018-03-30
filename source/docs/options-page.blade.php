@extends('_layouts.docs')

@section('page_title', 'OptionsPage')

@section('content')
    @docsSection
        <p>Add custom admin pages with ease.</p>
    @enddocsSection

    @docsSection
        @slot('title')
            Usage
        @endslot
        @snippetPhp
            {{$page->snippet('optionsPage.usage')}}
        @endsnippetPhp
    @enddocsSection

    @include('_partials.docs.apiReference', ['class' => \WPDev\Facades\OptionsPage::class])
@endsection
