<?php include('signupdatacon.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Forget Password Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body  style="
    background-image: url(rest8.jpg);
    background-position: center;">
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card"style="margin-top: 170px; height:403px;">
		 <h1 style="margin-top: -120px;color: #ffab54;font-weight: bold;">Smart Food Restaurant</h1>
			<div class="card-header" style="padding: 1.2rem  1.25rem;">
				<a href="forgetpass.php"><h3 style="font-size: 50px;height: 40px;">Forget</h3></a>
				<div class="d-flex justify-content-end social_icon" style=" top: -25px;">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div> 
			<div class="card-body" style="margin-top:-25px;">
				<form action="forgetpass.php"method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input type="email" class="form-control"  name="email"  placeholder=" Email-Id"required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="id" class="form-control"  name="id"  placeholder=" User-Id"required autocomplete="off">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-lock"></i></span>
						</div>
						<input type="password" name="new"class="form-control" placeholder="New Password"required  autocomplete="off">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-lock"></i></span>
						</div>
						<input type="password" name="retype"class="form-control" placeholder="Confirm Password"required  autocomplete="off">
					</div>
					
					<div class="form-group">
					<input type="submit" value="Updated" name="forget" class="btn float-right login_btn"style="margin-top:0px; margin-right:115px;">

					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
				</div>
				<div class="d-flex justify-content-center links"style="margin-top:0px;">
				<a href="checklogin.php">	<input type="submit" value="Login" name="login"class="btn float-right login_btn"></a>&nbsp;&nbsp;&nbsp;
				<a href="signup.php">	<input type="submit" value="Signup" name="signup" class="btn float-right login_btn"></a>
				</div>
				
			</div>
		</div>
	</div>
</div>
</body>
</html>