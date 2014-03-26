<?php
		
	//users class
	class users{
		//get user data using user_id
		public function get_user_by_id($user_id){
			//creating connection
			$con = create_connection();
			//query to fetch user data
			$sql_query=mysqli_query($con,"SELECT * FROM user WHERE user_id=$user_id") or die("query is wrong");
			//getting user data array
			$row2=mysqli_fetch_array($sql_query);
		
			//storing data in data array
			$data[0]=$row2['name'];
			$data[1]=$row2['email'];
		    $data[2]=$row2['linkedin'];
		    $data[3]=$row2['about'];
		    $data[4]=$row2['picture'];
		    $data[5]=$row2['paypal'];
		    return($data);
		}

		//get user data using offer_id
		public function get_user_by_offer_id($offer_id){
			//creating connection
			$con = create_connection();
			//query to fetch user data
			$sql_query=mysqli_query($con,"SELECT user.user_id,user.name,user.email,user.linkedin,user.about,user.picture,user.paypal,user.user_id,offering.offer_id,offering.user_id from user  inner join offering  on offering.offer_id='$offer_id' && user.user_id = offering.user_id");
			//getting user data array
			$row2 = mysqli_fetch_array($sql_query);
			//storing data in data array
			$data[0]=$row2['name'];
			$data[1]=$row2['email'];
		    $data[2]=$row2['linkedin'];
		    $data[3]=$row2['about'];
		    $data[4]=$row2['picture'];
		    $data[5]=$row2['paypal'];
		    $data[6]=$row2['user_id'];
		    return($data);
		}

		//get user data using order_id
		public function get_user_by_order_id($order_id){
			//creating connection
			$con = create_connection();
			//query to fetch data
			$sql_query=mysqli_query($con,"SELECT * from user u inner join orders oe on offer_id='$order_id' && u.user_id = oe.user_id");
			//getting user data array
			$row2 = mysqli_fetch_array($sql_query);
			$column=0;
			//storing data in data array
			$data[0]=$row2['name'];
			$data[1]=$row2['email'];
		    $data[2]=$row2['linkedin'];
		    $data[3]=$row2['about'];
		    $data[4]=$row2['picture'];
		    $data[5]=$row2['paypal'];
		    return($data);
		}
		
}

?>





