

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Jaaga Student Job Board</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
  <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
  
  <!-- Navigation Bar -->
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
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

  <div class="container">
    <div class="row">
      
      <div class="col-md-8">
       
        <?php
              $con = mysql_connect("localhost","root","");
              $db = mysql_select_db("sjb");
              $query = mysql_query('select * from offering where user_id = 1');
              $row = mysql_fetch_array($query);
              echo '<h2><a href="offering.php">' . $row['title'] . '</a><br /><small>posted on ' .$row['date']. '</small></h2>';
 

        ?>
        
                <iframe width="650" height="350" src="//www.youtube.com/embed/tpKCqp9CALQ" frameborder="0" allowfullscreen></iframe>
        <h4>I will create your lyrics and rap you a 16 verse song for $5. It will be around 30 seconds in length. </h4>
          <?php
              
              echo '<p>' . $row['description'] . '</p>';

        ?>
        
        
        <button class="btn btn-lg btn-success">Give Him a Job</button>
      </div>

      <div class="col-md-3">
        <h1><button class="btn btn-lg btn-success">Give Him a Job</button></h1>
        <hr>
        <p>
          <a href="#" class="btn btn-success btn-xs">Happy <span class="badge">56</span></a>
          <a href="#" class="btn btn-warning btn-xs">Unhappy <span class="badge">6</span></a>
          <a href="#" class="btn btn-danger btn-xs">Fraud <span class="badge">0</span></a>
        </p>
        <hr>
        <img src="../img/yatin-avatar.jpg" alt="" class="img-circle"`  height="48px">
        Posted By <a target="_blank" href="https://twitter.com/yatintaluja">Yatin Taluja</a>
      </div>

    </div>
  </div>

  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>