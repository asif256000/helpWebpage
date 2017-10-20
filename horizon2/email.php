<?php
// the message

$name= $_GET['name'];
$docname = $_GET['docname'];
$hospital = $_GET['hospitalname'];
$date = $_GET['date'];
$time = $_GET['time'];
$msg = $name." seek an appointment for ".$docname." of ".$hospitalname." on ".$date." at ".$time;


// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("arpit.khurana2015@gmail.com","My subject",$msg);

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
  <li><a href="#!">Vedant<i class="material-icons right">perm_identity</i></a></li>
  <li class="divider"></li>
  <li><a href="#!">Logout<i class="material-icons right">power_settings_new</i></a></li>
</ul>
<nav>
  <div class="nav-wrapper cyan lighten-3">
    <a href="localhost/horizon/dashboard.php" class="brand-logo center cayn lighten-3">My AveKare</a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Account<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>
  </div>
</nav>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="row">
	<h4 class="center black-text"><a href="dashboard.html">Thank You! Your Email is sent successfully.</a></h4>
	
</div>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
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