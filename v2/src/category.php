<?php

include('common.php'); 
$sql = "SELECT distinct * FROM offering order by rand() ";
$result = mysql_query($sql) or die(mysql_error());  

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Offering Category</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../css/category.css" rel="stylesheet">

    </head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">in3Hrs.com</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        <li><a href="category.php">Find Services</a></li>
        <li><a href="catupload.php">Start Selling</a></li>
        <li><a href="login.php">Signin</a></li>
        <li>
          <form class="navbar-form navbar-right" role="form" action="signup.php">
            <button type="submit" class="btn btn-success">Sign Up</button>
          </form>
        </li>
      </ul>
    </div> <!-- container -->
  </div> 
    <img border="0" src="../img/Untitled-1 copy.jpg"alt="Pulpit rock" width="1365" height="230">

<ul class="nav nav-tabs">
  <li class="active"><a href="index.php">Home</a></li>
  <li><a href="#">Profile</a></li>
  <li><a href="#">Messages</a></li>
  <li><a href="#">Item two</a></li>
<li><a href="#">Item three</a></li>
<li><a href="#">Item four</a></li>
<li><a href="#">Item five</a></li>
<li><a href="#">Profile</a></li>
  <li><a href="#">Messages</a></li>
  <li><a href="#">Item two</a></li>
<li><a href="#">Item three</a></li>
<li><a href="#">Item four</a></li>
<li><a href="#">Item five</a></li>
<li><a href="#">Item three</a></li>

</ul>
</br></br>
               
    
<div class="container">

    <div class="row">
                     <?php          

                      while($row2=mysql_fetch_array($result)){ ?>
  
        <div class="col-md-3 col-sm-4 col-xs-6"><p><?php echo $row2['title']; ?></p><img class="img-responsive" src="<?php echo $row2['picture']; ?>" /></div>
                
              <?php } ?>


    </div>
</div>

        <hr>

        <div class="row text-center">

            <div class="col-lg-12">
                <ul class="pagination">
                    <li><a href="#">&laquo;</a>
                    </li>
                    <li class="active"><a href="#">1</a>
                    </li>
                    <li><a href="#">2</a>
                    </li>
                    <li><a href="#">3</a>
                    </li>
                    <li><a href="#">4</a>
                    </li>
                    <li><a href="#">5</a>
                    </li>
                    <li><a href="#">&raquo;</a>
                    </li>
                </ul>
            </div>

        </div>

    
    <!-- /.container -->

    <div class="container">

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Company 2013</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- JavaScript -->
    
    <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>

</body>

</html>