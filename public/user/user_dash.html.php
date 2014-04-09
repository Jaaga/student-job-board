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
$offers=$offer->get_offerings_by_user_id($_SESSION['userid']);
$offer_length=count($offers);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>in3hrs.com</title>
      <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">

      <!-- Le styles -->
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="../css/font-awesome.min.css">
      <!--[if IE 7]>
      <link rel="stylesheet" href="css/font-awesome-ie7.min.css">
      <![endif]-->
      <link href="../css/bootplus.css" rel="stylesheet">
      <link href="../css/bootplus-responsive.css" rel="stylesheet">
      <link href="../css/custom.css" rel="stylesheet">
      <link href="../css/home.css" rel="stylesheet">


    
    
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="ico/favicon.png">
  </head>

  <body>

        <!-- NAVBAR
    ================================================== -->
   <?php include '../includes/header.inc.php'; ?>


    

    <div class="container movedown">
    <div class="row  ">
    <div class="span12 card cover">
    
    <img src="<?php echo "../". $userdata[4]; ?>" class="img-circle center" width="150px">
    
    <h2 class="text-center"><?php echo $userdata[0]; ?></h2>
    <h3 class="text-center"><?php echo $userdata[1]; ?></h3>
    </div>
   
    </div>
    </div>
    

     

      



    <!-- Cards for the jobs
    ================================================== -->
    <div class="container">
      <div class="row">
      <?php 
      if($orders!=0)
      { ?>
        <div class="span12">

          <h1 >Your Orders

          <div class="btn-group pull-right" >
            <a href="../message" type="button" class="btn btn-default">Messages<span class="badge">0</span></a>

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
          </h1>
          <hr>
         <?php
          for($row=0;$row<$orders_length;$row++)
          {

              $get_user= new users;
              $user_data=$get_user->get_user_by_offer_id($orders[$row][3]);

           ?>
            <div class="span3 ">
              <div class="card hovercard">
                <h4 class="card-heading simple">Ordered by:-<?php echo $user_data[0]; ?></h4>
                  <div class="card-body">
                  <h4></h4>

                  <?php echo $orders[$row][4]; ?>
                  <a class="btn">Accept</a>
                  <a class="btn btn-warning">Decline</a>
                  </div>
              <div class="card-comments">
                  <div class="comments-collapse-toggle">
                      <a data-toggle="collapse" data-target="#c1-comments" href="#c1-comments">3 Messages<i class="icon-angle-down"></i></a>
                  </div>
              <div id="c1-comments" class="comments collapse">
            <div class="media">
                <a class="pull-left" href="#">
                <img class="media-object" data-src="holder.js/28x28" alt="avatar"/>
            </a>
            <div class="media-body">
               <h4 class="media-heading">Comment title</h4>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<?php }?>
</div>
<?php  } ?>


<div class="span12 ">


  <h1>
    Your Offerings
    <a href="../offering/" class="btn btn-lg btn-success pull-right" >Create New Offering</a>

  </h1>
  <hr>
</div>
<?php 
        if($offers ==0)
          {echo "You have nothing to offer right now. Make one.";}
        else{
        ?>
<div class="row">
    <div class="span13 ">
    <?php
     for($row=0;$row<$offer_length;$row++){ ?>
    
<div class="span3">
<div class="card hovercard">
   <img src="<?php echo  $offers[$row][1]; ?>" alt=""/>
   <div class="info">
      <div class="title">
         <?php echo $offers[$row][2];  ?>
      </div>
  
      
   </div>
   <div class="bottom">
      <a href="../offering?offeringid=<?php echo $offers[$row][0]; ?>" class="btn">Edit</a>
   </div>
</div>
</div>
<?php } ?>

    </div>
    </div>
    <?php } ?>
    </div>
  </div>


<div class="container">
     
      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap-transition.js"></script>
    <script src="../js/bootstrap-alert.js"></script>
    <script src="../js/bootstrap-modal.js"></script>
    <script src="../js/bootstrap-dropdown.js"></script>
    <script src="../js/bootstrap-scrollspy.js"></script>
    <script src="../js/bootstrap-tab.js"></script>
    <script src="../js/bootstrap-tooltip.js"></script>
    <script src="../js/bootstrap-popover.js"></script>
    <script src="../js/bootstrap-button.js"></script>
    <script src="../js/bootstrap-collapse.js"></script>
    <script src="../js/bootstrap-carousel.js"></script>
    <script src="../js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="../js/holder/holder.js"></script>
  </body>
</html>