<?php 
//include $_SERVER['DOCUMENT_ROOT'] . '/student-job-board/public/models/dbconnection.php';
include("../../public/models/users.php");
include("../../public/models/categories.php");

 $offering_id=$offeringid;
$users = new users;
$offering=new offering;
$cat= new category;
$comment=new comments;

echo $offering_id;
$categoryname= $cat->find_category_by_offerid($offering_id);
//$user_id=1;
//$item_num=2;
$data = $offering->get_offers_by_offer_id($offering_id);

$userdata=$users->get_user_by_offer_id($offering_id);

$commentdata=$comment->get_comments($offering_id);

$rowcount=count($commentdata);
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
    <div class="row">
      
      <div class="span9 card">
      <div class="span8">
        <h2><?php echo $data[1]; ?><br>
          <small>Created <?php echo $data[5]; ?>. Posted in <a href="#"><?php echo $categoryname[0]; ?></a></small>
        </h2>
        <hr>
        <div class="carousel"> 
      <img src='<?php echo $data[0]; ?>' >
          <div class="carousel-caption">
            <h2>Create Letters</h2>
            <p>My letters will make employers want to hire you!!!</p>
          </div>
          </div>
        
        
        
      
        <h4>
        <?php echo $data[3]; ?>

      </h4>
      
        <hr>
     
        
      <h3>Customer Reviews
      </h3>
      <hr>

       <div class="card-comments">
        <div class="comments">
        <a  data-target="#c1-comments" href="#c1-comments">34 comments </a><hr>
        </div>
<?php 

          for($row=0;$row<$rowcount;$row++)
          { 
              $commentuser=$users->get_user_by_id($commentdata[$row][1]);
            ?>
      <div id="c1-comments" class="comments ">
        <div class="media">
      <a class="pull-left" href="#">
      <img class="media-object" src="../<?php echo $commentuser[4]; ?>" alt="avatar" width="40px"/>
      </a>
        <div class="media-body">
          <h4 class="media-heading"><?php echo $commentuser[0]; ?></h4>
        <p><?php echo $commentdata[$row][2]; ?></p>
      </div>
      
    
      </div>
    </div>

    <?php } ?>
      <form class="form" action="." method="POST">
            <textarea  name="comments" value="" ></textarea>
            <input type="hidden" name="offerid" value="<?php echo $offeringid; ?>">
            <input type="hidden" name="userid" value="<?php echo $_SESSION['userid']; ?>">
            <button type="submit" name="comment" class="btn ">Post Comment</button>

            </form>
    </div>

    </div>
    </div>



    <div class="container span3 ">
      
      
        <h1>
          <?php 

           $userid= $users->get_user_by_offer_id($offeringid);
           if(isset($_SESSION['userid'])==false)
           {?>
              <a href="../login"   ><button class="btn btn-block btn-warning " >Order</button></a>
              <?php
           }
          elseif($_SESSION['userid']==$userid[6]){ ?>
          <a href="?edit=<?php echo $offering_id;?>"><button class="btn  btn-success" >Edit this Offering</button></a><br>
          <a href="?delete=<?php echo $offering_id;?>"><button class="btn btn-danger" >Delete Offering</button></a> <?php } else {?>
          <a href="../orders/?order=<?php echo $offering_id;?>"><button class="btn btn-block btn-warning  " align="center" >Order now</button></a> <?php } ?>
          <hr>
        </h1>
        
              <img src="../<?php echo $userdata[4]; ?>" class="img-circle center" width="100px">
              <h3 class="text-center"><?php echo $userdata[0]; ?></h3>
    <h4 class="text-center"><?php echo  $userdata[3]; ?></h4>

        <hr>
        <p>Related Categories</p>
        <p>
          <a href="#" class="btn btn-xs btn-info">Wordpress <span class="badge">23</span></a>
          </p>
          <p>
          <a href="#" class="btn btn-xs btn-info">Html <span class="badge">23</span></a>
        </p>
        <p>
          <a href="#" class="btn btn-xs btn-info">CSS <span class="badge">23</span></a>
          
        </p>
      </div>

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
