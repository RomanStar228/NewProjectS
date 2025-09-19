<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
         
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>
    <body>
       <h1>Main</h1>
       <a href="{{route('mysite')}}">mysite</a>
       <a href="/contacts">contacts</a>
       <div class="container">
        @for($i=1; $i<=8; $i++)
        <div class="card">
            <img src="{{ Vite::asset('resources/images/img1.jpg') }}" alt="картинка">
            <h2>местный дурачок {{$i}}</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam quia eligendi quas minima doloribus, consequuntur omnis. Fuga nulla sed dolores nostrum magnam, beatae quas perferendis, commodi consequuntur incidunt, quisquam laboriosam.</p>
        </div>
        @endfor
       </div>
    </body>
</html>
