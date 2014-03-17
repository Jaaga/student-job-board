<?php
	class orders{
	include('common.php');

	  
	//fetching orders from Database
	public function get_orders($var){
				$userid = $_SESSION['userid'];
				$sql=mysql_query('SELECT * FROM orders INNER JOIN offering ON orders.user_id=$userid &&  orders.offer_id=offering.offer_id ')or die(mysql_error());
				
				$col=0;
	            $row2=mysql_fetch_array($sql);

                for($row=0;$row<$var;$row++)
                { 
                            
                    $data[$row][$col] = $row2['picture'];
                    $data[$row][$col+1]=$row2['title'];
                    $data[$row][$col+2]=$row2['status'];
                    $row2=mysql_fetch_array($sql);
                            
                }
                return($data);
   	}
   	
	public function create_order()
	{
		//fetching user_id from session
		$userid = $_SESSION['user_id'];
		//getting values from form
		$picture = $_POST['details'];
		$title = $_POST['title'];
		$description = $_POST['description'];
		//storing query value in result
		$sql_query = "INSERT INTO orders(user_id, offer_id, status, date) values ('$userid', '$offerid', '$state', Now())";
	}
}
?>

