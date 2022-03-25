<html>

<head>

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript">
    function Validate() {


      if (document.MyForm.nm.value == "") {
        alert("Name is required!");
        documemt.MyForm.nm.focus();
        return false;
      } else if (document.MyForm.pw.value == "") {
        alert("Password required!");
        document.MyForm.pw.focus();
        return false;
      } /*else {
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
      background: rgba(255, 0, 0, 0.4);
      padding: 30px;
      font-size: 30px;
      color: #FFFF33;
      margin-top: 60px;
      margin-left: 20%;
      font-family: Lucida Handwriting;



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
  </style>
  <title>Admin page</title>
</head>

<body class="bg">
  <!-- <div><a href="HomePage.html"><button class="logout">Back</button></a> </div> -->
  <!-- style="align:right;" -->
  <div class="container">
    <div class="login">
      <div class="row">
        <div class="login-right">
          <h2 style="font-family:Lucida Handwriting;font-size: 40px;font-weight: bold;">LOGIN</h2>
          <form name="MyForm" action="adminvalidation.php" method="post" onsubmit="return(Validate());">
            <div class="form-group">
              <label style="margin-top:20px;" for="nm" class="form-label"><b>Username</b></label>
              <input style="border-radius:10px;" name="nm" type="text" class="form-control" id="name">
            </div>
            <div class="form-group">
              <label style="margin-top:20px;" for="pw" class="form-label"><b>Password</b></label>
              <input style="border-radius:10px;" name="pw" type="password" class="form-control" id="pw">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Log in</button> <!--name="submit" -->



          </form>

        </div>
      </div>
    </div>
</body>

</html>