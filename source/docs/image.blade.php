@extends('_layouts.docs')

@section('page_title', 'Image')

@section('content')
    @docsSection
        <p>Images made easy.</p>
    @enddocsSection

    @docsSection
        @slot('title')
            Usage
        @endslot
        @snippetPhp
            @verbatim
            use WPDev\Models\Image;

            echo Image::create(80, 'large');
            /* Outputs something like...
            &lt;img src="https://site.com/wp-content/uploads/2018/02/sample-image-260x300.jpg"
                 width="260"
                 height="300"
                 alt="This is the alt text"
                 srcset="https://site.com/wp-content/uploads/2018/02/sample-image-260x300.jpg 260w, https://site.com/wp-content/uploads/2018/02/sample-image-768x887.jpg 768w, https://site.com/wp-content/uploads/2018/02/sample-image-887x1024.jpg 887w, https://site.com/wp-content/uploads/2018/02/sample-image.jpg 1143w"
                 sizes="(max-width: 260px) 100vw, 260px"
                 title="This is the title"
            &gt;
            */

            echo Image::create(80, 'large')
            ->setAttribute('class', 'img-responsive someclass')
            ->setAttribute('data-cool', 'pretty much')
            ->setAttribute('data-no-val')
            ->withCaption();
            /* Only if there actually is a caption it outputs something like...
            &lt;figure&gt;
            &lt;img src="https://site.com/wp-content/uploads/2018/02/sample-image-260x300.jpg"
                     width="260"
                     height="300"
                     alt="This is the alt text"
                     srcset="https://site.com/wp-content/uploads/2018/02/sample-image-260x300.jpg 260w, https://site.com/wp-content/uploads/2018/02/sample-image-768x887.jpg 768w, https://site.com/wp-content/uploads/2018/02/sample-image-887x1024.jpg 887w, https://site.com/wp-content/uploads/2018/02/sample-image.jpg 1143w"
                     sizes="(max-width: 260px) 100vw, 260px"
                     title="This is the title"
                     class="img-responsive someclass"
                     data-cool="pretty much"
                     data-no-val
                &gt;
            &lt;figcaption&gt;This is the caption&lt;/figcaption&gt;
            &lt;/figure&gt;
            */

            // You don't have to use it to output an image tag.
            $image = Image::create(80, 'large');
            $image_url = $image->url();
            $image_caption = $image->caption();
            $image_metadata = $image->metadata();
            @endverbatim
        @endsnippetPhp
    @enddocsSection

    @include('_partials.docs.apiReference', ['class' => $page['classes']['Image']])
@endsection
