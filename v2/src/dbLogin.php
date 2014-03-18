<?php
session_start();
class dbLogin
{ 
	  
 public  $tableName;
 
 public function  __construct(){

   $this->tableName = 'user';


 }
 public function dbConnect()
 {
  $con=mysqli_connect("localhost","root","123","sjb");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

 return $con;
 } 

 
public function  loginValid($username, $password)
{

$con=$this->dbConnect();
// Check connection

$result = mysqli_query($con,"SELECT * FROM user where email='$username' and pass='$password'");
$row = mysqli_fetch_array($result);

//while($row = mysqli_fetch_array($result))
 // {
//  echo $row['email'] . "yoyo " . $row['pass'];
 // echo "<br>";
 // }

mysqli_close($con);
if($password==$row['pass'])
{

return true;
} 
return false;
}

}



?>
