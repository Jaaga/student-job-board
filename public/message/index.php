<!-- Messages controller -->
<?php 
session_start();
include('../models/dbconnection.php');

include('../models/users.php');
include('../models/orders.php');
include('../models/offerings.php');
include('../models/message.php');

$message = new message();
$orders= new orders();
if(isset($_GET['t']))
{
	$threadid=$_GET['t'];
	$threaded=$message->get_message_by_thread($threadid);
	include 'thread.html.php';
	exit();
}


if(isset($_POST['sendmsg'])){
	$msg=$_POST['msg'];
	$read_status='No';
	$to=$_POST['to'];
	$thread=$_POST['thread'];
	$message->send_message($to,$_SESSION['userid'],$msg,$thread,$read_status);
	
	$threaded=$message->get_message_by_thread($thread);
	include 'thread.html.php';
	exit();
}

if(isset($_POST['deliver']))
{
	$temp=$_FILES['delivery']['tmp_name'];
	$delivery='../delivery/'.$_FILES['delivery']['name'];
	move_uploaded_file($temp, $delivery);
	$orderid=$_POST['orderid'];
	$orders->deliverFile($delivery,$orderid);


	$msg='Order Delivered <a href="'.$delivery.'" download>File</a>';
	
	$read_status='No';
	$to=$_POST['to'];
	$thread=$_POST['thread'];
	$message->send_message($to,$_SESSION['userid'],$msg,$thread,$read_status);
	
	$threaded=$message->get_message_by_thread($thread);
	include 'thread.html.php';
	exit();
}

include 'list.html.php';
?>