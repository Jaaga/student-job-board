<?php
// Create connection
$con=mysqli_connect("localhost","root","","sjb1");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

function NewUser()
{
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password =  $_POST['pass'];
    $query = "INSERT INTO student (name,email,pass) VALUES ('$username','$email','$password')";
    $data = mysql_query ($query)or die(mysql_error());
    if($data)
    {
    echo "YOUR REGISTRATION IS COMPLETED...";
    }
}
 
function SignUp()
{
if(!empty($_POST['user']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
    $query = mysql_query("SELECT * FROM student WHERE name = '$_POST[name]' AND pass = '$_POST[pass]'") or die(mysql_error());
 
    if(!$row = mysql_fetch_array($query) or die(mysql_error()))
    {
        newuser();
    }
    else
    {
        echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
    }
}
}
if(isset($_POST['submit']))
{	echo "it is working";
    SignUp();
}



mysqli_close($con);
?>