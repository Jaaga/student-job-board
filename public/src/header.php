
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
   <?php  if(isset($_SESSION["userid"])){ echo '<li><a href="logout.php">logout</a></li>'; } else { echo '<li><a href="login.php">signin</a></li>'; } ?>
    
        
          <form class="navbar-form navbar-right" role="form">
          <button type="submit" class="btn btn-success">Sign Up</button>
          </form>
        </li>
      </ul>
      </div><!-- navbar-collapse -->
    </div><!-- container-fluid -->
  </nav>