<!-- Form html page-->
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Jaaga Student Job Board</title>
  <link rel="stylesheet" href="../../v2/css/lib/bootstrap.css">
  <style>
    body {
      margin-top: 70px;
      margin-left: 2%;
      margin-right: 2%;
    }
  </style>
</head>
<body>
  
  
 <?php include '../includes/header.inc.php'; ?>

  <div class="container">
    <div class="row">
      <div class="col-md-6" style="margin-top:50px;margin-bottom: 50px;">
        <h2>Signup now to get all the goodness!</h2>
        <hr>
        <form role="form" action="." method="post">
          <div class="form-group">
            <label for="exampleInputname1">Your Name</label>
            <input type="name" name="name" class="form-control" id="exampleInputname1" placeholder="Your Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </div>
          
          <button type="submit" name="action" value="Sign Up" class="btn btn-success btn-lg" style="width:100%;">Create Account Now</button>
          <hr>
        </form>
        <?php if(isset($profileExist)){
        	echo "sorry, This Email is Registered!";
        } ?>
        <form>
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

  <script src="../../v2/js/jquery.min.js"></script>
  <script src="../../v2/js/bootstrap.min.js"></script>
</body>
</html>

























<!-- <!Doctype html>
<html>
<head><title>Signup</title></head>
<body>

<form action="." method="post">
	<label for="name">Name</label>
	<input type="name" name="name" id="name"><br>
	<label for="username">UserName</label>
	<input type="name" name="username" id="username"><br>
	<label for="email">Email</label>
	<input type="name" name="email" id="email"></br>
	<label for="password">Password</label>
	<input type="password" name="password" id="password"></br>

	<?php// if(isset($msg)){echo "Sorry Email already in use";} ?>

	<input type="submit" name="action" value="Sign Up">


</form>

r'

</body>
</html>    -->