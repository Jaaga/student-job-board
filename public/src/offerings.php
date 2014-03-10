<?php 
	
	class offering{
	
	include('common.php');

	public function get_offering()
	{
			//fetching user_id from session
			$userid = $_SESSION['user_id'];
			//selecting offering table for particular user
			$sql_query = "SELECT * FROM offering where user_id = userid";
			//storing query value in result
			$sql_result = mysql_query($sql_query,$con) or die("Couldn't Execute Query")
			//fetching data as an array from database
			$row2 = mysql_fetch_array($sql_result);
			//setting column
			$col = 0;
			//getting offering database
			for($row=0;$row<30;$row++)
			{
				$data[$row][$col] = $row2['offer_id'];
				$data[$row][$col+1] = $row2['picture'];
				$data[$row][$col+2] = $row2['title'];
				$data[$row][$col+3] = $row2['description'];
				$data[$row][$col+4] = $row2['date'];
				$row2 = mysql_fetch_array($sql_result);
			}
			//returning the array
			return ($data);
	}
}

?>