<?php include $_SERVER['DOCUMENT_ROOT'].'/student-job-board/public/models/orders.php'; ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Jaaga Student Job Board</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
  
  <!-- Navigation Bar -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#app-navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">in3Hrs.com</a>
      </div> <!-- navbar-header -->
      <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Home</a></li>
        <li><a href="#">Offerings</a></li>
        <li><a href="#">Orders</a></li>
        <li><a href="#"> <img src="../img/yatin-avatar.jpg" class="img-circle" height="26px"> Yatin Taluja</a></li>
        <li>
          <form class="navbar-form navbar-right" role="form">
            <button type="submit" class="btn btn-success">Logout</button>
          </form>
        </li>
      </ul>
      </div><!-- navbar-collapse -->
    </div><!-- container-fluid -->
  </nav><!-- navbar -->

  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3>Your Orders</h3>
        <hr>
        <ul>     
<!--  //      <?php
	//	$con = mysql_connect("localhost","root","");
	//	$db = mysql_select_db("sjb");
	//	$query = mysql_query('select * from orders limit 5');
	//	while($row = mysql_fetch_array($query)) {
	//		echo '<li><h4><a href="order.php">' . $row['details'] . '</a></h4></li>';
//		}
//	?>  -->
  <?php 
      $ordersOfThisUser= new orders;
      $dummyForOrders=$ordersOfThisUser->get_orders(1);
      foreach($dummyForOrders as $orderOfThisUser)
      {
        echo $orderOfThisUser['details']."h";
      }
  ?>
	</ul>
      </div>
      <div class="col-md-6">
        <h3>Account Status</h3>
        <hr>
        <h4>Total Money Spent: <span class="text-primary">$15</span></h4>
        <h4>Total Jobs Given: <span class="text-primary">12</span></h4>
        <h4>Total Jobs Completed: <span class="text-primary">7</span></h4>
        <h4>Jobs waiting to be completed: <span class="text-primary">5</span></h4>
      </div>
    </div>
  </div>

  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>
