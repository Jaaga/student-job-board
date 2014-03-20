<?php
  include '../../public/models/offerings.php';
  $offering = new offering;
  $data = $offering->featured_offering();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Jaaga Student Job Board</title>
  <link rel="stylesheet" href="../css/lib/bootstrap.css">
  <link rel="stylesheet" href="../css/theme1.css">
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
      <p style="display:inline">
        <input type="text" class="form-control" placeholder="Search for services" style="width:60%;height:3em;display:inline;">
        <select name="" id="" class="form-control" style="width:20%;display:inline;height:2.9em;">
          <option value=""><strong>In Category</strong></option>
          <option value="">Wordpress</option>
          <option value="">Design</option>
          <option value="">Javascript</option>
          <option value="">jQuery</option>
          <option value="">PHP</option>
          <option value="">Wordpress</option>
        </select>
        <button class="btn btn-success" style="height:2.9em;">Go</button>
      </p>
      <hr>
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
      
      <?php for ($row=0; $row < 4; $row++) { 
        
       ?>
      <div class="col-md-3">
        <div class="skill-set">
          <aside class="featured"></aside>
          <img style="height:200px;overflow:hidden;" class="img-responsive" src="<?php echo $data[$row][0]; ?>" alt="...">
          <h5>
            <a href="offering.php"><?php echo $data[$row][1]; ?></a>
          </h5>
          <p>
            <img src="http://cdn0.fiverrcdn.com/photos/441737/thumb/374323_10150410284411292_523596291_8776528_185859792_n.jpg?1343838133" alt="" class="img-circle">
            <a href="">Roger Federer</a>
          </p>
        </div>
      </div>
      <?php } ?>

    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-7 col-md-offset-2">
        <ul class="pagination">
          <li class="previous"><a href="#">&larr; Older</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
          <li><a href="#">6</a></li>
          <li><a href="#">7</a></li>
          <li><a href="#">8</a></li>
          <li><a href="#">9</a></li>
          <li><a href="#">...</a></li>
          <li><a href="#">231</a></li>
          <li><a href="#">232</a></li>
          <li><a href="#">233</a></li>
          <li class="next"><a href="#">Newer &rarr;</a></li>
        </ul>
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