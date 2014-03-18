<?php
session_start();
if($_SESSION['uniq_id']=='')
{
$_SESSION['uniq_id']=uniqid();
}
$con=mysql_connect("localhost","root","") or die(mysql_error());
$db=mysql_select_db("sjb") or die(mysql_error());

?>
