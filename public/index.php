<?php
  $homepage=True;
  include './models/dbconnection.php';


  include './models/offerings.php';
  $offering = new offering;
  $data = $offering->featured_offering();
  include './models/users.php';
  $user= new users;
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
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <!--[if IE 7]>
      <link rel="stylesheet" href="css/font-awesome-ie7.min.css">
      <![endif]-->
      <link href="css/bootplus.css" rel="stylesheet">
      <link href="css/bootplus-responsive.css" rel="stylesheet">
      <link href="css/custom.css" rel="stylesheet">
      <link href="css/home.css" rel="stylesheet">


    
    
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
   <?php include 'includes/header.inc.php'; ?>



    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="images/cover1.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Sign up today!!!</h1>
              <p class="lead">Join for free today and start earning money.</p>
              <a class="btn btn-large btn-primary" href="./signup">Sign up</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="img/slide-02.jpg" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Find Offered services</h1>
              <p class="lead">Search our database for students and get your jobs done.</p>
              <a class="btn btn-large btn-primary" href="./categories">Find Services</a>
            </div>
          </div>
        </div>
        </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->


    <!-- Subhead
================================================== -->
<header class="jumbotron subhead masthead" id="overview">
  <div class="container">
    <h1>Find People to get your work done.</h1>
    <p class="lead">View offerings and select the student you wanna work with.</p><hr>
  </div>
</header>


    <!-- Cards for the jobs
    ================================================== -->
  <?php for ($row=0; $row < 16; $row++) { 
          if($row==0 || $row%4==0)
            { ?>
    <div class="row-fluid moveleft">
        
    
    <?php } 
        $userdata=$user->get_user_by_offer_id($data[$row][2]);

       ?>
    <div class="span3">
          <div class="card hovercard">
            <img src="<?php echo "./offering/".$data[$row][0]; ?>"/>
            <div class="avatar">
              <img src="<?php echo "./categories/".$userdata[4]; ?>" alt="" />
            </div>
                   <?php echo $data[$row][1]; ?>

          <div class="title">
          <div class="info">
      </div>
      <div class="desc">By-<?php echo $userdata[0];?></div>
      
   </div>
   <div class="bottom">
      <a class="btn" href="./offering?offeringid= <?php echo $data[$row][2]; ?>">Order</a>
   </div>
</div>


<?php
  if( ($row+1)%4==0 )
  { ?> 
    </div>
    </div>
    
  <?php 
  }
 
  else
  { ?>
    </div>
    
    <?php
  }
}
  ?>


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
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap-transition.js"></script>
    <script src="js/bootstrap-alert.js"></script>
    <script src="js/bootstrap-modal.js"></script>
    <script src="js/bootstrap-dropdown.js"></script>
    <script src="js/bootstrap-scrollspy.js"></script>
    <script src="js/bootstrap-tab.js"></script>
    <script src="js/bootstrap-tooltip.js"></script>
    <script src="js/bootstrap-popover.js"></script>
    <script src="js/bootstrap-button.js"></script>
    <script src="js/bootstrap-collapse.js"></script>
    <script src="js/bootstrap-carousel.js"></script>
    <script src="js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="js/holder/holder.js"></script>
  </body>
</html>
