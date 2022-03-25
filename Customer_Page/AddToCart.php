<?php
      error_reporting(0);
      $dd=$_GET['ItemID'];
      /*echo "$dd";*/
      /*if($dd!="")
      {*/
            
            session_start();        
            $_SESSION['cart']= $_SESSION['cart'].','.$dd;
            echo "<script>alert('".$dd." added');</script>";
         //   echo $_SESSION['cart'];
            header('refresh:0;url=dashboard.php');
      /*}*/
?>