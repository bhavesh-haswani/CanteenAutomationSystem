<?php
session_start();
if(isset($_POST['sub']))  
{ 
$server="127.0.0.1:3308";
$username="root";
$password="";
$database="canteen_db";

$conn=mysqli_connect($server, $username, $password, $database);
if(!$conn)
{die("Connection Failed:" .mysqli_connect_error());
}

if(isset($_POST['submit']))
{
   $checkbox1=$_POST['selected'];
   $chk="";
   foreach($checkbox1 as $chk1)
   {
      $chk .=$chk1.",";
   }
   $s=("insert into foodorder(FoodDetails) values('$chk')");
   $result=mysqli_query($conn,$s);
   $num=mysqli_num_rows($result);
   if ($result==1)  
      {  
         echo '<script>alert("Successfully")</script>';  
      }  
   else  
      {  
         echo '<script>alert("Failed To Insert")</script>';  
      }
   }
}
?>
