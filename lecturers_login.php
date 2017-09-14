<?php 
require_once 'core/init.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Envelope - LogIn</title>
	<?php include 'includes/stylesheets.php'; ?>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="index.php" class="navbar-brand"><img src="assets/images/envelope-w.png" alt="" class="img-responsive"></a>
			</div>
			<div id="myNavbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="lecturers_signup.php";>Sign Up</a></li>
				</ul>
			</div>
		</div>
	</nav>
 	<div class="container">
 		<div class="row login">
	 		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-10 col-lg-offset-4 col-md-offset-4 col-sm-offset-3 col-xs-offset-1 login-body animated bounceInDown">
	 			<h2 class="text-center">Log In</h2>
	 			<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" role="form">
	 				<?php  
	 					if ($create_account || $no_login) {
	 						echo '<div class="alert alert-danger">Invalid Credentials. <br>Please create an account.</div>';
	 					}
	 				?>
	 				<div class="form-group">
	 					<input type="email" name="email" id="email" placeholder="Email" class="form-control" autofocus required>
	 				</div>

	 				<div class="form-group">
	 					<input type="password" name="password" id="password" placeholder="Password" class="form-control" required>
	 				</div>

	 				<div class="form-group">
	 					<input type="submit" name="submit" id="submit" value="Log In" class="btn btn-block btn-success">
	 				</div>

	 				<div class="form-group">
	 					Don't have an account yet? <a href="lecturers_signup.php">Sign Up</a>
	 				</div>
	 			</form>
	 		</div>
 		</div>
 	</div>
	
	<?php include 'includes/scripts.php'; ?>
	
</body>
</html>