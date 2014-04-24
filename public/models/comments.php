<?php 
class comments{
	public function get_comments($offerid){

		$con=create_connection();
		$sql_query = "SELECT * FROM comment WHERE offer_id='".$offerid."' ORDER BY time";
			//storing query value in result
		$sql_result = mysqli_query($con,$sql_query) or die("Couldn't Execute Query");

		$rowcount=mysqli_num_rows($sql_result);

		$comment=mysqli_fetch_array($sql_result);


					for($row=0;$row<$rowcount;$row++)
					{

					$data[$row][0] = $comment['offer_id'];
					$data[$row][1] = $comment['user_id'];
					$data[$row][2] = $comment['comment'];
					$data[$row][3] = $comment['time'];
					$comment=mysqli_fetch_array($sql_result);

					}
					return $data;


	}
	public function post_comments($userid,$offerid,$comment){
					$con = create_connection();
			//selecting comments table for particular user


			$sql_query = "INSERT INTO comment(user_id,offer_id,comment,time) VALUES ('$userid','$offerid','$comment',NOW())";
			//storing query value in result
			$sql_result = mysqli_query($con,$sql_query) or die("Couldn't Execute Query");

	}
	public function no_of_comments($offerid){
			$con=create_connection();
			$sql_query = "SELECT COUNT(*) from comment where offer_id='$offerid'";
			$sql_result = mysqli_query($con,$sql_query) or die("Couldn't Execute Query");
			$number=mysqli_fetch_array($sql_result);
			return $number;

	}
}
?>