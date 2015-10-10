<!DOCTYPE html>
<html>
    <head>
        <title>Pragyan 2016 Sangam Registration</title>
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
        </style>
    </head>
    <body>
        @include('navbar',['active'=>'register'])
        <div id="content" class="container-fluid">
            <div class="panel panel-default">
                <div class="panel-body">
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
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="panel panel-info">
                                    <div class="panel-heading">Details of Member 1 (Team Leader)</div>
                                    <div class="panel-body">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="roll-addon-1">Roll No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                            <input type="text" id="roll-1" name="roll1" class="form-control" placeholder="Roll Number" aria-describedby="roll-addon-1" pattern="[0-9]{9}" title="Roll Number" value="{{Session('roll_number')}}" required readonly>
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="name-addon-1">Name </span>
                                            <input type="text" id="name-1" name="name1" class="form-control" placeholder="Name" aria-describedby="name-addon-1" title="Name (Autofill)" value="{{old('name1')}}" required readonly>
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="contact-addon-1">Contact No</span>
                                            <input type="text" id="contact-1" name="contact1" class="form-control" placeholder="Contact Number" aria-describedby="Contact-addon-1" pattern="[0-9]{10}" title="Mobile Number" value="{{old('contact1')}}" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="panel panel-info">
                                    <div class="panel-heading">Details of Member 2</div>
                                    <div class="panel-body">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="roll-addon-2">Roll No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                            <input type="text" id="roll-2" name="roll2" onchange="roll2change()" class="form-control" placeholder="Roll Number" aria-describedby="roll-addon-2" pattern="[0-9]{9}" value="{{old('roll2')}}" title="Roll Number">
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="name-addon-2">Name </span>
                                            <input type="text" id="name-2" name="name2" class="form-control" placeholder="Name" aria-describedby="name-addon-2" value="{{old('name2')}}" title="Name (Autofill)" readonly>
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="contact-addon-2">Contact No</span>
                                            <input type="text" id="contact-2" name="contact2" onchange="contact2change()" class="form-control" placeholder="Contact Number" aria-describedby="Contact-addon-2" pattern="[0-9]{10}" value="{{old('contact2')}}" title="Mobile Number">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="panel panel-info">
                                    <div class="panel-heading">Details of Member 3</div>
                                    <div class="panel-body">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="roll-addon-3">Roll No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                            <input type="text" id="roll-3" name="roll3" onchange="roll3change()" class="form-control" placeholder="Roll Number" aria-describedby="roll-addon-3" pattern="[0-9]{9}" title="Roll Number" value="{{old('roll3')}}">
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="name-addon-3">Name </span>
                                            <input type="text" id="name-3" name="name3" class="form-control" placeholder="Name" aria-describedby="name-addon-3" value="{{old('name3')}}" title="Name (Autofill)" readonly>
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="contact-addon-3">Contact No</span>
                                            <input type="text" id="contact-3" name="contact3" onchange="contact3change()" class="form-control" placeholder="Contact Number" aria-describedby="Contact-addon-3" pattern="[0-9]{10}" title="Mobile Number" value="{{old('contact4')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="panel panel-info">
                                    <div class="panel-heading">Details of Member 4</div>
                                    <div class="panel-body">
                                        <div class="input-group">
                                            <span class="input-group-addon" id="roll-addon41">Roll No&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
                                            <input type="text" id="roll-4" name="roll4" onchange="roll4change()" class="form-control" placeholder="Roll Number" aria-describedby="roll-addon-4" pattern="[0-9]{9}" title="Roll Number" value="{{old('roll4')}}">
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="name-addon-4">Name </span>
                                            <input type="text" id="name-4" name="name4" class="form-control" placeholder="Name" aria-describedby="name-addon-4" value="{{old('name4')}}" title="Name (Autofill)" readonly>
                                        </div>
                                        <br>
                                        <div class="input-group">
                                            <span class="input-group-addon" id="contact-addon-4">Contact No</span>
                                            <input type="text" id="contact-4" name="contact4" onchange="contact4change()" class="form-control" placeholder="Contact Number" aria-describedby="Contact-addon-4" pattern="[0-9]{10}" title="Mobile Number" value="{{old('contact4')}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-info">
                                    <div class="panel-heading">Abstract (Max 500 words)</div>
                                    <textarea id="abstract" name="abstract" class="form-control panel-body" rows="5" required>{{old('abstract')}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-8">
                                <div class="panel panel-info">
                                    <div class="panel-heading">File Uploads (If Any)</div>
                                    <input id="file" name="file" type="file" data-show-upload="false"  data-show-preview="false" class="file">
                                </div>
                            </div>
                            <div class="col-xs-4 col-xs-offset-4 col-sm-3 col-sm-offset-1" style="margin-top:40px;">
                                <center><input type="submit" class="btn btn-primary" value="Submit Registration"></center>
                            </div>
                        </div>
                    </form>
        </div>
        @include('footer')
        <script type="text/javascript" src="{{asset('JS/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('JS/bootstrap.js')}}"></script>
        <script type="text/javascript" src="{{asset('JS/fileinput.js')}}"></script>
        <script>
        function roll2change()
        {
            var x = document.getElementById("roll-2").value;
            if(x.localeCompare("")==0)
                {
                    document.getElementById("contact-2").required = false;
                    document.getElementById("name-2").required = false;
                }
            else
                {
                    document.getElementById("contact-2").required = true;
                    document.getElementById("name-2").required = true;
                    if(x.length == 9)
                    {
                        getname(x,2);
                    }
                }
        }

        function contact2change()
        {
            var x = document.getElementById("contact-2").value;
            if(x.localeCompare("")==0)
                {
                    document.getElementById("roll-2").required = false;
                    document.getElementById("name-2").required = false;
                }
            else
                {
                    document.getElementById("roll-2").required = true;
                    document.getElementById("name-2").required = true;
                }
        }
        function roll3change()
        {
            var x = document.getElementById("roll-3").value;
            if(x.localeCompare("")==0)
                {
                    document.getElementById("contact-3").required = false;
                    document.getElementById("name-3").required = false;
                }
            else
                {
                    document.getElementById("contact-3").required = true;
                    document.getElementById("name-3").required = true;
                    if(x.length == 9)
                    {
                        getname(x,3);
                    }
                }
        }

        function contact3change()
        {
            var x = document.getElementById("contact-3").value;
            if(x.localeCompare("")==0)
                {
                    document.getElementById("roll-3").required = false;
                    document.getElementById("name-3").required = false;
                }
            else
                {
                    document.getElementById("roll-3").required = true;
                    document.getElementById("name-3").required = true;
                }
        }
        function roll4change()
        {
            var x = document.getElementById("roll-4").value;
            if(x.localeCompare("")==0)
                {
                    document.getElementById("contact-4").required = false;
                    document.getElementById("name-4").required = false;
                }
            else
                {
                    document.getElementById("contact-4").required = true;
                    document.getElementById("name-4").required = true;
                    if(x.length == 9)
                    {
                        getname(x,4);
                    }
                }
        }

        function contact4change()
        {
            var x = document.getElementById("contact-4").value;
            if(x.localeCompare("")==0)
                {
                    document.getElementById("roll-4").required = false;
                    document.getElementById("name-4").required = false;
                }
            else
                {
                    document.getElementById("roll-4").required = true;
                    document.getElementById("name-4").required = true;
                }
        }

        $( document ).ready(function() {
            roll2change();
            roll3change();
            roll4change();
            contact2change();
            contact3change();
            contact4change();
            $.ajaxSetup({
                headers: { 'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content') }
            });
            getname("{{Session('roll_number')}}",1);
        });

        function getname(x,y)
        {
            $.ajax({
                method: "POST",
                url: "{{action('HomeController@getname')}}",
                data: {roll_number:x}
            }).done(function( msg ) {
                if(msg==0)
                    window.alert("Try again after Sometime");
                else if(msg==1)
                    window.alert("Not a valid Roll Number for Member " + y);
                else
                    document.getElementById("name-"+y).value = msg;

            });
        }
        </script>
    </body>
</html>
