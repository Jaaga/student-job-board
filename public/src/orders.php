<? php

	include('common.php');

	//getting value from session
	$userid = $_SESSION['userid'];
	
	//selecting Database
	$sql=mysql_query('SELECT * FROM orders WHERE user_id = $userid')or die(mysql_error());
	
	//fetching orders from Database
	function get_orders(){
	
	$order_array = array();

	//display orders database
	
	while($row=mysql_fetch_array($sql))
		{
			
			$order_array[] = $row;

			
		}
			return $order_array;

	}

?>

<!--example to call

<html>
<body>
	
	<?php 
	 //$orders=get_orders();
	 //echo $orders[0]['username'];
    ?>
	

</body>

</html>
-->