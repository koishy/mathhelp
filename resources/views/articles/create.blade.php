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
<form action="/articles">
    <label>
        <p>Title</p>
        <input class="form-control" type="text" name="title">
    </label>
    <br>
    <label>
        <p>Content</p>
        <textarea class="form-control" name="content" id="content" cols="30" rows="10"></textarea>
    </label>
</form>
@endsection