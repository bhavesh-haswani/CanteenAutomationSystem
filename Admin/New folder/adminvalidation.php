<?php
    session_start();
    $server="127.0.0.1:3308";
    $username="root";
    $password="";
    $database="canteen_db";

    $conn=mysqli_connect($server,$username,$password,$database);

    if(!$conn)  //bh
    {die("Connection Failed:" .mysqli_connect_error());
    }

    if(isset($_POST['submit']))
    {
        $name=$_POST['nm'];
        $password=$_POST['pw'];
        if($name==""||$password==""){}  // it will be validated under script in adminlogin.php
        else{
            $s="Select * from admin where username= '$name'  && password='$password'";
            $result=mysqli_query($conn,$s);
            $num=mysqli_num_rows($result);
            if ($num == 1){
                $_SESSION['username']=$name;
                
                echo "<script>alert('Welcome ".$_SESSION['username']."');
                    location='../Admin/admin.php';
                    </script>";
                // header('location:../Admin/admin.php');
            }
            else{
                    
                    //echo "<script>alert('Username and password don't match!!Try Again!');</script>";
                    //header('location:../Admin/adminlogin.php');
                    echo "<script type='text/javascript'>alert('Incorrect Username or Password! Try Again!');
                    location.href='../Admin/adminlogin.php';
                    </script>";
                
            }
        }    
    }
?>