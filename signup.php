<?php include('signupdatacon.php') ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
<script>
     function myfun()
	 {
	  var corectway= /^[a-z A-Z]{3,30}$/;
	  var a = document.getElementById("fullname").value;
	  if(a==""){
	      document.getElementById("mess1").innerHTML=" ** Please fill fullname";
		  return false;
	  }
	  if(a.length<3)
	  {
	   document.getElementById("mess1").innerHTML=" ** firstname must be greater than 3 chacrcter";
	   return false;
	 }
	  if(a.length>30)
	  { 
	   document.getElementById("mess1").innerHTML=" ** firstname must be less than 30 chacrcter";
	   return false;
	  }
	  if(a.match(corectway))
	   true;
	  else{
		   document.getElementById("mess1").innerHTML=" ** only alphabets allow";
		   return false;
	   }
	   
	   
	   
	   // Password validation....
	   
	   var p=document.getElementById("cpass").value;
	   var pp=document.getElementById("confpass").value;
	   if(p==""){
	      document.getElementById("mess3").innerHTML=" ** Please fill password";
		  return false;
	  }
	  if(p.length<5)
	  {
	   document.getElementById("mess3").innerHTML=" ** password length must be 6 digit";
	   return false;
	 }
	  if(p.length>11)
	  { 
	   document.getElementById("mess3").innerHTML=" ** password length must be smaller than 11 digit";
	   return false;
	  }
	  
  if(pp==""){
	      document.getElementById("mess4").innerHTML=" ** Please fill password";
		  return false;
	  }
	  if(pp.length<5)
	  {
	   document.getElementById("mess4").innerHTML=" ** password length must be 6 digit";
	   return false;
	 }
	  if(pp.length>11)
	  { 
	   document.getElementById("mess4").innerHTML=" ** password length must be smaller than 11 digit";
	   return false;
	  }
	  if(p!=pp){
	      document.getElementById("mess4").innerHTML=" ** password are not matched";
	       return false;
		  }
	  }
  </script>
	
	
	
	
	
	
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
		<div class="card" style="height:475px; margin-top:95px;">
		  <h1 style="margin-top: -100px;color: #ffab54;font-weight: bold;">Smart Food Restaurant</h1>
			<div class="card-header">
				<h3 style=" margin-top: 20px;">Register</h3>
				<div class="d-flex justify-content-end social_icon" style="top: -20px;">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				<form action ='signup.php' onsubmit="return myfun()" method="POST"style="margin-top: -30px;">
				
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" id="fullname" class="form-control" placeholder="FullName" value="<?php echo $fullname; ?>" name="fullname" required>
						<span id = "mess1"style="color:red;"></span>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input type="text" class="form-control" id="email" placeholder="Email-id" value="<?php echo $email; ?>" name="email"required  autocomplete="off"></div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-phone"></i></span>
						</div>
						<input type="phone" class="form-control" placeholder="Phone no."pattern="[0-9]{10}" value="<?php echo $phone; ?>"  name="phone"required  autocomplete="off">
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-lock"></i></span>
						</div>
						<input type="password" id="cpass" class="form-control" placeholder="Create Password"name="cpass"required  autocomplete="off">
					       <span id = "mess3"style="color:red;"></span>
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-lock"></i></span>
						</div>
						<input type="password" id="confpass" class="form-control" placeholder="Confirm Password"name="confpass"required autocomplete="off">
					     <span id = "mess4"style="color:red;"></span>
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox"required>Remember Me
					</div>
					
					<div class="form-group">
						<input type="submit" value="Sign Up" class="btn float-right login_btn"name="regis">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links"style="margin-top: -30px;">
					Already have an account?<a href="checklogin.php">Sign In</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>