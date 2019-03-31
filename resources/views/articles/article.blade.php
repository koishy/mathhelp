@extends('layouts/app')

@section('sidebar')
@foreach ($articles as $article_side)
<div class="item">
    <a href="/articles/{{$article_side->id}}">
        {{$article_side->title}}    
    </a>
</div>
@endforeach
@endsection


@section('content')
<div class="container">
    {{$article->content}}
</div>
@endsection