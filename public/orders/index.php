
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
echo $order;
include 'order.html.php';
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

header('Location: ../user#orders');
exit();
?>