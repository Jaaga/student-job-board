<?php

	include('common.php');

	//getting value from session
	$userid = $_SESSION['userid'];
	
	  
	//fetching orders from Database
	function get_orders(){
	
		$sql=mysql_query('SELECT * FROM orders INNER JOIN offering ON orders.user_id=$userid &&  orders.offer_id=offering.offer_id ')or die(mysql_error());


	//display orders database
	
				$col=0;
	            $row2=mysql_fetch_array($sql);

                for($row=0;$row<4;$row++)
                { 
                            
                    $data[$row][$col] = $row2['picture'];
                    $data[$row][$col+1]=$row2['title'];
                    $data[$row][$col+2]=$row2['status'];
                    $row2=mysql_fetch_array($sql);
                            
                }
                return($data);
   	}

?>

