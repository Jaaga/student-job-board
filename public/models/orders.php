<?php

	class orders{
 
	//fetching orders from Database
	public function get_orders($userid,$numrows)
	{
				$con=create_connection();

				$sql=mysqli_query($con,"SELECT * FROM orders  INNER JOIN offering ON orders.user_id='$userid' &&  orders.offer_id=offering.offer_id ")or die(mysqli_error($con));
	            
	            $rowcount=mysqli_num_rows($sql);
	            if($rowcount==0)
	            	return 0;

	            $result=mysqli_fetch_array($sql);

                for($row=0;$row<$numrows;$row++)
                { 
                            
                    $data[$row][0]=$result['picture'];
                    $data[$row][1]=$result['title'];
                    $data[$row][2]=$result['status'];
                    $data[$row][3]=$result['offer_id'];
                   $result=mysqli_fetch_array($sql);

                                              
                }
                mysqli_close($con);
                return($data);
   	}
   	//placing an order
	public function create_order($userid,$offerid,$details)
	{
			$con=create_connection();
			//storing query value in result
			$sql_query = "INSERT INTO orders(user_id, offer_id, status, details) values ('$userid', '$offerid', 'pending', '$details')";
			mysqli_query($con,$sql_query)or die(mysqli_error($con));
	}

	public function get_orders_by_offerid($offerid)
	{
		$con=create_connection();

				$sql=mysqli_query($con,'SELECT * FROM orders where offer_id=$offerid')or die(mysqli_error($con));
	            $result=mysqli_fetch_array($sql);

				
                for($row=0;$row<$numrows&&$result;$row++)
                { 
                            
                    $data[$row][0] = $result['picture'];
                    $data[$row][1]=$result['title'];
                    $data[$row][2]=$result['status'];
                    $result=mysqli_fetch_array($sql);          
                }
                return($data);
	}
}
?>

