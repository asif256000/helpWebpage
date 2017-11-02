<?php
$host = 'localhost';
$user = 'root';
$pass = '';

$con = mysqli_connect($host, $user, $pass,'demo');

$imagename=$_FILES["myimage"]["name"]; 

//Get the content of the image and then add slashes to it 
$imagetmp=addslashes (file_get_contents($_FILES['myimage']['tmp_name']));

//Insert the image name and image content in image_table
$insert_image="INSERT INTO image_table VALUES('$imagetmp','$imagename')";

mysqli_query($con,$insert_image);


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
    <a href="dashboard.php" class="brand-logo center cayn lighten-3">My AveKare</a>
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
	<h4 class="center black-text"><a href="dashboard.html">Thank You! Your Image has been uploaded.</a></h4>
	
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