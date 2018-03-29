@extends('_layouts.docs')

@section('page_title', 'Plugin Template')

@section('content')
    @component('_components.docs.section')
        <p>Easily include and pass data to theme overridable plugin templates.</p>
    @endcomponent
    @component('_components.docs.section')
        @slot('title')
            Requirements
        @endslot
        <p>This works generally the same way as the regular <code>WPDev\Template\Template</code> helper, but with one key difference.</p>
        <p>Instead of passing in just the filename of the template, an absolute path to the plugin's template file should be passed in. This is the file that will be used if there isn't an overriding template found in the child/parent themes.</p>
    @endcomponent
    @component('_components.docs.section')
        @slot('title')
            Override in Theme
        @endslot
        <p>To override a plugin's template file in your theme, the file must be located in <code>templates/plugins/&#123;&#123;plugin-folder-name&#125;&#125;/&#123;&#123;name-of-template.php&#125;&#125;</code></p>
        <p>For example if the plugin you're overriding is in a folder called my-plugin, then it will look for templates in the child/parent theme's <code>templates/plugins/my-plugin/</code> folder. This is to help avoid template naming conflicts between plugins. It also has the benefit of keeping the templates folder organized.</p>
    @endcomponent

    @component('_components.docs.section')
        @slot('title')
            Simple Include
        @endslot
        <pre>
            <code class="language-php">
                use WPDev\Template\PluginTemplate;

                PluginTemplate::include(__DIR__.'/reusable-component.php');
                // or with global function
                plugin_template(__DIR__.'/reusable-component.php');
            </code>
        </pre>
    @endcomponent

    @component('_components.docs.section')
        @slot('title')
            Include with Data
        @endslot
        <pre>
            <code class="language-php">
                use WPDev\Template\PluginTemplate;

                PluginTemplate::include(__DIR__.'/reusable-component.php', ['title' => 'So Easy']);
                // or with global function
                plugin_template(__DIR__.'/reusable-component.php', ['title' => 'So Easy']);
            </code>
        </pre>
    @endcomponent
    @include('_partials.docs.apiReference', ['class' => $page['classes']['PluginTemplate']])
@endsection
