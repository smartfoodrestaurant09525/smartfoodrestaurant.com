<?php
    $con=mysqli_connect('localhost','root','','restaurant');      
    if(isset($_POST['subs']))
    {
    	
		$email= $_POST['email'];
    	$query= "INSERT INTO subscribe(EMAIL) VALUES ('$email')";
    	$run=mysqli_query($con, $query);
    
     if ($con->connect_error) 
     {
        die("Connection failed: " . $conn->connect_error);
     }
	 echo ("<script LANGUAGE='JavaScript'>
    window.alert(' Thanks For your Feedback!');
    window.location.href='http://localhost/dashboard/projectworkk/indexx.php';
    </script>");
	// echo '<script>alert("Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!")</script>';
     // header ("Location:http://localhost/dashboard/projectworkk/indexx.php");
	 
	}

     ?>