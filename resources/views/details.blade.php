<!DOCTYPE html>
<html>
    <head>
        <title>Details</title>
        <link type="text/css" rel="stylesheet" href="{{asset('CSS/bootstrap.css')}}"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta name="_token" content="{{ csrf_token() }}"/>
    </head>
    <body>
        @include('navbar',['active'=>'view'])
        <div id="content" class="container-fluid">
            <div class="panel panel-default">
                <div class="panel-heading">Details of Registration</div>
                <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Details of Member 1 (Team Leader)</div>
                                    <div class="panel-body">
                                     <p><strong>Roll No &nbsp&nbsp&nbsp&nbsp: </strong>{{$roll_number_1}}</p>   
                                     <p><strong>Name : </strong>{{$name_1}}</p>   
                                     <p><strong>Contact No : </strong>{{$contact_number_1}}</p>   
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="panel panel-primary" id="member_2">
                                    <div class="panel-heading">Details of Member 2</div>
                                    <div class="panel-body">
                                      <p><strong>Roll No &nbsp&nbsp&nbsp&nbsp: </strong>@if($roll_number_2){{$roll_number_2}}@else----@endif</p>
                                      <p><strong>Name : </strong>@if($name_2){{$name_2}}@else----@endif</p>   
                                      <p><strong>Contact No : </strong>@if($contact_number_2){{$contact_number_2}}@else----@endif</p>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="panel panel-primary" id="member_3">
                                    <div class="panel-heading">Details of Member 3</div>
                                    <div class="panel-body">
                                      <p><strong>Roll No &nbsp&nbsp&nbsp&nbsp: </strong>@if($roll_number_3){{$roll_number_3}}@else----@endif</p>
                                      <p><strong>Name : </strong>@if($name_3){{$name_3}}@else----@endif</p>  
                                      <p><strong>Contact No : </strong>@if($contact_number_3){{$contact_number_3}}@else----@endif</p>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-lg-3">
                                <div class="panel panel-primary" id="member_4">
                                    <div class="panel-heading">Details of Member 4</div>
                                    <div class="panel-body">
                                        <p><strong>Roll No &nbsp&nbsp&nbsp&nbsp: </strong>@if($roll_number_4){{$roll_number_4}}@else----@endif</p>
                                        <p><strong>Name : </strong>@if($name_4){{$name_4}}@else----@endif</p>   
                                        <p><strong>Contact No : </strong>@if($contact_number_4){{$contact_number_4}}@else----@endif</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">Abstract</div>
                                    <div class="panel-body">
                                    {{$abstract}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">File Uploads</div>
                                    <div class="panel-body">
                                    @if($file_name)
                                    <a class="btn btn-primary" href="{{action('AdminController@download')}}?id={{$id}}">Download the File</a>
                                    @else
                                    NIL
                                    @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p align="right"><a class="btn btn-danger" href="{{action('AdminController@view')}}">Go Back</a></p>

                </div>
            </div>
        </div>
        @include('footer')
        <script type="text/javascript" src="{{asset('JS/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('JS/bootstrap.js')}}"></script>
        <script type="text/javascript" src="{{asset('JS/fileinput.js')}}"></script>
    </body>
</html>
