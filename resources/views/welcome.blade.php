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
	    .row 
	    {
		    margin-left:0;
		    margin-right:0;
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
        <script type="text/javascript" src="{{asset('JS/jquery.min.js')}}"></script>	
    </head>
    <body>
<style>
#nav_bar
{
  border-bottom: #121212 1px solid;
}

.clickable
{
	cursor: pointer;
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
      <a class="navbar-brand" style="margin:0;margin-right:15px;padding:0" href="{{action('HomeController@index')}}"><img style="max-width:150px;height:100%" src="{{asset('pragyan.png')}}"/></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
<li class="clickable active" id="home"><a>Home</a></li>
<li class="clickable" id="how"><a>How Sangam Works</a></li> 
<li class="clickable" id="rules"><a>Rules</a></li> 
<li class="clickable" id="contact"><a>Contact</a></li> 

        <li id="register"><a href="{{action('HomeController@register')}}">Register</a></li>
        @if(Session::has('user_name'))
          <li id="view"><a href="{{action('AdminController@view')}}">View Registrations</a></li>
        @endif
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(Session::has('user_name')||Session::has('roll_number'))
        <li><a href="{{action('AdminController@logout')}}"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        @else
        <li id="login"><a href="{{action('HomeController@login')}}"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        @endif
      </ul>
    </div>
  </div>
</nav>

        <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <center>
                    <h2>SANGAM 18</h2>
                </center>

                <center>
                    <blockquote style="border-left: 0px;">
                        Pragyan '18 presents to you SANGAM, an intra-collegiate technical exhibition and competition, aimed at providing a platform for the students of NIT Trichy to transform their ideas into tangible creations and showcase their innovations to the outside world. Every spark of an idea can impact the world! 

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
			<li class="list_item">Converting your idea from a pitch into a working prototype.</li><li class="list_item"> Interaction with technocrats from across the country and recognition for your idea. </li>    
                        <li class="list_item">Internship opportunities with the visiting companies.</li>
                        <li class="list_item">Certificates of participation from Pragyan. </li>
			<li class="list_item">Participation prize up to 20,000 INR for the final shortlisted participants. </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-5 col-md-offset-2">
                <center><h3>Prize Money</h3></center>
                <div class="row">
		<div class="col-md-2">
                    <center><i class="fa fa-trophy fa-5x"></i></center>
                </div>
                <div class="col-md-10">
		<h4>For the top three innovations in each category:</h4> 	
                    <ul>
                        <li class="list_item">Circuital: 20k/12k/8k.</li>
                        <li class="list_item">Non-Circuital: 20k/12k/8k.</li>
                    </ul>
                </div>
		</div>
            </div>
        </div>
        <br>
        <br>
        <div  id="how_it_works" class="col-sm-12 col-md-10 col-md-offset-1">
            <center><h3>How Sangam Works?</h3></center>
            <div class="col-sm-12">
                <ol>
                    <li class="list_item">Form a group, brainstorm and come up with an idea. The idea must satisfy the following criteria:</li>
                        <ul>
                            <li class="list_item1">Must be within the realm of science and technology.</li>
                            <li class="list_item1">The end result of the project must be a tangible product or a demonstrable service.</li>
                            <li class="list_item1">Must be presentable during Pragyan as a working model or demonstration along with visual aids (Charts, Presentations, etc.)</li>
                            <li class="list_item1">Must be original, and addressing social problems, industrial needs, day-to-day utilities or recreational activities</li>
                        </ul>
                    <li class="list_item">A panel will scrutinize the idea, and if deemed feasible and worthy, you will be given the green light to pursue the idea.</li>
                    <li class="list_item">The second round will be held in the month of January 2018 wherein all teams will be required to present a comprehensive proposal, work plan, cost report and justification for the project.</li>
                    <li class="list_item">After systematic reviews, the complete presentation along with the working model or demonstration must be ready by 24th February 2018, following which it will be showcased during Pragyan '18. </li>
                </ol>
            </div>
        </div>
        <br>
	<div class="row" id="rules_block">
		<div class="col-sm-12 col-md-10 col-md-offset-1">
			<center><h2>Rules</h2></center>
			<br>
			<div class="col-sm-12">
				<div class="list_item">Scientific fraud and misconduct are not condoned at any level of research or during the course of the competition. This includes plagiarism, forgery, use or presentation of other researchers' work as one's own and fabrication of data. Fraudulent projects will fail to qualify for competition.</div>
				<ul>
					<li class="list_item1">The decision of judges will be final and no arguments or appeal will be entertained.</li>
					<li class="list_item1">The organisers reserve the right to change/update the rules of the contest at any point of time and will do their best to inform the participants of the same. However, it is ultimately the responsibility of the teams to keep themselves updated. Violation of any rule can result in rejection of the project.
</li>
<li class="list_item1">Although students may present a new phase of an ongoing project, no student may present a project topic from a previous year without conducting significant additional research on the topic.</li>
<li class="list_item1">This competition is exclusively open for NIT Trichy students only.</li>
</ul>
<h3 class="text-warning">First Round:</h3>
<ol>
	<li class="list_item1">The deadline for the abstract submission is <span class="text-danger" style="font-size:25px;">20<sup>th</sup> December 2017.</span> Late entries will not be entertained.</li>
	<li class="list_item1">Maximum number of participants in a Team is 5.</li>
	<li class="list_item1">A team can present more than one project.</li>
	<li class="list_item1">One student may be a part of more than one team.</li>
	<li class="list_item1">The members of a team can not be changed during the course of the competition.</li>
	<li class="list_item1">The idea and contents of the project may not be changed once the abstract is submitted.</li>
	<li class="list_item1">After you have submitted the abstract, a panel of judges will analyse your proposal and if you are shortlisted for the second round, you will be notified.</li>
	</ol>
	<h3 class="text-warning">Second Round:</h3>
	
                 <ol>
                    
	<li class="list_item1">A PowerPoint presentation containing a detailed description of the project and the progress of the project and a video (duration 3-5 minutes) explaining the same should be presented in front of panel on 22nd January 2018.</li>
        <li class="list_item1">The student(s) doing the presentation must be the one(s) who conducted the research.</li>
	<li class="list_item1">The presentation will be reviewed by a panel of judges and if you are shortlisted for the final round, you will be notified.</li>
 </ol>
	<h3 class="text-warning">Final Round:</h3>
	<ol>
		<li class="list_item1">The final working model of the project is to be displayed during Pragyan '18, where it will be judged by a panel of judges and the winners of the circuital and non-circuital categories will be announced.</li>
		<li class="list_item1">The prize money and number of prizes are subject to change based on the number of registrations for the event.</li>
		<li class="list_item1">All the team members may be present during the event. There will be an interactive session with the judges, other participants and students during the time allotted for the event.</li>
		</ol>
		</div>
		</div>
		</div>
		</div>
		<br>
		<div class="row" id="contacts">
			<div class="col-sm-12 col-md-10 col-md-offset-1">
				<center><h2>Contact</h2></center>

				<center>
					<div class="col-sm-12">
                        
                        Jagadeesh - +91 83000 36701 <br>
                        Srushikesh - +91 97153 38760 <br>
                        
						<a href="mailto:sangam@pragyan.org">sangam@pragyan.org</a><br/>
						</div>
						</center>
						</div>
						</div>
						</div>
        @include('footer')

        <script type="text/javascript" src="{{asset('JS/bootstrap.js')}}"></script>
<script>
	$("#how").on('click',function() {
	$("#how").addClass("active");
	$("#rules").removeClass("active");
	$("#home").removeClass("active");
	$("#contact").removeClass("active");
	$('html, body').animate({
	'scrollTop' : $("#how_it_works").position().top-50
	});
	});
	$("#rules").on('click',function() {
	$("#rules").addClass("active");
	$("#how").removeClass("active");
	$("#home").removeClass("active");
	$("#contact").removeClass("active");
	$('html, body').animate({
	'scrollTop' : $("#rules_block").position().top
	});
	});
	$("#home").on('click',function() {
	$("#home").addClass("active");
	$("#rules").removeClass("active");
	$("#how").removeClass("active");
	$("#contact").removeClass("active");
	$('html, body').animate({
	'scrollTop' : $("body").position().top
	});
	});
	$("#contact").on('click',function() {
	$("#home").removeClass("active");
	$("#rules").removeClass("active");
	$("#how").removeClass("active");
	$("#contact").addClass("active");
	$('html, body').animate({
	'scrollTop' : $("#contacts").position().top-50
	});
	});

	</script>
    </body>
</html>
 
 
 
