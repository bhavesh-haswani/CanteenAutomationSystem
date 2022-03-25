<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('location:../Signinout/login.php');
} else {
?>
  <html>

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <b>
      <title>Customer Page</title>
    </b>
    <style>
      .bg {
        /* The image used */
        background-image: url("https://i.pinimg.com/originals/ae/67/f8/ae67f8dfb7d0438a88cc55a5cad5c448.jpg");

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

      .logout {
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
    </style>


  </head>

  <body style class="bg">

    <div><a href="../Signinout/logout.php"><button class="logout">Logout</button></a> </div>
    <!--style="align:right;" may6,11:22pm -->
    <div>
      <h1 class="h1">Welcome To Our Canteen</h1>
    </div>
    <!--<div>
      <a href="../Menu/MenuPageHTML.php"><button class="btn">View Menu</button>
    </div></a><br/>
    <div>-->
    <a href="../Customer_Page/DisplayHistory.php">  <button class="btn">View History</button>
    </div><br/>
    <div>
      <a href="../Customer_Page/dashboard.php"><button class="btn">View Menu</button></a>
    </div><br/>
    <div>
      <a href="../Customer_Page/c_feedbackHTML.php"><button class="btn">Feedback</button></a>
    </div><br/>
    
    </div>
  </body>

  </html>
<?php
} ?>