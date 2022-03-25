<?php
//session_start();
session_start();
if (!isset($_SESSION['username'])) {
  header('location:../Signinout/login.php');
} else {
?>
<html>
<head>
<title>MODIFTY FOOD ITEM</title>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<style>		
		html, body {
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
                  text-decoration: none;
                  margin-left:-120px;
                  
                  margin-top:10px;
            }

		header {
			padding-top: 2px;
			padding-bottom: 2px;
			min-height: 80px;
			background-color: #0d98ba;

			text-align: inline;
		}

		header a {
			
			color: white;
                  text-decoration: none;

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



		header a:hover{
			background-color: rgb(109, 109, 187);
			/*grey*/
			padding: 10px 10px 10px 10px;
		}

		header ul {
			padding: 0;
		}

		header #branding {
			float: left;
			margin-top: 20px;
			margin-left: -100px;
		}

		header #branding h2 {
			margin: 0;
			display: inline;
			white-space: nowrap;
		}

            .button:hover {			
			/*border: 1px solid #16d312;		/*green border*/
			color: black;
		}

</style>
</head>
<header>
		<div class="container">
			<div id="branding">
				<h2><a href="../index.html">Canteen Automation System</a></h2>
			</div>
			<nav style="margin-top:10px; margin-right:-18%">
				<ul>
                              <!-- <li><a style="text-decoration:none;" href="placeorder.php" id="place_order">Place Order</a></li> -->
					<!-- <li><a style="text-decoration:none;" href="../Signinout/login.php">Log out</a></li> -->
          <li><a style="text-decoration:none;" href="../../Signinout/logout.php">Log out</a></li>
					<li><a style="text-decoration:none; margin-right:-50px;" href="../admin.php">back</a></li>
                              
					<!-- <li><a style="text-decoration:none; " href="../Signinout/register.php">Create an account</a></li> -->
                        </ul>
			</nav>
		</div>
	</header>
    <table class="table">
<thead>
    <tr>
<th>ID</th>
<th>Description</th>
<th>Price</th>
<th>ACTION </th>
</tr></thead><tbody>
<?php
$con=mysqli_connect("127.0.0.1:3308","root","","canteen_db");
$qry="select * from menuitems";
$recset=mysqli_query($con,$qry);
while($row=mysqli_fetch_array($recset))
{
    /*if ($i%2==0)
      {
        echo "<tr bgcolor='#F5F5F5'><td>"; //#ffccff
      }
    else
      {      
        echo "<tr bgcolor='#FFFAFA'><td>"; //ff99ff
      }*/
      echo "<td>";
      echo $row["MenuItemID"];
      echo "</td>";
      echo "<td>";
      echo $row["ItemName"];       
      echo "</td>";
      echo "<td>";
      echo $row["Price"];
       
      echo "</td>";
      $ItemID=$row["MenuItemID"];
      echo "<td>";
      echo "<a href='DeleteMenuItem.php?key=$ItemID'>DELETE</>";//REM
      echo "</td>";
      echo "<TD><a href='modifyitems.php?key=$ItemID'>MODIFY</>";
      echo "</td></tr>";
      //$i++;
}      
?>
</body>
</table>
</html>
<?php
}
?>