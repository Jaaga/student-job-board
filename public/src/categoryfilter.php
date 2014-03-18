<?php 
include('common.php');
$userid = $_SESSION['userid'];
	
	  
	
	function cat_filter($var){
		if ($var==0) 
    {
                  $sql=mysql_query("SELECT DISTINCT * FROM offering ")or die(mysql_error());

    }
    else
    {
                  $sql=mysql_query("SELECT DISTINCT * FROM offering o  inner join offer_category oc on o.offer_id=oc.offer_id where oc.category_id='$var'")or die(mysql_error());

    } 

				$col=0;
	            $row2=mysql_fetch_array($sql);
                for($row=0;$row<10;$row++)
                { 
                            
                    $data[$row][$col] = $row2['picture'];
                    $data[$row][$col+1]=$row2['title'];
                    $row2=mysql_fetch_array($sql);
                            
                }
                return($data);
               
           }    

?>