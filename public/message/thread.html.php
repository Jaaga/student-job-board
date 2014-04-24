<!-- Thread Page for messages -->

<?php
$sender=new users; ?>
	<!DOCTYPE html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>in3hrs.com</title>
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
   <?php include '../includes/header.inc.php'; ?>



  <!-- Main Body -->
  <div class="container movedown" >
    <div class="row-fluid ">
      <div class="span8 well offset2">
      <div class="span7">
      <!-- Display Messages -->
      
      <?php  $counting =0;
	foreach ($threaded as $thread){ ?>
		<h4><?php if($counting == 0) {echo "Conversation For: ".$thread['title']; $counting++ ;} ?></h4>

        <div class="alert alert-info">
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
  </div>


</body>
</html>
