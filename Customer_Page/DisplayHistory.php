<?php
//session_start();
session_start();
if (!isset($_SESSION['username'])) {
    header('location:../Signinout/login.php');
} else {

    $server = "127.0.0.1:3308";
    $username = "root";
    $password = "";
    $database = "canteen_db";

    $conn = mysqli_connect($server, $username, $password, $database);

    if (!$conn)  //bh
    {
        die("Connection Failed:" . mysqli_connect_error());
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Display History</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>


    <table class="table">
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Order Date</th>
                <th>Amount Paid</th>
                <th>Total Discount</th>
            </tr>
        </thead>
        <tbody>

            <?php
            /*$x=$_SESSION['username'];
    *//*
    $qry1="select * from foodorder";
    $row1=mysqli_fetch_array($conn,$qry1);
    $y=$row1["UserName"];
    echo gettype($y);*/
            /*
    $z=mysqli_query($conn,$qry);*/

            $con = mysqli_connect("127.0.0.1:3308", "root", "", "canteen_db");
            /*$qry="SELECT Orderid,OrderDate,UserName,AmtPaid,todiscount FROM foodorder";
    
    $result=mysqli_query($con,$qry);*/
            //$row=mysqli_fetch_array($run);
            $x = $_SESSION['username'];
            //$name=$row['UserName'];

            $i = 1;
            /*while($row=mysqli_fetch_array($result))
    {
        $name1[$i]="$row[UserName]";
        //echo "$name1[$i]";?><?php
        if($name1[$i] = $x)
        {
            $nn=$name1[$i];
        }
        $i++;
    }

    echo "$nn";
    echo gettype($nn);
    echo "$x";
    echo gettype($x);*/

            $qry6 = "SELECT Orderid, OrderDate, UserName, AmtPaid, todiscount FROM foodorder WHERE UserName='$x'";
            $result6 = mysqli_query($con, $qry6);
            while ($row6 = mysqli_fetch_array($result6)) {
                echo "<tr>";
                echo "<td>";
                echo $row6["Orderid"];
                echo "</td>";
                echo "<td>";
                echo $row6["OrderDate"];
                echo "</td>";
                //echo "<td>";
                //echo $row6["UserName"];
               // echo "</td>";
                echo "<td>";
                echo $row6["AmtPaid"]-$row6["todiscount"];
                echo "</td>";
                echo "<td>";
                echo $row6["todiscount"];
                echo "</td></tr>";
            
            }
            
            /*echo "$name";
    $i = 1;
    while($row1=mysqli_fetch_array($run))
    {
        $name=$row['UserName'];
        if($x == $name){        
        echo "<td>";
        echo $row["Orderid"];
        echo "</td>";
        echo "<td>";
        echo $row["OrderDate"];
        echo "</td>";
        echo "<td>";
        echo $row["AmtPaid"];
        echo "</td>";
        echo "<td>";
        echo $row["todiscount"];
        echo "</td>";        
        }
        $i++;
    }*/
                ?>

            </tbody>
    </table>
    </html>
<?php
}
?>