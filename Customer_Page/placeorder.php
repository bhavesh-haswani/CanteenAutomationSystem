<head>
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style>
      html,
		body {
			height: 100%;
			width: 100%;
			margin: 0;
			padding: 0;
		}

		body {
			font-family: Arial, Helvetica, sans-serif;
		}

		#branding a {
			/*color:white;*/
			padding: 1%;
		}

		header {
			padding-top: 2px;
			padding-bottom: 2px;
			min-height: 80px;
			background-color: #0d98ba;

			text-align: inline;
		}

		header a {
			text-decoration: none;
			color: white;

		}

		header li {
			float: left;
			display: inline;
			padding: 0 20px 0 20px;
		}

		/*header nav{
			margin-top: 0px;
			padding:20px 20px 20px 20px;
		}*/

		header nav {
			float: right;
			/*margin-top: 0px;*/
			/*margin-top:15px;*/
			padding: 20px 20px 20px 20px;
			text-transform: uppercase;
		}

		header nav a {
			padding: 10px 10px 10px 10px;
		}

		header li a:hover {
			background-color: rgb(109, 109, 187);
			/*grey*/
			padding: 10px 10px 10px 10px;
		}

		header ul {
			padding: 0;
		}

		header #branding {
			float: left;
			margin-top: 30px;
			margin-left: 20px;
		}

		header #branding h2 {
			margin: 0;
			display: inline;
			white-space: nowrap;
		}
</style>
</head>
<header>
		<div class="container">
			<div id="branding">
				<h2><a style="margin-left:-250px; " href="../index.html">Canteen Automation System</a></h2>
			</div>
			<nav>
				<ul>
					<li><a style="text-decoration:none; margin-left:60px;" href="../Signinout/logout.php">Log out</a></li>
					<li><a style="text-decoration:none; margin-right:-50px;" href="../Customer_Page/dashboard.php">back</a>
					<!-- <li><a href="../Signinout/register.php">Create an account</a></li> -->
				</ul>
			</nav>
		</div>
	</header>
<form method="POST" action ="SaveBill.php">
<table class="table" align="center">
<tr>
<th>Item ID</th>
<th>Item Name</th>
<th>Quantity</th>
<th>Price</th>
<th>Amount</th>
<th>Discount</th>

</tr>
<?php
error_reporting(0);
session_start();
$con=mysqli_connect("127.0.0.1:3308","root","","canteen_db");
$i=1;
//$ttx=explode(",",$_SESSION['cart']);
//echo "$ttx[0]";

if($ttx[0]="")
{
      echo "<script>alert('No order selected!');</script>";
}
else{
      $tt=explode(",", substr($_SESSION['cart'],1));    //username
      /*foreach($tt as $item){
      {
            ECHO "$item";
            //$rows = $tt;
            $qry6="SELECT * FROM menuitems WHERE MenuItemID='$item'";
            $res6=mysqli_query($con, $qry6);
            $rows = mysqli_fetch_array($res6);
            echo $rows["MenuItemID"];
                  echo "</td>";
                  echo "<td>";
                  echo $rows["ItemName"];
                  echo "</td>";
                  echo "<td>";
      /*VALUE=1*//* echo '<input type="number" name="Quantity[]" value="1" size=5 style="text-align: center;"';
                  echo "</td>";
                  echo "<td>";
                  echo '<input type="number" name="Price[]" value="'. $rows["Price"].'" size=5 style="text-align: center;" disabled>';
                  echo "</td>";
                  echo "<td>";
                  echo $rows["Price"];
                  echo "</td>";
                  echo "<td>";
      }
      }*/
      /*echo count($tt);*//*
      foreach ($tt as $c){
            *//*for($xcount = 0; $xcount < count($tt); $xcount++)
            {?><br><?php
                  echo "$xcount";?><br><?php
                  echo $tt[$xcount];?><br><?php
            }*/
            /*echo "$c"?><br><?php
            
      }*/

      $amount=0;
      //official
      foreach ($tt as $item)
      //for($xcount = 0; $xcount < count($tt); $xcount++)
      {      
            //$qry='SELECT * FROM menuitems WHERE MenuItemID="$item"';
            //$run=mysqli_query($con,$qry);
            $qry6="SELECT * FROM menuitems WHERE MenuItemID='$item'";
            $res6=mysqli_query($con, $qry6);
            //$rows = mysqli_fetch_array($res6);
            // while($rows=mysqli_fetch_array($res6))
            
            // error_reporting(0);
            // for($x9=0;$x9<(count($tt));$x9++)
            // for($x9=0;$x9<(count($item));$x9++)
            
            while($rows=mysqli_fetch_array($res6))
            {//echo"$rows[4]";//1
                  if ($i%2==0)
                  {
                        echo "<tr bgcolor='#F5F5F5'><td>"; //#ffccff
                  }
                  else
                  {      
                        echo "<tr bgcolor='#FFFAFA'><td>"; //ff99ff
                  }
                  $i++;  
                  echo $rows["MenuItemID"];
                  echo "</td>";
                  echo "<td>";
                  echo $rows["ItemName"];
                  echo "</td>";
                  echo "<td>";
      /*VALUE=1*/ //echo '<input type="number" name="Quantity[]" value="1" size=5 style="text-align: center;"';
                  /*for ($xcount = 0; $xcount <= 10; $xcount++){
                  if($tt[]){}}*/
                  echo '<input type="number" name="Quantity[]" value="1" size=5 style="text-align: center;"';     
                  echo "</td>";
                  echo "<td>";
                  echo '<input type="number" name="Price[]" value="'. $rows["Price"].'" size=5 style="text-align: center;"';
                  echo "</td>";
            /*echo "<td>";
                  echo '<input type="number" name="Price" value="21" size=5 style="text-align: center;" disabled>';
                  echo "</td>";*/
                  echo "<td>";
                  echo $rows["Price"];
                  $p= $rows["Price"];                  
                  echo "</td>";
                  echo "<td>";
                  echo '<input type="number" name="Discount[]" value="'. $rows["Discount"].'" size=5 style="text-align: center;"';
                  //$d=  $rows["Discount"];          
                  echo "</td>";    
                  //$amount=$amount+$p-$d;
            }
            //echo "$amount";
            
      }  
}    
?>
</table>
<br><br>
<center>
<input type="submit" name="submit" class="btn btn-outline-success" Value="Place Order"></button>
<input type="submit" name="clear" class="btn btn-outline-success" Value="clear"></button>
</center>
</form>
