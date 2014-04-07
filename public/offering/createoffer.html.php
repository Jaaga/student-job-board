<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>in3hrs.com&middot; Bootstrap</title>
      <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">

      <!-- Le styles -->
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="css/font-awesome.min.css">
      <!--[if IE 7]>
      <link rel="stylesheet" href="css/font-awesome-ie7.min.css">
      <![endif]-->
      <link href="../css/bootplus.css" rel="stylesheet">
      <link href="../css/bootplus-responsive.css" rel="stylesheet">
      <link href="../css/custom.css" rel="stylesheet">

    
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="ico/favicon.png">
  </head>

  <body>



    <!-- NAVBAR
    ================================================== -->
    <div class="navbar-wrapper">
      <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
      <div class="container">

        <div class="navbar _navbar-inverse">
          <div class="navbar-inner">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">in3hrs.com</a>
            <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
            <div class="nav-collapse collapse">
              <ul class="nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="#about">Find Services </a></li>
                <li><a href="#contact">Start Selling</a></li>
                <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->

              </ul>
                              <a class="btn  btn-success pull-right" href="#">Sign in</a>

            </div><!--/.nav-collapse -->
          </div><!-- /.navbar-inner -->
        </div><!-- /.navbar -->

      </div> <!-- /.container -->
    </div><!-- /.navbar-wrapper -->

      <!--  FORM FOR CREATING OFFERIGN -->
      <div class="container movedown">
    
      <div class="row ">
      <div class="card span12">
    
      <div class="span6 offset3" >
    
    <h2>Create An Offering</h2>
    <hr>
    
    <form class="form-horizontal" action="." method="POST" enctype="multipart/form-data">
      <div class="control-group">
      <label class="control-label">Offering Title</label>
      <div class="controls">
      <input type="text" name="title" value="<?php echo $title; ?>"></input>
      </div>
      </div>
    
      <div class="control-group">
      <label class="control-label">Select Category</label>
      <div class="controls">
      <select name="category">
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
      </div>
      
      <div class="control-group">
      <label class="control-label">Offering File</label>
      <div class="controls">
      <input type="file" name="picture"></input>
      </div>
      </div>
      
      <div class="control-group">
      <label class="control-label" >Offering Description</label>
      <div class="controls">
      <textarea name="description" value="<?php echo $description; ?>"><?php echo $description; ?></textarea>
      </div>
      </div>


      <div class="control-group">
      <label class="control-label">Enter 3 tags</label>
      <div class="controls">
      <input type="text"  placeholder="Enter tags seperated by comma's">
      </div>
      </div>
      
      <div class="control-group">
      <label class="control-label">No: of days to deliver</label>
      <div class="controls">
      <select >
        <option>1</option>
        <option>2</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
      </select>
      </div>
      </div>

      
      <div class="control-group">
      <label class="control-label">Instructions to client</label>
      <div class="controls">
      <textarea  name="instruction" value="<?php echo $instruction;?>"><?php echo $instruction;?></textarea>
      </div>
      </div>

      <div class="controls">
              <input type="hidden" name="editOfferid" value="<?php echo $editofferingid; ?>">

      <button type="submit" name="action" value="<?php echo $buttonValue; ?>"  class="btn btn-success">Create Offering</button>
      </p>
    </form>
    
    </div>
  
    </div>
  
  </div>

      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2013 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->



    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap-transition.js"></script>
    <script src="../js/bootstrap-alert.js"></script>
    <script src="../js/bootstrap-modal.js"></script>
    <script src="../js/bootstrap-dropdown.js"></script>
    <script src="../js/bootstrap-scrollspy.js"></script>
    <script src="../js/bootstrap-tab.js"></script>
    <script src="../js/bootstrap-tooltip.js"></script>
    <script src="../js/bootstrap-popover.js"></script>
    <script src="../js/bootstrap-button.js"></script>
    <script src="../js/bootstrap-collapse.js"></script>
    <script src="../js/bootstrap-carousel.js"></script>
    <script src="../js/bootstrap-typeahead.js"></script>
    <script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
    <script src="js/holder/holder.js"></script>
  </body>
</html>
