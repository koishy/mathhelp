@extends('layouts/app')

@section('sidebar')
@foreach ($articles as $article)
<div class="item">
    <a href="/articles/{{$article->id}}">
        {{$article->title}}    
    </a>
</div>
@endforeach
@endsection


@section('content')
<div class="jumbotron">
    <h1 class="display-4">MathHelp - best way to fail your exam</h1>
    <p class="lead">You can't do anything, give up and die</p>
    <hr class="my-4">
    <p>You suck</p>
    <button class="btn btn-primary btn-lg">Die</button>
</div>
@endsection