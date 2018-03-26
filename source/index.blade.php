@extends('_layouts.master', ['body_class' => 'front'])

@section('body')
    <section class="hero">
        <div class="container py-5">
            <h1 class="font-weight-light display-sm-4 display-md-3">Rapid Modern<br>WordPress Dev</h1>
            <p class="lead text-muted">A framework to ease the pain all in a plugin</p>
            <div class="row">
                <div class="col-auto">
                    <a class="btn btn-secondary" href="/docs">Docs</a>
                </div>
                <div class="col-auto pl-0">
                    <a class="btn btn-primary">Download</a>
                </div>
            </div>
        </div>
    </section>
    <section class="container py-5">
        <h2 class="text-center pb-3 pb-lg-4">Features</h2>
        <div class="row">
            @foreach($features as $feature)
                <div class="col-12 col-md-6 col-lg-4 {{$loop->last ? '' : 'pb-5'}}">
                    <h5>{{$feature->title}}</h5>
                    <p>{{$feature->description}}</p>
                </div>
            @endforeach
        </div>
    </section>
    <section class="pb-5">
        <div class="row">
            <a href="/docs" class="m-auto btn btn-primary btn-cta">Get Started</a>
        </div>
    </section>
@endsection
