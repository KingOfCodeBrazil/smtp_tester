<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta content="Simple and helpful SMTP Tester Application. Use it to send test e-mails using smtp credentials and receive useful feedback" name="description">

        <title>SMTP Tester - Test smtp e-mails directly online</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="loader-overlay">
            <div class="loader"></div>
        </div>

        <!-- Fork-me on github image -->
        <a href="https://github.com/KingOfCodeBrazil/smtp_tester">
            <img style="position: absolute; top: 0; right: 0; border: 0; z-index: 2;" 
                src="https://camo.githubusercontent.com/38ef81f8aca64bb9a64448d0d70f1308ef5341ab/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f72696768745f6461726b626c75655f3132313632312e706e67" 
                alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_right_darkblue_121621.png">
        </a>

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

    <!-- Include analytics view if exists -->
    @if(View::exists('analytics'))
        @include('analytics')
    @endif
</html>
