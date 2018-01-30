<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SMTP Tester</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                font-family: 'Roboto', sans-serif;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel">
                        <div class="panel-heading"><h4>SMTP & E-mail Data</h4></div>
                        <div class="panel-body">
                            <form action="">
                                <div class="form-group col-sm-10">
                                    <label for="">Host</label>
                                    <input type="text" name="" id="" class="form-control">
                                </div>
                                <div class="form-group col-sm-2">
                                    <label for="">Port</label>
                                    <input type="text" name="" id="" class="form-control" value="25">
                                </div>
                                <div class="checkbox col-sm-12">
                                    <label for=""><input type="checkbox" name="" id=""> Needs Secured Connection?</label>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="">Security Type</label>
                                    <select name="" id="" class="form-control">
                                        <option value="">SSL</option>
                                        <option value="">TLS</option>
                                    </select>
                                </div>
                                <div class="checkbox col-sm-12">
                                    <label for=""><input type="checkbox" name="" id=""> Requires Authentication?</label>
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="">Login</label>
                                    <input type="text" name="" id="" class="form-control">
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="">Password</label>
                                    <input type="text" name="" id="" class="form-control">
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="">From E-mail</label>
                                    <input type="text" name="" id="" class="form-control">
                                </div>
                                <div class="form-group col-sm-12">
                                    <label for="">To E-mail</label>
                                    <input type="text" name="" id="" class="form-control">
                                </div>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <button class="btn btn-success">Send Test E-mail</button>
                        </div>
                    </div>      
                </div>
            </div>
        </div>
    </body>
</html>
