<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title>Online Municipal Job Opportunities<un</title>
	<link rel="icon" type="image/x-icon" href="/img/site-logo.png">
	<link href="bootstrap-4.3.1-dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="img/site-logo.png">
	<link href="style.css" rel="stylesheet">
	
</head>
<body>
	<!--- Start Header Navigation Menu -->
	<header class="">
		<nav class="navbar navbar-light bg-white navbar-expand-md shadow p-3">
			<div class="container-fluid">
				<a class="navbar-brand font-weight-bold" href="index.php">Online Municipal Job Opportunities</a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item px-3">
							<a class="nav-link text-dark font-weight-bold" href="index.php" >Home</a>
						</li>
						<li class="nav-item px-3">
							<a class="nav-link text-dark font-weight-bold btn " href="#" data-toggle="modal" data-target="#signinModal">Sign In</a>
						</li>
						<li class="nav-item px-3">
							<a class="nav-link btn btn-danger text-white text-uppercase" href="#" data-toggle="modal" data-target="#signupModal">post job now!</a>
						</li>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<!--- End Header Navigation Menu -->

	<!--- Main Section  -->
	<div class="main">
		<div class="col">
			Slider
		</div>
		<div class="col">
			Featured Jobs
		</div>
		<div class="col">
			Featured Industries
		</div>
		<div class="col">
			Featured Comapnies
		</div>
	</div>	
	<!--- End Main Section -->


	<!--- Start Footer -->
	<footer>
]		footer here
	</footer>
	<!--- End of Footer -->

<!--- Script Source Files -->
<script src="js/jquery-3.3.1.min.js"></script> 
<script src="bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
<!--- End of Script Source Files -->

</body>
</html>


<!-- Sign In Modal -->
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
    