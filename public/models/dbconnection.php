<?php
function create_connection()
{	
	
	
	$con=mysqli_connect("localhost","root","","sjb") or die(mysqli_error());

	return $con;
	
}
?>
