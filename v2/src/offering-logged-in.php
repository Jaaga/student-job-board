<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Jaaga Student Job Board</title>
  <link rel="stylesheet" href="../css/lib/bootstrap.css">
  <style>
    body {
      background: #f6f6f6;
      margin-top: 70px;
      margin-left: 2%;
      margin-right: 2%;
    }
    .coloumnBox {
      background:white;
      margin-right:1%;
    }
  </style>
</head>
<body>
    <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>
  <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
  
  
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
        <a class="navbar-brand" href="/v2/src/userDashboard.php">in3Hrs.com</a>
      </div> <!-- navbar-header -->
      <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
        <li><a href="userDashboard.php">Home</a></li>
        <li><a href="categories.php">Find Services</a></li>
        <li><a href="#">Start Selling</a></li>
        <li>
          <form class="navbar-form navbar-right" role="form" action="index.php?loggedOut=true">
            <input type="hidden" name="loggedOut" value="true">
            <button type="submit" class="btn btn-success">Logout</button>
          </form>
        </li>
      </ul>
      </div><!-- navbar-collapse -->
    </div><!-- container-fluid -->
  </nav><!-- navbar -->

  <div class="container-fluid">
    
    <div class="row">
      
      <div class="col-md-8 coloumnBox">
        <h2>I will give you Ninja tactics to find a job using LinkedIn for $5
          <small>Created 1 year ago. Posted in <a href="#">LinkedIn / Career Development</a></small>
        </h2>
          <a href="https://twitter.com/share" class="twitter-share-button" data-lang="en">Tweet</a>
        <g:plusone></g:plusone>
        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
        <hr>
        
        <div id="carousel-example-captions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-captions" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-captions" data-slide-to="1"></li>
        <li data-target="#carousel-example-captions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          <img src="../img/slider-1.jpg" alt="First slide image">
          <div class="carousel-caption">
            <h3>Create Letters</h3>
            <p>My letters will make employers want to hire you!!!</p>
          </div>
        </div>
        <div class="item">
          <img src="../img/slider-2.jpg" alt="Second slide image">
          <div class="carousel-caption">
            <h3>Create Resumes</h3>
            <p>I'll make sure that your resumes are beautiful and outstanding.</p>
          </div>
        </div>
        <div class="item">
          <img src="../img/slider-3.jpg" alt="Third slide image">
          <div class="carousel-caption">
            <h3>Get a Job</h3>
            <p>Land on your dream job.</p>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#carousel-example-captions" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-captions" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>

      <p></p>

      <p>
        I will make a cartoon drawing of you or someone you know. Perfect for your Website, Blog, Facebook, Twitter, etc. Just send me a large good quality picture, & You will usually receive your completed image in 2 days. Note: The attached pictures are my own work, & this is NOT a Photoshop filter effect. You can see more Samples of my work at: http://www.flickr.com/photos/relaxabe2012
      </p>

      <p>
        I will make a cartoon drawing of you or someone you know. Perfect for your Website, Blog, Facebook, Twitter, etc.
      </p>

      <hr>

      <h3>My Other Offerings</h3>
      <p>
        <hr>
        <h4>
          <span style="margin-right: 5%;">Views: <span class="text-primary"> 932</span></span>
          <span>Sales: <span class="text-success"> 32</span></span>
        </h4>
        <canvas id="analytics" width="800" height="400"></canvas>
      </p>
      <hr>
      <h3>Customer Reviews
        <span class="pull-right">
          <span class="glyphicon glyphicon-thumbs-up"></span> 234 
          <span class="glyphicon glyphicon-thumbs-down"></span> 2
        </span>
      </h3>
      <hr>
      <p>
        <span class="glyphicon glyphicon-thumbs-up"></span>
        <img src="../img/comment-user.png" alt=""><a href="#">mojomojo</a> <small> 2 days ago</small>
        <p>
          Thanks!!! The reccomendation is excellent.
        </p>
      </p>
      <p>
        <span class="glyphicon glyphicon-thumbs-up"></span>
        <img src="../img/comment-user.png" alt=""><a href="#">mojomojo</a> <small> 2 days ago</small>
        <p>
          Thanks!!! The reccomendation is excellent.
        </p>
      </p>
      <p>
        <span class="glyphicon glyphicon-thumbs-up"></span>
        <img src="../img/comment-user.png" alt=""><a href="#">mojomojo</a> <small> 2 days ago</small>
        <p>
          Thanks!!! The reccomendation is excellent.
        </p>
      </p>
      <p>
        <span class="glyphicon glyphicon-thumbs-up"></span>
        <img src="../img/comment-user.png" alt=""><a href="#">mojomojo</a> <small> 2 days ago</small>
        <p>
          Thanks!!! The reccomendation is excellent.
        </p>
      </p>
      <p>
        <span class="glyphicon glyphicon-thumbs-up"></span>
        <img src="../img/comment-user.png" alt=""><a href="#">mojomojo</a> <small> 2 days ago</small>
        <p>
          Thanks!!! The reccomendation is excellent.
        </p>
      </p>
      </div>
      <div class="col-md-3 coloumnBox">
        <h2>
          <button class="btn btn-success" >Edit this Offering</button>
          <button class="btn btn-danger" >Delete this Offering</button>
          <hr>
        </h2>
        <p>
          <img src="../img/star.png" width="24px" alt="">
          <img src="../img/star.png" width="24px" alt="">
          <img src="../img/star.png" width="24px" alt="">
          <img src="../img/star.png" width="24px" alt="">
          <img src="../img/star.png" width="24px" alt="">
        </p>
        <hr>
        <h3>
          <span class="glyphicon glyphicon-heart"></span> 99% 
          <span class="glyphicon glyphicon-thumbs-up"></span> 234
        </h3>
        <hr>
        <p>
          Related Categories
        </p>
        <p>
          <a href="#" class="btn btn-xs btn-info">seo <span class="badge">23</span></a>
          <a href="#" class="btn btn-xs btn-info">facebook <span class="badge">23</span></a>
          <a href="#" class="btn btn-xs btn-info">wordpress <span class="badge">23</span></a>
        </p>
        <p>
          <a href="#" class="btn btn-xs btn-info">resumes <span class="badge">23</span></a>
          <a href="#" class="btn btn-xs btn-info">twitter <span class="badge">23</span></a>
        </p>
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

   
  <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
   

  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src="../js/chart.js"></script>
  </script>
  <script>
    $(document).ready(function(){

      var data = {
      labels : ["January","February","March","April","May","June","July"],
      datasets : [
        {
          fillColor : "rgba(220,220,220,0.5)",
          strokeColor : "rgba(220,220,220,1)",
          pointColor : "rgba(220,220,220,1)",
          pointStrokeColor : "#fff",
          data : [65,59,90,81,56,55,40]
        },
        {
          fillColor : "rgba(151,187,205,0.5)",
          strokeColor : "rgba(151,187,205,1)",
          pointColor : "rgba(151,187,205,1)",
          pointStrokeColor : "#fff",
          data : [28,48,40,19,96,27,100]
        }
      ]
    };
    var ctx = $("#analytics").get(0).getContext("2d");
    var charty = new Chart(ctx).Line(data,{});
   setInterval(function(){
      $('#analytics').fadeOut();
      setInterval(function(){
        $('#analytics').fadeIn();
      }, 1000);
   }, 5000);
    });
  </script>
</body>
</html>