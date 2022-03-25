<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('location:../../Signinout/login.php');
} else {
      
?>
<HTML>
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



		a:hover{
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
<BODY>
  <!-- <div class="container" style="background-color:#E6D3F2;"> -->
    <!-- <div class="row" style="height: 5%; background-color:#D193F7; padding:40px;">
      <div class="col-12"></div>

    </div>
    <div class="row" style="height: 5%;background-color:#480673; color:#ffffff;">
      <div class="col-8">
        <h3>Canteen Automation System</h3>
      </div>
      <div class="col-2"><a href="dashboard.php">Log In to Order</a></div>
      <div class="col-2"><a href="admin.php">Admin Login</a></div>
    </div> -->
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
					<li><a style="text-decoration:none; margin-right:-50px;" href="modify.php">back</a></li>
                              
					<!-- <li><a style="text-decoration:none; " href="../Signinout/register.php">Create an account</a></li> -->
                        </ul>
			</nav>
		</div>
	</header>
    <div class="row" style="height: 20%; ">
      <div class="col-12"></div>

    </div>
    <span class="align-middle">
      <div class="row">
        <div class="col">

        </div>
        <?php
        $con = mysqli_connect("127.0.0.1:3308", "root", "", "canteen_db");
        $id = $_GET["key"];
        $qry = "select * from menuitems where MenuItemID=$id";
        $run = mysqli_query($con, $qry);
        while ($rows = mysqli_fetch_array($run)) {
        ?>

          <div style="background-color:#ffffff; padding:40px; border-style: solid; border-width: thin; box-shadow: 10px 10px 9px grey; "><!-- margin-right:40% -->
            <form method="POST" action="updateitems.php">
              <div class="form-group">
                <label for="ID">Item ID</label>
                <input type="string" class="form-control" id="id" aria-describedby="emailHelp" name="ItemID" value="<?php echo $rows['MenuItemID']; ?>">
              </div>
              <div class="form-group">
                <label for="Name">Item Name</label>
                <input type="string" class="form-control" id="Name" placeholder="Item Name" name="ItemName" value="<?php echo $rows['ItemName']; ?>">

              </div>
              <div class="form-group">
                <label for="Price">Price</label>
                <input type="string" class="form-control" id="Price" placeholder="Price" name="Price" value="<?php echo $rows['Price']; ?>">

              </div>
              <button type="submit" class="btn btn-primary">Update Item</button>
            </form>
          </div>
        <?php } ?>
        <div class="col -md-auto">

        </div>
      </div>
    </span>
    <div class="row" style="height: 20%; ">
      <div class="col-12"></div>

    </div>
  <!-- </div> -->
</BODY>

</HTML>
<?php
} ?>