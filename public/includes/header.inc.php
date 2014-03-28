
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="../v2/src/">
          in3Hrs.com
        </a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="<?php if(!isset($_SESSION['userid'])){echo $_SERVER['DOCUMENT_ROOT'] . '/student-job-board/';} if (isset($homepage)){echo ".";} else{echo "../user/";} ?>">Home</a></li>
        <li><a href="<?php if (isset($categoriespage)){echo ".";} if(isset($homepage)){echo "./categories/";} else{echo "../categories/";} ?>">Find Services</a></li>
        <?php if(!isset($homepage)){ ?>
        <li><a href="<?php if (isset($offeringpage)){echo ".";} else{echo "../offering/";} ?>">Start Selling</a></li>
        <?php } ?>
        <?php 
        if(!isset($_SESSION['userid'])){
        if(isset($homepage)){

         ?> 
        <li><a href="./login/">Signin</a></li>
        <li>
            <a class="btn btn-lg btn-success navbar-right" href="./signup" style="color:white;">Sign Up</a> 
        </li> <?php }} if(isset($_SESSION['userid'])){ ?>
          <li>
            <a class="btn btn-lg btn-success navbar-right" href="../logout" style="color:white;">Logout</a> 
        </li>
       <?php } ?> 

      </ul>
    </div> <!-- container -->
  </div> <!-- navbar div -->
