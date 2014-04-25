<!-- Controller for Login -->

<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/student-job-board/public/models/dbconnection.php';
include $_SERVER['DOCUMENT_ROOT'] . '/student-job-board/public/models/login.php';

if(isset($_GET['referral'])){
	$order=$_GET['referral'];
}



if(isset($_POST['submit']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	if(isset($_POST['ref']))
		$ref=$_POST['ref'];
	

	$userLogIn=new logIn();
	$logInStatus=$userLogIn->is_validUser($email,$password);
	if($logInStatus==FALSE)
	{
		$InvalidUser="Email Password dont match";
		include 'signin.html.php';
		exit();
	}
	else
	{
		if(isset($ref)){

			header ('Location: ../orders/?order='.$ref);
			exit();
		}

		header ('Location: ../user/');
		exit();
	}
}
include 'signin.html.php';
?>