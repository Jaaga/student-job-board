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

      <div class="col-md-12 coloumnBox">

        <div class="col-md-4">
          <h2>Priyanka Jasmeet</h2>
          <hr>
        </div>

        <div class="col-md-offset-9">
          <div class="btn-group" style="margin-top:35px;">
            <button type="button" class="btn btn-default">Messages <span class="badge">42</span></button>

            <div class="btn-group">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                My Profile
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu">
                <li><a href="#">Edit Profile</a></li>
                <li><a href="#">Settings</a></li>
              </ul>
            </div>
          </div>
        </div> <!-- col-md-8 -->


      </div> <!-- coloumnBox -->

    </div> <!-- row -->

    <div class="row">
      
      <div class="col-md-8 coloumnBox" style="margin-top:1%;margin-left:3%;">
        <h2>My Current Jobs</h2>
        <hr>
        
        <h3>
          <a href="#">I can create a responsive site using Bootstrap</a> <br>
          <small>Ordered by <a href="#">Deepak Choudhary</a>
          <img src="../img/22.jpg" alt="" class="img-circle" width="35px">
          </small>
        </h3>
        <div class="row">
          <div class="col-md-4">
            <button class="btn btn-xs btn-info">Messages</button>
            <button class="btn btn-xs btn-success">Done</button>
            <button class="btn btn-xs btn-warning">Conditions</button>
          </div>
          <div class="col-md-2">
            <div class="progress">
              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                 70% Complete
              </div>
            </div>
          </div>
        </div>
        <hr>

        <h3>
          <a href="#">I can create a responsive site using Bootstrap</a> <br>
          <small>Ordered by <a href="#">Deepak Choudhary</a>
          <img src="../img/22.jpg" alt="" class="img-circle" width="35px">
          </small>
        </h3>
        <div class="row">
          <div class="col-md-4">
            <button class="btn btn-xs btn-info">Messages</button>
            <button class="btn btn-xs btn-success">Done</button>
            <button class="btn btn-xs btn-warning">Conditions</button>
          </div>
          <div class="col-md-2">
            <div class="progress">
              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                 70% Complete
              </div>
            </div>
          </div>
        </div>
        <hr>

        <h3>
          <a href="#">I can create a responsive site using Bootstrap</a> <br>
          <small>Ordered by <a href="#">Deepak Choudhary</a>
          <img src="../img/22.jpg" alt="" class="img-circle" width="35px">
          </small>
        </h3>
        <div class="row">
          <div class="col-md-4">
            <button class="btn btn-xs btn-info">Messages</button>
            <button class="btn btn-xs btn-success">Done</button>
            <button class="btn btn-xs btn-warning">Conditions</button>
          </div>
          <div class="col-md-2">
            <div class="progress">
              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                 70% Complete
              </div>
            </div>
          </div>
        </div>
        <hr>

      </div>

      <div class="col-md-3 coloumnBox" style="margin-top:1%;margin-right:1%;">
        <h2>My Offerings</h2>
        <hr>
        <button class="btn btn-lg btn-inverse" style="font-size:14px;width:300px;">Create New Offering</button>
        <hr>
        <a href="#" class="thumbnail">
          <h4 style="text-align:center;">I can create an Avatar</h4>
          <hr>
          <img src="http://cdn3.fiverrcdn.com/photos/2769262/v2_200/Gig_Sample_1.jpg?1393567951" alt="...">
        </a>
        <a href="#" class="thumbnail">
          <h4 style="text-align:center;">I can create an Avatar</h4>
          <hr>
          <img src="http://cdn3.fiverrcdn.com/photos/1797125/v2_200/responsice_email_newsletter.jpg?1370418830" alt="...">
        </a>
        <a href="#" class="thumbnail">
          <h4 style="text-align:center;">I can create an Avatar</h4>
          <hr>
          <img src="http://cdn2.fiverrcdn.com/photos/2494195/v2_200/Cover2.jpg?13883241990" alt="...">
        </a>
      </div>

    </div>

  </div> <!-- container-fluid -->

  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script>
      $(document).ready(function(){
        $('#orderButton').popover({
          trigger: 'hover'
        });
      });
  </script>
</body>
</html>