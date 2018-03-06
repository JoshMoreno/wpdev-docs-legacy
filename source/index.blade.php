@extends('_layouts.master')

@section('body')
    <div class="container">
        <h1 class="display-1">Rapid Modern<br>WordPress Dev</h1>
        <p class="lead">A framework to ease the pain</p>
    </div>
    <hr>
    <div class="container">
        <h2>Features</h2>
        @foreach($features as $feature)
            <div class="row">
                <div class="col">
                    <h5>{{$feature->title}}</h5>
                    <p>{{$feature->description}}</p>
                </div>
            </div>
        @endforeach

    </div>
@endsection
