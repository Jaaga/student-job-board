<?php
try{
	$pdo = new PDO('mysql:host=localhost; dbname=sjb', 'root','');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
	$error="Unable to connect to the Database";
	include 'error.html.php';
}

if(isset ($_GET['?add']))
{
	include 'form.html.php';
	exit();
}

if(isset ($_POST['title']))
{
	try{
		$sql = 'INSERT INTO offering SET
		student_id=2,
		title="' . $_POST['title'] . '",
		description ="'. $_POST['description'].'",
		picture="'.$_POST['picture'].'",
		date = CURDATE()';
		$pdo->exec($sql);
	}
	catch (PDOException $e)
	{
		$error="Unable to set offeinrg";
		include 'error.html.php';
		exit();
	}

}
include 'form.html.php';
exit();
