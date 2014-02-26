<?php
include('common.php');
if(isset($_POST['submit']))
{

$fname=make_safe($_POST['fname']);
echo $fname;
$lname=make_safe($_POST['lname']);
$email=make_safe($_POST['email']);
$pw=make_safe($_POST['pw']);
//$pw1=sha1($pw);

$query=mysql_query("insert into user (name,email,pass) values ('".$fname."','".$email."','".$pw."')") or die(mysql_error());

}
function make_safe($variable) {
    $variable = mysql_real_escape_string(trim($variable));
    return $variable;
}


?>



<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">
     <link href="css/student.css" rel="stylesheet">
    <title>Student Profile</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/navbar-fixed-top.css">
    <link rel="stylesheet" href="css/sticky-footer-navbar.css">
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
        <li><a href="#">Home</a></li>
        <li><a href="#">Find Services</a></li>
        <li><a href="#">Start Selling</a></li>
        <li><a href="/login.html">Signin</a></li>
        <li>
          <form class="navbar-form navbar-right" role="form">
            <button type="submit" class="btn btn-success">Sign Up</button>
          </form>
        </li>
      </ul>
      </div><!-- navbar-collapse -->
    </div><!-- container-fluid -->
  </nav><!-- navbar -->

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h2>Signup</h2>
	<form class="form-horizontal well" role="form" method="post">
   <div class="form-group">
      <label for="firstname" class="col-sm-4 control-label">First Name</label>
      <div class="col-sm-3">
         <input type="text" class="form-control" id="firstname" 
            placeholder="Enter First Name"name="fname">
      </div>
   </div>
   <div class="form-group">
      <label for="lastname" class="col-sm-4 control-label">Last Name</label>
      <div class="col-sm-3">
         <input type="text" class="form-control" id="lastname" 
            placeholder="Enter Last Name" name="lname">
      </div>
   </div>
   <div class="form-group">
      <label for="email" class="col-sm-4 control-label">Email</label>
      <div class="col-sm-3">
         <input type="email" class="form-control" id="email" 
            placeholder="Enter Email" name="email">
      </div>
   </div>
    <div class="form-group">
      <label for="password" class="col-sm-4 control-label">Password</label>
      <div class="col-sm-3">
         <input type="password" class="form-control" id="password" 
            placeholder="Enter password" name="pw">
      </div>
   </div>
     <div class="form-group">
      <label for="cpassword" class="col-sm-4 control-label">Confirm Password</label>
      <div class="col-sm-3">
         <input type="password" class="form-control" id="cpassword" 
            placeholder="Confirm Password" name="cpw"><br/>
			<input type="submit" name="submit">
      </div>
   </div>
   
   </form>
      </div>
    </div>
  </div>

  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>