<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Pal</title>

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">

    </head>
    <body>
        @include('partials.nav')
        <div id="content">
            @yield('content')

            <script src="{{ mix('/js/app.js') }}"></script>
        </div>
    </body>
</html>