<HTML>

<head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script>
            $(document).ready(function() {
                  $("button").click(function() {
                        var dataId = $(this).attr("id");

                        $.post("DisplayItems.php", {
                              suggest: dataId
                        }, function(result) {
                              $("#contents").html(result);
                        });
                  });

                  $("#place_order").click(function() {
                        $.post("placeorder.php", {
                              suggest:3
                        }, function(result) {
                              $("#contents").html(result);
                        });
                  });
            });
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



		header li a:hover{
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
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<BODY>
      <header>
		<div class="container">
			<div id="branding">
				<h2><a href="../index.html">Canteen Automation System</a></h2>
			</div>
			<nav style="margin-top:10px; margin-right:-18%">
				<ul>
                              <!-- <li><a style="text-decoration:none;" href="placeorder.php" id="place_order">Place Order</a></li> -->
					<li><a style="text-decoration:none;" href="../Signinout/login.php">Log in</a></li>
					<li><a style="text-decoration:none; margin-right:-50px;" href="../">back</a></li>
                              
					<!-- <li><a style="text-decoration:none; " href="../Signinout/register.php">Create an account</a></li> -->
                        </ul>
			</nav>
		</div>
	</header>
     <!-- <div class="container" style="background-color:FFFAFA;">  //style="background-color:#E6D3F2;" -->
        <!--    <div class="row" style="height: 5%; background-color:FFFAFA; padding:40px;"> // #D193F7-->
            <!--      <div class="col-12"></div>

            </div> -->
            <!--<div class="row" style="height: 5%;background-color:#480673; color:#ffffff;">
                  <div class="col-8">
                        <h3>Canteen Auromation System</h3>
                  </div>
                  <div class="col-2"><a href="placeorder.php" id="place_order">Place Order</a></div>
                  <div class="col-2"><a href="../Signinout/logout.php">Log Out </a></div>
            </div>-->

            <div class="row" style="width: 100%; margin-left:5%;">

                  <div class="shadow-sm p-3 mb-5 bg-white rounded" style="margin-top:0px">
                        <div class="col-4" style="background-color:#ffffff; padding:40px; border-color:#230237; margin:20px;"></div>
                        <?php
                        $con = mysqli_connect("127.0.0.1:3308", "root", "", "canteen_db");
                        $qry = "select * from menucategory";
                        $run = mysqli_query($con, $qry);
                        while ($rows = mysqli_fetch_array($run)) {

                              echo '<button id=' . $rows['category'] . '><img src="../Admin/Admin_functions/cati_uploads/' . $rows['CatImg'] . '" width="100px" height="100px"></button><br><blockquote class="blockquote ">' . $rows['catdesc'] . '</blockquote><br>';//width="100px" height="100px" category catdesc text-center
                        }
                        ?>
                  </div>

                  <!-- <div class="col-8 shadow p-9 mb-5 bg-white rounded"> -->
                  <div class="col-8 shadow p-9 mb-5 bg-white rounded" style="margin-top:0px;margin-left:5%; width:100%;">
                        <div id="contents" style="width:80%; background-color:#ffffff; padding:90px; margin:0px;">
                              <div class="card-columns" style="width:600px" >
                                    <?php
                                    //$i = 1;
                                    $qry = 'select * from menuitems';
                                    $run = mysqli_query($con, $qry);
                                    while ($rows = mysqli_fetch_array($run)) {

                                          echo '<div class="card" >';
                                          echo '<img class="card-img-top" src="../Admin/Admin_functions/img_uploads/'.$rows['ItemImg'].'" height="150px" width="150px"  alt="' . $rows['ItemName'] . '" >'; // height="120px" width="400px alt="' . $rows['ItemName'] . '" >';
                                          echo '<div class="card-body">';
                                          echo '<p class="card-text">' . $rows['ItemName'] . '</p>';
                                          echo '<p class="card-text">Rs ' . $rows['Price'] . '</p>';
                                          $key = $rows["MenuItemID"];
                                          // echo "<a href='AddToCart.php?ItemID=$key'><button type='button' class='btn btn-primary'>Buy</button></a>";
                                          echo "<a href='../Signinout/login.php'><button type='button' class='btn btn-primary'>Buy</button></a>";
                                          echo '</div></div>';

                                          //$i++;
                                    }
                                    ?>

                              </div>

                        </div>
                  </div>
            </div>
      </div>
</BODY>

</HTML>
