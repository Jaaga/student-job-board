
<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/student-job-board/public/models/dbconnection.php';
include $_SERVER['DOCUMENT_ROOT'] . '/student-job-board/public/models/orders.php';
$orderOffering= new orders();


if(isset($_GET["view"]))
{
include 'vieworders.html.php';
exit();
}

if(isset($_GET["order"]))
{
$order=$_GET["order"];
echo $order;
include 'order.html.php';
exit();


}
if(isset($_POST['ordernow']))
{
	
	$description=$_POST["description"];
	$offerid=$_POST['offerid'];
	$orderOffering->create_order($_SESSION['userid'],$offerid,$description);
	header('Location: ../user/');
	exit();
}


?>