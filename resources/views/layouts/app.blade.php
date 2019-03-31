<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Laravel</title>
    <link rel="stylesheet" href="{{@asset('css/app.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto:400,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">MathHelp</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <div class="nav-item">
                        
                    </div>
                </ul>
            </div> --}}
        </nav>
        
        <div class="row content">
            <div class="col-sm-3 sidebar">
                @yield('sidebar')
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
