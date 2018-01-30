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

        <div class="footer">
            <div>
                Made with 
                <!-- Heart SVG -->
                <svg class="heart" viewBox="0 0 32 29.6">
                    <path d="M23.6,0c-3.4,0-6.3,2.7-7.6,5.6C14.7,2.7,11.8,0,8.4,0C3.8,0,0,3.8,0,8.4c0,9.4,9.5,11.9,16,21.2
                    c6.1-9.3,16-12.1,16-21.2C32,3.8,28.2,0,23.6,0z"/>
                </svg> 
                by <a href="http://kingofcode.com.br">King of Code</a> using <a href="https://laravel.com/">Laravel</a> and <a href="https://vuejs.org/">Vue.js</a>
            </div>
        </div>
    </body>
    <script src="{{ mix('js/app.js') }}"></script>
</html>
