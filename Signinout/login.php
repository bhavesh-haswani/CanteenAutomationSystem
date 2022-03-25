<!-- php code
  /*include('validation.php');
  if($GLOBALS['num']==1){
    echo "<script>alert('LOGIN Sucessfull');</script>";
    header('location:../Customer_Page/customerpageHTML.php');
  }
  elseif($GLOBALS['num']==0){
    echo "<script>alert('Incorrect Username or Password');</script>";
    header('location:../Signinout/login.php'); 
  }*/
  -->

<?php

/*if (!isset($_SESSION['username'])) {
  header('location:../index.html');
  exit;
}*/
?>
<html>

<head>

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <!-- <link rel="stylesheet" type="text/css" href="../Signinout/style.css"> -->
  <script>
    function Validate() {
      //if (document.MyForm.nm.value == "") 
      /*if(document.forms["MyForm"]["nm"].value == "")
      {
        alert("Username required!");
        documemt.forms["MyForm"]["nm"].focus();
        return false;
      }*/
      if (document.MyForm.nm.value == "")
      {
        alert("Username required");
        document.MyForm.nm.focus();
        return false;
      }
      else if (document.MyForm.pw.value == "")
      {
        alert("Password required!");
        document.MyForm.pw.focus();
        return false;
      }
      /* else {
              alert("LOGIN Sucessfully");
            }*/
    }
  </script>

  <style>
    .bg {
      /* The image used */
      background-image: url("https://images.squarespace-cdn.com/content/v1/56f2595e8a65e2db95a7d983/1519894692858-J1WLVBLKQWVN1Y4YZRP5/ke17ZwdGBToddI8pDm48kFsw573RO41Ol_Ft5tAhZtFZw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZUJFbgE-7XRK3dMEBRBhUpzIMdfDuIJpVfRIIYGqYiHK_Bw-i0jvO93AaQtNb5z-Pz-fpiE7R5_mfPW2eUZTRU8/Workplace+Canteens+%285%29.jpg");

      /* Full height */
      height: 50%;

      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }

    .login-right {
      background: rgba(0,0,0, 0.5);
      padding: 30px;
      font-size: 30px;
      color: #FFFF33;
      margin-top: 120px;
      margin-left: 30%;
      font-family: Lucida Handwriting;
    }

    /*.logout {
      width: 15%;
      height: 50px;
      background-color: white;
      font-family: Lucida Handwriting;
      border-style: solid;
      border-width: medium;
      font-size: 25px;
    }*/

    a {
      text-decoration: none;
      display: inline-block;
      padding: 8px 16px;
    }

    a:hover {
      text-decoration: none;
      background-color: #ddd;
      color: black;
    }


    .home {
      background-color: #04AA6D;
      color: white;
    }
  </style>
  <title>User login Page</title>
</head>

<body class="bg">
  <!-- <div><a href="HomePage.html"><button class="logout">Back</button></a> </div> -->
  <!--style="align:right;" may6,8:58PM-->
  <div><a href="../" class="home">&laquo; HOME</a></div>
  <div class="container">
    <div class="login">
      <div class="row">
        <div class="login-right">
          <h2 style="font-family:Lucida Handwriting;font-size: 40px;font-weight: bold;">LOGIN</h2>
          <form name="MyForm" action="validation.php" onsubmit="return Validate()" method="post">
            <div class="form-group">
              <label style="margin-top:20px;" for="nm" class="form-label"><b>Username</b></label>
              <input style="border-radius:10px; color:white;" name="nm" type="text" class="form-control" id="name">
            </div>
            <div class="form-group">
              <label style="margin-top:20px;" for="pw" class="form-label"><b>Password</b></label>
              <input style="border-radius:10px; color:white;" name="pw" type="password" class="form-control" id="pw">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Log in</button>
            <!--name="submit" -->
            <a href="../Signinout/register.php" class="btn btn-primary">Sign-Up</a>
          </form>

        </div>
      </div>
    </div>
</body>

</html>