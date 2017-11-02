<?php

session_start();

require 'database.php';

if( isset($_SESSION['user_id']) ){

  $records = $conn->prepare('SELECT id,email,password FROM users WHERE id = :id');
  $records->bindParam(':id', $_SESSION['user_id']);
  $records->execute();
  $results = $records->fetch(PDO::FETCH_ASSOC);

  $user = NULL;

  if( count($results) > 0){
    $user = $results;
  }

}

?>


<html>
<head>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>MediCare</title>
</head>
<body class="grey lighten-3">
<ul id="dropdown1" class="dropdown-content">
  <li><a href="dashboard.php"><?= $user['email']; ?><i class="material-icons right">perm_identity</i></a></li>
  <li class="divider"></li>
  <li><a href="logout.php">Logout<i class="material-icons right">power_settings_new</i></a></li>
</ul>
<nav>
  <div class="nav-wrapper cyan lighten-3">
    <a href="#!" class="brand-logo center cayn lighten-3">My AveKare</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Account<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>
<br/>
<br/>
<div class="row">
	<div class="col s12 m12 l3">
      <div class="row">
          <div class="card hoverable">
			<a href="hospital.html">
            <div class="card-image">
              <img src="images/hosp_edited.jpg">
              <span class="card-title center"><strong>Find Hospital</strong></span>
            </div>
			</a>
            <div class="card-content">
              <p>Stuck in a new place and are in some need for medical help?
			  Click here to find the best hospitals in you city.</p>
            </div>
          </div>
      </div>
	</div>
	<div class="col s12 m12 l6">
		 <div class="row">
		  <div class="card hoverable">
			<div class="card-content">
			  <h4 class="center grey-text text-darken-2">Hi <strong class="black-text"><?= $user['email']; ?></strong></h4>
			  <p class="center">Welcome to my AveKare!</p>
			  <p class="center">Here are some updates and reminders.</p>
			</div>
			<div class="card-tabs">
			  <ul class="tabs tabs-fixed-width">
				<li class="tab"><a href="#test4"><span class="cyan-text text-darken-2">News</span></a></li>
				<li class="tab"><a class="active" href="#test5"><span class="cyan-text text-darken-2">Reminders</span></a></li>
				<li class="tab"><a href="#test6"><span class="cyan-text text-darken-2">Health Goals</span></a></li>
			  </ul>
			</div>
			<div class="card-content grey lighten-4">
			  <div id="test4">
			  <strong>News headlines</strong>
			  <br/>
			  
			  <ul>
			  <li>News Heading one.</li>
			  <li>Latest news two.</li>
			  <li>news about some research.</li>
			  <li>New about how a man fought cancer.</li></ul>
			  </div>
			  <div id="test5">
			  <strong>Upcoming events</strong>
			  <br/>
			  <ul>
			  <li>Routine body check up in 2 days.</li>
			  <li>Stock for monthly medicines end in a week </li>
			  <li>Appointment with dentist in 2 weeks</li>
			  <li>Call the Doctor! </li></ul>
			  </div>
			  <div id="test6">
			  <strong>Your health goals</strong>
			  <br/>
			  
			  <ul>
			  <li>Lose weight!!</li>
			  <li>Quit smoking.</li>
			  <li>Eat healthy.</li>
			  <li>Get over acnes.</li></ul>
			  </div>
			</div>
		  </div>
      </div>
	</div>
		<div class="col s12 m12 l3">
      <div class="row">
          <div class="card hoverable">
		  <a href="http://avekare.net16.net/appointment.html">
            <div class="card-image">
              <img src="images/appoint_edited.jpg">
              <span class="card-title center"><strong>Get Appointment</strong></span>
            </div></a>
            <div class="card-content">
              <p>Like every this else these days, now you can get Doctor's appointment online.
			  To apply for appointment click here.</p>
            </div>
          </div>
      </div>
	</div>
</div>
<div class="row">
	<div class="col s12 m6 l3">
      <div class="row">
          <div class="card hoverable">
		    <a target="_blank" href="https://avekarehealth.wordpress.com">
            <div class="card-image">
              <img src="images/blog_edited.jpg">
              <span class="card-title center"><strong>Blog</strong></span>
            </div>
			</a>
            <div class="card-content">
              <p>Read our blog to be upto date with health issues,advancement in health technology and much more.
			 </p>
            </div>
          </div>
      </div>
	</div>
	<div class="col s12 m6 l3">
      <div class="row">
          <div class="card hoverable">
		  <a href="medicine.html">
            <div class="card-image">
              <img src="images/medi_edited.jpg">
              <span class="card-title center"><strong>Order Medicine</strong></span>
            </div></a>
            <div class="card-content">
              <p>Too lazy to go to the chemists shop or the medicine not available easily?
              We are here to deliver your medicines.</p>
            </div>
          </div>
      </div>
	  </div>
	<div class="col s12 m6 l3">
      <div class="row">
          <div class="card hoverable">
		  <a href="yoga.html">
            <div class="card-image">
              <img src="images/yoga_edited.jpg">
              <span class="card-title center"><strong>Yoga & Meditation</strong></span>
            </div>
			</a>
            <div class="card-content">
              <p>Stressed with daily work or feeling low or depressed?
              Its time to practice some good habits! Learn yoga and Meditation.</p>
            </div>
          </div>
      </div>
	</div>
		<div class="col s12 m6 l3">
      <div class="row">
          <div class="card hoverable">
		  <a target="_blank" href="https://avekarehealth.wordpress.com/contact/">
            <div class="card-image">
              <img src="images/contact_edited.jpg">
              <span class="card-title center"><strong>Contact Us!</strong></span>
            </div>
			</a>
            <div class="card-content">
              <p>Any problem with our service? Or you want more features? Ask us out, we are ready!</p>
            </div>
          </div>
      </div>
	</div>
</div>
<footer class="page-footer cyan lighten-3">
	  <div class="container">
		<div class="center">
			<div class="row">
				<h6 class="white-text">Follow us:</h6>
				<a href="#!"><img height="60px" width="60px" src="footer_icon\google_plus.png" /></a>
				<a href="https://www.facebook.com/www.avekare.co.in/?fref=ts"><img height="60px" width="60px" src="footer_icon\facebook.png" /></a>
				<a href=""><img height="60px" width="60px" src="footer_icon\twitter.png" /></a>
				<a href="https://avekarecoin.wordpress.com/"><img height="60px" width="60px" src="footer_icon\wordpress.png" /></a>
			</div>
		</div>	
	  </div>
	  <div class="footer-copyright cyan lighten-2">
		<div class="container">
		<span class="black-text">Vedant Jain & Arpit Khurana</span>
		<a href="introductory.html" class="white-text right">Logout</a>
		</div>
	  </div>
   </footer>
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript" src="materialize/js/materialize.min.js"></script>

</body>
</html>