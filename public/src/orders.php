<? php

	include('common.php');

	//getting value from session
	$userid = $_SESSION['userid'];
	
	//selecting Database
	$sql=mysql_query('SELECT * FROM orders WHERE user_id = $userid')or die(mysql_error());
	
	//fetching orders from Database
	function fetch_order_details(){
	
	$order_array = array();
	//display orders
	
	while($row=mysql_fetch_array($sql))
		{
			
			$order_array[] = $row['details'];
			//Displaying Status of Orders
			
		}
			return $order_array;
	}
	
?>
//example to call

<!--<html>
<body>
	
	<?php fetch_order_details();
    ?>
	

</body>

</html>
-->