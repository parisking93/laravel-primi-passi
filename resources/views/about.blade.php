<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <style>
            body {
                position: relative;
                height :calc(100vh - 100px);
            }
            a {
                text-decoration : none;
                color: #636b6f;
            }
            h1 {
                color: #636b6f;
                margin : 50px;
            }
        </style>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h3><a href="{{route('welcome')}}">Torna indietro</a></h3>

        <h1>info</h1>
        <ul>
            @foreach($info as $k => $value)
                <li>
                    <h4>{{$k}}: </h4>{{$value}};
                </li>
            @endforeach
        </ul>
        
    </body>
</html>
