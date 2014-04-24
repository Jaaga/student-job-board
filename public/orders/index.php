
<?php



session_start();
include $_SERVER['DOCUMENT_ROOT'] . '/student-job-board/public/models/dbconnection.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/student-job-board/public/models/orders.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/student-job-board/public/models/message.php';
include_once $_SERVER['DOCUMENT_ROOT'] . '/student-job-board/public/models/offerings.php';

$offerFirstMsg= new offering();
$orderOffering= new orders();
$firstMsg=new message();

if(isset($_GET["view"]))
{
include 'vieworders.html.php';
exit();
}

if(isset($_GET["order"]))
{
$order=$_GET["order"];

include 'order.html.php';
exit();
}


if(isset($_GET["accept"]))
{
$acceptId=$_GET["accept"];
$orderOffering->acceptOrder($acceptId);
$accepted=True;
include 'orderlist.html.php';
exit();
}

if(isset($_GET["decline"]))
{
$declineId=$_GET["decline"];
$orderOffering->declineOrder($declineId);
$declined=True;
include 'orderlist.html.php';
exit();
}

if(isset($_POST["status"]))
{
$status=$_POST["statusset"];
$setStatusOfOrder=$_POST["orderid"];
$orderOffering->setStatus($status,$setStatusOfOrder);
include 'orderlist.html.php';
exit();
}







if(isset($_POST['ordernow']))
{
	$description=$_POST["description"];
	$offerid=$_POST['offerid'];
	$orderOffering->create_order($_SESSION['userid'],$offerid,$description);
	$offerDetails=$offerFirstMsg->get_offers_by_offer_id($offerid);
	$firstMsg->first_message($offerDetails[6],$_SESSION['userid'],$description,$offerDetails[1],"No");
	include 'pay.html.php';	
	exit();
}

include 'orderlist.html.php';
exit();
?>