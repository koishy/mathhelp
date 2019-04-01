@extends('layouts/app')

@section('content')
<form action="/articles/{{$article->id}}" method="POST">
    @method('PATCH')
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
        <input style="width:100%" class="form-control" type="text" name="title" value="{{$article->title}}">
    </label>
    <label style="width:100%">
        <p>Количество вводимых чисел</p>
        <input style="width:100%" class="form-control" type="number" name="values" value="{{$article->values}}">
    </label>
    <label style="width:100%">
        <p>Код формулы (Javascript Нотация) values - числа</p>
        <input style="width:100%" class="form-control" value="{{$article->formula}}" type="text" name="formula"
            placeholder="values[0] + values[1]">
    </label>
    <br>
    <label style="width:100%">
        <p>Текст</p>
        <textarea style="width:100%" class="form-control" name="content" rows="10"
            id="content">{{$article->content}}</textarea>
    </label>
    <button class="btn btn-primary" style="width:100%;">Изменить</button>
</form>
<form action="/articles/{{$article->id}}" onsubmit="confirm_s(event)" method="POST">
  @csrf
  @method('DELETE')
  <button class="btn btn-danger form-control" style="margin-top:10px;">Удалить</button>
</form>
<script>
  function confirm_s(e)
  {
    if (!confirm('Вы уверены?'))
    {
      e.preventDefault();
    }
  }
</script>
@endsection
