<?php
session_start();
if (!isset($_SESSION['username'])) {
  header('location:../Signinout/login.php');
} else {
      
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FEEDBACK | CANTEEN</title>
	<script>
		function validateForm() //commented temporarily ShowAlert()
		{
			//alert("FeedBack Received");
			var mob = document.forms["FeedbackForm"]["phone"].value;
			var MobVal = /^[6-9]\d{9}$/;
			//if (document.forms["FeedbackForm"]["phone"].value == "") {				
			if(mob != "")
			{
				if (!MobVal.test(mob))
				{
					alert("Invalid Contact Number!");
					document.forms["FeedbackForm"]["phone"].focus();
					return false;
				}
			}
			/*
			alert("");
			documemt.MyForm.nm.focus();
			return false;*/
			//}
		}
	</script>
	<style>
		.red-star {
			color: rgb(255, 0, 0);
		}

		.optional {
			color: rgb(185, 185, 185);
		}

		html,
		body {
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
		}

		header {
			padding-top: 2px;
			padding-bottom: 2px;
			min-height: 80px;
			background-color: #0d98ba;

			text-align: inline;
		}

		header a {
			text-decoration: none;
			color: white;

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

		header nav a:hover {
			background-color: rgb(109, 109, 187);
			/*grey*/
			padding: 10px 10px 10px 10px;
		}

		header ul {
			padding: 0;
		}

		header #branding {
			float: left;
			margin-top: 30px;
			margin-left: 20px;
		}

		header #branding h2 {
			margin: 0;
			display: inline;
			white-space: nowrap;
		}


		.container {
			overflow: hidden;
		}

		branding.h2 {
			display: inline-block;

		}


		#file ul li {
			display: inline;
			padding: 0px 5px 0px 5px;
		}

		#file ul {
			margin: 0;
		}

		#file {
			/*body #file*/
			margin: 0;
			margin-left: 8%;
			padding: 1px 0 1px 0;
			color: grey;
			/*background-color:rgb(241,245,247);*/
		}

		#file a {
			text-decoration: none;
			color: grey;
		}

		#form {
			padding-left: 1%;
		}

		#guidelines {
			float: right;
			margin-right: 20%;
			width: 25%;
			background-color: lightgrey;
			padding-left: 10px;
			position: relative;
			bottom: 90px;
			right: -10%;
		}

		#formdata {
			padding-top: 2%;
			background: white;
			text-align: left;
			margin: auto;
			width: 80%;
			padding-bottom: 7.8%;

		}

		#formbg {
			padding-top: 0%;
			background-color: rgb(241, 245, 247);
			background-position: auto;
			background-size: 100% 100%;

		}

		.button {
			background: #0d98ba;
			border: 1px solid blue;
			/**/
			width: 10%;
			color: black;
			/*000*/
			font-size: 18px;
			margin: auto;
			margin-bottom: 10px;
		}

		.button:hover {
			background: rgb(109, 109, 187);
			/*border: 1px solid #16d312;		/*green border*/
			color: black;
		}

		/* #footer{
			/*background-color: grey;*/
		/* position: fixed
   			left: 0;
			bottom: 0;
			width: 100%;
			background-color: #282C35;
			color: white;
			text-align: center; */
		/*float:bottom;
		}*/
	</style>

</head>

<body>
	<header>
		<div class="container">
			<div id="branding">
				<h2><a href="../index.html">Canteen Automation System</a></h2>
			</div>
			<nav>
				<ul>
					<li><a href="../Customer_Page/customerpageHTML.php">back</a>
					<li><a href="../Signinout/logout.php">Log out</a></li>
					<!-- <li><a href="../Signinout/register.php">Create an account</a></li> -->
				</ul>
			</nav>
		</div>
	</header>
	<section id="formbg">
		<section id="file">
			<!-- <a href="HomePage.html"><button class="button">LogOut</button></div></a><br> -->
			<ul>
				<li><a href="../index.html">Home </a></li>
				<li>&gt;</li>
				<li><a href="../Feedback/feedback.html">Feedback</a></li>
			</ul>
		</section>

		<section id="formdata">
			<section id="form">
				<h2>Tell us what you think about Canteen</h2>
				<!-- This is just for testing but don't forget which things you're going to consider email or username or... -->
				<form name="FeedbackForm" action="c_feedback.php" onsubmit="return validateForm()" method="post">
					<!-- onsubmit="return validateForm()"-->
					<p>Name<span class="red-star">*</span> <br> <input type="text" size="100%" name="name" value=""
							required></p>
					<p>Email<span class="red-star">*</span> <br><input type="email" size="100%" name="email" value=""
							required></p>
					<!-- <p>Username<sup><span class="optional">(optional)</span></sup> <br> <input type="text" size="100%" name="username" value=""
						required></p> -->
					<p>Phone<sup><span class="optional">(optional)</span></sup> <br> <input type="text" size="100%"
							name="phone" value=""></p>
					<p>Message<span class="red-star">*</span> <br> <textarea type="text" name="message" cols="90"
							rows="10" style="height:108px;" value="" required></textarea></p> <!-- ??? -->
					<!-- <textarea name="" id="" cols="30" rows="10"></textarea> -->
					<input type="submit" name="submit" class="button" value="Submit" onclick="ShowAlert()">
					<input type="reset" class="button" value="Clear">
				</form>
			</section>

			<section id="guidelines">
				<h2>Guidelines</h2>
				<p>Please be brutal and tell us more of what we suck at, than what we are good at.</p>
			</section>
		</section>
	</section>

	<!-- <section id="footer">
	<footer>
		<a href>Contact Us</a>
		<a href>&copy; 2021 | Canteen</a>
		<a href></a>
		<a href></a>
	</footer>
	</section> -->
</body>

</html>
<?php
} ?>