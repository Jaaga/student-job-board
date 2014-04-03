<?php
$sender=new users; ?>
	<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Messages</title>

    <!-- Bootstrap -->
    <link href="../css/lib/bootstrap.css" rel="stylesheet">
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
        <a class="navbar-brand" href="/v2/src/">in3Hrs.com</a>
      </div> <!-- navbar-header -->
      <div class="collapse navbar-collapse" id="app-navbar-collapse">
        <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        <li class="active"><a href="categories.php">Find Services</a></li>
        <li><a href="#">Start Selling</a></li>
        <li><a href="login.php">Signin</a></li>
        <li>
          <form class="navbar-form navbar-right" role="form" action="signup.php">
            <button type="submit" class="btn btn-success">Sign Up</button>
          </form>
        </li>
      </ul>
      </div><!-- navbar-collapse -->
    </div><!-- container-fluid -->
  </nav><!-- navbar -->

  <!-- Main Body -->
  <div class="container" style="margin-top:60px;">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
      <!-- Display Messages -->
      
      <?php  $counting =0;
	foreach ($threaded as $thread){ ?>
		<h4><?php if($counting == 0) {echo "Conversation For: ".$thread['title']; $counting++ ;} ?></h4>

        <div class="alert alert-success">
        	<?php $data=$sender->get_user_by_id($thread['senderid']); echo $data[0]; ?>
            <strong><?php echo $thread['msg']; ?></strong><br />
        </div>
        <?php } ?>
        <br />
        <!-- Send Messages -->
        <h4>Send Message</h4>
        <form action="." method="post">
          <textarea class="form-control" rows="3" placeholder="Message" name="msg"></textarea>
          <br />
          <input type="hidden" name="thread" value="<?php echo $thread['thread'];  ?>">
          <?php if($thread['userid']==$_SESSION['userid'])
			{
				$thread['userid']=$thread['senderid'];
			}
			?>
			<input type="hidden" name="to" value="<?php echo $thread['userid'];  ?>">

          <input class="btn btn-primary" type="submit" name="sendmsg">

	</form>

      </div>
    </div>
  </div>


</body>
</html>
