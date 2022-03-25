<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('location:../../Signinout/login.php');
} else {
?>

  <html>

  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>

  <script>
    function Validate() {
      //if (document.forms["MyForm"][""].value == "")
      if (document.MyForm.catdesc.value == "")
      {
        alert("Username required");
        document.MyForm.catdesc.focus();
        return false;
      }
    }
  </script>
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
    <center>
      <form name="MyForm" Action="SaveCategory.php" onsubmit="return Validate()" method="post"enctype="multipart/form-data">
        <div class="form-group">
          <label style="margin-top:5%;" for="InputName">Add New Food Category </label>
          <input style="width:300px; " type="string" class="form-control" id="catdesc" name="catdesc" placeholder="New Food Category"> 
        </div><br>
        <div class="form-group">
          <label for="InputName">Upload Category Image</label><br>
          <input style="margin-left:50px;" type="file" name="catimgupload" id="catimgupload">
        </div><br>
        <div>
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </center>
  </body>

  </html>
<?php
}
?>