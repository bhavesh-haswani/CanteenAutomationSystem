<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('location:../Signinout/login.php');
} else {
      
?>
<HTML>

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#newCat").click(function() {
        $("#contents").load("AddCategory.html");
      });
      $("#newItem").click(function() {
        $("#contents").load("AddMenuItem.php");
      });
      $("#DelItem").click(function() {
        $("#contents").load("DeleteMenuItem.php");
      });
      $("#DelCat").click(function() {
        $("#contents").load("DeleteCat.php");
      });
      $("#ModifyItem").click(function() {
        $("#contents").load("ModifyItem.php");
      });

    });
  </script>
  <style>
    .bg {
      /* The image used */
      background-image: url("https://i.pinimg.com/originals/65/ff/54/65ff54f76c7e718b395b47e8cc5903b3.jpg");

      /* Full height */
      height: 50%;

      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .h1 {
      margin-top: 60px;
      margin-left: 20%;
      font-size: 50px;

    }

    .h2 {
      margin-top: 20px;
      margin-left: 5%;
      font-size: 30px;
      color: yellow;
    }

    .btn {
      width: 15%;
      height: 50px;
      background-color: white;
      margin-top: 20px;
      margin-left: 30%;
      font-family: Lucida Handwriting;
      border-style: solid;
      border-width: medium;
      font-size: 25px;
    }

    .logoutt {
      width: 15%;
      height: 50px;
      background-color: white;
      font-family: Lucida Handwriting;
      border-style: solid;
      border-width: medium;
      font-size: 25px;
    }

    .btn:active {
      background-color: light green;
      box-shadow: 0 5px #666;
      transform: translateY(4px);
    }

    #logout a{
     padding: 10px 10px 10px 10px;
     
      
    }

    #logout a:hover {
			background-color: rgb(109, 109, 187);
			/*grey*/
			padding: 10px 10px 10px 10px;
      text-decoration: none;
      color:aliceblue;
		}

  </style>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<BODY class=bg>
  <div class="container" style="background-color:#E6D3F2;">


    <div class="row"><br>
      <div class="h2">
        <h3>Canteen Automation System</h3>
      </div>
      <div id="logout">
      <a style="text-decoration: none; margin-left:600px; margin-top:20px;" href="../Signinout/logout.php">Log out</a>
      </div>
    </div>


    <div class="row" style="margin:30px;">
      <div>
        <div class="col-4"></div>
        <ul class="list-group">
          <div class="list-group-item list-group-item-info"><a id="newCat" href="../Admin/Admin_functions/categoryHTML.php"> Create a Food Category</a></div><br>
          <div class="list-group-item list-group-item-info"><a id="newItem" href="../Admin/Admin_functions/Add.php"> Add a Food Item</a></div><br>
          <!-- <div class="list-group-item list-group-item-info"><a id="DelItem" href="../Admin/Admin_functions/Delete.php"> Delete a Food Item</a></div><br> -->
          <div class="list-group-item list-group-item-info"><a id="DelCat" href="../Admin/Admin_functions/delete.php"> Delete a Food Category</a></div><br>
          <div class="list-group-item list-group-item-info"><a id="ModifyItem" href="../Admin/Admin_functions/modify.php"> Modify a Food Item</a></div><br>
      </div>



    </div>
  </div>


</BODY>

</HTML>
<?php
} ?>