<?php
   
    $con=mysqli_connect('localhost','root','','restaurant');      
    if(isset($_POST['sbn']))
    {
      $fullname= $_POST['fullname'];
		$email= $_POST['email'];
    	$phone= $_POST['phone'];
        $cpass= $_POST['cpass'];
        $confpass= $_POST['confpass'];
		 $query = mysqli_query($con, "SELECT * FROM signup WHERE fullname='$fullname' AND email = '$email' AND phone= '$phone' ");
	}
?>