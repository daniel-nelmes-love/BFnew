<?php 

namespace App\Controllers

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Bootstrap 101 Template</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  </head>
  <body>

  	<nav class="navbar navbar-default">
  		<div class="container-fluid">
  			<div class="navbar-header">
  				<a class="navbar-brand" href="./">Boneface</a>
  			</div>
  			<ul class="nav navbar-nav">
  				<li <?php if($page === "home"): ?> class="active" <?php endif; ?> >
  					<a href="./">Home</a>
  				</li>
  				<li <?php if($page === "beer"): ?> class="active" <?php endif; ?> >
  					<a href="./beer">Beer</a>
  				</li>
  				<li <?php if($page === "merchandise"): ?> class="active" <?php endif; ?> >
  					<a href="./merchandise">Merchandise</a>
  				</li>
  				<li <?php if($page === "about-us"): ?> class="active" <?php endif; ?> >
  					<a href="./about-us">About us</a>
  				</li>
  				<li <?php if($page === "contact-us"): ?> class="active" <?php endif; ?> >
  					<a href="./contact-us">Contact us</a>
  				</li>
  		</div>
  	</nav>


  	<?php 
  		switch($page) {
  			case 'beer':
  				include 'beer.inc.php';
  				break;
  			case 'merchandise':
  				include 'merch.inc.php';
				break;
			case 'about-us':
  				include 'about.inc.php';
				break;
			case 'contact-us':
  				include 'contact.inc.php';
				break;
			case 'home':
			default:
  				include 'home.inc.php';
  		}
  	?>

  	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<!-- Include all compiled plugins (below), or include individual files as needed -->
  	<script src="js/bootstrap.min.js"></script>
  </body>
  </html>