<?php 
session_start();
include('../../public/models/dbconnection.php');

include('../../public/models/users.php');
include('../../public/models/orders.php');
include('../../public/models/offerings.php');
include('../../public/models/message.php');

$user=new users;
$userdata= $user->get_user_by_id($_SESSION['userid']);


$message=new message;
$order=new orders;
$orders=$order->get_orders($_SESSION['userid'],2);
$orders_length=sizeof($orders);
$offer=new offering;
$offers=$offer->get_offerings_by_user_id($_SESSION['userid'],4);
$offer_length=count($offers);
?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Jaaga Student Job Board</title>
  <link rel="stylesheet" href="../css/lib/bootstrap.css">
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
  
  <!-- Navigation Bar -->
   <?php include '../includes/header.inc.php'; ?>
  <div class="container">
    
    <div class="row">


        <div class="col-md-4">
          <img style="margin: 5px;"src="<?php echo "../". $userdata[4]; ?>" width='70' height='100'/>
          <h2 style="margin-left:80px;margin-top: -50px;"><?php echo $userdata[0]; ?></h2>
          <h3 ></h3>
          
        </div>

        <div class="col-md-offset-9">
          <div class="btn-group" style="margin-top:35px;">
            <a href="../message" type="button" class="btn btn-default">Messages<span class="badge"><?php echo $message->get_unread_message_by_user_id($_SESSION['userid']); ?></span></a>

            <div class="btn-group">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                My Profile
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#">Edit Profile</a></li>
                <li><a href="#">Settings</a></li>
              </ul>
            </div>
          </div>
        </div> <!-- col-md-8 -->


      </div> <!-- coloumnBox -->

    </div> <!-- row -->

    <div class="row">
      
      <div class="col-md-8 coloumnBox" style="margin-top:1%;margin-left:3%;">
        <h2>My Current Jobs</h2>
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
          <div class="col-md-2">
            <div class="progress">
              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $orders[$row][2]; ?> ">
                 <?php echo $orders[$row][2]; ?>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <?php }} ?>
        
      </div>

      <div class="col-md-3 coloumnBox" style="margin-top:1%;margin-right:1%;">
        <h2>My Offerings</h2>
        <hr>
        <a href="../offering/" class="btn btn-lg btn-success" style="font-size:14px;width:280px;">Create New Offering</a>
        <hr>
        <?php 
        if($offers ==0)
          {echo "You have nothing to offer right now. Make one.";}
        else{
        for($row=0;$row<$offer_length;$row++){ ?>
        <a href="../offering?offeringid=<?php echo $offers[$row][0]; ?>" class="thumbnail">
          <h4 style="text-align:center;"><?php echo $offers[$row][2];  ?></h4>
          <hr>
          <img src="<?php echo  $offers[$row][1]; ?>" alt="...">
        </a>
        <?php }} ?>
      </div>

    </div>

  </div> <!-- container-fluid -->

  <div class="container">    
  <div class="row">
    <div class="col-lg-12">
      <div class="col-md-3">
        <ul class="list-unstyled">
          <li><strong>in3Hrs.com</strong><li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
      <div class="col-md-3">
        <ul class="list-unstyled">
          <li><strong>Help &amp; Support</strong><li>
          <li><a href="#">in3Hrs.com Help</a></li>
          <li><a href="#">Frequently Asked Questions</a></li>
          <li><a href="#">User Forum</a></li>
        </ul>
      </div>  
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-lg-12">
      <div class="col-md-8">
        <a href="#">Terms of Service</a>    
        <a href="#">Privacy</a>    
        <a href="#">Security</a>
      </div>
      <div class="col-md-4">
        <p class="muted pull-right">© 2014 Jaaga Student Job Board. All rights reserved</p>
      </div>
    </div>
  </div>
</div>

  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script>
      $(document).ready(function(){
        $('#orderButton').popover({
          trigger: 'hover'
        });
      });
  </script>
</body>
</html>