@extends('_layouts.docs')
@section('page_title', 'Overview')

@section('content')

    @component('_components.docs.section')
        <p>This plugin doesn't change core behavior. It just adds a layer to enhance your development experience. So feel free to use as many or as little of the features packed in this plugin. It's just a tool in your arsenal. Let's get started!</p>
    @endcomponent

    @component('_components.docs.section')
        @slot('title')
            Requirements
        @endslot
        <ul>
            <li>PHP >= 7.1.3</li>
            <li>WordPress >= 4.9</li>
            <li>Composer</li>
        </ul>
    @endcomponent

    @component('_components.docs.section')
        @slot('title')
            Installation
        @endslot
        <p>WP-CLI</p>
        <pre>
            <code class="language-clike">
                # Download the plugin
                wp plugin install https://github.com/JoshMoreno/wpdev/archive/v1.0.0-alpha.zip

                # Move into wpdev folder
                cd plugins/wpdev

                # Install dependencies
                composer install -o

                # Activate
                wp plugin activate wpdev
            </code>
        </pre>
        <br>
        <p>Old Fashion</p>
        <ol>
            <li>Download the plugin and drop it into the plugins folder</li>
            <li>Run <code>composer install -o</code> in the wpdev plugin folder</li>
            <li>Activate</li>
        </ol>
    @endcomponent
@endsection
