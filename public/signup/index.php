<?php
include $_SERVER['DOCUMENT_ROOT'] . '/sjb/includes/db.inc.php';


if(isset($_POST['action']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$username=$_POST['username'];

	try{
		$sql="INSERT INTO user (name,email,pass,username) VALUES ('".$name."','".$email."','".$password."','".$username."')";
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
	}
	session_start();
	$_SESSION['username']=$username;
	$_SESSION['userid']=$userid;
	
	header ('Location: ../profile');
}

include 'form.html.php';
?>