<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
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
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-19500581-1', 'auto');
          ga('send', 'pageview');
        </script>
    </head>
    <body>
    @include('navbar',['active' => 'register'])
        <div id="content" class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                @if (Session::has('message'))
                    <div class="alert alert-danger">
                        {{Session('message')}}
                    </div>
                @endif
                    <form method="post" action="{{action('HomeController@check_login')}}">
                        {!! csrf_field() !!}
                        <div class="input-group col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-4 col-md-4">
                            <span class="input-group-addon" id="usename-addon-1">Roll Number</span>
                            <input type="text" name="roll_number" pattern="[0-9]{9}" class="form-control" placeholder="Roll Number" aria-describedby="username-addon-1" required>
                        </div>
                        <br>
                        <div class="input-group col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-4 col-md-4">
                            <span class="input-group-addon" id="password-addon-1">Webmail Password</span>
                            <input type="password" name="password" class="form-control" placeholder="Webmail Password" aria-describedby="password-addon-1" required>
                        </div>
                        <br>
                        <div class="input-group col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-4 col-md-4">
                           <center> <input type="submit" class="btn btn-primary" value="login"> </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @include('footer')
        <script type="text/javascript" src="{{asset('JS/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('JS/bootstrap.js')}}"></script>
    </body>
</html>