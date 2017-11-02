<?php

session_start();

if( isset($_SESSION['user_id']) ){
	header("Location:dashboard.php");
}

require 'database.php';

$message = '';

if(!empty($_POST['email']) && !empty($_POST['password'])):
	
	// Enter the new user in the database
	$sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
	$stmt = $conn->prepare($sql);

	$stmt->bindParam(':email', $_POST['email']);
	$pass = password_hash($_POST['password'], PASSWORD_BCRYPT);
	$stmt->bindParam(':password',$pass);

	if( $stmt->execute() ):
		$message = 'Successfully created new user';
	else:
		$message = 'Sorry there must have been an issue creating your account';
	endif;

endif;

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
    <div class="nav-wrapper">
      <a href="index.php" class="brand-logo center-align"><strong>MediCare+</strong></a>
    </div>
  </nav>
  <div class="container">
  <div class="col s8 offset-s4">
	<div class="container">
		<h3 class="cyan-text">Sign Up</h3>
		<div class="row">

	<?php if(!empty($message)): ?>
		<p><?= $message ?></p>
	<?php endif; ?>

<form class="col s12" action="register.php" method="post">
			  <div class="row">
				<div class="input-field col s6">
				  <input id="first_name" type="text" class="validate">
				  <label for="first_name">First Name</label>
				</div>
				<div class="input-field col s6">
				  <input id="last_name" type="text" class="validate">
				  <label for="last_name">Last Name</label>
				</div>
			  </div>
			  <div class="row">
				<div class="input-field col s12">
				  <input id="email" type="email" class="validate" name="email">
				  <label for="email">Email</label>
				</div>
			  </div>
			  <div class="row">
				<div class="input-field col s12">
				  <input id="password" type="password" class="validate" name="password">
				  <label for="password">Password</label>
				</div>
			  </div>
			  
			  <button class="btn waves-effect waves-light" type="submit" name="action">Submit
			<i class="material-icons right">send</i>
		  </button>
			  
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