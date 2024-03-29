<?php include('signupdatacon.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body  style="
    background-image: url(rest8.jpg);
    background-position: center;>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card"style="margin-top: 180px;">
		 <h1 style="margin-top: -120px;color: #ffab54;font-weight: bold;">Smart Food Restaurant</h1>
			<div class="card-header" style="padding: 1.75rem  1.25rem;">
				<h3 style="font-size: 50px;height: 40px;">Login</h3>
				<div class="d-flex justify-content-end social_icon" style=" top: -25px;">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div> 
			<div class="card-body">
				<form action="checklogin.php"method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input type="text" class="form-control"  name="email"  placeholder="Email-id/User-Id"required  autocomplete="off">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-lock"></i></span>
						</div>
						<input type="password" name="cpass"class="form-control" placeholder="Password"required  autocomplete="off">
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox"required>Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="Login" name="login" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="signup.php">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="forgetpass.php">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>