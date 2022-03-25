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
        $email=$_POST['em'];
        $password=$_POST['pw'];

            /*$s="Select * from usertable where username= '$name'  && email= '$email' && password='$password' ";
            $result=mysqli_query($conn,$s);
            $num=mysqli_num_rows($result);
            if ($num==1){
                $_SESSION['username']=$name;
                header('location:register.php');
            }else{
                $reg="insert into usertable(username,email,password) values ('$name','$email','$password')";
                mysqli_query($conn,$reg);
                $_SESSION['username']=$name;
                header('location:login.php');
            }*/

        $s="Select * from usertable where username= '$name' ";
        $result=mysqli_query($conn,$s);
        $num=mysqli_num_rows($result);
        $x="Select * from usertable where email= '$email'";
        $resultx=mysqli_query($conn,$x);
        $numx=mysqli_num_rows($resultx);
        $y="Select * from usertable where username= '$name' && email= '$email'";
        $resulty=mysqli_query($conn,$y);
        $numy=mysqli_num_rows($resulty);
        
        if($numy>0){
            /*echo  "This Email and Username are already registered<br/>
            Please use different Username and Email to create account";*/
            echo "<script type='text/javascript'>alert('Email and Username already registered');
            location.href='../Signinout/register.php';
            </script>";
            
        }elseif ($num>0){
            //echo  "Username Already Taken";
            echo "<script type='text/javascript'>alert('Username Already Taken');
            location.href='../Signinout/register.php';
            </script>";
        }elseif($numx>0){
            //echo  "This Email is connected to other Username";
            echo "<script type='text/javascript'>alert('This Email is connected to other Username');
            location.href='../Signinout/register.php';
            </script>";
        }

        else{
            $reg="insert into usertable(username,email,password,utype) values ('$name','$email','$password','user')";
            
            //$_SESSION['username']=$name;
            //header('location:login.php');
            if(mysqli_query($conn,$reg)==true){
            echo "<script type='text/javascript'>alert('Account Created');
            location.href='../Signinout/login.php';
            </script>";
            }
            else{
                echo "<script type='text/javascript'>alert('oops something went wrong! please try again');
            location.href='../Signinout/register.php';
            </script>";
            }
        }
    }
?>