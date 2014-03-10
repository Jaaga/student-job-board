<?php
        include('common.php');

    //getting value from session

	 function getuserdata()
        {                
            $userid = $_SESSION['userid'];
            $result = mysql_query("SELECT * from user  where user_id=$userid ");  
        	$row1 = mysql_fetch_array($result);                           
        	return array($row1['picture'],$row1['name']);      
    	}

    	function getofferings()
    	{               
            $userid = $_SESSION['userid'];
            $sql_result=mysql_query("SELECT *  FROM offering where user_id =$userid "); 
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
          
       
        



