<?php 
	

	
	class signUp
{
		//function to get offering by user_id
		public function is_signedUp($email)
		{
			//creating connection
			$con = create_connection();
			//selecting offering table for particular user
			$sql_query = "SELECT * FROM user where email ='".$email."'";
			//storing query value in result
			$sql_result = mysqli_query($con,$sql_query) or die("Couldn't Execute Query");
			//fetching data as an array from database
			$rowcount=mysqli_num_rows($sql_result);
			
			//for loop to store data in 2-D array
		//returning the array
			if($rowcount==0)
				return FALSE;
			else 
				return TRUE;
		}


		public function new_signup($name, $email, $password)
		{
			//creating connection
			$con = create_connection();
			//selecting offering table for particular user
			$sql_query = "INSERT INTO user (name,email,pass,picture) VALUES ('".$name."','".$email."','".$password."','"."images/boy.png"."')";
			//Inserting query value in result
			$sql_result = mysqli_query($con,$sql_query) or die("Couldn't Execute Query");
			
			$sql_query_for_userid="SELECT user_id FROM user WHERE email='".$email."'";

			$sql_result_for_userid = mysqli_query($con,$sql_query_for_userid) or die("Couldn't Execute Query");
			$send=mysqli_fetch_array($sql_result_for_userid);
			$send_userId = $send['user_id'];
			return $send_userId;
		
		}

		
}

?>