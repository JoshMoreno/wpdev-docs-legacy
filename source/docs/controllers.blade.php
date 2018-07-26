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
        <p>Create controllers following the same file naming convention as the <a href="https://wphierarchy.com/">WP Template Hierarchy</a>. Also make sure, it follows the same folder structure. See below for examples.</p>
        <p>You can name the class whatever you'd like, but a good rule of thumb would be to name it after the file using upper camel case (aka pascal case). For example, if you have a <code>single-post.php</code> file you would name the class <code>SinglePost</code>.</p>
        <h5 class="mt-4">Examples</h5>
        <div>
            <p>Front Page - <code>controllers/front-page.php</code></p>
        </div>
        <div>
            <p>Single Post - <code>controllers/single-post.php</code></p>
        </div>
        <div>
            <p>Page Template located at <code>custom-page-templates/full-width.php</code> - <code>controllers/custom-page-templates/full-width.php</code></p>
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
        <p>Use the snippet below to get started even faster. Just rename <code>&#123;&#123;MyTheme&#125;&#125;</code> to the namespace of your theme or project and change <code>&#123;&#123;SinglePost&#125;&#125;</code> to something that makes sense.</p>
        <pre>
            <code class="language-php">
                &lt;?php
                namespace &#123;&#123;MyTheme&#125;&#125;;

                use WPDev\Controller\ControllerInterface;

                class &#123;&#123;SinglePost&#125;&#125; implements ControllerInterface
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
