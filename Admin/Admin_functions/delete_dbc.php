<?php
$con=mysqli_connect("127.0.0.1:3308","root","","canteen_db");
$id=$_POST["abc"];
$qry="delete from menucategory where category=$id";
if (mysqli_query($con,$qry)==true)
{
      echo "<script> alert('Record Deleted');</script>";
      echo "<script> window.location='../admin.php';</script>";
}
?>