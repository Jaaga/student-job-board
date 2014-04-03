<?php 
	

	
	class logIn
{
		//fun8ction to get offering by user_id
		public function is_validUser($email,$password)
		{
			//creating connection
			$con = create_connection();
			$email= mysqli_real_escape_string($con, $email);
			$password = mysqli_real_escape_string($con, $password);
			//selecting offering table for particular user
			$sql_query = "SELECT pass, user_id, name FROM user where email ='".$email."' and pass='".$password."'";
			//storing query value in result

			$sql_result = mysqli_query($con,$sql_query) or die("Couldn't Execute Query");
			//fetching data as an array from database
			$rowcount=mysqli_num_rows($sql_result);
			
			//for loop to store data in 2-D array
		//returning the array
			if($rowcount==0)
			{
				return FALSE;
			}
			else 
			{
				$send=mysqli_fetch_array($sql_result);
				$_SESSION['userid']=$send['user_id'];
				$_SESSION['username']=$send['name'];
				return TRUE;
			}
		}


	/*	public static function loggedIn($email, $password)
		{
			//creating connection
			//selecting offering table for particular user
			$con = create_connection();
			$sql_query_for_userid="SELECT pass, user_id, name FROM user WHERE email='".$email."'";
		
			$sql_result_for_userid = mysqli_query($con,$sql_query_for_userid) or die("Couldn't Execute Query");
			$send=mysqli_fetch_array($sql_result_for_userid);
			$passwordChecker = $send['pass'];
			if ($password==$passwordChecker)
			{
				$send_userId=$send['user_id'];
				$send_username=$send['name'];
				session_start();
				$_SESSION['username']=$send_userId;
				$_SESSION['userid']=$send_username;
				return TRUE;
			}
			else{
				return FALSE;
			}
		
		}
*/
		
}

?>