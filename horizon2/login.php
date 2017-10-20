<?php

session_start();

if( isset($_SESSION['user_id']) ){
	header("Location:dashboard.php");
}

require 'database.php';

if(!empty($_POST['email']) && !empty($_POST['password'])):
	
	$records = $conn->prepare('SELECT id,email,password FROM users WHERE email = :email');
	$records->bindParam(':email', $_POST['email']);
	$records->execute();
	$results = $records->fetch(PDO::FETCH_ASSOC);

	$message = '';

	if(count($results) > 0 && password_verify($_POST['password'], $results['password']) ){

		$_SESSION['user_id'] = $results['id'];
		header("Location: dashboard.php");

	} else {
		$message = 'Sorry, those credentials do not match';
	}

endif;

?>

<html>
<head>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>MediCare</title>
</head>
<body class="amber lighten-5">
	<nav class="cyan lighten-3">
    <div class="nav-wrapper">
      <a href="introductory.html" class="brand-logo center-align"><strong>MediCare+</strong></a>
    </div>
  </nav>
  
  	<?php if(!empty($message)): ?>
		<p><?= $message ?></p>
	<?php endif; ?>
	
  <div class="container">
  <div class="col s8 offset-s4">
	<div class="container">
		<h3 class="cyan-text">Login</h3>
		<div class="row">
			<form class="col s12" action="login.php" method="post">
			  <div class="row">
				<div class="input-field col s12">
				  <input id="first_name" type="text" class="validate" name="email">
				  <label for="first_name">Email Id</label>
				</div>
			  </div>
			  <div class="row">
				<div class="input-field col s12">
				  <input id="password" type="password" class="validate" name="password">
				  <label for="password">Password</label>
				</div>
			  </div>
			  <div class="row">
				<button class="btn waves-effect waves-light amber darken-1" type="submit" name="action">Login
					<i class="material-icons right">send</i>
				</button></div>
			</form>
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
	  <div class="footer-copyright cyan">
		<div class="container">
		©2017 MediCare+, All rights reserved.
		</div>
	  </div>
   </footer>
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="jquery.min.js"></script>
  <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
</body>
</html>