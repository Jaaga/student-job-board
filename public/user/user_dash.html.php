<?php 
include_once('../../public/models/dbconnection.php');

include('../../public/models/orders.php');
include('../../public/models/offerings.php');
include('../../public/models/message.php');

$user=new users;
$userdata= $user->get_user_by_id($_SESSION['userid']);


$message=new message;
$order=new orders;
$orders=$order->get_orders($_SESSION['userid']);
$orders_length=count($orders);
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
    
    <img src="<?php echo $userdata[4]; ?>" class="img-circle center" width="150px">
    
    <h2 class="text-center"><?php echo $userdata[0]; ?></h2>
    <h3 class="text-center"><?php echo $userdata[1]; ?></h3>
    </div>
   
    </div>
    </div>
    

     

      



    <!-- Cards for the jobs
    ================================================== -->
    <div class="container">
      <div class="row-fluid">
      <?php 
      if($orders!=0)
      { ?>
        <div class="span12" id="orders">

          <h1 >You Ordered

          <div class="btn-group pull-right" >
            <a href="../message" type="button" class="btn btn-default">Messages<span class="badge"><?php echo $message->get_unread_message_by_user_id($_SESSION['userid']); ?></span></a>

            <div class="btn-group">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                My Profile
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="../user?edit=<?php echo $_SESSION['userid']; ?>">Edit Profile</a></li>
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
              $offer_details=$offer->get_offers_by_offer_id($orders[$row][3]);
           ?>
            
              <div class="span5 card  ">
                <h4 class="card-heading simple"><?php echo $offer_details[1]; ?></h4>
                  <div class="card-body">
                  <h5>
                    Ordered To: <?php echo $user_data[0]; ?>
                   </h5>
                 
                  <h4>Status: <?php echo $orders[$row][2]; ?> </h4>
                  <div class="progress progress-striped active">
  <div class="bar" style="width: <?php echo $orders[$row][2]; ?>"></div>
</div>
                
                  </div>
             
</div>
<?php }?>

</div>
</div>
<?php  } ?>


<div class="row-fluid ">


  <h1>
    Your Offerings
    <?php 
    if($orders==0)
    { ?>
    <div class="btn-group pull-right" >
            <a href="../message" type="button" class="btn btn-default">Messages<span class="badge"> <?php echo $message->get_unread_message_by_user_id($_SESSION['userid']); ?></span></a>

            <div class="btn-group">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                My Profile
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="../user?edit=<?php echo $_SESSION['userid']; ?>">Edit Profile</a></li>
                <li><a href="">Settings</a></li>
              </ul>
            </div>
          </div>
          <?php } ?>
  </h1>
  <hr>
</div>
</div>

<?php 
        if($offers ==0)
          {?>
        <h2 class="text-center">There are currently no offerings.</h2> 
        

<?php }
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