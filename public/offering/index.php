<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/student-job-board/public/models/dbconnection.php';
include $_SERVER['DOCUMENT_ROOT'] . '/student-job-board/public/models/offerings.php';



if(isset($_POST['action']) and $_POST['action']=="create")
{
	$description=$_POST["description"];
	$title=$_POST["title"];
	$category=$_POST["category"];
	$picture=$_POST['picture'];
	$createOffering= new offering();
	$createOffering->create_offering($_SESSION['userid'],$title,$description,$picture);
	header('Location: ../user/');
	exit();
}

if(isset($_GET["offeringid"]))
{
	$offeringid=$_GET["offeringid"];
	echo $offeringid;
	include 'viewoffering.html.php';
	exit();
}
if(isset($_GET["edit"]))
{
	$editofferingid=$_GET["edit"];
	
}


include 'createoffering.html.php';
?>