<?php


  $offering = new offering;
  $data = $offering->featured_offering();

  include '../models/users.php';
  $user= new users;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>in3hrs.com&middot; Bootstrap</title>
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
      <link href="../css/bootplus.css" rel="stylesheet">
      <link href="../css/bootplus-responsive.css" rel="stylesheet">
      <link href="../css/custom.css" rel="stylesheet">

    
    
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
    <h2 class="text-center">Search for Offerings</h2>
        <div class="span6 offset1">
      
      
      <form action="." method="post" >
   
        <input type="text" name="searchquery" class="form-control" placeholder="Search for services"></input>
        <input type="submit" name="searchq" class="btn btn-primary"></input>
        </form>
        </div>
    <div class="span4">
      <form action="." method="post">  
        <select name="categoy" id="" class="form-control" >
          <option value=""><strong>In Category</strong></option>
        <option value="1">.NET</option>
        <option value="2">C++</option>
        <option value="3">CSS & HTML</option>
        <option value="4">Joomla & Drupal</option>
        <option value="5">Databases</option>
        <option value="6">Java</option>
        <option value="7">JavaScript</option>
        <option value="8">PSD to HTML</option>
        <option value="9">WordPress</option>
        <option value="10">Flash</option>
        <option value="11">iOS, Android & Mobile</option>
        <option value="12">PHP</option>
        <option value="13">Software Testing</option>
        <option value="14">Technology</option>
        <option value="15">Other</option>
     
        </select>
        <input type="submit" name="search" class="btn btn-primary" ></input>

      </form>
      </div>
      </div>
  </div>
  </div>
  

   <!-- Cards for the jobs
    ================================================== -->
  
    <div class="row" id="offerings">
    
    <div class="span13 moveleft ">
    <?php for ($row=0; $row < 4; $row++) { 
        $userdata=$user->get_user_by_offer_id($data[$row][2]);

       ?>
    <div class="span3">
          <div class="card hovercard">
            <img src="<?php echo $data[$row][0]; ?>"/>
            <div class="avatar">
              <img src="../<?php echo $userdata[4]; ?>" alt="" />
            </div>
          <div class="info">
          <div class="title">
         <?php echo $data[$row][1]; ?>
      </div>
      <div class="desc">By-<?php echo $userdata[0];?></div>
      
   </div>
   <div class="bottom">
      <a class="btn" href="../offering?offeringid= <?php echo $data[$row][2]; ?>">Order</a>
   </div>
</div>
</div>
<?php }?>

    </div>
    </div>




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
