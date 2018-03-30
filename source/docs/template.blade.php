@extends('_layouts.docs')

@section('page_title', 'Template')

@section('content')
    @docsSection
        <p>Easily include and pass data to theme templates.</p>
    @enddocsSection

    @docsSection
        @slot('title')
            Requirements
        @endslot
        <p>By default, the file must be located within the the theme's <code>templates</code> folder. Subfolders are fine as the directory is traversed recursively.</p>
        <p>When working with child themes it works as you'd expect, child theme templates have precedence over parent theme templates.</p>
    @enddocsSection

    @docsSection
        @slot('title')
            Simple Include
        @endslot
        @snippetPhp
            use WPDev\Template\Template;

            Template::include('reusable-component.php');
            // or with global function
            template('reusable-component.php');
        @endsnippetPhp
    @enddocsSection

    @docsSection
        @slot('title')
            Include with Data
        @endslot
        @snippetPhp
            use WPDev\Template\Template;

            Template::include('reusable-component.php', ['title' => 'So Easy']);
            // or with global function
            template('reusable-component.php', ['title' => 'So Easy']);
        @endsnippetPhp
    @enddocsSection
    @include('_partials.docs.apiReference', ['class' => \WPDev\Template\Template::class])
@endsection
