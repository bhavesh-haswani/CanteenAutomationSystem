<?php
$con=mysqli_connect("127.0.0.1:3308","root","","canteen_db");
$id=$_GET["key"];
$qry="delete from menuitems where MenuItemID=$id";
if (mysqli_query($con,$qry)==true)
{
      echo "<script> alert('Item Deleted');</script>";
      echo "<script> window.location='../admin.php';</script>";
}
?>