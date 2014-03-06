<?php include('user-dash.php'); ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Jaaga Student Job Board</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/styles.css">
<link rel ="stylesheet" href="../css/user-dashboard.css">
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
        <li><a href="index.php">Home</a></li>
        <li><a href="category.php">Find Services</a></li>
        <li><a href="catupload.php">Start Selling</a></li>
        <li><a href="login.php">Signin</a></li>
        <li>
          <form class="navbar-form navbar-right" role="form">
            <button type="submit" class="btn btn-success">Sign Up</button>
          </form>
        </li>
      </ul>
      </div><!-- navbar-collapse -->
    </div><!-- container-fluid -->
  </nav><!-- navbar -->
    <?php
        $user=getuserdata();
    ?>
  <div class="container">
    <div class="row">
      <div class="row">
</div>
    <div class="col-md-6">
            
                
                    <a class="thumbnail pull-left" href="#">
                        <img class="media-object" src="<?php echo $user[0]; ?>" height="10">
                    </a>
                    <? ?> 
                    <div class="media-body">
                        <h2 class="media-heading"><?php echo $user[1]; ?></h2>
                    <p><span class="label label-info">8 Jobs</span> </p>
                        <p>
                            <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-comment"></span> Message</a>
                            <a href="#" class="btn btn-xs btn-default"><span class="glyphicon glyphicon-heart"></span> Favorite</a>
                        </p>
                    
           
            </div>
        </div>

  </div>
</div>
<div class="container">
<h1>Offerings:</h1>
</div>
<?php 
$var=getofferings();
for($row1=0;$row1<3;$row1++)
{ 
  for($row=0;$row<1;$row++)
  {

  ?>
<div class="container">

<<<<<<< HEAD
  <div class="row">
                     
    <div class="col-md-3 col-sm-4 col-xs-6"><p></p><img class="img-responsive" src="<?php echo $var[$row1][$row]; ?>" /><?php echo $var[$row1][$row+1]; ?></div>
                
              
<?php } }?>
=======
	<div class="row">
                     <?php         $query = "SELECT *  FROM offering where user_id =2 limit 4";                   
        $sql_result=mysql_query($query,$con2) or die("Couldn't execute query 1."); 

                      while($row2=mysql_fetch_array($sql_result)){ ?>
  
		<div class="col-md-3 col-sm-4 col-xs-6"><p><?php echo $row2['title']; ?></p><img class="img-responsive" src="<?php echo $row2['picture']; ?>" /></div>
              <a href="offering.php?id=<?php echo $row2['offer_id'] ?>">Link</a>  
              <?php } } ?>

>>>>>>> 0d51528f7f0201b916a8e76b8926d24742c4f750

  </div>
   <p><a class="btn btn-primary" role="button" href="offering.php">Check Offerings</a></p>

</div>

 
<div class="container">
<h1>Orders:</h1>
  

    <div class="row">
<<<<<<< HEAD
                          

      <div class="col-md-3 col-sm-4 col-xs-6"><p></p>
=======
                         <a href="oferring.php" > <?php while($row3=mysql_fetch_array($query_result)){ ?></a>

    	<div class="col-md-3 col-sm-4 col-xs-6"><p><?php echo $row3['details'];
                                                        echo "-";
                                                       echo $row3['status'];?>

                                                       </p>
>>>>>>> 0d51528f7f0201b916a8e76b8926d24742c4f750
      </div>
             

 </div>
  <p><a class="btn btn-primary" role="button" href="orders.php">Check Orders</a></p>

</div>
</div>

 
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>