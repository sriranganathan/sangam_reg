<!DOCTYPE html>
<html>
    <head>
        <title>Registrations</title>
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
        @include('navbar',['active'=>'view'])
        <div id="content" class="container-fluid">
            <div class="panel panel-success">
                <div class="panel-heading">Registrations Received</div>
                <div class="panel-body">
                    <table class="table table-striped" id="registration_list">
                        <thead>
                            <tr>
                                <th>Registration id</th>
                                <th>Team Leader (Roll No)</th>
                                <th>Team Leader (Name)</th>
                                <th>Team leader (Contact No)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($registrations as $registration)
                                <tr id="{{$registration->id}}">
                                    <td>{{$registration->id}}</td>
                                    <td>{{$registration->roll_number_1}}</td>
                                    <td>{{$registration->name_1}}</td>
                                    <td>{{$registration->contact_number_1}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $registrations->render() !!}
                </div>
            </div>
        </div>
        @include('footer')
        <script type="text/javascript" src="{{asset('JS/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('JS/bootstrap.js')}}"></script>
        <script>
        $(document).ready(function(){
            $('#registration_list > tbody > tr').css('cursor','pointer');
            $('#registration_list > tbody > tr').click(function(){
            var url = "{{action('AdminController@registration')}}" + "?id=" + this.id;
            $(location).attr('href',url);
            });
        });
        </script>
    </body>
</html>