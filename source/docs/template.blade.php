@extends('_layouts.docs')

@section('page_title', 'Template')

@section('content')
    @component('_components.docs.section')
        <p>Easily include and pass data to theme templates.</p>
    @endcomponent
    @component('_components.docs.section')
        @slot('title')
            Requirements
        @endslot
        <p>By default, the file must be located within the the theme's <code>templates</code> folder. Subfolders are fine as the directory is traversed recursively.</p>
        <p>When working with child themes it works as you'd expect, child theme templates have precedence over parent theme templates.</p>
    @endcomponent

    @component('_components.docs.section')
        @slot('title')
            Simple Include
        @endslot
        <pre>
            <code class="language-php">
                use WPDev\Template\Template;

                Template::include('reusable-component.php');
                // or with global function
                template('reusable-component.php');
            </code>
        </pre>
    @endcomponent

    @component('_components.docs.section')
        @slot('title')
            Include with Data
        @endslot
        <pre>
            <code class="language-php">
                use WPDev\Template\Template;

                Template::include('reusable-component.php', ['title' => 'So Easy']);
                // or with global function
                template('reusable-component.php', ['title' => 'So Easy']);
            </code>
        </pre>
    @endcomponent
@endsection
