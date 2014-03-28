<?php
$offeringpage=True;
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/student-job-board/public/models/dbconnection.php';
include $_SERVER['DOCUMENT_ROOT'] . '/student-job-board/public/models/offerings.php';
$createOffering= new offering();




if(isset($_POST['action']) and $_POST['action']=="Create")
{
	$temp=$_FILES['picture']['tmp_name'];
	$picture='../images/'.$_FILES['picture']['name'];
	move_uploaded_file($temp, $picture);
	$description=$_POST["description"];
	$title=$_POST["title"];
	$category=$_POST["category"];
	$instruction=$_POST["instruction"];
	$createOffering->create_offering($_SESSION['userid'],$title,$description,$category,$picture,$instruction);
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
	$instruction=$data[4];
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
	$instruction=$_POST["instruction"];
	$createOffering->update_offering($_SESSION['userid'],$idoffer, $title,$description,$picture,$instruction);
	header('Location: ../user/');
	exit();
}


if(isset($_GET["delete"]))
{
	$deleteofferingid=$_GET["delete"];
	$createOffering->delete_offering($_SESSION['userid'],$deleteofferingid);
	header('Location: ../user/');
	exit();
}




$pageTitle="Create An Offering";
$title="";
$description="";
$buttonValue="Create";
$instruction="";

include 'createoffering.html.php';
?>