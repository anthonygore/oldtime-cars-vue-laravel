<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

        <!-- Styles -->
        <style>

        </style>
        <script type="text/javascript">
            window.__INITIAL_STATE__ = "{!! addslashes(json_encode($state)) !!}";
        </script>
        <style>
            body {
                margin: 15px;
            }
            img {
                width: 200px;
            }
        </style>
    </head>
    <body>
        <div id="app">
            <router-view></router-view>
        </div>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
