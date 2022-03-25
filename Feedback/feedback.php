<?php
session_start();
$server="127.0.0.1:3308";
$username="root";
$password="";
$database="canteen_db";

$conn=mysqli_connect($server, $username, $password, $database);
if(!$conn)
{die("Connection Failed:" .mysqli_connect_error());
}

if(isset($_POST['submit']))
{
	$name= $_POST['name'];
	$email= $_POST['email'];
	$phone= $_POST['phone'];
	$message= $_POST['message'];
		
	$sql_query = "INSERT INTO feedback(name,email,phone,message) VALUES('$name','$email','$phone','$message')";
	
	if(mysqli_query($conn, $sql_query))
	{
		/*echo "<script>alert('New deatails entered successfully!');</script>";
		header('location:feedback.html');*/
		echo "<script type='text/javascript'>alert('New deatails entered successfully!');
            location.href='../Feedback/feedback.html';
            </script>";
	}
	else
	{
		//echo "Error:" .$sql. "" .mysqli_error($conn);
		echo "<script type='text/javascript'>alert('Error');
            location.href='../Feedback/feedback.html';
            </script>";
	}
	mysqli_close($conn);
}
?>