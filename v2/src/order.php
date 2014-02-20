

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
        <li><a href="#"> <img src="../img/yatin-avatar.jpg" class="img-circle" height="26px"> Yatin Taluja</a></li>
        <li>
          <form class="navbar-form navbar-right" role="form">
            <button type="submit" class="btn btn-success">Logout</button>
          </form>
        </li>
      </ul>
      </div><!-- navbar-collapse -->
    </div><!-- container-fluid -->
  </nav><!-- navbar -->

  <div class="container-fluid">
    <div class="row">
      
      <div class="col-md-8">
      <?php
              $con = mysql_connect("localhost","root","golny23!");
              $db = mysql_select_db("sjb");
              $query = mysql_query('select * from orders where order_id = 1');
              $row = mysql_fetch_array($query);
              
 

        ?>
        
              <h2> <?php echo $row['details'];   ?> <br>
                <small>Order No: <?php echo $row['order_id'];   ?></small>
              </h2>

              <hr>
              <h3>Messages</h3>
              <hr>
              <?php
                $query = mysql_query('select * from message where student_id=1');
                while($row = mysql_fetch_array($query)){
                  echo '<blockquote>'.$row['message_info'].'</blockquote>';
                }
              
              ?>
              <hr>
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
                <span class="pull-right"><button class="btn btn-primary">Post Message</button></span>
              </div>
                

        
      </div>

      <div class="col-md-3">
        <p>
          <h3>Rate this Order</h3>
          <a href="#" class="btn btn-success btn-xs">Happy</a>
          <a href="#" class="btn btn-warning btn-xs">Unhappy</a>
          <a href="#" class="btn btn-danger btn-xs">Fraud</a>
        </p>
        <hr>
        <img src="../img/yatin-avatar.jpg" alt="" class="img-circle" height="48px">
        Order By <a target="_blank" href="https://twitter.com/yatintaluja">Yatin Taluja</a>
      </div>

    </div>
  </div>

  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>