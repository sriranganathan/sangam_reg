<!DOCTYPE html>
<html>
    <head>
        <title>Sangam Phase Two</title>
        <link type="text/css" rel="stylesheet" href="{{asset('CSS/bootstrap.css')}}"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="{{asset('CSS/fileinput.css')}}"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta name="_token" content="{{ csrf_token() }}"/>
        <style type="text/css">
        #abstract,#file
        {
        border: none; !important
        overflow: auto; !important
        outline: none; !important
        -webkit-box-shadow: none; !important
        -moz-box-shadow: none; !important
        box-shadow: none; !important
        }
        .input-group {
        width: 100%;
        }
        #form_container
        {
        background-color: transparent;
        }
        .vcenter
        {
        float: none;
        display: inline-block;
        vertical-align: middle;
        }
        @media screen and (min-width: 768px) and (max-width: 992px)
        {
        #submit_button{
        margin-left: 12.5%;
        }
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
            <div class="well" id="form_container">
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{action('HomeController@phaseTwo')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 col-lg-4" style="margin: auto; float: none;">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Sangam Phase 2</div>
                                <div class="panel-body">
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="project-name-addon">Project Name </span>
                                        <input type="text" id="project-name" name="project_name" class="form-control" placeholder="Project Name" aria-describedby="project-name-addon" title="Project Name" value="{{$project_name}}" readonly>
                                    </div>
                                    <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="project-name-addon">Project Category </span>
                                        <input type="text" id="project-category" name="project_category" class="form-control" placeholder="Project Category" aria-describedby="project-category-addon" title="Project Category" value="{{$project_category=='c'?'Circuital':'Non-Circuital'}}" readonly>
                                    </div>
                                    <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="roll-addon-1">Roll No</span>
                                        <input type="integer" id="roll-1" name="roll1" class="form-control" placeholder="Roll No" aria-describedby="roll-addon-1" title="Roll No" value="{{$roll}}" readonly>
                                    </div>
                                    <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="name-addon-1">Name </span>
                                        <input type="text" id="name-1" name="name1" class="form-control" placeholder="Name" aria-describedby="name-addon-1" title="Name" value="{{$name}}" readonly>
                                    </div>
                                    <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="email-addon-1">Email-ID</span>
                                        <input type="email" id="email-1" name="email1" class="form-control" placeholder="Email-ID" aria-describedby="email-addon-1" title="Email-ID" value="{{$email}}" readonly>
                                    </div>
                                    <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="project-presentation-addon">Presentation </span>
                                        <input id="file" accept="application/pdf,.pptx,.ppt" name="presentation" type="file" aria-describedby="project-presentation-addon" data-show-upload="false"  data-show-preview="false" class="file" required>
                                    </div>
                                    <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="video-addon-1">Link to Video</span>
                                        <input type="text" id="video" name="video_link" class="form-control" placeholder="Link to Video" aria-describedby="video-addon-1" title="video" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div id="submit_button" class="col-xs-12 col-sm-2 col-sm-offset-5 vcenter hcenter" style="margin-top:20px;">
                            <input type="submit" class="btn btn-primary" value="Submit" style="width:100%;margin: auto;">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @include('footer')
        <script type="text/javascript" src="{{asset('JS/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('JS/bootstrap.js')}}"></script>
        <script type="text/javascript" src="{{asset('JS/fileinput.js')}}"></script>
    </body>
</html>