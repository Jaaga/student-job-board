<?php
  $homepage=True;
  include './models/dbconnection.php';


  include './models/offerings.php';
  $offering = new offering;
  $data = $offering->featured_offering();
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Jaaga Student Job Board</title>
  <link rel="stylesheet" href="../v2/css/lib/bootstrap.css">
  <style>
    body {
      margin-top: 70px;
      margin-left: 2%;
      margin-right: 2%;
    }
  </style>
  <link rel="stylesheet" href="../v2/css/theme1.css">
</head>
<body>
  
  <!-- top nav bar -->
 <!-- <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../v2/src/">
          in3Hrs.com
        </a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="categories.php">Find Services</a></li>
        <li><a href="">Start Selling</a></li>
        <li><a href="./login/">Signin</a></li>
        <li>
          
            <a class="btn btn-lg btn-success navbar-right" href="./signup" style="color:white;">Sign Up</a> 
          
        </li>
      </ul>
    </div> <!-- container 
  </div> <!-- navbar div --> 
  <?php include './includes/header.inc.php';  ?>

  <!-- Jumbotron -->
  <div class="jumbotron" style="background:url(./images/cover.jpg) no-repeat;">
    <div class="container" style="height:300px;">
    </div>
  </div>

  <div class="container">
    <div class="row" id="loggedout" style="display:none;">
      <div class="col-md-12">
        <div class="alert alert-info">You've successfully logged out of in3Hrs.com. See you soon!</div>
      </div>
    </div>

    



    <div class="row" id="offerings">

      <?php for ($row=0; $row < 4; $row++) { 
        
       ?>
      <div class="col-md-3">
        <div class="skill-set">
          <aside class="featured"></aside>
          <a href="./offering?offeringid= <?php echo $data[$row][2]; ?>">
          <img style="height:200px;overflow:hidden;" class="img-responsive" src="<?php echo "./offering/".$data[$row][0]; ?>" alt="...">
          <h5>
            <?php echo $data[$row][1]; ?> </a>
          </h5>
          <p>
            <img src="http://cdn0.fiverrcdn.com/photos/441737/thumb/374323_10150410284411292_523596291_8776528_185859792_n.jpg?1343838133" alt="" class="img-circle">
            <a href="">Roger Federer</a>
          </p>
        </div>
      </div>
      <?php } ?>
    </div>
  </div> <!-- container -->

  <div class="container">
    <div class="row">
      <div class="col-md-offset-3">
      <p style="margin: 20px;"></p>
        <div class="form">
          <div class="form-group">
            <button class="btn btn-lg btn-primary" style="width:70%" id="loadmorebutton">Load More Offerings</button> <img src="../v2/img/gif-load.gif" alt="" id="loadingimg" style="display:none;">
          </div>
        </div>
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

  <script src="../v2/js/jquery.min.js"></script>
  <script src="../v2/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#loadmorebutton').on('click', function(e){
        e.preventDefault();
        $('#loadmorebutton').html('Please wait.....');
        $('#loadingimg').show();
        setTimeout(function(){
          var html = $('#offerings').html();
          $('#offerings').html(html + html);
          $('#loadmorebutton').html('Load More Offerings');
          $('#loadingimg').hide();
        }, 2000);
      });
      var field = 'loggedOut';
      var url = window.location.href;
      if(url.indexOf('?' + field + '=') != -1)
          $('#loggedout').fadeIn();
      else if(url.indexOf('&' + field + '=') != -1)
          $('#loggedout').fadeIn();
    });
  </script>
</body>
</html>