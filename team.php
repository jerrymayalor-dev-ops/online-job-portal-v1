<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Responsive Bootstrap Theme</title>
	<link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
</head>
<body>
	<!--- Navigation -->
	<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php"><img src="img/bootstrap.png"></a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link active" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="portfolio.php">Portfolio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="pricing.php">Pricing</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="team.php">Team</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact-us.php">Contact Us</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!--- End Navigation -->


	<!--- Start Jumbotron -->
	<div class="jumbotron">
		<div class="container">
			<h2 class="text-center pt-5 pb-3">TEAM</h2>

		</div><!--- End Container -->
	</div>
	<!--- End Jumbotron -->


	<!--- Start Footer -->
	<footer>
		<div class="container">
			<div class="row text-center py-5">
				<div class="col-md-4">
					<img src="img/bootstrap.png">
					<p>At our core is a collection of design and development solutions that represent everything your business needs to compete in the modern marketplace.</p>
				</div>
				<div class="col-md-4">
					<h3 class="text-center">CONTACT INFO</h3><strong>Contact Info</strong>
					<p>(888) 888-8888<br>
					email@nuno.com</p>
				</div>
				<div class="col-md-4 pb-5">
					<h3 class="text-center">CONNECT WITH US</h3><br>
					<a class="btn btn-outline-light btn-lg" href="#">SEND US AN EMAIL</a>
				</div>
			</div><!--- End of Row -->
		</div><!--- End of Container -->
	</footer>
	<!--- End of Footer -->

<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script> 
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<!--- End of Script Source Files -->

</body>
</html>


<!--- Check out my courses! -->
<div class="udemy-course" style="position: fixed; bottom: 0; right: 0; margin-bottom: -5px; z-index: 100;">
	<a href="https://w3newbie.com/courses" target="_blank" style="z-index: 999!important; cursor: pointer!important;"><img src="https://www.w3newbie.com/wp-content/uploads/nuno-course-banner.png" style="max-width: 100%; min-width: 100%;"></a>
</div>