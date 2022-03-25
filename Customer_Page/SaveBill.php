<?php
$con=mysqli_connect("127.0.0.1:3308","root","","canteen_db");
session_start();
$tt=explode(",", substr($_SESSION['cart'],1));
error_reporting(0);
/*if($tt[0]="")
{
      echo "<script>alert('No order selected!');</script>";
}*/
//ECHO "$tt[0]";
//echo "$tt[1]";
//$qty=1;

$qty=$_POST['Quantity']; 
//echo "$qty[0]";
//echo count($qty);

$prc=$_POST['Price'];
$nam= $_SESSION['username'];
$billAmt=0;
$totaldisc=0;
$dis=$_POST['Discount'];
$qry="SELECT max(Orderid) AS maxid FROM foodorder";
$run=mysqli_query($con,$qry);

$qry1="SELECT max(no) AS maxoid FROM orderdetails";
$run1=mysqli_query($con,$qry1);

$oid=0;
$jid=0;


if(isset($_POST['submit'])){
      while ($rows=mysqli_fetch_array($run))
            {
                        $oid=$rows[0]+1;
            }
            //echo "$oid";
            $cnt =0;

            while ($rows1=mysqli_fetch_array($run1))
            {
                        $jid=$rows1[0]+1;
            }
            //echo "$jid";

      for($cnt=0;$cnt<count($qty);$cnt++,$jid++)
      //for($cnt=0;$cnt<1;$cnt++)
      {
            /*if($tt[$cnt]=$tt[$cnt+1])
            {
                  
            }*/
            //echo "step befor qry2";?><br><?php
            echo "$dis[0]";
            $qry2="INSERT INTO orderdetails(nox,orderid,itemid,quantity,amount,discount) values($jid,$oid,".$tt[$cnt].",".$qty[$cnt].",".$qty[$cnt]*$prc[$cnt].",'$dis[$cnt]')";
            mysqli_query($con,$qry2);
            $totaldisc=$totaldisc+$dis[$cnt];
            $billAmt=$billAmt+$qty[$cnt]*$prc[$cnt]-$dis[$cnt];
            //echo "step after qry2";
            echo "$dis[$cnt]"?><br><?php
            echo"$billAmt";?><br><?php
            echo"$totaldisc";
            /*if (mysqli_query($con,$qry2)==TRUE)
            {
                  echo '<script> alert("order details updated");</script>';
            }
            else{
                  echo '<script> alert("order details not updated");</script>';
            }*/
      }
      echo"$billAmt";?><br><?php
      echo"$totaldisc";
      
      $qry3="Insert into foodorder values ($oid,'".date("Y/m/d")."','".$nam."','$billAmt','$totaldisc')";
      if (mysqli_query($con,$qry3)==TRUE)
      {
            // echo '<script> alert("Order Placed Successful");</script>';
            echo '<script> alert("food order updated");</script>';
            /*if (mysqli_query($con,$qry2)==TRUE)
            {
            echo '<script> alert("order details updated");</script>';
            }*/
            unset($_SESSION['cart']);
            header('refresh:0;url=dashboard.php');
      }
      else
      {
            echo '<script> alert("Please try again");</script>';
            header('refresh:0;url=placeorder.php');
      }
}
elseif(isset($_POST['clear'])){
      unset($_SESSION['cart']);
      header('refresh:0;url=dashboard.php');
}
?>