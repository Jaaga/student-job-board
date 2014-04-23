
<?php
include('../../public/models/users.php');
include_once('../../public/models/dbconnection.php');
session_start();
$user=new users;

$userpage=True;
if(isset($_GET["edit"]))
{

	$userid=$_GET["edit"];
	$userdata= $user->get_user_by_id($userid);
	$name=$userdata[0];
			$email=$userdata[1];
		    $linkedin=$userdata[2];
		    $about=$userdata[3];
		    $picture=$userdata[4];
		    $paypal=$userdata[5];
	include 'editprofile.html.php';
	exit();
}
if(isset($_POST['action']) )
{
	$temp=$_FILES['picture']['tmp_name'];
	$picture='images/'.$_FILES['picture']['name'];
	move_uploaded_file($temp, $picture);
	$name=$_POST["name"];
	$email=$_POST["email"];
	$paypal=$_POST["paypal"];
	$linkedin=$_POST["linkedin"];
	$about=$_POST["about"];
	$user=new users;

	$user->edit_user($_SESSION['userid'],$name,$email,$paypal,$picture,$linkedin,$about);
	header('Location: ../user/');
	exit();

}
include 'user_dash.html.php';
?>