<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>{{config('app.name','Laravel')}}</title>
</head>
<body>
<div>
    <div class="line h-3 bg-gradient-to-r from-sky-600 to-blue-500"></div>
    <div class="wrapper text-white-theme dark:text-dark-theme transition duration-200 dark:bg-dark-theme min-h-screen">
        <div class="container">
            @if($header)
                {{$header}}
            @endif
            <main>
                {{$slot}}
            </main>
            @if($footer)
                {{$footer}}
            @endif
        </div>
    </div>
</div>

<script src="{{asset('/assets/js/script.js')}}"></script>
</body>
</html>
