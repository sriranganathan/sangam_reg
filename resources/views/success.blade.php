<!DOCTYPE html>
<html>
    <head>
        <title>Registration Successfull</title>
        <link type="text/css" rel="stylesheet" href="{{asset('CSS/bootstrap.css')}}"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta name="_token" content="{{ csrf_token() }}"/>
        <style type="text/css">
            #content
            {
                margin-top:5%;
            }
        </style>
    </head>
    <body>
        <div id="content" class="container-fluid">
            <div class="panel panel-success">
                <div class="panel-heading">Registration Successful</div>
                <div class="panel-body">
                Your Team has been Successfully Registered for Pragyan 2016 Sangam
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{asset('JS/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('JS/bootstrap.js')}}"></script>

    </body>
</html>