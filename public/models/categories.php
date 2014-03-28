<?php 
	
	
	class category{
		//function to get offering by user_id

		public function search_by_category($category){

			$con = create_connection();
			//selecting offering table for particular user
			$sql_query= "SELECT * FROM offer_category INNER JOIN category ON offer_category.category_id=category.category_id INNER JOIN offering ON offer_category.offer_id=offering.offer_id WHERE offer_category.category_id='".$category."' ";
		
			//storing query value in result
			$sql_result = mysqli_query($con,$sql_query) or die("Couldn't Execute Query");
			//fetching data as an array from database
	
			//for loop to store data in 2-D array

	//		while($rows = mysqli_fetch_array($sql_result))
				foreach ($sql_result as $rows)
				{
					$row[]=array('offerid'=>$rows['offer_id'],'title'=>$rows['title'],'description'=>$rows['description'],'picture'=>$rows['picture']);
				}
			
				
		//returning the array
		return $row;


		}
	}
?>