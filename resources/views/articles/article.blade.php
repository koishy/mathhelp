@extends('layouts/app')

@section('content')
<div class="container">
    @auth
    <a href="/articles/{{$article->id}}/edit" class="text-secondary float-right">
        Изменить
    </a>
    @endauth
    <h1>{{ $article->title }}</h1>
    {!! $article->content !!}
    <form class="d-flex flex-column" id="form" style="margin-top:20px;">
        @for ($i = 0; $i < $article->values; $i++)
            <label>
                Число {{$i+1}}
                <input type="number" class="form-control input">
            </label>
            @endfor
            <button class="btn btn-primary">Посчитать</button>
    </form>
    <br>
    Результат:
    <span id="result">

    </span>
</div>
<script>
    document.querySelector('#form').addEventListener('submit', function (e) {
        evaluate(e);
    });

    function evaluate(e) {
        e.preventDefault();
        var inputs = document.querySelector('#form').querySelectorAll('.input');
        var values = [];
        inputs.forEach(function (i) {
            values.push(parseInt(i.value));
        });
        document.querySelector('#result').innerHTML = {{$article->formula}};
    }

</script>
@endsection
