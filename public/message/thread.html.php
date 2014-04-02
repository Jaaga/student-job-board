<?php
foreach ($threaded as $thread){
	echo $thread['msg'];
	echo $thread['userid'];
}
?>

<form action="." method="post">
		<textarea name="msg"></textarea>
		<input type="hidden" name="thread" value="<?php echo $thread['thread'];  ?>">
	<?php if($thread['userid']==$_SESSION['userid'])
	{

		$thread['userid']=$thread['senderid'];
	}
	?>
		<input type="hidden" name="to" value="<?php echo $thread['userid'];  ?>">
		
		<input type="submit" name="sendmsg"></input>
	</form>