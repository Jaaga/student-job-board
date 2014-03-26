<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/student-job-board/public/models/dbconnection.php';
include $_SERVER['DOCUMENT_ROOT'] . '/student-job-board/public/models/offerings.php';
$createOffering= new offering();




if(isset($_POST['action']) and $_POST['action']=="Create")
{
	$description=$_POST["description"];
	$title=$_POST["title"];
	$category=$_POST["category"];
	$picture=$_POST['picture'];
	$createOffering->create_offering($_SESSION['userid'],$title,$description,$picture);
	header('Location: ../user/');
	exit();
}

if(isset($_GET["offeringid"]))
{
	$offeringid=$_GET["offeringid"];
	include 'viewoffering.html.php';
	exit();
}

if(isset($_GET["edit"]))
{
	$editofferingid=$_GET["edit"];
	$buttonValue="Update";
	$pageTitle="Edit Offering";
	$data=$createOffering->get_offers_by_offer_id($editofferingid);
	$description=$data[3];
	$title=$data[1]; 
	include 'createoffering.html.php';
	exit();
}


if(isset($_POST['action']) and $_POST['action']=="Update")
{
	$idoffer=$_POST['editOfferid'];
	$description=$_POST["description"];
	$title=$_POST["title"];
	$category=$_POST["category"];
	$picture=$_POST["picture"];
	$createOffering->update_offering($_SESSION['userid'],$idoffer, $title,$description,$picture);
	header('Location: ../user/');
	exit();
}






$pageTitle="Create An Offering";
$title="";
$description="";
$buttonValue="Create";

include 'createoffering.html.php';
?>