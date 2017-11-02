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
<body>
	<nav class="cyan lighten-3">
    <div class="nav-wrapper container">
      <a href="#!" class="brand-logo"><strong style="font-family:verdana">MediCare+</strong></a>
      <ul class="right hide-on-med-and-down">
		<li><a href="login.php" class="waves-effect white btn cyan-text text-darken-3">Login</a></li>
		<li><a href="register.php" class="waves-effect white btn cyan-text text-darken-3">Sign Up</a></li>
      </ul>
      <ul class="side-nav" id="slide-out">
        <li><a href="login.php">Login</a></li>
        <li><a href="register.php">Sign Up</a></li>
      </ul>
	  	<a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <br/>
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="images/slider1.jpg">
        <div class="caption right-align">
          <h3>Get appointment from Doctor!</h3>
        </div>
      </li>
      <li>
        <img src="images/hosp_edited.jpg">
        <div class="caption right-align">
          <h3>Find best hospitals nearby.</h3>
        </div>
      </li>
      <li>
        <img src="images/document.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Order Medicines Online</h3>
        </div>
      </li>
    </ul>
  </div>
  <br/>
  <h3 class="center">AveKare</h3>
  <h5 class="center-align" style="font-family:Verdana;">We care at MediCare!</h5>
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
		©2017 MediCare+, All rights reserved.
		</div>
	  </div>
   </footer>
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
  <script>
  $(document).ready(function(){
      $('.slider').slider();
    });
$(".button-collapse").sideNav();
  </script>
</body>
</html>