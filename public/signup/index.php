<?php
include $_SERVER['DOCUMENT_ROOT'] . '/student-job-board/public/models/dbconnection.php';
include $_SERVER['DOCUMENT_ROOT'] . '/student-job-board/public/models/signup.php';


if(isset($_POST['action']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	$newSignUp=new signup();

	if($newSignUp->is_signedUp($email)==FALSE)
	{
		$userid=$newSignUp->new_signup($name, $email, $password);
		session_start();
		$_SESSION['username']=$name;
		$_SESSION['userid']=$userid;
		header ('Location: ../user/');
	}
	else{
		$profileExist=TRUE;
	}
}

include 'signup.html.php';
exit();


/*	<?php try{
		$sql="INSERT INTO user (name,email,pass) VALUES ('".$name."','".$email."','".$password."')";
		$pdo->exec($sql);
	}
	catch (PDOException $e)
	{
		$error="Unable to update content";
		echo $error;
		exit();
	} 

	try
	{
		$sql1="SELECT * FROM user WHERE email='".$email."'";
		$result=$pdo->query($sql1);
	}
	catch (PDOException $e)
	{
		$error="Unable to pull content";
		echo $error;
		exit();
	} 

	foreach ($result as $row){
		$userid= $row['user_id'];
	} ?>
*/	
	
	
	