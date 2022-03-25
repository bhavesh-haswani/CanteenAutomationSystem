<?php
$con=mysqli_connect("127.0.0.1:3308","root","","canteen_db");
$id=$_POST["ItemID"];
$in=$_POST["ItemName"];
$ip=$_POST["Price"];
$qry="update menuitems set ItemName='$in', Price=$ip where MenuItemID=$id";
if (mysqli_query($con,$qry)==true)
{
      echo "<script> alert('Record updated');</script>";
      echo "<script> window.location='../admin.php';</script>";
}
?>