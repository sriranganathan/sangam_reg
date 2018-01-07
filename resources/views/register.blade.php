<!DOCTYPE html>
<html>
    <head>
        <title>Pragyan 2018 Sangam Registration</title>
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
                width:100%;
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
        @include('navbar',['active'=>'register'])
        <div id="content" class="container-fluid">
            <div class="well">
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{action('HomeController@store')}}" enctype="multipart/form-data">
                    {!! csrf_field() !!}
                    <div class="row">
                        <div class="col-xs-12 col-sm-8 col-lg-4">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Project Details</div>
                                <div class="panel-body">
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="project-name-addon">Project Name </span>
                                        <input type="text" id="project-name" name="project_name" class="form-control" placeholder="Project Name" aria-describedby="project-name-addon" title="Project Name" value="{{old('project_name')}}" required>
                                    </div>
                                    <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="project-category-1">Project Category</span>
                                        <div class="radio" style="margin-left: 5px">
                                            <label class="radio-inline"><input type="radio" id="project-category-1" name="project_category"  aria-describedby="project-category-1" title="Circuital" value="c" @if(old('project_category')=="c") checked @endif required checked>Circuital</label>
                                            <label class="radio-inline">
                                            <input type="radio" id="project-category-2" name="project_category"  aria-describedby="project-category-2" title="Non-Circuital" value="nc" @if(old('project_category')=="nc") checked @endif required>Non-Circuital</label>
                                        </div>
                                    </div>
                                    <br/>
                                    <div class="input-group">
                                        <span class="input-group-addon" style="width:41%" id="project-abstract-addon">Abstract </span>
                                        <input id="file" accept="application/pdf" name="file" type="file" aria-describedby="project-abstract-addon" data-show-upload="false"  data-show-preview="false" class="file" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-lg-3">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Details of Member 1 (Team Leader)</div>
                                <div class="panel-body">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="roll-addon-1" style="width:41%">Roll No</span>
                                        <input type="text" id="roll-1" name="roll1" class="form-control" placeholder="Roll Number" aria-describedby="roll-addon-1" pattern="[0-9]{9}" title="Roll Number" value="{{Session('roll_number')}}" required readonly>
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="name-addon-1" style="width:41%">Name</span>
                                        <input type="text" id="name-1" name="name1" class="form-control" placeholder="Name" aria-describedby="name-addon-1" title="Name" value="{{old('name1')}}" required>
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="email-addon-1" style="width:41%">Email</span>
                                        <input type="email" id="email-1" name="email1" class="form-control" placeholder="Email-ID" aria-describedby="email-addon-1" title="Email" value="{{old('email1')}}" required>
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="contact-addon-1" style="width:41%">Contact No</span>
                                        <input type="text" id="contact-1" name="contact1" class="form-control" placeholder="Contact Number" aria-describedby="Contact-addon-1" pattern="[0-9]{10}" title="Mobile Number" value="{{old('contact1')}}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-3 col-lg-offset-1">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Details of Member 2</div>
                                <div class="panel-body">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="roll-addon-2" style="width:41%">Roll No</span>
                                        <input type="text" id="roll-2" name="roll2" class="form-control" placeholder="Roll Number" aria-describedby="roll-addon-2" pattern="[0-9]{9}" value="{{old('roll2')}}" title="Roll Number">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="name-addon-2" style="width:41%">Name</span>
                                        <input type="text" id="name-2" name="name2" class="form-control" placeholder="Name" aria-describedby="name-addon-2" value="{{old('name2')}}" title="Name">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="email-addon-2" style="width:41%">Email</span>
                                        <input type="email" id="email-2" name="email2" class="form-control" placeholder="Email-ID" aria-describedby="email-addon-2" title="Email" value="{{old('email2')}}">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="contact-addon-2" style="width:41%">Contact No</span>
                                        <input type="text" id="contact-2" name="contact2" class="form-control" placeholder="Contact Number" aria-describedby="Contact-addon-2" pattern="[0-9]{10}" value="{{old('contact2')}}" title="Mobile Number">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-3 col-lg-offset-1">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Details of Member 3</div>
                                <div class="panel-body">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="roll-addon-3" style="width:41%">Roll No</span>
                                        <input type="text" id="roll-3" name="roll3" class="form-control" placeholder="Roll Number" aria-describedby="roll-addon-3" pattern="[0-9]{9}" title="Roll Number" value="{{old('roll3')}}">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="name-addon-3" style="width:41%">Name </span>
                                        <input type="text" id="name-3" name="name3" class="form-control" placeholder="Name" aria-describedby="name-addon-3" value="{{old('name3')}}" title="Name">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="email-addon-3" style="width:41%">Email</span>
                                        <input type="email" id="email-3" name="email3" class="form-control" placeholder="Email-ID" aria-describedby="email-addon-3" title="Email" value="{{old('email3')}}">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="contact-addon-3" style="width:41%">Contact No</span>
                                        <input type="text" id="contact-3" name="contact3" class="form-control" placeholder="Contact Number" aria-describedby="Contact-addon-3" pattern="[0-9]{10}" title="Mobile Number" value="{{old('contact4')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-3 col-lg-offset-2">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Details of Member 4</div>
                                <div class="panel-body">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="roll-addon4" style="width:41%">Roll No</span>
                                        <input type="text" id="roll-4" name="roll4"  class="form-control" placeholder="Roll Number" aria-describedby="roll-addon-4" pattern="[0-9]{9}" title="Roll Number" value="{{old('roll4')}}">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="name-addon-4" style="width:41%">Name </span>
                                        <input type="text" id="name-4" name="name4" class="form-control" placeholder="Name" aria-describedby="name-addon-4" value="{{old('name4')}}" title="Name">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="email-addon-4" style="width:41%">Email</span>
                                        <input type="email" id="email-4" name="email4" class="form-control" placeholder="Email-ID" aria-describedby="email-addon-4" title="Email" value="{{old('email4')}}">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="contact-addon-4" style="width:41%">Contact No</span>
                                        <input type="text" id="contact-4" name="contact4" class="form-control" placeholder="Contact Number" aria-describedby="Contact-addon-4" pattern="[0-9]{10}" title="Mobile Number" value="{{old('contact4')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-3 col-lg-offset-1">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Details of Member 5</div>
                                <div class="panel-body">
                                    <div class="input-group">
                                        <span class="input-group-addon" id="roll-addon-5" style="width:41%">Roll No</span>
                                        <input type="text" id="roll-5" name="roll5" class="form-control" placeholder="Roll Number" aria-describedby="roll-addon-5" pattern="[0-9]{9}" title="Roll Number" value="{{old('roll5')}}">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="name-addon-5" style="width:41%">Name </span>
                                        <input type="text" id="name-5" name="name5" class="form-control" placeholder="Name" aria-describedby="name-addon-5" value="{{old('name5')}}" title="Name">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="email-addon-5" style="width:41%">Email</span>
                                        <input type="email" id="email-5" name="email5" class="form-control" placeholder="Email-ID" aria-describedby="email-addon-5" title="Email" value="{{old('email5')}}">
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="contact-addon-5" style="width:41%">Contact No</span>
                                        <input type="text" id="contact-5" name="contact5" class="form-control" placeholder="Contact Number" aria-describedby="Contact-addon-5" pattern="[0-9]{10}" title="Mobile Number" value="{{old('contact5')}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row">
                        <div style="margin-top:40px;">
                            <center><input type="submit" class="btn btn-primary" value="Submit Registration"></center>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        @include('footer')
        <script type="text/javascript" src="{{asset('JS/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('JS/bootstrap.js')}}"></script>
        <script type="text/javascript" src="{{asset('JS/fileinput.js')}}"></script>
        <script>
        </script>
    </body>
</html>