<!DOCTYPE html>
<?php ob_start();
include $_SERVER['DOCUMENT_ROOT'] . '/sjb/includes/db.inc.php';
?>
<html>
<head>
<title></title>
</head>
<body>
	<h1>Welcome, Mr.<?php echo $_SESSION['username'];?></h1>
	<hr>
	<div>
		<h3>Account Informations</h3>
		<span>Paypal:</span><?php if($paypal=='') {echo "not set";} else{echo $paypal;}?> <br>
		<span>Linkedin:</span><?php if($linkedin=='') {echo "not set";} else{echo $linkedin;}?> <br>
		<span>About:</span><?php if($about=='') {echo "not set";} else{echo $about;}?> <br>
		<form action="." method="GET"><input type="submit" name="action" value="Edit"></form>

	<hr>
	</div>
	<div>
		<h3>Your Gigs</h3>
		<?php 
		if($offerings==0){
			echo "You have created 0 offerings.<br>";
		}
		else{
		foreach($offerings as $offering) : ?>
		<br><span><b>Order ID:</b> <?php echo $offering['offerid'];  ?> </span>&nbsp;
		<span><b>Title:</b> <?php echo $offering['title']; ?></span>&nbsp;
		<span><b>Description:</b> <?php echo $offering['description']; ?></span>  &nbsp;
		<span><b>Category:</b><?php echo $offering['category_name']; ?></span> &nbsp;
        <form action="." method="GET">
			<input type="hidden" name="id" value="<?php echo $offering['offerid']; ?>">
			<input type="submit" name="act" value="Edit"> 
		</form>
		<?php endforeach; }?>
			
		
		

		<a href="?add">Create a Offering</a>
		<hr>
		<p>Your Orders</p>


</body>

</html>