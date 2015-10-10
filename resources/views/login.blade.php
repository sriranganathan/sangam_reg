<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link type="text/css" rel="stylesheet" href="{{asset('CSS/bootstrap.css')}}"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="{{asset('CSS/fileinput.css')}}"  media="screen,projection"/>
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
        <div id="content" class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                @if (Session::has('message'))
                    <div class="alert alert-danger">
                        {{Session('message')}}
                    </div>
                @endif
                    <form method="post" action="{{action('AdminController@check_login')}}">
                        {!! csrf_field() !!}
                        <div class="input-group col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-4 col-md-4">
                            <span class="input-group-addon" id="usename-addon-1">Username</span>
                            <input type="text" name="username" class="form-control" placeholder="Username" aria-describedby="username-addon-1" required>
                        </div>
                        <br>
                        <div class="input-group col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-4 col-md-4">
                            <span class="input-group-addon" id="password-addon-1">Password</span>
                            <input type="password" name="password" class="form-control" placeholder="Password" aria-describedby="password-addon-1" required>
                        </div>
                        <br>
                        <div class="input-group col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-4 col-md-4">
                           <center> <input type="submit" class="btn btn-primary" value="login"> </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>