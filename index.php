<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Home</title>
	<link rel="icon" type="image/x-icon" href="/img/site-logo.png">
	<link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="img/site-logo.png">
	<link href="style.css" rel="stylesheet">
	
</head>
<body>
	<!--- Navigation -->
	<nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.php"><img src="img/site-logo.png"></a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item mx-1">
						<a class="nav-link text-white" href="index.php" >Home</a>
					</li>
					<li class="nav-item mx-1">
						<a class="nav-link text-white btn " href="#" data-toggle="modal" data-target="#signinModal">Sign In</a>
					</li>
					<li class="nav-item mx-1">
						<a class="nav-link btn btn-danger text-white text-uppercase" href="#" data-toggle="modal" data-target="#signupModal">post job now!</a>
					</li>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!--- End Navigation -->

	<!--- Image Slider -->
	<div class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active"><img src="img/laptop.png"></div>
			<div class="carousel-item"><img src="img/sky.png"></div>
			<div class="carousel-item"><img src="img/bridge.png"></div>
		</div>
	</div>
	<!--- End Image Slider -->

	<!--- Complete Bootstrap Course -->
	<div class="container">
		<div class="row justify-content-center text-center">
			<div class="col-10 py-5">
				<h2>Complete Bootstrap Course</h2>
				<p class="lead">Bootstrap is an open-source front-end library with HTML and CSS based designs. This website is built with HTML5, CSS3 and Bootstrap 4.</p><a class="btn btn-purple btn-lg" href="https://w3newbie.com/courses/" target="_blank">Complete Bootstrap Course</a>
			</div>
		</div>
	</div>
	<!--- Complete Bootstrap Course -->

	<!--- Start Jumbotron -->
	<div class="jumbotron">
		<div class="container">
			<h2 class="text-center pt-5 pb-3">BUILT WITH THE BEST</h2>
			<div class="row justify-content-center text-center">
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/html5.png">
						<h3>HTML5</h3>
						<p>HTML5 is the fifth and current major version of the HTML standard, and subsumes XHTML.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/bootstrap4.png">
						<h3>BOOTSTRAP 4</h3>
						<p>Bootstrap is an open-source front-end library with HTML and CSS based designs.</p>
					</div>
				</div>
				<div class="col-10 col-md-4">
					<div class="feature">
						<img src="img/css3.png">
						<h3>CSS3</h3>
						<p>CSS3 is the latest evolution of the Cascading Style Sheets language and aims at extending CSS2.</p>
					</div>
				</div>
			</div><!--- End Row -->
		</div><!--- End Container -->
	</div>
	<!--- End Jumbotron -->

	<!--- Two Column Section -->
	<div class="container py-3">
		<div class="row justify-content-center py-5">
			<div class="col-lg-6">
				<h3 class="pb-4">Learn to build Bootstrap websites</h3>
				<p>The columns will automatically stack on top of each other when the screen is less than 992px wide.</p>
				<p>Resize the browser window to see the effect. Responsive web design has become more important as the amount of mobile traffic now accounts for more than half of total internet traffic.</p><a class="btn btn-purple btn-lg" href="#">Bootstrap Course</a>
			</div>
			<div class="col-lg-6"><img class="img-fluid" src="img/responsive.png"></div>
		</div>
	</div>
	<!--- End Two Column Section -->

	<!--- Start Footer -->
	<footer>
		<div class="container">
			<div class="row text-center py-5">
				<div class="col-md-4">
					<img src="img/site-logo.png" class="w-25">
				</div>
				<div class="col-md-4">
					<h3 class="text-center">CONTACT INFO</h3><strong>Contact Info</strong>
				</div>
				<div class="col-md-4 pb-5">
					<h3 class="text-center">CONNECT WITH US</h3><br>
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


<!-- Sign In Modal -->

  <!-- Modal -->
  <div class="modal fade" id="signinModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header bg-primary text-white text-uppercase">
			Sign In
			<button type="button" class="close text-white" data-dismiss="modal">&times;</button>
          
        </div>
		<form action="form-actions/verify-account.php" method="POST">
        
		<div class="modal-body">
				<div class="form-group">
					<label for="email">Email address:</label>
					<input type="email" class="form-control" id="email">
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="pwd">
				</div>
				<!-- <div class="checkbox">
					<label><input type="checkbox"> Remember me</label>
				</div> -->
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary" name="signin">Sign In</button>
			</div>
		</div>
	
		</form>
    </div>
  </div>
  

<!-- Sigup In Modal -->

  <!-- Modal -->
  <div class="modal fade" id="signupModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header bg-primary text-white text-uppercase">
			Sign Up
			<button type="button" class="close text-white" data-dismiss="modal">&times;</button>
          
        </div>
		<form action="form-actions/verify-account.php" method="POST">
        
		<div class="modal-body">
				<div class="form-group">
					<label for="email">Email address:</label>
					<input type="email" class="form-control" id="email">
				</div>
				<div class="form-group">
					<label for="pwd">Password:</label>
					<input type="password" class="form-control" id="pwd">
				</div>
				<!-- <div class="checkbox">
					<label><input type="checkbox"> Remember me</label>
				</div> -->
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary" name="signin">Sign In</button>
			</div>
		</div>
	
		</form>
    </div>
  </div>
    