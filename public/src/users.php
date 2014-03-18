<?php
	//connection file included
	include('common.php');
	
	//users class
	class users{
		//get user data using user_id
		public function get_user_by_id($user_id){

			//query to fetch user data
			$sql_query=mysql_query("SELECT * FROM user WHERE user_id=$user_id") or die("query is wrong");
			//getting user data array
			$row2=mysql_fetch_array($sql_query);
			$column=0;
			//storing data in data array
			$data[$column]=$row2['name'];
			$data[$column+1]=$row2['email'];
		    $data[$column+2]=$row2['linkedin'];
		    $data[$column+3]=$row2['about'];
		    $data[$column+4]=$row2['picture'];
		    $data[$column+5]=$row2['paypal'];
		    return($data);
		}

		//get user data using offer_id
		public function get_user_by_offer_id($offer_id){
			//query to fetch user data
			$sql_query=mysql_query("SELECT * from user u inner join offering of on offer_id='$offer_id' && u.user_id = of.user_id");
			//getting user data array
			$row2 = mysql_fetch_array($sql_query);
			$column=0;
			//storing data in data array
			$data[$column]=$row2['name'];
			$data[$column+1]=$row2['email'];
		    $data[$column+2]=$row2['linkedin'];
		    $data[$column+3]=$row2['about'];
		    $data[$column+4]=$row2['picture'];
		    $data[$column+5]=$row2['paypal'];
		    return($data);
		}

		//get user data using order_id
		public function get_user_by_order_id($order_id){
			//query to fetch data
			$sql_query=mysql_query("SELECT * from user u inner join orders oe on offer_id='$order_id' && u.user_id = oe.user_id");
			//getting user data array
			$row2 = mysql_fetch_array($sql_query);
			$column=0;
			//storing data in data array
			$data[$column]=$row2['name'];
			$data[$column+1]=$row2['email'];
		    $data[$column+2]=$row2['linkedin'];
		    $data[$column+3]=$row2['about'];
		    $data[$column+4]=$row2['picture'];
		    $data[$column+5]=$row2['paypal'];
		    return($data);
		}
}

?>