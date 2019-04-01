<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="{{@asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/">MathHelp</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    @auth

                    <div class="nav-item">
                        <a href="/articles/create" class="nav-link">Создать</a>
                    </div>
                    @endauth

                </ul>
                @auth
                <div class="nav-item">
                    <span class="text-white name">{{\Auth::user()->name}}</span>
                </div>
                <div class="nav-item" style="margin-left:10px">
                    <form method="POST" action="/logout">
                        @csrf
                        <button href="/logout" class="btn btn-primary">Выйти</button>
                    </form>
                </div>
                @else
                <div class="nav-item">
                    <a href="/login" class="btn btn-primary">Войти</a>
                </div>
                @endauth

            </div>
        </nav>

        <div class="row content">
            <div class="col-sm-3 sidebar">
                @foreach (\App\Article::all() as $article_side)
                <div class="item">
                    <a href="/articles/{{$article_side->id}}" 
                        {{(isset($current)&&$current==$article_side->id)?'style=font-weight:bold':''}}>
                        {{$article_side->title}}
                    </a>
                    @auth
                    <a href="/articles/{{$article_side->id}}/edit" class="text-secondary">
                        Изменить
                    </a>
                    @endauth
                </div>
                @endforeach
            </div>
            <div class="col-sm-9">
                <article class="container">
                    @yield('content')
                </article>
            </div>
        </div>
    </div>
</body>

</html>
