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
        <li><a href="login.php">Signin</a></li>
        <li>
          <form class="navbar-form navbar-right" role="form" action="signup.php">
            <button type="submit" class="btn btn-success">Sign Up</button>
          </form>
        </li>
      </ul>
      </div><!-- navbar-collapse -->
    </div><!-- container-fluid -->
  </nav><!-- navbar -->

  <div class="container">
    <div class="row">
      <div class="col-md-6" style="margin-top:50px;margin-bottom: 50px;">
        <h2>Signup now to get all the goodness!</h2>
        <hr>
        <form role="form" action="userDashboard.php">
          <div class="form-group">
            <label for="exampleInputEmail1">Your Name</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Your Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          
          <button type="submit" class="btn btn-success btn-lg" style="width:100%;">Create Account Now</button>
          <hr>

          <div class="form-group" style="margin-top:10px;">
            <label for="exampleInputEmail1">Or Connect With Google or Facebook</label>
            <br>
            <button type="submit" class="btn btn-danger" style="width:50%;">Signup with Google</button>
            <button type="submit" class="btn btn-primary" style="width:49%;">Signup with Facebook</button>            
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <hr>
      </div>
    </div>
  </div>

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