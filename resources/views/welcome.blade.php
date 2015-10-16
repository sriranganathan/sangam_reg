<!DOCTYPE html>
<html>
    <head>
        <title>Sangam</title>
        <link type="text/css" rel="stylesheet" href="{{asset('CSS/bootstrap.css')}}"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="{{asset('CSS/font-awesome.min.css')}}"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="{{asset('CSS/fileinput.css')}}"  media="screen,projection"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta name="_token" content="{{ csrf_token() }}"/>
        <style type="text/css">
            #content
            {
                margin-top:5%;
            }
            .list_item
            {
                font-size: 18px;
                line-height: 24px;
            }
            .list_item1
            {
                font-size: 17px;
            }
        </style>
    </head>
    <body>
        @include('navbar',['active'=>'home'])
        <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <center>
                    <h2>SANGAM 16</h2>
                </center>

                <center>
                    <blockquote style="border-left: 0px;">
                        Pragyan’16 presents to you “SANGAM”, the Intra-NITT technical exhibition, 
                        aimed at presenting a platform for the students of NITT to display their ideas 
                        and creations and basically ‘show-off’ our inventiveness and technical curiosity 
                        to the outside world.
                    </blockquote>
                </center>
            </div>
            <div class="col-sm-12 col-md-5 col-md-offset-1">
               <center><img style="max-height:250px;" class="img-responsive" src="{{asset('logo.jpg')}}"></center>
            </div>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-sm-12 col-md-5">
                <center><h3>Benefits</h3></center>
                <div class="col-md-2">
                    <center><i class="fa fa-line-chart fa-5x"></i></center>
                </div>
                <div class="col-md-10">
                    <ul>
                        <li class="list_item">Experience, growth, recognition.</li>
                        <li class="list_item">Internship opportunities with the visiting companies.</li>
                        <li class="list_item">Certificates from Pragyan.</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-5 col-md-offset-2">
                <center><h3>Prize Money</h3></center>
                <div class="col-md-2">
                    <center><i class="fa fa-trophy fa-5x"></i></center>
                </div>
                <div class="col-md-10">
                    <ul>
                        <li class="list_item">Circuital: 20k/12k/8k.</li>
                        <li class="list_item">Non-Circuital: 20k/12k/8k.</li>
                        <li class="list_item">Participation prize of Rs. 2000 for the participants who get selected to the final round.</li>
                    </ul>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <center><h3>How Sangam Works?</h3></center>
            <div class="col-sm-12">
                <ol>
                    <li class="list_item">Form a group, brainstorm and come up with an idea. The idea must satisfy the following criteria:</li>
                        <ul>
                            <li class="list_item1">Must be within the realm of Science and technology.</li>
                            <li class="list_item1">The end result of the project must be a tangible product or a demonstrable service.</li>
                            <li class="list_item1">Must be presentable during Pragyan as a working model or demonstration along with visual aids (Charts, Visual Aids, etc.)</li>
                            <li class="list_item1">Original ideas addressing social problems, industrial needs, day-to-day utility or recreation.</li>
                        </ul>
                    <li class="list_item">Register at this portal by <strong class="lead text-danger">November 5th 2015</strong>.</li>
                    <li class="list_item">A panel will scrutinize the idea, and if deemed feasible and worthy, you will be given the green light to pursue the idea.</li>
                    <li class="list_item">The second round will be held in the month of January 2016 wherein all teams will be required to present a comprehensive proposal, work plan, cost report and justification to an open audience (including the Director and all HoDs)</li>
                    <li class="list_item">After systematic reviews, the complete presentation along with the working model/demonstration must be ready by 20th February 2016, following which it will be showcased during Pragyan’16.</li>
                </ol>
            </div>
        </div>
        </div>
        <br>
        @include('footer')
        <script type="text/javascript" src="{{asset('JS/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('JS/bootstrap.js')}}"></script>
    </body>
</html>
