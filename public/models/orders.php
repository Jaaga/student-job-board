<?php


	class orders{
 
	//fetching orders from Database
	public function get_orders($userid)
	{
				$con=create_connection();

				$sql=mysqli_query($con,"SELECT * FROM orders  INNER JOIN offering ON orders.user_id='$userid' &&  orders.offer_id=offering.offer_id ")or die(mysqli_error($con));
	            
	            $rowcount=mysqli_num_rows($sql);
	            if($rowcount==0)
	            	return 0;

	            $result=mysqli_fetch_array($sql);
	            

                for($row=0;$row<$rowcount;$row++)
                {          
                    $data[$row][0]=$result['picture'];
                    $data[$row][1]=$result['title'];
                    $data[$row][2]=$result['status'];
                    $data[$row][3]=$result['offer_id'];
                    $data[$row][4]=$result['details'];
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
			$sql_query = "INSERT INTO orders(user_id, offer_id, status, details,accept_order) values ('$userid', '$offerid', 'Pending', '$details',0)";
			mysqli_query($con,$sql_query)or die(mysqli_error($con));
			$latestOrderId= mysqli_insert_id($con);
			return $latestOrderId;


	}

	public function get_orders_by_offerid($offerid)
	{
		$con=create_connection();

				$sql=mysqli_query($con,"SELECT * FROM orders where offer_id='$offerid'") or die(mysqli_error($con));
	            $result=mysqli_fetch_array($sql);

				
                for($row=0;$row<$numrows&&$result;$row++)
                { 
                            
                    $data[$row][0] = $result['picture'];
                    $data[$row][1]=$result['title'];
                    $data[$row][2]=$result['status'];
                    $data[$row][4]=$result['details'];

                    $result=mysqli_fetch_array($sql);          
                }
                return($data);
	}

//user here means the orders that were ordered to him



   	public function get_orders_by_user($userid)
	{
				$con=create_connection();

				$list=mysqli_query($con,"SELECT * FROM orders  INNER JOIN offering ON orders.offer_id=offering.offer_id &&  offering.user_id='$userid' ")or die(mysqli_error($con));
	            
	            

	            $rowcount=mysqli_num_rows($list);

	            if($rowcount==0)
	            	return 0;

	            $result=mysqli_fetch_array($list);

	            

                for($row=0;$row<$rowcount;$row++)
                { 
                            
                    $data[$row][0]=$result['picture'];
                    $data[$row][1]=$result['title'];
                    $data[$row][2]=$result['status'];
                    $data[$row][3]=$result['offer_id'];
                    $data[$row][4]=$result['details'];
                    $data[$row][5]=$result['order_id'];
                   	$data[$row][6]=$result['user_id'];
                   	$data[$row][7]=$result['accept_order'];
                   $result=mysqli_fetch_array($list);

                                              
                }
                mysqli_close($con);
                return($data);
   	}

   	public function acceptOrder($orderid)
	{
		$con=create_connection();

				$sql=mysqli_query($con,"UPDATE orders SET accept_order=1 WHERE order_id='".$orderid."'") or die(mysqli_error($con));	
	}

	public function declineOrder($orderid)
	{
		$con=create_connection();

				$sql=mysqli_query($con,"UPDATE orders SET accept_order=-1 WHERE order_id='".$orderid."'") or die(mysqli_error($con));	
	}


	public function setStatus($status,$orderid)
	{
		$con=create_connection();

				$sql=mysqli_query($con,"UPDATE orders SET status='".$status."' WHERE order_id='".$orderid."'") or die(mysqli_error($con));	
	}


	public function deliverFile($delivery,$orderid)
	{
		$con=create_connection();

		$sql=mysqli_query($con,"UPDATE orders SET delivery='".$delivery."' WHERE order_id='".$orderid."'") or die(mysqli_error($con));	
	}

	public function get_offer_by_orderid($orderid)
	{
		$con=create_connection();

				$sql=mysqli_query($con,"SELECT * FROM offering LEFT JOIN orders ON orders.offer_id=offering.offer_id where orders.order_id='$orderid'") or die(mysqli_error($con));
	            $result=mysqli_fetch_array($sql);

				
               $data[0]=$result['user_id'];

                return $data[0];
	}

	



}
?>

