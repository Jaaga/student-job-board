<?php
        include('common.php');

    //getting value from session

	 function getuserdata()
        {                $userid = $_SESSION['userid'];

        $con1 = mysql_connect("localhost","root","") or die("Couldn't select DB");
        $db = mysql_select_db("sjb", $con1) or die("Couldn't select database."); 
        $sql = "SELECT * from user  where user_id=$userid ";
        $result = mysql_query($sql,$con1) or die(mysql_error());  

        	while($row1 = mysql_fetch_array($result))                           
        	{	
        		return array($row1['picture'],$row1['name']);
            }
    	}

    	function getofferings()
    	{                $userid = $_SESSION['userid'];

    		$con2 = mysql_connect("localhost","root","") or die("Couldn't select DB"); 
        	$db = mysql_select_db("sjb", $con2)  or die("Couldn't select database.");  

    		$query = "SELECT *  FROM offering where user_id =$userid ";                   
            $sql_result=mysql_query($query,$con2) or die("Couldn't execute query 1."); 
            $row2=mysql_fetch_array($sql_result);
                $col=0;
                for($row=0;$row<4;$row++)
                { 
                            
                    $data[$row][$col] = $row2['picture'];
                    $data[$row][$col+1]=$row2['title'];
                    $row2=mysql_fetch_array($sql_result);
                            
                }
            return $data;
    	}
    	
?>
          
       
        



