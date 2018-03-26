@extends('_layouts.docs')

@section('page_title', 'Controllers')

@section('content')

    @component('_components.docs.section')
        <div>Controllers help keep your templates clean by separating the business layer from the presentation layer, all following the WP template hierarchy you're used to.</div>
    @endcomponent

    @component('_components.docs.section')
        @slot('title')
            Setup
        @endslot
        <p>Create a <code>controllers</code> folder in the root of your theme.</p>
        <p>Create controller files inside this folder.</p>
        <p>Enjoy!</p>
    @endcomponent

    @component('_components.docs.section')
        @slot('title')
            Naming
        @endslot
        <p>Create controllers following the same naming convention as the <a href="https://wphierarchy.com/">WP Template Hierarchy</a>. And feel free to organize into subfolders.</p>
        <h5 class="mt-4">Examples</h5>
        <div>
            <p>Front Page - <code>controllers/front-page.php</code></p>
        </div>
        <div>
            <p>Single Post - <code>controllers/single-post.php</code></p>
        </div>
        <h5 class="mt-4">Gotchas</h5>
        <p>Only one controller will be run. The most specific.</p>
        <p></p>
    @endcomponent

    @component('_components.docs.section')
        @slot('title')
            Requirement
        @endslot
        <p>The class must implement <code>WPDev\Controller\ControllerInterface</code>.</p>
        <p>To fulfill this implementation, the class must contain a <code>build()</code> method which returns an <code>array</code>.</p>
    @endcomponent

    @component('_components.docs.section')
        @slot('title')
            Boilerplate
        @endslot
        <pre>
            <code class="language-php">
                &lt;?php
                namespace MyTheme;

                use WPDev\Controller\ControllerInterface;

                class SinglePost implements ControllerInterface
                {
                    /**
                    * The default data set by wpdev before calling build()
                    * @var array
                    */
                    public $defaultData = [];

                    public function build()
                    {
                        return [];
                    }
                }
            </code>
        </pre>
    @endcomponent

@endsection
