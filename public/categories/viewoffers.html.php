<?php


  $offering = new offering;
  $data = $offering->featured_offering();
?>

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
  <link rel="stylesheet" href="../../v2/css/theme1.css">
</head>
<body>
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
        <li class="active"><a href="categories.php">Find Services</a></li>
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
    <div class="col-md-8 col-md-offset-2">
      
      <h2 style="text-align:center;">Search for Offerings</h2>
      <form action="." method="post">
      <p style="display:inline">
        <input type="text" name="searchquery" class="form-control" placeholder="Search for services" style="width:60%;height:3em;display:inline;"></input>
        <select name="categoy" id="" class="form-control" style="width:20%;display:inline;height:2.9em;">
          <option value=""><strong>In Category</strong></option>
          <option value="1">Wordpress</option>
          <option value="2">Design</option>
          <option value="3">Javascript</option>
          <option value="4">jQuery</option>
          <option value="5">PHP</option>
        </select>
        <input type="submit" name="search" class="btn btn-success" style="height:2.9em;">Go</input>
      </p>
      </form>
      <hr>
    </div>
  </div>




    <div class="row" id="offerings">

      <?php for ($row=0; $row < 4; $row++) { 
        
       ?>
      <div class="col-md-3">
        <div class="skill-set">
          <aside class="featured"></aside>
          <a href="./offering?offeringid= <?php echo $data[$row][2]; ?>">
          <img style="height:200px;overflow:hidden;" class="img-responsive" src="<?php echo $data[$row][0]; ?>" alt="...">
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