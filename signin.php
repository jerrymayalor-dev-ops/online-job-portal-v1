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
			<a class="navbar-brand" href="index.php"><img src="img/site-logo.png"></a> <button class="navbar-toggler" data-target="#navbarResponsive" data-toggle="collapse" type="button"><span class="navbar-toggler-icon"></span></button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item mx-1">
						<a class="nav-link active" href="index.php">Home</a>
					</li>
					<li class="nav-item mx-1">
						<a class="nav-link btn btn-success text-white" href="signin.php">Sign In</a>
					</li>
					<li class="nav-item mx-1">
						<a class="nav-link btn btn-danger text-white" href="signup.php">Sign Up</a>
					</li>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!--- End Navigation -->


	<!--- Start Jumbotron -->
	<div class="jumbotron mt-5">

        <!--- Start Container -->    
		<div class="container mt-5">
            <div class="d-flex justify-content-center h-100">
                <div class="user_card">
                    <div class="d-flex justify-content-center">
                        <div class="brand_logo_container">
                            <img src="img/site-logo.png" class="brand_logo" alt="Logo">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center form_container">
                        <form>
                            <div class="input-group mb-3">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" name="" class="form-control input_user" value="" placeholder="username">
                            </div>
                            <div class="input-group mb-2">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" name="" class="form-control input_pass" value="" placeholder="password">
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                                    <label class="custom-control-label" for="customControlInline">Remember me</label>
                                </div>
                            </div>
                                <div class="d-flex justify-content-center mt-3 login_container">
                        <button type="button" name="button" class="btn login_btn">Login</button>
                    </div>
                        </form>
                    </div>
            
                    <div class="mt-4">
                        <div class="d-flex justify-content-center links">
                            Don't have an account? <a href="#" class="ml-2">Sign Up</a>
                        </div>
                        <div class="d-flex justify-content-center links">
                            <a href="#">Forgot your password?</a>
                        </div>
                    </div>
                </div>
            </div>

		</div><!--- End Container -->
	</div>
	<!--- End Jumbotron -->


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