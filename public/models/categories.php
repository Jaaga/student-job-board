<!-- models for the cateogory-->

<?php 
	
	
	class category{
		//function to get offering by user_id

		public function search_by_category($category){

			$con = create_connection();
			//selecting offering table for particular user
			$sql_query= "SELECT * FROM offer_category INNER JOIN category ON offer_category.category_id=category.category_id INNER JOIN offering ON offer_category.offer_id=offering.offer_id WHERE offer_category.category_id='$category' ";
		
			//storing query value in result
			$sql_result = mysqli_query($con,$sql_query) or die("Couldn't Execute Query");
			//fetching data as an array from database
	
			//for loop to store data in 2-D array

	//		while($rows = mysqli_fetch_array($sql_result))
			if(mysqli_num_rows($sql_result)<1)
				{$noSearchFound=True;
					return Null;
				 }
				 				 $row2=mysqli_fetch_array($sql_result);

				for($row=0;$row<mysqli_num_rows($sql_result);$row++)
	                { 
	                            
	                    $data[$row][0] = $row2['offer_id'];
						$data[$row][1] = $row2['picture'];
						$data[$row][2] = $row2['title'];
						$data[$row][3] = $row2['description'];
						$data[$row][4] = $row2['date'];
						$data[$row][5] =$row2['user_id'];
	                    				 $row2=mysqli_fetch_array($sql_result);

	                            
	                }
			
				
		//returning the array
		return $data;


		}


			public function search_by_query($search){

			$con = create_connection();
			//selecting offering table for particular user
			$sql_query= "SELECT * FROM offering INNER JOIN offer_category ON offer_category.offer_id=offering.offer_id INNER JOIN category ON offer_category.category_id=category.category_id WHERE offering.title LIKE '%$search%' OR offering.description LIKE '%$search%'" ;

		
			//storing query value in result
			$sql_result = mysqli_query($con,$sql_query) or die("Couldn't Execute Query");
			//fetching data as an array from database
	
			//for loop to store data in 2-D array

	//		while($rows = mysqli_fetch_array($sql_result))
			if(mysqli_num_rows($sql_result)<1)
				{$noSearchFound=True;
					return Null;
				 }

				 $row2=mysqli_fetch_array($sql_result);

				for($row=0;$row<mysqli_num_rows($sql_result);$row++)
	                { 
	                            
	                    $data[$row][0] = $row2['offer_id'];
						$data[$row][1] = $row2['picture'];
						$data[$row][2] = $row2['title'];
						$data[$row][3] = $row2['description'];
						$data[$row][4] = $row2['date'];
						$data[$row][5] =$row2['user_id'];
	                    				 $row2=mysqli_fetch_array($sql_result);

	                            
	                }
			
				
		//returning the array
		return $data;

		}



		public function find_category_by_offerid($offerid){

			$con = create_connection();
			//selecting offering table for particular user
			$sql_query= "SELECT category.name FROM category INNER JOIN offer_category ON offer_category.category_id=category.category_id WHERE offer_category.offer_id='$offerid'";

		
			//storing query value in result
			$sql_result = mysqli_query($con,$sql_query) or die("Couldn't Execute Query");
			//fetching data as an array from database
			$cat=mysqli_fetch_array($sql_result);
		return $cat;


		}
	}
?>