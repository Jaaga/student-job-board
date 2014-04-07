<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/sjb/includes/db.inc.php';


/* *********************** SQL QUERY FOR getting general Information of user******************************************************/
try{
	$sql="SELECT * FROM user WHERE user_id='".$_SESSION['userid']."'";
	$result=$pdo->query($sql);
}
catch(PDOException $e)
{
	$error= "Unable to get the data";
	echo $error;
	exit();
}
foreach ($result as $row)
{
	$paypal=$row['paypal'];
	$linkedin=$row['linkedin'];
	$about=$row['about'];
}
/*============================================================================================================================== */


/* ***********************************SQL QUERY FOR getting gigs of the User ****************************************************/
try{
	$sql1="SELECT * FROM offering INNER JOIN offer_category ON offering.offer_id=offer_category.offer_id INNER JOIN category ON offer_category.category_id=category.category_id  WHERE offering.user_id='".$_SESSION['userid']."'";
	$result1=$pdo->query($sql1);
}
catch(PDOException $e)
{
	$error= "Unable to get the data";
	echo $error;
	exit();
}
$count = $result1->rowCount();
if ($count==0){
	$offerings=0;
}
else{
	foreach ($result1 as $row1)
	{
		$offerings[]=array('title'=>$row1['title'], 'description'=>$row1['description'], 'offerid'=>$row1['offer_id'], 'picture'=>$row1['picture'], 'category_name'=>$row1['name']);
	}
}

/*================================================================================================================================*/

/***************************** for accepting GET request to edit and Upadate general information **************************************/
if(isset($_GET["action"]) and $_GET['action']=='Edit'){
	include 'form.html.php';
	exit();
}

if(isset($_POST['action']) and $_POST['action']=='Update')
{
	try{
	$sql2="UPDATE user  SET paypal='".$_POST['paypal']."', linkedin='".$_POST['linkedin']."', about='".$_POST['about']."' WHERE user_id='".$_SESSION['userid']."'";
	$pdo->exec($sql2);
	}
	catch(PDOException $e)
	{
		$error= "Unabel to get the data";
		echo $error;
		exit();
	}
	header ('Location: .');
	exit();
}

/* ================================================================================================================================ */

/***************************** for accepting GET request to edit and Upadate offerings *********************************************/
if(isset($_GET["act"]) and $_GET['act']=='Edit')
{
	$pagetitle="Edit your offering";
	$actionname="Update";
	$offerid=$_GET['id'];

	try{
	$sql5="SELECT * FROM offering WHERE offer_id='".$offerid."'";
	$result5=$pdo->query($sql5);
	}
	catch(PDOException $e)
	{
		$error= "Unabel to get the data";
		echo $error;
		exit();
	}
	foreach ($result5 as $row5)
	{
		$offering=array('title'=>$row5['title'], 'description'=>$row5['description'], 'offerid'=>$row5['offer_id'], 'picture'=>$row5['picture']);
	}

	include 'offering.html.php';
	exit();
}


if(isset($_POST['act']) and $_POST['act']=='Update')
{
	try{
	$sql3="UPDATE offering SET title='".$_POST['title']."', description='".$_POST['description']."' WHERE offer_id='".$_POST['offerid']."'";
	$pdo->exec($sql3);
	}
	catch(PDOException $e)
	{
		$error= "Unabel to get the data";
		echo $error;
		exit();
	}

	
	header ('Location: .');
	exit();
}

/* ================================================================================================================================ */

if(isset($_GET['add']))
{
	$pagetitle="Add Offering";
	$offering['title']=NULL;
	$offering['description']=NULL;
	$offering['id']=NULL;
	$actionname="Add";
	include 'offering.html.php';
	exit();
}

if(isset($_POST['act']) and $_POST['act']=='Add')
{
	try{
	$sql4="INSERT INTO offering (title,description,user_id) VALUES ('".$_POST['title']."','".$_POST['description']."','".$_SESSION['userid']."')";
	$pdo->exec($sql4);
	}
	catch(PDOException $e)
	{
		$error= "Unable to get the data";
		echo $error;
		exit();
	}

	$lastid = $pdo->lastInsertId();

	try{
		$sql7="INSERT INTO offer_category (category_id, offer_id) VALUES ('".$_POST['category']."', '".$lastid."')";
		$pdo->exec($sql7);
	}
	catch(PDOException $e)
	{
		$error= "Unabel to get the data";
		echo $error;
		exit();
	}

	header ('Location: .');
	exit();
}

include 'list.html.php';

?>

