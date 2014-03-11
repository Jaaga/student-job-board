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
 $mysqli=new mysqli("localhost","root","root1","sjb");
 return $mysqli;
 }

 public function loginValid($username,$password)
 {
   echo "test";
  $mysqli=$this->dbConnect();
  $query=$mysqli->query("select * from  user where email = '".$username."' AND pass='".$password."'");
  // echo "select * from  'user' where email = $username AND pass=$password";
  //$query=mysqli_query($mysqli,"select * from  'user' where email = 'ansal' AND pass='ansal' ");
  

 $result=$query->fetch_array();
  echo $result;
  return $result;
   //return true;
 }
 


}



?>