<!DOCTYPE html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">

/*function Validate(){
if (document.MyForm.nm.value == "")
      {
        alert("Username required");
        document.MyForm.nm.focus();
        return false;
      }
}*//*
</script>
</head>
<table class="table"> <!-- class="table"-->
<thead>           
<tr>
            <th>NO</th>
                <th>Order ID</th>
                <th>Item ID</th>
                <th>Quantity Date</th>
                <th>Amount Paid</th>
                <th>Discount Discount</th>  
</tr>
</thead> 
<BODY>
<!--<div class="row" style="height: 20%; ">
      <div class="col-12"></div>

    </div>
    <span class="align-middle">
      <div class="row">
          <div class="col">
              </div>-->
              <div class="row" style="height: 20%; ">
      <div class="col-12"></div>

    </div>
    <span class="align-middle">
      <div class="row">
        <div class="col">

        </div>
<?php
$con=mysqli_connect("127.0.0.1:3308","root","","canteen_db");

$qry="SELECT max(Orderid) AS maxid FROM foodorder";
 $oid=0;
$run=mysqli_query($con,$qry);
while($rows=mysqli_fetch_array($run))
{
    $oid=$rows[0]+1;
    //echo $oid;?><br><?php
}


$qmaxno="SELECT max(orderid) AS maxnox FROM orderdetails";
$noid=0;
$run1=mysqli_query($con,$qmaxno);
while($row1=mysqli_fetch_array($run1))
{
    $noid=$row1[0]+1;
    //echo $noid;?><br><?php
}

$qitemid="SELECT nox,orderid,itemid,quantity,amount,discount FROM orderdetails WHERE orderid=$noid-1";
$run2=mysqli_query($con,$qitemid);
if(mysqli_query($con,$qitemid)==true)
{
    //echo "run2 working";
    //$row2=mysqli_fetch_array($run2);
    //echo gettype($row2);

    while($row3=mysqli_fetch_array($run2))
    {
        //echo "run2 working";
         echo "<tr>";
         echo "<td>";
         echo $row3["nox"];
        //$NOQ= $row3["nox"];
         echo "<td>";
         echo $row3["orderid"];
        //$OID = $row3["orderid"];
         echo "</td>";
         echo "<td>";
         echo $row3["itemid"];
        //$ITID= $row3["itemid"];
         echo "</td>";
         echo "<td>";
         echo $row3["quantity"];
        //$QTY= $row3["quantity"];
         echo "</td>";
         echo "<td>";
         echo $row3["amount"];
        //$AMT= $row3["amount"];
         echo "</td>";
         echo "<td>";
         echo $row3["discount"];
        //$DIS= $row3["discount"];
         echo "</td>";
         echo "</tr>";
         echo "</td>";
        ?>       
        
    <?php    
    }
    ?></tbody>
    </table><a href="" styleclass="btn btn-primary" name='submit' value='PAY'></a><?php
}
// else{
//     echo "qitemid no working";
// }
?>

</html>