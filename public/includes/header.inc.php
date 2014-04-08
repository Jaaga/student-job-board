
  <div class="navbar-wrapper">
    <div class="container">
      <div class="navbar _navbar-inverse">
        <div class="navbar-inner">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="../../public/">
            in3Hrs.com
          </a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="<?php if(!isset($_SESSION['userid'])){echo $_SERVER['DOCUMENT_ROOT'] . '/student-job-board/';} if (isset($homepage)){echo ".";} else{echo "../user/";} ?>">Home</a></li>
              <li><a href="<?php if (isset($categoriespage)){echo ".";} if(isset($homepage)){echo "./categories/";} else{echo "../categories/";} ?>">Find Services</a></li>
              <?php if(!isset($homepage)){ ?>
              <li><a href="<?php if (isset($offeringpage)){echo ".";} else{echo "../offering/";} ?>">Start Selling</a></li>
              <?php } ?>
              <?php 
              if(!isset($_SESSION['userid'])){
              if(isset($homepage)){

               ?> 
              <li><a class="btn  btn-success pull-right"  href="./login/">Signin</a></li>
              <li>
                  <a class="btn  btn-success pull-right" href="./signup" style="color:white;">Sign Up</a> 
              </li> <?php }} if(isset($_SESSION['userid'])){ ?>
                <li>
                  <a class="btn  btn-success pull-right" href="../logout" style="color:white;">Logout</a> 
              </li>
             <?php } ?> 

            </ul>
          </div>
        </div>
      </div>  
    </div> <!-- container -->
  </div> <!-- navbar div -->
