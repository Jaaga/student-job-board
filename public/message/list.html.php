<!doctype html>
<html>
<head>

</head>
<body>
	<?php
	$threads=$message->list_message_by_thread();
	foreach($threads as $thread){
		echo "<a href='?t=".$thread['thread']."'>".$thread['msg']."</hr></a><br>";
		}

		
	?>
	
</body>

</html>