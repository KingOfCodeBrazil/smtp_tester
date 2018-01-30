<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>SMTP Tester</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="loader-overlay">
            <div class="loader"></div>
        </div>

        @include('nav')

        <div id="app" class="container">
            <div class="row">
                <div class="col-sm-12">
                    <smtp-tester></smtp-tester>      
                </div>
            </div>
        </div>
    </body>
    <script src="{{ mix('js/app.js') }}"></script>
</html>
