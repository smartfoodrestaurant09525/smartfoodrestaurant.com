<?php
    $con=mysqli_connect('localhost','root','','restaurant');      
    if(isset($_POST['sb']))
    {
    	$name= $_POST['name'];
		$email= $_POST['email'];
    	$phone= $_POST['phone'];
        $date= $_POST['date'];
        $time= $_POST['time'];
        $people= $_POST['people'];
        $message= $_POST['message'];
    	$query= "INSERT INTO resturant(NAME,EMAIL,PHONE,DATE,TIME,PEOPLE,MESSAGE) VALUES ('$name','$email','$phone','$date','$time','$people','$message')";
    	$run=mysqli_query($con, $query);
    
     if ($con->connect_error) 
     {
        die("Connection failed: " . $conn->connect_error);
     }
	 echo ("<script LANGUAGE='JavaScript'>
    window.alert(' Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!');
    window.location.href='http://localhost/dashboard/projectworkk/indexx.php';
    </script>");
	// echo '<script>alert("Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!")</script>';
     // header ("Location:http://localhost/dashboard/projectworkk/indexx.php");
	 
	}

     ?>