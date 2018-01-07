<!DOCTYPE html>
<html>
  <head>
    <title>Sangam | Pragyan</title>
    <link type="text/css" rel="stylesheet" href="{{asset('CSS/bootstrap.css')}}"  media="screen,projection"/>
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
    <style>
    #nav_bar
    {
    border-bottom: #121212 1px solid;
    }
    </style>
    <nav class="navbar navbar-default navbar-fixed-top" id="nav_bar">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" style="margin:0;margin-right:15px;padding:0" href="{{action('HomeController@index')}}"><img style="height:100%;" src="{{asset('pragyan.png')}}"/></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li id="home"><a href="{{action('HomeController@index')}}">Home</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div id="content" class="container-fluid">
      <div class="panel panel-success">
        <div class="panel-heading">Presentation Submission Successful</div>
        <div class="panel-body">
          You have successfully submitted your presentation for Sangam Round 2.
        </div>
      </div>
    </div>
    @include('footer')
    <script type="text/javascript" src="{{asset('JS/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('JS/bootstrap.js')}}"></script>
    
  </body>
</html>