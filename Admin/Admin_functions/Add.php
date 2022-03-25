<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('location:../../Signinout/login.php');
} else {
?>

<html>

<head>
    <title>ADD MENU</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script></script>
    <style>
       /* * {
            box-sizing: border-box;
        }*/

        .column1 {
            float: left;
            width: 50%;
            padding: 10px;
            height: 80vh;
        }

        .column2 {
            float: right;
            width: 50%;
            padding: 10px;
            height: 80vh;
        }

        body {
            background-size: cover;
            background-position: center;
            font-family: Arial, Helvetica, sans-serif;/**/

        }



        /*section{
            content: "";
            display: table;
            clear: both;
        }*/
        	
		/*html, body {
			height: 100%;
			width: 100%;
			margin: 0;
			padding: 0;
                  
		}*/

		/*body {
			font-family: Arial, Helvetica, sans-serif;
		}*/           

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
    </style>
</head>

<body>
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
    <form method="POST" action="saveitem.php" enctype="multipart/form-data">

        <section>
            <div class="column1">
                <div>
                    <label style="margin-left: 20%; margin-top:20%; width:60%;" for="InputName">Select Food category </label>
                    <select style="margin-left: 20%; width:60%;" class="custom-select mr-sm-2" name="Category">
                        <option selected>Choose...</option>
                        <?php
                        $con = mysqli_connect("127.0.0.1:3308", "root", "", "canteen_db");
                        $qry = "select category, catdesc from menucategory";
                        $run = mysqli_query($con, $qry);
                        while ($rows = mysqli_fetch_array($run)) {

                            echo "<option value=" . $rows['category'] . ">" . $rows['catdesc'] . "</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="column2">
                <div class="form-group">
                    <label style="margin-left: 5%; margin-top:20%; width:60%;" for="InputName">Add Food Item </label> <!-- height:230px;-->
                    <input style="margin-left: 5%; width:60%;" type="string" class="form-control" id="ItemName" name="ItemName" placeholder="New Food Item"><!-- height:230px;-->
                </div>


                <div class="form-group">
                    <label style="margin-left: 5%; width:60%;" for="InputName">Price</label>
                    <!--height230px;-->
                    <input style="margin-left: 5%; width:60%;" type="string" class="form-control" id="Price" name="Price" placeholder="Price">
                    <!--height230px;-->
                </div>


                <div class="form-group">
                    <label style="margin-left: 5%; width:60%; " for="InputName">Discount</label>
                    <!--height230px;-->
                    <input style="margin-left: 5%; width:60%; " type="string" class="form-control" id="Discount" name="Discount" placeholder="Discount">
                    <!--height230px;-->
                </div>

                <div class="form-group">
                    <label style="margin-left: 5%; width:60%; " for="InputName">Upload Item Image</label>
                    <!--height230px;-->
                    <input style="margin-left: 5%;" type="file" name="fileToUpload" id="fileToUpload">
                    <!--height230px;-->
                </div>
        </section>
        <section id="button">
            <div>
                <button style="margin-left: 50%; float:none" type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
            </div>
        </section>
    </form>

</body>

</html>
<?php
}
?>