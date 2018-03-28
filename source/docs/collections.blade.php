@extends('_layouts.docs')

@section('page_title', 'Collections')

@section('content')
    @component('_components.docs.section')
        <p>Collections help you manipulate arrays quickly and fluently. Say goodbye to complicated conditionals and temporary variables.</p>
        <p>
            <a href="https://laravel.com/docs/5.6/collections" target="_blank" rel="noopener noreferrer" class="btn btn-secondary">Official Docs on Laravel.com</a>
        </p>
    @endcomponent

    @component('_components.docs.section')
        @slot('title')
            Example
        @endslot
        <p>Let's say you have an array of wpdev Posts and you want to group them by year (which is an ACF field).</p>
        <pre>
            <code class="language-php">
                $postsByYear = collect($Posts)->groupBy(function($post) {
                    return $post->acfField('year_field');
                });

                /*
                [
                    '2018' => [ // posts w/ year_field == 2018 ],
                    '2017' => [ // posts w/ year_field == 2017 ],
                    '2016' => [ // posts w/ year_field == 2016 ],
                ]
                */
            </code>
        </pre>

    @endcomponent

@endsection
