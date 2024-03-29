<?php
    $con=mysqli_connect('localhost','root','','restaurant');      
    if(isset($_POST['ct']))
    {
    	$name= $_POST['name'];
		$email= $_POST['email'];
    	$subject= $_POST['subject'];
        $message= $_POST['message'];
    	$query= "INSERT INTO resturant(NAME,EMAIL,SUBJECT,MESSAGE) VALUES ('$name','$email','$subject','$message')";
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