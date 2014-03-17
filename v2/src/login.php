<<<<<<< HEAD
<?php
include('class.php');
if (isset($_POST['submit'])) {
    $dbLogin   = new dbLogin;
    //$tableName = 'user';
    $username  =  $_POST['emaill'];
    $password  = $_POST['passs'] ;
    
    $result    = $dbLogin->loginValid($username, $password);
   echo $result;
    // if (isset($result['name'])) {
    //     $_SESSION["username"] = $result['name'];
    //     $_SESSION["userid"]   = $result['user_id'];
    //     header("Location:user-dashboard.php");
    // } else {
    //     $msg = "invalid user";
        
    // }
}
?>

=======
>>>>>>> fde8f5dd5de551433f19db08d30b3e042f631b2c
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Jaaga Student Job Board</title>
  <link rel="stylesheet" href="../css/lib/bootstrap.css">
  <style>
    body {
      margin-top: 70px;
      margin-left: 2%;
      margin-right: 2%;
    }
  </style>
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
        <a class="navbar-brand" href="/v2/src/">in3Hrs.com</a>
      </div> <!-- navbar-header -->
      <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        <li><a href="categories.php">Find Services</a></li>
        <li><a href="#">Start Selling</a></li>
        <li class="active"><a href="login.php">Signin</a></li>
        <li>
          <form class="navbar-form navbar-right" role="form" action="signup.php">
            <button type="submit" class="btn btn-success">Sign Up</button>
          </form>
        </li>
      </ul>
<<<<<<< HEAD
    </div> <!-- container -->
  </div> <!-- navbar div -->
  
  <div class="container form-container">
  <div class="row">
    
    <div class="col-md-offset-4">
      <form class="form-signin mg-btm" method="post" action="login.php">
      <h3 class="heading-desc">
    Login to in3Hrs.com</h3>
    <div class="social-box">
      <div class="row mg-btm">
             <div class="col-md-12">
                <a href="#" class="btn btn-primary btn-block">
                  <i class="icon-facebook"></i>    Login with Facebook
                </a>
      </div>
      </div>
      <div class="row">
      <div class="col-md-12">
                <a href="#" class="btn btn-info btn-block" >
                  <i class="icon-twitter"></i>    Login with Twitter
                </a>
            </div>
          </div>
    </div>
    <div class="main">  
        
    <input type="text" class="form-control" placeholder="Email" autofocus name="emaill">
        <input type="password" class="form-control" placeholder="Password" name="passs">
           <h4>
           
          </h4>
        
    <span class="clearfix"></span>  
        </div>
=======
      </div><!-- navbar-collapse -->
    </div><!-- container-fluid -->
  </nav><!-- navbar -->
>>>>>>> fde8f5dd5de551433f19db08d30b3e042f631b2c

  <div class="container">
    <div class="row">
      <div class="col-md-6" style="margin-top:50px;">
          <h2>Hey, Welcome Back!</h2>
          <form class="form-horizontal" role="form" action="userDashboard.php">
            <div class="form-group">
              <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
              <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
              </div>
<<<<<<< HEAD
                        </div>

                      


                      <?php
if (isset($msg)) {
    echo "email or password are incorrect";
}

?> <div class="col-xs-6 col-md-6 pull-right">
                            <button type="submit" name ="submit" class="btn btn-large btn-success pull-right">Login</button>




=======
            </div>
            <div class="form-group">
              <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
              <div class="col-sm-10">
                <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Remember me
                  </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Sign in</button>
              </div>
            </div>
          </form>
        <hr>
      </div>
    </div>
  </div>
>>>>>>> fde8f5dd5de551433f19db08d30b3e042f631b2c

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
</body>
</html>
