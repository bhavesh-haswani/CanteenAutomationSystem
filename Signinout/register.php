<html>

<head>

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="styleregister.css">
  <script type="text/javascript">
    function Validate(){/*      
      if (document.MyForm.nm.value == "") {
        alert("Name is required!");
        documemt.MyForm.nm.focus();
        return false;
      } else if (document.MyForm.em.value == "") {
        alert("Email Id is required!");
        document.MyForm.em.focus();
        return false;
      } else if (document.MyForm.pw.value == "") {
        alert("Password required!");
        document.MyForm.pw.focus();
        return false;
      } else if (document.MyForm.cpassword.value == "") {
        alert("Confirm Password required!");
        document.MyForm.cpassword.focus();
        return false;
      } /*else {
        alert("Details stored in database");
      }*/
      if (document.MyForm.nm.value == "")
      {
        alert("Username required");
        document.MyForm.nm.focus();
        return false;
      }
      else if (document.MyForm.em.value == "")
      {
        alert("Email required!");
        document.MyForm.em.focus();
        return false;
      }
      else if (document.MyForm.pw.value == "")
      {
        alert("Password required!");
        document.MyForm.pw.focus();
        return false;
      }
      else if(document.MyForm.cpassword.value == "")
      {
        alert("Confirm Password required!");
        document.MyForm.cpassword.focus();
        return false;
      }

      if(document.MyForm.pw.value != document.MyForm.cpassword.value)
      {
        alert("Passwords don't match!");
        document.MyForm.cpassword.focus();
        return false;
      }

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

    .login-left {
      background: rgba(0,0,0, 0.5);
      padding: 30px;
      font-size: 20px;
      color: #FFFF33;
      margin-top: 5px;
      margin-left: 30%;
      font-family: Lucida Handwriting;
    }

    .logoutt {
      width: 15%;
      height: 25px;
      background-color: white;
      font-family: Lucida Handwriting;
      border-style: solid;
      border-width: medium;
      font-size: 10px;
    }

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
  <title> registration Page</title>
</head>

<body class="bg">
  <!-- <div><a style="align:right;" href="HomePage.html"><button class="logoutt">LogOut</button></a>  </div> -->
  <div><a href="../" class="home">&laquo; HOME</a></div>
  <div class="container">
    <div class="login">
      <div class="row">
        <div class="login-left">
          <h2 style="font-family:Lucida Handwriting;font-size: 30px;font-weight: bold;">SIGN IN</h2>
          <form name="MyForm" action="registration.php" onsubmit="return Validate()" method="post">
            <div class="form-group">
              <label style="margin-top:20px;" for="nm" class="form-label"><b>Username</b></label>
              <input style="border-radius:10px; color:white;" name="nm" type="text" class="form-control" id="name">
            </div>
            <div class="form-group">
              <label style="margin-top:20px;" for="em" class="form-label"><b>Email</b></label>
              <input style="border-radius:10px; color:white;" name="em" type="email" class="form-control" id="em">
            </div>
            <div class="form-group">
              <label style="margin-top:20px;" for="pw" class="form-label"><b>Password</b></label>
              <input style="border-radius:10px; color:white;" name="pw" type="password" class="form-control" id="pw">
            </div>
            <div class="form-group">
              <label for="cpassword" class="col-sm-2 col-form-label"><b>Confirm Password</b></label>
              <input style="border-radius:10px; color:white;" name="cpassword" type="password" class="form-control" id="cpassword">
            </div>
            <button type="submit" name="submit" id="submit" class="btn btn-primary">Create Account</button>
            <a href="../Signinout/login.php" id="submit" class="btn btn-primary">Login</a>
          </form>
        </div>


      </div>
    </div>
  </div>
</body>

</html>