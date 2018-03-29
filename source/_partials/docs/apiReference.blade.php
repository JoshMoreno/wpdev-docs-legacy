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
                        <div class="col-auto mr-2">
                            <p>{{str_replace('|', ' | ', $method->getReturnType())}}</p>
                        </div>
                        <div class="col-auto">
                            <p>{!! backticksToCodeTags( $method->getReturnDescription()) !!}</p>
                        </div>
                    </div>
                </section>
            @endif

        </li>
    @endforeach
</ul>
@enddocsSection