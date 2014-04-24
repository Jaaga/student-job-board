<!-- Messages controller -->
<?php 
session_start();
include('../models/dbconnection.php');

include('../models/users.php');
include('../models/orders.php');
include('../models/offerings.php');
include('../models/message.php');

$message = new message();
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

include 'list.html.php';
?>