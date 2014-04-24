
<!-- Html form page for login -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Jaaga Student Job Board</title>
  <link rel="stylesheet" href="../css/lib/bootstrap.css">
  <link rel="stylesheet" href="../css/lib/styles.css">
</head>
<body>

<!-- Git gen -->
  
  <?php include '../includes/header.inc.php'; ?>
  
  <div class="container form-container">
  <div class="row">
    
    <div class="col-md-offset-4">
      <form class="form-signin mg-btm" method="post" action=".">
      <h3 class="heading-desc">Login to in3Hrs.com</h3>
      <div class="social-box">
      <div class="row mg-btm">
             <div class="col-md-12">
                <a href="#" class="btn btn-primary btn-block">
                  <i class="icon-facebook"></i>    Login with Facebook
                </a>
      </div>
      </div>
      <div class="row">
      <div class="col-md-12">
                <a href="#" class="btn btn-info btn-block" >
                  <i class="icon-twitter"></i>    Login with Twitter
                </a>
            </div>
          </div>
    </div>
    <div class="main">  
        
    <input type="text" class="form-control" placeholder="Email" autofocus name="email">
    <input type="password" class="form-control" placeholder="Password" name="password">
     
        
    <span class="clearfix"></span>  
        </div>
    <div class="login-footer">
    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <div class="left-section">
                <a href="">Forgot your password?</a>
                <a href="">Sign up now</a>
              </div>
                        </div>
                        <div class="col-xs-6 col-md-6 pull-right">
          <button type="submit" name ="submit" class="btn btn-large btn-success pull-right">Login</button>
                       <?php if(isset($InvalidUser)){echo "username and password is wrong";} ?> </div>
                    </div>
    
    </div>
      </form>
    </div>

  </div>
</div>
<!-- Javascript -->
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>
