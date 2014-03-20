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
			$sql_query=mysqli_query($con,"SELECT user.name,user.email,user.linkedin,user.about,user.picture,user.paypal,user.user_id,offering.offer_id,offering.user_id from user  inner join offering  on offering.offer_id='$offer_id' && user.user_id = offering.user_id");
			//getting user data array
			$row2 = mysqli_fetch_array($sql_query);
			//storing data in data array
			$data[0]=$row2['name'];
			$data[1]=$row2['email'];
		    $data[2]=$row2['linkedin'];
		    $data[3]=$row2['about'];
		    $data[4]=$row2['picture'];
		    $data[5]=$row2['paypal'];
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
		
		public function get_offers_by_offer_id($offer_id){

			$con = create_connection();
			//selecting offering table for particular user
			$sql_query = "SELECT * FROM offering WHERE offer_id=$offer_id";
			//storing query value in result
			$sql_result = mysqli_query($con,$sql_query) or die("Couldn't Execute Query");
			//fetching data as an array from database
			$row2 = mysqli_fetch_array($sql_result);
			//for loop to store data in 2-D array
			for($row=0;$row<4;$row++)
				{
					$data[$row][0] = $row2['picture'];
					$data[$row][1] = $row2['title'];
					$data[$row][2] = $row2['offer_id'];
					$data[$row][3] = $row2['description'];
					$row2 = mysqli_fetch_array($sql_result);
				}
		//returning the array
		return ($data);


		}
}

?>





