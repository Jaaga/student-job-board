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
    <?php include '../includes/header.inc.php'; ?>
    
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
			  <option value="1">.NET</option>
        <option value="2">C++</option>
        <option value="3">CSS & HTML</option>
        <option value="4">Joomla & Drupal</option>
        <option value="5">Databases</option>
        <option value="6">Java</option>
        <option value="7">JavaScript</option>
        <option value="8">PSD to HTML</option>
        <option value="9">WordPress</option>
        <option value="10">Flash</option>
        <option value="11">iOS, Android & Mobile</option>
        <option value="12">PHP</option>
        <option value="13">Software Testing</option>
        <option value="14">Technology</option>
        <option value="15">Other</option>
     
			  
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
			<textarea class="form-control" name="instruction" value="<?php echo $instruction;?>"><?php echo $instruction;?></textarea>
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