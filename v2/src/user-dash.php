<?php
	 function getuserdata()
        {	
        $con1 = mysql_connect("localhost","root","") or die("Couldn't select DB");
        $db = mysql_select_db("sjb", $con1) or die("Couldn't select database."); 
        $sql = "SELECT * from user  where user_id=2 ";
        $result = mysql_query($sql,$con1) or die(mysql_error());  

        	while($row1 = mysql_fetch_array($result))                           
        	{	
        		return array($row1['picture'],$row1['name']);
            }
    	}

    	function getofferings()
    	{
    		$con2 = mysql_connect("localhost","root","") or die("Couldn't select DB"); 
        	$db = mysql_select_db("sjb", $con2)  or die("Couldn't select database.");  

    		       $query = "SELECT *  FROM offering where user_id =2 limit 4";                   
        $sql_result=mysql_query($query,$con2) or die("Couldn't execute query 1."); 

                      while($row2=mysql_fetch_array($sql_result))
                      {

                        $arr= array(array($row2['picture'],$row2['title']));
                    }
                    $arr2=implode($arr);
                    echo $arr2;
                    return $arr;
   
    	}

    	function getorders()
    	{

    	}
    


    	?>
          
       
        



