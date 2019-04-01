@extends('layouts/app')

@section('content')
<form action="/articles" method="POST">
    @if ($errors->any())
    <div class="alert alert-danger">      
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif
    @csrf
    <label style="width:100%">
        <p>Заголовок</p>
        <input style="width:100%" class="form-control" type="text" name="title" value="{{old('title')}}">
    </label>
    <label style="width:100%">
        <p>Количество вводимых чисел</p>
        <input style="width:100%" class="form-control" type="number" name="values" value="{{2|old('values')}}">
    </label>
    <label style="width:100%">
        <p>Код формулы (Javascript Нотация) values - числа</p>
        <input style="width:100%" class="form-control" type="text" name="formula" placeholder="values[0] + values[1]" value="{{old('formula')}}">
    </label>
    <br>
    <label style="width:100%">
        <p>Текст</p>
        <textarea style="width:100%" class="form-control" name="content" rows="10" id="content">{{old('content')}}</textarea>
    </label>
    <button class="btn btn-primary" style="width:100%;">Send</button>
</form>
@endsection