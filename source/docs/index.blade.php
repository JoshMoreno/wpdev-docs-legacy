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
        </ul>
    @endcomponent

    @component('_components.docs.section')
        @slot('title')
            Installation
        @endslot
        <div class="mb-5">
            <h5>WP-CLI</h5>
            <pre>
                <code class="language-clike">
                    wp plugin install --activate {{$page->downloadUrl}}
                </code>
            </pre>
        </div>
        <div class="mb-5">
            <h5>Composer</h5>
            <pre>
                <code class="language-clike">
                    composer require joshmoreno/wpdev
                </code>
            </pre>
            <p>Then activate in WP of course.</p>
        </div>
        <div class="mb-5">
            <h5>Manually</h5>
            <p>Nothing special. Just install and activate like any other plugin.</p>
        </div>
    @endcomponent
@endsection
