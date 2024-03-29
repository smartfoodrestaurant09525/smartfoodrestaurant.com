<?php
session_start();
$errors = array();
$_SESSION['success'] = "";
$fullname = "";
$email    = "";
$phone    = "";
$confpass = "";
//$id = "";
$con=mysqli_connect('localhost','root','','restaurant');      
    if(isset($_POST['regis']))
    {   
		$fullname= $_POST['fullname'];
		$email= $_POST['email'];
    	$phone= $_POST['phone'];
        $cpass= $_POST['cpass'];
        $confpass= $_POST['confpass'];
        //$id= $_POST['id'];
    $query = mysqli_query($con, "SELECT * FROM signup WHERE email = '".$email. "'  OR cpass = '".$cpass. "'");
//$registered = time();
     
if(mysqli_num_rows($query) > 0){
	
    echo '<script>alert("Email or password is already in use.")</script>';
}else{
    $sql = "INSERT INTO signup(FULLNAME,EMAIL,PHONE,CPASS,CONFPASS) VALUES ('$fullname','$email','$phone','$cpass','$confpass')";
     $_SESSION['id'] = $email;    
	$_SESSION['fullname'] =$fullname;
	 $_SESSION['email'] =$email;
	 $_SESSION['phone'] =$phone;
	 $_SESSION['cpass'] =$cpass;
	 
	if ($con->query($sql) === TRUE) {
        if($sql->errno === 1062) {
          echo '<script>alert("EMAIL or Password is already in use")</script>';
        }else{
          header("Location: http://localhost/dashboard/projectworkk/indexx.php"); 
    
        }
                
    }else{
                    
    }
}
	}
	
	//Login data connect.
	
	if(isset($_POST['login']))
    {
        $email=mysqli_real_escape_string($con, $_POST['email']);
        //$email=mysqli_real_escape_string($con, $_POST['id']);
        $cpass=mysqli_real_escape_string($con, $_POST['cpass']);
        
    	
    	
      // $count=mysqli_num_rows($run);
	     // Error message if the input field is left blank
    if (empty($email)) {
        array_push($errors, "email is required");
    }
    if (empty($cpass)) {
        array_push($errors, "Password is required");
    }
	  
		if (count($errors) == 0) {
			
          
		 
        $sql = "SELECT * FROM signup WHERE email='$email' AND id='$email' OR cpass='$cpass'";

        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $email || $row['id']===$email && $row['cpass'] === $cpass) {

                echo'<script>alert( "Logged in!")</script>';

                $_SESSION['id'] = $row['id'];
				$_SESSION['email'] = $row['email'];
                

                $_SESSION['fullname'] = $row['fullname'];

                $_SESSION['phone'] = $row['phone'];

                header("Location: indexx.php");

                exit();

            }else{

                echo"<script>alert('Incorect  email-id/id or password');
				window.location.href='checklogin.php';</script>";

                exit();

            }

        }else{

            echo"<script>alert('Incorect  email or password');
			window.location.href='checklogin.php';</script>";

            exit();

        }

    }

else{

    header("Location: indexx.php");

exit();}

}


 
    
 // Password forget.
   
   if(isset($_POST['forget']))
   {
     $email=mysqli_real_escape_string($con, $_POST['email']);
        $id=mysqli_real_escape_string($con, $_POST['id']);
        $new=mysqli_real_escape_string($con, $_POST['new']);
        $retype=mysqli_real_escape_string($con, $_POST['retype']);
		
		   // $count=mysqli_num_rows($run);
	     // Error message if the input field is left blank
    if (empty($email)) {
        array_push($errors, "email is required");
    }
    if (empty($id)) {
        array_push($errors, "User-Id is required");
    }
	  
		if (count($errors) == 0) 
		 {
	       $sql = "SELECT * FROM signup WHERE email='$email' AND id='$id' ";

            $result = mysqli_query($con, $sql);
			if (mysqli_num_rows($result) === 1) {
                
              if ($new==$retype)
              {
			 $run="UPDATE signup SET cpass='$new',confpass='$new' WHERE email='$email'";
			 $querychange = mysqli_query($con,$run);
			session_destroy();
			echo"<script>alert ('Your password has been changed.');window.location.href='indexx.php';</script>";

      }     
      else 
           echo"<script>alert ('New password don't match!');window.location.href='forgetpass.php';</script>";
       }
			else 
              echo"<script>alert('Old User-Id & email doesnt match!');window.location.href='forgetpass.php';</script>";
               }      else
  echo'<script>alert ("You must be logged in to change your password")</script>';
           }
		   
		   
		   // Password change.
   
   if(isset($_POST['changed']))
   {
     
        $cpass=mysqli_real_escape_string($con, $_POST['cpass']);
        $new=mysqli_real_escape_string($con, $_POST['new']);
        $retype=mysqli_real_escape_string($con, $_POST['retype']);
		
		   
    if (empty($cpass)) {
        array_push($errors, "Password is required");
    }
	  
		if (count($errors) == 0) 
		 {
	       $sql = "SELECT * FROM signup WHERE  cpass='$cpass' ";

            $result = mysqli_query($con, $sql);
			if (mysqli_num_rows($result) === 1) {
                
              if ($new==$retype)
              {
			 $run="UPDATE signup SET cpass='$new',confpass='$new' WHERE cpass='$cpass' ";
			 $querychange = mysqli_query($con,$run);
			//session_destroy();
			echo"<script>alert ('Your password has been changed.');window.location.href='indexx.php';</script>";

      }     
      else 
           echo"<script>alert ('New password don't match!');window.location.href='forgetpass.php';</script>";
       }
			else 
              echo"<script>alert('Old password & email doesnt match!');window.location.href='forgetpass.php';</script>";
               }      else
  echo'<script>alert ("You must be logged in to change your password")</script>';
           }
	?>
	 