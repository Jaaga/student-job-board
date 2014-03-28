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
        <a class="navbar-brand" href="/v2/src/">in3Hrs.com</a>
      </div> <!-- navbar-header -->
      <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        <li class="active"><a href="categories.php">Find Services</a></li>
        <li><a href="#">Start Selling</a></li>
        <li><a href="login.php">Signin</a></li>
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
		
		<div class="col-md-8" style="background:white;">
		
		<h3><?php echo $pageTitle; ?></h3>
		<hr>
		
		<form role="form" action="." method="POST" enctype="multipart/form-data">
		  <div class="form-group">
			<label for="title">Offering Title</label>
			<input type="name" name="title" class="form-control" value="<?php echo $title; ?>"></input>
		  </div>
		
		  <div class="form-group">
			<label for="category">Select Category</label>
			<select class="form-control" name="category">
			  <option value="1">WOrdpress</option>
			  <option value="2">DEsign</option>
			  <option value="3">Logo</option>
			  <option value="4">Bootstrap</option>
			  <option value="5">jQuery</option>
			</select>
		  </div>
		  
		  <div class="form-group">
			<label>Offering File</label>
			<input type="file" name="picture"></input>
		  </div>
		  
		  <div class="form-group">
			<label for="description" >Offering Description</label>
			<textarea name="description" class="form-control" value="<?php echo $description; ?>"><?php echo $description; ?></textarea>
		  </div>
		  <div class="form-group">
			<label>Enter 3 tags</label>
			<input type="text" class="form-control" placeholder="Please enter 3 tags seperated by comma">
		  </div>
		  
		  <div class="form-group">
			<label>No: of days to deliver</label>
			<select class="form-control">
			  <option>1</option>
			  <option>2</option>
			  <option>2</option>
			  <option>3</option>
			  <option>4</option>
			</select>
		  </div>
		  
		  <div class="form-group">
			<label>Instructions to client</label>
			<textarea class="form-control" name="instruction" value="<?php echo $instruction;?>"></textarea>
		  </div>
		  
		  <p>
        <input type="hidden" name="editOfferid" value="<?php echo $editofferingid; ?>">
			<button type="submit" name="action" value="<?php echo $buttonValue; ?>"  class="btn btn-success"><?php echo $buttonValue; ?></button>
		  </p>
		</form>
		
		</div>
	
    </div>
	
  </div>
   

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