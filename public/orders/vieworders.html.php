<?php 
//starting the session
session_start();
//including models for using class
//1. for database connection
include('../../public/models/dbconnection.php');
//2. for user information class
include('../../public/models/users.php');
//3. for order information class
include('../../public/models/orders.php');
//4. for messages related to orders
include('../../public/models/message.php');
//defining the user
$user=new users;
//getting user data
$userdata= $user->get_user_by_id($_SESSION['userid']);
//getting the messages
$message=new message;
//defining the order
$order=new orders;
//getting the orders
$orders=$order->get_orders($_SESSION['userid'],2);
//getting number of orders of particular user
$orders_length=sizeof($orders);

?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Jaaga Student Job Board</title>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="../css/lib/bootstrap.css">
		<style>
		    body {
		      background: #f6f6f6;
		      margin-top: 70px;
		      margin-left:  2%;
		      margin-right: 2%;
		    }
		    .coloumnBox {
		      background:white;
		      margin-right:1%;
		    }
  		</style>
	</head>
	<body>
		<!-- Including Header File -->
		<?php include '../includes/header.inc.php'; ?>
		<!--Main Content -->
		<div class = "container">

			<div class = "row">
				<!-- defining space in columns -->
				<div class = "col-md-8 col-md-offset-2">
					<div class="col-md-8 coloumnBox" style="margin-top:1%;margin-left:3%;">
				        <h2>Order</h2>
				        <hr>
				        <?php 
				        if($orders==0)
				          echo "You don't have any orders now. Relax!!!";
				        else{
				        for($row=0;$row<$orders_length;$row++)
				        {

				            $get_user= new users;
				            $user_data=$get_user->get_user_by_offer_id($orders[$row][3]);

				         ?>
				        <h3>
						    <a href="#"><?php echo $orders[$row][1]; ?></a> <br>
						    <small>Ordered by <a href="#"><?php echo $user_data[0]; ?></a>
						    <img src="<?php echo "../".$user_data[4]; ?>" alt="" class="img-circle" width="35px">
						    </small>
						</h3>
						<div class="row">
						    <div class="col-md-4">
						        <button class="btn btn-xs btn-success">Accept</button>
						        <button class="btn btn-xs btn-info">Info.</button>
						       	<button class="btn btn-xs btn-warning">Decline</button>
						    </div>
					    </div>
					</div>
				</div>
					<hr>
						<?php }} ?>
        
      		</div>
	</body>
</html>