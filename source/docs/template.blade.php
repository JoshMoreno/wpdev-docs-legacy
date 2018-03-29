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
    @php
    /** @var \WPDev\Docs\ClassParser $class */
        $class = $page['classes']['Template'];
    @endphp
    @docsSection
        @slot('title')
            API Reference
        @endslot
        <h5 class="mb-3">Public Methods</h5>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>Method</td>
                    <td>Summary</td>
                </tr>
            </thead>
            <tbody>
                @foreach($class->getPublicMethods() as $method)
                    <tr>
                        <td>
                            <a href="#api-{{$method->getName()}}">
                                {{$method->getName()}}
                            </a>
                            @if($method->isStatic())
                                <br>
                                <small><em>static</em></small>
                            @endif
                        </td>
                        <td>
                            {!! backticksToCodeTags($method->getSummary()) !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <ul class="list-unstyled">
            @foreach($class->getPublicMethods() as $method)
                <li id="api-{{$method->getName()}}" class="method-detail py-4 {{!$loop->last ? 'border-bottom border-dark' : ''}}">
                    <h4>{{$method->getName()}}</h4>
                    <p class="lead">{!! $method->getSynopsis() !!}</p>


                    @if($method->getSummary())
                        <section class="method-detail__section mb-4">
                            <div class="text-muted mb-1"><strong>Summary</strong></div>
                            {!! backticksToCodeTags($method->getSummary()) !!}
                        </section>
                    @endif

                    @if ($method->getNumberOfParameters())
                        <section class="method-detail__section mb-4">
                            <div class="text-muted mb-1"><strong>Parameters</strong></div>
                            @foreach($method->getParameters() as $parameter)
                                <div class="mb-2 row">
                                    <div class="col-sm-3 col-md-2">
                                        {{$parameter['name']}}
                                    </div>
                                    <div class="col-sm-9 col-md-10">
                                        {{$parameter['description']}}
                                    </div>
                                </div>
                            @endforeach
                        </section>
                    @endif

                    @if($method->hasReturnTag())
                        <section class="method-detail__section mb-4">
                            <div class="text-muted mb-1"><strong>Returns</strong></div>
                            <div class="row">
                                <div class="col-sm-3 col-md-2">
                                    <p>{{$method->getReturnType()}}</p>
                                </div>
                                <div class="col-sm-9 col-md-10">
                                    <p>{!! backticksToCodeTags($method->getReturnDescription()) !!}</p>
                                </div>
                            </div>
                        </section>
                    @endif

                </li>
            @endforeach
        </ul>
    @enddocsSection
@endsection
