<!--  header page -->
  <div class="navbar-wrapper">
    <div class="container">
      <div class="navbar _navbar-inverse">
        <div class="navbar-inner">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="<?php if(isset($_SESSION['userid'])){echo "/student-job-board/public/user/";} else {echo "/student-job-board/public/";} ?>">
            in3Hrs.com
          </a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <?php if(isset ($_SESSION['userid'])){ ?><li <?php if(isset($userpage)){echo "class='active'"; }?>><a href="<?php echo "/student-job-board/public/user"; ?>">Home</a></li> <?php } ?>
              <li <?php if(isset($categoriespage)){echo "class='active'"; }?>><a href="<?php echo "/student-job-board/public/categories/" ; ?>">Find Services</a></li>
              <?php if(isset ($_SESSION['userid'])){ ?><li <?php if(isset($orderpage)){echo "class='active'"; }?>><a href="<?php echo "/student-job-board/public/orders"; ?>">To Do</a></li> <?php } ?>

              <?php if(isset ($_SESSION['userid'])){ ?><li <?php if (isset($offeringpage)){echo "class='active'";} ?>><a href="<?php echo "/student-job-board/public/offering" ; ?>">Create Offering</a></li> <?php } ?>


            </ul>
                          <?php 
              if(!isset($_SESSION['userid'])){
             
               ?> 
                                 <a class="btn btn-danger pull-right  " href="/student-job-board/public/signup/" ">Sign Up</a> 

              <a class="btn  btn-success pull-right "  href="/student-job-board/public/login/">Sign in</a>
              
               <?php } if(isset($_SESSION['userid'])){ ?>
               
                  <a class="btn  btn-warning pull-right" href="/student-job-board/public/logout/" style="color:white;">Logout</a> 
              
             <?php } ?> 

          </div>
        </div>
      </div>  
    </div> <!-- container -->
  </div> <!-- navbar div -->


