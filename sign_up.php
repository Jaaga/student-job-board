<?php

if(isset($_POST['name'])){$name = $_POST["name"];}
if(isset($_POST['email'])){$email = $_POST["email"];}
if(isset($_POST['pass'])){$pass =$_POST["pass"];}

// Create connection
$con=mysqli_connect("localhost","root","",'sjb1');



// Check connection
if(!$con){
	die ('Connect Error ('. mysqli_connect_errno() . ')'
			. mysqli_connect_error());
}

$sql="INSERT INTO student(name, email ,pass ) VALUES ('$name','$email','$pass')";

if(!mysqli_query($con,$sql))
{
	die ('Error: ' . mysqli_error($con));
}




?>
