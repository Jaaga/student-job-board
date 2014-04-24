<?php
$orderToYou= new orders();
$orderslist=$orderToYou->get_orders_by_user($_SESSION['userid']);
$Order_length=count($orderslist);
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
   <div class="row-fluid">
   <div class="span12 well">
   <div class="span11">
   <h1>Your To Do's</h1>
   <hr>
 
   <table class="table table-hover">
    <?php
    if($orderslist==0){
            echo "no Orders To you";
          } else{
        ?><thead>
          <tr>
            <th>Order no.</th>
            <th>Title</th>
            <th>Ordered by</th>
            <th>Status</th>
            <th>Accept/Decline</th>
          </tr>
        </thead>
        <tbody>
          <?php
          
          for($row=0;$row<$Order_length;$row++)
          { ?>
          <tr>
            <td><?php echo $orderslist[$row][5]+1000; echo "b"; ?></td>
            <td><?php echo $orderslist[$row][1]; ?></td>
            <td><?php echo $orderslist[$row][6]; ?></td>
            <td>
              
              <form method="POST" action="." ><select class="form-control pull-left" name="statusset" <?php if($orderslist[$row][7]==1) echo "enabled"; else echo "disabled"; ?>>
          <option value="<?php echo $orderslist[$row][2]; ?>"><?php echo $orderslist[$row][2]; ?></option>

        <option value="20%">20%</option>
        <option value="40%">40%</option>
        <option value="60%">60%</option>
        <option value="80%">80%</option>
        <option value="Done">100%</option>
        </select>
        <input type="hidden" name="orderid" value="<?php echo $orderslist[$row][5] ?>" class="btn">
        <input type="submit" name="status" value="Update" class="btn"></form>
      </td>
            <td> <?php if($orderslist[$row][7]==1) { ?><a class="btn">Accepted</a>
             <?php } elseif($orderslist[$row][7]==-1){?><a class="btn btn-warning">Declined</a> <?php } else { ?>
            <a class="btn" href=?accept=<?php echo $orderslist[$row][5]; ?>>Accept</a>
            <a class="btn btn-warning" href=?decline=<?php echo $orderslist[$row][5]; ?>>Decline</a> <?php } ?></td>

          </tr>
          <?php }} ?>
        </tbody>
      </table>
      </div>
   </div>
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
